<?php

Load::lib('gasapp/curl');
Load::model('gasolineras');

class CronController extends AppController{
    public static $url = "https://sedeaplicaciones.minetur.gob.es/ServiciosRESTCarburantes/PreciosCarburantes/EstacionesTerrestres/";
    
    /**
     * Inicializamos CRON
     */
    public static function initial(){
        self::getGasolineras();
    }
    
    /**
     * Obtenemos gasolineras
     */
    private static function getGasolineras(){
        $gasolineras = json_decode(Curl::get(self::$url), true)['ListaEESSPrecio'];
        
        // Recorremos gasolineras e insertamos en la BBDD
        foreach($gasolineras as $gasolinera){
            Gasolineras::saveGasolinera($gasolinera);
        }
    }
}
