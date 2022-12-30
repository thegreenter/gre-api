# Greenter\Sunat\GRE\AuthApi

All URIs are relative to https://api-seguridad.sunat.gob.pe/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getToken()**](AuthApi.md#getToken) | **POST** /clientessol/{client_id}/oauth2/token/ | Generar un nuevo token |


## `getToken()`

```php
getToken($client_id, $grant_type, $scope, $client_id2, $client_secret, $username, $password): \Greenter\Sunat\GRE\Model\ApiToken
```

Generar un nuevo token



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Greenter\Sunat\GRE\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string | El client_id generado en menú sol
$grant_type = 'password'; // string
$scope = 'https://api-cpe.sunat.gob.pe'; // string
$client_id2 = 'client_id_example'; // string | client_id generado en menú sol
$client_secret = 'client_secret_example'; // string | client_secret generado en menú sol
$username = 'username_example'; // string | <Numero de RUC> + <Usuario SOL>
$password = 'password_example'; // string | Contrasena SOL

try {
    $result = $apiInstance->getToken($client_id, $grant_type, $scope, $client_id2, $client_secret, $username, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->getToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**| El client_id generado en menú sol | |
| **grant_type** | **string**|  | [default to &#39;password&#39;] |
| **scope** | **string**|  | [default to &#39;https://api-cpe.sunat.gob.pe&#39;] |
| **client_id2** | **string**| client_id generado en menú sol | |
| **client_secret** | **string**| client_secret generado en menú sol | |
| **username** | **string**| &lt;Numero de RUC&gt; + &lt;Usuario SOL&gt; | |
| **password** | **string**| Contrasena SOL | |

### Return type

[**\Greenter\Sunat\GRE\Model\ApiToken**](../Model/ApiToken.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
