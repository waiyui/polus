<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
            'from' => '5',
            'to' => '13',
            'message' => 'I love you, you love me',
            'is_read' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);    
    }
}
