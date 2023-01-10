<?php

namespace Greenter\Sunat\GRE\Api;

use Greenter\Sunat\GRE\Model\CpeDocument;
use Greenter\Sunat\GRE\Model\CpeResponse;
use Greenter\Sunat\GRE\Model\StatusResponse;

interface CpeApiInterface
{
    /**
     * Permite realizar el envio del comprobante.
     *
     * @param string $filename
     * @param CpeDocument $cpe_document
     * @return CpeResponse
     */
    public function enviarCpe(string $filename, CpeDocument $cpe_document): CpeResponse;

    /**
     * Permite realizar la consulta del envío realizado.
     *
     * @param string $ticket
     * @return StatusResponse
     */
    public function consultarEnvio(string $ticket): StatusResponse;
}