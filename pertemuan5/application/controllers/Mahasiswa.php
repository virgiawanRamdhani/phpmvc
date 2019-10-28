<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {




	public function index()
	{
		

					$data ['mhs'] =[
						
						[
						'nama' =>'virgiawan',
						'nrp' => '17040032',
						'email' => 'segidog'
						],

						[
						'nama' =>'ridlwan',
						'nrp' => '17040031',
						'email' => 'segidog'
						],

						[
						'nama' =>'erik',
						'nrp' => '17040033',
						'email' => 'segidog'
						]

					];


			


		

		//$data ['mhs'] = ['virgiawan, erik , ridlwan'];
	//echo "Welcome to the jungle Mahasiswa";
		$this ->load -> view ('mahasiswa/index', $data);
	}
}
