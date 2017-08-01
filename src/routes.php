       <?php
       $routes = [
       'webhookEvent',
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
        'lookupPersonByEmail',
        'metadata'
       ];
       foreach ($routes as $file) {
           require __DIR__ . '/../src/routes/' . $file . '.php';
       }

