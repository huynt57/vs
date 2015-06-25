<?php

/**
 * This is the model class for table "tbl_payment".
 *
 * The followings are the available columns in table 'tbl_payment':
 * @property integer $id
 * @property integer $customer_id
 * @property integer $transaction_id
 * @property string $card_type
 * @property integer $amount
 * @property string $order_time
 * @property string $receipt_time
 * @property string $request_ip
 * @property string $session_id
 * @property string $card_number
 * @property integer $merchant_ref
 * @property integer $error_code
 * @property integer $invoice_id
 */
class Payment extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_payment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('customer_id, transaction_id, amount, merchant_ref, error_code, invoice_id', 'numerical', 'integerOnly'=>true),
			array('card_type, order_time, receipt_time, request_ip, session_id, card_number', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, customer_id, transaction_id, card_type, amount, order_time, receipt_time, request_ip, session_id, card_number, merchant_ref, error_code, invoice_id', 'safe', 'on'=>'search'),
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
			'customer_id' => 'Customer',
			'transaction_id' => 'Transaction',
			'card_type' => 'Card Type',
			'amount' => 'Amount',
			'order_time' => 'Order Time',
			'receipt_time' => 'Receipt Time',
			'request_ip' => 'Request Ip',
			'session_id' => 'Session',
			'card_number' => 'Card Number',
			'merchant_ref' => 'Merchant Ref',
			'error_code' => 'Error Code',
			'invoice_id' => 'Invoice',
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
		$criteria->compare('customer_id',$this->customer_id);
		$criteria->compare('transaction_id',$this->transaction_id);
		$criteria->compare('card_type',$this->card_type,true);
		$criteria->compare('amount',$this->amount);
		$criteria->compare('order_time',$this->order_time,true);
		$criteria->compare('receipt_time',$this->receipt_time,true);
		$criteria->compare('request_ip',$this->request_ip,true);
		$criteria->compare('session_id',$this->session_id,true);
		$criteria->compare('card_number',$this->card_number,true);
		$criteria->compare('merchant_ref',$this->merchant_ref);
		$criteria->compare('error_code',$this->error_code);
		$criteria->compare('invoice_id',$this->invoice_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Payment the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
