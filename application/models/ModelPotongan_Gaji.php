<?php
Class ModelPotongan_Gaji extends CI_Model
{
  function TampilPotongan() 
    {
        $this->db->order_by('id', 'ASC');
        return $this->db->from('potongan_gaji')
          ->get()
          ->result();
    }

    function Getpotongan($potongan = '')
    {
      return $this->db->get_where('potongan_gaji', array('potongan' => $potongan))->row();
    }
    function HapusPotongan($potongan)
    {
        $this->db->delete('potongan_gaji',array('potongan' => $potongan));
    }
}