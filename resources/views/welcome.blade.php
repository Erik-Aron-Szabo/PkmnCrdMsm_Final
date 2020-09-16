@extends('layouts.app')

@section('content')
<?php

use function GuzzleHttp\json_decode;

$client = new GuzzleHttp\Client();
$res = $client->get('https://api.pokemontcg.io/v1/cards?page=2');
// API get request here
$data =  $res->getBody();

?>
<h2 style="text-align: center;"><strong>PkmnCrdMsm</strong></h2>
<br>
<series-index></series-index>

@endsection