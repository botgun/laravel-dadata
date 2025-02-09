<?php

namespace BotGun\DaData\Http;

use GuzzleHttp\Client;

abstract class HttpClient
{
    protected Client $client;
    protected string     $apiKey;
    protected string     $apiSecret;
    protected int        $timeout;
    protected array      $config;
    protected string     $baseUrl;


    public function __construct()
    {
        $this->apiKey       = config('dadata.key');
        $this->apiSecret    = config('dadata.secret');
        $this->timeout      = config('dadata.timeout');
        $this->config       = [
            'timeout'   => $this->timeout,
            'base_uri'  => $this->baseUrl,
            'headers' => [
                'Accept'        => 'application/json',
                'Content-Type'  => 'application/json',
                'X-Secret'      => $this->apiSecret,
                'Authorization' => sprintf('Token %s', $this->apiKey),
            ],
        ];
        $this->client = new Client($this->config);
    }
}
