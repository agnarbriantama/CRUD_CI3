<?php
/**
 * 
 */
class Data_m extends CI_Model
{
	public function allData()
	{
		return $this->db->get('kuliah')->result();
	}

	  public function get_by_id($kondisi)
  {
      $this->db->from('kuliah');
      $this->db->where($kondisi);
      $query = $this->db->get();
      return $query->row();
  }
  public function update($data,$kondisi)
  {
      $this->db->update('kuliah',$data,$kondisi);
      return TRUE;
  }
}