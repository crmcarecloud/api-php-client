# FinalBill

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fiscal** | **bool** | Information, whether it is a fiscal bill | 
**purchase_type_id** | **int** | Type of the purchase. Values are available in resource [purchase-types](#tag/Purchase-types) | 
**canceled** | **bool** | Information, whether it is the cancellation of the purchase. It is the only parameter that identifies the canceled purchase. All other values are the same as in the original bill. No different values like totalPrice, quantity, paidAmount, and itemPrice are changed nor inverted. | 
**payment_type** | **string** | The method of the bill closure. *Possible values are: “S” - standard / “P”- use points for payment / “C” - use credits for payment / “D”- use discount now* | 
**payment_recap** | [**\CareCloud\Model\PaymentRecap**](PaymentRecap.md) |  | [optional] 
**bill_id** | **string** | Identification number of the bill (must be unique in POS, use prefix &#x27;C&#x27; for a canceled bill) | 
**bill_number** | **string** | Alternative identification of the bill. In the case of cancelation, there should be bill_id from the original bill. | [optional] 
**payment_time** | **string** | Date and time of bill creation *Possible value: 2016-06-30T15:51:49+02:00* | 
**created_by** | **string** | Name of the user who created a bill | [optional] 
**currency_id** | **string** | Id of the currency from resource [currencies](#tag/Currencies) | 
**total_price** | **float** | The total price of the bill as a sum of all items | 
**utm** | [**\CareCloud\Model\UTM**](UTM.md) |  | [optional] 
**bill_items** | [**\CareCloud\Model\BillItem[]**](BillItem.md) | List of bill items | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

