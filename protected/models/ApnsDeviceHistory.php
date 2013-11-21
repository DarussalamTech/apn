<?php

/**
 * This is the model class for table "apns_device_history".
 *
 * The followings are the available columns in table 'apns_device_history':
 * @property string $pid
 * @property string $clientid
 * @property string $appname
 * @property string $appversion
 * @property string $deviceuid
 * @property string $devicetoken
 * @property string $devicename
 * @property string $devicemodel
 * @property string $deviceversion
 * @property string $pushbadge
 * @property string $pushalert
 * @property string $pushsound
 * @property string $development
 * @property string $status
 * @property string $archived
 * @property string $create_time
 * @property string $create_user_id
 * @property string $update_time
 * @property string $update_user_id
 */
class ApnsDeviceHistory extends DTActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ApnsDeviceHistory the static model class
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
		return 'apns_device_history';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('clientid, appname, deviceuid, devicename, devicemodel, deviceversion, archived, create_time, create_user_id, update_time, update_user_id', 'required'),
			array('clientid, devicetoken', 'length', 'max'=>64),
			array('appname, devicename', 'length', 'max'=>255),
			array('appversion, deviceversion', 'length', 'max'=>25),
			array('deviceuid', 'length', 'max'=>40),
			array('devicemodel', 'length', 'max'=>100),
			array('pushbadge, pushalert, pushsound', 'length', 'max'=>8),
			array('development', 'length', 'max'=>10),
			array('status, create_user_id, update_user_id', 'length', 'max'=>11),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('pid, clientid, appname, appversion, deviceuid, devicetoken, devicename, devicemodel, deviceversion, pushbadge, pushalert, pushsound, development, status, archived, create_time, create_user_id, update_time, update_user_id', 'safe', 'on'=>'search'),
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
			'appname' => 'Appname',
			'appversion' => 'Appversion',
			'deviceuid' => 'Deviceuid',
			'devicetoken' => 'Devicetoken',
			'devicename' => 'Devicename',
			'devicemodel' => 'Devicemodel',
			'deviceversion' => 'Deviceversion',
			'pushbadge' => 'Pushbadge',
			'pushalert' => 'Pushalert',
			'pushsound' => 'Pushsound',
			'development' => 'Development',
			'status' => 'Status',
			'archived' => 'Archived',
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
		$criteria->compare('appname',$this->appname,true);
		$criteria->compare('appversion',$this->appversion,true);
		$criteria->compare('deviceuid',$this->deviceuid,true);
		$criteria->compare('devicetoken',$this->devicetoken,true);
		$criteria->compare('devicename',$this->devicename,true);
		$criteria->compare('devicemodel',$this->devicemodel,true);
		$criteria->compare('deviceversion',$this->deviceversion,true);
		$criteria->compare('pushbadge',$this->pushbadge,true);
		$criteria->compare('pushalert',$this->pushalert,true);
		$criteria->compare('pushsound',$this->pushsound,true);
		$criteria->compare('development',$this->development,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('archived',$this->archived,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('create_user_id',$this->create_user_id,true);
		$criteria->compare('update_time',$this->update_time,true);
		$criteria->compare('update_user_id',$this->update_user_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}