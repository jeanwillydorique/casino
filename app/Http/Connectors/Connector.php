<?php

namespace App\Http\Connectors;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class Connector
{
    protected function get($url)
    {
        $client = new Client(); 
        $result = $client->request('GET', $url);
        return json_decode($result->getbody()->getContents());
    }

    protected function tab($url)
    {
        $client = new Client(); 
        $result = $client->request('GET', $url, ['http_errors' => false]);

        if ($result->getStatusCode() === 500)
            $result = "false";
        else 
        return json_decode($result->getbody()->getContents());
    }

    protected function card($url)
    {
        $client = new Client(); 
        $result = $client->request('GET', $url, ['http_errors' => false]);

        if ($result->getStatusCode() === 500)
            $result = "false";
        else 
        return json_decode($result->getbody()->getContents());
    }
}
