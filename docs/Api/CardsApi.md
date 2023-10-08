# CrmCareCloud\Webservice\RestApi\Client\CardsApi

All URIs are relative to *https://{project_url}/webservice/rest-api/{api_interface}/{version}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCard**](CardsApi.md#getcard) | **GET** /cards/{card_id} | Get a card
[**getCards**](CardsApi.md#getcards) | **GET** /cards | Get all cards
[**postAssignCard**](CardsApi.md#postassigncard) | **POST** /cards/actions/assign-free-card | Assign free card
[**postBatchCards**](CardsApi.md#postbatchcards) | **POST** /cards/batch | Create a batch of cards
[**postCard**](CardsApi.md#postcard) | **POST** /cards | Create a card
[**postGenerateDigitalCard**](CardsApi.md#postgeneratedigitalcard) | **POST** /cards/actions/generate-digital-card-file | Generate virtual card file
[**putCard**](CardsApi.md#putcard) | **PUT** /cards/{card_id} | Update a card

# **getCard**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20018 getCard($card_id, $accept_language)

Get a card

Get information about a specific customer card.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$card_id = "card_id_example"; // string | The unique ID of the card.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->getCard($card_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsApi->getCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_id** | **string**| The unique ID of the card. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCards**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20017 getCards($accept_language, $count, $offset, $sort_field, $sort_direction, $customer_id, $card_number, $card_type_id, $state, $is_valid, $card_number_list, $search_secondary_card_number)

Get all cards

Get information about all customer cards.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CardsApi(
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
$card_number = "card_number_example"; // string | Number of the customer card.
$card_type_id = "card_type_id_example"; // string | The unique ID of the card type.
$state = 56; // int | State of the customer. *Possible values are: 0 - deleted / 1 - active / 2 - non active*
$is_valid = true; // bool | *in validity range - true / before or after validity range - false / no value - all*
$card_number_list = array("card_number_list_example"); // string[] | List of the card numbers. If used, a list of cards will be returned if matching card numbers in CareCloud.
$search_secondary_card_number = true; // bool | Include secondary card numbers in search for filters `card_number` and `card_number_list`. *Possible values: true - CareCloud API search only secondary card numbers / false - CareCloud API search only card numbers / default behavior without parameter - CareCloud API search only card numbers*

try {
    $result = $apiInstance->getCards($accept_language, $count, $offset, $sort_field, $sort_direction, $customer_id, $card_number, $card_type_id, $state, $is_valid, $card_number_list, $search_secondary_card_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsApi->getCards: ', $e->getMessage(), PHP_EOL;
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
 **card_number** | **string**| Number of the customer card. | [optional]
 **card_type_id** | **string**| The unique ID of the card type. | [optional]
 **state** | **int**| State of the customer. *Possible values are: 0 - deleted / 1 - active / 2 - non active* | [optional]
 **is_valid** | **bool**| *in validity range - true / before or after validity range - false / no value - all* | [optional]
 **card_number_list** | [**string[]**](../Model/string.md)| List of the card numbers. If used, a list of cards will be returned if matching card numbers in CareCloud. | [optional]
 **search_secondary_card_number** | **bool**| Include secondary card numbers in search for filters &#x60;card_number&#x60; and &#x60;card_number_list&#x60;. *Possible values: true - CareCloud API search only secondary card numbers / false - CareCloud API search only card numbers / default behavior without parameter - CareCloud API search only card numbers* | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAssignCard**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20019 postAssignCard($body, $accept_language)

Assign free card

Assign a free card in order to the customer.  <p class=\"warning\">⚠️ Action method is available only in Enterprise interface.</p>

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsAssignfreecardBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsAssignfreecardBody | 
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->postAssignCard($body, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsApi->postAssignCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ActionsAssignfreecardBody**](../Model/ActionsAssignfreecardBody.md)|  |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postBatchCards**
> postBatchCards($body, $accept_language)

Create a batch of cards

Batch process helps to add multiple cards in one request.<br/> ⚠️ Adjust batch sizes based on processing times. We recommended use maximum amount of 1000 records and adjust the batch size based on processing time.<br/> ⚠️ Endpoint is available only in the Enterprise interface.<br/>

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\CardsBatchBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\CardsBatchBody | 
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $apiInstance->postBatchCards($body, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling CardsApi->postBatchCards: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\CardsBatchBody**](../Model/CardsBatchBody.md)|  |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCard**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2014 postCard($body, $accept_language)

Create a card

Add a new customer card.<br/> ⚠️ Endpoint is available only in the Enterprise interface.<br/>

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\CardsBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\CardsBody | 
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->postCard($body, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsApi->postCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\CardsBody**](../Model/CardsBody.md)|  |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2014**](../Model/InlineResponse2014.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postGenerateDigitalCard**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20020 postGenerateDigitalCard($body, $accept_language)

Generate virtual card file

Generate file with virtual card. File can be generated as a PNG file or file for Apple Wallet.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsGeneratedigitalcardfileBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsGeneratedigitalcardfileBody | 
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->postGenerateDigitalCard($body, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsApi->postGenerateDigitalCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ActionsGeneratedigitalcardfileBody**](../Model/ActionsGeneratedigitalcardfileBody.md)|  |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putCard**
> putCard($body, $card_id, $accept_language)

Update a card

Update a specific customer card.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\CardsCardIdBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\CardsCardIdBody | 
$card_id = "card_id_example"; // string | The unique ID of the card.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $apiInstance->putCard($body, $card_id, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling CardsApi->putCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\CardsCardIdBody**](../Model/CardsCardIdBody.md)|  |
 **card_id** | **string**| The unique ID of the card. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

