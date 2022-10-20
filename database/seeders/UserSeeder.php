<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    
    public function run()
    {

        //For Merchant
        User::create([
            'email' => 'Merchant',//Username
            'password' => Hash::make('12345678'),
            'name' => 'Makesh Ambani',
            'mobile' => '+880-345672-1',
            'user_email' => 'makesh@gmail.com',
            'bussiness_name' => 'Transfer Gagets',
            'fb_page_link' => 'facebook.com',
            'address' => 'abcd',
            'district' => 'Dhaka',
            'region' => 'panipat',
            'type' => 'merchant'
        ]);
        
        //For admin
        User::create([
            'email' => 'techoledge',//Username
            'password' => Hash::make('admin'),
            'name' => 'Techo Ledge',
            'mobile' => '+880-345672-1',
            'user_email' => 'techoledge@gmail.com',
            'type' => 'admin'
        ]);
        User::create([
            'email' => 'noor',//Username
            'password' => Hash::make('admin'),
            'name' => 'Noor Abbasi',
            'mobile' => '+92307101010-1',
            'user_email' => 'noor@gmail.com',
            'type' => 'admin'
        ]);

        
        //For Delivery Boy DB-1
        User::create([
            'profile_image' => 'default.png',
            'name' => 'DB-1',
            'mobile' => '+880-345672-1',
            'user_email' => 'makesh@gmail.com',
            'address' => 'abcd',
            'nid_number' => '12345',
            'nid_picture' => 'nid-image.png',
            'driving_license_picture' => 'lisense-image.png',
            'vehical_name'=>'motor1',
            'vehical_number'=>'motor1',
            'assigned_district' => 'Dhaka',
            'assigned_region' => 'panipat',
            'email' => 'DB-1',//Delivery Boy Username
            'password' => Hash::make('12345'),
            'type' => 'boy'
        ]);

        //DB-2
        User::create([
            'profile_image' => 'default.png',
            'name' => 'DB-2',
            'mobile' => '+880-345672-1',
            'user_email' => 'abc@gmail.com',
            'address' => 'abcd',
            'nid_number' => '',
            'nid_picture' => 'nid-image.png',
            'driving_license_picture' => 'lisense-image.png',
            'vehical_name'=>'motor1',
            'vehical_number'=>'motor1',
            'assigned_district' => 'Dhaka',
            'assigned_region' => 'panipat',
            'email' => 'DB-2',//Delivery Boy Username
            'password' => Hash::make('123456'),
            'type' => 'boy'
        ]);


    }
}
