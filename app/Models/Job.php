<?php

namespace App\Models;

class Job
{
    public static function all() {
        return [
            [
                'id' => 1,
                'title' => 'job one',
                'description' => 'Lorem ipsum dolor sit amet. Non tempore accusamus sed deleniti iusto eum fugiat dolor ut aspernatur eius. Et dolores eveniet sit quas fuga nam odio delectus aut beatae tempore quo delectus animi qui ullam impedit vel voluptatibus dignissimos.'
            ],
            [
                'id' => 2,
                'title' => 'job two',
                'description' => 'Lorem ipsum dolor sit amet. Non tempore accusamus sed deleniti iusto eum fugiat dolor ut aspernatur eius. Et dolores eveniet sit quas fuga nam odio delectus aut beatae tempore quo delectus animi qui ullam impedit vel voluptatibus dignissimos.'
            ]
        ];
    }

    public static function find($id) {
        $jobs = self::all();

        foreach ($jobs as $job) {
            if ($job['id'] == $id) {
                return $job;
            }
        }
    }
}
