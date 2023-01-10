# Greenter GRE Api

PLATAFORMA NUEVA GRE.

### Requerimientos

- PHP 7.4 o posterior.
- `curl` extension

### Instalacion

Instalar via [Composer](https://getcomposer.org/):

```bash
composer require greenter/gre-api
```

## Uso

Primero es necesario obtener el client_id, client_secret desde el portal de SUNAT, puedes seguir la [guía oficial](https://cpe.sunat.gob.pe/sites/default/files/inline-files/Manual_Servicios_GRE.pdf).

```php
<?php
$apiInstance = new Greenter\Sunat\GRE\Api\AuthApi(
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // El client_id generado en menú sol
$grant_type = 'password';
$scope = 'https://api-cpe.sunat.gob.pe';
$client_secret = 'client_secret_example'; // client_secret generado en menú sol
$username = 'username_example'; // <Numero de RUC> + <Usuario SOL>
$password = 'password_example'; // Contraseña SOL

try {
    $result = $apiInstance->getToken($grant_type, $scope, $client_id, $client_secret, $username, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Excepcion cuando invocaba AuthApi->getToken: ', $e->getMessage(), PHP_EOL;
}

```

Enviar comprobante
```php
$config = Greenter\Sunat\GRE\Configuration::getDefaultConfiguration()
    ->setAccessToken($token);

$cpeApi = new Greenter\Sunat\GRE\Api\CpeApi(
    new GuzzleHttp\Client(),
    $config->setHost('https://api.sunat.gob.pe/v1')
);

$greZip = file_get_contents('20161515648-09-T001-124.zip');
$doc = (new Greenter\Sunat\GRE\Model\CpeDocument())
    ->setArchivo((new Greenter\Sunat\GRE\Model\CpeDocumentArchivo())
        ->setNomArchivo('20161515648-09-T001-124.zip')
        ->setArcGreZip(base64_encode($greZip))
        ->setHashZip(hash('sha256', $greZip))
    );
$result = $cpeApi->enviarCpe('20161515648-09-T001-124', $doc);
$ticket = $result->getNumTicket();
```

## Doc Models

- [ApiToken](docs/Model/ApiToken.md)
- [CpeDocument](docs/Model/CpeDocument.md)
- [CpeDocumentArchivo](docs/Model/CpeDocumentArchivo.md)
- [CpeError](docs/Model/CpeError.md)
- [CpeErrorValidation](docs/Model/CpeErrorValidation.md)
- [CpeResponse](docs/Model/CpeResponse.md)
- [StatusResponse](docs/Model/StatusResponse.md)
- [StatusResponseError](docs/Model/StatusResponseError.md)
