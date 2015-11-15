<?php
use Illuminate\Database\Seeder;

/**
 * Created by PhpStorm.
 * User: Benoit
 * Date: 15/11/2015
 * Time: 14:34
 */
class PostTagTableSeeder extends Seeder
{
    public function run()
    {
        for($i = 1; $i <= 100; ++$i)
        {
            $numbers = range(1, 20);
            shuffle($numbers);
            $n = rand(3, 6);
            for($j = 1; $j < $n; ++$j)
            {
                DB::table('post_tag')->insert(array(
                    'post_id' => $i,
                    'tag_id' => $numbers[$j]
                ));
            }
        }
    }
}