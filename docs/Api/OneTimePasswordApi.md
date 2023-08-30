# CrmCareCloud\Webservice\RestApi\Client\OneTimePasswordApi

All URIs are relative to *https://{project_url}/webservice/rest-api/{api_interface}/{version}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postSendOtp**](OneTimePasswordApi.md#postsendotp) | **POST** /one-time-password/actions/send | Send a one-time password to a communication channel.
[**postVerifyOtp**](OneTimePasswordApi.md#postverifyotp) | **POST** /one-time-password/actions/verify | Verify a one-time password

# **postSendOtp**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20083 postSendOtp($body, $accept_language)

Send a one-time password to a communication channel.

Action method sends generated password to the selected communication channel and provides verification string. Resource provides a mechanism OTP for the verification using a unique password that can only be used once.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CrmCareCloud\Webservice\RestApi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\OneTimePasswordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsSendBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsSendBody | 
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->postSendOtp($body, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OneTimePasswordApi->postSendOtp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ActionsSendBody**](../Model/ActionsSendBody.md)|  |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20083**](../Model/InlineResponse20083.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postVerifyOtp**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20084 postVerifyOtp($body, $accept_language)

Verify a one-time password

Action method verify one time password. Resource provides a mechanism OTP for the verification using a unique password that can only be used once.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CrmCareCloud\Webservice\RestApi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\OneTimePasswordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsVerifyBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsVerifyBody | 
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->postVerifyOtp($body, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OneTimePasswordApi->postVerifyOtp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ActionsVerifyBody**](../Model/ActionsVerifyBody.md)|  |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20084**](../Model/InlineResponse20084.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

