<?php
namespace Models;

use GuzzleHttp\Client;

class RequestFacade
{

    public function makeRequest(Client $client, array $params, array $post_data, string $query_str, string $method, string $paramType)
    {

        foreach ($params as $key => $value) {
            if (!empty($post_data['args'][$value])) {
                $body[$key] = $post_data['args'][$value];
            }
        }
        $auth = $post_data['args']['apiKey'];
        unset($post_data['args']['apiKey']);
        $result = $client->request($method, $query_str, [
            'headers' => [
                'X-FullContact-APIKey' => $auth
            ],
            $paramType => $body
        ]);

        return $result;
    }

}
