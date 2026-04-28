# CampaignProduct

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**campaign_product_id** | **string** | The unique ID of the campaign product. | [optional] 
**product_id** | **string** | The unique ID of the product. [GET /products](https://carecloud.readme.io/reference/getproducts) | 
**currency_id** | **string** | The unique ID of the currency. [GET /currencies](https://carecloud.readme.io/reference/getcurrencies) | 
**campaign_id** | **string** | The unique ID of the campaign. [GET /campaigns](https://carecloud.readme.io/reference/getcampaigns) | 
**value** | **float** | Value of the product. | 
**value_type_id** | **int** | Type of value (1 - percentage discount value, 2 - final price). | 
**valid_from** | **string** | Timestamp from which the campaign product is valid. Accepts the format &#x60;YYYY-MM-DD HH:MM:SS&#x60; or ISO-8601 format (&#x60;YYYY-MM-DDTHH:MM:SS&#x60;). All times must be in the local timezone. | 
**valid_to** | **string** | Timestamp until which the campaign product is valid. Accepts the format &#x60;YYYY-MM-DD HH:MM:SS&#x60; or ISO-8601 format (&#x60;YYYY-MM-DDTHH:MM:SS&#x60;). All times must be in the local timezone. | 
**display_in** | **string[]** | List of possible display places. | [optional] 
**type_id** | **string** | Type of a campaign product. | 
**presentation_data** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\CampaignPresentationData**](CampaignPresentationData.md) |  | 
**campaign_product_property_records** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\PropertyRecord[]**](PropertyRecord.md) | List of campaign product property records. | [optional] 
**last_change** | **string** | Timestamp of the last change. Format: &#x60;YYYY-MM-DD HH:MM:SS&#x60;. All times are in the local timezone. | [optional] 
**state** | **int** | State of the campaign product. *Possible values are: 0 - blocked / 1 - active* | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

