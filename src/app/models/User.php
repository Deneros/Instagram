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

    public function getUsername(): string
    {
        return $this->username;
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

    public function showPosts(): void
    {
        foreach ($this->posts as $post) {
            var_dump($post->toString());
        }
    }

    private function hasFollower(User $user): int
    {
        $found = array_filter($this->followers, fn (User $follower) => $follower->id == $user->id);

        return count($found) === 1;
    }

    public function addFollower(USer $user): void
    {
        if ($this->hasFollower($user)) {
            if ($this->id == $user->id) {
                print("No te puedes agregar a ti mismo como follower");
            } else {
                array_push($this->followers, $user);
            }
        } else {
            print("El usuario ya es un follower");
        }
    }

    public static function showProfile(User $user): string
    {
        $profile = "Nombre: $user->getUsername \n";
        $profile .= "Followers: ". count($user->followers) . "\n";
        $profile .= "Posts: ". count($user->posts). "\n";

        return $profile;
    }
}
