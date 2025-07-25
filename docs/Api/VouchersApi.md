# CrmCareCloud\Webservice\RestApi\Client\VouchersApi

All URIs are relative to *https://{project_url}/webservice/rest-api/{api_interface}/{version}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteVoucher**](VouchersApi.md#deletevoucher) | **DELETE** /vouchers/{voucher_id} | Delete a voucher
[**getSubVoucherProperties**](VouchersApi.md#getsubvoucherproperties) | **GET** /vouchers/{voucher_id}/property-records | Get a collection of voucher properties records
[**getVoucher**](VouchersApi.md#getvoucher) | **GET** /vouchers/{voucher_id} | Get a voucher
[**getVouchers**](VouchersApi.md#getvouchers) | **GET** /vouchers | Get all vouchers
[**postBulkVouchers**](VouchersApi.md#postbulkvouchers) | **POST** /vouchers/batch | Create a batch of vouchers.
[**postVoucherApply**](VouchersApi.md#postvoucherapply) | **POST** /vouchers/{voucher_id}/actions/apply-voucher | Application of a voucher
[**putVoucher**](VouchersApi.md#putvoucher) | **PUT** /vouchers/{voucher_id} | Update a voucher

# **deleteVoucher**
> deleteVoucher($voucher_id, $accept_language)

Delete a voucher

With this endpoint you can delete only not used vouchers. The endpoint provides a return of the loyalty points or credits if used for purchase of the voucher.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$voucher_id = "voucher_id_example"; // string | The unique ID of the voucher.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $apiInstance->deleteVoucher($voucher_id, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->deleteVoucher: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **voucher_id** | **string**| The unique ID of the voucher. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubVoucherProperties**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetSubVoucherProperties200Response getSubVoucherProperties($voucher_id, $accept_language)

Get a collection of voucher properties records

Get information about all property records on an voucher.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$voucher_id = "voucher_id_example"; // string | The unique ID of the voucher.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->getSubVoucherProperties($voucher_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->getSubVoucherProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **voucher_id** | **string**| The unique ID of the voucher. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetSubVoucherProperties200Response**](../Model/GetSubVoucherProperties200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVoucher**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetVoucher200Response getVoucher($voucher_id, $accept_language)

Get a voucher

Get information about a specific voucher.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$voucher_id = "voucher_id_example"; // string | The unique ID of the voucher.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->getVoucher($voucher_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->getVoucher: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **voucher_id** | **string**| The unique ID of the voucher. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetVoucher200Response**](../Model/GetVoucher200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVouchers**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetVouchers200Response getVouchers($accept_language, $count, $offset, $sort_field, $sort_direction, $customer_id, $code, $store_id, $is_valid, $is_applied, $without_stores, $reward_id)

Get all vouchers

Get information as a list o all vouchers.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\VouchersApi(
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
$code = "code_example"; // string | Unique code of the voucher.
$store_id = "store_id_example"; // string | The unique ID of the store where customer can apply the reward.
$is_valid = true; // bool | *in validity range - true / before or after validity range - false / no value - all*
$is_applied = true; // bool | Filter by voucher application and reservation. *Possible values: true - all applied or reserved vouchers / false - all vouchers that have not been applied yet or that are not reserved actually / no value - all vouchers*
$without_stores = true; // bool | If true or not set, the data will not contain information about business units (stores). If false resource returns full structure with stores.
$reward_id = "reward_id_example"; // string | The unique ID of the reward in CareCloud. In case you want to filter multiple options use array syntax : `reward_id[]=8bc8ca16f9c5039951021700a2&reward_id[]=82c06812c0756528660784fef`

try {
    $result = $apiInstance->getVouchers($accept_language, $count, $offset, $sort_field, $sort_direction, $customer_id, $code, $store_id, $is_valid, $is_applied, $without_stores, $reward_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->getVouchers: ', $e->getMessage(), PHP_EOL;
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
 **code** | **string**| Unique code of the voucher. | [optional]
 **store_id** | **string**| The unique ID of the store where customer can apply the reward. | [optional]
 **is_valid** | **bool**| *in validity range - true / before or after validity range - false / no value - all* | [optional]
 **is_applied** | **bool**| Filter by voucher application and reservation. *Possible values: true - all applied or reserved vouchers / false - all vouchers that have not been applied yet or that are not reserved actually / no value - all vouchers* | [optional]
 **without_stores** | **bool**| If true or not set, the data will not contain information about business units (stores). If false resource returns full structure with stores. | [optional]
 **reward_id** | **string**| The unique ID of the reward in CareCloud. In case you want to filter multiple options use array syntax : &#x60;reward_id[]&#x3D;8bc8ca16f9c5039951021700a2&amp;reward_id[]&#x3D;82c06812c0756528660784fef&#x60; | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetVouchers200Response**](../Model/GetVouchers200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postBulkVouchers**
> postBulkVouchers($body, $accept_language)

Create a batch of vouchers.

Batch process helps to add multiple vouchers in one request. <br/> ⚠️ Adjust batch sizes based on processing times. We recommended use maximum amount of 1000 records and adjust the batch size based on processing time.<br/> ⚠️ Endpoint is available only in Enterprise interface.<br/>

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\VouchersBatchBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\VouchersBatchBody | 
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $apiInstance->postBulkVouchers($body, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->postBulkVouchers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\VouchersBatchBody**](../Model/VouchersBatchBody.md)|  |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postVoucherApply**
> postVoucherApply($body, $voucher_id, $accept_language)

Application of a voucher

Sets a voucher as applied.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsApplyvoucherBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsApplyvoucherBody | 
$voucher_id = "voucher_id_example"; // string | The unique ID of the voucher.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $apiInstance->postVoucherApply($body, $voucher_id, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->postVoucherApply: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ActionsApplyvoucherBody**](../Model/ActionsApplyvoucherBody.md)|  |
 **voucher_id** | **string**| The unique ID of the voucher. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putVoucher**
> putVoucher($body, $voucher_id, $accept_language)

Update a voucher

This method updates a specific voucher.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\VouchersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\VouchersVoucherIdBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\VouchersVoucherIdBody | 
$voucher_id = "voucher_id_example"; // string | The unique ID of the voucher.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $apiInstance->putVoucher($body, $voucher_id, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->putVoucher: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\VouchersVoucherIdBody**](../Model/VouchersVoucherIdBody.md)|  |
 **voucher_id** | **string**| The unique ID of the voucher. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

