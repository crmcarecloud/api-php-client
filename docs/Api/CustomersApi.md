# CrmCareCloud\Webservice\RestApi\Client\CustomersApi

All URIs are relative to *https://{project_url}/webservice/rest-api/{api_interface}/{version}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteSubCustomerInterest**](CustomersApi.md#deletesubcustomerinterest) | **DELETE** /customers/{customer_id}/interest-records/{interest_record_id} | Delete an interest record on an account
[**deleteSubCustomerPartner**](CustomersApi.md#deletesubcustomerpartner) | **DELETE** /customers/{customer_id}/partner-records/{partner_record_id} | Delete a partner record from an account
[**deleteSubCustomerProperty**](CustomersApi.md#deletesubcustomerproperty) | **DELETE** /customers/{customer_id}/property-records/{property_record_id} | Delete a property of a customer
[**deleteSubCustomerRelatedCustomer**](CustomersApi.md#deletesubcustomerrelatedcustomer) | **DELETE** /customers/{customer_id}/related-customers/{customer_relation_id} | Delete the customer  relation
[**getCustomer**](CustomersApi.md#getcustomer) | **GET** /customers/{customer_id} | Get information about a customer
[**getCustomers**](CustomersApi.md#getcustomers) | **GET** /customers | Get all customers
[**getSubCustomerAddress**](CustomersApi.md#getsubcustomeraddress) | **GET** /customers/{customer_id}/addresses/{additional_customer_address_id_path} | Get an additional customer address
[**getSubCustomerAddresses**](CustomersApi.md#getsubcustomeraddresses) | **GET** /customers/{customer_id}/addresses | Get all additional customer addresses
[**getSubCustomerCards**](CustomersApi.md#getsubcustomercards) | **GET** /customers/{customer_id}/cards | Get all customer cards
[**getSubCustomerEvents**](CustomersApi.md#getsubcustomerevents) | **GET** /customers/{customer_id}/events | Get information about all customer  events
[**getSubCustomerHintRecords**](CustomersApi.md#getsubcustomerhintrecords) | **GET** /customers/{customer_id}/recommendation-records | Get a collection of Hint records
[**getSubCustomerInterests**](CustomersApi.md#getsubcustomerinterests) | **GET** /customers/{customer_id}/interest-records | Get a collection of interest records
[**getSubCustomerPartners**](CustomersApi.md#getsubcustomerpartners) | **GET** /customers/{customer_id}/partner-records | Get information about all customer  partners
[**getSubCustomerPoints**](CustomersApi.md#getsubcustomerpoints) | **GET** /customers/{customer_id}/points | Get all customer point records
[**getSubCustomerProperties**](CustomersApi.md#getsubcustomerproperties) | **GET** /customers/{customer_id}/property-records | Get a collection of properties
[**getSubCustomerPurchases**](CustomersApi.md#getsubcustomerpurchases) | **GET** /customers/{customer_id}/purchases | Get all customer purchases
[**getSubCustomerRelatedCustomer**](CustomersApi.md#getsubcustomerrelatedcustomer) | **GET** /customers/{customer_id}/related-customers/{customer_relation_id} | Detail of a relation between customers
[**getSubCustomerRelatedCustomers**](CustomersApi.md#getsubcustomerrelatedcustomers) | **GET** /customers/{customer_id}/related-customers | Get information about all related customers
[**getSubCustomerRewards**](CustomersApi.md#getsubcustomerrewards) | **GET** /customers/{customer_id}/rewards | Get all customer rewards
[**getSubCustomerRewardsRecommendation**](CustomersApi.md#getsubcustomerrewardsrecommendation) | **GET** /customers/{customer_id}/reward-recommendations | Recommend the best rewards for the customer
[**getSubCustomerSegments**](CustomersApi.md#getsubcustomersegments) | **GET** /customers/{customer_id}/segment-records | Get a collection of segment records
[**getSubCustomerSource**](CustomersApi.md#getsubcustomersource) | **GET** /customers/{customer_id}/customer-source-records | Get customer source records
[**getSubCustomerStatus**](CustomersApi.md#getsubcustomerstatus) | **GET** /customers/{customer_id}/status-records | Get a collection of status records
[**getSubCustomerVouchers**](CustomersApi.md#getsubcustomervouchers) | **GET** /customers/{customer_id}/vouchers | Get all customer vouchers
[**postCustomer**](CustomersApi.md#postcustomer) | **POST** /customers | Create a new customer
[**postSubCustomerAddress**](CustomersApi.md#postsubcustomeraddress) | **POST** /customers/{customer_id}/addresses | Create an additional customer address
[**postSubCustomerInterest**](CustomersApi.md#postsubcustomerinterest) | **POST** /customers/{customer_id}/interest-records | Add an interest record to a customer
[**postSubCustomerPartnerRecord**](CustomersApi.md#postsubcustomerpartnerrecord) | **POST** /customers/{customer_id}/partner-records | Add a partner to the customer
[**postSubCustomerProperties**](CustomersApi.md#postsubcustomerproperties) | **POST** /customers/{customer_id}/property-records | Add a property to a customer
[**postSubCustomerPropertiesBatch**](CustomersApi.md#postsubcustomerpropertiesbatch) | **POST** /customers/{customer_id}/property-records/batch | Create a batch of property records for a customer
[**postSubCustomerRelatedCustomers**](CustomersApi.md#postsubcustomerrelatedcustomers) | **POST** /customers/{customer_id}/related-customers | Create the customer  relation
[**postSubCustomerSource**](CustomersApi.md#postsubcustomersource) | **POST** /customers/{customer_id}/customer-source-records | Add a customer source record to a customer
[**putCustomer**](CustomersApi.md#putcustomer) | **PUT** /customers/{customer_id} | Update a customer
[**putSubCustomerAddress**](CustomersApi.md#putsubcustomeraddress) | **PUT** /customers/{customer_id}/addresses/{additional_customer_address_id_path} | Update an additional customer address
[**putSubCustomerInterest**](CustomersApi.md#putsubcustomerinterest) | **PUT** /customers/{customer_id}/interest-records/{interest_record_id} | Update an interest record on an account
[**putSubCustomerProperty**](CustomersApi.md#putsubcustomerproperty) | **PUT** /customers/{customer_id}/property-records/{property_record_id} | Update a property of a customer

# **deleteSubCustomerInterest**
> deleteSubCustomerInterest($customer_id, $interest_record_id, $accept_language)

Delete an interest record on an account

Delete a specific customer interest record on a customer account.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique ID of the customer.
$interest_record_id = "interest_record_id_example"; // string | The unique ID of the interest record.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $apiInstance->deleteSubCustomerInterest($customer_id, $interest_record_id, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->deleteSubCustomerInterest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique ID of the customer. |
 **interest_record_id** | **string**| The unique ID of the interest record. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSubCustomerPartner**
> deleteSubCustomerPartner($customer_id, $partner_record_id, $accept_language)

Delete a partner record from an account

Delete a specific customer partner record from a customer account.<br/> ⚠️ Endpoint is available only in the Enterprise interface.<br/>

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique ID of the customer.
$partner_record_id = "partner_record_id_example"; // string | The unique ID of the partner record from account.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $apiInstance->deleteSubCustomerPartner($customer_id, $partner_record_id, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->deleteSubCustomerPartner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique ID of the customer. |
 **partner_record_id** | **string**| The unique ID of the partner record from account. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSubCustomerProperty**
> deleteSubCustomerProperty($customer_id, $property_record_id, $accept_language)

Delete a property of a customer

Delete a specific customer property record on a customer account.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique ID of the customer.
$property_record_id = "property_record_id_example"; // string | The unique ID of the property record.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $apiInstance->deleteSubCustomerProperty($customer_id, $property_record_id, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->deleteSubCustomerProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique ID of the customer. |
 **property_record_id** | **string**| The unique ID of the property record. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSubCustomerRelatedCustomer**
> deleteSubCustomerRelatedCustomer($customer_id, $customer_relation_id, $accept_language)

Delete the customer  relation

Delete a specific customer relation.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique ID of the customer.
$customer_relation_id = "customer_relation_id_example"; // string | The unique ID of relation between two customers in CareCloud.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $apiInstance->deleteSubCustomerRelatedCustomer($customer_id, $customer_relation_id, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->deleteSubCustomerRelatedCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique ID of the customer. |
 **customer_relation_id** | **string**| The unique ID of relation between two customers in CareCloud. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomer**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20043 getCustomer($customer_id, $accept_language, $customer_short_salutation)

Get information about a customer

Get information about a specific customer account.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique ID of the customer.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.
$customer_short_salutation = true; // bool | If true, the response will set a short salutation instead of a long one. Short salutations contain the first name of the customer only. If the parameter has a value false or not set, the full salutation is returned in response.

try {
    $result = $apiInstance->getCustomer($customer_id, $accept_language, $customer_short_salutation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique ID of the customer. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **customer_short_salutation** | **bool**| If true, the response will set a short salutation instead of a long one. Short salutations contain the first name of the customer only. If the parameter has a value false or not set, the full salutation is returned in response. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20043**](../Model/InlineResponse20043.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomers**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20042 getCustomers($accept_language, $count, $offset, $sort_field, $sort_direction, $email, $phone, $customer_source_id, $first_name, $last_name, $birthdate, $email_list, $customer_ids, $customer_short_salutation)

Get all customers

Get a list of all customers.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
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
$email = "email_example"; // string | Search by email.
$phone = "phone_example"; // string | Phone number with international prefix (420000000).
$customer_source_id = "customer_source_id_example"; // string | The unique ID of the customer source. It identifies the system where the customer belongs or the customer account was created.
$first_name = "first_name_example"; // string | Search by first name.
$last_name = "last_name_example"; // string | Search by last name.
$birthdate = "birthdate_example"; // string | Customer's date of birth. *Possible values are: YYYY-MM-DD / DD.MM.YYYY*
$email_list = array("email_list_example"); // string[] | List of the email addresses of the customers.
$customer_ids = array("customer_ids_example"); // string[] | List of the customer IDs.
$customer_short_salutation = true; // bool | If true, the response will set a short salutation instead of a long one. Short salutations contain the first name of the customer only. If the parameter has a value false or not set, the full salutation is returned in response.

try {
    $result = $apiInstance->getCustomers($accept_language, $count, $offset, $sort_field, $sort_direction, $email, $phone, $customer_source_id, $first_name, $last_name, $birthdate, $email_list, $customer_ids, $customer_short_salutation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getCustomers: ', $e->getMessage(), PHP_EOL;
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
 **email** | **string**| Search by email. | [optional]
 **phone** | **string**| Phone number with international prefix (420000000). | [optional]
 **customer_source_id** | **string**| The unique ID of the customer source. It identifies the system where the customer belongs or the customer account was created. | [optional]
 **first_name** | **string**| Search by first name. | [optional]
 **last_name** | **string**| Search by last name. | [optional]
 **birthdate** | **string**| Customer&#x27;s date of birth. *Possible values are: YYYY-MM-DD / DD.MM.YYYY* | [optional]
 **email_list** | [**string[]**](../Model/string.md)| List of the email addresses of the customers. | [optional]
 **customer_ids** | [**string[]**](../Model/string.md)| List of the customer IDs. | [optional]
 **customer_short_salutation** | **bool**| If true, the response will set a short salutation instead of a long one. Short salutations contain the first name of the customer only. If the parameter has a value false or not set, the full salutation is returned in response. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20042**](../Model/InlineResponse20042.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerAddress**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20055 getSubCustomerAddress($customer_id, $additional_customer_address_id_path, $accept_language)

Get an additional customer address

Get information about an additional customer address.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique ID of the customer.
$additional_customer_address_id_path = "additional_customer_address_id_path_example"; // string | Unique ID of the customer additional address.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->getSubCustomerAddress($customer_id, $additional_customer_address_id_path, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getSubCustomerAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique ID of the customer. |
 **additional_customer_address_id_path** | **string**| Unique ID of the customer additional address. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20055**](../Model/InlineResponse20055.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerAddresses**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20054 getSubCustomerAddresses($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $customer_address_type_id)

Get all additional customer addresses

Get information about all customer addresses.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique ID of the customer.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.
$count = 100; // int | The number of records to return.
$offset = 0; // int | The number of records from a collection to skip.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$customer_address_type_id = "customer_address_type_id_example"; // string | The unique ID of the customer address type.

try {
    $result = $apiInstance->getSubCustomerAddresses($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $customer_address_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getSubCustomerAddresses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique ID of the customer. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **customer_address_type_id** | **string**| The unique ID of the customer address type. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20054**](../Model/InlineResponse20054.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerCards**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20017 getSubCustomerCards($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $card_number, $card_type_id, $is_valid, $card_number_list)

Get all customer cards

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique ID of the customer.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.
$count = 100; // int | The number of records to return.
$offset = 0; // int | The number of records from a collection to skip.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$card_number = "card_number_example"; // string | Number of the customer card.
$card_type_id = "card_type_id_example"; // string | The unique ID of the card type.
$is_valid = true; // bool | *in validity range - true / before or after validity range - false / no value - all*
$card_number_list = array("card_number_list_example"); // string[] | List of the card numbers. If used, a list of cards will be returned if matching card numbers in CareCloud.

try {
    $result = $apiInstance->getSubCustomerCards($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $card_number, $card_type_id, $is_valid, $card_number_list);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getSubCustomerCards: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique ID of the customer. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **card_number** | **string**| Number of the customer card. | [optional]
 **card_type_id** | **string**| The unique ID of the card type. | [optional]
 **is_valid** | **bool**| *in validity range - true / before or after validity range - false / no value - all* | [optional]
 **card_number_list** | [**string[]**](../Model/string.md)| List of the card numbers. If used, a list of cards will be returned if matching card numbers in CareCloud. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerEvents**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20056 getSubCustomerEvents($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $event_type_id, $external_id, $event_type_ids, $include_property_records)

Get information about all customer  events

Get a list of customer  events in CRM CareCloud.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique ID of the customer.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.
$count = 100; // int | The number of records to return.
$offset = 0; // int | The number of records from a collection to skip.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$event_type_id = "event_type_id_example"; // string | The unique ID of the event type.
$external_id = "external_id_example"; // string | The ID from other system than CareCloud. It is usually used for the synchronization or identification of the record in between CareCloud and other system. The ID doesn't need to be necessary unique. Usage of other parameter could be required to return more specific results.
$event_type_ids = array("event_type_ids_example"); // string[] | List of the event type IDs from the resource [GET /event-types](https://carecloud.readme.io/reference/geteventtypes).
$include_property_records = true; // bool | If true, the property record structure will be included in the response. Possible values: true - property records structure will be included / false or not set - property records structure won't be included, and parameter will return null value

try {
    $result = $apiInstance->getSubCustomerEvents($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $event_type_id, $external_id, $event_type_ids, $include_property_records);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getSubCustomerEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique ID of the customer. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **event_type_id** | **string**| The unique ID of the event type. | [optional]
 **external_id** | **string**| The ID from other system than CareCloud. It is usually used for the synchronization or identification of the record in between CareCloud and other system. The ID doesn&#x27;t need to be necessary unique. Usage of other parameter could be required to return more specific results. | [optional]
 **event_type_ids** | [**string[]**](../Model/string.md)| List of the event type IDs from the resource [GET /event-types](https://carecloud.readme.io/reference/geteventtypes). | [optional]
 **include_property_records** | **bool**| If true, the property record structure will be included in the response. Possible values: true - property records structure will be included / false or not set - property records structure won&#x27;t be included, and parameter will return null value | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20056**](../Model/InlineResponse20056.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerHintRecords**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20050 getSubCustomerHintRecords($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $name)

Get a collection of Hint records

Get information about all Hint records on a customer account.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique ID of the customer.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.
$count = 100; // int | The number of records to return.
$offset = 0; // int | The number of records from a collection to skip.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$name = "name_example"; // string | Search record by name or a part of the name.

try {
    $result = $apiInstance->getSubCustomerHintRecords($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getSubCustomerHintRecords: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique ID of the customer. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **name** | **string**| Search record by name or a part of the name. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20050**](../Model/InlineResponse20050.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerInterests**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20053 getSubCustomerInterests($customer_id, $accept_language)

Get a collection of interest records

Get information about all interest records on a customer account.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique ID of the customer.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->getSubCustomerInterests($customer_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getSubCustomerInterests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique ID of the customer. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20053**](../Model/InlineResponse20053.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerPartners**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20059 getSubCustomerPartners($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction)

Get information about all customer  partners

Get a list of customer  partners in CareCloud.<br/> ⚠️ Endpoint is available only in the Enterprise interface.<br/>

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique ID of the customer.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.
$count = 100; // int | The number of records to return.
$offset = 0; // int | The number of records from a collection to skip.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.

try {
    $result = $apiInstance->getSubCustomerPartners($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getSubCustomerPartners: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique ID of the customer. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20059**](../Model/InlineResponse20059.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerPoints**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20044 getSubCustomerPoints($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $point_type_id)

Get all customer point records

Get information about all customer point records.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique ID of the customer.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.
$count = 100; // int | The number of records to return.
$offset = 0; // int | The number of records from a collection to skip.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$point_type_id = "point_type_id_example"; // string | The unique ID of a point type.

try {
    $result = $apiInstance->getSubCustomerPoints($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $point_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getSubCustomerPoints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique ID of the customer. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **point_type_id** | **string**| The unique ID of a point type. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20044**](../Model/InlineResponse20044.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerProperties**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20052 getSubCustomerProperties($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction)

Get a collection of properties

Get information about all property records on a customer account.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique ID of the customer.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.
$count = 100; // int | The number of records to return.
$offset = 0; // int | The number of records from a collection to skip.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.

try {
    $result = $apiInstance->getSubCustomerProperties($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getSubCustomerProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique ID of the customer. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20052**](../Model/InlineResponse20052.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerPurchases**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20036 getSubCustomerPurchases($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $store_id, $type_id, $payment_time_from, $payment_time_to, $purchase_items_extension, $external_purchase_id)

Get all customer purchases

Get information about all customer account purchases.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique ID of the customer.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.
$count = 100; // int | The number of records to return.
$offset = 0; // int | The number of records from a collection to skip.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$store_id = "store_id_example"; // string | The unique ID of the store in CareCloud.
$type_id = "type_id_example"; // string | Purchase type
$payment_time_from = "payment_time_from_example"; // string | Date and time from of the purchase payment. *(YYYY-MM-DD HH:MM:SS)*
$payment_time_to = "payment_time_to_example"; // string | Date and time to of the purchase payment. *(YYYY-MM-DD HH:MM:SS)*
$purchase_items_extension = false; // bool | If true, resource returns extended response with purchase items. If false, the resource won't be extended. If the parameter is not set, the default value is false.
$external_purchase_id = "external_purchase_id_example"; // string | ID of the purchase from external (e-shop, POS) system. This ID should have unique value.

try {
    $result = $apiInstance->getSubCustomerPurchases($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $store_id, $type_id, $payment_time_from, $payment_time_to, $purchase_items_extension, $external_purchase_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getSubCustomerPurchases: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique ID of the customer. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **store_id** | **string**| The unique ID of the store in CareCloud. | [optional]
 **type_id** | **string**| Purchase type | [optional]
 **payment_time_from** | **string**| Date and time from of the purchase payment. *(YYYY-MM-DD HH:MM:SS)* | [optional]
 **payment_time_to** | **string**| Date and time to of the purchase payment. *(YYYY-MM-DD HH:MM:SS)* | [optional]
 **purchase_items_extension** | **bool**| If true, resource returns extended response with purchase items. If false, the resource won&#x27;t be extended. If the parameter is not set, the default value is false. | [optional] [default to false]
 **external_purchase_id** | **string**| ID of the purchase from external (e-shop, POS) system. This ID should have unique value. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20036**](../Model/InlineResponse20036.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerRelatedCustomer**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20058 getSubCustomerRelatedCustomer($customer_id, $customer_relation_id, $accept_language)

Detail of a relation between customers

Get information about a specific customer relation.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique ID of the customer.
$customer_relation_id = "customer_relation_id_example"; // string | The unique ID of relation between two customers in CareCloud.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->getSubCustomerRelatedCustomer($customer_id, $customer_relation_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getSubCustomerRelatedCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique ID of the customer. |
 **customer_relation_id** | **string**| The unique ID of relation between two customers in CareCloud. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20058**](../Model/InlineResponse20058.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerRelatedCustomers**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20057 getSubCustomerRelatedCustomers($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $related_customer_id, $customer_relation_type_id, $all_customer_relations)

Get information about all related customers

Get a list of customers' relations in CRM CareCloud.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique ID of the customer.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.
$count = 100; // int | The number of records to return.
$offset = 0; // int | The number of records from a collection to skip.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$related_customer_id = "related_customer_id_example"; // string | The unique ID of the related customer.
$customer_relation_type_id = "customer_relation_type_id_example"; // string | The unique ID of the customer relation type in CareCloud.
$all_customer_relations = false; // bool | The API call returns all relations (currently valid and relations from the past) in case of true value. If the parameter is not set or has value false, only currently valid relations are returned.

try {
    $result = $apiInstance->getSubCustomerRelatedCustomers($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $related_customer_id, $customer_relation_type_id, $all_customer_relations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getSubCustomerRelatedCustomers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique ID of the customer. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **related_customer_id** | **string**| The unique ID of the related customer. | [optional]
 **customer_relation_type_id** | **string**| The unique ID of the customer relation type in CareCloud. | [optional]
 **all_customer_relations** | **bool**| The API call returns all relations (currently valid and relations from the past) in case of true value. If the parameter is not set or has value false, only currently valid relations are returned. | [optional] [default to false]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20057**](../Model/InlineResponse20057.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerRewards**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20046 getSubCustomerRewards($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $name, $store_id, $is_valid, $valid_from, $valid_to, $code, $is_automated, $reward_group, $customer_type_id, $without_stores, $tag_ids)

Get all customer rewards

Get information about all customer rewards.  <p class=\"warning\">⚠️ There is the logical AND between query parameters `is_valid`, `valid_from` and `valid to`.</p>

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique ID of the customer.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.
$count = 100; // int | The number of records to return.
$offset = 0; // int | The number of records from a collection to skip.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$name = "name_example"; // string | Search record by name or a part of the name.
$store_id = "store_id_example"; // string | The unique ID of the store where customer can apply the reward.
$is_valid = true; // bool | *in validity range - true / before or after validity range - false / no value - all*
$valid_from = "valid_from_example"; // string | Date from when is record already valid. *(YYYY-MM-DD)*
$valid_to = "valid_to_example"; // string | Date to when is record still valid. *(YYYY-MM-DD)*
$code = "code_example"; // string | Code of the reward.
$is_automated = true; // bool | Filter of the automated rewards. *Possible values: true - returns all automated rewards / false - returns all non automated rewards / no value - all rewards(filter is not applied)*
$reward_group = 56; // int | The unique ID of the reward group. *Possible values: 0 - cash desk reward (party time reward) / 1 - catalog reward / 2 - campaign reward / 4 - simple reward*
$customer_type_id = array("customer_type_id_example"); // string[] | Select by list of customer types from customer-types resource. Logic OR is used between values.
$without_stores = true; // bool | If true, the data will not contain information about business units (stores). If false, or not set resource returns default structure.
$tag_ids = array("tag_ids_example"); // string[] | Parameter filters values by a list of tag IDs. Logic OR is used between values.

try {
    $result = $apiInstance->getSubCustomerRewards($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $name, $store_id, $is_valid, $valid_from, $valid_to, $code, $is_automated, $reward_group, $customer_type_id, $without_stores, $tag_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getSubCustomerRewards: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique ID of the customer. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **name** | **string**| Search record by name or a part of the name. | [optional]
 **store_id** | **string**| The unique ID of the store where customer can apply the reward. | [optional]
 **is_valid** | **bool**| *in validity range - true / before or after validity range - false / no value - all* | [optional]
 **valid_from** | **string**| Date from when is record already valid. *(YYYY-MM-DD)* | [optional]
 **valid_to** | **string**| Date to when is record still valid. *(YYYY-MM-DD)* | [optional]
 **code** | **string**| Code of the reward. | [optional]
 **is_automated** | **bool**| Filter of the automated rewards. *Possible values: true - returns all automated rewards / false - returns all non automated rewards / no value - all rewards(filter is not applied)* | [optional]
 **reward_group** | **int**| The unique ID of the reward group. *Possible values: 0 - cash desk reward (party time reward) / 1 - catalog reward / 2 - campaign reward / 4 - simple reward* | [optional]
 **customer_type_id** | [**string[]**](../Model/string.md)| Select by list of customer types from customer-types resource. Logic OR is used between values. | [optional]
 **without_stores** | **bool**| If true, the data will not contain information about business units (stores). If false, or not set resource returns default structure. | [optional]
 **tag_ids** | [**string[]**](../Model/string.md)| Parameter filters values by a list of tag IDs. Logic OR is used between values. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20046**](../Model/InlineResponse20046.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerRewardsRecommendation**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20047 getSubCustomerRewardsRecommendation($customer_id, $accept_language, $count, $offset, $name, $store_id, $is_valid, $valid_from, $valid_to, $code, $is_automated, $reward_group, $customer_type_id, $without_stores, $tag_ids, $partner_id, $reward_type_id)

Recommend the best rewards for the customer

The endpoint recommends and orders the best rewards for the customer depending on the query parameters setup. This endpoint uses a machine learning-based CareCloud Recommendation Engine. The CareCloud Recommendation Engine requires additional setup and training of AI models. If the recommendation models are not trained for your project, The endpoint returns a list of all rewards filtered by query parameters.     <p class=\"warning\">⚠️ There is the logical AND between query parameters `is_valid`, `valid_from` and `valid to`.</p>

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique ID of the customer.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.
$count = 100; // int | The number of records to return.
$offset = 0; // int | The number of records from a collection to skip.
$name = "name_example"; // string | Search record by name or a part of the name.
$store_id = "store_id_example"; // string | The unique ID of the store where customer can apply the reward.
$is_valid = true; // bool | *in validity range - true / before or after validity range - false / no value - all*
$valid_from = "valid_from_example"; // string | Date from when is record already valid. *(YYYY-MM-DD)*
$valid_to = "valid_to_example"; // string | Date to when is record still valid. *(YYYY-MM-DD)*
$code = "code_example"; // string | Code of the reward.
$is_automated = true; // bool | Filter of the automated rewards. *Possible values: true - returns all automated rewards / false - returns all non automated rewards / no value - all rewards(filter is not applied)*
$reward_group = 56; // int | The unique ID of the reward group. *Possible values: 0 - cash desk reward (party time reward) / 1 - catalog reward / 2 - campaign reward / 4 - simple reward*
$customer_type_id = array("customer_type_id_example"); // string[] | Select by list of customer types from customer-types resource. Logic OR is used between values.
$without_stores = true; // bool | If true, the data will not contain information about business units (stores). If false, or not set resource returns default structure.
$tag_ids = array("tag_ids_example"); // string[] | Parameter filters values by a list of tag IDs. Logic OR is used between values.
$partner_id = "partner_id_example"; // string | Unique ID of the partner from the resource [GET /partners](/#tag/Partners).
$reward_type_id = "reward_type_id_example"; // string | The type of reward describes the reward behavior. For example, a Percentage discount, Buy one + get one discounted product, and others.

try {
    $result = $apiInstance->getSubCustomerRewardsRecommendation($customer_id, $accept_language, $count, $offset, $name, $store_id, $is_valid, $valid_from, $valid_to, $code, $is_automated, $reward_group, $customer_type_id, $without_stores, $tag_ids, $partner_id, $reward_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getSubCustomerRewardsRecommendation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique ID of the customer. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. | [optional] [default to 0]
 **name** | **string**| Search record by name or a part of the name. | [optional]
 **store_id** | **string**| The unique ID of the store where customer can apply the reward. | [optional]
 **is_valid** | **bool**| *in validity range - true / before or after validity range - false / no value - all* | [optional]
 **valid_from** | **string**| Date from when is record already valid. *(YYYY-MM-DD)* | [optional]
 **valid_to** | **string**| Date to when is record still valid. *(YYYY-MM-DD)* | [optional]
 **code** | **string**| Code of the reward. | [optional]
 **is_automated** | **bool**| Filter of the automated rewards. *Possible values: true - returns all automated rewards / false - returns all non automated rewards / no value - all rewards(filter is not applied)* | [optional]
 **reward_group** | **int**| The unique ID of the reward group. *Possible values: 0 - cash desk reward (party time reward) / 1 - catalog reward / 2 - campaign reward / 4 - simple reward* | [optional]
 **customer_type_id** | [**string[]**](../Model/string.md)| Select by list of customer types from customer-types resource. Logic OR is used between values. | [optional]
 **without_stores** | **bool**| If true, the data will not contain information about business units (stores). If false, or not set resource returns default structure. | [optional]
 **tag_ids** | [**string[]**](../Model/string.md)| Parameter filters values by a list of tag IDs. Logic OR is used between values. | [optional]
 **partner_id** | **string**| Unique ID of the partner from the resource [GET /partners](/#tag/Partners). | [optional]
 **reward_type_id** | **string**| The type of reward describes the reward behavior. For example, a Percentage discount, Buy one + get one discounted product, and others. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20047**](../Model/InlineResponse20047.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerSegments**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20048 getSubCustomerSegments($customer_id, $accept_language, $segment_group_ids)

Get a collection of segment records

Get information about all segment records on a customer account.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique ID of the customer.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.
$segment_group_ids = array("segment_group_ids_example"); // string[] | List of the segment group IDs from the resource [GET /segment-groups](#tag/Segments/operation/getSegmentGroups).

try {
    $result = $apiInstance->getSubCustomerSegments($customer_id, $accept_language, $segment_group_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getSubCustomerSegments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique ID of the customer. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **segment_group_ids** | [**string[]**](../Model/string.md)| List of the segment group IDs from the resource [GET /segment-groups](#tag/Segments/operation/getSegmentGroups). | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20048**](../Model/InlineResponse20048.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerSource**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20051 getSubCustomerSource($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $external_id, $customer_source_id, $external_ids)

Get customer source records

Get information about all customer account source records.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique ID of the customer.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.
$count = 100; // int | The number of records to return.
$offset = 0; // int | The number of records from a collection to skip.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$external_id = "external_id_example"; // string | The parameter contains a unique ID from an external system (POS, webshop,  mobile app, ERP, and others ). ID should be unique within a customer source for better identification (For example, the process of customer synchronization between systems).
$customer_source_id = "customer_source_id_example"; // string | The unique ID of the customer source. It identifies the system where the customer belongs or the customer account was created.
$external_ids = array("external_ids_example"); // string[] | The list of IDs from other system than CareCloud. It is usually used for the synchronization or identification of the records in between CareCloud and other system. The IDs don't need to be necessary unique. Usage of other parameter could be required to return more specific results.

try {
    $result = $apiInstance->getSubCustomerSource($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $external_id, $customer_source_id, $external_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getSubCustomerSource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique ID of the customer. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **external_id** | **string**| The parameter contains a unique ID from an external system (POS, webshop,  mobile app, ERP, and others ). ID should be unique within a customer source for better identification (For example, the process of customer synchronization between systems). | [optional]
 **customer_source_id** | **string**| The unique ID of the customer source. It identifies the system where the customer belongs or the customer account was created. | [optional]
 **external_ids** | [**string[]**](../Model/string.md)| The list of IDs from other system than CareCloud. It is usually used for the synchronization or identification of the records in between CareCloud and other system. The IDs don&#x27;t need to be necessary unique. Usage of other parameter could be required to return more specific results. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20051**](../Model/InlineResponse20051.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerStatus**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20049 getSubCustomerStatus($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $valid_now)

Get a collection of status records

Get information about all status records on a customer account.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique ID of the customer.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.
$count = 100; // int | The number of records to return.
$offset = 0; // int | The number of records from a collection to skip.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$valid_now = true; // bool | Status validity. Just one status can be valid in the time. *Possible values are: True for valid status / False for status not valid*

try {
    $result = $apiInstance->getSubCustomerStatus($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $valid_now);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getSubCustomerStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique ID of the customer. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **valid_now** | **bool**| Status validity. Just one status can be valid in the time. *Possible values are: True for valid status / False for status not valid* | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20049**](../Model/InlineResponse20049.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerVouchers**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20045 getSubCustomerVouchers($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $code, $store_id, $is_valid, $is_applied, $without_stores, $reward_id)

Get all customer vouchers

Get information about all customer vouchers.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The unique ID of the customer.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.
$count = 100; // int | The number of records to return.
$offset = 0; // int | The number of records from a collection to skip.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$code = "code_example"; // string | Unique code of the voucher.
$store_id = "store_id_example"; // string | The unique ID of the store where customer can apply the reward.
$is_valid = true; // bool | *in validity range - true / before or after validity range - false / no value - all*
$is_applied = true; // bool | Filter by voucher application and reservation. *Possible values: true - all applied or reserved vouchers / false - all vouchers that have not been applied yet or that are not reserved actually / no value - all vouchers*
$without_stores = true; // bool | If true, the data will not contain information about business units (stores). If false, or not set resource returns default structure.
$reward_id = "reward_id_example"; // string | The unique ID of the reward in CareCloud. In case you want to filter multiple options use array syntax : `reward_id[]=8bc8ca16f9c5039951021700a2&reward_id[]=82c06812c0756528660784fef`

try {
    $result = $apiInstance->getSubCustomerVouchers($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $code, $store_id, $is_valid, $is_applied, $without_stores, $reward_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getSubCustomerVouchers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The unique ID of the customer. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **code** | **string**| Unique code of the voucher. | [optional]
 **store_id** | **string**| The unique ID of the store where customer can apply the reward. | [optional]
 **is_valid** | **bool**| *in validity range - true / before or after validity range - false / no value - all* | [optional]
 **is_applied** | **bool**| Filter by voucher application and reservation. *Possible values: true - all applied or reserved vouchers / false - all vouchers that have not been applied yet or that are not reserved actually / no value - all vouchers* | [optional]
 **without_stores** | **bool**| If true, the data will not contain information about business units (stores). If false, or not set resource returns default structure. | [optional]
 **reward_id** | **string**| The unique ID of the reward in CareCloud. In case you want to filter multiple options use array syntax : &#x60;reward_id[]&#x3D;8bc8ca16f9c5039951021700a2&amp;reward_id[]&#x3D;82c06812c0756528660784fef&#x60; | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20045**](../Model/InlineResponse20045.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCustomer**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2018 postCustomer($body, $accept_language)

Create a new customer

Add a new customer account in CRM CareCloud.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\CustomersBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\CustomersBody | 
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->postCustomer($body, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->postCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\CustomersBody**](../Model/CustomersBody.md)|  |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2018**](../Model/InlineResponse2018.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSubCustomerAddress**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20112 postSubCustomerAddress($body, $customer_id, $accept_language)

Create an additional customer address

Add a new additional customer address.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\CustomerIdAddressesBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\CustomerIdAddressesBody | 
$customer_id = "customer_id_example"; // string | The unique ID of the customer.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->postSubCustomerAddress($body, $customer_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->postSubCustomerAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\CustomerIdAddressesBody**](../Model/CustomerIdAddressesBody.md)|  |
 **customer_id** | **string**| The unique ID of the customer. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20112**](../Model/InlineResponse20112.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSubCustomerInterest**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20111 postSubCustomerInterest($body, $customer_id, $accept_language)

Add an interest record to a customer

Add a new specific customer interest record to a customer account.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\CustomerIdInterestrecordsBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\CustomerIdInterestrecordsBody | 
$customer_id = "customer_id_example"; // string | The unique ID of the customer.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->postSubCustomerInterest($body, $customer_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->postSubCustomerInterest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\CustomerIdInterestrecordsBody**](../Model/CustomerIdInterestrecordsBody.md)|  |
 **customer_id** | **string**| The unique ID of the customer. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20111**](../Model/InlineResponse20111.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSubCustomerPartnerRecord**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20114 postSubCustomerPartnerRecord($body, $customer_id, $accept_language)

Add a partner to the customer

Add a new partner to the customer.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\CustomerIdPartnerrecordsBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\CustomerIdPartnerrecordsBody | 
$customer_id = "customer_id_example"; // string | The unique ID of the customer.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->postSubCustomerPartnerRecord($body, $customer_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->postSubCustomerPartnerRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\CustomerIdPartnerrecordsBody**](../Model/CustomerIdPartnerrecordsBody.md)|  |
 **customer_id** | **string**| The unique ID of the customer. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20114**](../Model/InlineResponse20114.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSubCustomerProperties**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20110 postSubCustomerProperties($body, $customer_id, $accept_language)

Add a property to a customer

Add a new specific customer property record to a customer account.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\CustomerIdPropertyrecordsBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\CustomerIdPropertyrecordsBody | 
$customer_id = "customer_id_example"; // string | The unique ID of the customer.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->postSubCustomerProperties($body, $customer_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->postSubCustomerProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\CustomerIdPropertyrecordsBody**](../Model/CustomerIdPropertyrecordsBody.md)|  |
 **customer_id** | **string**| The unique ID of the customer. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20110**](../Model/InlineResponse20110.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSubCustomerPropertiesBatch**
> postSubCustomerPropertiesBatch($body, $customer_id, $accept_language)

Create a batch of property records for a customer

Add a batch of customer property records to a customer account. In case of an existing property record, CareCloud API will update this record. In case of error, CareCloud will cancel the whole transaction, and API will return error information.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\PropertyrecordsBatchBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\PropertyrecordsBatchBody | 
$customer_id = "customer_id_example"; // string | The unique ID of the customer.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $apiInstance->postSubCustomerPropertiesBatch($body, $customer_id, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->postSubCustomerPropertiesBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\PropertyrecordsBatchBody**](../Model/PropertyrecordsBatchBody.md)|  |
 **customer_id** | **string**| The unique ID of the customer. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSubCustomerRelatedCustomers**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20113 postSubCustomerRelatedCustomers($body, $customer_id, $accept_language)

Create the customer  relation

Add a new customer  relation to the customer  account.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\CustomerIdRelatedcustomersBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\CustomerIdRelatedcustomersBody | 
$customer_id = "customer_id_example"; // string | The unique ID of the customer.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->postSubCustomerRelatedCustomers($body, $customer_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->postSubCustomerRelatedCustomers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\CustomerIdRelatedcustomersBody**](../Model/CustomerIdRelatedcustomersBody.md)|  |
 **customer_id** | **string**| The unique ID of the customer. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20113**](../Model/InlineResponse20113.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSubCustomerSource**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2019 postSubCustomerSource($body, $customer_id, $accept_language)

Add a customer source record to a customer

Add one of the [customer sources](/#tag/Customer-sources) to a customer account.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\CustomerIdCustomersourcerecordsBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\CustomerIdCustomersourcerecordsBody | 
$customer_id = "customer_id_example"; // string | The unique ID of the customer.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->postSubCustomerSource($body, $customer_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->postSubCustomerSource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\CustomerIdCustomersourcerecordsBody**](../Model/CustomerIdCustomersourcerecordsBody.md)|  |
 **customer_id** | **string**| The unique ID of the customer. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse2019**](../Model/InlineResponse2019.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putCustomer**
> putCustomer($body, $customer_id, $accept_language)

Update a customer

Update the information on a specific customer account.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\CustomersCustomerIdBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\CustomersCustomerIdBody | 
$customer_id = "customer_id_example"; // string | The unique ID of the customer.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $apiInstance->putCustomer($body, $customer_id, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->putCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\CustomersCustomerIdBody**](../Model/CustomersCustomerIdBody.md)|  |
 **customer_id** | **string**| The unique ID of the customer. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putSubCustomerAddress**
> putSubCustomerAddress($body, $customer_id, $additional_customer_address_id_path, $accept_language)

Update an additional customer address

Update a specific additional customer address.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\AddressesAdditionalCustomerAddressIdPathBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\AddressesAdditionalCustomerAddressIdPathBody | 
$customer_id = "customer_id_example"; // string | The unique ID of the customer.
$additional_customer_address_id_path = "additional_customer_address_id_path_example"; // string | Unique ID of the customer additional address.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $apiInstance->putSubCustomerAddress($body, $customer_id, $additional_customer_address_id_path, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->putSubCustomerAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\AddressesAdditionalCustomerAddressIdPathBody**](../Model/AddressesAdditionalCustomerAddressIdPathBody.md)|  |
 **customer_id** | **string**| The unique ID of the customer. |
 **additional_customer_address_id_path** | **string**| Unique ID of the customer additional address. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putSubCustomerInterest**
> putSubCustomerInterest($body, $customer_id, $interest_record_id, $accept_language)

Update an interest record on an account

Update a specific customer interest record on a customer account.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\InterestrecordsInterestRecordIdBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\InterestrecordsInterestRecordIdBody | 
$customer_id = "customer_id_example"; // string | The unique ID of the customer.
$interest_record_id = "interest_record_id_example"; // string | The unique ID of the interest record.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $apiInstance->putSubCustomerInterest($body, $customer_id, $interest_record_id, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->putSubCustomerInterest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\InterestrecordsInterestRecordIdBody**](../Model/InterestrecordsInterestRecordIdBody.md)|  |
 **customer_id** | **string**| The unique ID of the customer. |
 **interest_record_id** | **string**| The unique ID of the interest record. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putSubCustomerProperty**
> putSubCustomerProperty($body, $customer_id, $property_record_id, $accept_language)

Update a property of a customer

Update a specific customer property record on a customer account.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\PropertyrecordsPropertyRecordIdBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\PropertyrecordsPropertyRecordIdBody | 
$customer_id = "customer_id_example"; // string | The unique ID of the customer.
$property_record_id = "property_record_id_example"; // string | The unique ID of the property record.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $apiInstance->putSubCustomerProperty($body, $customer_id, $property_record_id, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->putSubCustomerProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\PropertyrecordsPropertyRecordIdBody**](../Model/PropertyrecordsPropertyRecordIdBody.md)|  |
 **customer_id** | **string**| The unique ID of the customer. |
 **property_record_id** | **string**| The unique ID of the property record. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

