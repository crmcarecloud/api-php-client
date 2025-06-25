# CrmCareCloud\Webservice\RestApi\Client\StamperApi

All URIs are relative to *https://{project_url}/webservice/rest-api/{api_interface}/{version}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getStamperCampaign**](StamperApi.md#getstampercampaign) | **GET** /stamper-campaigns/{stamper_campaign_id} | Get a stamper campaign
[**getStamperCampaigns**](StamperApi.md#getstampercampaigns) | **GET** /stamper-campaigns | Get all stamper campaigns
[**getStamperCard**](StamperApi.md#getstampercard) | **GET** /stamper-cards/{stamper_card_id} | Get a stamper card
[**getStamperCards**](StamperApi.md#getstampercards) | **GET** /stamper-cards | Get all stamper cards
[**getStamperStamp**](StamperApi.md#getstamperstamp) | **GET** /stamps/{stamper_stamp_id} | Get a stamp
[**getStamperStamps**](StamperApi.md#getstamperstamps) | **GET** /stamps | Get all stamper stamps

# **getStamperCampaign**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetStamperCampaign200Response getStamperCampaign($stamper_campaign_id, $accept_language)

Get a stamper campaign

Get a definition of a specific stamper campaign.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\StamperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stamper_campaign_id = "stamper_campaign_id_example"; // string | The unique ID of the stamper campaign.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->getStamperCampaign($stamper_campaign_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StamperApi->getStamperCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stamper_campaign_id** | **string**| The unique ID of the stamper campaign. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetStamperCampaign200Response**](../Model/GetStamperCampaign200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStamperCampaigns**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetStamperCampaigns200Response getStamperCampaigns($accept_language, $count, $offset, $sort_field, $sort_direction, $name, $valid_from, $valid_to, $partner_id, $is_valid)

Get all stamper campaigns

Get a list of stamper campaigns from CRM CareCloud.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\StamperApi(
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
$name = "name_example"; // string | Search record by name or a part of the name.
$valid_from = "valid_from_example"; // string | Date and time from when is record already valid. *(YYYY-MM-DD HH:MM:SS)*
$valid_to = "valid_to_example"; // string | Date and time to when is record still valid. *(YYYY-MM-DD HH:MM:SS)*
$partner_id = "partner_id_example"; // string | Unique ID of the partner from the resource [GET /partners](https://carecloud.readme.io/reference/getpartners).
$is_valid = true; // bool | *in validity range - true / before or after validity range - false / no value - all*

try {
    $result = $apiInstance->getStamperCampaigns($accept_language, $count, $offset, $sort_field, $sort_direction, $name, $valid_from, $valid_to, $partner_id, $is_valid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StamperApi->getStamperCampaigns: ', $e->getMessage(), PHP_EOL;
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
 **name** | **string**| Search record by name or a part of the name. | [optional]
 **valid_from** | **string**| Date and time from when is record already valid. *(YYYY-MM-DD HH:MM:SS)* | [optional]
 **valid_to** | **string**| Date and time to when is record still valid. *(YYYY-MM-DD HH:MM:SS)* | [optional]
 **partner_id** | **string**| Unique ID of the partner from the resource [GET /partners](https://carecloud.readme.io/reference/getpartners). | [optional]
 **is_valid** | **bool**| *in validity range - true / before or after validity range - false / no value - all* | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetStamperCampaigns200Response**](../Model/GetStamperCampaigns200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStamperCard**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetStamperCard200Response getStamperCard($stamper_card_id, $accept_language)

Get a stamper card

Get a definition of a specific stamper card. ⚠️ If no card is returned for active campaign, that means a customer did not collect any stamps yet, so card was not created. After he collects fist stamp, the card will be automatically generated.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\StamperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stamper_card_id = "stamper_card_id_example"; // string | The unique ID of the stamper card.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->getStamperCard($stamper_card_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StamperApi->getStamperCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stamper_card_id** | **string**| The unique ID of the stamper card. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetStamperCard200Response**](../Model/GetStamperCard200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStamperCards**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetStamperCards200Response getStamperCards($accept_language, $count, $offset, $sort_field, $sort_direction, $customer_id, $stamper_campaign_id, $state, $filled_up)

Get all stamper cards

Get a list of stamper cards from CRM CareCloud. ⚠️ If no card is returned for active campaign, that means a customer did not collect any stamps yet, so card was not created. After he collects fist stamp, the card will be automatically generated.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\StamperApi(
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
$stamper_campaign_id = "stamper_campaign_id_example"; // string | The unique ID of the stamper campaign. The filter reduces data in the response related only to the selected stamper campaign. In case you want to filter multiple options use array syntax: `stamper_campaign_id[]=8bc8ca16f9c5039951021700a2&stamper_campaign_id[]=82c06812c0756528660784fef`
$state = 56; // int | State of the card. *Possible values are: 0 - blocked / 1 - active*
$filled_up = "filled_up_example"; // string | The filter where you can decide what kind of stamper card you want. If the filter is not use, all cards are returned. Possible values: true - Filter returns only cards that has all stamps / false - Filter returns all cards that have still free at least one for the stamp.

try {
    $result = $apiInstance->getStamperCards($accept_language, $count, $offset, $sort_field, $sort_direction, $customer_id, $stamper_campaign_id, $state, $filled_up);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StamperApi->getStamperCards: ', $e->getMessage(), PHP_EOL;
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
 **stamper_campaign_id** | **string**| The unique ID of the stamper campaign. The filter reduces data in the response related only to the selected stamper campaign. In case you want to filter multiple options use array syntax: &#x60;stamper_campaign_id[]&#x3D;8bc8ca16f9c5039951021700a2&amp;stamper_campaign_id[]&#x3D;82c06812c0756528660784fef&#x60; | [optional]
 **state** | **int**| State of the card. *Possible values are: 0 - blocked / 1 - active* | [optional]
 **filled_up** | **string**| The filter where you can decide what kind of stamper card you want. If the filter is not use, all cards are returned. Possible values: true - Filter returns only cards that has all stamps / false - Filter returns all cards that have still free at least one for the stamp. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetStamperCards200Response**](../Model/GetStamperCards200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStamperStamp**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetStamperStamp200Response getStamperStamp($stamper_stamp_id, $accept_language)

Get a stamp

Get a specific stamp from the stamper card.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\StamperApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stamper_stamp_id = "stamper_stamp_id_example"; // string | The unique ID of the stamper stamp.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->getStamperStamp($stamper_stamp_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StamperApi->getStamperStamp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stamper_stamp_id** | **string**| The unique ID of the stamper stamp. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetStamperStamp200Response**](../Model/GetStamperStamp200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStamperStamps**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetStamperStamps200Response getStamperStamps($accept_language, $count, $offset, $sort_field, $sort_direction, $stamper_card_id, $customer_id, $stamper_condition_id)

Get all stamper stamps

Get a list of stamps.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\StamperApi(
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
$stamper_card_id = "stamper_card_id_example"; // string | The unique ID of the stamper card. The filter reduces data in the response related only to the selected stamper cards. In case you want to filter multiple options use array syntax: `stamper_card_id[]=8bc8ca16f9c5039951021700a2&stamper_card_id[]=82c06812c0756528660784fef`
$customer_id = "customer_id_example"; // string | The unique ID of the customer.
$stamper_condition_id = "stamper_condition_id_example"; // string | The unique ID of the stamper condition.

try {
    $result = $apiInstance->getStamperStamps($accept_language, $count, $offset, $sort_field, $sort_direction, $stamper_card_id, $customer_id, $stamper_condition_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StamperApi->getStamperStamps: ', $e->getMessage(), PHP_EOL;
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
 **stamper_card_id** | **string**| The unique ID of the stamper card. The filter reduces data in the response related only to the selected stamper cards. In case you want to filter multiple options use array syntax: &#x60;stamper_card_id[]&#x3D;8bc8ca16f9c5039951021700a2&amp;stamper_card_id[]&#x3D;82c06812c0756528660784fef&#x60; | [optional]
 **customer_id** | **string**| The unique ID of the customer. | [optional]
 **stamper_condition_id** | **string**| The unique ID of the stamper condition. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetStamperStamps200Response**](../Model/GetStamperStamps200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

