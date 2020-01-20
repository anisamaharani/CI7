<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once dirname(__FILE__) . '/tcpdf/tcpdf.php';

class Pdf_report extends TCPDF
{
	protected $ci;
	public function _construct()
	{
		$this->ci = &get_instance();
	}
}
