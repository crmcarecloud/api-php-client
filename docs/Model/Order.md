# Order

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** | The unique ID of the order. | [optional] 
**order_number** | **string** | External order number. If not set, internal order number will be set. | [optional] 
**customer_id** | **string** | The unique ID of the customer, owner of the order. [GET /customers](https://carecloud.readme.io/reference/getcustomers) | 
**currency_id** | **string** | The unique ID of the currency. [GET /currencies](https://carecloud.readme.io/reference/getcurrencies) | 
**total_price** | **float** | Total price of the order. | 
**discount_codes** | **string[]** | Discount codes used in the order. | [optional] 
**order_items** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\OrderItem[]**](OrderItem.md) | List of the OrderItems. | 
**invoicing_data** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\OrderInvoicing**](OrderInvoicing.md) |  | 
**shipping_data** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\OrderShipping**](OrderShipping.md) |  | [optional] 
**customer_note** | **string** | Customer’s note for the merchant. | [optional] 
**order_status** | **string** | Text representation of the order status. | [optional] 
**shipping_date** | **string** | Timestamp of the order shipping. If the date is in the future, the order will be shipped on that date. Format: &#x60;YYYY-MM-DD HH:MM:SS&#x60;. All times are in the local timezone. | [optional] 
**program_ranking** | **int** | Rank of order in case of the series of multiple orders. | [optional] 
**payment_status** | **string** | Text representation of the payment status. | [optional] 
**invoice_document_url** | **string** | URL address with the invoice PDF. | [optional] 
**last_change** | **string** | Timestamp of the last change. Format: &#x60;YYYY-MM-DD HH:MM:SS&#x60;. All times are in the local timezone. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

