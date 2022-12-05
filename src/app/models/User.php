<?php

namespace App\Models;

use App\Utils\Uid;

class User
{
    private string $id;
    private array $posts;
    private array $followers;

    public function __construct(private string $name, private string $username, private string $email, private string $password)
    {
        $this->id = Uid::generateId();
        $this->posts = [];
        $this->followers = [];
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function publish(Post $post): Post
    {
        array_push($this->posts, $post);
        return $post;
    }

    public function getPosts(): array
    {
        return $this->posts;
    }

    public function getFollowers(): array
    {
        return $this->followers;
    }

    public function showPosts()
    {
        foreach ($this->posts as $post) {
            var_dump($post->toString());
        }
    }
}
