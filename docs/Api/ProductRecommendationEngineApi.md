# CrmCareCloud\Webservice\RestApi\Client\ProductRecommendationEngineApi

All URIs are relative to *https://&lt;projectURL&gt;/webservice/rest-api/enterprise-interface/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getRecommendationCartCombined**](ProductRecommendationEngineApi.md#getrecommendationcartcombined) | **GET** /recommendation-engine/shopping-cart/actions/combine | Get the best recommendation for shopping cart
[**getRecommendationCartEliminate**](ProductRecommendationEngineApi.md#getrecommendationcarteliminate) | **GET** /recommendation-engine/shopping-cart/actions/eliminate | Get the best recommendation with elimination for shopping cart
[**getRecommendationCartOrder**](ProductRecommendationEngineApi.md#getrecommendationcartorder) | **GET** /recommendation-engine/shopping-cart/actions/order | Order products for the best recommendation for a shopping cart
[**getRecommendationProductCombine**](ProductRecommendationEngineApi.md#getrecommendationproductcombine) | **GET** /recommendation-engine/product/actions/combine | Get the best recommendation
[**getRecommendationProductEliminate**](ProductRecommendationEngineApi.md#getrecommendationproducteliminate) | **GET** /recommendation-engine/product/actions/eliminate | Get the best recommendation with an elimination
[**getRecommendationProductOrder**](ProductRecommendationEngineApi.md#getrecommendationproductorder) | **GET** /recommendation-engine/product/actions/order | Order products for the best recommendation.
[**postBulkThirdPartyRecommendations**](ProductRecommendationEngineApi.md#postbulkthirdpartyrecommendations) | **POST** /third-party-recommendations/batch | Create a batch of the third party recommendations

# **getRecommendationCartCombined**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200110 getRecommendationCartCombined($customer_id, $accept_language, $cart_product_ids, $product_id_list, $count)

Get the best recommendation for shopping cart

It selects the best products from an initial list for the customer shopping cart. Eliminates all products that don't match future customer preferences (depends on other customers' shopping behavior with the same products). If needed, it fills the missing number of results from the best products depends on the prediction algorithms.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\ProductRecommendationEngineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique id of the customer
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1
$cart_product_ids = array("cart_product_ids_example"); // string[] | List of the product ids in customer's shopping cart
$product_id_list = array("product_id_list_example"); // string[] | List of the product ids. Initial products of the recommendation engine.
$count = 100; // int | The number of records to return.

try {
    $result = $apiInstance->getRecommendationCartCombined($customer_id, $accept_language, $cart_product_ids, $product_id_list, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductRecommendationEngineApi->getRecommendationCartCombined: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique id of the customer |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **cart_product_ids** | [**string[]**](../Model/string.md)| List of the product ids in customer&#x27;s shopping cart | [optional]
 **product_id_list** | [**string[]**](../Model/string.md)| List of the product ids. Initial products of the recommendation engine. | [optional]
 **count** | **int**| The number of records to return. | [optional] [default to 100]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200110**](../Model/InlineResponse200110.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRecommendationCartEliminate**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200110 getRecommendationCartEliminate($customer_id, $accept_language, $cart_product_ids, $product_id_list)

Get the best recommendation with elimination for shopping cart

It selects the best products from an initial list for the customer shopping cart. Eliminates all products that don't match future customer preferences (depends on other customers' shopping behavior with the same products). The method doesn't have to return any results depending on the initial list (no product match future customer preferences).

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\ProductRecommendationEngineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique id of the customer
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1
$cart_product_ids = array("cart_product_ids_example"); // string[] | List of the product ids in customer's shopping cart
$product_id_list = array("product_id_list_example"); // string[] | List of the product ids. Initial products of the recommendation engine.

try {
    $result = $apiInstance->getRecommendationCartEliminate($customer_id, $accept_language, $cart_product_ids, $product_id_list);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductRecommendationEngineApi->getRecommendationCartEliminate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique id of the customer |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **cart_product_ids** | [**string[]**](../Model/string.md)| List of the product ids in customer&#x27;s shopping cart | [optional]
 **product_id_list** | [**string[]**](../Model/string.md)| List of the product ids. Initial products of the recommendation engine. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200110**](../Model/InlineResponse200110.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRecommendationCartOrder**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200110 getRecommendationCartOrder($cart_product_ids, $accept_language, $product_id_list, $count)

Order products for the best recommendation for a shopping cart

The method returns the algorithm ordered products from the initial list (best first). Results depend on the customer's shopping cart and his previous shopping behavior. If needed, the initial parameter might define the number of results.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\ProductRecommendationEngineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cart_product_ids = array("cart_product_ids_example"); // string[] | List of the product ids in customer's shopping cart
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1
$product_id_list = array("product_id_list_example"); // string[] | List of the product ids. Initial products of the recommendation engine.
$count = 100; // int | The number of records to return.

try {
    $result = $apiInstance->getRecommendationCartOrder($cart_product_ids, $accept_language, $product_id_list, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductRecommendationEngineApi->getRecommendationCartOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_product_ids** | [**string[]**](../Model/string.md)| List of the product ids in customer&#x27;s shopping cart |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **product_id_list** | [**string[]**](../Model/string.md)| List of the product ids. Initial products of the recommendation engine. | [optional]
 **count** | **int**| The number of records to return. | [optional] [default to 100]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200110**](../Model/InlineResponse200110.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRecommendationProductCombine**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200109 getRecommendationProductCombine($customer_id, $accept_language, $product_id_list, $count)

Get the best recommendation

It selects the best products from an initial list for the customer. Eliminates all products that don't match future customer preferences (depends on his previous shopping behavior). If needed, it fills the missing number of results from the best products depends on the prediction algorithms.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\ProductRecommendationEngineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique id of the customer
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1
$product_id_list = array("product_id_list_example"); // string[] | List of the product ids. Initial products of the recommendation engine.
$count = 100; // int | The number of records to return.

try {
    $result = $apiInstance->getRecommendationProductCombine($customer_id, $accept_language, $product_id_list, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductRecommendationEngineApi->getRecommendationProductCombine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique id of the customer |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **product_id_list** | [**string[]**](../Model/string.md)| List of the product ids. Initial products of the recommendation engine. | [optional]
 **count** | **int**| The number of records to return. | [optional] [default to 100]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200109**](../Model/InlineResponse200109.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRecommendationProductEliminate**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200109 getRecommendationProductEliminate($customer_id, $accept_language, $product_id_list)

Get the best recommendation with an elimination

It selects the best products from an initial list for the customer. Eliminates all products that don't match future customer preferences (depends on his previous shopping behavior). The method doesn't have to return any results depending on the initial list (no product match future customer preferences).

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\ProductRecommendationEngineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique id of the customer
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1
$product_id_list = array("product_id_list_example"); // string[] | List of the product ids. Initial products of the recommendation engine.

try {
    $result = $apiInstance->getRecommendationProductEliminate($customer_id, $accept_language, $product_id_list);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductRecommendationEngineApi->getRecommendationProductEliminate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique id of the customer |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **product_id_list** | [**string[]**](../Model/string.md)| List of the product ids. Initial products of the recommendation engine. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200109**](../Model/InlineResponse200109.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRecommendationProductOrder**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200109 getRecommendationProductOrder($customer_id, $accept_language, $product_id_list, $count)

Order products for the best recommendation.

The method returns the algorithm ordered products from the initial list (best first). Results depend on the customer and his previous shopping behavior. If needed, the initial parameter might define the number of results.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\ProductRecommendationEngineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique id of the customer
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1
$product_id_list = array("product_id_list_example"); // string[] | List of the product ids. Initial products of the recommendation engine.
$count = 100; // int | The number of records to return.

try {
    $result = $apiInstance->getRecommendationProductOrder($customer_id, $accept_language, $product_id_list, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductRecommendationEngineApi->getRecommendationProductOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique id of the customer |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **product_id_list** | [**string[]**](../Model/string.md)| List of the product ids. Initial products of the recommendation engine. | [optional]
 **count** | **int**| The number of records to return. | [optional] [default to 100]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200109**](../Model/InlineResponse200109.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postBulkThirdPartyRecommendations**
> postBulkThirdPartyRecommendations($body, $accept_language)

Create a batch of the third party recommendations

Batch process helps to add multiple third party reccomendations in one request

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\ProductRecommendationEngineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ThirdpartyrecommendationsBatchBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ThirdpartyrecommendationsBatchBody | 
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $apiInstance->postBulkThirdPartyRecommendations($body, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling ProductRecommendationEngineApi->postBulkThirdPartyRecommendations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ThirdpartyrecommendationsBatchBody**](../Model/ThirdpartyrecommendationsBatchBody.md)|  |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

