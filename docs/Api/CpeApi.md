# Greenter\Sunat\GRE\CpeApi

All URIs are relative to https://api-seguridad.sunat.gob.pe/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**consultarEnvio()**](CpeApi.md#consultarEnvio) | **POST** /contribuyente/gem/comprobantes/envios/{numTicket} | Permite realizar la consulta del envío realizado |
| [**enviarCpe()**](CpeApi.md#enviarCpe) | **POST** /contribuyente/gem/comprobantes/{filename} | Permite realizar el envio del comprobante |


## `consultarEnvio()`

```php
consultarEnvio($num_ticket): \Greenter\Sunat\GRE\Model\StatusResponse
```

Permite realizar la consulta del envío realizado



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Greenter\Sunat\GRE\Api\CpeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$num_ticket = 'num_ticket_example'; // string | Número de ticket (UUID) generado por el envío realizado

try {
    $result = $apiInstance->consultarEnvio($num_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CpeApi->consultarEnvio: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **num_ticket** | **string**| Número de ticket (UUID) generado por el envío realizado | |

### Return type

[**\Greenter\Sunat\GRE\Model\StatusResponse**](../Model/StatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enviarCpe()`

```php
enviarCpe($filename, $cpe_document): \Greenter\Sunat\GRE\Model\CpeResponse
```

Permite realizar el envio del comprobante



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: sunat_auth
$config = Greenter\Sunat\GRE\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Greenter\Sunat\GRE\Api\CpeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filename = 'filename_example'; // string | Nombre del archivo sin extension
$cpe_document = new \Greenter\Sunat\GRE\Model\CpeDocument(); // \Greenter\Sunat\GRE\Model\CpeDocument

try {
    $result = $apiInstance->enviarCpe($filename, $cpe_document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CpeApi->enviarCpe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filename** | **string**| Nombre del archivo sin extension | |
| **cpe_document** | [**\Greenter\Sunat\GRE\Model\CpeDocument**](../Model/CpeDocument.md)|  | [optional] |

### Return type

[**\Greenter\Sunat\GRE\Model\CpeResponse**](../Model/CpeResponse.md)

### Authorization

[sunat_auth](../../README.md#sunat_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
