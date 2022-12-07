<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\MParkir;

class Parkir extends BaseController
{
    public function __construct(){
        $this->parkir = new MParkir();
    }

    public function index()
    {
        $model = new MParkir();
        $data = [
            'parkir' => $model->getParkir()->getResult(),
            'title' => 'Parkir | Quiz Daniel',
            'content' => 'pages/parking',
            'breadcrumbs' => 'List Parkir'
        ];
        echo view('components/componentsWrapper', $data);
    }

    public function newParkir(){
        $session = session();

        //save data
        $data = [
            'namaKendaraan' => $this->request->getPost('namaKendaraan')
        ];

        $saveNewKendaraan = $this->kendaraan->newKendaraan($data);

        if($saveNewKendaraan){
            session()->setFlashData('success', 'Data berhasil dimasukkan');
            return redirect()->to(base_url(). '/kendaraan');
        }else{
            session()->setFlashData('warning', 'Data gagal dimasukkan');
            return redirect()->to(base_url(). '/kendaraan');
        }
    }

    public function updateParkir(){
        $model = new MParkir();
        $id = $this->request->getPost('idKendaraan');
        $data = array('namaKendaraan' => $this->request->getPost('kendaraanName'));

        $model->updateKendaraan($data, $id);
        return redirect()->to(base_url(). '/kendaraan');
    }

    public function deleteParkir(){
        $model = new MParkir();
        $id = $this->request->getPost('idKendaraan');
        $model->deleteKendaraan($id);
        return redirect()->to(base_url(). '/kendaraan');
    }
}
