<?php


$xml = new SimpleXMLElement('links.xml', null, true);
$d = date('m/d/Y');
$counter = 0;
$html = '';

foreach ($xml->channel->item as $item) {
	if (date('m/d/Y', strtotime($item->pubDate)) != $d || $counter === 0)	{
		if ($counter > 0) $html .= "</ul>\n\n";
		$html .= "<h2>" . date('l, F j, Y', strtotime($item->pubDate)) . "</h2>\n<ul>\n";
	}
	
	$html .= "\t<li><a href='" . $item->link . "'>" . $item->title . "</a></li>\n";
	$counter++;
}

$html .= "</ul>";

echo $html;

?>