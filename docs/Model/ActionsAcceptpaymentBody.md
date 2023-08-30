# ActionsAcceptpaymentBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**store_id** | **string** | ID of the store. | 
**cashdesk_number** | **int** | Number of the cash-desk in the store. | 
**card_number** | **string** | The customer  card number. | [optional] 
**customer_id** | **string** | ID of the customer that made the purchase. You can search customers by plenty parameter in resource customers. | [optional] 
**payment_type** | **string** | Payment type changes the checkout process depending on the value of the parameter you can allow/deny the use of benefits. *Possible values are: \&quot;S\&quot; - with standard setup checkout process allows you to collect points, but isn&#x27;t possible to apply overall discounts  / \&quot;A\&quot;- checkout process allows you to collect points and apply overall discounts too / \&quot;C\&quot; - use credits for payment, allows you to collect points, but isn&#x27;t possible to apply overall discounts / \&quot;D\&quot;- will enable you to use overall discounts, but you are not able to collect points with this setup.* | 
**max_points** | **float** | Amount of points to be redeemed. | [optional] 
**max_credit** | **float** | Amount of credit customer wants to use in the purchase. | [optional] 
**benefit_codes** | **string[]** | The bill closure will use present codes and recommend discounts. | [optional] 
**bill** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\Bill**](Bill.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

