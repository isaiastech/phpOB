<?php
require "vendor/autoload.php";

use app\src\class\UploadFoto;

$upload = new UploadFoto('teste.png');

<<<<<<< HEAD

$upload = new  UploadFoto('foto dois.jpg');


echo $upload->teste();

=======
echo $upload->teste();
>>>>>>> a04e5a7628272c4bb5052968d6abe2221039a755

