# MessageTemplate

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message_template_id** | **string** | The unique ID of the message_template. | [optional] 
**consent_free_template** | **bool** | If true, customer can receive message without any consent(GDPR, etc.). | [optional] 
**subject** | **string** | Subject of the message template. Mandatory only in case of email template. | 
**sender** | **string** | Sender of the message template. | 
**name** | **string** | Name of the message template. | 
**message_template_group_id** | **int** | The unique ID of the message template group. *Possible values are: 1 - newsletter template / 2 - system template (registration message, order summary message, etc.) / 3 - transactional communication (for hotel, traveling,...)* | 
**communication_channel_id** | **int** | The unique ID of the communication channel. *Possible values are: 1 - email / 2 - SMS / 4 - PUSH notification (Apple or Google)/ 5 - internal system notification / 9 - Viber messages* | 
**template_data** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\Parameter[]**](Parameter.md) | Template data could contains array of customized parameters. They may have influence on template display or add values to template. | [optional] 
**last_change** | **string** | Date and time of the last change. *(YYYY-MM-DD HH:MM:SS)* | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

