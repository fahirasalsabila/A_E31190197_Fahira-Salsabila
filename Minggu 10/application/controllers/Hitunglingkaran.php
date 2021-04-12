<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Hitunglingkaran extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->benchmark->mark('code_start');
		$this->load->library('lingkaran');
	}
	function index(){
		$this->lingkaran->keliling('21');
		echo "<hr/>";
		$this->lingkaran->luas('14');
		$this->benchmark->mark('code_end');
		echo "<hr/>";
		$second = $this->benchmark->elapsed_time('code_start','code_end');
		echo "Tunggu loading selesai sampai $second";
	}
}
?>