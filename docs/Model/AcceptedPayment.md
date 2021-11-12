# AcceptedPayment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**recommended_discounts** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\DiscountItem[]**](DiscountItem.md) | The list of offered discounts excludes rewards (Loyalty Status Discount) | [optional] 
**credit_points** | **float** | Amount of used points | [optional] 
**price_of_credit_points** | **float** | Amount of money corresponding to the number of used points | [optional] 
**credit** | **float** | Amount of used credits | [optional] 
**benefit_codes** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\PaymentVoucher[]**](PaymentVoucher.md) | List of applied vouchers on the current bill (includes the value of discount) independent of DiscountItem | [optional] 
**credit_points_of_this_transaction** | **float** | Sum of points gained from this transaction | [optional] 
**total_credit_points** | **float** | Amount of the points on the customer account (after the recent purchase is closed) | [optional] 
**total_credit** | **float** | Amount of the credits on the customer account (after the recent purchase is closed) | [optional] 
**messages** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\CashierMessage[]**](CashierMessage.md) | A recommendation messages for the cashier in his language localization | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

