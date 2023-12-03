<?php

require_once 'clases/RecaudoService.php';

class ServiceSOAP
{
    private $recaudoService;

    public function __construct()
    {
        // Configuración de la conexión a la base de datos
        $host = "localhost";
        $usuario = "root";
        $contrasena = "12345678";
        $base_de_datos = "neardb";

        // Crear una instancia de RecaudoService
        $this->recaudoService = new RecaudoService($host, $usuario, $contrasena, $base_de_datos);
    }

    public function obtenerRecaudosPendientes()
    {
        // Llamar al método correspondiente en RecaudoService
        return (object) ['resultado' => $this->recaudoService->obtenerRecaudosPendientes()];
    }

    public function cerrarConexion()
    {
        $this->recaudoService->cerrarConexion();
    }
}

// Crear el servidor SOAP
$wsdlConfig = array(
    'uri' => 'http://localhost/phpapplication/ServiceSOAP.php',
    'encoding' => 'UTF-8',
    'soap_version' => SOAP_1_2,
);

$wsdlFile = 'wsdl/recaudo.wsdl';
$server = new SoapServer($wsdlFile, $wsdlConfig);
$server->setClass('ServiceSOAP');
