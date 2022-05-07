<?php

namespace App\Models;

class Post {
    protected $id;
    protected $title;
    protected $post_body;
    protected $image;

    //get method
    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getPostBody()
    {
        return $this->post_body;
    }

    public function getImage()
    {
        return $this->image;
    }

    //set methods
    public function setTitle(string $title)
    {
        return $this->title = $title;
    }

    public function setPostBody(string $post)
    {
        return $this->post_body = $post;
    }

    public function setImage(string $image)
    {
        return $this->image = $image;
    }

    //crude operation
    public function create(array $data)
    {
        
    }

    public function read(int $id)
    {

    }

    public function update(int $id, array $data)
    {

    }

    public function delete(int $id)
    {

    }

}


