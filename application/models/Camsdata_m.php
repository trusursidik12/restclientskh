<?php

use GuzzleHttp\Client;

class Camsdata_m extends CI_model
{
	
	private $_client;

	public function __construct()
	{
		$this->_client 	= new Client([
			'base_uri' 	=> 'http://ispumaps.id/restserverclientdata/'
		]);
	}

	// public function getalldata()
	// {
	// 	try
	// 	{
	// 		$response = $this->_client->request('GET', '', [
	// 			'query' => [
	// 				'trusur_key' => 'VHJ1c3VyVW5nZ3VsVGVrbnVzYV9wVA=='
	// 			],
	// 		]);

	// 		$result = json_decode($response->getBody()->getContents(), true);

	// 		return $result['data'];
	// 	}
	// 	catch (GuzzleHttp\Exception\ClientException $e)
	// 	{
	// 		$response = $e->getResponse();
	// 		$responseBodyAsString = $response->getBody()->getContents();
	// 	}
	// }

	// public function getdatasolorum()
	// {
	// 	try
	// 	{
	// 		$response = $this->_client->request('GET', 'api/solorum', [
	// 			'query' => [
	// 				'trusur_key' => 'VHJ1c3VyVW5nZ3VsVGVrbnVzYV9wVA=='
	// 			],
	// 		]);

	// 		$result = json_decode($response->getBody()->getContents(), true);

	// 		return $result['data'];
	// 	}
	// 	catch (GuzzleHttp\Exception\ClientException $e)
	// 	{
	// 		$response = $e->getResponse();
	// 		$responseBodyAsString = $response->getBody()->getContents();
	// 	}
	// }

	// public function getdatasologupit()
	// {
	// 	try
	// 	{
	// 		$response = $this->_client->request('GET', 'api/sologupit', [
	// 			'query' => [
	// 				'trusur_key' => 'VHJ1c3VyVW5nZ3VsVGVrbnVzYV9wVA=='
	// 			],
	// 		]);

	// 		$result = json_decode($response->getBody()->getContents(), true);

	// 		return $result['data'];
	// 	}
	// 	catch (GuzzleHttp\Exception\ClientException $e)
	// 	{
	// 		$response = $e->getResponse();
	// 		$responseBodyAsString = $response->getBody()->getContents();
	// 	}
	// }

	public function get_plesan()
	{
		try
		{
			$response = $this->_client->request('GET', 'api/get/data/plesan', [
				'query' => [
					'trusur_key' => 'VHJ1c3VyVW5nZ3VsVGVrbnVzYV9wVA=='
				],
			]);

			$result = json_decode($response->getBody()->getContents(), true);

			return $result['data'];
		}
		catch (GuzzleHttp\Exception\ClientException $e)
		{
			$response = $e->getResponse();
			$responseBodyAsString = $response->getBody()->getContents();
		}
	}
}