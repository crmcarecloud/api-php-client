# CrmCareCloud\Webservice\RestApi\Client\PointHistoryApi

All URIs are relative to *https://&lt;projectURL&gt;/webservice/rest-api/enterprise-interface/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPointHistory**](PointHistoryApi.md#getpointhistory) | **GET** /point-history | Get point transaction history

# **getPointHistory**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20089 getPointHistory($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $store_id, $partner_id, $time_from, $time_to, $point_operation_type, $point_operation_note, $point_type_id)

Get point transaction history

Get a list of point transactions of the customer

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\PointHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique id of the customer
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1
$count = 100; // int | The number of records to return.
$offset = 0; // int | The number of records from a collection to skip.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$store_id = "store_id_example"; // string | The unique id of the store in CareCloud
$partner_id = "partner_id_example"; // string | Unique ID of the partner from the resource [GET /partners](/#tag/Partners)
$time_from = "time_from_example"; // string | Filter results on the start of the time interval. *(YYYY-MM-DD HH:MM:SS)*
$time_to = "time_to_example"; // string | Filter results on the end of the time interval. *(YYYY-MM-DD HH:MM:SS)*
$point_operation_type = "point_operation_type_example"; // string | Search record by the operation type name or a part of the operation type name
$point_operation_note = "point_operation_note_example"; // string | Search record by the operation note or a part of the operation note
$point_type_id = "point_type_id_example"; // string | The unique id of a point type

try {
    $result = $apiInstance->getPointHistory($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $store_id, $partner_id, $time_from, $time_to, $point_operation_type, $point_operation_note, $point_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PointHistoryApi->getPointHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique id of the customer |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **store_id** | **string**| The unique id of the store in CareCloud | [optional]
 **partner_id** | **string**| Unique ID of the partner from the resource [GET /partners](/#tag/Partners) | [optional]
 **time_from** | **string**| Filter results on the start of the time interval. *(YYYY-MM-DD HH:MM:SS)* | [optional]
 **time_to** | **string**| Filter results on the end of the time interval. *(YYYY-MM-DD HH:MM:SS)* | [optional]
 **point_operation_type** | **string**| Search record by the operation type name or a part of the operation type name | [optional]
 **point_operation_note** | **string**| Search record by the operation note or a part of the operation note | [optional]
 **point_type_id** | **string**| The unique id of a point type | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20089**](../Model/InlineResponse20089.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

