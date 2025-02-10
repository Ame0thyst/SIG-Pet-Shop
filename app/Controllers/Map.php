<?php

namespace App\Controllers;

class Map extends BaseController
{
    public function index()
    {
        $data['locations'] = json_decode(file_get_contents(ROOTPATH . 'public/assets/dataset.json'), true);
        return view('map', $data);
    }

    public function info($id)
    {
        $locations = json_decode(file_get_contents(ROOTPATH . 'public/assets/dataset.json'), true);
        $data['location'] = $locations[$id];
        return view('info', $data);
    }
}
