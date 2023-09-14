# CrmCareCloud\Webservice\RestApi\Client\PointsApi

All URIs are relative to *https://{project_url}/webservice/rest-api/{api_interface}/{version}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPoint**](PointsApi.md#getpoint) | **GET** /points/{point_id} | Get a point record
[**getPoints**](PointsApi.md#getpoints) | **GET** /points | Get all point records
[**getSubPointPurchases**](PointsApi.md#getsubpointpurchases) | **GET** /points/{point_id}/purchases | Get a collection of purchases
[**postPointsAssign**](PointsApi.md#postpointsassign) | **POST** /points/actions/assign-points | Assign of points
[**postPointsRedemption**](PointsApi.md#postpointsredemption) | **POST** /points/actions/reduce-points | Points redemption
[**postPointsTransfer**](PointsApi.md#postpointstransfer) | **POST** /points/actions/transfer-points | Transfer points

# **getPoint**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20093 getPoint($point_id, $accept_language)

Get a point record

Get information about a specific point transaction.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\PointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$point_id = "point_id_example"; // string | The unique ID of the point record.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->getPoint($point_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PointsApi->getPoint: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **point_id** | **string**| The unique ID of the point record. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20093**](../Model/InlineResponse20093.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPoints**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20037 getPoints($accept_language, $count, $offset, $sort_field, $sort_direction, $customer_id, $point_type_id, $create_point_time_from, $create_point_time_to)

Get all point records

Get a list of all point transactions and their current values.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\PointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.
$count = 100; // int | The number of records to return.
$offset = 0; // int | The number of records from a collection to skip.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$customer_id = "customer_id_example"; // string | The unique ID of the customer.
$point_type_id = "point_type_id_example"; // string | The unique ID of a point type.
$create_point_time_from = "create_point_time_from_example"; // string | Date and time from of the create point record. *(YYYY-MM-DD HH:MM:SS)*
$create_point_time_to = "create_point_time_to_example"; // string | Date and time to of the create point record. *(YYYY-MM-DD HH:MM:SS)*

try {
    $result = $apiInstance->getPoints($accept_language, $count, $offset, $sort_field, $sort_direction, $customer_id, $point_type_id, $create_point_time_from, $create_point_time_to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PointsApi->getPoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **customer_id** | **string**| The unique ID of the customer. | [optional]
 **point_type_id** | **string**| The unique ID of a point type. | [optional]
 **create_point_time_from** | **string**| Date and time from of the create point record. *(YYYY-MM-DD HH:MM:SS)* | [optional]
 **create_point_time_to** | **string**| Date and time to of the create point record. *(YYYY-MM-DD HH:MM:SS)* | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20037**](../Model/InlineResponse20037.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubPointPurchases**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20029 getSubPointPurchases($point_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $store_id, $customer_id, $type_id, $payment_time_from, $payment_time_to, $purchase_items_extension, $external_purchase_id)

Get a collection of purchases

Get information about all purchases by points resource.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\PointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$point_id = "point_id_example"; // string | The unique ID of the point record.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.
$count = 100; // int | The number of records to return.
$offset = 0; // int | The number of records from a collection to skip.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$store_id = "store_id_example"; // string | The unique ID of the store in CareCloud.
$customer_id = "customer_id_example"; // string | The unique ID of the customer.
$type_id = "type_id_example"; // string | Purchase type
$payment_time_from = "payment_time_from_example"; // string | Date and time from of the purchase payment. *(YYYY-MM-DD HH:MM:SS)*
$payment_time_to = "payment_time_to_example"; // string | Date and time to of the purchase payment. *(YYYY-MM-DD HH:MM:SS)*
$purchase_items_extension = false; // bool | If true, resource returns extended response with purchase items. If false, the resource won't be extended. If the parameter is not set, the default value is false.
$external_purchase_id = "external_purchase_id_example"; // string | ID of the purchase from external (e-shop, POS) system. This ID should have unique value.

try {
    $result = $apiInstance->getSubPointPurchases($point_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $store_id, $customer_id, $type_id, $payment_time_from, $payment_time_to, $purchase_items_extension, $external_purchase_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PointsApi->getSubPointPurchases: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **point_id** | **string**| The unique ID of the point record. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **store_id** | **string**| The unique ID of the store in CareCloud. | [optional]
 **customer_id** | **string**| The unique ID of the customer. | [optional]
 **type_id** | **string**| Purchase type | [optional]
 **payment_time_from** | **string**| Date and time from of the purchase payment. *(YYYY-MM-DD HH:MM:SS)* | [optional]
 **payment_time_to** | **string**| Date and time to of the purchase payment. *(YYYY-MM-DD HH:MM:SS)* | [optional]
 **purchase_items_extension** | **bool**| If true, resource returns extended response with purchase items. If false, the resource won&#x27;t be extended. If the parameter is not set, the default value is false. | [optional] [default to false]
 **external_purchase_id** | **string**| ID of the purchase from external (e-shop, POS) system. This ID should have unique value. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20029**](../Model/InlineResponse20029.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPointsAssign**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20116 postPointsAssign($body, $accept_language)

Assign of points

Creates a new point collection record with the corresponding value. ⚠️ Action methods are available only in Enterprise interface.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\PointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsAssignpointsBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsAssignpointsBody | 
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->postPointsAssign($body, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PointsApi->postPointsAssign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ActionsAssignpointsBody**](../Model/ActionsAssignpointsBody.md)|  |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20116**](../Model/InlineResponse20116.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPointsRedemption**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20115 postPointsRedemption($body, $accept_language)

Points redemption

New point redemption record is created. ⚠️ Action methods are available only in the Enterprise interface.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\PointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsReducepointsBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsReducepointsBody | 
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->postPointsRedemption($body, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PointsApi->postPointsRedemption: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ActionsReducepointsBody**](../Model/ActionsReducepointsBody.md)|  |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20115**](../Model/InlineResponse20115.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPointsTransfer**
> postPointsTransfer($body, $accept_language)

Transfer points

Transfers points from one customer to another.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\PointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsTransferpointsBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsTransferpointsBody | 
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $apiInstance->postPointsTransfer($body, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling PointsApi->postPointsTransfer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ActionsTransferpointsBody**](../Model/ActionsTransferpointsBody.md)|  |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

