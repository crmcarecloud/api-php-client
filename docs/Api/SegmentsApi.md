# CrmCareCloud\Webservice\RestApi\Client\SegmentsApi

All URIs are relative to *https://{project_url}/webservice/rest-api/{api_interface}/{version}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSegment**](SegmentsApi.md#getsegment) | **GET** /segments/{segment_id} | Get a segment
[**getSegmentGroup**](SegmentsApi.md#getsegmentgroup) | **GET** /segment-groups/{segment_group_id} | Get a segment group
[**getSegmentGroups**](SegmentsApi.md#getsegmentgroups) | **GET** /segment-groups | Get all segment groups
[**getSegments**](SegmentsApi.md#getsegments) | **GET** /segments | Get all segments
[**getSubSegmentRecords**](SegmentsApi.md#getsubsegmentrecords) | **GET** /segments/{segment_id}/segment-records | Get a collection of segment records
[**postSegment**](SegmentsApi.md#postsegment) | **POST** /segments | Create an empty segment
[**postSegmentAddCustomer**](SegmentsApi.md#postsegmentaddcustomer) | **POST** /segments/{segment_id}/actions/add-customer | Add customer to a segment
[**postSegmentRemoveCustomer**](SegmentsApi.md#postsegmentremovecustomer) | **POST** /segments/{segment_id}/actions/remove-customer | Remove customer from a segment

# **getSegment**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetSegment200response getSegment($segment_id, $accept_language)

Get a segment

Get information about a specific segment.

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
$segment_id = "segment_id_example"; // string | The unique ID of the segment.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

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
 **segment_id** | **string**| The unique ID of the segment. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetSegment200response**](../Model/GetSegment200response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSegmentGroup**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetSegmentGroup200Response getSegmentGroup($segment_group_id, $accept_language)

Get a segment group

Get information about a specific segment group.

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
$segment_group_id = "segment_group_id_example"; // string | The unique ID of the segment group.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->getSegmentGroup($segment_group_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentsApi->getSegmentGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **segment_group_id** | **string**| The unique ID of the segment group. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetSegmentGroup200Response**](../Model/GetSegmentGroup200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSegmentGroups**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetSegmentGroups200Response getSegmentGroups($accept_language, $count, $offset, $sort_field, $sort_direction, $name, $text_id)

Get all segment groups

Get information about segment groups.

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
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.
$count = 100; // int | The number of records to return in API response. <br/>⚠️ We recommended adjust the batch size based on processing time. Depending on the response time of the request. Default value of 100 records is used if `count` parameter is not set.
$offset = 0; // int | The number of records from a collection to skip. Default value of 0 is used when parameter `offset` is not set.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$name = "name_example"; // string | Name of the segment group.
$text_id = "text_id_example"; // string | You can filter resource results depending on his text ID.

try {
    $result = $apiInstance->getSegmentGroups($accept_language, $count, $offset, $sort_field, $sort_direction, $name, $text_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentsApi->getSegmentGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return in API response. &lt;br/&gt;⚠️ We recommended adjust the batch size based on processing time. Depending on the response time of the request. Default value of 100 records is used if &#x60;count&#x60; parameter is not set. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. Default value of 0 is used when parameter &#x60;offset&#x60; is not set. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **name** | **string**| Name of the segment group. | [optional]
 **text_id** | **string**| You can filter resource results depending on his text ID. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetSegmentGroups200Response**](../Model/GetSegmentGroups200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSegments**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetSegments200Response getSegments($accept_language, $count, $offset, $sort_field, $sort_direction, $segment_group_ids)

Get all segments

Get information about segments as a list of all segments.

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
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.
$count = 100; // int | The number of records to return in API response. <br/>⚠️ We recommended adjust the batch size based on processing time. Depending on the response time of the request. Default value of 100 records is used if `count` parameter is not set.
$offset = 0; // int | The number of records from a collection to skip. Default value of 0 is used when parameter `offset` is not set.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$segment_group_ids = array("segment_group_ids_example"); // string[] | List of the segment group IDs from the resource [GET /segment-groups](#tag/Segments/operation/getSegmentGroups).

try {
    $result = $apiInstance->getSegments($accept_language, $count, $offset, $sort_field, $sort_direction, $segment_group_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentsApi->getSegments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return in API response. &lt;br/&gt;⚠️ We recommended adjust the batch size based on processing time. Depending on the response time of the request. Default value of 100 records is used if &#x60;count&#x60; parameter is not set. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. Default value of 0 is used when parameter &#x60;offset&#x60; is not set. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **segment_group_ids** | [**string[]**](../Model/string.md)| List of the segment group IDs from the resource [GET /segment-groups](#tag/Segments/operation/getSegmentGroups). | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetSegments200Response**](../Model/GetSegments200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubSegmentRecords**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetSubSegmentRecords200Response getSubSegmentRecords($segment_id, $accept_language, $segment_group_ids)

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
$segment_id = "segment_id_example"; // string | The unique ID of the segment.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.
$segment_group_ids = array("segment_group_ids_example"); // string[] | List of the segment group IDs from the resource [GET /segment-groups](#tag/Segments/operation/getSegmentGroups).

try {
    $result = $apiInstance->getSubSegmentRecords($segment_id, $accept_language, $segment_group_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentsApi->getSubSegmentRecords: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **segment_id** | **string**| The unique ID of the segment. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **segment_group_ids** | [**string[]**](../Model/string.md)| List of the segment group IDs from the resource [GET /segment-groups](#tag/Segments/operation/getSegmentGroups). | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetSubSegmentRecords200Response**](../Model/GetSubSegmentRecords200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSegment**
> \CrmCareCloud\Webservice\RestApi\Client\Model\PostSegments201Response postSegment($body, $accept_language)

Create an empty segment

Create an empty segment.

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
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\SegmentsBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\SegmentsBody | 
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->postSegment($body, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SegmentsApi->postSegment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\SegmentsBody**](../Model/SegmentsBody.md)|  |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\PostSegments201Response**](../Model/PostSegments201Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
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
$segment_id = "segment_id_example"; // string | The unique ID of the segment.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

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
 **segment_id** | **string**| The unique ID of the segment. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

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
$segment_id = "segment_id_example"; // string | The unique ID of the segment.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

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
 **segment_id** | **string**| The unique ID of the segment. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

