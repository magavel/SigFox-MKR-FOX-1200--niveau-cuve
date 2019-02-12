<?PHP
// Création de la chaine contenant les données
$data = '';
$data .=  htmlspecialchars($_GET["id"]).PHP_EOL;
$data .=  htmlspecialchars($_GET["data"]).PHP_EOL;
$time =  htmlspecialchars($_GET["time"]).PHP_EOL;

// Création du nom de fihier horodaté
$name = 'data_'.date('Y-m-d H:i:s').'.txt';

$maj = fopen($name,"w+");     // On ouvre le fichier en ecriture
fseek($maj,0);                // On se place en debut de fichier
fputs($maj, $data);           // On ecrit dans le fichier la chaine $data
fputs($maj, $time);           // On ecrit dans le fichier la chaine $time
fclose($maj);                 // On ferme le fichier