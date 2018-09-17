<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class maps extends CI_Controller{

  public function __construct()
	{
		 parent::__construct();
		 $this->load->database();
     $this->load->helper('url');
	}

  public function index()
  {
    $config['judul'] = 'Load Data';
		$config['content'] = 'admin_kabupaten';

    $this->load->view('template', $config);
  }

  public function get_maps()
  {
    $url = file_get_contents('http://simbangda.jayapurakab.go.id/geoserver/geonode/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=geonode:kampu&outputFormat=application%2Fjson');
    echo ($url);
  }
}
