# # StatusResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cod_respuesta** | **string** | Codigo de respuesta (98: en proceso, 99: envío con error, 0: envío OK). | [optional]
**error** | [**\Greenter\Sunat\GRE\Model\StatusResponseError**](StatusResponseError.md) |  | [optional]
**arc_cdr** | **string** | CDR generado (base64) | [optional]
**ind_cdr_generado** | **string** | Indicador de generación de CDR (1: Si genera CDR, 0: No genera CDR). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
