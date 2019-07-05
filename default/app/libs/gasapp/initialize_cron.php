<?php
Load::lib('smdirecto/curl');

class CronGasolineras{
    public $url = "https://sedeaplicaciones.minetur.gob.es/ServiciosRESTCarburantes/PreciosCarburantes/EstacionesTerrestres/";
    
    /**
     * Inicializamos CRON
     */
    public static function initialize(){
        self::getGasolineras();
    }
    
    /**
     * Obtenemos gasolineras
     */
    private static function getGasolineras(){
        $result = Curl::get(self::$url);
        var_dump($result);die();
    }
}

CronGasolineras::initialize();
