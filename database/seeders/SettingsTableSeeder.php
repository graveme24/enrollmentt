<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->delete();

        $data = [
            ['type' => 'current_session', 'description' => '2019-2020'],
            ['type' => 'system_title', 'description' => 'HWA'],
            ['type' => 'system_name', 'description' => 'HAVEN OF WISDOM ACADEMY'],
            ['type' => 'term_ends', 'description' => '7/10/2020'],
            ['type' => 'term_begins', 'description' => '7/10/2021'],
            ['type' => 'phone', 'description' => '09101446674'],
            ['type' => 'address', 'description' => 'Alapan St, Imus, Cavite'],
            ['type' => 'system_email', 'description' => 'havenwisdom11@gmail.com'],
            ['type' => 'alt_email', 'description' => ''],
            ['type' => 'email_host', 'description' => ''],
            ['type' => 'email_pass', 'description' => ''],
            ['type' => 'lock_exam', 'description' => 0],
            ['type' => 'logo', 'description' => 'global_assets/images/HWA.jpg'],
            ['type' => 'next_term_fees_k', 'description' => '20000'],
            ['type' => 'next_term_fees_p', 'description' => '25000'],
            ['type' => 'next_term_fees_j', 'description' => '15600'],
            ['type' => 'next_term_fees_s', 'description' => '15600'],

        ];

        DB::table('settings')->insert($data);

    }
}
