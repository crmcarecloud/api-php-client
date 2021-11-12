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
**order_items** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\OrderItem[]**](OrderItem.md) | List of the OrderItems | 
**invoicing_data** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\OrderInvoicing**](OrderInvoicing.md) |  | 
**shipping_data** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\OrderShipping**](OrderShipping.md) |  | [optional] 
**customer_note** | **string** | Customer’s note for the merchant | [optional] 
**order_status** | **string** | Text representation of the order status | [optional] 
**shipping_date** | **string** | Date of the order shipping. If the date is in future, order should be shipped in this date | [optional] 
**program_ranking** | **int** | Rank of order in case of the series of multiple orders | [optional] 
**payment_status** | **string** | Text representation of the payment status | [optional] 
**invoice_document_url** | **string** | URL address with the invoice PDF | [optional] 
**last_change** | **string** | Date and time of the last change *(YYYY-MM-DD HH:MM:SS)* | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

