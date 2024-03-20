<?php
class App{
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params;

    public function __construct()
    {
        // $url = $_GET ('url');
        echo 'Berhasil masuk ke class utama App!';
    }
    public function __run()
    {
        echo 'Echo Berjalan';
    }
}