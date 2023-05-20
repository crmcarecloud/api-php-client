# Bill

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bill_id** | **string** | Identification number of the bill (must be unique in POS, use prefix &#x27;C&#x27; for a canceled bill). | 
**bill_number** | **string** | Alternative identification of the bill. In the case of cancelation, there should be bill_id from the original bill. | [optional] 
**payment_time** | **string** | Date and time of bill creation. *Possible value: 2016-06-30T15:51:49+02:00* | 
**created_by** | **string** | Name of the user who created a bill. | [optional] 
**currency_id** | **string** | ID of the currency from resource [currencies](#tag/Currencies). | 
**total_price** | **float** | The total price of the bill as a sum of all items. | 
**bill_items** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\BillItem[]**](BillItem.md) | List of bill items. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

