<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Model extends CI_Model
{
	
	public function GetArtikel($where=" ")
	{
			$data = $this->db->query('select * from artikel '.$where);
			return $data->result_array();
			}

		public function insertdata($tableName, $data)
		{
			$res = $this->db->insert($tableName, $data);
			return $res;
		}
		public function UpdateData($tableName, $data, $where)
		{
			$data = array(
			"judul" => $this->input->post('judul'),
			"author" => $this->input->post('author'),
			"foto" => $fileUpload['file_name'],
			"teks_artikel" => $this->input->post('teks_artikel')
			);
			$this->db->where('judul', $judul);
			return $this->db->update('artikel', $data);
		}	
		public function DeleteData($tableName, $where)
		{
			$res = $this->db->delete($tableName, $where);
			return $res;
		}
		
		public function get_barang_id($kode_barang){ //read database
		    $this->db->where('judul', $judul);
		    $query = $this->db->get('artikel'); //mengambil data dari table barang dimana kode_barang = $kode_barang
		    return $query->row_array(); //data disimpan dalam row
		  }
}
?>