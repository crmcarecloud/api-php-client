# StamperCard

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**stamper_card_id** | **string** | The unique ID of the stamper card. | [optional] 
**stamper_campaign_id** | **string** | The unique ID of the stamper campaign that the card is part of. The list of stamper campaign is available at [GET /stamper-campaigns](https://carecloud.readme.io/reference/getstampercampaigns) | [optional] 
**customer_id** | **string** | The unique ID of the card holder. | [optional] 
**stamper_card_order** | **int** | An order of the stamper card in the stamper campaign. The stamper campaign can have multiple stamper cards and this parameter determine the order how they were used in the campaign. | [optional] 
**is_filled_up** | **bool** | If true, the card contain all stamps. If false, the card has still free spots for the stamp. | [optional] 
**stamps** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\StamperStamp[]**](StamperStamp.md) | List of all stamps related to the card. | [optional] 
**created_at** | **string** | Date and time when stamper card was created. *(YYYY-MM-DD HH:MM:SS)* | [optional] 
**last_change** | **string** | Date and time of the last change. *(YYYY-MM-DD HH:MM:SS)* | [optional] 
**state** | **int** | State of the card. *Possible values are: 0 - blocked / 1 - active* | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

