<?php

namespace App\Repositories;

use App\Models\Post;

/*
    Class repository
    Berisikan query ke database
*/

class PostRepository
{
    private $post;

    // init model
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function format($post)
    {
        return [
            'id' => $post->id,
            'title' => $post->title,
            'description' => $post->description
        ];
    }

    public function getAll()
    {
        return $this->post->all()->map(function ($post) {
            return $this->format($post);
        });
    }

    public function save($data)
    {
        $post = new $this->post;

        $post->title = $data['title'];
        $post->description = $data['description'];

        $post->save();

        return $post->fresh();
    }
}
