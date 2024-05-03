# PersonalInformation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**salutation** | **string** | Customer&#x27;s salutation. If it is not set in POST or PUT calls, it will be generated automatically. | [optional] 
**gender** | **int** | Gender of the customer *Possible values: 1 - Male / 2 - Female / 3 - Miss / 4 - Private / 5 - Other / null - Not set * | [optional] 
**first_name** | **string** | First name of the customer. | [optional] 
**last_name** | **string** | Last name of the customer. | [optional] 
**pre_nominals** | **string** | Academic degrees, academic titles, other titles of customer placed before name. | [optional] 
**post_nominals** | **string** | Academic degrees, academic titles, other titles of customer placed after name. | [optional] 
**birthdate** | [**\DateTime**](\DateTime.md) | Customer&#x27;s date of birth. *(YYYY-MM-DD)* | [optional] 
**email** | **string** | Email of the customer. | [optional] 
**phone** | **string** | Phone number of the customer with international prefix (420000000000). | [optional] 
**language_id** | **string** | The unique ID of the language by ISO 639-1 code. | 
**store_id** | **string** | The unique ID of the original customer account store of registration. In case of the customer update, the request cant delete the parameter&#x27;s value. Only updated. | [optional] 
**photo_url** | **string** | URL address of the customer photo. If customer has no photo, this parameter is not send. | [optional] 
**address** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\Address**](Address.md) |  | [optional] 
**agreement** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\Agreement**](Agreement.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

