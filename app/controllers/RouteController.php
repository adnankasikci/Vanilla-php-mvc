<?php

// controllers/HomeController.php
class HomeController
{
    public function index()
    {
        $data = [
            'title' => 'Ana Sayfa',
            'content' => 'Bu ana sayfadaki içerik...'
        ];

        // View dosyasını çağır ve verileri ileterek göster
        require_once __DIR__ . '/../view/home/index.php';
    }
}

// controllers/AboutController.php
class AboutController
{
    public function index()
    {
        $data = [
            'title' => 'Hakkımızda',
            'content' => 'Hakkımızda sayfasındaki içerik...'
        ];

        // View dosyasını çağır ve verileri ileterek göster
        require_once __DIR__ . '/../view/about/index.php';
    }
}
