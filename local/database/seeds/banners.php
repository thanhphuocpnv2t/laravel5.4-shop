<?php

use Illuminate\Database\Seeder;

class banners extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert([
            'name' => 'admin' . time(),
            'position' => md5(123456),
            'type' => rand(1,3),
            'is_active' => rand(0,1),
            'filename' => md5(123456),
            'content' => file_get_contents('http://loripsum.net/api'),
            'link' => md5(123456),
            'created' => date('Y-m-d H:i:s')
        ]);
    }
}
