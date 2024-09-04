<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang!';
    }

    public function about() {
        return 'Nama : Yolanda Ekaputri Setyawan <br> NIM : 2241760028';
    }

    public function articles($id){
        return 'Halaman artikel dengan ID ' .$id;
    }
}
?>