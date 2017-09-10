<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ManejolDatos
 *
 * @author jdpra
 */

require('ConectorDB.php');

class ManejoDatos {
    //put your code here
    private $adminDB;
    private $DB;


    public function ManejoDatos(){
        $this->DB = "matriculas_ai_copy";
        $this->adminDB = new ConectorBD();
    }
    
    public function insertarDatosMatricula($nuevo, $per_id_, $per_nombres_, $per_ape1_, $per_ape2_, $per_estrato_, $mat_programa_, $nov_detalle_, $nov_cod_, $loc_mun_){
        $query = "CALL insertar_persona(".$nuevo.", ".$per_id_.", '".$per_nombres_."', '".$per_ape1_."', '".$per_ape2_.
               "', ".$per_estrato_.", ".$mat_programa_.",  '"."$nov_detalle_"."', ".$nov_cod_.", ".$loc_mun_.");";
        
        $this->adminDB->realizar_consulta($query, $this->DB);
        
        
    }
    
    public function extraerListas($lista){        
        $query = "";
        switch ($lista){
            case 1:
                $query = "SELECT * FROM programas;";
                break;
            case 2:
                $query = "SELECT * FROM novedades_tipo;";
                break;
            case 3:
                $query = "SELECT * FROM municipios;";
                break;
        }        
        $resulSet = $this->adminDB->realizar_consulta($query, $this->DB);
        $arreglo = null;
        $i = 0;
        while ($row = mysqli_fetch_assoc($resulSet)){
            switch ($lista){
                case 1:
                    $arreglo[$i]["id"] = $row["prog_codigo"];
                    $arreglo[$i]["nombre"] = $row["prog_nombre"];
                    break;
                case 2:
                    $arreglo[$i]["id"] = $row["nov_codigo"];
                    $arreglo[$i]["nombre"] = $row["nov_tipo"];                    
                    break;
                case 3:
                    $arreglo[$i]["id"] = $row["mun_codigo"];
                    $arreglo[$i]["nombre"] = $row["mun_nombre"];
                    break;
            }
        }        
        return $arreglo;
    }
    
}
