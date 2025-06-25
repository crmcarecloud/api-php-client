# ActionsAssigncustomerBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**store_id** | **string** | ID of the store. | 
**external_purchase_id** | **string** | A unique identifier for an existing purchase in the production system (e.g., E-commerce, POS, ERP). This ID must be unique within the system and reference an actual purchase or order.  If the purchase was created in CareCloud using the CareCloud API, use the same value as the bill_id parameter from the [POST /send-purchase](https://carecloud.readme.io/reference/postpurchasesend) endpoint. | 
**card_number** | **string** | Number of the customer  card. Parameter is mandatory only if customer_id is not set. | [optional] 
**customer_id** | **string** | The unique ID of the customer. Parameter is mandatory only if card_number is not set. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

