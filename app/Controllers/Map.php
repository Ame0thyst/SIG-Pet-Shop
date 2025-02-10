<?php

namespace App\Controllers;

class Map extends BaseController
{
    public function index()
    {
        $data['locations'] = json_decode(file_get_contents(ROOTPATH . 'public/assets/dataset.json'), true);
        return view('map', $data);
    }

    public function info()
    {
        $path = ROOTPATH . 'public/assets/dataset.json';
        $data['locations'] = json_decode(file_get_contents($path), true);

        // Handle form submission untuk tambah data
        if ($this->request->getMethod() === 'post') {
            $newLocation = [
                'Nama' => $this->request->getPost('nama'),
                'Latitude' => $this->request->getPost('latitude'),
                'Longitude' => $this->request->getPost('longitude'),
                'Kategori' => $this->request->getPost('kategori'),
                'Alamat' => $this->request->getPost('alamat'),
                'Deskripsi' => $this->request->getPost('deskripsi'),
                'Gambar' => $this->request->getPost('gambar')
            ];
            $data['locations'][] = $newLocation;
            file_put_contents($path, json_encode($data['locations'], JSON_PRETTY_PRINT));
            return redirect()->to('/map/info');
        }

        return view('info', $data);
    }


    public function delete($id)
    {
        $path = ROOTPATH . 'public/assets/dataset.json';
        $locations = json_decode(file_get_contents($path), true);

        if (isset($locations[$id])) {
            unset($locations[$id]);
            file_put_contents($path, json_encode(array_values($locations), JSON_PRETTY_PRINT));
        }

        return redirect()->to('/map/info');
    }
}
