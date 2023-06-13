<?php
require("abstract.databoundobject.php");
require("class.pdofactory.php");
class language extends DataBoundObject{


    protected $name;
    protected $last_update;

    protected function DefineTableName() {
        return("language");
    }

    protected function DefineRelationMap(){
        return(array(
          
            "name" => "name",
            "last_update" => "last_update",
        "languaje_id" => "ID"
        ));
    }


     public function __toString()
     {
         $languageinfo = 'Idioma' . $this->name . PHP_EOL;
         $languageinfo .= 'Ultima actualizacion : ' . $this->last_update . PHP_EOL;
 
         return $languageinfo;
     }
}




$strDSN = "pgsql:dbname=chatpac2;host=localhost;port=5432";
$objPDO = PDOFactory::GetPDO($strDSN, "postgres", "root", array());
$objPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$language = new language($objPDO,285);
$language->Load();

//$language->setname('Aleman')->setlast_update('31 de Agosto')->save();

print $language;




?>