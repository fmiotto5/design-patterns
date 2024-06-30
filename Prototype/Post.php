<?php

namespace Prototype;

class Post {

    private string $title;
    private string $content;
    private Author $author;
    /** @var string[] $comments */
    private array $comments;
    private \DateTime $date;

    public function __construct(string $title, string $content, Author $author) {
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
        $this->date = new \DateTime();

        $this->author->addPost($this);
    }

    public function addComment(string $comment) {
        $this->comments[] = $comment;
    }

    public function __clone() {
        $this->title = "Copy of " . $this->title;
        $this->author->addPost($this);
        $this->comments = [];
        $this->date = new \DateTime();
        echo "Post cloned successfully.";
    }

}