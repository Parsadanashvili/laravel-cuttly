<?php

namespace Parsadanashvili\LaravelCuttly;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Exception\RequestException;
use Parsadanashvili\LaravelCuttly\Concerns\Request;
use Parsadanashvili\LaravelCuttly\Exceptions\ApiCredentialsException;
use Parsadanashvili\LaravelCuttly\Exceptions\ShortenRequestException;
use Throwable;

class Cuttly
{
    /**
     * Process pay request
     *
     * @param Request $request
     *
     * @return mixed
     * @throws ShortenRequestException
     * @throws Throwable
     */
    public function processShorten(Request $request)
    {
        $data = $request->toRequest();

        $response = $this->request($data);

        $url = $response['shortLink'];

        throw_if($response['status'] != 7, new ShortenRequestException('Given URL is incorrect'));

        return $url;
    }

    /**
     * Send API request
     *
     * @param array $data
     *
     * @return array
     * @throws ApiCredentialsException
     * @throws ShortenRequestException
     * @throws Throwable
     */
    public function request(array $data = [])
    {
        $key = config('cuttly.api_key');

        throw_if(empty($key), new ApiCredentialsException);

        try {
            $response = json_decode((new Client)->request('GET','https://cutt.ly/api/api.php', [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'user-agent' => 'laravel-cuttly',
                ],
                'query' => [
                    'key' => $key,
                    ...$data
                ]
            ])->getBody()->getContents(), false);
        } catch (RequestException $exception) {
            throw new ShortenRequestException($exception->getMessage());
        }

        return $response;
    }
}
