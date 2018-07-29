<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class datapegawai_P extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('datatables');
		$this->load->model('m_data');

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	public function index(){
		$data['data'] = $this->m_data->ambil_data()->result();
		$data['pangkat'] = $this->db->query("SELECT * FROM pangkat");
		$data['jabatan'] = $this->db->query("SELECT * FROM jabatan");
		$this->load->view('datapegawai_P',$data);
	}

	function tambah(){
		$nip = $this->input->post('nip');
		$namaPegawai = $this->input->post('namaPegawai');
		$tempat = $this->input->post('tempat');
		$ttl = date('Y-m-d', strtotime($this->input->post('ttl')));
		$agama = $this->input->post('cbAgama');
		$jk = $this->input->post('rbJk');
		$alamat = $this->input->post('alamat');
		$telepon = $this->input->post('telepon');
		$pangkat = $this->input->post('cbPangkat');
		$tmtPang = date('Y-m-d', strtotime($this->input->post('tmtPang')));
		$jabatan = $this->input->post('cbJabatan');
		$tmtJab = date('Y-m-d', strtotime($this->input->post('tmtJab')));
		$mulJab = date('Y-m-d', strtotime($this->input->post('mulJab')));

		$data = array(
			'nip' => $nip,
			'namaPegawai' => $namaPegawai,
			'tempat' => $tempat,
			'tglLahir' => $ttl,
			'agama' => $agama,
			'jk' => $jk,
			'alamat' => $alamat,
			'telepon' => $telepon,
			'kdPangkat' => $pangkat,
			'tmtPangkat' => $tmtPang,
			'kdJabatan' => $jabatan,
			'tmtJabatan' => $tmtJab,
			'mulaiJabatan' => $mulJab
			);
		$this->m_data->input_data($data,'pegawai');
		redirect('datapegawai');
	}

	function hapus($nip){
		$where = array('nip' => $nip);
		$this->m_data->hapus_data($where,'pegawai');
		redirect('datapegawai');
	}

	function edit($nip){
		$data['pangkat'] = $this->db->query("SELECT * FROM pangkat");
		$data['jabatan'] = $this->db->query("SELECT * FROM jabatan");
		$where = array('nip' => $nip);
		$data['pegawai'] = $this->m_data->edit_data($where,'pegawai')->result();
		$this->load->view('editpegawai_P',$data);
	}


	function ubah(){
		$nip = $this->input->post('nip');
		$namaPegawai = $this->input->post('namaPegawai');
		$tempat = $this->input->post('tempat');
		$ttl = date('Y-m-d', strtotime($this->input->post('ttl')));
		$agama = $this->input->post('cbAgama');
		$jk = $this->input->post('rbJk');
		$alamat = $this->input->post('alamat');
		$telepon = $this->input->post('telepon');
		$pangkat = $this->input->post('cbPangkat');
		$tmtPang = date('Y-m-d', strtotime($this->input->post('tmtPang')));
		$jabatan = $this->input->post('cbJabatan');
		$tmtJab = date('Y-m-d', strtotime($this->input->post('tmtJab')));
		$mulJab = date('Y-m-d', strtotime($this->input->post('mulJab')));
		$namaPendidikan = $this->input->post('namaPendidikan');
		$tahunPendidikan = $this->input->post('tahunPendidikan');
		$ijasah = $this->input->post('ijasah');
		$nipSuami = $this->input->post('nipSuami');
		$namaSuami = $this->input->post('namaSuami');
		$nipIstri = $this->input->post('nipIstri');
		$namaIstri = $this->input->post('namaIstri');
		$jmlAnak = $this->input->post('jmlAnak');

		$data = array(
			'nip' => $nip,
			'namaPegawai' => $namaPegawai,
			'tempat' => $tempat,
			'tglLahir' => $ttl,
			'agama' => $agama,
			'jk' => $jk,
			'alamat' => $alamat,
			'telepon' => $telepon,
			'kdPangkat' => $pangkat,
			'tmtPangkat' => $tmtPang,
			'kdJabatan' => $jabatan,
			'tmtJabatan' => $tmtJab,
			'mulaiJabatan' => $mulJab,
			'namaPendidikan' => $namaPendidikan,
			'tahunPendidikan' => $tahunPendidikan,
			'ijasah' => $ijasah,
			'nipSuami' => $nipSuami,
			'namaSuami' => $namaSuami,
			'nipIstri' => $nipIstri,
			'namaIstri' => $namaIstri,
			'jmlAnak' => $jmlAnak
			);
		$where = array(
			'nip' => $nip
		);
		$this->m_data->update_data($where,$data,'pegawai');
		redirect('datapegawai_P/detail/'. $nip .'');
	}

	function detail($nip){
		$where = array('nip' => $nip);
		$data['pegawai'] = $this->m_data->detail_data($where,'pegawai')->result();
		$this->load->view('detailpegawai_P',$data);
	}

	function detail_gaji($nip){
		$where = array('nip' => $nip);
		$data['pegawai'] = $this->m_data->detail_gaji($where,'pegawai')->result();
		$this->load->view('detailgaji_P',$data);
	}

	function print_gaji($nip){
		$where = array('nip' => $nip);
		$data['pegawai'] = $this->m_data->detail_gaji($where,'pegawai')->result();
		$this->load->view('printdetailgaji_P',$data);
	}

	function report($nip){
		$this->load->library('pdf');

		$where = array('nip' => $nip);
		$data['pegawai'] = $this->m_data->detail_data($where,'pegawai')->result();

		$this->pdf->setPaper('A4', 'potrait');
    $this->pdf->filename = "laporan.pdf";
    $this->pdf->load_view('printdetailgaji_P', $data);
	}


}
