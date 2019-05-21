<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

	DB::table('users')->insert(['name'=>str_random(10),'email'=>str_random(10).'@gmail.com','age'=>rand(0, 2),'dob'=>date("Y-m-d"),'phone'=>rand(0, 12),'religion'=>rand(0, 12),'country'=>rand(0, 12),'state'=>rand(0, 12),'city'=>rand(0, 12),'profile_by'=>rand(0, 12),'education'=>rand(0, 12),'body_type'=>rand(0, 12),'marital_status'=>rand(0, 12),'height'=>rand(0, 12),'physical_status'=>rand(0, 12),'drink'=>rand(0, 12),'mother_tongue'=>rand(0, 12),'complexion'=>rand(0, 12),'weight'=>rand(0, 12),'blood_group'=>rand(0, 12),'sub_caste'=>rand(0, 12),'diet'=>rand(0, 12),'smoke'=>rand(0, 12),'annual_income'=>rand(0, 12),'education_detail'=>rand(0, 12),'father_occupation'=>rand(0, 12),'mother_occupation'=>rand(0, 12),'brothers'=>rand(0, 12),'sisters'=>rand(0, 12),'occupation'=>rand(0, 12),'birth_place'=>rand(0, 12),'raasi'=>rand(0, 12),'time_of_birth'=>rand(0, 12),'description'=>rand(0, 12),'password'=>str_random(10)]);
    }


}
