# CrmCareCloud\Webservice\RestApi\Client\ProductReservationsApi

All URIs are relative to *https://{project_url}/webservice/rest-api/{api_interface}/{version}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getProductReservation**](ProductReservationsApi.md#getproductreservation) | **GET** /product-reservations/{product_reservation_id} | Get a product-reservation
[**getProductReservations**](ProductReservationsApi.md#getproductreservations) | **GET** /product-reservations | Get all product reservations
[**postProductReservation**](ProductReservationsApi.md#postproductreservation) | **POST** /product-reservations | Create a reservation
[**postProductReservationCancel**](ProductReservationsApi.md#postproductreservationcancel) | **POST** /product-reservations/{product_reservation_id}/actions/cancel-reservation | Cancel reservation
[**postProductReservationChangeState**](ProductReservationsApi.md#postproductreservationchangestate) | **POST** /product-reservations/actions/change-reservation-state | Change reservation state
[**postProductReservationSetExternalReservationCode**](ProductReservationsApi.md#postproductreservationsetexternalreservationcode) | **POST** /product-reservations/actions/set-product-reservation-external-codes | Set one or multiple external reservation codes of different types to the product reservation

# **getProductReservation**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetProductReservation200Response getProductReservation($product_reservation_id, $accept_language)

Get a product-reservation

Get information about a specific product-reservation.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\ProductReservationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_reservation_id = "product_reservation_id_example"; // string | The unique ID of the product reservation.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->getProductReservation($product_reservation_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductReservationsApi->getProductReservation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_reservation_id** | **string**| The unique ID of the product reservation. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetProductReservation200Response**](../Model/GetProductReservation200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductReservations**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetProductReservations200Response getProductReservations($accept_language, $count, $offset, $sort_field, $sort_direction, $customer_id, $store_id, $reservation_state, $external_reservation_list_type_id, $external_reservation_code, $include_reservation_progress_history)

Get all product reservations

Get a list of product reservations.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\ProductReservationsApi(
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
$customer_id = "customer_id_example"; // string | The unique ID of the customer.
$store_id = "store_id_example"; // string | The unique ID of the store in CareCloud.
$reservation_state = 56; // int | Current state of the product reservation. *Possible values: 0 - Canceled / 1 - Entered / 2 - Accepted / 3 - Ready / 4 - Delivered / 5 - In progress / 6 - Not Picked up / 7 - Ordered / 8 - Being solved /_*
$external_reservation_list_type_id = "external_reservation_list_type_id_example"; // string | Every reservation can have more than one external code depends of the business requirements. This parameter allows to pick from witch list of external codes you want to choose. If set, `external_reservation_code` has to be present in request too.
$external_reservation_code = "external_reservation_code_example"; // string | Code of the reservation from external system (cash-desk, web-shop, production system, others). If set, `external_reservation_list_type_id` has to be present in request too.
$include_reservation_progress_history = true; // bool | If true, the response will contain information about the reservation progress history. If false, or not set the response will not return this structure.

try {
    $result = $apiInstance->getProductReservations($accept_language, $count, $offset, $sort_field, $sort_direction, $customer_id, $store_id, $reservation_state, $external_reservation_list_type_id, $external_reservation_code, $include_reservation_progress_history);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductReservationsApi->getProductReservations: ', $e->getMessage(), PHP_EOL;
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
 **customer_id** | **string**| The unique ID of the customer. | [optional]
 **store_id** | **string**| The unique ID of the store in CareCloud. | [optional]
 **reservation_state** | **int**| Current state of the product reservation. *Possible values: 0 - Canceled / 1 - Entered / 2 - Accepted / 3 - Ready / 4 - Delivered / 5 - In progress / 6 - Not Picked up / 7 - Ordered / 8 - Being solved /_* | [optional]
 **external_reservation_list_type_id** | **string**| Every reservation can have more than one external code depends of the business requirements. This parameter allows to pick from witch list of external codes you want to choose. If set, &#x60;external_reservation_code&#x60; has to be present in request too. | [optional]
 **external_reservation_code** | **string**| Code of the reservation from external system (cash-desk, web-shop, production system, others). If set, &#x60;external_reservation_list_type_id&#x60; has to be present in request too. | [optional]
 **include_reservation_progress_history** | **bool**| If true, the response will contain information about the reservation progress history. If false, or not set the response will not return this structure. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetProductReservations200Response**](../Model/GetProductReservations200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postProductReservation**
> \CrmCareCloud\Webservice\RestApi\Client\Model\PostProductReservation200Response postProductReservation($body, $accept_language)

Create a reservation

Create a new product reservation in CRM CareCloud.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\ProductReservationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ProductreservationsBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ProductreservationsBody | 
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->postProductReservation($body, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductReservationsApi->postProductReservation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ProductreservationsBody**](../Model/ProductreservationsBody.md)|  |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\PostProductReservation200Response**](../Model/PostProductReservation200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postProductReservationCancel**
> postProductReservationCancel($body, $product_reservation_id, $accept_language)

Cancel reservation

Cancel an existing reservation.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\ProductReservationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsCancelreservationBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsCancelreservationBody | 
$product_reservation_id = "product_reservation_id_example"; // string | The unique ID of the product reservation.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $apiInstance->postProductReservationCancel($body, $product_reservation_id, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling ProductReservationsApi->postProductReservationCancel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ActionsCancelreservationBody**](../Model/ActionsCancelreservationBody.md)|  |
 **product_reservation_id** | **string**| The unique ID of the product reservation. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postProductReservationChangeState**
> postProductReservationChangeState($body, $accept_language)

Change reservation state

Change a state of existing reservation

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\ProductReservationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsChangereservationstateBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsChangereservationstateBody | 
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $apiInstance->postProductReservationChangeState($body, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling ProductReservationsApi->postProductReservationChangeState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ActionsChangereservationstateBody**](../Model/ActionsChangereservationstateBody.md)|  |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postProductReservationSetExternalReservationCode**
> postProductReservationSetExternalReservationCode($body, $accept_language)

Set one or multiple external reservation codes of different types to the product reservation

Set one or multiple external reservation codes of different types to the product reservation.<br/> The method will set all the reservation codes from the request.<br/> If a reservation code type already exists in the reservation, it will be replaced with a new value from the request. If the request does not contain the reservation code type already in the reservation, CareCloud will make no changes to the reservation code.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\ProductReservationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsSetproductreservationexternalcodesBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsSetproductreservationexternalcodesBody | 
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $apiInstance->postProductReservationSetExternalReservationCode($body, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling ProductReservationsApi->postProductReservationSetExternalReservationCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ActionsSetproductreservationexternalcodesBody**](../Model/ActionsSetproductreservationexternalcodesBody.md)|  |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

