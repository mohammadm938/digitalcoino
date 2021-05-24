<?php
include_once('simple_html_dom.php');

function scrapper($url)
{

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => $url
    ));

    $response = curl_exec($curl);

    return $response;
}

function scraping_arzdigital($url,$finding,$plan='innertext')
{
    $web = scrapper($url);

    // create HTML DOM
    $html = new simple_html_dom($web);

    $tag_as = $html->find($finding);
    $rai="";
    foreach ($tag_as as $tag_a) {
        $rai=$tag_a->$plan;
    }
    // clean up memory
    $html->clear();
    unset($html);
    return $rai;
}
