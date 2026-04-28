# ActionsRecommendedbestrewardsBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**store_id** | **string** | The store ID identifies the store or business unit that will close the purchase for the customer. The list of all stores is available at the endpoint [GET /stores](https://carecloud.readme.io/reference/getstores) | 
**cashdesk_number** | **int** | Number of the cash desk in the store. Used to identify a specific cash desk when multiple are available. | 
**card_number** | **string** | The customer card number. | [optional] 
**customer_id** | **string** | ID of the customer who is closing the purchase. You can search for customers by various parameters in the [GET /customers](https://carecloud.readme.io/reference/getcustomers) endpoint. | [optional] 
**reward_list_type** | **string** | Specifies the type of rewards to be listed in the response. Possible values:  - F (full) - All manual rewards that are valid in the defined store  - C (condensed) -  Returns manual rewards that are related to the items from provided purchase. If application is not possible, the reward is not returned.  - A (all) -  List of all available rewards on the project (including automatic rewards). Extended information about rewards is available at the endpoint [GET /rewards](https://carecloud.readme.io/reference/getrewards) | 
**bill** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\Bill**](Bill.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

