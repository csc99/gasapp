<?php

Load::lib('gasapp/gasolineras_lib');
class Gasolineras extends ActiveRecord {

    protected $debug = false;

    /**
     * Guardamos gasolinera
     * @param type $item
     */
    public function saveGasolinera($item = null){
        $gas = new Gasolineras();
        $gasolinera = GasolinerasLib::normalize($gas, $item);
        $id = $gas->getById($gasolinera->idees);
        
        // Comprobamos que exista la gasolinera
        if( count($id) > 0 ){
            $gasolinera->update();
        }else{
            $gasolinera->save();
        }
        die();
    }
    
    /**
     * Obtener gasolinera por ID
     * @param type $id
     * @return type
     */
    public function getById($id = null){
        return $this->find("idees = '$id'");
    }

    
}