# CrmCareCloud\Webservice\RestApi\Client\CommunicationChannelsApi

All URIs are relative to *https://{project_url}/webservice/rest-api/{api_interface}/{version}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCommunicationChannel**](CommunicationChannelsApi.md#getcommunicationchannel) | **GET** /communication-channels/{communication_channel_id} | Get a communication channel
[**getCommunicationChannels**](CommunicationChannelsApi.md#getcommunicationchannels) | **GET** /communication-channels | Get all communication channels

# **getCommunicationChannel**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetCommunicationChannel200Response getCommunicationChannel($communication_channel_id, $accept_language)

Get a communication channel

Get information about a specific communication channel. This endpoint does not require authentication.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CommunicationChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$communication_channel_id = "communication_channel_id_example"; // string | The unique ID of the communication channel.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

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
 **communication_channel_id** | **string**| The unique ID of the communication channel. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetCommunicationChannel200Response**](../Model/GetCommunicationChannel200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCommunicationChannels**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetCommunicationChannels200Response getCommunicationChannels($accept_language, $count, $offset, $sort_field, $sort_direction)

Get all communication channels

Get a list of all communication channels available in the CareCloud platform. Communication channels represent the delivery methods used for customer outreach: email, SMS, web push notifications, mobile app push notifications, Viber, WhatsApp, and White Post. Channel IDs are used when filtering consent records ([GET /consents](https://carecloud.readme.io/reference/getconsents)). This endpoint does not require authentication.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CommunicationChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.
$count = 100; // int | The number of records to return in API response.  ⚠️ We recommended adjust the batch size based on processing time. Depending on the response time of the request. Default value of 100 records is used if `count` parameter is not set.
$offset = 0; // int | The number of records from a collection to skip. Default value of 0 is used when parameter `offset` is not set.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.

try {
    $result = $apiInstance->getCommunicationChannels($accept_language, $count, $offset, $sort_field, $sort_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationChannelsApi->getCommunicationChannels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return in API response.  ⚠️ We recommended adjust the batch size based on processing time. Depending on the response time of the request. Default value of 100 records is used if &#x60;count&#x60; parameter is not set. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. Default value of 0 is used when parameter &#x60;offset&#x60; is not set. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetCommunicationChannels200Response**](../Model/GetCommunicationChannels200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

