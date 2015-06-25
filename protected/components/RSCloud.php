<?php
class RSCloud extends CApplicationComponent
{
	// config
	/*var $username = "appusnz";
	var $apiKey = "c95410719dc89451cf3e1a2226e22d67";
	var $container = "comhq";
	var $container_region = "DFW";//"dallas";*/
	//
	var $_uploadImported = false;
	var $cloudContainer = null;
	public function init()
	{

	}
	protected function checkLogin()
	{
		if(!$this->_uploadImported)
		{	
			$setting = Yii::app()->params["accounts"]["rackspace"];
			require_once "OpenCloud/vendor/autoload.php";
			$client = new OpenCloud\Rackspace(OpenCloud\Rackspace::US_IDENTITY_ENDPOINT, array(
			    'username' => $setting["username"],
			    'apiKey'   => $setting["apiKey"]
			));
			$ostore = $client->ObjectStoreService('cloudFiles', $setting["container_region"]);
			// now, connect to the ObjectStore service
			$this->cloudContainer = $ostore->getContainer($setting["container"]);
			$this->_uploadImported = true;
		}
	}
	protected function guid() {
		if(function_exists('com_create_guid') === true) {
			return trim(com_create_guid(), '{}');
		}
		return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535)) . '-' . md5(time());
		// md5 hash the time at the end for extra uniqueness
	}

	public function deleteObjectWithUrl($url){
		$cloudUploadLog = CloudUploadLog::model()->findByAttributes(array(
			"url" => $url
		));
		if($cloudUploadLog==null){
			return false;
		}
		return $this->deleteObjectWithName($cloudUploadLog->name);
	}

	public function deleteObjectWithName($name){
		$this->checkLogin();
		$obj = $this->cloudContainer->getObject($name);
		if(!$obj)
			return false;
		$obj->delete();
		return true;
	}

	public function storeUploadedFile($file,$ext){
		//return "//test//".$file."-".time().".".$ext; // TODO

		$this->checkLogin();
		$filename = strtolower($this->guid()) . "." . $ext;
		$obj = $this->cloudContainer->uploadObject($filename, fopen($file,"r+"));
		//
		$name = $obj->getName();
		$url = $obj->getPublicUrl();
		$cloudUploadLog = new CloudUploadLog();
		$cloudUploadLog->name = $name;
		$cloudUploadLog->url = $url;
		$cloudUploadLog->save();
		//
		return $url;
	}
}