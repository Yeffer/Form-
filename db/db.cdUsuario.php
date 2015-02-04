<?php
/**
 * Table Definition for cd_usuario
 */

class DataObject_CdUsuario extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'cd_usuario';                      // table name
    public $id;                              // int(11)  not_null primary_key
    public $nombre;                          // string(150)  
    public $apellido;                        // string(150)  
    public $cedula;                          // string(150)  not_null unique_key
    public $fechaNacimiento;                 // datetime(19)  binary
    public $genero;                          // string(2)  
    public $email;                           // string(200)  
    public $celular;                         // string(150)  
    public $telefono;                        // string(200)  
    public $direccion;                       // string(200)  
    public $lugarVotacion;                   // string(300)  
    public $tipoLugar;                       // string(200)  
    public $referido;                        // string(300)  
    public $tipoUsuario;                     // string(2)  
    public $libretaNumero;                   // string(150)  
    public $libretaTipo;                     // int(11)  
    public $libretaDistrito;                 // string(200)  
    public $tipoExperiencia;                 // string(200)  
    public $tiempoExperiencia;               // string(100)  
    public $unidadTiempo;                    // string(100)  
    public $idMunicipioAspitante;            // string(100)  
    public $idMunicipio;                     // int(11)  not_null primary_key
    public $idOcupacion;                     // int(11)  not_null primary_key
    public $idCargo;                         // int(11)  not_null primary_key
    public $idNivelEducacion;                // int(11)  not_null primary_key
    public $idPais;                          // int(11)  not_null primary_key
    public $idDepartamento;                  // int(11)  not_null primary_key
    public $fecha;                           // datetime(19)  binary

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObject_CdUsuario',$k,$v); }

    function table()
    {
         return array(
             'id' =>  DB_DATAOBJECT_INT + DB_DATAOBJECT_NOTNULL,
             'nombre' =>  DB_DATAOBJECT_STR,
             'apellido' =>  DB_DATAOBJECT_STR,
             'cedula' =>  DB_DATAOBJECT_STR + DB_DATAOBJECT_NOTNULL,
             'fechaNacimiento' =>  DB_DATAOBJECT_STR + DB_DATAOBJECT_DATE + DB_DATAOBJECT_TIME,
             'genero' =>  DB_DATAOBJECT_STR,
             'email' =>  DB_DATAOBJECT_STR,
             'celular' =>  DB_DATAOBJECT_STR,
             'telefono' =>  DB_DATAOBJECT_STR,
             'direccion' =>  DB_DATAOBJECT_STR,
             'lugarVotacion' =>  DB_DATAOBJECT_STR,
             'tipoLugar' =>  DB_DATAOBJECT_STR,
             'referido' =>  DB_DATAOBJECT_STR,
             'tipoUsuario' =>  DB_DATAOBJECT_STR,
             'libretaNumero' =>  DB_DATAOBJECT_STR,
             'libretaTipo' =>  DB_DATAOBJECT_INT,
             'libretaDistrito' =>  DB_DATAOBJECT_STR,
             'tipoExperiencia' =>  DB_DATAOBJECT_STR,
             'tiempoExperiencia' =>  DB_DATAOBJECT_STR,
             'unidadTiempo' =>  DB_DATAOBJECT_STR,
             'idMunicipioAspitante' =>  DB_DATAOBJECT_STR,
             'idMunicipio' =>  DB_DATAOBJECT_INT + DB_DATAOBJECT_NOTNULL,
             'idOcupacion' =>  DB_DATAOBJECT_INT + DB_DATAOBJECT_NOTNULL,
             'idCargo' =>  DB_DATAOBJECT_INT + DB_DATAOBJECT_NOTNULL,
             'idNivelEducacion' =>  DB_DATAOBJECT_INT + DB_DATAOBJECT_NOTNULL,
             'idPais' =>  DB_DATAOBJECT_INT + DB_DATAOBJECT_NOTNULL,
             'idDepartamento' =>  DB_DATAOBJECT_INT + DB_DATAOBJECT_NOTNULL,
             'fecha' =>  DB_DATAOBJECT_STR + DB_DATAOBJECT_DATE + DB_DATAOBJECT_TIME,
         );
    }

    function keys()
    {
         return array('id', 'cedula', 'idMunicipio', 'idOcupacion', 'idCargo', 'idNivelEducacion', 'idPais', 'idDepartamento');
    }

    function sequenceKey() // keyname, use native, native name
    {
         return array('id', true, false);
    }

    function defaults() // column default values 
    {
         return array(
             'nombre' => '',
             'apellido' => '',
             'cedula' => '',
             'genero' => '',
             'email' => '',
             'celular' => '',
             'telefono' => '',
             'direccion' => '',
             'lugarVotacion' => '',
             'tipoLugar' => '',
             'referido' => '',
             'tipoUsuario' => '',
             'libretaNumero' => '',
             'libretaDistrito' => '',
             'tipoExperiencia' => '',
             'tiempoExperiencia' => '',
             'unidadTiempo' => '',
             'idMunicipioAspitante' => '',
         );
    }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
