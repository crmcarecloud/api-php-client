# CrmCareCloud\Webservice\RestApi\Client\CustomersApi

All URIs are relative to *https://{project_url}/webservice/rest-api/{api_interface}/{version}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteSubCustomerInterest**](CustomersApi.md#deletesubcustomerinterest) | **DELETE** /customers/{customer_id}/interest-records/{interest_record_id} | Delete an interest record on an account
[**deleteSubCustomerPartner**](CustomersApi.md#deletesubcustomerpartner) | **DELETE** /customers/{customer_id}/partner-records/{partner_record_id} | Delete a partner record from an account
[**deleteSubCustomerProperty**](CustomersApi.md#deletesubcustomerproperty) | **DELETE** /customers/{customer_id}/property-records/{property_record_id} | Delete a property of a customer
[**deleteSubCustomerRelatedCustomer**](CustomersApi.md#deletesubcustomerrelatedcustomer) | **DELETE** /customers/{customer_id}/related-customers/{customer_relation_id} | Delete the customer relation
[**getCustomer**](CustomersApi.md#getcustomer) | **GET** /customers/{customer_id} | Get information about a customer
[**getCustomers**](CustomersApi.md#getcustomers) | **GET** /customers | Get all customers
[**getSubCustomerAddress**](CustomersApi.md#getsubcustomeraddress) | **GET** /customers/{customer_id}/addresses/{additional_customer_address_id_path} | Get an additional customer address
[**getSubCustomerAddresses**](CustomersApi.md#getsubcustomeraddresses) | **GET** /customers/{customer_id}/addresses | Get all additional customer addresses
[**getSubCustomerCards**](CustomersApi.md#getsubcustomercards) | **GET** /customers/{customer_id}/cards | Get all customer cards
[**getSubCustomerEvents**](CustomersApi.md#getsubcustomerevents) | **GET** /customers/{customer_id}/events | Get information about all customer events
[**getSubCustomerHintRecords**](CustomersApi.md#getsubcustomerhintrecords) | **GET** /customers/{customer_id}/recommendation-records | Get a collection of Hint records
[**getSubCustomerInterests**](CustomersApi.md#getsubcustomerinterests) | **GET** /customers/{customer_id}/interest-records | Get a collection of interest records
[**getSubCustomerPartners**](CustomersApi.md#getsubcustomerpartners) | **GET** /customers/{customer_id}/partner-records | Get information about all customer partners
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
[**postSubCustomerRelatedCustomers**](CustomersApi.md#postsubcustomerrelatedcustomers) | **POST** /customers/{customer_id}/related-customers | Create the customer relation
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

Delete a specific customer partner record from a customer account.  Removes the association between a customer and the specified partner. Once deleted, the partner's loyalty programs and communications will no longer apply to the customer. To add or replace partner assignments, use [POST /customers/actions/set-partners](https://carecloud.readme.io/reference/postsubcustomersetpartners) (enterprise interface only).  ⚠️ Endpoint is available only in the Enterprise interface.

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

Delete the customer relation

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
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetCustomer200Response getCustomer($customer_id, $accept_language, $customer_short_salutation)

Get information about a customer

Get information about a specific customer account.  Returns the full customer record including personal and contact details, address, consent status, source and partner assignments. The customer is the central entity of the CareCloud CRM and aggregates data from all connected applications and platforms.  Use the `customer_short_salutation` parameter to include a formatted salutation field in the response. Sub-resources such as purchases, cards, credits, and vouchers are available via dedicated sub-resource endpoints under `/customers/{customer_id}/`.  Related: [PUT /customers/{customer_id}](https://carecloud.readme.io/reference/putcustomer), [GET /customers](https://carecloud.readme.io/reference/getcustomers)

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

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetCustomer200Response**](../Model/GetCustomer200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomers**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetCustomers200Response getCustomers($accept_language, $count, $offset, $sort_field, $sort_direction, $email, $phone, $customer_source_id, $first_name, $last_name, $birthdate, $email_list, $customer_ids, $customer_short_salutation)

Get all customers

Get a list of all customers.  Customers are the central entity of the CareCloud CRM. Each account stores personal and contact details, loyalty program participation (cards, points, credits, vouchers), communication preferences and consent status, segments, custom properties, related customers, addresses, interests, and partner and source assignments.  Supports filtering by email, phone, first name, last name, date of birth, customer source, and a list of customer IDs. Use `email_list` to retrieve multiple customers by email in a single request.  Related: [POST /customers](https://carecloud.readme.io/reference/postcustomer), [GET /customers/{customer_id}](https://carecloud.readme.io/reference/getcustomer), [GET /customers/actions/search-customers](https://carecloud.readme.io/reference/getcustomersearch) (enterprise interface only)

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
$count = 100; // int | The number of records to return in API response.  ⚠️ We recommended adjust the batch size based on processing time. Depending on the response time of the request. Default value of 100 records is used if `count` parameter is not set.
$offset = 0; // int | The number of records from a collection to skip. Default value of 0 is used when parameter `offset` is not set.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$email = "email_example"; // string | Search by email.
$phone = "phone_example"; // string | Phone number of the customer with international prefix (420000000000).
$customer_source_id = "customer_source_id_example"; // string | The unique ID of the customer source. It identifies the system where the customer belongs or the customer account was created.
$first_name = "first_name_example"; // string | Search by first name.
$last_name = "last_name_example"; // string | Search by last name.
$birthdate = "birthdate_example"; // string | Customer's date of birth. Accepts the format `YYYY-MM-DD` or `DD.MM.YYYY`.
$email_list = array("email_list_example"); // string[] | List of the email addresses of the customers. In case you want to filter multiple options use array syntax : `email_list[]=happy_customer@crmcarecloud.com&email_list[]=another_customer@crmcarecloud.com` Logic OR is used between values.
$customer_ids = array("customer_ids_example"); // string[] | List of the customer IDs. In case you want to filter multiple options use array syntax : `customer_ids[]=8ea2591121e636086a4a9c0992&customer_ids[]=8bed991c68a470e7aaeffbf048`     Logic OR is used between values.
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
 **count** | **int**| The number of records to return in API response.  ⚠️ We recommended adjust the batch size based on processing time. Depending on the response time of the request. Default value of 100 records is used if &#x60;count&#x60; parameter is not set. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. Default value of 0 is used when parameter &#x60;offset&#x60; is not set. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **email** | **string**| Search by email. | [optional]
 **phone** | **string**| Phone number of the customer with international prefix (420000000000). | [optional]
 **customer_source_id** | **string**| The unique ID of the customer source. It identifies the system where the customer belongs or the customer account was created. | [optional]
 **first_name** | **string**| Search by first name. | [optional]
 **last_name** | **string**| Search by last name. | [optional]
 **birthdate** | **string**| Customer&#x27;s date of birth. Accepts the format &#x60;YYYY-MM-DD&#x60; or &#x60;DD.MM.YYYY&#x60;. | [optional]
 **email_list** | [**string[]**](../Model/string.md)| List of the email addresses of the customers. In case you want to filter multiple options use array syntax : &#x60;email_list[]&#x3D;happy_customer@crmcarecloud.com&amp;email_list[]&#x3D;another_customer@crmcarecloud.com&#x60; Logic OR is used between values. | [optional]
 **customer_ids** | [**string[]**](../Model/string.md)| List of the customer IDs. In case you want to filter multiple options use array syntax : &#x60;customer_ids[]&#x3D;8ea2591121e636086a4a9c0992&amp;customer_ids[]&#x3D;8bed991c68a470e7aaeffbf048&#x60;     Logic OR is used between values. | [optional]
 **customer_short_salutation** | **bool**| If true, the response will set a short salutation instead of a long one. Short salutations contain the first name of the customer only. If the parameter has a value false or not set, the full salutation is returned in response. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetCustomers200Response**](../Model/GetCustomers200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerAddress**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetSubCustomerAddress200Response getSubCustomerAddress($customer_id, $additional_customer_address_id_path, $accept_language)

Get an additional customer address

Get information about an additional customer address.  Returns the full detail of a single additional address record on the customer account, including its address type, street, city, ZIP code, and country. To retrieve all addresses for a customer, use [GET /customers/{customer_id}/addresses](https://carecloud.readme.io/reference/getsubcustomeraddresses).

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

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetSubCustomerAddress200Response**](../Model/GetSubCustomerAddress200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerAddresses**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetSubCustomerAddresses200Response getSubCustomerAddresses($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $customer_address_type_id)

Get all additional customer addresses

Get information about all customer addresses.  Additional addresses are stored on a customer account separately from the primary address recorded in the customer's personal information. Each additional address has an address type (for example, delivery, billing, or work) and full address detail.  Related: [GET /customer-address-types](https://carecloud.readme.io/reference/getcustomeraddresstypes)

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
$count = 100; // int | The number of records to return in API response.  ⚠️ We recommended adjust the batch size based on processing time. Depending on the response time of the request. Default value of 100 records is used if `count` parameter is not set.
$offset = 0; // int | The number of records from a collection to skip. Default value of 0 is used when parameter `offset` is not set.
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
 **count** | **int**| The number of records to return in API response.  ⚠️ We recommended adjust the batch size based on processing time. Depending on the response time of the request. Default value of 100 records is used if &#x60;count&#x60; parameter is not set. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. Default value of 0 is used when parameter &#x60;offset&#x60; is not set. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **customer_address_type_id** | **string**| The unique ID of the customer address type. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetSubCustomerAddresses200Response**](../Model/GetSubCustomerAddresses200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerCards**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetSubCustomerCards200Response getSubCustomerCards($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $card_number, $card_type_id, $is_valid, $card_number_list)

Get all customer cards

Get information about all customer cards.  Cards are the primary loyalty identifiers for customers. A customer can hold multiple cards (physical or virtual), each with a card number, card type, and validity period. Cards are used to identify the customer at a point of sale and to accumulate loyalty points and credits.  Related: [GET /cards](https://carecloud.readme.io/reference/getcards)

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
$count = 100; // int | The number of records to return in API response.  ⚠️ We recommended adjust the batch size based on processing time. Depending on the response time of the request. Default value of 100 records is used if `count` parameter is not set.
$offset = 0; // int | The number of records from a collection to skip. Default value of 0 is used when parameter `offset` is not set.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$card_number = "card_number_example"; // string | Number of the customer card.
$card_type_id = "card_type_id_example"; // string | The unique ID of the card type.
$is_valid = true; // bool | *in validity range - true / before or after validity range - false / no value - all*
$card_number_list = array("card_number_list_example"); // string[] | List of the card numbers. If used, a list of cards will be returned if matching card numbers in CareCloud. In case you want to filter multiple options use array syntax : `card_number_list[]=1000000000016&card_number_list[]=2000000000025` Logic OR is used between values.

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
 **count** | **int**| The number of records to return in API response.  ⚠️ We recommended adjust the batch size based on processing time. Depending on the response time of the request. Default value of 100 records is used if &#x60;count&#x60; parameter is not set. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. Default value of 0 is used when parameter &#x60;offset&#x60; is not set. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **card_number** | **string**| Number of the customer card. | [optional]
 **card_type_id** | **string**| The unique ID of the card type. | [optional]
 **is_valid** | **bool**| *in validity range - true / before or after validity range - false / no value - all* | [optional]
 **card_number_list** | [**string[]**](../Model/string.md)| List of the card numbers. If used, a list of cards will be returned if matching card numbers in CareCloud. In case you want to filter multiple options use array syntax : &#x60;card_number_list[]&#x3D;1000000000016&amp;card_number_list[]&#x3D;2000000000025&#x60; Logic OR is used between values. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetSubCustomerCards200Response**](../Model/GetSubCustomerCards200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerEvents**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetSubCustomerEvents200Response getSubCustomerEvents($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $event_type_id, $external_id, $event_type_ids, $include_property_records, $time_from, $time_to)

Get information about all customer events

Get a list of customer events in the CareCloud platform.  Events represent customer interaction records and marketing automation triggers. They are used as conditions and triggers in CareCloud marketing automation workflows. This endpoint returns all events associated with the customer account.  Related: [GET /events](https://carecloud.readme.io/reference/getevents)

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
$count = 100; // int | The number of records to return in API response.  ⚠️ We recommended adjust the batch size based on processing time. Depending on the response time of the request. Default value of 100 records is used if `count` parameter is not set.
$offset = 0; // int | The number of records from a collection to skip. Default value of 0 is used when parameter `offset` is not set.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$event_type_id = "event_type_id_example"; // string | The unique ID of the event type.
$external_id = "external_id_example"; // string | The ID from other system than CareCloud. It is usually used for the synchronization or identification of the record in between CareCloud and other system. The ID doesn't need to be necessary unique. Usage of other parameter could be required to return more specific results.
$event_type_ids = array("event_type_ids_example"); // string[] | List of the event type IDs from the resource [GET /event-types](https://carecloud.readme.io/reference/geteventtypes). In case you want to filter multiple options use array syntax : `event_type_ids[]=8bda8a4854394325e2748a5005&event_type_ids[]=9ceb9b5965405436f3859b6116` Logic OR is used between values.
$include_property_records = true; // bool | If true, the property record structure will be included in the response. Possible values: true - property records structure will be included / false or not set - property records structure won't be included, and parameter will return null value
$time_from = "time_from_example"; // string | Start of the time interval for filtering. Accepts the format `YYYY-MM-DD HH:MM:SS` or ISO-8601 format (`YYYY-MM-DDTHH:MM:SS`). All times are in the local timezone.
$time_to = "time_to_example"; // string | End of the time interval for filtering. Accepts the format `YYYY-MM-DD HH:MM:SS` or ISO-8601 format (`YYYY-MM-DDTHH:MM:SS`). All times are in the local timezone.

try {
    $result = $apiInstance->getSubCustomerEvents($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $event_type_id, $external_id, $event_type_ids, $include_property_records, $time_from, $time_to);
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
 **count** | **int**| The number of records to return in API response.  ⚠️ We recommended adjust the batch size based on processing time. Depending on the response time of the request. Default value of 100 records is used if &#x60;count&#x60; parameter is not set. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. Default value of 0 is used when parameter &#x60;offset&#x60; is not set. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **event_type_id** | **string**| The unique ID of the event type. | [optional]
 **external_id** | **string**| The ID from other system than CareCloud. It is usually used for the synchronization or identification of the record in between CareCloud and other system. The ID doesn&#x27;t need to be necessary unique. Usage of other parameter could be required to return more specific results. | [optional]
 **event_type_ids** | [**string[]**](../Model/string.md)| List of the event type IDs from the resource [GET /event-types](https://carecloud.readme.io/reference/geteventtypes). In case you want to filter multiple options use array syntax : &#x60;event_type_ids[]&#x3D;8bda8a4854394325e2748a5005&amp;event_type_ids[]&#x3D;9ceb9b5965405436f3859b6116&#x60; Logic OR is used between values. | [optional]
 **include_property_records** | **bool**| If true, the property record structure will be included in the response. Possible values: true - property records structure will be included / false or not set - property records structure won&#x27;t be included, and parameter will return null value | [optional]
 **time_from** | **string**| Start of the time interval for filtering. Accepts the format &#x60;YYYY-MM-DD HH:MM:SS&#x60; or ISO-8601 format (&#x60;YYYY-MM-DDTHH:MM:SS&#x60;). All times are in the local timezone. | [optional]
 **time_to** | **string**| End of the time interval for filtering. Accepts the format &#x60;YYYY-MM-DD HH:MM:SS&#x60; or ISO-8601 format (&#x60;YYYY-MM-DDTHH:MM:SS&#x60;). All times are in the local timezone. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetSubCustomerEvents200Response**](../Model/GetSubCustomerEvents200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerHintRecords**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetSubCustomerRecommendation200Response getSubCustomerHintRecords($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $name)

Get a collection of Hint records

Get information about all Hint records on a customer account.  Hint records are personalised recommendations associated with a customer account. They represent suggested products, offers, or actions identified as relevant to the customer. For AI-ranked reward recommendations, use [GET /customers/{customer_id}/reward-recommendations](https://carecloud.readme.io/reference/getsubcustomerrewardrecommendations).

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
$count = 100; // int | The number of records to return in API response.  ⚠️ We recommended adjust the batch size based on processing time. Depending on the response time of the request. Default value of 100 records is used if `count` parameter is not set.
$offset = 0; // int | The number of records from a collection to skip. Default value of 0 is used when parameter `offset` is not set.
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
 **count** | **int**| The number of records to return in API response.  ⚠️ We recommended adjust the batch size based on processing time. Depending on the response time of the request. Default value of 100 records is used if &#x60;count&#x60; parameter is not set. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. Default value of 0 is used when parameter &#x60;offset&#x60; is not set. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **name** | **string**| Search record by name or a part of the name. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetSubCustomerRecommendation200Response**](../Model/GetSubCustomerRecommendation200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerInterests**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetSubCustomerInterests200Response getSubCustomerInterests($customer_id, $accept_language)

Get a collection of interest records

Get information about all interest records on a customer account.  Customer interests represent the categories or topics a customer has opted into or been assigned to. They are used to personalise communication and offers. Each interest record links the customer to an interest defined in the CareCloud platform.  Related: [GET /interests](https://carecloud.readme.io/reference/getinterests)

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

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetSubCustomerInterests200Response**](../Model/GetSubCustomerInterests200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerPartners**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetSubCustomerPartners200Response getSubCustomerPartners($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction)

Get information about all customer partners

Get a list of customer partners in CareCloud.  Customer-partner relations define which partners (retail chains, brands, or business units) a customer account is associated with. A customer can be assigned to one or more partners. This assignment determines which partner's loyalty programs, communications, and rewards are applicable to the customer.  ⚠️ Endpoint is available only in the Enterprise interface.

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
$count = 100; // int | The number of records to return in API response.  ⚠️ We recommended adjust the batch size based on processing time. Depending on the response time of the request. Default value of 100 records is used if `count` parameter is not set.
$offset = 0; // int | The number of records from a collection to skip. Default value of 0 is used when parameter `offset` is not set.
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
 **count** | **int**| The number of records to return in API response.  ⚠️ We recommended adjust the batch size based on processing time. Depending on the response time of the request. Default value of 100 records is used if &#x60;count&#x60; parameter is not set. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. Default value of 0 is used when parameter &#x60;offset&#x60; is not set. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetSubCustomerPartners200Response**](../Model/GetSubCustomerPartners200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerPoints**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetSubCustomerPoints200Response getSubCustomerPoints($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $point_type_id)

Get all customer point records

Get information about all customer point records.  Reward points are the non-monetary loyalty currency earned by customers through purchases and other qualifying actions. Each point record represents a single earning or redemption event. Filter by `point_type_id` to narrow results to a specific point program.  Related: [GET /point-types](https://carecloud.readme.io/reference/getpointtypes)

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
$count = 100; // int | The number of records to return in API response.  ⚠️ We recommended adjust the batch size based on processing time. Depending on the response time of the request. Default value of 100 records is used if `count` parameter is not set.
$offset = 0; // int | The number of records from a collection to skip. Default value of 0 is used when parameter `offset` is not set.
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
 **count** | **int**| The number of records to return in API response.  ⚠️ We recommended adjust the batch size based on processing time. Depending on the response time of the request. Default value of 100 records is used if &#x60;count&#x60; parameter is not set. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. Default value of 0 is used when parameter &#x60;offset&#x60; is not set. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **point_type_id** | **string**| The unique ID of a point type. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetSubCustomerPoints200Response**](../Model/GetSubCustomerPoints200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerProperties**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetSubCustomerProperties200Response getSubCustomerProperties($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction)

Get a collection of properties

Get information about all property records on a customer account.  Customer properties are custom data fields defined at the project level. They extend the standard customer record with project-specific attributes - for example, loyalty tier preferences, subscription levels, or other business-specific data. Each property record links a property definition to its value on the customer account.  To update properties in bulk, use [POST /customers/{customer_id}/properties/batch](https://carecloud.readme.io/reference/postsubcustomerpropertiesbatch). To retrieve the available property definitions, use [GET /customer-properties](https://carecloud.readme.io/reference/getcustomerproperties).

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
$count = 100; // int | The number of records to return in API response.  ⚠️ We recommended adjust the batch size based on processing time. Depending on the response time of the request. Default value of 100 records is used if `count` parameter is not set.
$offset = 0; // int | The number of records from a collection to skip. Default value of 0 is used when parameter `offset` is not set.
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
 **count** | **int**| The number of records to return in API response.  ⚠️ We recommended adjust the batch size based on processing time. Depending on the response time of the request. Default value of 100 records is used if &#x60;count&#x60; parameter is not set. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. Default value of 0 is used when parameter &#x60;offset&#x60; is not set. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetSubCustomerProperties200Response**](../Model/GetSubCustomerProperties200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerPurchases**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetSubCustomerPurchases200Response getSubCustomerPurchases($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $store_id, $type_id, $payment_time_from, $payment_time_to, $purchase_items_extension, $external_purchase_id)

Get all customer purchases

Get information about all customer account purchases.  Returns all purchase transactions recorded on the customer's account. Each purchase record includes the total value, payment time, store, and purchase type. Use `purchase_items_extension=true` to include individual line items in the response.  Filter by store, purchase type, and payment date range to narrow results. To retrieve purchases across all customers, use [GET /purchases](https://carecloud.readme.io/reference/getpurchases).

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
$count = 100; // int | The number of records to return in API response.  ⚠️ We recommended adjust the batch size based on processing time. Depending on the response time of the request. Default value of 100 records is used if `count` parameter is not set.
$offset = 0; // int | The number of records from a collection to skip. Default value of 0 is used when parameter `offset` is not set.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$store_id = "store_id_example"; // string | The unique ID of the store in CareCloud.
$type_id = "type_id_example"; // string | Purchase type
$payment_time_from = "payment_time_from_example"; // string | Start of the time interval for filtering purchases by payment time. Accepts the format `YYYY-MM-DD HH:MM:SS` or ISO-8601 format (`YYYY-MM-DDTHH:MM:SS`). All times are in the local timezone.
$payment_time_to = "payment_time_to_example"; // string | End of the time interval for filtering purchases by payment time. Accepts the format `YYYY-MM-DD HH:MM:SS` or ISO-8601 format (`YYYY-MM-DDTHH:MM:SS`). All times are in the local timezone.
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
 **count** | **int**| The number of records to return in API response.  ⚠️ We recommended adjust the batch size based on processing time. Depending on the response time of the request. Default value of 100 records is used if &#x60;count&#x60; parameter is not set. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. Default value of 0 is used when parameter &#x60;offset&#x60; is not set. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **store_id** | **string**| The unique ID of the store in CareCloud. | [optional]
 **type_id** | **string**| Purchase type | [optional]
 **payment_time_from** | **string**| Start of the time interval for filtering purchases by payment time. Accepts the format &#x60;YYYY-MM-DD HH:MM:SS&#x60; or ISO-8601 format (&#x60;YYYY-MM-DDTHH:MM:SS&#x60;). All times are in the local timezone. | [optional]
 **payment_time_to** | **string**| End of the time interval for filtering purchases by payment time. Accepts the format &#x60;YYYY-MM-DD HH:MM:SS&#x60; or ISO-8601 format (&#x60;YYYY-MM-DDTHH:MM:SS&#x60;). All times are in the local timezone. | [optional]
 **purchase_items_extension** | **bool**| If true, resource returns extended response with purchase items. If false, the resource won&#x27;t be extended. If the parameter is not set, the default value is false. | [optional] [default to false]
 **external_purchase_id** | **string**| ID of the purchase from external (e-shop, POS) system. This ID should have unique value. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetSubCustomerPurchases200Response**](../Model/GetSubCustomerPurchases200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerRelatedCustomer**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetSubCustomerRelatedCustomer200Response getSubCustomerRelatedCustomer($customer_id, $customer_relation_id, $accept_language)

Detail of a relation between customers

Get information about a specific customer relation.  Returns the detail of a single relationship record between two customer accounts, including the related customer ID and the relation type. To retrieve all relations for a customer, use [GET /customers/{customer_id}/related-customers](https://carecloud.readme.io/reference/getsubcustomerrelatedcustomers).

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

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetSubCustomerRelatedCustomer200Response**](../Model/GetSubCustomerRelatedCustomer200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerRelatedCustomers**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetSubCustomerRelatedCustomers200Response getSubCustomerRelatedCustomers($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $related_customer_id, $customer_relation_type_id, $all_customer_relations)

Get information about all related customers

Get a list of customers' relations in the CareCloud platform.  Related customers are customer accounts linked to each other by a defined relationship type - for example, household members, referral relationships, or account groupings. This endpoint returns all relation records for the specified customer.  Related: [GET /customer-relation-types](https://carecloud.readme.io/reference/getcustomerrelationtypes)

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
$count = 100; // int | The number of records to return in API response.  ⚠️ We recommended adjust the batch size based on processing time. Depending on the response time of the request. Default value of 100 records is used if `count` parameter is not set.
$offset = 0; // int | The number of records from a collection to skip. Default value of 0 is used when parameter `offset` is not set.
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
 **count** | **int**| The number of records to return in API response.  ⚠️ We recommended adjust the batch size based on processing time. Depending on the response time of the request. Default value of 100 records is used if &#x60;count&#x60; parameter is not set. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. Default value of 0 is used when parameter &#x60;offset&#x60; is not set. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **related_customer_id** | **string**| The unique ID of the related customer. | [optional]
 **customer_relation_type_id** | **string**| The unique ID of the customer relation type in CareCloud. | [optional]
 **all_customer_relations** | **bool**| The API call returns all relations (currently valid and relations from the past) in case of true value. If the parameter is not set or has value false, only currently valid relations are returned. | [optional] [default to false]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetSubCustomerRelatedCustomers200Response**](../Model/GetSubCustomerRelatedCustomers200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerRewards**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetSubCustomerRewards200Response getSubCustomerRewards($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $name, $store_id, $is_valid, $valid_from, $valid_to, $code, $is_automated, $reward_group, $customer_type_id, $without_stores, $tag_ids)

Get all customer rewards

Get information about all customer rewards.  Rewards are incentives available to customers as part of the loyalty program. This endpoint returns all rewards associated with the customer account. Use `is_valid`, `valid_from`, and `valid_to` to filter by validity status and date range.  Related: [GET /rewards](https://carecloud.readme.io/reference/getrewards)  ⚠️ There is the logical AND between query parameters `is_valid`, `valid_from` and `valid to`.

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
$count = 100; // int | The number of records to return in API response.  ⚠️ We recommended adjust the batch size based on processing time. Depending on the response time of the request. Default value of 100 records is used if `count` parameter is not set.
$offset = 0; // int | The number of records from a collection to skip. Default value of 0 is used when parameter `offset` is not set.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$name = "name_example"; // string | Search record by name or a part of the name.
$store_id = "store_id_example"; // string | The unique ID of the store where customer can apply the reward.
$is_valid = true; // bool | *in validity range - true / before or after validity range - false / no value - all*
$valid_from = "valid_from_example"; // string | Start of the validity period for filtering in ISO-8601 format (`YYYY-MM-DD`).
$valid_to = "valid_to_example"; // string | End of the validity period for filtering in ISO-8601 format (`YYYY-MM-DD`).
$code = "code_example"; // string | Code of the reward.
$is_automated = true; // bool | Filter of the automated rewards. *Possible values: true - returns all automated rewards / false - returns all non automated rewards / no value - all rewards(filter is not applied)*
$reward_group = 56; // int | The unique ID of the reward group. *Possible values: 0 - cash desk reward (party time reward) / 1 - catalog reward / 2 - campaign reward / 4 - simple reward / 5 - gift reward (Multi Purpose Reward)*
$customer_type_id = array("customer_type_id_example"); // string[] | Select by list of customer types from customer-types resource. The list of values is available at [GET /customer-types](https://carecloud.readme.io/reference/getcustomertypes). In case you want to filter multiple options use array syntax : `customer_type_id[]=86e05affc7a7abefcd513ab400&customer_type_id[]=82c06812c0756528660784fef` Logic OR is used between values.
$without_stores = true; // bool | If true or not set, the data will not contain information about business units (stores). If false resource returns full structure with stores.
$tag_ids = array("tag_ids_example"); // string[] | Parameter filters values by a list of tag IDs. Logic OR is used between values.  In case you want to filter multiple options use array syntax : `tag_ids[]=8bc8ca16f9c5039951021700a2&tag_ids[]=82c06812c0756528660784fef`

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
 **count** | **int**| The number of records to return in API response.  ⚠️ We recommended adjust the batch size based on processing time. Depending on the response time of the request. Default value of 100 records is used if &#x60;count&#x60; parameter is not set. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. Default value of 0 is used when parameter &#x60;offset&#x60; is not set. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **name** | **string**| Search record by name or a part of the name. | [optional]
 **store_id** | **string**| The unique ID of the store where customer can apply the reward. | [optional]
 **is_valid** | **bool**| *in validity range - true / before or after validity range - false / no value - all* | [optional]
 **valid_from** | **string**| Start of the validity period for filtering in ISO-8601 format (&#x60;YYYY-MM-DD&#x60;). | [optional]
 **valid_to** | **string**| End of the validity period for filtering in ISO-8601 format (&#x60;YYYY-MM-DD&#x60;). | [optional]
 **code** | **string**| Code of the reward. | [optional]
 **is_automated** | **bool**| Filter of the automated rewards. *Possible values: true - returns all automated rewards / false - returns all non automated rewards / no value - all rewards(filter is not applied)* | [optional]
 **reward_group** | **int**| The unique ID of the reward group. *Possible values: 0 - cash desk reward (party time reward) / 1 - catalog reward / 2 - campaign reward / 4 - simple reward / 5 - gift reward (Multi Purpose Reward)* | [optional]
 **customer_type_id** | [**string[]**](../Model/string.md)| Select by list of customer types from customer-types resource. The list of values is available at [GET /customer-types](https://carecloud.readme.io/reference/getcustomertypes). In case you want to filter multiple options use array syntax : &#x60;customer_type_id[]&#x3D;86e05affc7a7abefcd513ab400&amp;customer_type_id[]&#x3D;82c06812c0756528660784fef&#x60; Logic OR is used between values. | [optional]
 **without_stores** | **bool**| If true or not set, the data will not contain information about business units (stores). If false resource returns full structure with stores. | [optional]
 **tag_ids** | [**string[]**](../Model/string.md)| Parameter filters values by a list of tag IDs. Logic OR is used between values.  In case you want to filter multiple options use array syntax : &#x60;tag_ids[]&#x3D;8bc8ca16f9c5039951021700a2&amp;tag_ids[]&#x3D;82c06812c0756528660784fef&#x60; | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetSubCustomerRewards200Response**](../Model/GetSubCustomerRewards200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerRewardsRecommendation**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetSubCustomerRewardRecommendations200Response getSubCustomerRewardsRecommendation($customer_id, $accept_language, $count, $offset, $name, $store_id, $is_valid, $valid_from, $valid_to, $code, $is_automated, $reward_group, $customer_type_id, $without_stores, $tag_ids, $partner_id, $reward_type_id)

Recommend the best rewards for the customer

The endpoint recommends and orders the best rewards for the customer depending on the query parameters setup. This endpoint uses a machine learning-based CareCloud Recommendation Engine. The CareCloud Recommendation Engine requires additional setup and training of AI models. If the recommendation models are not trained for your project, The endpoint returns a list of all rewards filtered by query parameters.  ⚠️ There is the logical AND between query parameters `is_valid`, `valid_from` and `valid to`.

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
$count = 100; // int | The number of records to return in API response.  ⚠️ We recommended adjust the batch size based on processing time. Depending on the response time of the request. Default value of 100 records is used if `count` parameter is not set.
$offset = 0; // int | The number of records from a collection to skip. Default value of 0 is used when parameter `offset` is not set.
$name = "name_example"; // string | Search record by name or a part of the name.
$store_id = "store_id_example"; // string | The unique ID of the store where customer can apply the reward.
$is_valid = true; // bool | *in validity range - true / before or after validity range - false / no value - all*
$valid_from = "valid_from_example"; // string | Start of the validity period for filtering in ISO-8601 format (`YYYY-MM-DD`).
$valid_to = "valid_to_example"; // string | End of the validity period for filtering in ISO-8601 format (`YYYY-MM-DD`).
$code = "code_example"; // string | Code of the reward.
$is_automated = true; // bool | Filter of the automated rewards. *Possible values: true - returns all automated rewards / false - returns all non automated rewards / no value - all rewards(filter is not applied)*
$reward_group = 56; // int | The unique ID of the reward group. *Possible values: 0 - cash desk reward (party time reward) / 1 - catalog reward / 2 - campaign reward / 4 - simple reward / 5 - gift reward (Multi Purpose Reward)*
$customer_type_id = array("customer_type_id_example"); // string[] | Select by list of customer types from customer-types resource. The list of values is available at [GET /customer-types](https://carecloud.readme.io/reference/getcustomertypes). In case you want to filter multiple options use array syntax : `customer_type_id[]=86e05affc7a7abefcd513ab400&customer_type_id[]=82c06812c0756528660784fef` Logic OR is used between values.
$without_stores = true; // bool | If true or not set, the data will not contain information about business units (stores). If false resource returns full structure with stores.
$tag_ids = array("tag_ids_example"); // string[] | Parameter filters values by a list of tag IDs. Logic OR is used between values.  In case you want to filter multiple options use array syntax : `tag_ids[]=8bc8ca16f9c5039951021700a2&tag_ids[]=82c06812c0756528660784fef`
$partner_id = "partner_id_example"; // string | Unique ID of the partner from the resource [GET /partners](https://carecloud.readme.io/reference/getpartners).
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
 **count** | **int**| The number of records to return in API response.  ⚠️ We recommended adjust the batch size based on processing time. Depending on the response time of the request. Default value of 100 records is used if &#x60;count&#x60; parameter is not set. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. Default value of 0 is used when parameter &#x60;offset&#x60; is not set. | [optional] [default to 0]
 **name** | **string**| Search record by name or a part of the name. | [optional]
 **store_id** | **string**| The unique ID of the store where customer can apply the reward. | [optional]
 **is_valid** | **bool**| *in validity range - true / before or after validity range - false / no value - all* | [optional]
 **valid_from** | **string**| Start of the validity period for filtering in ISO-8601 format (&#x60;YYYY-MM-DD&#x60;). | [optional]
 **valid_to** | **string**| End of the validity period for filtering in ISO-8601 format (&#x60;YYYY-MM-DD&#x60;). | [optional]
 **code** | **string**| Code of the reward. | [optional]
 **is_automated** | **bool**| Filter of the automated rewards. *Possible values: true - returns all automated rewards / false - returns all non automated rewards / no value - all rewards(filter is not applied)* | [optional]
 **reward_group** | **int**| The unique ID of the reward group. *Possible values: 0 - cash desk reward (party time reward) / 1 - catalog reward / 2 - campaign reward / 4 - simple reward / 5 - gift reward (Multi Purpose Reward)* | [optional]
 **customer_type_id** | [**string[]**](../Model/string.md)| Select by list of customer types from customer-types resource. The list of values is available at [GET /customer-types](https://carecloud.readme.io/reference/getcustomertypes). In case you want to filter multiple options use array syntax : &#x60;customer_type_id[]&#x3D;86e05affc7a7abefcd513ab400&amp;customer_type_id[]&#x3D;82c06812c0756528660784fef&#x60; Logic OR is used between values. | [optional]
 **without_stores** | **bool**| If true or not set, the data will not contain information about business units (stores). If false resource returns full structure with stores. | [optional]
 **tag_ids** | [**string[]**](../Model/string.md)| Parameter filters values by a list of tag IDs. Logic OR is used between values.  In case you want to filter multiple options use array syntax : &#x60;tag_ids[]&#x3D;8bc8ca16f9c5039951021700a2&amp;tag_ids[]&#x3D;82c06812c0756528660784fef&#x60; | [optional]
 **partner_id** | **string**| Unique ID of the partner from the resource [GET /partners](https://carecloud.readme.io/reference/getpartners). | [optional]
 **reward_type_id** | **string**| The type of reward describes the reward behavior. For example, a Percentage discount, Buy one + get one discounted product, and others. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetSubCustomerRewardRecommendations200Response**](../Model/GetSubCustomerRewardRecommendations200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerSegments**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetSubCustomerSegment200Response getSubCustomerSegments($customer_id, $accept_language, $segment_group_ids)

Get a collection of segment records

Get information about all segment records on a customer account.  Segments are groupings of customers based on shared attributes or behaviour, used for targeted marketing and personalisation. This endpoint returns all segment memberships currently recorded on the customer account.  Related: [GET /segments](https://carecloud.readme.io/reference/getsegments)

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
$segment_group_ids = array("segment_group_ids_example"); // string[] | List of the segment group IDs from the resource [GET /segment-groups](#tag/Segments/operation/getSegmentGroups). In case you want to filter multiple options use array syntax : `segment_group_ids[]=8bed991c68a470e7aaeffbf048&segment_group_ids[]=9cfe0a2d79b581f8bb5ffc059` Logic OR is used between values.

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
 **segment_group_ids** | [**string[]**](../Model/string.md)| List of the segment group IDs from the resource [GET /segment-groups](#tag/Segments/operation/getSegmentGroups). In case you want to filter multiple options use array syntax : &#x60;segment_group_ids[]&#x3D;8bed991c68a470e7aaeffbf048&amp;segment_group_ids[]&#x3D;9cfe0a2d79b581f8bb5ffc059&#x60; Logic OR is used between values. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetSubCustomerSegment200Response**](../Model/GetSubCustomerSegment200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerSource**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetSubCustomerSource200Response getSubCustomerSource($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $external_id, $customer_source_id, $external_ids)

Get customer source records

Get information about all customer account source records.  Customer source records identify the external systems or applications where the customer account is tracked - for example, a mobile application, e-commerce platform, or POS system. Each record links the customer to a customer source and can include one or more external IDs used by that source system.  When both the `external_ids` and `external_id` filter parameters are provided, `external_ids` takes priority and `external_id` is ignored.  Related: [GET /customer-sources](https://carecloud.readme.io/reference/getcustomersources)

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
$count = 100; // int | The number of records to return in API response.  ⚠️ We recommended adjust the batch size based on processing time. Depending on the response time of the request. Default value of 100 records is used if `count` parameter is not set.
$offset = 0; // int | The number of records from a collection to skip. Default value of 0 is used when parameter `offset` is not set.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$external_id = "external_id_example"; // string | The external ID of the customer in the external system. Deprecated - use `external_ids` instead. To filter by external ID within a specific customer source, combine `external_ids` with the `customer_source_id` parameter.
$customer_source_id = "customer_source_id_example"; // string | The unique ID of the customer source. It identifies the system where the customer belongs or the customer account was created.
$external_ids = array("external_ids_example"); // string[] | Filter records by one or more external IDs. Returns records where any stored external ID matches any of the provided values. Use together with `customer_source_id` to scope the filter to a specific customer source.  To filter by multiple values, use array syntax: `external_ids[]=ACSDOIDF23&external_ids[]=BXTE123456`

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
 **count** | **int**| The number of records to return in API response.  ⚠️ We recommended adjust the batch size based on processing time. Depending on the response time of the request. Default value of 100 records is used if &#x60;count&#x60; parameter is not set. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. Default value of 0 is used when parameter &#x60;offset&#x60; is not set. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **external_id** | **string**| The external ID of the customer in the external system. Deprecated - use &#x60;external_ids&#x60; instead. To filter by external ID within a specific customer source, combine &#x60;external_ids&#x60; with the &#x60;customer_source_id&#x60; parameter. | [optional]
 **customer_source_id** | **string**| The unique ID of the customer source. It identifies the system where the customer belongs or the customer account was created. | [optional]
 **external_ids** | [**string[]**](../Model/string.md)| Filter records by one or more external IDs. Returns records where any stored external ID matches any of the provided values. Use together with &#x60;customer_source_id&#x60; to scope the filter to a specific customer source.  To filter by multiple values, use array syntax: &#x60;external_ids[]&#x3D;ACSDOIDF23&amp;external_ids[]&#x3D;BXTE123456&#x60; | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetSubCustomerSource200Response**](../Model/GetSubCustomerSource200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerStatus**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetSubCustomerStatus200Response getSubCustomerStatus($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $valid_now)

Get a collection of status records

Get information about all status records on a customer account.  Customer statuses represent the customer's standing or tier within a loyalty program - for example, Silver, Gold, or Platinum. Each status record has a validity period; only one status can be active at a time. This endpoint returns all status records, including expired and inactive ones.  To assign a new status, use [POST /customers/actions/set-status-record](https://carecloud.readme.io/reference/postcustomerssetstatusrecord) (enterprise interface only).

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
$count = 100; // int | The number of records to return in API response.  ⚠️ We recommended adjust the batch size based on processing time. Depending on the response time of the request. Default value of 100 records is used if `count` parameter is not set.
$offset = 0; // int | The number of records from a collection to skip. Default value of 0 is used when parameter `offset` is not set.
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
 **count** | **int**| The number of records to return in API response.  ⚠️ We recommended adjust the batch size based on processing time. Depending on the response time of the request. Default value of 100 records is used if &#x60;count&#x60; parameter is not set. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. Default value of 0 is used when parameter &#x60;offset&#x60; is not set. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **valid_now** | **bool**| Status validity. Just one status can be valid in the time. *Possible values are: True for valid status / False for status not valid* | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetSubCustomerStatus200Response**](../Model/GetSubCustomerStatus200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubCustomerVouchers**
> \CrmCareCloud\Webservice\RestApi\Client\Model\GetSubCustomerVouchers200Response getSubCustomerVouchers($customer_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $code, $store_id, $is_valid, $is_applied, $without_stores, $reward_id)

Get all customer vouchers

Get information about all customer vouchers.  Vouchers are redeemable discount or reward certificates stored on a customer's account. They are typically issued as part of a reward redemption or marketing campaign. Each voucher has a value, validity period, and redemption status.  Related: [GET /vouchers](https://carecloud.readme.io/reference/getvouchers)

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
$count = 100; // int | The number of records to return in API response.  ⚠️ We recommended adjust the batch size based on processing time. Depending on the response time of the request. Default value of 100 records is used if `count` parameter is not set.
$offset = 0; // int | The number of records from a collection to skip. Default value of 0 is used when parameter `offset` is not set.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$code = "code_example"; // string | Unique code of the voucher.
$store_id = "store_id_example"; // string | The unique ID of the store where customer can apply the reward.
$is_valid = true; // bool | *in validity range - true / before or after validity range - false / no value - all*
$is_applied = true; // bool | Filter by voucher application and reservation. *Possible values: true - all applied or reserved vouchers / false - all vouchers that have not been applied yet or that are not reserved actually / no value - all vouchers*
$without_stores = true; // bool | If true or not set, the data will not contain information about business units (stores). If false resource returns full structure with stores.
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
 **count** | **int**| The number of records to return in API response.  ⚠️ We recommended adjust the batch size based on processing time. Depending on the response time of the request. Default value of 100 records is used if &#x60;count&#x60; parameter is not set. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. Default value of 0 is used when parameter &#x60;offset&#x60; is not set. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **code** | **string**| Unique code of the voucher. | [optional]
 **store_id** | **string**| The unique ID of the store where customer can apply the reward. | [optional]
 **is_valid** | **bool**| *in validity range - true / before or after validity range - false / no value - all* | [optional]
 **is_applied** | **bool**| Filter by voucher application and reservation. *Possible values: true - all applied or reserved vouchers / false - all vouchers that have not been applied yet or that are not reserved actually / no value - all vouchers* | [optional]
 **without_stores** | **bool**| If true or not set, the data will not contain information about business units (stores). If false resource returns full structure with stores. | [optional]
 **reward_id** | **string**| The unique ID of the reward in CareCloud. In case you want to filter multiple options use array syntax : &#x60;reward_id[]&#x3D;8bc8ca16f9c5039951021700a2&amp;reward_id[]&#x3D;82c06812c0756528660784fef&#x60; | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\GetSubCustomerVouchers200Response**](../Model/GetSubCustomerVouchers200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCustomer**
> \CrmCareCloud\Webservice\RestApi\Client\Model\PostCustomers201Response postCustomer($body, $accept_language)

Create a new customer

Add a new customer account in the CareCloud platform.  **Partner assignment**  When a new customer account is created, CareCloud creates one or more customer-partner relations automatically. The assignment depends on the project configuration:  - If the project is configured for store-based partner assignment and `store_id` is set in `personal_information` - a single relation is created for the partner derived from the store. - If the project is not configured for store-based partner assignment - relations are created for all partners accessible to the authenticated API user. The `store_id`, if set, is still recorded on the customer account but does not determine partner assignment.  To control partner assignment explicitly after registration, use [POST /customers/actions/set-partners](https://carecloud.readme.io/reference/postsubcustomersetpartners) (enterprise interface only), which replaces all partner assignments in a single call.

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

[**\CrmCareCloud\Webservice\RestApi\Client\Model\PostCustomers201Response**](../Model/PostCustomers201Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSubCustomerAddress**
> \CrmCareCloud\Webservice\RestApi\Client\Model\PostSubCustomerAddresses201Response postSubCustomerAddress($body, $customer_id, $accept_language)

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

[**\CrmCareCloud\Webservice\RestApi\Client\Model\PostSubCustomerAddresses201Response**](../Model/PostSubCustomerAddresses201Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSubCustomerInterest**
> \CrmCareCloud\Webservice\RestApi\Client\Model\PostSubCustomerInterests201Response postSubCustomerInterest($body, $customer_id, $accept_language)

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

[**\CrmCareCloud\Webservice\RestApi\Client\Model\PostSubCustomerInterests201Response**](../Model/PostSubCustomerInterests201Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSubCustomerPartnerRecord**
> \CrmCareCloud\Webservice\RestApi\Client\Model\PostSubCustomerPartners201Response postSubCustomerPartnerRecord($body, $customer_id, $accept_language)

Add a partner to the customer

Add a new partner to the customer. To replace all partner assignments in a single call, use [POST /customers/actions/set-partners](https://carecloud.readme.io/reference/postsubcustomersetpartners) (enterprise interface only) instead.

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

[**\CrmCareCloud\Webservice\RestApi\Client\Model\PostSubCustomerPartners201Response**](../Model/PostSubCustomerPartners201Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSubCustomerProperties**
> \CrmCareCloud\Webservice\RestApi\Client\Model\PostSubCustomerProperties201Response postSubCustomerProperties($body, $customer_id, $accept_language)

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

[**\CrmCareCloud\Webservice\RestApi\Client\Model\PostSubCustomerProperties201Response**](../Model/PostSubCustomerProperties201Response.md)

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
> \CrmCareCloud\Webservice\RestApi\Client\Model\PostSubCustomerRelatedCustomers201Response postSubCustomerRelatedCustomers($body, $customer_id, $accept_language)

Create the customer relation

Add a new customer relation to the customer account.

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

[**\CrmCareCloud\Webservice\RestApi\Client\Model\PostSubCustomerRelatedCustomers201Response**](../Model/PostSubCustomerRelatedCustomers201Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSubCustomerSource**
> \CrmCareCloud\Webservice\RestApi\Client\Model\PostSubCustomerSource201Response postSubCustomerSource($body, $customer_id, $accept_language)

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

[**\CrmCareCloud\Webservice\RestApi\Client\Model\PostSubCustomerSource201Response**](../Model/PostSubCustomerSource201Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putCustomer**
> putCustomer($body, $customer_id, $accept_language)

Update a customer

Update the information on a specific customer account.  Replaces the customer's personal information, contact details, address, consent records, and optional property records with the values provided in the request body. The customer password is changed only if a new password is provided; omitting the password field leaves it unchanged.  To update multiple custom property records in bulk without affecting other customer data, use [POST /customers/{customer_id}/properties/batch](https://carecloud.readme.io/reference/postsubcustomerpropertiesbatch).

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

Update a specific customer interest record on a customer account.  Replaces the assignment or value of a single interest record on the customer account. To retrieve the current interest records, use [GET /customers/{customer_id}/interests](https://carecloud.readme.io/reference/getsubcustomerinterests).

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

Update a specific customer property record on a customer account.  Replaces the value of a single custom property record on the customer account. To update multiple property records in a single request, use [POST /customers/{customer_id}/properties/batch](https://carecloud.readme.io/reference/postsubcustomerpropertiesbatch).

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

