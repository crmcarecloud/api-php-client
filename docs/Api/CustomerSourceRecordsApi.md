# CrmCareCloud\Webservice\RestApi\Client\CustomerSourceRecordsApi

All URIs are relative to *https://{project_url}/webservice/rest-api/{api_interface}/{version}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCustomerSourceRecords**](CustomerSourceRecordsApi.md#getcustomersourcerecords) | **GET** /customer-source-records | Get customer source records

# **getCustomerSourceRecords**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20043 getCustomerSourceRecords($accept_language, $count, $offset, $sort_field, $sort_direction, $customer_id, $external_id, $customer_source_id, $external_ids)

Get customer source records

Get information about all customer source records.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CrmCareCloud\Webservice\RestApi\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomerSourceRecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.
$count = 100; // int | The number of records to return.
$offset = 0; // int | The number of records from a collection to skip.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$customer_id = "customer_id_example"; // string | The unique ID of the customer.
$external_id = "external_id_example"; // string | The parameter contains a unique ID from an external system (POS, webshop,  mobile app, ERP, and others ). ID should be unique within a customer source for better identification (For example, the process of customer synchronization between systems).
$customer_source_id = "customer_source_id_example"; // string | The unique ID of the customer source. It identifies the system where the customer belongs or the customer account was created.
$external_ids = array("external_ids_example"); // string[] | The list of IDs from other system than CareCloud. It is usually used for the synchronization or identification of the records in between CareCloud and other system. The IDs don't need to be necessary unique. Usage of other parameter could be required to return more specific results.

try {
    $result = $apiInstance->getCustomerSourceRecords($accept_language, $count, $offset, $sort_field, $sort_direction, $customer_id, $external_id, $customer_source_id, $external_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerSourceRecordsApi->getCustomerSourceRecords: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **customer_id** | **string**| The unique ID of the customer. | [optional]
 **external_id** | **string**| The parameter contains a unique ID from an external system (POS, webshop,  mobile app, ERP, and others ). ID should be unique within a customer source for better identification (For example, the process of customer synchronization between systems). | [optional]
 **customer_source_id** | **string**| The unique ID of the customer source. It identifies the system where the customer belongs or the customer account was created. | [optional]
 **external_ids** | [**string[]**](../Model/string.md)| The list of IDs from other system than CareCloud. It is usually used for the synchronization or identification of the records in between CareCloud and other system. The IDs don&#x27;t need to be necessary unique. Usage of other parameter could be required to return more specific results. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20043**](../Model/InlineResponse20043.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

