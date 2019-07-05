<?php

class GasolinerasLib {
    
    /**
     * Normalizamos gasolinera
     * @param type $item
     */
    public static function normalize($gasolinera = null, $item = null){
        
        $gasolinera->idees = $item['IDEESS'];
        $gasolinera->direccion = $item['Dirección'];
        $gasolinera->horario = $item['Horario'];
        $gasolinera->latitud = $item['Latitud'];
        $gasolinera->longitud = $item['Longitud (WGS84)'];
        $gasolinera->localidad = $item['Localidad'];
        $gasolinera->municipio = $item['Municipio'];
        $gasolinera->provincia = $item['Provincia'];
        $gasolinera->rotulo = $item['Rótulo'];
        $gasolinera->id_municipio = $item['IDMunicipio'];
        $gasolinera->id_provincia = $item['IDProvincia'];
        $gasolinera->id_ccaa = $item['IDCCAA'];
        
        return $gasolinera;
    }
}