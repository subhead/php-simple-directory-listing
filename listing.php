<html><head><title>Directory Listing</title></head><body><table width="193" height="87" border="1">
<?php
function showdir ($path)
{
    echo "<tr><th colspan=10 align=left> Inhalt von Verzeichnis ", $path, "</th></tr>", "\n";
    $dirs = $files = array();
    $dir = opendir ($path);
    while ($entry = readdir($dir))
    if (is_dir($entry))
        $dirs []= $entry;
    else 
        $files []= $entry;
    fclose ($dir);
    //anzeigen
    sort ($dirs);
    for ($i=0; $i<count($dirs); $i++)
        echo "<tr><td>", $dirs[$i], "</td><td>&lt;DIR&gt;</td></tr>", "\n";
    sort ($files);
    for ($i=0; $i<count($files); $i++)
        echo "<tr><td>", $files[$i], "</td><td align=right>", filesize ($files[$i]), "</td></tr>", "\n";
}
showdir ('.');
?> 
