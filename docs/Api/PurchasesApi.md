# CareCloud\PurchasesApi

All URIs are relative to *https://&lt;projectURL&gt;/enterprise-interface/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPurchase**](PurchasesApi.md#getpurchase) | **GET** /purchases/{purchase_id} | Get a purchase
[**getPurchasePaymentSummary**](PurchasesApi.md#getpurchasepaymentsummary) | **GET** /purchases/{purchase_id}/actions/payment-summary | Return payment summary
[**getPurchases**](PurchasesApi.md#getpurchases) | **GET** /purchases | Get all purchases
[**getSubPurchaseItems**](PurchasesApi.md#getsubpurchaseitems) | **GET** /purchases/{purchase_id}/purchase-items | Get purchase items tied to a purchase
[**getSubPurchasePoints**](PurchasesApi.md#getsubpurchasepoints) | **GET** /purchases/{purchase_id}/points | Get point records tied to a purchase
[**getSubPurchaseVouchers**](PurchasesApi.md#getsubpurchasevouchers) | **GET** /purchases/{purchase_id}/vouchers | Get vouchers tied to a purchase
[**postPurchaseAcceptPayment**](PurchasesApi.md#postpurchaseacceptpayment) | **POST** /purchases/actions/accept-payment | Accept payment
[**postPurchaseAssignCustomer**](PurchasesApi.md#postpurchaseassigncustomer) | **POST** /purchases/actions/assign-customer | Assign customer
[**postPurchaseRecommendedRewards**](PurchasesApi.md#postpurchaserecommendedrewards) | **POST** /purchases/actions/recommended-best-rewards | Recommended best rewards
[**postPurchaseSend**](PurchasesApi.md#postpurchasesend) | **POST** /purchases/actions/send-purchase | Send purchase

# **getPurchase**
> \CareCloud\Model\InlineResponse20076 getPurchase($purchase_id, $accept_language)

Get a purchase

Get information about a specific purchase

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = CareCloud\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CareCloud\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CareCloud\Api\PurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_id = "purchase_id_example"; // string | The unique id for the purchase
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $result = $apiInstance->getPurchase($purchase_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasesApi->getPurchase: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **purchase_id** | **string**| The unique id for the purchase |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CareCloud\Model\InlineResponse20076**](../Model/InlineResponse20076.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPurchasePaymentSummary**
> \CareCloud\Model\InlineResponse20078 getPurchasePaymentSummary($purchase_id, $accept_language)

Return payment summary

Action method shows credit, point and voucher summary of purchase.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = CareCloud\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CareCloud\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CareCloud\Api\PurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_id = "purchase_id_example"; // string | The unique id for the purchase
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $result = $apiInstance->getPurchasePaymentSummary($purchase_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasesApi->getPurchasePaymentSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **purchase_id** | **string**| The unique id for the purchase |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CareCloud\Model\InlineResponse20078**](../Model/InlineResponse20078.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPurchases**
> \CareCloud\Model\InlineResponse20018 getPurchases($accept_language, $count, $offset, $sort_field, $sort_direction, $store_id, $customer_id, $type_id, $payment_time_from, $payment_time_to, $purchase_items_extension)

Get all purchases

Get a list of purchases saved in CRM

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = CareCloud\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CareCloud\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CareCloud\Api\PurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1
$count = 100; // int | The number of records to return.
$offset = 0; // int | The number of records from a collection to skip.
$sort_field = "sort_field_example"; // string | One of the query string parameters for sorting. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$store_id = "store_id_example"; // string | The unique id of the store in CareCloud
$customer_id = "customer_id_example"; // string | The unique id for the customer
$type_id = "type_id_example"; // string | Purchase type
$payment_time_from = "payment_time_from_example"; // string | Date and time from of the purchase payment *(YYYY-MM-DD HH:MM:SS)*
$payment_time_to = "payment_time_to_example"; // string | Date and time to of the purchase payment *(YYYY-MM-DD HH:MM:SS)*
$purchase_items_extension = false; // bool | If true, resource returns extended response with purchase items. If false, the resource won't be extended. If the parameter is not set, the default value is false

try {
    $result = $apiInstance->getPurchases($accept_language, $count, $offset, $sort_field, $sort_direction, $store_id, $customer_id, $type_id, $payment_time_from, $payment_time_to, $purchase_items_extension);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasesApi->getPurchases: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. | [optional] [default to 0]
 **sort_field** | **string**| One of the query string parameters for sorting. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **store_id** | **string**| The unique id of the store in CareCloud | [optional]
 **customer_id** | **string**| The unique id for the customer | [optional]
 **type_id** | **string**| Purchase type | [optional]
 **payment_time_from** | **string**| Date and time from of the purchase payment *(YYYY-MM-DD HH:MM:SS)* | [optional]
 **payment_time_to** | **string**| Date and time to of the purchase payment *(YYYY-MM-DD HH:MM:SS)* | [optional]
 **purchase_items_extension** | **bool**| If true, resource returns extended response with purchase items. If false, the resource won&#x27;t be extended. If the parameter is not set, the default value is false | [optional] [default to false]

### Return type

[**\CareCloud\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubPurchaseItems**
> \CareCloud\Model\InlineResponse20077 getSubPurchaseItems($purchase_id, $accept_language, $count, $offset, $sort_field, $sort_direction)

Get purchase items tied to a purchase

Get information about all purchase items created in relation to a specific purchase

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = CareCloud\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CareCloud\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CareCloud\Api\PurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_id = "purchase_id_example"; // string | The unique id for the purchase
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1
$count = 100; // int | The number of records to return.
$offset = 0; // int | The number of records from a collection to skip.
$sort_field = "sort_field_example"; // string | One of the query string parameters for sorting. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.

try {
    $result = $apiInstance->getSubPurchaseItems($purchase_id, $accept_language, $count, $offset, $sort_field, $sort_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasesApi->getSubPurchaseItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **purchase_id** | **string**| The unique id for the purchase |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. | [optional] [default to 0]
 **sort_field** | **string**| One of the query string parameters for sorting. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]

### Return type

[**\CareCloud\Model\InlineResponse20077**](../Model/InlineResponse20077.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubPurchasePoints**
> \CareCloud\Model\InlineResponse20019 getSubPurchasePoints($purchase_id, $accept_language, $count, $offset, $sort_field, $sort_direction)

Get point records tied to a purchase

Get information about all point records created in relation to a specific purchase

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = CareCloud\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CareCloud\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CareCloud\Api\PurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_id = "purchase_id_example"; // string | The unique id for the purchase
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1
$count = 100; // int | The number of records to return.
$offset = 0; // int | The number of records from a collection to skip.
$sort_field = "sort_field_example"; // string | One of the query string parameters for sorting. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.

try {
    $result = $apiInstance->getSubPurchasePoints($purchase_id, $accept_language, $count, $offset, $sort_field, $sort_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasesApi->getSubPurchasePoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **purchase_id** | **string**| The unique id for the purchase |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. | [optional] [default to 0]
 **sort_field** | **string**| One of the query string parameters for sorting. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]

### Return type

[**\CareCloud\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubPurchaseVouchers**
> \CareCloud\Model\InlineResponse20020 getSubPurchaseVouchers($purchase_id, $accept_language, $count, $offset, $sort_field, $sort_direction)

Get vouchers tied to a purchase

Get information about all vouchers created in relation to a specific purchase

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = CareCloud\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CareCloud\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CareCloud\Api\PurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$purchase_id = "purchase_id_example"; // string | The unique id for the purchase
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1
$count = 100; // int | The number of records to return.
$offset = 0; // int | The number of records from a collection to skip.
$sort_field = "sort_field_example"; // string | One of the query string parameters for sorting. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.

try {
    $result = $apiInstance->getSubPurchaseVouchers($purchase_id, $accept_language, $count, $offset, $sort_field, $sort_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasesApi->getSubPurchaseVouchers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **purchase_id** | **string**| The unique id for the purchase |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. | [optional] [default to 0]
 **sort_field** | **string**| One of the query string parameters for sorting. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]

### Return type

[**\CareCloud\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPurchaseAcceptPayment**
> \CareCloud\Model\InlineResponse20080 postPurchaseAcceptPayment($body, $accept_language)

Accept payment

The method processes bill closure requests. CareCloud returns information about discounts, applied vouchers, and points used for payment that change the bill's final price.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = CareCloud\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CareCloud\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CareCloud\Api\PurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CareCloud\Model\ActionsAcceptpaymentBody(); // \CareCloud\Model\ActionsAcceptpaymentBody | 
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $result = $apiInstance->postPurchaseAcceptPayment($body, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasesApi->postPurchaseAcceptPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CareCloud\Model\ActionsAcceptpaymentBody**](../Model/ActionsAcceptpaymentBody.md)|  |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CareCloud\Model\InlineResponse20080**](../Model/InlineResponse20080.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPurchaseAssignCustomer**
> postPurchaseAssignCustomer($body, $accept_language)

Assign customer

The method assigns customer to the existing purchase. If customer could collect points, he is going to gain coresponding amount of points.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = CareCloud\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CareCloud\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CareCloud\Api\PurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CareCloud\Model\ActionsAssigncustomerBody(); // \CareCloud\Model\ActionsAssigncustomerBody | 
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $apiInstance->postPurchaseAssignCustomer($body, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling PurchasesApi->postPurchaseAssignCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CareCloud\Model\ActionsAssigncustomerBody**](../Model/ActionsAssigncustomerBody.md)|  |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPurchaseRecommendedRewards**
> \CareCloud\Model\InlineResponse20079 postPurchaseRecommendedRewards($body, $accept_language)

Recommended best rewards

Method returns all available rewards for POS installation. The output contains list of all available and valid rewards. Each reward contains a parameter of maximum usage of rewards in a purchase. If amount equals zero, reward can not be applied. Rewards are allways connected to products through bill items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = CareCloud\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CareCloud\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CareCloud\Api\PurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CareCloud\Model\ActionsRecommendedbestrewardsBody(); // \CareCloud\Model\ActionsRecommendedbestrewardsBody | 
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $result = $apiInstance->postPurchaseRecommendedRewards($body, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasesApi->postPurchaseRecommendedRewards: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CareCloud\Model\ActionsRecommendedbestrewardsBody**](../Model/ActionsRecommendedbestrewardsBody.md)|  |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CareCloud\Model\InlineResponse20079**](../Model/InlineResponse20079.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPurchaseSend**
> \CareCloud\Model\InlineResponse20113 postPurchaseSend($body, $accept_language)

Send purchase

The method sends the final closed bill to CareCloud. It returns info about success/failure in the response

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = CareCloud\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');
    // Configure HTTP bearer authorization: bearerAuth
    $config = CareCloud\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new CareCloud\Api\PurchasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CareCloud\Model\ActionsSendpurchaseBody(); // \CareCloud\Model\ActionsSendpurchaseBody | 
$accept_language = "cs, en-gb;q=0.8"; // string | The unique id of the language code by ISO 639-1

try {
    $result = $apiInstance->postPurchaseSend($body, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchasesApi->postPurchaseSend: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CareCloud\Model\ActionsSendpurchaseBody**](../Model/ActionsSendpurchaseBody.md)|  |
 **accept_language** | **string**| The unique id of the language code by ISO 639-1 | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CareCloud\Model\InlineResponse20113**](../Model/InlineResponse20113.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

