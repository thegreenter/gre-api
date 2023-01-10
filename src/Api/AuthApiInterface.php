<?php

namespace Greenter\Sunat\GRE\Api;

use Greenter\Sunat\GRE\Model\ApiToken;

interface AuthApiInterface
{
    /**
     * Generar un nuevo token.
     *
     * @param string|null $grant_type
     * @param string|null $scope
     * @param string|null $client_id
     * @param string|null $client_secret
     * @param string|null $username
     * @param string|null $password
     * @return ApiToken
     */
    public function getToken(?string $grant_type, ?string $scope, ?string $client_id, ?string $client_secret, ?string $username, ?string $password): ApiToken;
}
