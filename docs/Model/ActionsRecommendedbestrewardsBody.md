# ActionsRecommendedbestrewardsBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**store_id** | **string** | ID of the store. | 
**cashdesk_number** | **int** | Number of the cash-desk in the store. | 
**card_number** | **string** | The customer card number. | [optional] 
**customer_id** | **string** | ID of the customer that made the purchase. You can search customers by plenty parameter in the resource customers. | [optional] 
**reward_list_type** | **string** | Type of the rewards. *Possible values: F - full (all manual rewards available and valid of the specific POS)/ C -condensed (only manual rewards corresponding to items on the bill - maxCount not equals zero)/ A - all rewards list including automatic apply this is only for the DATA CUBE* | 
**bill** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\Bill**](Bill.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

