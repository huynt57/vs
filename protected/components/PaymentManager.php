<?php
class PaymentManager extends CApplicationComponent
{
	var $customer = null;
	var $application = null;
	var $location = null;

	// config
	public function init()
	{

	}

	public function setCustomer($customer)
	{
		$this->customer = $customer;
	}

	public function setApplication($application)
	{
		$this->application = $application;
	}

	public function setLocation($location,$setApplicationAndCustomer=false)
	{
		$this->location = $location;
		if($setApplicationAndCustomer){
			$this->setApplication($location->getApplication());
			$this->setCustomer($location->getCustomer());
		};
	}

	public function getSetupFee()
	{
		$total = 0;
		if($this->application==null){
			return 0;
		};
		switch($this->application->style)
		{
			case Util::param("APPLICATION_STYLE_TYPE_BOOKSHELF"):
				$total += Util::param("APPLICATION_STYLE_BOOKSHELF_FEE");
				break;
			case Util::param("APPLICATION_STYLE_TYPE_METRO"):
				$total += Util::param("APPLICATION_STYLE_METRO_FEE");
				break;
			case Util::param("APPLICATION_STYLE_TYPE_CUSTOM"):
				$total += Util::param("APPLICATION_STYLE_CUSTOM_FEE");
				break;
		}

		switch($this->application->device_type) 
		{
			case Util::param("APPLICATION_DEVICE_TYPE_IPAD"):
				$total += Util::param("APPLICATION_DEVICE_IPAD_FEE");
				break;
			case Util::param("APPLICATION_DEVICE_TYPE_ANDROID"):
				$total += Util::param("APPLICATION_DEVICE_ANDROID_FEE");
				break;
			case Util::param("APPLICATION_DEVICE_TYPE_BOTH"):
				$total += Util::param("APPLICATION_DEVICE_BOTH_FEE");
				break;
		}

		switch($this->application->upload_type)
		{
			case Util::param("APPLICATION_UPLOAD_TYPE_SELF"):
				$total += Util::param("APPLICATION_UPLOAD_SELF_FEE");
				break;
			case Util::param("APPLICATION_UPLOAD_TYPE_CLIENT_ACCOUNT"):
				$total += Util::param("APPLICATION_UPLOAD_CLIENT_ACCOUNT_FEE");
				break;
			case Util::param("APPLICATION_UPLOAD_TYPE_COMPENDIUMHQ_ACCOUNT"):
				$total += Util::param("APPLICATION_UPLOAD_COMPENDIUMHQ_ACCOUNT_FEE");
				break;
		}
		return $total;
	}

	public function getSetupFeeAfterTax($setUpFee=false)
	{
		if($setUpFee===false)
			$setUpFee = $this->getSetupFee();
		return $setUpFee * (1 + $this->getTax()/100);
	}

	public function getMonthly()
	{
		$monthly = 0;
		if($this->application==null)
			return 0;
		switch($this->application->plan)
		{
			case Util::param("CUSTOMER_PLAN_TYPE_BASIC"):
				$monthly += Util::param("APPLICATION_PLAN_BASIC_FEE") * $this->application->num_device;
				break;
			case Util::param("CUSTOMER_PLAN_TYPE_PREMIUM"):
				$monthly += Util::param("APPLICATION_PLAN_PREMIUM_FEE") * $this->application->num_device;
				break;
		}
		return $monthly;
	}

	public function getMonthlyAfterDiscount($monthlyFee=false)
	{
		if($monthlyFee===false)
			$monthlyFee = $this->getMonthly();
		return $monthlyFee * (1 - $this->getDiscount()/100);
	}

	public function getMonthlyAfterTax($monthlyFeeAfterDiscount=false)
	{
		if($monthlyFeeAfterDiscount===false)
			$monthlyFeeAfterDiscount = $this->getMonthlyAfterDiscount();
		return $monthlyFeeAfterDiscount * (1 + $this->getTax()/100);
	}

	public function getDiscount()
	{
		if($this->application==null)
			return 0;
		$discount = 0;
		if($this->application->plan_payment_schedule==Util::param("CUSTOMER_PLAN_PAYMENT_SCHEDULE_TYPE_ANNUALLY"))
		{
			$discount = Util::param("APPLICATION_PLAN_PAYMENT_SHCEDULE_ANNUALLY_REDUCE_PERCENT");
		}
		return $discount;
	}

	public function getTax()
	{
		$tax = 0;
		if($this->fromNZ())
		{	
			$tax = Util::param("APPLICATION_PLAN_TAX_IN_NZ");
		}
		return $tax;
	}

	public function displayTax()
	{
		return $this->fromNZ();
	}

	protected function fromNZ()
	{
		if($this->location==null)
			return false;
		return $this->location->isFromNZ();
	}
}