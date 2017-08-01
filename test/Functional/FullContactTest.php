<?php

namespace Test\Functional;

require_once(__DIR__ . '/../../src/Models/checkRequest.php');
class FullContactTest extends BaseTestCase {

    public function testListMetrics() {

        $routes = [
            'getAccountStats',
            'getVerifyEmailsStatus',
            'verifyEmails',
            'verifySingleEmail',
            'getRequests',
            'getSingleRequest',
            'uploadCard',
            'lookupCompanyByName',
            'lookupCompanyByDomain',
            'lookupPersonByTwitter',
            'lookupPersonByPhone',
            'lookupPersonByEmailSHA256',
            'lookupPersonByEmailMD5',
            'lookupPersonByEmail'

        ];

        foreach($routes as $file) {
            $var = '{  
                    }';
            $post_data = json_decode($var, true);

            $response = $this->runApp('POST', '/api/FullContact/'.$file, $post_data);

            $this->assertEquals(200, $response->getStatusCode(), 'Error in '.$file.' method');
        }
    }

}
