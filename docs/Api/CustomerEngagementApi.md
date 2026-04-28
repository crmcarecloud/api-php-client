# CrmCareCloud\Webservice\RestApi\Client\CustomerEngagementApi

All URIs are relative to *https://{project_url}/webservice/rest-api/{api_interface}/{version}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCustomerEngagementSetup**](CustomerEngagementApi.md#getcustomerengagementsetup) | **GET** /customer-engagement-setups/{customer_engagement_setup_id} | Get a customer engagement setup
[**getCustomerEngagementSetups**](CustomerEngagementApi.md#getcustomerengagementsetups) | **GET** /customer-engagement-setups | Get all customer engagement setups

# **getCustomerEngagementSetup**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetSetup200Response getCustomerEngagementSetup($customer_engagement_setup_id, $accept_language)

Get a customer engagement setup

Get information about a specific customer engagement setup.  Returns the full configuration of a single customer engagement setup, which defines the tracking behaviour for a specific deployment of the CareCloud JavaScript tracking script. When a visitor is identified (for example, after login), events captured by the script are linked to the corresponding customer profile.  This endpoint does not require authentication. To retrieve all available setups, use [GET /customer-engagement-setups](https://carecloud.readme.io/reference/getcustomerengagementsetups).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomerEngagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_engagement_setup_id = "customer_engagement_setup_id_example"; // string | The unique ID of the customer engagement setup.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->getCustomerEngagementSetup($customer_engagement_setup_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerEngagementApi->getCustomerEngagementSetup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_engagement_setup_id** | **string**| The unique ID of the customer engagement setup. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetSetup200Response**](../Model/GetSetup200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomerEngagementSetups**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetSetups200Response getCustomerEngagementSetups($accept_language, $count, $offset, $sort_field, $sort_direction)

Get all customer engagement setups

Get all available setups for customer engagement.  Customer engagement setups define the configuration for the CareCloud JavaScript tracking script, which captures browser-based events on websites and links them to customer profiles. Each setup specifies the tracking behaviour for a particular website or deployment context.  This endpoint does not require authentication. It is typically called by the tracking script during initialisation to load the applicable configuration.  Related: [GET /customer-engagement-setups/{customer_engagement_setup_id}](https://carecloud.readme.io/reference/getcustomerengagementsetup)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomerEngagementApi(
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
    $result = $apiInstance->getCustomerEngagementSetups($accept_language, $count, $offset, $sort_field, $sort_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerEngagementApi->getCustomerEngagementSetups: ', $e->getMessage(), PHP_EOL;
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

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetSetups200Response**](../Model/GetSetups200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

