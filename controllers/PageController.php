<?php


class PageController
{
    public function home()
    {
        $tasks = App::get('database')->selectAll('todos');

        return view('index', ['tasks' => $tasks]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        $company = 'Company';
        return view('about', ['company' => $company]);
    }
}