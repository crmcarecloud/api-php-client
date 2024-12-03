# CrmCareCloud\Webservice\RestApi\Client\ProductReservationPricesApi

All URIs are relative to *https://{project_url}/webservice/rest-api/{api_interface}/{version}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getProductReservationPrice**](ProductReservationPricesApi.md#getproductreservationprice) | **GET** /product-reservationprices/{product_reservation_price_id} | Get a detail of product reservation price
[**getProductReservationPrices**](ProductReservationPricesApi.md#getproductreservationprices) | **GET** /product-reservation-prices | Get all product reservation prices
[**postBulkDeleteProductReservationPrices**](ProductReservationPricesApi.md#postbulkdeleteproductreservationprices) | **DELETE** /product-reservation-prices/batch | Delete a batch of product reservation prices
[**postBulkProductReservationPrices**](ProductReservationPricesApi.md#postbulkproductreservationprices) | **POST** /product-reservation-prices/batch | Create a batch of product reservation prices

# **getProductReservationPrice**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetProductReservationPrice200Response getProductReservationPrice($product_reservation_price_id, $accept_language)

Get a detail of product reservation price

Get information about a specific product reservation price. The price represents the value of the product for the reservation for a specific store and currency.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\ProductReservationPricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_reservation_price_id = "product_reservation_price_id_example"; // string | The unique ID of the product reservation price.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->getProductReservationPrice($product_reservation_price_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductReservationPricesApi->getProductReservationPrice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_reservation_price_id** | **string**| The unique ID of the product reservation price. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetProductReservationPrice200Response**](../Model/GetProductReservationPrice200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductReservationPrices**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetProductReservationPrices200Response getProductReservationPrices($accept_language, $count, $offset, $sort_field, $sort_direction, $reservable_product_id, $store_id, $currency_id)

Get all product reservation prices

Get a list of product reservation prices. Each price represents the value of the product for the reservation for a specific store and currency.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\ProductReservationPricesApi(
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
$reservable_product_id = "reservable_product_id_example"; // string | The unique ID of the reservable product. In case you want to filter multiple options use array syntax : `reservable_product_id[]=8bc8ca16f9c5039951021700a2&reservable_product_id[]=82c06812c0756528660784fef`
$store_id = "store_id_example"; // string | The unique ID of the store in CareCloud.
$currency_id = "currency_id_example"; // string | The unique ID of a currency from [Currencies resource](https://carecloud.readme.io/reference/getcurrencies).

try {
    $result = $apiInstance->getProductReservationPrices($accept_language, $count, $offset, $sort_field, $sort_direction, $reservable_product_id, $store_id, $currency_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductReservationPricesApi->getProductReservationPrices: ', $e->getMessage(), PHP_EOL;
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
 **reservable_product_id** | **string**| The unique ID of the reservable product. In case you want to filter multiple options use array syntax : &#x60;reservable_product_id[]&#x3D;8bc8ca16f9c5039951021700a2&amp;reservable_product_id[]&#x3D;82c06812c0756528660784fef&#x60; | [optional]
 **store_id** | **string**| The unique ID of the store in CareCloud. | [optional]
 **currency_id** | **string**| The unique ID of a currency from [Currencies resource](https://carecloud.readme.io/reference/getcurrencies). | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetProductReservationPrices200Response**](../Model/GetProductReservationPrices200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postBulkDeleteProductReservationPrices**
> postBulkDeleteProductReservationPrices($body, $accept_language)

Delete a batch of product reservation prices

Batch process helps to remove multiple product reservation prices in one request.<br/>  ⚠️ Adjust batch sizes based on processing times. We recommended use maximum amount of 1000 records and adjust the batch size based on processing time.<br/> ⚠️ Endpoint is available only in the Enterprise interface.<br/>

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\ProductReservationPricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ProductreservationpricesBatchBody1(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ProductreservationpricesBatchBody1 | 
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $apiInstance->postBulkDeleteProductReservationPrices($body, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling ProductReservationPricesApi->postBulkDeleteProductReservationPrices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ProductreservationpricesBatchBody1**](../Model/ProductreservationpricesBatchBody1.md)|  |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postBulkProductReservationPrices**
> postBulkProductReservationPrices($body, $accept_language)

Create a batch of product reservation prices

Batch process helps to add and synchronize multiple product reservation prices in one request.<br/>  ⚠️ If a product reservation price already exists, an update is applied. Missing parameters in update will be ignored and will not change. Erasing values is not possible here.<br/> ⚠️ Adjust batch sizes based on processing times. We recommended use maximum amount of 1000 records and adjust the batch size based on processing time.<br/> ⚠️ Endpoint is available only in the Enterprise interface.<br/>

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\ProductReservationPricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ProductreservationpricesBatchBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ProductreservationpricesBatchBody | 
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $apiInstance->postBulkProductReservationPrices($body, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling ProductReservationPricesApi->postBulkProductReservationPrices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ProductreservationpricesBatchBody**](../Model/ProductreservationpricesBatchBody.md)|  |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
