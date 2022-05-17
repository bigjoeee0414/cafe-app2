<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    Post::create([
        'title' => 'ふわふわのパンケーキ',
        'name' => 'フリッパーズ 自由が丘店',
        'address' => '東京都目黒区自由が丘',
        'tel' => '0357311185',
        'body' => 'パンケーキの生地がふわふわで最高！',
    ]);
    Post::create([
        'title' => 'リゾート気分が味わえるおしゃれカフェ',
        'name' => 'Little Darling Coffee Roasters',
        'address' => '東京都港区南青山１丁目',
        'tel' => '0364389844',
        'body' => '空間がおしゃれでまるで外国にいるような感覚！',
    ]);
    }
}