# Purchase

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**purchase_id** | **string** | The unique ID of the purchase. | [optional] 
**customer_id** | **string** | The unique ID of the customer. | 
**store_id** | **string** | The unique ID of the store in CareCloud. | 
**external_purchase_id** | **string** | The external unique ID of the purchase. | 
**payment_time** | **string** | Date and time of the purchase payment. *(YYYY-MM-DD HH:MM:SS)* | 
**items_count** | **int** | Count of the purchase items. | 
**purchase_items** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\PurchaseItem[]**](PurchaseItem.md) | List of all items of the purchase. Data is returned if query parameter purchase_items_extension has value true in the query string of the request. | [optional] 
**type_id** | **string** | Purchase type. | 
**total_price** | **float** | Total price of the purchase. | 
**currency_id** | **string** | The unique ID of the currency. | 
**card_number** | **string** | Purchasing customer card number. | [optional] 
**cashdesk_number** | **string** | Number of the cash-desk | 
**last_change** | **string** | Date and time of the last change. *(YYYY-MM-DD HH:MM:SS)* | [optional] 
**purchase_property_records** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\PropertyRecord[]**](PropertyRecord.md) | List of purchase property records. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

