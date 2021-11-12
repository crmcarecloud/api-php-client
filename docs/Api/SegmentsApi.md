# CrmCareCloud\Webservice\RestApi\Client\SegmentsApi

All URIs are relative to *https://&lt;projectURL&gt;/enterprise-interface/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSegment**](SegmentsApi.md#getsegment) | **GET** /segments/{segment_id} | Get a segment
[**getSegments**](SegmentsApi.md#getsegments) | **GET** /segments | Get all segments
[**getSubSegmentRecords**](SegmentsApi.md#getsubsegmentrecords) | **GET** /segments/{segment_id}/segment-records | Get a collection of segment records
[**postSegmentAddCustomer**](SegmentsApi.md#postsegmentaddcustomer) | **POST** /segments/{segment_id}/actions/add-customer | Add customer to a segment
[**postSegmentRemoveCustomer**](SegmentsApi.md#postsegmentremovecustomer) | **POST** /segments/{segment_id}/actions/remove-customer | Remove customer from a segment

# **getSegment**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20096 getSegment($segment_id, $accept_language)

Get a segment

Get information about a specific segment

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\SegmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$segment_id = "segment_id_example"; // string | The unique id for the segment
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $result = $apiInstance->getSegment($segment_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentsApi->getSegment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **segment_id** | **string**| The unique id for the segment |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20096**](../Model/InlineResponse20096.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSegments**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20095 getSegments($accept_language, $count, $offset, $sort_field, $sort_direction)

Get all segments

Get information about segments as a list of all segments

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\SegmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1
$count = 100; // int | The number of records to return.
$offset = 0; // int | The number of records from a collection to skip.
$sort_field = "sort_field_example"; // string | One of the query string parameters for sorting. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.

try {
    $result = $apiInstance->getSegments($accept_language, $count, $offset, $sort_field, $sort_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentsApi->getSegments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. | [optional] [default to 0]
 **sort_field** | **string**| One of the query string parameters for sorting. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20095**](../Model/InlineResponse20095.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubSegmentRecords**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20022 getSubSegmentRecords($segment_id, $accept_language)

Get a collection of segment records

Get information about all segment records on segments resource.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\SegmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$segment_id = "segment_id_example"; // string | The unique id for the segment
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $result = $apiInstance->getSubSegmentRecords($segment_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentsApi->getSubSegmentRecords: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **segment_id** | **string**| The unique id for the segment |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSegmentAddCustomer**
> postSegmentAddCustomer($body, $segment_id, $accept_language)

Add customer to a segment

Action method that adds customer to specified segment.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\SegmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsAddcustomerBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsAddcustomerBody | 
$segment_id = "segment_id_example"; // string | The unique id for the segment
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $apiInstance->postSegmentAddCustomer($body, $segment_id, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling SegmentsApi->postSegmentAddCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ActionsAddcustomerBody**](../Model/ActionsAddcustomerBody.md)|  |
 **segment_id** | **string**| The unique id for the segment |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSegmentRemoveCustomer**
> postSegmentRemoveCustomer($body, $segment_id, $accept_language)

Remove customer from a segment

Action method that removes customer from a specified segment.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\SegmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsRemovecustomerBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsRemovecustomerBody | 
$segment_id = "segment_id_example"; // string | The unique id for the segment
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $apiInstance->postSegmentRemoveCustomer($body, $segment_id, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling SegmentsApi->postSegmentRemoveCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ActionsRemovecustomerBody**](../Model/ActionsRemovecustomerBody.md)|  |
 **segment_id** | **string**| The unique id for the segment |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

