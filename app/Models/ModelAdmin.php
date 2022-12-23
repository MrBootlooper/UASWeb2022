<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAdmin extends Model
{
    //untuk tampil data
   public function AllData()
   {
    return $this->db->table('admin')
        ->Get()-> getResultArray();
   }

   //untuk tambah data
   public function InsertData($data)
   {
      $this->db->table('admin')->insert($data);
   }

    //untuk detail data
    public function DetailData($id)
    {
     return $this->db->table('admin')
         ->where('id', $id)
         ->Get()-> getRowArray();
    }

    //untuk update data
   public function UpdateData($data)
   {
      $this->db->table('admin')
      ->where('id',$data['id'])
      ->update($data);
   }

    //untuk delete data
   public function DeleteData($data)
   {
      $this->db->table('admin')
      ->where('id',$data['id'])
      ->delete($data);
   }
}
