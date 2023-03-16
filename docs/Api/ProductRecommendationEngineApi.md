# CrmCareCloud\Webservice\RestApi\Client\ProductRecommendationEngineApi

All URIs are relative to *https://&lt;projectURL&gt;/webservice/rest-api/enterprise-interface/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postBulkThirdPartyRecommendations**](ProductRecommendationEngineApi.md#postbulkthirdpartyrecommendations) | **POST** /third-party-recommendations/batch | Create a batch of the third party recommendations
[**postRecommendationCartCombine**](ProductRecommendationEngineApi.md#postrecommendationcartcombine) | **POST** /recommendation-engine/shopping-cart/actions/combine | Get the best recommendation for shopping cart
[**postRecommendationCartEliminate**](ProductRecommendationEngineApi.md#postrecommendationcarteliminate) | **POST** /recommendation-engine/shopping-cart/actions/eliminate | Get the best recommendation with elimination for shopping cart
[**postRecommendationCartOrder**](ProductRecommendationEngineApi.md#postrecommendationcartorder) | **POST** /recommendation-engine/shopping-cart/actions/order | Order products for the best recommendation for a shopping cart
[**postRecommendationProductCombine**](ProductRecommendationEngineApi.md#postrecommendationproductcombine) | **POST** /recommendation-engine/product/actions/combine | Get the best recommendation
[**postRecommendationProductEliminate**](ProductRecommendationEngineApi.md#postrecommendationproducteliminate) | **POST** /recommendation-engine/product/actions/eliminate | Get the best recommendation with an elimination
[**postRecommendationProductOrder**](ProductRecommendationEngineApi.md#postrecommendationproductorder) | **POST** /recommendation-engine/product/actions/order | Order products for the best recommendation.

# **postBulkThirdPartyRecommendations**
> postBulkThirdPartyRecommendations($body, $accept_language)

Create a batch of the third party recommendations

Batch process helps to add multiple third party recommendations in one request

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

# **postRecommendationCartCombine**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200119 postRecommendationCartCombine($body, $accept_language)

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
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsCombineBody1(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsCombineBody1 | 
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $result = $apiInstance->postRecommendationCartCombine($body, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductRecommendationEngineApi->postRecommendationCartCombine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ActionsCombineBody1**](../Model/ActionsCombineBody1.md)|  |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200119**](../Model/InlineResponse200119.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postRecommendationCartEliminate**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200119 postRecommendationCartEliminate($body, $accept_language)

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
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsEliminateBody1(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsEliminateBody1 | 
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $result = $apiInstance->postRecommendationCartEliminate($body, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductRecommendationEngineApi->postRecommendationCartEliminate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ActionsEliminateBody1**](../Model/ActionsEliminateBody1.md)|  |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200119**](../Model/InlineResponse200119.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postRecommendationCartOrder**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200119 postRecommendationCartOrder($body, $accept_language)

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
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsOrderBody1(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsOrderBody1 | 
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $result = $apiInstance->postRecommendationCartOrder($body, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductRecommendationEngineApi->postRecommendationCartOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ActionsOrderBody1**](../Model/ActionsOrderBody1.md)|  |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200119**](../Model/InlineResponse200119.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postRecommendationProductCombine**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200118 postRecommendationProductCombine($body, $accept_language)

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
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsCombineBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsCombineBody | 
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $result = $apiInstance->postRecommendationProductCombine($body, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductRecommendationEngineApi->postRecommendationProductCombine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ActionsCombineBody**](../Model/ActionsCombineBody.md)|  |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200118**](../Model/InlineResponse200118.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postRecommendationProductEliminate**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200118 postRecommendationProductEliminate($body, $accept_language)

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
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsEliminateBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsEliminateBody | 
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $result = $apiInstance->postRecommendationProductEliminate($body, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductRecommendationEngineApi->postRecommendationProductEliminate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ActionsEliminateBody**](../Model/ActionsEliminateBody.md)|  |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200118**](../Model/InlineResponse200118.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postRecommendationProductOrder**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200118 postRecommendationProductOrder($body, $accept_language)

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
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsOrderBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsOrderBody | 
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $result = $apiInstance->postRecommendationProductOrder($body, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductRecommendationEngineApi->postRecommendationProductOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ActionsOrderBody**](../Model/ActionsOrderBody.md)|  |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200118**](../Model/InlineResponse200118.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

