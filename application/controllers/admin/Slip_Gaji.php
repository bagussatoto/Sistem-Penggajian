<?php

class Slip_Gaji extends CI_Controller {

	public function __construct(){
		parent::__construct();

		if($this->session->userdata('hak_akses') != '1'){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Anda Belum Login!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
				redirect('login');
		}
	}

	public function index() 
	{
		$data['title'] = "Slip Gaji Pegawai";
		$data['pegawai'] = $this->ModelPenggajian->get_data('data_pegawai')-> result();

		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/gaji/slip_gaji', $data);
		$this->load->view('template_admin/footer');
	}

	public function cetak_slip_gaji(){

	$data['title'] = "Cetak Laporan Absensi Pegawai";
	$data['potongan'] = $this->ModelPenggajian->get_data('potongan_gaji')-> result();
	$nama = $this->input->post('nama_pegawai');
	$bulan = $this->input->post('bulan');
	$tahun = $this->input->post('tahun');
	$bulantahun =$bulan.$tahun;

	$data['print_slip'] = $this->db->query("SELECT data_pegawai.nik,data_pegawai.nama_pegawai,data_jabatan.nama_jabatan,data_jabatan.gaji_pokok,data_jabatan.tj_transport,data_jabatan.uang_makan,data_kehadiran.alpha,data_kehadiran.bulan FROM data_pegawai INNER JOIN data_kehadiran ON data_kehadiran.nik=data_pegawai.nik
		INNER JOIN data_jabatan ON data_jabatan.nama_jabatan=data_pegawai.jabatan
		WHERE data_kehadiran.bulan='$bulantahun' AND data_kehadiran.nama_pegawai='$nama'")->result();
	$this->load->view('template_admin/header',$data);
	$this->load->view('admin/gaji/cetak_slip_gaji', $data);
	}
}
?>