<?php namespace App\Models;

use App\Interface\IPost;
use App\Models\Post;

class Image extends Post implements IPost{
    
    public function __construct(private string $message, private string $image)
    {
        parent::__construct($message);
    }

    public function getImagePost():string{
        return $this->image;
    }
}
