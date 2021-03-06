# PersonalInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**salutation** | **string** | Customer&#x27;s salutation. If it is not set in POST or PUT calls, it will be generated automatically. | [optional] 
**gender** | **int** | Gender of the customer *Possible values: 1 - male, 2 - female* | [optional] 
**first_name** | **string** | First name of the customer | [optional] 
**last_name** | **string** | Last name of the customer | [optional] 
**birthdate** | [**\DateTime**](\DateTime.md) | Customer&#x27;s date of birth (YYYY-MM-DD) | [optional] 
**email** | **string** | Email of the customer | [optional] 
**phone** | **string** | Phone number of the customer with international prefix (420000000000) | [optional] 
**language_id** | **string** | The unique id for the language by ISO 639 code | 
**store_id** | **string** | The unique id for the original customer account store of registration | [optional] 
**photo_url** | **string** | URL address of the customer photo. If customer has no photo, this parameter is not send | [optional] 
**address** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\Address**](Address.md) |  | [optional] 
**agreement** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\Agreement**](Agreement.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

