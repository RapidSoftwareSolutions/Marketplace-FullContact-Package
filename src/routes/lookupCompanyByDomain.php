<?php
$app->post('/api/FullContact/lookupCompanyByDomain', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['apiKey', 'domain']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    //forming request to vendor API

    $query_str = $settings['api_url'] . 'company/lookup.json';
    $post_data['args']['webhookBody'] = 'json';
    $params = [
        'apiKey' => 'apiKey',
        'domain' => 'domain',
        'keyPeople' => 'keyPeople',
        'webhookUrl' => 'webhookUrl',
        'webhookId' => 'webhookId',
        'webhookBody' => 'webhookBody'
    ];
    $result = \Models\ApiRequestFacade::makeRequest($params, $post_data, $query_str);
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});