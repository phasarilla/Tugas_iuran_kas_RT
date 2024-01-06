<?php
namespace App\Controllers;
class Page extends BaseController
{
    public function about()
    {
    return view('about', [
    'title' => 'About'
    ]);
    }

    
    public function index()
    {
    return view('welcome_message', [
    'title' => 'Home'
    ]);
    }
    public function contact()
    {
        return view('contact', [
            'title' => 'Halaman Contact'
        ]);
    }
    public function artikel()
    {
        return view('artikel', [
            'title' => 'Halaman Artikel',
            'content' => 'Ini adalah halaman artikel yang menjelaskan tentang isi
            halaman ini.'
            ]);
    }
    public function faqs()
    {
        echo "Ini halaman FAQ";
    }

    public function tos()
    {
        echo "ini halaman Term of Services";
    }

}
?>