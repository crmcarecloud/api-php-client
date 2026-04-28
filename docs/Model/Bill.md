# Bill

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bill_id** | **string** | Identification number of the purchase created in the production system like POS, e-commerce solution or ERP (The ID must be unique in the production system). In case you want to send cancelled purchase, please use prefix &#x60;C&#x60; for the original purchase ID. Example: &#x60;&#x60;&#x60; Original purchase ID: 39475X Canceled purchase ID: C39475X &#x60;&#x60;&#x60; | 
**bill_number** | **string** | Alternative identification of the bill. In the case of cancellation, there should be bill_id from the original bill. | [optional] 
**payment_time** | **string** | Timestamp of the payment. Accepts the format &#x60;YYYY-MM-DD HH:MM:SS&#x60; or ISO-8601 format (&#x60;YYYY-MM-DDTHH:MM:SS&#x60;). All times must be in the local timezone. | 
**created_by** | **string** | Name of the user who created a bill. | [optional] 
**currency_id** | **string** | ID of the currency from resource [currencies](https://carecloud.readme.io/reference/getcurrencies). | 
**total_price** | **float** | The total price of the bill as a sum of all items. | 
**bill_items** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\BillItem[]**](BillItem.md) | List of bill items. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

