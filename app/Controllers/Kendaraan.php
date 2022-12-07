<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\MKendaraan;

class Kendaraan extends BaseController
{
    public function __construct(){
        $this->kendaraan = new MKendaraan();
    }

    public function index()
    {
        $model = new MKendaraan();
        $data = [
            'kendaraan' => $model->getKendaraan()->getResult(),
            'title' => 'Kendaraan | Quiz Daniel',
            'content' => 'pages/vehicle',
            'breadcrumbs' => 'List Kendaraan'
        ];
        echo view('components/componentsWrapper', $data);
    }

    public function newKendaraan(){
        $session = session();

        //save data
        $data = ['namaKendaraan' => $this->request->getPost('namaKendaraan')];

        $saveNewKendaraan = $this->kendaraan->newKendaraan($data);

        if($saveNewKendaraan){
            session()->setFlashData('success', 'Data berhasil dimasukkan');
            return redirect()->to(base_url(). '/kendaraan');
        }else{
            session()->setFlashData('warning', 'Data gagal dimasukkan');
            return redirect()->to(base_url(). '/kendaraan');
        }
    }

    public function updateKendaraan(){
        $model = new MKendaraan();
        $id = $this->request->getPost('idKendaraan');
        $data = array('namaKendaraan' => $this->request->getPost('kendaraanName'));

        $model->updateKendaraan($data, $id);
        return redirect()->to(base_url(). '/kendaraan');
    }

    public function deleteKendaraan(){
        $model = new MKendaraan();
        $id = $this->request->getPost('idKendaraan');
        $model->deleteKendaraan($id);
        return redirect()->to(base_url(). '/kendaraan');
    }
}
