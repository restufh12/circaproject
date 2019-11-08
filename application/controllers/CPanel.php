<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CPanel extends CI_Controller {
	public function index() {
		$data = array (
			"PageContents" => "payrollmanagement/dashboard",
			"ActiveSidebar" => "Dashboard",
			"PageTitle" => "Dashboard  | myAbsensi",
			"ModuleCode" => "0700"
		);
		$this->load->view('templates/index', $data);
	}

	public function dashboard_0701() {
		$data = array(
			"PageContents" => "payrollmanagement/dashboard",
			"ActiveSidebar" => "Dashboard",
			"PageTitle" => "Dashboard | myAbsensi",
			"ModuleCode" => "0701"
		);
		$this->load->view('templates/index', $data);
	}










	// ADMINISTRATOR START
	public function calendar() {
		$data = array(
			"PageContents" => "payrollmanagement/vcalendar",
			"ActiveSidebar" => "Dashboard",
			"PageTitle" => "Calendar | myAbsensi",
			"ModuleCode" => "0700"
		);
		$this->load->view('templates/index', $data);
	}

	public function payrollsetting() {
		$data = array(
			"PageContents" => "payrollmanagement/vpayrollsetting",
			"ActiveSidebar" => "Dashboard",
			"PageTitle" => "Payroll Setting | myAbsensi",
			"ModuleCode" => "0700"
		);
		$this->load->view('templates/index', $data);
	}
	// ADMINISTRATOR END

	// EMPLOYEE START
	public function eemployee() {
		$data = array(
			"PageContents" => "payrollmanagement/veemployee",
			"ActiveSidebar" => "Employee",
			"PageTitle" => "Payroll Setting | myAbsensi",
			"ModuleCode" => "0701"
		);
		$this->load->view('templates/index', $data);
	}
}
