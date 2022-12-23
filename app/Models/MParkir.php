<?php

namespace App\Models;
use CodeIgniter\Model;

class MParkir extends Model{
    protected $table = "parkir";

    public function getKendaraan(){
        $builder = $this->db->table('kendaraan');
        return $builder->get();
    }

    public function getParkir($id = false){
        if ($id === false){
            $builder = $this->table('parkir')->select('*');
            $builder->join('kendaraan', 'idKendaraan = typeKendaraan', 'left');
            return $builder->get();
        }else{
            return $this->table('parkir')->where('idParkir',$id)->get()->getRowArray();
        }
    }

    public function newParkir($data){
        $query = $this->db->table('parkir')->insert($data);
        return $query;
    }

    public function updateParkir($data, $id){
        $query = $this->db->table('parkir')->update($data, array('idParkir' => $id));
        return $query;
    }

    public function deleteParkir($id){
        $query = $this->db->table('parkir')->delete(array('idParkir' => $id));
        return $query;

    }
}

?>