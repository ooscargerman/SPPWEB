<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property integer $folioId
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $address
 * @property string $city
 * @property string $state
 * @property integer $zipCode
 * @property integer $roles
 * @property integer $phone
 * @property string $registerDate
 * @property string $firstName
 * @property string $lastName
 * @property integer $ssn
 * @property string $deleted
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['folioId', 'username', 'password', 'email', 'address', 'city', 'state', 'zipCode', 'roles', 'phone', 'firstName', 'lastName', 'ssn'], 'required'],
            [['folioId', 'zipCode', 'roles', 'phone', 'ssn'], 'integer'],
            [['registerDate', 'deleted'], 'safe'],
            [['username', 'city', 'state'], 'string', 'max' => 100],
            [['password', 'email', 'address'], 'string', 'max' => 200],
            [['firstName', 'lastName'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'folioId' => 'Folio ID',
            'username' => 'Username',
            'password' => 'Password',
            'email' => 'Email',
            'address' => 'Address',
            'city' => 'City',
            'state' => 'State',
            'zipCode' => 'Zip Code',
            'roles' => 'Roles',
            'phone' => 'Phone',
            'registerDate' => 'Register Date',
            'firstName' => 'First Name',
            'lastName' => 'Last Name',
            'ssn' => 'Ssn',
            'deleted' => 'Deleted',
        ];
    }
}
