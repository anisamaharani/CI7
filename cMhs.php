<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cMhs extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mMhs');
		$this->load->model('mPegawai');
		$this->load->library('pdf_report');
	}

	public function index()
	{
		$data['_TabTitle'] = 'MAHASISWA';
		$data['_PageTitle'] = 'DATA MAHASISWA';
		$data['_DataMahasiswa'] = $this->mMhs->getAll();

		$this->load->view('Template/header', $data);
		$this->load->view('Mhs/list');
		$this->load->view('Mhs/list_script');
		$this->load->view('Mhs/modal');
		$this->load->view('Mhs/modal_script');
		$this->load->view('Template/footer');
	}

	public function getItemById()
	{
		$data['_DataMahasiswa'] = $this->mMhs->getItemById();

		echo json_encode($data);
	}

	// public function showAddForm()
	// {
	// 	$data['_TabTitle'] = 'MAHASISWA';
	// 	$data['_PageTitle'] = 'ADD';

	// 	$this->load->view('Template/header', $data);
	// 	$this->load->view('Mhs/add');
	// 	$this->load->view('Template/footer');
	// }

	public function addItem()
	{
		$queryResult = $this->mMhs->addItem();

		$flashName = 'mhs_flash';
		$msg = '';
		$alertClass = '';
		$redirect = 'cMhs';
		if ($queryResult) {
			$msg = 'DATA <strong>BERHASIL</strong> DITAMBAHKAN !';
			$alertClass = 'alert alert-success mhs_alert';
		} else {
			$msg = 'DATA <strong>GAGAL</strong> DITAMBAHKAN !';
			$alertClass = 'alert alert-danger mhs_alert';
		}

		$this->session->set_flashdata($flashName, '<div class="' . $alertClass . '" role="alert">' . $msg . '</div>');
		redirect($redirect);
	}

	// public function showEditForm()
	// {
	// 	$data['_TabTitle'] = 'MAHASISWA';
	// 	$data['_PageTitle'] = 'EDIT';
	// 	$data['_DataMahasiswa'] = $this->mMhs->getItemById();

	// 	$this->load->view('Template/header', $data);
	// 	$this->load->view('Mhs/edit');
	// 	$this->load->view('Template/footer');
	// }

	public function editItem()
	{
		$_QueryResult = $this->mMhs->editItem();

		$_FlashName = 'mhs_flash';
		$_Msg = '';
		$_AlertClass = '';
		$_Redirect = 'cMhs';
		if ($_QueryResult) {

			$_Msg = 'DATA <strong>BERHASIL</strong> UBAH !';
			$_AlertClass = 'alert alert-success mhs_alert';
		} else {
			$_Msg = 'DATA <strong>GAGAL</strong> UBAH !';
			$_AlertClass = 'alert alert-danger mhs_alert';
		}

		$this->session->set_flashdata($_FlashName, '<div class="' . $_AlertClass . '" role="alert">' . $_Msg . '</div>');
		redirect($_Redirect);
	}

	public function deleteItem()
	{
		$this->mMhs->deleteItem();
		redirect('cMhs');
	}


	// public function print()
	// {
	// 	$data['mahasiswa'] = $this->mMhs->tampil_data('t_mhs')->result();
	// 	$this->load->view('print_mahasiswa', $data);
	// }

	public function pdf()
	{

		$data['_DataMahasiswa'] = $this->mMhs->pdf()->result();

		$this->load->view('Mhs/pdf', $data);
	}


	public function excel()
	{
		$data['_DataMahasiswa'] = $this->mMhs->getAll();
		require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
		require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

		$objPHPExcel = new PHPExcel();


		$objPHPExcel->getProperties()->setCreator("nisem");
		$objPHPExcel->getProperties()->setLastModifiedBy("nisem");
		$objPHPExcel->getProperties()->setTitle("DATA MAHASISWA");
		$objPHPExcel->getProperties()->setSubject("");
		$objPHPExcel->getProperties()->setDescription("");

		$objPHPExcel->setActiveSheetIndex(0);


		$objPHPExcel->getActiveSheet()->setCellValue('A1', 'NOMOR');
		$objPHPExcel->getActiveSheet()->setCellValue('A2', 'NAMA');
		$objPHPExcel->getActiveSheet()->setCellValue('A3', 'NIM');
		$objPHPExcel->getActiveSheet()->setCellValue('A4', 'JURUSAN');
		$objPHPExcel->getActiveSheet()->setCellValue('A5', 'PRODI');
		$objPHPExcel->getActiveSheet()->setCellValue('A6', 'KELAS');

		$baris = 2;
		$x = 1;

		foreach ($data['_DataMahasiswa'] as $data) {
			$objPHPExcel->getActiveSheet()->setCellValue('A' . $baris, $x);
			$objPHPExcel->getActiveSheet()->setCellValue('B' . $baris, $data->name);
			$objPHPExcel->getActiveSheet()->setCellValue('C' . $baris, $data->nim);
			$objPHPExcel->getActiveSheet()->setCellValue('D' . $baris, $data->jurusan);
			$objPHPExcel->getActiveSheet()->setCellValue('E' . $baris, $data->prodi);
			$objPHPExcel->getActiveSheet()->setCellValue('F' . $baris, $data->kelas);

			$x++;
			$baris++;
		}

		$filename = "_DataMahasiswa" . date("d-m-y-H-i-s") . '.xlsx';

		$objPHPExcel->getActiveSheet()->setTitle("DATA MAHASISWA");

		header('content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('content-disposition: attachment;filename="' . $filename . '"');
		header('cache-control: max-age=0');

		$writer = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
		$writer->save('php://output');


		exit;
	}


	// $paper_size = 'A4';
	// $orientation = 'landscape';
	// $html = $this->output->get_output();
	// $this->dompdf->set_paper($paper_size, $orientation);

	// $this->dompdf->load_html($html);
	// $this->dompdf->render();
	// $this->dompdf->stream("laporan_mahasiswa.pdf", array('attechment' => 0));


	// public function showDetail()
	// {
	// 	$data['_TabTitle'] = 'MAHASISWA';
	// 	$data['_PageTitle'] = 'DETAIL';
	// 	$data['_DataMahasiswa'] = $this->mMhs->getItemById();

	// 	$this->load->view('Template/header', $data);
	// 	$this->load->view('Mhs/detail');
	// 	$this->load->view('Template/footer');
	// }


	// PEGAWAI


	public function Pegawai()
	{
		$data['_TabTitle'] = 'PEGAWAI';
		$data['_PageTitle'] = 'DATA PEGAWAI';
		$data['_DataPegawai'] = $this->mPegawai->getAll();

		$this->load->view('Template/header', $data);
		$this->load->view('pegawai/list');
		$this->load->view('pegawai/list_script');
		$this->load->view('pegawai/modal');
		$this->load->view('pegawai/modal_script');
		$this->load->view('Template/footer');
	}

	public function getItemPegawaiById()
	{
		$data['_DataPegawai'] = $this->mPegawai->getItemPegawaiById();

		echo json_encode($data);
	}

	public function addItem_Pegawai()
	{
		$queryResult = $this->mPegawai->addItem_Pegawai();

		$flashName = 'mhs_flash';
		$msg = '';
		$alertClass = '';
		$redirect = 'cMhs/pegawai';
		if ($queryResult) {
			$msg = 'DATA <strong>BERHASIL</strong> DITAMBAHKAN !';
			$alertClass = 'alert alert-success mhs_alert';
		} else {
			$msg = 'DATA <strong>GAGAL</strong> DITAMBAHKAN !';
			$alertClass = 'alert alert-danger mhs_alert';
		}

		$this->session->set_flashdata($flashName, '<div class="' . $alertClass . '" role="alert">' . $msg . '</div>');
		redirect($redirect);
	}


	public function editItem_Pegawai()
	{
		$_QueryResult = $this->mPegawai->editItem_Pegawai();

		$_FlashName = 'pegawai_flash';
		$_Msg = '';
		$_AlertClass = '';
		$_Redirect = 'cMhs/pegawai';
		if ($_QueryResult) {

			$_Msg = 'DATA <strong>BERHASIL</strong> UBAH !';
			$_AlertClass = 'alert alert-success mhs_alert';
		} else {
			$_Msg = 'DATA <strong>GAGAL</strong> UBAH !';
			$_AlertClass = 'alert alert-danger mhs_alert';
		}

		$this->session->set_flashdata($_FlashName, '<div class="' . $_AlertClass . '" role="alert">' . $_Msg . '</div>');
		redirect($_Redirect);
	}

	public function deleteItem_Pegawai()
	{
		$this->mPegawai->deleteItem_Pegawai();
		redirect('cMhs/pegawai');
	}


	public function pdf_Pegawai()
	{

		$data['_DataPegawai'] = $this->mPegawai->pdf_Pegawai()->result();

		$this->load->view('pegawai/pdf', $data);
	}
}
