<?php

namespace App\Models;

require __DIR__ . '/../../../vendor/autoload.php';

use App\Utils\Uid;

class Post
{
    private string $id;
    private array $likes;

    public function __construct(private string $message)
    {
        print_r("Se creo un nuevo Post \n");
        $this->id = Uid::generateId();
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function addLike():void
    {
    }

    public function addComment()
    {
    }
}
