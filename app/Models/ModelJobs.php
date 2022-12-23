<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelJobs extends Model
{
   //untuk tampil data
   public function AllData()
   {
      return $this->db->table('jobs')
        ->Get()-> getResultArray();
   }
   //untuk tambah data
   public function InsertData($data)
   {
      $this->db->table('jobs')->insert($data);
   }
    //untuk detail data
    public function DetailData($id)
    {
     return $this->db->table('jobs')
         ->where('id', $id)
         ->Get()-> getRowArray();
    }
    //untuk update data
   public function UpdateData($data)
   {
      $this->db->table('jobs')
      ->where('id',$data['id'])
      ->update($data);
   }

   //untuk delete data
   public function DeleteData($data)
   {
      $this->db->table('jobs')
      ->where('id',$data['id'])
      ->delete($data);
   }

   public function get_all_jobs_by_id($id)
   {
      return $this->db->table('jobs')
         ->where('id', $id)
         ->Get()-> getRowArray();
   }
}
