<?php

/**
 * This is the model class for table "tbl_book_service".
 *
 * The followings are the available columns in table 'tbl_book_service':
 * @property integer $id
 * @property string $airport
 * @property string $date
 * @property string $flight_time
 * @property string $name
 * @property string $add1
 * @property string $add2
 * @property string $add3
 * @property string $city
 * @property string $province
 * @property string $country
 * @property string $post_code
 * @property string $email
 * @property string $contact_num
 * @property string $type
 * @property string $contact_num_2
 * @property string $flight_number
 * @property integer $size
 */
class BookService extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_book_service';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('size', 'numerical', 'integerOnly'=>true),
			array('airport, date, flight_time, name, add1, add2, add3, city, province, country, post_code, email, contact_num, type, contact_num_2, flight_number', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, airport, date, flight_time, name, add1, add2, add3, city, province, country, post_code, email, contact_num, type, contact_num_2, flight_number, size', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'airport' => 'Airport',
			'date' => 'Date',
			'flight_time' => 'Flight Time',
			'name' => 'Name',
			'add1' => 'Add1',
			'add2' => 'Add2',
			'add3' => 'Add3',
			'city' => 'City',
			'province' => 'Province',
			'country' => 'Country',
			'post_code' => 'Post Code',
			'email' => 'Email',
			'contact_num' => 'Contact Num',
			'type' => 'Type',
			'contact_num_2' => 'Contact Num 2',
			'flight_number' => 'Flight Number',
			'size' => 'Size',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('airport',$this->airport,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('flight_time',$this->flight_time,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('add1',$this->add1,true);
		$criteria->compare('add2',$this->add2,true);
		$criteria->compare('add3',$this->add3,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('province',$this->province,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('post_code',$this->post_code,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('contact_num',$this->contact_num,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('contact_num_2',$this->contact_num_2,true);
		$criteria->compare('flight_number',$this->flight_number,true);
		$criteria->compare('size',$this->size);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return BookService the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
