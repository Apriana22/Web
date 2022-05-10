<?php
defined('BASEPATH') OR exit ('No direct script 
	access allowed');

class M_datadiri extends CI_Model {

	public function getdatadiri()
	{
		//cara 1
		return $this->db->get('tbl_datadiri',1)->row();
		
		//cara 2
		/*$this->db->select('*');
		$this->db->from('tbl_datadiri');
		$this->db->limit(1);
		return $this->db->get()->row();*/

		//cara 3
		/*$query="SELECT * FROM tbl_datadiri limit 1";
		return $this->db->query($query)*/
	}

	public function getdataorganisasi()
	{
		# code...
		return $this->db->get('tbl_organisasi');
	}

	public function getdatakeahlian()
	{
		# code...
		return $this->db->get('tbl_keahlian');
	}


}

/* End of file M_datadiri.php */
/* Location: ./application/models/M_datadiri.php */