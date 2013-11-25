<?php

/**
 * This is the model class for table "apns_messages".
 *
 * The followings are the available columns in table 'apns_messages':
 * @property string $pid
 * @property string $clientid
 * @property string $fk_device
 * @property string $message
 * @property string $delivery
 * @property string $status
 * @property string $create_time
 * @property string $create_user_id
 * @property string $update_time
 * @property string $update_user_id
 */
class ApnsMessages extends DTActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ApnsMessages the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'apns_messages';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fk_device, message, delivery, create_time, create_user_id, update_time, update_user_id', 'required'),
			
			array('fk_device, status', 'length', 'max'=>9),
			array('message', 'length', 'max'=>255),
			array('create_user_id, update_user_id', 'length', 'max'=>11),
                        array("clientid",'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('pid, clientid, fk_device, message, delivery, status, create_time, create_user_id, update_time, update_user_id', 'safe', 'on'=>'search'),
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
			'pid' => 'Pid',
			'clientid' => 'Clientid',
			'fk_device' => 'Fk Device',
			'message' => 'Message',
			'delivery' => 'Delivery',
			'status' => 'Status',
			'create_time' => 'Create Time',
			'create_user_id' => 'Create User',
			'update_time' => 'Update Time',
			'update_user_id' => 'Update User',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('pid',$this->pid,true);
		$criteria->compare('clientid',$this->clientid,true);
		$criteria->compare('fk_device',$this->fk_device,true);
		$criteria->compare('message',$this->message,true);
		$criteria->compare('delivery',$this->delivery,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('create_user_id',$this->create_user_id,true);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('update_user_id',$this->update_user_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}