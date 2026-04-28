# CrmCareCloud\Webservice\RestApi\Client\PurchaseItemTypesApi

All URIs are relative to *https://{project_url}/webservice/rest-api/{api_interface}/{version}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPurchaseItemTypes**](PurchaseItemTypesApi.md#getpurchaseitemtypes) | **GET** /purchase-item-types | Get all purchase item types

# **getPurchaseItemTypes**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetPurchaseItemTypes200Response getPurchaseItemTypes($accept_language, $count, $offset, $sort_field, $sort_direction, $text_id)

Get all purchase item types

Get a list of purchase item types accepted in the CareCloud platform. Each type determines how CareCloud processes the item within a purchase, including which loyalty rules and discounts apply.  > **Note:** Type names may vary between CareCloud projects and can be customized per deployment. The names listed here are approximate references only. Always use `type_id` to identify a purchase item type in your integration — do not rely on the name.  ---  ## Often used types  **Transaction in a store** The standard type for items purchased in a brick-and-mortar retail store. This is the most commonly used type for in-store transactions. All standard loyalty and discount rules apply.  **E-commerce transaction** The standard type for items purchased through an online store or e-commerce channel. This is the most commonly used type for online transactions. All standard loyalty and discount rules apply.  **Cancel** Used to mark canceled purchase items. Assigning this type to an item identifies it as a cancellation within the purchase, making it easier to track and process.  ---  ## Special types with effects  These types alter the default loyalty and discount behavior in CareCloud.  **Item without reward application** Items of this type are excluded from all reward and discount calculations — no discounts or rewards can be applied. However, loyalty points can still be collected for these items, and customers can use loyalty points to pay for them.  **OTC without loyalty** Over-the-counter (OTC) refers to products sold without a prescription, most commonly in pharmacy retail. In wider retail contexts, the term also covers items sold at a service counter that are typically excluded from promotions, such as tobacco, lottery tickets, or gift cards. Items of this type do not earn loyalty points and are not eligible for any discounts or rewards.  **Point payments only** Items of this type can only be paid for using loyalty points. No discounts or rewards are applied.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\PurchaseItemTypesApi(
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
$text_id = "text_id_example"; // string | You can filter resource results depending on his text ID.

try {
    $result = $apiInstance->getPurchaseItemTypes($accept_language, $count, $offset, $sort_field, $sort_direction, $text_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseItemTypesApi->getPurchaseItemTypes: ', $e->getMessage(), PHP_EOL;
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
 **text_id** | **string**| You can filter resource results depending on his text ID. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetPurchaseItemTypes200Response**](../Model/GetPurchaseItemTypes200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

