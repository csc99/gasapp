<?php
/**
 * Description of Curl
 *
 */
class Curl {
    
    /**
     * Petición GET
     */
    public static function get($endpoint = "") {
        // Preparamos peticion
        $request = new stdClass();
        $request->method = "GET";
        $request->url = $endpoint;

        // Preparamos las cabeceras
        $request->headers = array(
            'Accept: application/json',
            'Content-Type: application/json'
        );
        
        // Preparamos las opciones
        $request->curl_options = array(
            CURLOPT_URL => $request->url,
            CURLOPT_CUSTOMREQUEST => $request->method,
            CURLOPT_HTTPHEADER => $request->headers
        );

        // Realizamos petición
        $result_curl = self::processCurl($request);
        
        // Devolvemos petición
        return ($result_curl !== false) ? $result_curl : false;
    }

    /**
     * Petición POST
     */
    public static function post($endpoint = "", $data = array()) {

        // Preparamos peticion
        $request = new stdClass();
        $request->method = "POST";
        $request->url = $endpoint;
        $request->data = json_encode($data);

        $request->headers = array(
            'Accept: application/json',
            'Content-Type: application/json',
            'Content-Length: ' . strlen($request->data)
        );

        $request->curl_options = array(
            CURLOPT_URL => $request->url,
            CURLOPT_CUSTOMREQUEST => $request->method,
            CURLOPT_HTTPHEADER => $request->headers,
            CURLOPT_POSTFIELDS => $request->data
        );

        $result_curl = self::processCurl($request);
        
        return ($result_curl !== false) ? $result_curl : false;
    }
    
    /**
     * Procesa una petición CURL
     * @param type $request
     */
    private static function processCurl($request = null) {

        // Abrimos conexión
        try {

            // Preparamos las opciones del Curl
            $curl_default_options = self::prepareCurlOptions($request->curl_options);

            // Iniciamos Curl
            $ch = curl_init();
            curl_setopt_array($ch, $curl_default_options);
            
            // Ejecutamos Curl
            $result = curl_exec($ch);
            // Mostramos error del Curl si lo tiene
            if (curl_errno($ch)) {
                throw new Exception(curl_error($ch));
            }

            // Devolvemos el resultado
            return $result;
        } catch (Exception $e) {
            die("Error al solicitar petición API: <b>" . $e->getMessage() . '</b>');
        }
    }

    /**
     * Prepara las opciones CURL y agrega las opciones por defecto
     * @param type $user_options
     * @return type
     * @throws Exception
     */
    private static function prepareCurlOptions($user_options = array()) {

        $curl_default_options = array(
            //CURLOPT_FAILONERROR => self::_DEBUG,
            CURLINFO_HEADER_OUT => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_TIMEOUT => 60,
            CURLOPT_CONNECTTIMEOUT => 5,
            CURLOPT_SSL_VERIFYPEER => FALSE,
            CURLOPT_SSL_VERIFYHOST => FALSE
        );

        // Evitar usar arra_merge. No mantiene las llaves
        $user_options = $curl_default_options + $user_options;

        return $user_options;
    }


}
