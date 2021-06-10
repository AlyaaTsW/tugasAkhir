<?php

use Dompdf\Options;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

defined('BASEPATH') or exit('No direct script access allowed');
/**
 * 
 */
class AdminExport extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model('admin_ckp');
        $this->load->model('admin_pengguna');
    }

    public function export()
    {
        header("Content-type: application/vnd-ms-excel");
	    header("Content-Disposition: attachment; filename=Data_Siswa.xls");
	    
	    $data['siswa'] = $this->SiswaModel->view();
	    $this->load->view('export', $data);
    }
}
