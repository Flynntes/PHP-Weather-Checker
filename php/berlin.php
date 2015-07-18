<?php
$doc = new DOMDocument();
$doc->load('http://weather.yahooapis.com/forecastrss?p=GMXX0007&u=c');
$channel = $doc->getElementsByTagName("channel");
foreach($channel as $chnl)
{
$item = $chnl->getElementsByTagName("item");
foreach($item as $itemgotten)
{
$describe = $itemgotten->getElementsByTagName("description");
$description = $describe->item(0)->nodeValue;
echo "<p style='font-family: Arial, Helvetica, sans-serif; text-align: center;'>".$description."</p>";
}
}
?>