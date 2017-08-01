<?php
$app->post('/api/FullContact/uploadCard', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['apiKey', 'cardFront']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    //forming request to vendor API

    $query_str = $settings['api_url'] . 'cardReader';
    $post_data['args']['cardFront'] = base64_encode(file_get_contents($post_data['args']['cardFront']));
    if (!empty($post_data['args']['cardBack'])) {
        $post_data['args']['cardBack'] = base64_encode(file_get_contents($post_data['args']['cardBack']));
    };
    $post_data['args']['format'] = 'json';

    $params = [
        'apiKey' => 'apiKey',
        'responseCode'=> '202',
        'front' => 'cardFront',
        'back' => 'cardBack',
        'verified'=> 'verified',
        'returnedData'=> 'returnedData',
        'format'=> 'format',
        'casing'=> 'casing',
        'sandbox'=> 'sandbox',
        'URID'=> 'URID',
        'webhookUrl' => 'webhookUrl',
    ];
    $result = \Models\ApiRequestFacade::makeRequest($params, $post_data, $query_str, 'POST', 'json');
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});