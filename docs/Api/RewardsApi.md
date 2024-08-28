# CrmCareCloud\Webservice\RestApi\Client\RewardsApi

All URIs are relative to *https://{project_url}/webservice/rest-api/{api_interface}/{version}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getReward**](RewardsApi.md#getreward) | **GET** /rewards/{reward_id} | Get a reward
[**getRewardRecommendations**](RewardsApi.md#getrewardrecommendations) | **GET** /rewards/actions/reward-recommendations | Recommend the best rewards for the customer
[**getRewards**](RewardsApi.md#getrewards) | **GET** /rewards | Get all rewards
[**getSubRewardProductBrands**](RewardsApi.md#getsubrewardproductbrands) | **GET** /rewards/{reward_id}/product-brands | Get product brands tied to a reward
[**getSubRewardProductGroups**](RewardsApi.md#getsubrewardproductgroups) | **GET** /rewards/{reward_id}/product-groups | Get product groups tied to a reward
[**getSubRewardProducts**](RewardsApi.md#getsubrewardproducts) | **GET** /rewards/{reward_id}/products | Get products tied to a reward
[**getSubRewardStores**](RewardsApi.md#getsubrewardstores) | **GET** /rewards/{reward_id}/stores | Get all stores
[**getSubRewardTags**](RewardsApi.md#getsubrewardtags) | **GET** /rewards/tags | Get all tags for resource rewards
[**getSubRewardVouchers**](RewardsApi.md#getsubrewardvouchers) | **GET** /rewards/{reward_id}/vouchers | Get vouchers tied to a reward
[**postRewardCreateVoucher**](RewardsApi.md#postrewardcreatevoucher) | **POST** /rewards/{reward_id}/actions/create-voucher | Create a new voucher
[**postRewardSynchronizeProducts**](RewardsApi.md#postrewardsynchronizeproducts) | **POST** /rewards/{reward_id}/actions/set-products | Set all products that reward can be applied to

# **getReward**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200137 getReward($reward_id, $accept_language)

Get a reward

Get information about a specific reward.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\RewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reward_id = "reward_id_example"; // string | The unique ID of the reward.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->getReward($reward_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardsApi->getReward: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reward_id** | **string**| The unique ID of the reward. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200137**](../Model/InlineResponse200137.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRewardRecommendations**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20046 getRewardRecommendations($customer_id, $accept_language, $count, $offset, $name, $store_id, $is_valid, $valid_from, $valid_to, $code, $is_automated, $reward_group, $customer_type_id, $without_stores, $tag_ids, $partner_id, $reward_type_id)

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\RewardsApi(
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
    $result = $apiInstance->getRewardRecommendations($customer_id, $accept_language, $count, $offset, $name, $store_id, $is_valid, $valid_from, $valid_to, $code, $is_automated, $reward_group, $customer_type_id, $without_stores, $tag_ids, $partner_id, $reward_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardsApi->getRewardRecommendations: ', $e->getMessage(), PHP_EOL;
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

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20046**](../Model/InlineResponse20046.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRewards**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200136 getRewards($accept_language, $count, $offset, $sort_field, $sort_direction, $name, $store_id, $is_valid, $valid_from, $valid_to, $code, $is_automated, $reward_group, $customer_type_id, $without_stores, $tag_ids, $partner_id, $reward_type_id)

Get all rewards

Get information about rewards as a list of all rewards.  <p class=\"warning\">⚠️ There is the logical AND between query parameters `is_valid`, `valid_from` and `valid to`.</p>

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\RewardsApi(
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
    $result = $apiInstance->getRewards($accept_language, $count, $offset, $sort_field, $sort_direction, $name, $store_id, $is_valid, $valid_from, $valid_to, $code, $is_automated, $reward_group, $customer_type_id, $without_stores, $tag_ids, $partner_id, $reward_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardsApi->getRewards: ', $e->getMessage(), PHP_EOL;
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

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200136**](../Model/InlineResponse200136.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubRewardProductBrands**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200141 getSubRewardProductBrands($reward_id, $accept_language, $count, $offset, $sort_field, $sort_direction)

Get product brands tied to a reward

Get information about all product brands created in relation to a specific reward.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\RewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reward_id = "reward_id_example"; // string | The unique ID of the reward.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.
$count = 100; // int | The number of records to return.
$offset = 0; // int | The number of records from a collection to skip.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.

try {
    $result = $apiInstance->getSubRewardProductBrands($reward_id, $accept_language, $count, $offset, $sort_field, $sort_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardsApi->getSubRewardProductBrands: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reward_id** | **string**| The unique ID of the reward. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200141**](../Model/InlineResponse200141.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubRewardProductGroups**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200140 getSubRewardProductGroups($reward_id, $accept_language, $count, $offset, $sort_field, $sort_direction)

Get product groups tied to a reward

Get information about all product groups created in relation to a specific reward.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\RewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reward_id = "reward_id_example"; // string | The unique ID of the reward.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.
$count = 100; // int | The number of records to return.
$offset = 0; // int | The number of records from a collection to skip.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.

try {
    $result = $apiInstance->getSubRewardProductGroups($reward_id, $accept_language, $count, $offset, $sort_field, $sort_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardsApi->getSubRewardProductGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reward_id** | **string**| The unique ID of the reward. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200140**](../Model/InlineResponse200140.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubRewardProducts**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200139 getSubRewardProducts($reward_id, $accept_language, $count, $offset, $sort_field, $sort_direction)

Get products tied to a reward

Get information about all products created in relation to the specific reward.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\RewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reward_id = "reward_id_example"; // string | The unique ID of the reward.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.
$count = 100; // int | The number of records to return.
$offset = 0; // int | The number of records from a collection to skip.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.

try {
    $result = $apiInstance->getSubRewardProducts($reward_id, $accept_language, $count, $offset, $sort_field, $sort_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardsApi->getSubRewardProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reward_id** | **string**| The unique ID of the reward. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200139**](../Model/InlineResponse200139.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubRewardStores**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200142 getSubRewardStores($reward_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $visible_for_customer)

Get all stores

Get information as a list of all stores of specific reward. Customer can apply this reward in every of these stores.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\RewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reward_id = "reward_id_example"; // string | The unique ID of the reward.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.
$count = 100; // int | The number of records to return.
$offset = 0; // int | The number of records from a collection to skip.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$visible_for_customer = 56; // int | State of the visibility of the customer. *Possible values are: 0 - invisible / 1- visible. If query string is not used, return both.*

try {
    $result = $apiInstance->getSubRewardStores($reward_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $visible_for_customer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardsApi->getSubRewardStores: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reward_id** | **string**| The unique ID of the reward. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **visible_for_customer** | **int**| State of the visibility of the customer. *Possible values are: 0 - invisible / 1- visible. If query string is not used, return both.* | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200142**](../Model/InlineResponse200142.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubRewardTags**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200143 getSubRewardTags($accept_language, $count, $offset, $sort_field, $sort_direction, $name, $text_id)

Get all tags for resource rewards

Get information as a list of all tags of resource rewards. Tags from the list could be use for reward filtering.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\RewardsApi(
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
$name = "name_example"; // string | Search record by name or a part of the name.
$text_id = "text_id_example"; // string | Text ID of an event group.

try {
    $result = $apiInstance->getSubRewardTags($accept_language, $count, $offset, $sort_field, $sort_direction, $name, $text_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardsApi->getSubRewardTags: ', $e->getMessage(), PHP_EOL;
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
 **name** | **string**| Search record by name or a part of the name. | [optional]
 **text_id** | **string**| Text ID of an event group. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200143**](../Model/InlineResponse200143.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubRewardVouchers**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200138 getSubRewardVouchers($reward_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $customer_id, $store_id)

Get vouchers tied to a reward

Get information about all vouchers created in relation to the specific reward.

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\RewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reward_id = "reward_id_example"; // string | The unique ID of the reward.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.
$count = 100; // int | The number of records to return.
$offset = 0; // int | The number of records from a collection to skip.
$sort_field = "sort_field_example"; // string | Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.*
$sort_direction = "sort_direction_example"; // string | Direction of sorting the response list.
$customer_id = "customer_id_example"; // string | The unique ID of the customer.
$store_id = "store_id_example"; // string | The unique ID of the store where customer can apply the reward.

try {
    $result = $apiInstance->getSubRewardVouchers($reward_id, $accept_language, $count, $offset, $sort_field, $sort_direction, $customer_id, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardsApi->getSubRewardVouchers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reward_id** | **string**| The unique ID of the reward. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]
 **count** | **int**| The number of records to return. | [optional] [default to 100]
 **offset** | **int**| The number of records from a collection to skip. | [optional] [default to 0]
 **sort_field** | **string**| Name of the sorting parameter. You can sort by any of the first level parameters from the resource response. *Response is sorted by the specified field.* | [optional]
 **sort_direction** | **string**| Direction of sorting the response list. | [optional]
 **customer_id** | **string**| The unique ID of the customer. | [optional]
 **store_id** | **string**| The unique ID of the store where customer can apply the reward. | [optional]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse200138**](../Model/InlineResponse200138.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postRewardCreateVoucher**
> \CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20121 postRewardCreateVoucher($body, $reward_id, $accept_language)

Create a new voucher

Create a new voucher for a specific customer based on a reward features definition.<br/>

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\RewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsCreatevoucherBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsCreatevoucherBody | 
$reward_id = "reward_id_example"; // string | The unique ID of the reward.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $result = $apiInstance->postRewardCreateVoucher($body, $reward_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardsApi->postRewardCreateVoucher: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ActionsCreatevoucherBody**](../Model/ActionsCreatevoucherBody.md)|  |
 **reward_id** | **string**| The unique ID of the reward. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

[**\CrmCareCloud\Webservice\RestApi\Client\Model\InlineResponse20121**](../Model/InlineResponse20121.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postRewardSynchronizeProducts**
> postRewardSynchronizeProducts($body, $reward_id, $accept_language)

Set all products that reward can be applied to

Batch process helps to set all products in one request. Request needs to contain all the products, because previous products will be erased.<br/>  ⚠️ Adjust batch sizes based on processing times. We recommended use maximum amount of 1000 records and adjust the batch size based on processing time.<br/> ⚠️ Endpoint is available only in the Enterprise interface.<br/>

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


$apiInstance = new CrmCareCloud\Webservice\RestApi\Client\Api\RewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsSetproductsBody(); // \CrmCareCloud\Webservice\RestApi\Client\Model\ActionsSetproductsBody | 
$reward_id = "reward_id_example"; // string | The unique ID of the reward.
$accept_language = "cs, en-gb;q=0.8"; // string | The unique ID of the language code by ISO 639-1.

try {
    $apiInstance->postRewardSynchronizeProducts($body, $reward_id, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling RewardsApi->postRewardSynchronizeProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\ActionsSetproductsBody**](../Model/ActionsSetproductsBody.md)|  |
 **reward_id** | **string**| The unique ID of the reward. |
 **accept_language** | **string**| The unique ID of the language code by ISO 639-1. | [optional] [default to cs, en-gb;q&#x3D;0.8]

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

