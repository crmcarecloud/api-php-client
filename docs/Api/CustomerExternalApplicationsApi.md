# CrmCareCloud\Webservice\RestApi\Client\CustomerExternalApplicationsApi

All URIs are relative to *https://{project_url}/webservice/rest-api/{api_interface}/{version}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCustomerExternalApp**](CustomerExternalApplicationsApi.md#getcustomerexternalapp) | **GET** /customer-external-applications/{customer_external_application_id} | Get a customer external application
[**getCustomerExternalApps**](CustomerExternalApplicationsApi.md#getcustomerexternalapps) | **GET** /customer-external-applications | Get all customer external applications

# **getCustomerExternalApp**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetCustomerExternalApp200Response getCustomerExternalApp($customer_external_application_id, $accept_language)

Get a customer external application

Get information about a specific customer external application.  Returns the detail of a single external application record. To list all available external applications, use [GET /customer-external-applications](https://carecloud.readme.io/reference/getcustomerexternalapps).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomerExternalApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_external_application_id = "customer_external_application_id_example"; // string | The unique ID of a customer external application in CareCloud.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->getCustomerExternalApp($customer_external_application_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerExternalApplicationsApi->getCustomerExternalApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_external_application_id** | **string**| The unique ID of a customer external application in CareCloud. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetCustomerExternalApp200Response**](../Model/GetCustomerExternalApp200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomerExternalApps**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetCustomerExternalApps200Response getCustomerExternalApps($accept_language, $count, $offset, $sort_field, $sort_direction, $text_id)

Get all customer external applications

Get a list of customer external applications accepted in the CareCloud platform.  External applications are third-party or in-house systems registered to interact with the CareCloud API on behalf of customers. They are used for generating authentication tokens and managing push notification registrations. Use the returned IDs in authentication token and push notification requests.  Related: [POST /customers/actions/auth-token](https://carecloud.readme.io/reference/postcustomersauthtoken) (enterprise interface only), [POST /customers/actions/set-push-notifications](https://carecloud.readme.io/reference/postcustomersetpushnotifications) (enterprise interface only)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomerExternalApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.
$count = 100; // int | The number of records to return in API response.  ⚠️ We recommended adjust the batch size based on processing time. Depending on the response time of the request. Default value of 100 records is used if `count` parameter is not set.
$offset = 0; // int | The number of records from a collection to skip. Default value of 0 is used when parameter `offset` is not set.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$text_id = "text_id_example"; // string | Filter by one value or a list of external application text IDs. The list of values is available at [GET /customer-external-applications](https://carecloud.readme.io/reference/getcustomerexternalapps). In case you want to filter multiple options use array syntax: `text_id[]=sandbox_app&text_id[]=other_app` Logic OR is used between values.

try {
    $result = $apiInstance->getCustomerExternalApps($accept_language, $count, $offset, $sort_field, $sort_direction, $text_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerExternalApplicationsApi->getCustomerExternalApps: ', $e->getMessage(), PHP_EOL;
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
 **text_id** | **string**| Filter by one value or a list of external application text IDs. The list of values is available at [GET /customer-external-applications](https://carecloud.readme.io/reference/getcustomerexternalapps). In case you want to filter multiple options use array syntax: &#x60;text_id[]&#x3D;sandbox_app&amp;text_id[]&#x3D;other_app&#x60; Logic OR is used between values. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetCustomerExternalApps200Response**](../Model/GetCustomerExternalApps200Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

