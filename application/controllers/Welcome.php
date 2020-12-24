<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function single($kw='')
	{
		$kw = str_replace('-', '+', $kw);
		$kw = str_replace('.html', '', $kw);
		$kw = str_replace('.', '+', $kw);
		$url = 'https://images.search.yahoo.com/search/images?p='.$kw.'';
		$data = $this->http_request($url);
		//echo $data;
		require APPPATH.'third_party/simple_html_dom.php';
		$html = new simple_html_dom();
		$html->load($data);
		
		$gambar_gambar = $html->find('ul[id=sres] li');
		//var_dump($gambar_gambar);die();
		foreach ($gambar_gambar as $img) {
			$property = json_decode($img->attr['data']);
			$url_sumber = $property->rurl;
			$alt_gambar = $property->alt;
			$source_img = $property->iurl;
			$thumb = $property->ith;

			//BUAT ARRAY BARU
			$results[] = array(
			'sumber' => $url_sumber,
			'alt' => $alt_gambar,
			'thumb' => $thumb,
			'imgsrc' => $source_img
			);
		}

		$datas['gambars'] = $results;
		$this->load->view('single',$datas);
	}

	public function contact()
	{
		$this->load->view('contact.php');
	}

	public function dmca()
	{
		$this->load->view('dmca.php');
	}

	public function disclaimer()
	{
		$this->load->view('disclaimer.php');
	}

	public function privacy()
	{
		$this->load->view('privacy.php');
	}

	public function sitemap()
	{
		$this->load->view('sitemap.php');
	}

	public function robots()
	{
		$this->load->view('robots.php');
	}

	private function http_request($url) {
    // persiapkan curl
    $ch = curl_init(); 

    // set url 
    curl_setopt($ch, CURLOPT_URL, $url);

    // return the transfer as a string 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

    // $output contains the output string 
    $output = curl_exec($ch); 

    // tutup curl 
    curl_close($ch);      

    // mengembalikan hasil curl
    return $output;
	}

	public function sitemaps() {
		$this->load->view('sitemaps.php');
	}

}
