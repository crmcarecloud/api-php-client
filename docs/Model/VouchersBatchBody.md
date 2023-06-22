# VouchersBatchBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**vouchers** | [**\CrmCareCloud\Webservice\RestApi\Client\Model\VoucherBatch[]**](VoucherBatch.md) | List of the CareCloud vouchers. | 
**error_processing** | **int** | The parameter describes the batch method behavior in case of error occurs. *Possible values are: 1 - It returns the first error found and rollback all previous changes (this is also the default behavior if the parameter is not set) / 2 - It creates all valid records and creates an error report from failed attempts.* | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

