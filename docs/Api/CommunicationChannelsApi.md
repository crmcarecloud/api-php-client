# CrmCareCloud\Webservice\RestApi\Client\CommunicationChannelsApi

All URIs are relative to *https://&lt;projectURL&gt;/webservice/rest-api/enterprise-interface/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCommunicationChannel**](CommunicationChannelsApi.md#getcommunicationchannel) | **GET** /communication-channels/{communication_channel_id} | Detail of a communication channel
[**getCommunicationChannels**](CommunicationChannelsApi.md#getcommunicationchannels) | **GET** /communication-channels | Get all communication channels

# **getCommunicationChannel**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20023 getCommunicationChannel($communication_channel_id, $accept_language)

Detail of a communication channel

Get information about a specific communication channel

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CommunicationChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$communication_channel_id = "communication_channel_id_example"; // string | The unique id of the communication channel
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $result = $apiInstance->getCommunicationChannel($communication_channel_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationChannelsApi->getCommunicationChannel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **communication_channel_id** | **string**| The unique id of the communication channel |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20023**](../Model/InlineResponse20023.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCommunicationChannels**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20022 getCommunicationChannels($accept_language)

Get all communication channels

Get a list of communication channels accepted in CRM CareCloud

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CommunicationChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $result = $apiInstance->getCommunicationChannels($accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationChannelsApi->getCommunicationChannels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

