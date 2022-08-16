# CrmCareCloud\Webservice\RestApi\Client\WalletApi

All URIs are relative to *https://&lt;projectURL&gt;/webservice/rest-api/enterprise-interface/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getWalletCredits**](WalletApi.md#getwalletcredits) | **GET** /wallet/actions/credits-overview | Get credits overview
[**getWalletCreditsExpiration**](WalletApi.md#getwalletcreditsexpiration) | **GET** /wallet/actions/credits-expiration-overview | Get credits expiration overview
[**getWalletPoints**](WalletApi.md#getwalletpoints) | **GET** /wallet/actions/points-overview | Get points overview
[**getWalletPointsExpiration**](WalletApi.md#getwalletpointsexpiration) | **GET** /wallet/actions/points-expiration-overview | Get points expiration overview
[**getWalletSalesTurnover**](WalletApi.md#getwalletsalesturnover) | **GET** /wallet/actions/sales-turnover | Get sales turnover

# **getWalletCredits**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200153 getWalletCredits($customer_id, $accept_language, $date_from, $date_to)

Get credits overview

Get information about credits overview of the customer in the time interval

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique id of the customer
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1
$date_from = "date_from_example"; // string | Date (ISO 8601) start of the time interval *(YYYY-MM-DD)*
$date_to = "date_to_example"; // string | Date (ISO 8601) end of the time interval *(YYYY-MM-DD)*

try {
    $result = $apiInstance->getWalletCredits($customer_id, $accept_language, $date_from, $date_to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->getWalletCredits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique id of the customer |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **date_from** | **string**| Date (ISO 8601) start of the time interval *(YYYY-MM-DD)* | [optional]
 **date_to** | **string**| Date (ISO 8601) end of the time interval *(YYYY-MM-DD)* | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200153**](../Model/InlineResponse200153.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWalletCreditsExpiration**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200154 getWalletCreditsExpiration($customer_id, $accept_language)

Get credits expiration overview

Get information about credits expiration overview of the customer

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique id of the customer
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $result = $apiInstance->getWalletCreditsExpiration($customer_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->getWalletCreditsExpiration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique id of the customer |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200154**](../Model/InlineResponse200154.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWalletPoints**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200152 getWalletPoints($customer_id, $accept_language, $date_from, $date_to)

Get points overview

Get information about points overview of the customer in time interval

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique id of the customer
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1
$date_from = "date_from_example"; // string | Date (ISO 8601) start of the time interval *(YYYY-MM-DD)*
$date_to = "date_to_example"; // string | Date (ISO 8601) end of the time interval *(YYYY-MM-DD)*

try {
    $result = $apiInstance->getWalletPoints($customer_id, $accept_language, $date_from, $date_to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->getWalletPoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique id of the customer |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **date_from** | **string**| Date (ISO 8601) start of the time interval *(YYYY-MM-DD)* | [optional]
 **date_to** | **string**| Date (ISO 8601) end of the time interval *(YYYY-MM-DD)* | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200152**](../Model/InlineResponse200152.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWalletPointsExpiration**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200154 getWalletPointsExpiration($customer_id, $accept_language)

Get points expiration overview

Get information about points expiration overview of the customer

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique id of the customer
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $result = $apiInstance->getWalletPointsExpiration($customer_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->getWalletPointsExpiration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique id of the customer |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200154**](../Model/InlineResponse200154.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWalletSalesTurnover**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200151 getWalletSalesTurnover($customer_id, $accept_language, $date_from, $date_to)

Get sales turnover

Get information about sales turnover of the customer in time interval

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique id of the customer
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1
$date_from = "date_from_example"; // string | Date (ISO 8601) start of the time interval *(YYYY-MM-DD)*
$date_to = "date_to_example"; // string | Date (ISO 8601) end of the time interval *(YYYY-MM-DD)*

try {
    $result = $apiInstance->getWalletSalesTurnover($customer_id, $accept_language, $date_from, $date_to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->getWalletSalesTurnover: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique id of the customer |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **date_from** | **string**| Date (ISO 8601) start of the time interval *(YYYY-MM-DD)* | [optional]
 **date_to** | **string**| Date (ISO 8601) end of the time interval *(YYYY-MM-DD)* | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200151**](../Model/InlineResponse200151.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

