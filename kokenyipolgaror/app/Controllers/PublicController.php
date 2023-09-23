<?php

namespace App\Controllers;

class PublicController extends BaseController
{
    private $main_title = 'KPE';
    private $page_names = [
        'main_page' => 'Főoldal',
        'public_data' => 'Közérdekű adatok',
        'organization_structure' => 'Szervezet felépítése',
        'excipients' => 'Segédanyagok',
        'press' => 'Sajtó',
        'gallery' => 'Galléria'
    ];

    public function index(): string
    {
        
        $data = [
            'meta_title' => $this->main_title,
            'page_name' => $this->page_names['main_page'],
            'page_names' => $this->page_names
        ];
        
        return view('public/home', $data);
    }

    public function public_data(): string
    {
        $data = [
            'meta_title' => $this->main_title,
            'page_name' => $this->page_names['public_data'],
            'page_names' => $this->page_names,
        ];
        
        return view('public/public_data', $data);
    }

    public function organization_structure(): string
    {
        $data = [
            'meta_title' => $this->main_title,
            'page_name' => $this->page_names['organization_structure'],
            'page_names' => $this->page_names,
        ];
        
        return view('public/organization_structure', $data);
    }

    public function excipients(): string
    {
        $data = [
            'meta_title' => $this->main_title,
            'page_name' => $this->page_names['excipients'],
            'page_names' => $this->page_names,
        ];
        
        return view('public/excipients', $data);
    }

    public function press(): string
    {
        $data = [
            'meta_title' => $this->main_title,
            'page_name' => $this->page_names['press'],
            'page_names' => $this->page_names,
        ];
        
        return view('public/press', $data);
    }
}
