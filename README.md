[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/FullContact/functions?utm_source=RapidAPIGitHub_FullContactFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# FullContact Package
Build a clearer picture of your customers in minutes!
* Domain: [FullContact](http://fullcontact.com)
* Credentials: apiKey

## How to get credentials: 
0. Open [FullContact web-site](https://www.fullcontact.com) 
1. Register or log in
2. Go to [Dashboard](https://portal.fullcontact.com/dashboard) to ket your apiKey

 ## Webhook credentials
 
 Please use SDK to test this feature.
 
 0. Go to [RapidAPI](http://rapidapi.com)
 1. Log in or create an account
 2. Go to [My apps](https://dashboard.rapidapi.com/projects)
 3. Add new project with projectName to get your project Key
 
 | Field      | Type       | Description
 |------------|------------|----------
 | projectName     | credentials| Your RapidAPI project name
 | projectKey | credentials     | Your RapidAPI project key


## Custom datatypes: 
 |Datatype|Description|Example
 |--------|-----------|----------
 |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
 |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
 |List|Simple array|```["123", "sample"]``` 
 |Select|String with predefined values|```sample```
 |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```
 

## FullContact.lookupPersonByEmail
Use the person method to request more information about a specific person by email.

You can use our service as webhookUrl: 
   ```
   https://webhooks.rapidapi.com/api/message/FullContact/webhookEvent/{projectName}/{projectKey} * see credentials description above
   ```

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Api key received from FullContact
| email        | String     | The email address of the person being looked up.
| style        | Select     | The style parameter can be used to control the document structure returned. The default value, list, indicates that collections such as photos or socialProfiles should be grouped as arrays. An alternate value of dictionary is currently supported, which restructures collections as dictionaries.
| webhookUrl   | String     | Callback url you'd like the data to be posted back to
| webhookId    | String     | You can enter anything you want here, we will just pass it back in the response. This allows you to track the webhook if you wish.
| confidence   | Select     | A confidence of max will return less data than usual, however, the data that is returned will have a higher likelihood of being correct. On the other hand, a confidence of low will return more data than usual, but makes the possibility of a mistake in that data more likely. med returns more data than high and less than low, with an error rate between the two.
| macromeasures| Boolean    | FullContact has partnered with Macromeasures to power Person API's ability for providing affinity data about individuals! With this premium feature, you will begin to untap the potential of being able to better understand the people behind your queries by receiving "interests" related information

## FullContact.lookupPersonByEmailMD5
Use the person method to request more information about a specific person by email md5 hash.

You can use our service as webhookUrl: 
   ```
   https://webhooks.rapidapi.com/api/message/FullContact/webhookEvent/{projectName}/{projectKey} * see credentials description above
 ```

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Api key received from FullContact
| emailMD5     | String     | The email address md5 hash of the person being looked up.
| style        | Select     | The style parameter can be used to control the document structure returned. The default value, list, indicates that collections such as photos or socialProfiles should be grouped as arrays. An alternate value of dictionary is currently supported, which restructures collections as dictionaries.
| webhookUrl   | String     | Callback url you'd like the data to be posted back to
| webhookId    | String     | You can enter anything you want here, we will just pass it back in the response. This allows you to track the webhook if you wish.
| confidence   | Select     | A confidence of max will return less data than usual, however, the data that is returned will have a higher likelihood of being correct. On the other hand, a confidence of low will return more data than usual, but makes the possibility of a mistake in that data more likely. med returns more data than high and less than low, with an error rate between the two.
| macromeasures| Boolean    | FullContact has partnered with Macromeasures to power Person API's ability for providing affinity data about individuals! With this premium feature, you will begin to untap the potential of being able to better understand the people behind your queries by receiving "interests" related information

## FullContact.lookupPersonByEmailSHA256
Use the person method to request more information about a specific person by email sha256 hash.
You can use our service as webhookUrl: 
   ```
   https://webhooks.rapidapi.com/api/message/FullContact/webhookEvent/{projectName}/{projectKey} * see credentials description above
 ```


| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Api key received from FullContact
| emailSHA256  | String     | The email address sha256 hash of the person being looked up.
| style        | Select     | The style parameter can be used to control the document structure returned. The default value, list, indicates that collections such as photos or socialProfiles should be grouped as arrays. An alternate value of dictionary is currently supported, which restructures collections as dictionaries.
| webhookUrl   | String     | Callback url you'd like the data to be posted back to
| webhookId    | String     | You can enter anything you want here, we will just pass it back in the response. This allows you to track the webhook if you wish.
| confidence   | Select     | A confidence of max will return less data than usual, however, the data that is returned will have a higher likelihood of being correct. On the other hand, a confidence of low will return more data than usual, but makes the possibility of a mistake in that data more likely. med returns more data than high and less than low, with an error rate between the two.
| macromeasures| Boolean    | FullContact has partnered with Macromeasures to power Person API's ability for providing affinity data about individuals! With this premium feature, you will begin to untap the potential of being able to better understand the people behind your queries by receiving "interests" related information

## FullContact.lookupPersonByPhone
Use the person method to request more information about a specific person by phone number.
You can use our service as webhookUrl: 
   ```
   https://webhooks.rapidapi.com/api/message/FullContact/webhookEvent/{projectName}/{projectKey} * see credentials description above
 ```


| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Api key received from FullContact
| phone        | String     | The phone number of the person being looked up.
| countryCode  | String     | This parameter must be passed when using non US/Canada based numbers. Use the ISO-3166 two-digit country code (Great Britain = GB). If not entered it defaults to US
| style        | Select     | The style parameter can be used to control the document structure returned. The default value, list, indicates that collections such as photos or socialProfiles should be grouped as arrays. An alternate value of dictionary is currently supported, which restructures collections as dictionaries.
| webhookUrl   | String     | Callback url you'd like the data to be posted back to
| webhookId    | String     | You can enter anything you want here, we will just pass it back in the response. This allows you to track the webhook if you wish.
| confidence   | Select     | A confidence of max will return less data than usual, however, the data that is returned will have a higher likelihood of being correct. On the other hand, a confidence of low will return more data than usual, but makes the possibility of a mistake in that data more likely. med returns more data than high and less than low, with an error rate between the two.
| macromeasures| Boolean    | FullContact has partnered with Macromeasures to power Person API's ability for providing affinity data about individuals! With this premium feature, you will begin to untap the potential of being able to better understand the people behind your queries by receiving "interests" related information

## FullContact.lookupPersonByTwitter
Use the person method to request more information about a specific person by twitter.
You can use our service as webhookUrl: 
   ```
   https://webhooks.rapidapi.com/api/message/FullContact/webhookEvent/{projectName}/{projectKey} * see credentials description above
 ```


| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| Api key received from FullContact
| twitter      | String     | The twitter of the person being looked up.
| style        | Select     | The style parameter can be used to control the document structure returned. The default value, list, indicates that collections such as photos or socialProfiles should be grouped as arrays. An alternate value of dictionary is currently supported, which restructures collections as dictionaries.
| webhookUrl   | String     | Callback url you'd like the data to be posted back to
| webhookId    | String     | You can enter anything you want here, we will just pass it back in the response. This allows you to track the webhook if you wish.
| confidence   | Select     | A confidence of max will return less data than usual, however, the data that is returned will have a higher likelihood of being correct. On the other hand, a confidence of low will return more data than usual, but makes the possibility of a mistake in that data more likely. med returns more data than high and less than low, with an error rate between the two.
| macromeasures| Boolean    | FullContact has partnered with Macromeasures to power Person API's ability for providing affinity data about individuals! With this premium feature, you will begin to untap the potential of being able to better understand the people behind your queries by receiving "interests" related information

## FullContact.lookupCompanyByDomain
Use this method to request more information about a specific company by domain.
You can use our service as webhookUrl: 
   ```
   https://webhooks.rapidapi.com/api/message/FullContact/webhookEvent/{projectName}/{projectKey} * see credentials description above
 ```


| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Api key received from FullContact
| domain    | String     | The domain of the company being looked up.
| keyPeople | Boolean    | If true, a list of Executive and VP level employees at this company will be returned under the keyPeople field.
| webhookUrl| String     | Callback url you'd like the data to be posted back to
| webhookId | String     | You can enter anything you want here, we will just pass it back in the response. This allows you to track the webhook if you wish.

## FullContact.lookupCompanyByName
Use this method to request more information about a specific company by name.

| Field      | Type       | Description
|------------|------------|----------
| apiKey     | credentials| Api key received from FullContact
| companyName| String     | The name of the company being looked up.
| sort       | Select     | Controls how results will be sorted.
| location   | String     | If supplied, only companies matching given location will be returned. The location is a general location where one can include any combination of locality, region or country as input.
| locality   | String     | If supplied, only companies matching given locality/city will be returned.
| region     | String     | If supplied, only companies matching given region/state will be returned.
| country    | String     | If supplied, only companies matching given country will be returned.

## FullContact.uploadCard
Use the Upload Card method to submit front and back photos of a business card for processing.
You can use our service as webhookUrl: 
   ```
   https://webhooks.rapidapi.com/api/message/FullContact/webhookEvent/{projectName}/{projectKey} * see credentials description above
 ```


| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| Api key received from FullContact
| cardFront   | File       | Front of the card
| cardBack    | File       | Back of the card
| webhookUrl  | String     | Callback url you'd like the data to be posted back to
| verified    | Select     | Used to specify the quality of transcription. Calls to verified=medium require a FullContact premium account.
| returnedData| Select     | A response can contain verified and unverified data, this parameter can be used to exclude unverified data from being returned in the response.
| casing      | Select     | Card Reader can alter the casing of certain fields in the final results.
| sandbox     | Select     | Card Reader Sandbox is a free, quick response mode for testing and development.
| URID        | String     | If you pass in the URID parameter, we will make sure that the request you are referring to by this id is only processed once.

## FullContact.getSingleRequest
Use the view single request method to view a specific transcription

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| Api key received from FullContact
| requestId   | String     | ID of the request
| returnedData| Select     | A response can contain verified and unverified data, this parameter can be used to exclude unverified data from being returned in the response.
| diagnostics | Boolean    | With this parameter you can see what the response from your own server was when we sent out your webhook.

## FullContact.getRequests
Use the view requests method to view a paged history of your transcriptions.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| Api key received from FullContact
| page        | Number     | Used to page through the results. If not specified, it defaults to the first page (0).
| returnedData| Select     | A response can contain verified and unverified data, this parameter can be used to exclude unverified data from being returned in the response.
| diagnostics | Boolean    | With this parameter you can see what the response from your own server was when we sent out your webhook.

## FullContact.verifySingleEmail
Provides validity of an email.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Api key received from FullContact
| email | String     | The email address to verify

## FullContact.verifyEmails
Provides validity of several emails.
You can use our service as webhookUrl: 
   ```
   https://webhooks.rapidapi.com/api/message/FullContact/webhookEvent/{projectName}/{projectKey} * see credentials description above
 ```


| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Api key received from FullContact
| emails    | List       | The email addresses to verify
| webhookUrl| String     | Callback url you'd like the data to be posted back to

## FullContact.getVerifyEmailsStatus
Get the state and result of a previous batch request

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Api key received from FullContact
| verifyId| String     | ID of the batch request

## FullContact.getAccountStats
The Account Stats endpoint allows you to query FullContact to view your API account usage for the current month or a previous month that you can define using the optional period parameter.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Api key received from FullContact
| period| DatePicker | You can define the month that you want to see usage stats for by using the period parameter.

