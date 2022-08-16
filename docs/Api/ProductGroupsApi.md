# CrmCareCloud\Webservice\RestApi\Client\ProductGroupsApi

All URIs are relative to *https://&lt;projectURL&gt;/webservice/rest-api/enterprise-interface/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getProductGroup**](ProductGroupsApi.md#getproductgroup) | **GET** /product-groups/{product_group_id} | Get a product group
[**getProductGroups**](ProductGroupsApi.md#getproductgroups) | **GET** /product-groups | Get all product groups
[**postBulkProductGroups**](ProductGroupsApi.md#postbulkproductgroups) | **POST** /product-groups/batch | Create a batch of product groups

# **getProductGroup**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20085 getProductGroup($product_group_id, $accept_language)

Get a product group

Get information about a specific product group

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\ProductGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_group_id = "product_group_id_example"; // string | The unique id of the product group
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $result = $apiInstance->getProductGroup($product_group_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupsApi->getProductGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_group_id** | **string**| The unique id of the product group |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20085**](../Model/InlineResponse20085.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProductGroups**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20084 getProductGroups($accept_language, $count, $offset, $sort_field, $sort_direction, $name, $store_id, $code)

Get all product groups

Get a list of all product groups

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\ProductGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1
$count = 100; // int | The number of records to return.
$offset = 0; // int | The number of records from a collection to skip.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$name = "name_example"; // string | Search record by name or a part of the name
$store_id = "store_id_example"; // string | The unique id of the store in CareCloud
$code = "code_example"; // string | Code of the product group

try {
    $result = $apiInstance->getProductGroups($accept_language, $count, $offset, $sort_field, $sort_direction, $name, $store_id, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupsApi->getProductGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **name** | **string**| Search record by name or a part of the name | [optional]
 **store_id** | **string**| The unique id of the store in CareCloud | [optional]
 **code** | **string**| Code of the product group | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20084**](../Model/InlineResponse20084.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postBulkProductGroups**
> postBulkProductGroups($body, $accept_language)

Create a batch of product groups

Batch process helps to add multiple product groups in one request

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\ProductGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ProductgroupsBatchBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ProductgroupsBatchBody | 
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $apiInstance->postBulkProductGroups($body, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupsApi->postBulkProductGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ProductgroupsBatchBody**](../Model/ProductgroupsBatchBody.md)|  |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

