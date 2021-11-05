# Order

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** | The unique id of the order | [optional] 
**order_number** | **string** | External order number. If not set, internal order number will be set | [optional] 
**customer_id** | **string** | The unique id of the customer, owner of the order | 
**currency_id** | **string** | Id of currency | 
**total_price** | **float** | Total price of the order | 
**discount_codes** | **string[]** | Discount codes used in order | [optional] 
**order_items** | [**\CareCloud\Model\OrderItem[]**](OrderItem.md) | List of the OrderItems | 
**invoicing_data** | [**\CareCloud\Model\OrderInvoicing**](OrderInvoicing.md) |  | 
**shipping_data** | [**\CareCloud\Model\OrderShipping**](OrderShipping.md) |  | [optional] 
**customer_note** | **string** | Customer’s note for the merchant | [optional] 
**last_change** | **string** | Date and time of the last change *(YYYY-MM-DD HH:MM:SS)* | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

