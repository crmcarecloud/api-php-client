# CareCloud\ProductReservationsApi

All URIs are relative to *https://&lt;projectURL&gt;/enterprise-interface/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getProductReservation**](ProductReservationsApi.md#getproductreservation) | **GET** /product-reservations/{product_reservation_id} | Get a product-reservation
[**getProductReservations**](ProductReservationsApi.md#getproductreservations) | **GET** /product-reservations | Get all product reservations
[**postProductReservation**](ProductReservationsApi.md#postproductreservation) | **POST** /product-reservations | Create a reservation
[**postProductReservationCancel**](ProductReservationsApi.md#postproductreservationcancel) | **POST** /product-reservations/{product_reservation_id}/actions/cancel-reservation | Cancel reservation

# **getProductReservation**
> \CareCloud\Model\InlineResponse20071 getProductReservation($product_reservation_id, $accept_language)

Get a product-reservation

Get information about a specific product-reservation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = CareCloud\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CareCloud\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CareCloud\Api\ProductReservationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_reservation_id = "product_reservation_id_example"; // string | The unique id for a product reservation
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

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
 **product_reservation_id** | **string**| The unique id for a product reservation |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CareCloud\Model\InlineResponse20071**](../Model/InlineResponse20071.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductReservations**
> \CareCloud\Model\InlineResponse20070 getProductReservations($accept_language, $count, $offset, $sort_field, $sort_direction, $reservation_code, $customer_id, $store_id, $reservation_state)

Get all product reservations

Get a list of product reservations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = CareCloud\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CareCloud\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CareCloud\Api\ProductReservationsApi(
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
$reservation_code = "reservation_code_example"; // string | Code of the reservation
$customer_id = "customer_id_example"; // string | The unique id of the customer
$store_id = "store_id_example"; // string | The unique id of the store in CareCloud
$reservation_state = 56; // int | Actual state of the product reservation. *Possible values: 0 - Canceled / 1 - Entered / 2 - Accepted / 3 - Ready / 4 - Delivered / 5 - In progress / 6 - Not Picked up / 7 - Ordered / 8 - Being solved /_*

try {
    $result = $apiInstance->getProductReservations($accept_language, $count, $offset, $sort_field, $sort_direction, $reservation_code, $customer_id, $store_id, $reservation_state);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductReservationsApi->getProductReservations: ', $e->getMessage(), PHP_EOL;
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
 **reservation_code** | **string**| Code of the reservation | [optional]
 **customer_id** | **string**| The unique id of the customer | [optional]
 **store_id** | **string**| The unique id of the store in CareCloud | [optional]
 **reservation_state** | **int**| Actual state of the product reservation. *Possible values: 0 - Canceled / 1 - Entered / 2 - Accepted / 3 - Ready / 4 - Delivered / 5 - In progress / 6 - Not Picked up / 7 - Ordered / 8 - Being solved /_* | [optional]

### Return type

[**\CareCloud\Model\InlineResponse20070**](../Model/InlineResponse20070.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postProductReservation**
> \CareCloud\Model\InlineResponse20112 postProductReservation($body, $accept_language)

Create a reservation

Create a new product reservation in CRM CareCloud

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = CareCloud\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CareCloud\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CareCloud\Api\ProductReservationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CareCloud\Model\ProductreservationsBody(); // \CareCloud\Model\ProductreservationsBody | 
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

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
 **body** | [**\CareCloud\Model\ProductreservationsBody**](../Model/ProductreservationsBody.md)|  |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CareCloud\Model\InlineResponse20112**](../Model/InlineResponse20112.md)

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
$config = CareCloud\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CareCloud\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CareCloud\Api\ProductReservationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CareCloud\Model\ActionsCancelreservationBody(); // \CareCloud\Model\ActionsCancelreservationBody | 
$product_reservation_id = "product_reservation_id_example"; // string | The unique id for a product reservation
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

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
 **body** | [**\CareCloud\Model\ActionsCancelreservationBody**](../Model/ActionsCancelreservationBody.md)|  |
 **product_reservation_id** | **string**| The unique id for a product reservation |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

