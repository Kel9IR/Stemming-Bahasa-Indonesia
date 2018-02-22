<?php
include ( 'vendor/pdf2text/PdfToText.phpclass' ) ;
require_once __DIR__ . '/vendor/autoload.php';
 
 $target = "datapdf/";
 
 $targetfolder = $target . basename( $_FILES['file']['name']) ;
 
if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))
 
 {
 
 //echo "The file ". basename( $_FILES['file']['name']). " is uploaded";
 
$stemmerFactory = new \Sastrawi\Stemmer\StemmerFactory();
$stemmer  = $stemmerFactory->createStemmer();

$stopWordRemoverFactory = new \Sastrawi\StopWordRemover\StopWordRemoverFactory();
$remover  = $stopWordRemoverFactory->createStopWordRemover();

$file = $target . basename($_FILES['file']['name']) ; 
$pdf = new PdfToText ( "$file" ) ;

echo $stemmer->stem($remover->remove($pdf)) . "\n";
 
 }
 
 else {
 
 echo "Problem uploading file";
 
 }
 
 ?>