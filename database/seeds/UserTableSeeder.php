<?php
use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder {

	public function run() {
	
		DB::table('users')->delete();
		User::create(array(
			'username'			=> 'testname',
			'name' 				=> 'Arthur Haynes ',
			'password'			=> Hash::make('testname'),
			'usertype'			=> 'Seeker',
			'professional_id'	=> 1,
			'supplier_id'		=> 1,
			'expert_user_id'	=> 1,
			'created_at'		=> new DateTime(),
			'updated_at'		=> new DateTime()
		));
		User::create(array(
			'username' 			=> 'testname2',
			'name'				=> 'Jenna Baker',
			'email'				=> 'test@testemails.com',
			'password'			=> Hash::make('testname2'),
			'usertype'			=> 'Professional',
			'professional_id'	=> 2,
			'supplier_id'		=> 1,
			'expert_user_id'	=> 1,
			'created_at'		=> new DateTime(),
			'updated_at'		=> new DateTime()
		));
		User::create(array(
			'username'			=> 'testname3',
			'name'				=> 'Marcus Kim ',
			'password'			=> Hash::make('testname3'),
			'usertype'			=> 'Supplier',
			'professional_id'	=> 1,
			'supplier_id'		=> 2,
			'expert_user_id'	=> 1,
			'created_at'		=> new DateTime(),
			'updated_at'		=> new DateTime()
		));
		User::create(array(
			'username'			=> 'testname4',
			'name'				=> 'Ida Greer',
			'password'			=> Hash::make('testname4'),
			'usertype'			=> 'Expert User',
			'professional_id' 	=> 1,
			'supplier_id'		=> 1,
			'expert_user_id'	=> 2,
			'created_at'		=> new DateTime(),
			'updated_at'		=> new DateTime()
		));
	}


}