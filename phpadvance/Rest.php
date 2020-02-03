<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="RestCss.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,700&display=swap" rel="stylesheet">
    <title></title>
  </head>
    <body>
      <div class="container">
      <?php
      require 'vendor/autoload.php';
      $client = new GuzzleHttp\Client();
      $res = $client->request('GET', 'https://ir-revamp-dev.innoraft-sites.com/jsonapi/node/services', ['headers' => ['User-Agent', 'myreader']]);

      $j=json_decode($res->getBody(),true);

      for ($i=0; $i<7 ; $i++)
      {
          echo "<div class=\"parent ".$i."\">";
          echo "<div class=\"image".$i."\">";
          $image=($j['data'][$i]['relationships']['field_image']['links']['related']['href']);
          $resImage = $client->request('GET', $image, ['headers' => ['User-Agent', 'myreader']]);
          $x=json_decode($resImage->getBody(),true);
          $dynamic=$x['data']['attributes']['uri']['url'];
          $temp="https://ir-revamp-dev.innoraft-sites.com".$dynamic;
          echo "<img src =".$temp.">";
          echo "</div>";
          echo "<div class=\"services".$i."\">";
          echo "<h2>".($i+1)." ".$j['data'][$i]['attributes']['title']."</h2>";
          print_r($j['data'][$i]['attributes']['body']['value']);
          print_r($j['data'][$i]['attributes']['field_services']['value']);
          echo "</div>";
          echo "</div>";
      }
      ?>
      </div>

  </body>
</html>
