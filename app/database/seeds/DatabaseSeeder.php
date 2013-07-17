<?php

class DatabaseSeeder extends Seeder {

	/**
	 * データベースシード（初期値設定）を実行
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
	}

}