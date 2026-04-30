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
[**postGeneratePassMachine**](CardsApi.md#postgeneratepassmachine) | **POST** /cards/actions/generate-pass-machine-card | Get a PassMachine digital card
[**postValidateFreeCard**](CardsApi.md#postvalidatefreecard) | **POST** /cards/actions/validate-free-card | Validate free card
[**postValidateIsicCard**](CardsApi.md#postvalidateisiccard) | **POST** /cards/actions/validate-isic-card | Validate ISIC card
[**putCard**](CardsApi.md#putcard) | **PUT** /cards/{card_id} | Update a card

# **getCard**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetCard200Response getCard($card_id, $accept_language)

Get a card

Get information about a specific customer card, including its number, type, validity period, state, and the customer it is assigned to. See [Cards](https://help.crmcarecloud.com/en/loyalty-engine/cards) for details.

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

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetCard200Response**](../Model/GetCard200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCards**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetCards200Response getCards($accept_language, $count, $offset, $sort_field, $sort_direction, $customer_id, $card_number, $card_type_id, $state, $is_valid, $card_number_list, $search_secondary_card_number)

Get all cards

Get a list of all customer cards. Cards are the primary customer identification mechanism in CareCloud. Each card carries a unique number regardless of its format - plastic, electronic, virtual, or membership. A customer can hold multiple cards of different types. Use filters such as `customer_id`, `card_type_id`, and `card_state` to narrow results. See [Cards](https://help.crmcarecloud.com/en/loyalty-engine/cards) for details.

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
$count = 100; // int | The number of records to return in API response.  ⚠️ We recommended adjust the batch size based on processing time. Depending on the response time of the request. Default value of 100 records is used if `count` parameter is not set.
$offset = 0; // int | The number of records from a collection to skip. Default value of 0 is used when parameter `offset` is not set.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$customer_id = "customer_id_example"; // string | The unique ID of the customer.
$card_number = "card_number_example"; // string | Number of the customer card.
$card_type_id = "card_type_id_example"; // string | The unique ID of the card type.
$state = 56; // int | State of the card. *Possible values are: 0 - blocked / 1 - active*
$is_valid = true; // bool | *in validity range - true / before or after validity range - false / no value - all*
$card_number_list = array("card_number_list_example"); // string[] | List of the card numbers. If used, a list of cards will be returned if matching card numbers in CareCloud. In case you want to filter multiple options use array syntax : `card_number_list[]=1000000000016&card_number_list[]=2000000000025` Logic OR is used between values.
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
 **count** | **int**| The number of records to return in API response.  ⚠️ We recommended adjust the batch size based on processing time. Depending on the response time of the request. Default value of 100 records is used if &#x60;count&#x60; parameter is not set. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. Default value of 0 is used when parameter &#x60;offset&#x60; is not set. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **customer_id** | **string**| The unique ID of the customer. | [optional]
 **card_number** | **string**| Number of the customer card. | [optional]
 **card_type_id** | **string**| The unique ID of the card type. | [optional]
 **state** | **int**| State of the card. *Possible values are: 0 - blocked / 1 - active* | [optional]
 **is_valid** | **bool**| *in validity range - true / before or after validity range - false / no value - all* | [optional]
 **card_number_list** | [**string[]**](../Model/string.md)| List of the card numbers. If used, a list of cards will be returned if matching card numbers in CareCloud. In case you want to filter multiple options use array syntax : &#x60;card_number_list[]&#x3D;1000000000016&amp;card_number_list[]&#x3D;2000000000025&#x60; Logic OR is used between values. | [optional]
 **search_secondary_card_number** | **bool**| Include secondary card numbers in search for filters &#x60;card_number&#x60; and &#x60;card_number_list&#x60;. *Possible values: true - CareCloud API search only secondary card numbers / false - CareCloud API search only card numbers / default behavior without parameter - CareCloud API search only card numbers* | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetCards200Response**](../Model/GetCards200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAssignCard**
> \CrmCareCloud\Webservice\RestApi\Client\Model\PostCardAssign200Response postAssignCard($body, $accept_language)

Assign free card

Assign a free card to a customer. This action is limited to one card per card type per customer. If your project allows customers to have multiple cards of one type, use [PUT /cards/{card_id}](https://carecloud.readme.io/reference/putcard) instead. See [Assign card to customer](https://help.crmcarecloud.com/en/marketing-automation/actions/assign-card-to-customer) for details.

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

[**\CrmCareCloud\Webservice\RestApi\Client\Model\PostCardAssign200Response**](../Model/PostCardAssign200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postBatchCards**
> postBatchCards($body, $accept_language)

Create a batch of cards

Create multiple customer cards in a single request. Use this endpoint to import a large number of cards efficiently. ⚠️ Adjust batch sizes based on processing times. We recommend using a maximum of 1000 records and adjusting the batch size based on processing time. ⚠️ Endpoint is available only in the Enterprise interface.

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
> \CrmCareCloud\Webservice\RestApi\Client\Model\PostCards201Response postCard($body, $accept_language)

Create a card

Add a new customer card. For bulk creation, use [POST /cards/batch](https://carecloud.readme.io/reference/postbatchcards) instead. To assign an existing free card from a pre-imported pool, use [POST /cards/actions/assign-free-card](https://carecloud.readme.io/reference/postassigncard) instead. ⚠️ Endpoint is available only in the Enterprise interface.

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

[**\CrmCareCloud\Webservice\RestApi\Client\Model\PostCards201Response**](../Model/PostCards201Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postGenerateDigitalCard**
> \CrmCareCloud\Webservice\RestApi\Client\Model\PostCardGenerateDigital200Response postGenerateDigitalCard($body, $accept_language)

Generate virtual card file

Generate a virtual card file. The file can be a PNG image (barcode or QR code) or a pass package for Apple Wallet. Use the returned URL to display or distribute the digital card in a mobile application or by email.

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

[**\CrmCareCloud\Webservice\RestApi\Client\Model\PostCardGenerateDigital200Response**](../Model/PostCardGenerateDigital200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postGeneratePassMachine**
> \CrmCareCloud\Webservice\RestApi\Client\Model\PostCardGeneratePassMachine200Response postGeneratePassMachine($body, $accept_language)

Get a PassMachine digital card

Generate a PassMachine link for a customer's digital card. The customer must have an existing card; if no card exists, the link cannot be generated.

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
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsGeneratepassmachinecardBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsGeneratepassmachinecardBody | 
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->postGeneratePassMachine($body, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsApi->postGeneratePassMachine: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ActionsGeneratepassmachinecardBody**](../Model/ActionsGeneratepassmachinecardBody.md)|  |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\PostCardGeneratePassMachine200Response**](../Model/PostCardGeneratePassMachine200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postValidateFreeCard**
> \CrmCareCloud\Webservice\RestApi\Client\Model\PostCardValidateFree200Response postValidateFreeCard($body, $accept_language)

Validate free card

Validates whether a card is free to use — meaning it is not blocked, not assigned to another customer, and exists in the system.

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
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsValidatefreecardBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsValidatefreecardBody | 
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->postValidateFreeCard($body, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsApi->postValidateFreeCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ActionsValidatefreecardBody**](../Model/ActionsValidatefreecardBody.md)|  |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\PostCardValidateFree200Response**](../Model/PostCardValidateFree200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postValidateIsicCard**
> \CrmCareCloud\Webservice\RestApi\Client\Model\PostCardValidateIsic200Response postValidateIsicCard($body, $accept_language)

Validate ISIC card

Validates whether a card is a valid ISIC card. Optionally checks whether the card is already present in the CareCloud database.

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
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsValidateisiccardBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsValidateisiccardBody | 
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->postValidateIsicCard($body, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardsApi->postValidateIsicCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ActionsValidateisiccardBody**](../Model/ActionsValidateisiccardBody.md)|  |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\PostCardValidateIsic200Response**](../Model/PostCardValidateIsic200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putCard**
> putCard($body, $card_id, $accept_language)

Update a card

Update a specific customer card. Use this endpoint to change the card's validity period, state, or assigned customer.

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

