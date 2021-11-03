<?php

class Pages extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $data =  [
            "title" => "customMVC",
            "description" => "Simple social network built on the customMVC framework"
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
