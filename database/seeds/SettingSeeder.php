<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('settings')->insert([
            'title' => "Coding Crust",
            'logo' => "frontend/setting_images\cc1.jfif",
            'phone' => "+92 307 1445363",
            'email' => "info@codingcrust.com",
            'address' => "Rafi Group's Plaza,Office # MZ-142 D.H.A Main Boulevard, Lahore",
            'footer_logo' => "frontend/setting_images\cc1.jfif",
            'footer_text' => "Coding Crust is a leading Development & Design expert company providing superior Software,Web."
        ]);
    }
}
