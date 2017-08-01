<?php
$app->post('/api/FullContact/lookupPersonByEmailMD5', function ($request, $response, $args) {
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['apiKey', 'emailMD5']);
    if (!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback'] == 'error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }
    //forming request to vendor API

    $query_str = $settings['api_url'] .'person.json';
    $post_data['args']['webhookBody'] = 'json';

    $params = [
        'apiKey' => 'apiKey',
        'emailMD5'=> 'emailMD5',
        'style'=> 'style',
        'webhookUrl' => 'webhookUrl',
        'webhookId'=> 'webhookId',
        'webhookBody'=> 'webhookBody',
        'confidence'=> 'confidence',
        'macromeasures'=> 'macromeasures'
    ];
    $result = \Models\ApiRequestFacade::makeRequest($params, $post_data, $query_str);
    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});