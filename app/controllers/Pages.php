<?php

class Pages extends Controller
{
    public function __construct()
    {
        $this->postModel = $this->model("Post");
    }

    public function index()
    {

        if (isLoggedIn()) {
            redirect("posts");
        }

        $posts = $this->postModel->getLatestPosts();
        $data =  [
            "title" => "customMVC",
            "description" => "Simple social network built on the customMVC framework",
            "posts" => $posts
        ];
        $this->view("pages/index", $data);
    }

    public function about()
    {
        $data =  [
            "title" => "About Us",
            "description" => "Simple social network built on the customMVC framework"
        ];
        $this->view("pages/about", $data);
    }
}
