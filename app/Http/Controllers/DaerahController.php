<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DaerahController extends Controller
{
    public function provinsi()
    {
        $client = new Client();
        $response = $client->get('https://dev.farizdotid.com/api/daerahindonesia/provinsi');
        $provinsi = json_decode($response->getBody(), true)['provinsi'];

        return $provinsi;
    }

    public function kabupaten()
    {

        $client = new Client();
        $response = $client->get('https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi=32');
        $kabupaten = json_decode($response->getBody(), true)['kota_kabupaten'];

        return $kabupaten;
    }

    public function kecamatan()
    {
        $client = new Client();
        $response = $client->get('https://dev.farizdotid.com/api/daerahindonesia/kecamatan?id_kota=3210');
        $kecamatan = json_decode($response->getBody(), true)['kecamatan'];

        return $kecamatan;
    }

    public function kelurahan()
    {

        $client = new Client();
        $response = $client->get('https://dev.farizdotid.com/api/daerahindonesia/kelurahan?id_kecamatan=3214010');
        $kelurahan = json_decode($response->getBody(), true)['kelurahan'];

        return $kelurahan;
    }
}
