<?php
$app->post('/api/FullContact/getSingleRequest', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['apiKey', 'requestId']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    //forming request to vendor API

    $query_str = $settings['api_url'] . 'cardReader/'.$post_data['args']['requestId'];
    $post_data['args']['format'] = 'json';
    $params = [
        'apiKey' => 'apiKey',
       'returnedData'=> 'returnedData',
        'format'=> 'format',
        'diagnostics'=> 'diagnostics'
    ];
    $result = \Models\ApiRequestFacade::makeRequest($params, $post_data, $query_str);
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});