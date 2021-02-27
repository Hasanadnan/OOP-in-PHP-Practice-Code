<?php

class Post {
    private $name;

    public function __set($name, $value) {
        echo "Setting " .$name. " to <strong> ". $value. " </strong> <br/>";
        $this->name = $value;

    }
    public function __get($name) {
        echo "Getting " .$name. " to <strong> ". $this->name . " </strong> <br/>";

    }
}

$post = new Post;

$post->name = 'Testing';
echo $post->name



?>