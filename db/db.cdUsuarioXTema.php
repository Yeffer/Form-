<?php
/**
 * Table Definition for cd_usuario_x_tema
 */

class DataObject_CdUsuarioXTema extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'cd_usuario_x_tema';               // table name
    public $idUsuario;                       // int(11)  not_null primary_key
    public $idMunicipio;                     // int(11)  not_null primary_key
    public $idOcupacion;                     // int(11)  not_null primary_key
    public $idCargo;                         // int(11)  not_null primary_key
    public $idNivelEducacion;                // int(11)  not_null primary_key
    public $idTema;                          // int(11)  not_null primary_key
    public $fecha;                           // datetime(19)  binary

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObject_CdUsuarioXTema',$k,$v); }

    function table()
    {
         return array(
             'idUsuario' =>  DB_DATAOBJECT_INT + DB_DATAOBJECT_NOTNULL,
             'idMunicipio' =>  DB_DATAOBJECT_INT + DB_DATAOBJECT_NOTNULL,
             'idOcupacion' =>  DB_DATAOBJECT_INT + DB_DATAOBJECT_NOTNULL,
             'idCargo' =>  DB_DATAOBJECT_INT + DB_DATAOBJECT_NOTNULL,
             'idNivelEducacion' =>  DB_DATAOBJECT_INT + DB_DATAOBJECT_NOTNULL,
             'idTema' =>  DB_DATAOBJECT_INT + DB_DATAOBJECT_NOTNULL,
             'fecha' =>  DB_DATAOBJECT_STR + DB_DATAOBJECT_DATE + DB_DATAOBJECT_TIME,
         );
    }

    function keys()
    {
         return array('idUsuario', 'idMunicipio', 'idOcupacion', 'idCargo', 'idNivelEducacion', 'idTema');
    }

    function sequenceKey() // keyname, use native, native name
    {
         return array('id', true, false);
    }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
