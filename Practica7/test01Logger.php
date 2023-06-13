<?php
require("class.Config.php");
require("class.Logger.php");

//Again, the implementation of this class is left to the user, but an
//example of how it could work will be provided in the code download
//that accompanies the book on wrox.com

$log = Logger::getInstance();

//$log->addConfig('LOGGER_FILE', '/var/log/myapplication.log');
//$log->addConfig('LOGGER_LEVEL', Logger::INFO);


try {
  // Tu código actual
  if (isset($_GET['fooid'])) {
      // ...
  } else {
      // ...
      throw new Exception('No foo id!');
  }
} catch (Exception $e) {
  // Manejar la excepción
  echo 'Se produjo un error: ' . $e->getMessage();
  // O puedes hacer otras acciones, como registrar el error en un archivo de registro.
}
?>