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
    }

    public function index()
    {
        $data = [];
        $this->view("posts/index", $data);
    }
}
