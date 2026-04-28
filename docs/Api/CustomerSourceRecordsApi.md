# CrmCareCloud\Webservice\RestApi\Client\CustomerSourceRecordsApi

All URIs are relative to *https://{project_url}/webservice/rest-api/{api_interface}/{version}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCustomerSourceRecords**](CustomerSourceRecordsApi.md#getcustomersourcerecords) | **GET** /customer-source-records | Get customer source records

# **getCustomerSourceRecords**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetCustomerSourceRecord200Response getCustomerSourceRecords($accept_language, $count, $offset, $sort_field, $sort_direction, $customer_id, $external_id, $customer_source_id, $external_ids)

Get customer source records

Get all customer source records.  Customer source records link customer accounts to the external systems that created or track them. Each record includes the source ID and one or more external IDs from that system. This endpoint returns source records across all customers. To retrieve source records for a specific customer, use [GET /customers/{customer_id}/sources](https://carecloud.readme.io/reference/getsubcustomersource).  When both the `external_ids` and `external_id` filter parameters are provided, `external_ids` takes priority and `external_id` is ignored.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomerSourceRecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.
$count = 100; // int | The number of records to return in API response.  ⚠️ We recommended adjust the batch size based on processing time. Depending on the response time of the request. Default value of 100 records is used if `count` parameter is not set.
$offset = 0; // int | The number of records from a collection to skip. Default value of 0 is used when parameter `offset` is not set.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$customer_id = "customer_id_example"; // string | The unique ID of the customer.
$external_id = "external_id_example"; // string | The external ID of the customer in the external system. Deprecated - use `external_ids` instead. To filter by external ID within a specific customer source, combine `external_ids` with the `customer_source_id` parameter.
$customer_source_id = "customer_source_id_example"; // string | The unique ID of the customer source. It identifies the system where the customer belongs or the customer account was created.
$external_ids = array("external_ids_example"); // string[] | Filter records by one or more external IDs. Returns records where any stored external ID matches any of the provided values. Use together with `customer_source_id` to scope the filter to a specific customer source.  To filter by multiple values, use array syntax: `external_ids[]=ACSDOIDF23&external_ids[]=BXTE123456`

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
 **count** | **int**| The number of records to return in API response.  ⚠️ We recommended adjust the batch size based on processing time. Depending on the response time of the request. Default value of 100 records is used if &#x60;count&#x60; parameter is not set. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. Default value of 0 is used when parameter &#x60;offset&#x60; is not set. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **customer_id** | **string**| The unique ID of the customer. | [optional]
 **external_id** | **string**| The external ID of the customer in the external system. Deprecated - use &#x60;external_ids&#x60; instead. To filter by external ID within a specific customer source, combine &#x60;external_ids&#x60; with the &#x60;customer_source_id&#x60; parameter. | [optional]
 **customer_source_id** | **string**| The unique ID of the customer source. It identifies the system where the customer belongs or the customer account was created. | [optional]
 **external_ids** | [**string[]**](../Model/string.md)| Filter records by one or more external IDs. Returns records where any stored external ID matches any of the provided values. Use together with &#x60;customer_source_id&#x60; to scope the filter to a specific customer source.  To filter by multiple values, use array syntax: &#x60;external_ids[]&#x3D;ACSDOIDF23&amp;external_ids[]&#x3D;BXTE123456&#x60; | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetCustomerSourceRecord200Response**](../Model/GetCustomerSourceRecord200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

