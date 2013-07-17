<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	/**
	 * モデルで使用されるデータベース
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * モデルのJSON形式に含めない項目
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * ユーザーのユニークな識別子の取得.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * ユーザーのパスワードの取得
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * パスワードリマインダーを送信するメールアドレスの取得
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

}