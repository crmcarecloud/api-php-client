# CrmCareCloud\Webservice\RestApi\Client\VouchersApi

All URIs are relative to *https://&lt;projectURL&gt;/webservice/rest-api/enterprise-interface/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getVoucher**](VouchersApi.md#getvoucher) | **GET** /vouchers/{voucher_id} | Get a voucher
[**getVouchers**](VouchersApi.md#getvouchers) | **GET** /vouchers | Get all vouchers
[**postVoucherApply**](VouchersApi.md#postvoucherapply) | **POST** /vouchers/{voucher_id}/actions/apply-voucher | Application of a voucher

# **getVoucher**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200135 getVoucher($voucher_id, $accept_language)

Get a voucher

Get information about a specific voucher

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
$voucher_id = "voucher_id_example"; // string | The unique id for the voucher
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

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
 **voucher_id** | **string**| The unique id for the voucher |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200135**](../Model/InlineResponse200135.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVouchers**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20020 getVouchers($accept_language, $count, $offset, $sort_field, $sort_direction, $customer_id, $code, $store_id, $is_valid, $is_applied, $without_stores)

Get all vouchers

Get information as a list o all vouchers

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
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1
$count = 100; // int | The number of records to return.
$offset = 0; // int | The number of records from a collection to skip.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$customer_id = "customer_id_example"; // string | The unique id of the customer
$code = "code_example"; // string | Unique code of the voucher
$store_id = "store_id_example"; // string | The unique id of the store where customer can apply the reward
$is_valid = true; // bool | *in validity range - true / before or after validity range - false / no value - all*
$is_applied = true; // bool | Filter by voucher application and reservation. *Possible values: true - all applied or reserved vouchers / false - all vouchers that have not been applied yet or that are not reserved actually / no value - all vouchers*
$without_stores = true; // bool | If true, the data will not contain information about business units (stores). If false, or not set resource returns default strucutre.

try {
    $result = $apiInstance->getVouchers($accept_language, $count, $offset, $sort_field, $sort_direction, $customer_id, $code, $store_id, $is_valid, $is_applied, $without_stores);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VouchersApi->getVouchers: ', $e->getMessage(), PHP_EOL;
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
 **customer_id** | **string**| The unique id of the customer | [optional]
 **code** | **string**| Unique code of the voucher | [optional]
 **store_id** | **string**| The unique id of the store where customer can apply the reward | [optional]
 **is_valid** | **bool**| *in validity range - true / before or after validity range - false / no value - all* | [optional]
 **is_applied** | **bool**| Filter by voucher application and reservation. *Possible values: true - all applied or reserved vouchers / false - all vouchers that have not been applied yet or that are not reserved actually / no value - all vouchers* | [optional]
 **without_stores** | **bool**| If true, the data will not contain information about business units (stores). If false, or not set resource returns default strucutre. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postVoucherApply**
> postVoucherApply($body, $voucher_id, $accept_language)

Application of a voucher

Sets a voucher as applied

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
$voucher_id = "voucher_id_example"; // string | The unique id for the voucher
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

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
 **voucher_id** | **string**| The unique id for the voucher |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

