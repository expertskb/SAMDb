<?php

/*

Name : SAMDb API
Author : Shakib Ahmed
URL : https://shakib.eu.org

*/

namespace Shakib;

class SAMDb
{
    // API token for authentication
    public $api_token;

    // Base URL for SAMDb API
    private $url = 'https://samdb.eu.org';

    // Constructor to initialize the API token
    public function __construct($token)
    {
        $this->api_token = $token;
    }

    // Method to retrieve movie information by IMDb ID
    public function movie($imdb)
    {
        // Construct the API URL for movie information
        $url = $this->url . '/api/imdb?id=' . $imdb;

        // Initialize cURL session
        $ch = curl_init($url);

        // Set cURL options
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);

        // Set authorization header with the API token
        $authorization = 'Authorization: Bearer ' . $this->api_token;
        $headers = array(
            'Content-Type: application/json',
            $authorization
        );
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        // Execute cURL session and get the response
        $response = curl_exec($ch);

        // Close cURL session
        curl_close($ch);

        // Return the API response
        return json_decode($response);
    }

    // Method to retrieve information based on IP address
    public function ip($ip)
    {
        // Construct the API URL for IP information
        $url = $this->url . '/api/ip?ip=' . $ip;

        // Initialize cURL session
        $ch = curl_init($url);

        // Set cURL options
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);

        // Set authorization header with the API token
        $authorization = 'Authorization: Bearer ' . $this->api_token;
        $headers = array(
            'Content-Type: application/json',
            $authorization
        );
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        // Execute cURL session and get the response
        $response = curl_exec($ch);

        // Close cURL session
        curl_close($ch);

        // Return the API response
        return json_decode($response);
    }

    // Method to retrieve information about a file in Google Drive
    public function gdinfo($id)
    {
        // Construct the API URL for Google Drive file information
        $url = $this->url . '/api/GDfile?id=' . $id;

        // Initialize cURL session
        $ch = curl_init($url);

        // Set cURL options
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);

        // Set authorization header with the API token
        $authorization = 'Authorization: Bearer ' . $this->api_token;
        $headers = array(
            'Content-Type: application/json',
            $authorization
        );
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        // Execute cURL session and get the response
        $response = curl_exec($ch);

        // Close cURL session
        curl_close($ch);

        // Return the API response
        return json_decode($response);
    }
}
