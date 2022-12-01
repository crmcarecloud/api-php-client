# CampaignProduct

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**campaign_product_id** | **string** | The unique id of the campaign product | [optional] 
**product_id** | **string** | The unique id of the product | 
**currency_id** | **string** | The unique id of the currency | 
**campaign_id** | **string** | The unique id of the campaign | 
**value** | **float** | Value of the product | 
**value_type_id** | **int** | Type of value (1 - percentage discount value, 2 - final price) | 
**valid_from** | **string** | Valid from *(YYYY-MM-DD HH:MM:SS)* | 
**valid_to** | **string** | Valid to *(YYYY-MM-DD HH:MM:SS)* | 
**display_in** | **string[]** | List of possible display places | [optional] 
**type_id** | **string** | Type of a campaign product | 
**presentation_data** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\CampaignPresentationData**](CampaignPresentationData.md) |  | 
**last_change** | **string** | Date and time of the last change *(YYYY-MM-DD HH:MM:SS)* | [optional] 
**state** | **int** | State of the card *Possible values are: 0 - blocked / 1 - active* | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

