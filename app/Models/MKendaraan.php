<?php

namespace App\Models;
use CodeIgniter\Model;

class MKendaraan extends Model{
    protected $table = "kendaraan";

    public function getKendaraan($id = false){
        if ($id === false){
            return $this->table('kendaraan')->orderBy('idKendaraan', 'DESC')->get();
        }else{
            return $this->table('kendaraan')->where('idKendaraan', $id)->get()->getRowArray();
        }
    }

    public function newKendaraan($data){
        $query = $this->db->table('kendaraan')->insert($data);
        return $query;
    }

    public function updateKendaraan($data, $id){
        $query = $this->db->table('kendaraan')->update($data, array('idKendaraan' => $id));
        return $query;
    }

    public function deleteKendaraan($id){
        $query = $this->db->table('kendaraan')->delete(array('idKendaraan' => $id));
        return $query;

    }
}

?>