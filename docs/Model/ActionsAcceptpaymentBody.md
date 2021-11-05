# ActionsAcceptpaymentBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**store_id** | **string** | Id of store | 
**cashdesk_number** | **string** | Number of the cashdesk in store | 
**card_number** | **string** | A customer&#x27;s card number | [optional] 
**payment_type** | **string** | Method of the bill closure *Possible values: “S”-standard / “D”- use discount now* | 
**max_points** | **string** | Amount of points to be redeemed | [optional] 
**max_credit** | **string** | Amount of credits to be used | [optional] 
**benefit_codes** | **string[]** | The bill closure will use present codes and recommend discounts | [optional] 
**bill** | [**\CareCloud\Model\Bill**](Bill.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

