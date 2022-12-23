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
            'kendaraan' => $model->getKendaraan()->getResult(),
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
            'typeKendaraan' => $this->request->getPost('tipeKendaraan'),
            'platKendaraan' => $this->request->getPost('platKendaraan'),
        ];

        $saveNewParkir = $this->parkir->newParkir($data);

        if($saveNewParkir){
            session()->setFlashData('success', 'Data berhasil dimasukkan');
            return redirect()->to(base_url(). '/parkir');
        }else{
            session()->setFlashData('warning', 'Data gagal dimasukkan');
            return redirect()->to(base_url(). '/parkir');
        }
    }

    public function updateParkir(){
        $model = new MParkir();
        $id = $this->request->getPost('platNumber');
        $data = array(
            'typeKendaraan' => $this->request->getPost('idKendaraan'),
            'platKendaraan' => $this->request->getPost('platNumber'),
        );

        $model->updateParkir($data, $id);
        return redirect()->to(base_url(). '/parkir');
    }

    public function deleteParkir(){
        $model = new MParkir();
        $id = $this->request->getPost('idParkir');
        $model->deleteParkir($id);
        return redirect()->to(base_url(). '/parkir');
    }
}
