<?php namespace App\Controllers;

class Home extends BaseController
{
    public function index()
	{
        $cricResponse = $this->curl->request('GET','http://cricapi.com/api/cricket/?apikey=KUcUbPoPAKQRc6hps2PZHLIngzH3');
        $data = $cricResponse->getBody();
        return $this->response->setJSON($data);
	}

	public function getUser() {
        $userData =  $this->request->getBody();
        return $this->response->setJSON(json_decode($userData)->data->unique_id);
    }
}
