<?php

//Replace these with your form variables
$title = 'Test';
$link = 'http://www.sweetlink.com';
$pubDate = date('r');


$pDom = new DOMDocument();
$pRSS = $pDom->createElement('rss');
$pRSS->setAttribute('version', 2.0);

$pDom->appendChild($pRSS);

$pChannel = $pDom->createElement('channel');

$pRSS->appendChild($pChannel);
$pChannel->appendChild($pDom->createElement('title', 'Sweet Rus Links'));
$pChannel->appendChild($pDom->createElement('link', 'http://www.sweetruslinks.com'));
$pChannel->appendChild($pDom->createElement('description', 'Lorem Ipsum Doller...'));
$pChannel->appendChild($pDom->createElement('language', 'en'));
$pChannel->appendChild($pDom->createElement('copyright', 'Copyright 2010 Sweetruslinks.com'));
$pChannel->appendChild($pDom->createElement('lastBuildDate', date('r')));

$pItem  = $pDom->createElement('item');
$pItem->appendChild($pDom->createElement('title', $title));
$pItem->appendChild($pDom->createElement('link', $link));
$pItem->appendChild($pDom->createElement('pubDate', $pubDate));

$pChannel->appendChild($pItem);
    
$xml = new SimpleXMLElement('links.xml', null, true);

foreach ($xml->channel->item as $item) {
    $pItem  = $pDom->createElement('item');
    $pItem->appendChild($pDom->createElement('title', $item->title));
    $pItem->appendChild($pDom->createElement('link', $item->link));
    $pItem->appendChild($pDom->createElement('pubDate', $item->pubDate));
    $pChannel->appendChild($pItem);
}

$pDom->save('links.xml');


echo "done";

?>