<?

echo "Data captured successfully\n";


//Capture URL uploaded by user
$link = $_POST["url"];
$verify = mb_substr($link, 0, 24);

if ($verify == 'https://gpay.app.goo.gl/') {

//Process URL uploaded by user
$writetofile = fopen('huatpals-api.txt', 'a'); //Opens file in append mode
fwrite($writetofile, $link.','); //Writes to file
fclose($writetofile);

echo "Data recorded successfully";

} else {
echo "Input failed data sanitisation check.";
header('HTTP/3.0 403 Forbidden');
};

?>