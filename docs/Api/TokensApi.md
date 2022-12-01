# CrmCareCloud\Webservice\RestApi\Client\TokensApi

All URIs are relative to *https://&lt;projectURL&gt;/webservice/rest-api/enterprise-interface/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTokenAuthentication**](TokensApi.md#gettokenauthentication) | **GET** /tokens/{token_id}/actions/auth-token | Get authentication token
[**postToken**](TokensApi.md#posttoken) | **POST** /tokens | Create a token
[**postTokenLogin**](TokensApi.md#posttokenlogin) | **POST** /tokens/{token_id}/actions/login | Login to the application
[**postTokenLogout**](TokensApi.md#posttokenlogout) | **POST** /tokens/{token_id}/actions/logout | Logout from the application
[**postTokenSendPasswordSetup**](TokensApi.md#posttokensendpasswordsetup) | **POST** /tokens/{token_id}/actions/send-password-setup-email | Send email for set up of the new customer password
[**postTokenSocialLogin**](TokensApi.md#posttokensociallogin) | **POST** /tokens/{token_id}/actions/social-network-login | Login via social network
[**postTokenTestCustomerLogin**](TokensApi.md#posttokentestcustomerlogin) | **POST** /tokens/{token_id}/actions/login-test-customer | Login to the application for test customer
[**putToken**](TokensApi.md#puttoken) | **PUT** /tokens/{token_id} | Edit a push token

# **getTokenAuthentication**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200155 getTokenAuthentication($token_id, $external_application_id, $token_type, $accept_language)

Get authentication token

Returns authentication token for specific external application

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = CrmCareCloud\Webservice\RestApi\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CrmCareCloud\Webservice\RestApi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token_id = "token_id_example"; // string | Client's application token
$external_application_id = "external_application_id_example"; // string | Id of external application. For id of external application, please contact your account manager or look to resource [customer-external-applications](#tag/Customer-external-applications)
$token_type = 1; // int | Parameter set witch token type should be generated. *Possible values: 1- alphanumeric, 2- numeric*
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $result = $apiInstance->getTokenAuthentication($token_id, $external_application_id, $token_type, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->getTokenAuthentication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token_id** | **string**| Client&#x27;s application token |
 **external_application_id** | **string**| Id of external application. For id of external application, please contact your account manager or look to resource [customer-external-applications](#tag/Customer-external-applications) |
 **token_type** | **int**| Parameter set witch token type should be generated. *Possible values: 1- alphanumeric, 2- numeric* | [default to 1]
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200155**](../Model/InlineResponse200155.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postToken**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20122 postToken($body, $accept_language)

Create a token

Create a token and setup of the client's application <p class=\"warning\">Note: When creating a new token, HTTP header doesn't contain token_id in authentication part.</p> <p class=\"warning\">⚠️ Warning: We highly recommend filling all identifications in tokens resource (device and application) to avoid problems if multiple applications use CareCloud REST API on one device.</p> <p class=\"warning\">The creation of a token is different from other API calls. HTTP Authorization header contains only a login name and no token. See [Use cases](#section/Use-cases/Authentication-and-login-process-for-customer-interface).</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = CrmCareCloud\Webservice\RestApi\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\TokensBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\TokensBody | 
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $result = $apiInstance->postToken($body, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->postToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\TokensBody**](../Model/TokensBody.md)|  |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20122**](../Model/InlineResponse20122.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTokenLogin**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2017 postTokenLogin($body, $token_id, $accept_language)

Login to the application

Login of a customer account to client's application

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = CrmCareCloud\Webservice\RestApi\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CrmCareCloud\Webservice\RestApi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsLoginBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsLoginBody | 
$token_id = "token_id_example"; // string | Client's application token
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $result = $apiInstance->postTokenLogin($body, $token_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->postTokenLogin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ActionsLoginBody**](../Model/ActionsLoginBody.md)|  |
 **token_id** | **string**| Client&#x27;s application token |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2017**](../Model/InlineResponse2017.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTokenLogout**
> postTokenLogout($token_id, $accept_language)

Logout from the application

Logout of a customer account to client's application

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = CrmCareCloud\Webservice\RestApi\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CrmCareCloud\Webservice\RestApi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token_id = "token_id_example"; // string | Client's application token
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $apiInstance->postTokenLogout($token_id, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->postTokenLogout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token_id** | **string**| Client&#x27;s application token |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTokenSendPasswordSetup**
> postTokenSendPasswordSetup($body, $token_id, $accept_language)

Send email for set up of the new customer password

Send email, that contains link to set up a password

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = CrmCareCloud\Webservice\RestApi\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CrmCareCloud\Webservice\RestApi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsSendpasswordsetupemailBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsSendpasswordsetupemailBody | 
$token_id = "token_id_example"; // string | Client's application token
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $apiInstance->postTokenSendPasswordSetup($body, $token_id, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->postTokenSendPasswordSetup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ActionsSendpasswordsetupemailBody**](../Model/ActionsSendpasswordsetupemailBody.md)|  |
 **token_id** | **string**| Client&#x27;s application token |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTokenSocialLogin**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2017 postTokenSocialLogin($body, $token_id, $accept_language)

Login via social network

Login of a customer account to client's application via social network

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = CrmCareCloud\Webservice\RestApi\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CrmCareCloud\Webservice\RestApi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsSocialnetworkloginBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsSocialnetworkloginBody | 
$token_id = "token_id_example"; // string | Client's application token
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $result = $apiInstance->postTokenSocialLogin($body, $token_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->postTokenSocialLogin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ActionsSocialnetworkloginBody**](../Model/ActionsSocialnetworkloginBody.md)|  |
 **token_id** | **string**| Client&#x27;s application token |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2017**](../Model/InlineResponse2017.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTokenTestCustomerLogin**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2017 postTokenTestCustomerLogin($token_id, $accept_language)

Login to the application for test customer

Login of a test customer account to client's application.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = CrmCareCloud\Webservice\RestApi\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CrmCareCloud\Webservice\RestApi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token_id = "token_id_example"; // string | Client's application token
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $result = $apiInstance->postTokenTestCustomerLogin($token_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->postTokenTestCustomerLogin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token_id** | **string**| Client&#x27;s application token |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2017**](../Model/InlineResponse2017.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putToken**
> putToken($body, $token_id, $accept_language)

Edit a push token

Update a push token and installation setup

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = CrmCareCloud\Webservice\RestApi\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CrmCareCloud\Webservice\RestApi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\TokensTokenIdBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\TokensTokenIdBody | 
$token_id = "token_id_example"; // string | Client's application token
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $apiInstance->putToken($body, $token_id, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->putToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\TokensTokenIdBody**](../Model/TokensTokenIdBody.md)|  |
 **token_id** | **string**| Client&#x27;s application token |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

