# CrmCareCloud\Webservice\RestApi\Client\CreditHistoryApi

All URIs are relative to *https://{project_url}/webservice/rest-api/{api_interface}/{version}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCreditHistory**](CreditHistoryApi.md#getcredithistory) | **GET** /credit-history | Get credit transaction history

# **getCreditHistory**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetCreditHistory200Response getCreditHistory($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $store_id, $partner_id, $time_from, $time_to, $credit_operation_type, $credit_operation_note)

Get credit transaction history

Get a list of credit transactions of the customer.  Credit history is a chronological audit log of all credit operations on a customer account. Each record captures the operation type (deposit, reduction, or transfer), the amount, timestamp, store, partner, and an optional note.  The `customer_id` parameter is required. Filter by operation type using `credit_operation_type`, or search within notes using `credit_operation_note`. Use `time_from` and `time_to` to scope results to a date range.  Related: [GET /credits](https://carecloud.readme.io/reference/getcredits), [POST /credits/actions/deposit](https://carecloud.readme.io/reference/postcreditdeposit) (enterprise interface only), [POST /credits/actions/reduce](https://carecloud.readme.io/reference/postcreditreduction) (enterprise interface only)

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CreditHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique ID of the customer.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.
$count = 100; // int | The number of records to return in API response.  ⚠️ We recommended adjust the batch size based on processing time. Depending on the response time of the request. Default value of 100 records is used if `count` parameter is not set.
$offset = 0; // int | The number of records from a collection to skip. Default value of 0 is used when parameter `offset` is not set.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$store_id = "store_id_example"; // string | The unique ID of the store in CareCloud.
$partner_id = "partner_id_example"; // string | Unique ID of the partner from the resource [GET /partners](https://carecloud.readme.io/reference/getpartners).
$time_from = "time_from_example"; // string | Start of the time interval for filtering. Accepts the format `YYYY-MM-DD HH:MM:SS` or ISO-8601 format (`YYYY-MM-DDTHH:MM:SS`). All times are in the local timezone.
$time_to = "time_to_example"; // string | End of the time interval for filtering. Accepts the format `YYYY-MM-DD HH:MM:SS` or ISO-8601 format (`YYYY-MM-DDTHH:MM:SS`). All times are in the local timezone.
$credit_operation_type = "credit_operation_type_example"; // string | Search record by the operation type name or a part of the operation type name.
$credit_operation_note = "credit_operation_note_example"; // string | Search record by the operation note or a part of the operation note.

try {
    $result = $apiInstance->getCreditHistory($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $store_id, $partner_id, $time_from, $time_to, $credit_operation_type, $credit_operation_note);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditHistoryApi->getCreditHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique ID of the customer. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return in API response.  ⚠️ We recommended adjust the batch size based on processing time. Depending on the response time of the request. Default value of 100 records is used if &#x60;count&#x60; parameter is not set. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. Default value of 0 is used when parameter &#x60;offset&#x60; is not set. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **store_id** | **string**| The unique ID of the store in CareCloud. | [optional]
 **partner_id** | **string**| Unique ID of the partner from the resource [GET /partners](https://carecloud.readme.io/reference/getpartners). | [optional]
 **time_from** | **string**| Start of the time interval for filtering. Accepts the format &#x60;YYYY-MM-DD HH:MM:SS&#x60; or ISO-8601 format (&#x60;YYYY-MM-DDTHH:MM:SS&#x60;). All times are in the local timezone. | [optional]
 **time_to** | **string**| End of the time interval for filtering. Accepts the format &#x60;YYYY-MM-DD HH:MM:SS&#x60; or ISO-8601 format (&#x60;YYYY-MM-DDTHH:MM:SS&#x60;). All times are in the local timezone. | [optional]
 **credit_operation_type** | **string**| Search record by the operation type name or a part of the operation type name. | [optional]
 **credit_operation_note** | **string**| Search record by the operation note or a part of the operation note. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetCreditHistory200Response**](../Model/GetCreditHistory200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

