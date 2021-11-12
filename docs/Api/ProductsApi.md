# CrmCareCloud\Webservice\RestApi\Client\ProductsApi

All URIs are relative to *https://&lt;projectURL&gt;/enterprise-interface/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getProduct**](ProductsApi.md#getproduct) | **GET** /products/{product_id} | Detail of a product
[**getProducts**](ProductsApi.md#getproducts) | **GET** /products | Collection of available products

# **getProduct**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20064 getProduct($product_id, $accept_language)

Detail of a product

Get information about a specific product

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = "product_id_example"; // string | The unique id for the product
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $result = $apiInstance->getProduct($product_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **string**| The unique id for the product |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20064**](../Model/InlineResponse20064.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProducts**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20063 getProducts($accept_language, $count, $offset, $sort_field, $sort_direction, $name, $code, $external_id, $external_type_code)

Collection of available products

Get information about all available products

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\ProductsApi(
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
$name = "name_example"; // string | Search record by name or a part of the name
$code = "code_example"; // string | Code of the product
$external_id = "external_id_example"; // string | The unique external id. It may be id from the other system
$external_type_code = "GLOBAL"; // string | Every product can have more than one external id depends of the bussiness requirements. This paramter allows to pick from witch list of external ids you want to choose. For the list of external type codes please contact you account manager. If the parameter is not set, API uses as a default value GLOBAL

try {
    $result = $apiInstance->getProducts($accept_language, $count, $offset, $sort_field, $sort_direction, $name, $code, $external_id, $external_type_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProducts: ', $e->getMessage(), PHP_EOL;
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
 **name** | **string**| Search record by name or a part of the name | [optional]
 **code** | **string**| Code of the product | [optional]
 **external_id** | **string**| The unique external id. It may be id from the other system | [optional]
 **external_type_code** | **string**| Every product can have more than one external id depends of the bussiness requirements. This paramter allows to pick from witch list of external ids you want to choose. For the list of external type codes please contact you account manager. If the parameter is not set, API uses as a default value GLOBAL | [optional] [default to GLOBAL]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20063**](../Model/InlineResponse20063.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

