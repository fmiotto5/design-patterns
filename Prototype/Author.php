<?php

namespace Prototype;

class Author {

    private string $name;
    /** @var Post[] $posts */
    private array $posts;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function addPost(Post $post) {
        $this->posts[] = $post;
    }

}