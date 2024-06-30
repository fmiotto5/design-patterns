<?php

use Prototype\Author;
use Prototype\Post;

require_once "../autoloader.php";

$post = new Post("Lorem ipsum dolor sit amet", "Lorem Ipsum is simply dummy text of the printing and typesetting industry.", new Author("Carlos Sagaz"));
$post->addComment("This is really nice!");
$post->addComment("It looks great!");
$clonedPost = clone $post;

echo "<pre>";
print_r($clonedPost);