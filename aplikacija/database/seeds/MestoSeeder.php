<?php

use Illuminate\Database\Seeder;

class MestoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mesto')->insert([
            'Name' => 'Sabac',
            'id' => 15000,            
            'created_at' => now(),
            'updated_at' => now(),           
        ]);
    }
}
