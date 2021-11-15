<?php

class Posts extends Controller
{

    //I wanna protect the whole posts functionalities.
   // That's why I redirect all accesses except logged in users
    public function __construct()
    {
        if (!isLoggedIn()) {
            redirect("users/login");
        }

        $this->postModel = $this->model("Post");
    }

    public function index()
    {
        //Get posts
        $posts = $this->postModel->getPosts();
        $data = [
            "posts" => $posts
        ];
        $this->view("posts/index", $data);
    }

    public function add()
    {
        $data = [
            "title" => "",
            "body" => ""
        ];

        $this->view("posts/add", $data);
    }
}
