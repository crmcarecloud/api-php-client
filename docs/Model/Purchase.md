# Purchase

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**purchase_id** | **string** | The unique id of the purchase | [optional] 
**customer_id** | **string** | The unique id for the customer. | 
**store_id** | **string** | The unique id of the store in CareCloud | 
**external_purchase_id** | **string** | The external unique id of the purchase | 
**payment_time** | **string** | Date and time of the purchase payment *(YYYY-MM-DD HH:MM:SS)* | 
**items_count** | **int** | Count of the purchase items | 
**purchase_items** | [**\CareCloud\Model\PurchaseItem[]**](PurchaseItem.md) | List of all items of the purchase. Data is returned if query parameter purchase_items_extension has value true in the query string of the request. | [optional] 
**type_id** | **string** | Purchase type | 
**total_price** | **float** | Total price of the purchase | 
**currency_id** | **string** | The unique id of the currency | 
**card_number** | **string** | Purchasing customer card number | [optional] 
**cashdesk_number** | **string** | Number of the cashdesk | 
**last_change** | **string** | Date and time of the last change *(YYYY-MM-DD HH:MM:SS)* | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

