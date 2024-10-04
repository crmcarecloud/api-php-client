# FinalBill

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fiscal** | **bool** | Information, whether it is a fiscal bill. | [optional] 
**purchase_type_id** | **string** | Type of the purchase. Values are available in resource [purchase-types](#tag/Purchase-types). | 
**canceled** | **bool** | Information, whether it is the cancellation of the purchase. It is the only parameter that identifies the canceled purchase. All other values are the same as in the original bill. No different values like totalPrice, quantity, paidAmount, and itemPrice are changed nor inverted. | 
**payment_type** | **string** | Payment type changes the checkout process depending on the value of the parameter you can allow/deny the use of benefits. *Possible values are: \&quot;S\&quot; - with standard setup checkout process allows you to collect points, but isn&#x27;t possible to apply overall discounts  / \&quot;A\&quot;- checkout process allows you to collect points and apply overall discounts too / \&quot;C\&quot; - use credits for payment, allows you to collect points, but isn&#x27;t possible to apply overall discounts / \&quot;D\&quot;- will enable you to use overall discounts, but you are not able to collect points with this setup* | 
**payment_recap** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\PaymentRecap**](PaymentRecap.md) |  | [optional] 
**bill_id** | **string** | Identification number of the bill (must be unique in POS, use prefix &#x27;C&#x27; for a canceled bill). | 
**bill_number** | **string** | Alternative identification of the bill. In the case of cancellation, there should be bill_id from the original bill. | [optional] 
**payment_time** | **string** | Date and time of bill creation *Possible value: 2016-06-30T15:51:49+02:00* | 
**created_by** | **string** | Name of the user who created a bill. | [optional] 
**currency_id** | **string** | ID of the currency from resource [currencies](#tag/Currencies). | 
**total_price** | **float** | The total price of the bill as a sum of all items. | 
**utm** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\UTM**](UTM.md) |  | [optional] 
**bill_items** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\BillItem[]**](BillItem.md) | List of bill items. | 
**property_records** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\PropertyRecord[]**](PropertyRecord.md) | List of a purchase property records | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

