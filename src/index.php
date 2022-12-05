<?php 
require __DIR__.'/../vendor/autoload.php';
// require_once __DIR__.'/app/models/Post.php';


use App\Models\Image;
use App\Models\Post;

$post = new Post("Este es mi primer post \n");
echo $post-> getMessage();

$imagepost = new Image('Mi primer vehiculo','vehiculo.jpg');
echo $imagepost->getImagePost();




?>