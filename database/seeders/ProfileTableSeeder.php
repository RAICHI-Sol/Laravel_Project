<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Profile;
use Illuminate\Support\Facades\Crypt;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //テーブルのクリア
        Profile::truncate();

        //初期データ用意
        $profiles = [
            ['userid'=>2,
            'sex'=>'男',
            'from'=>'大阪府',
            'old'=>'25',
            'profile'=>Crypt::encryptString('宜しく')],
            ['userid'=>3,
            'sex'=>'女',
            'from'=>'東京都',
            'job'=>'事務系',
            'profile'=>Crypt::encryptString('よろしくお願いします！')],
            ['userid'=>4,
            'job'=>'アーティスト',
            'profile'=>Crypt::encryptString('よろしく')],
            ['userid'=>7,
            'sex'=>'男',
            'old'=>'23',
            'profile'=>Crypt::encryptString('よろしく')],
            ['userid'=>34,
            'profile'=>Crypt::encryptString('よろしく')],
        ];
        
        //投稿
        foreach($profiles as $profile){
            Profile::create($profile);
        }
    }
}
