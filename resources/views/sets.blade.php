@extends('layouts.app')


@section('content')
<a class="btn btn-primary" href="/">Back</a>
<h2>Cards for Sets </h2>
<p>Lists all cards for the set</p>
<?php echo $set_code ?>
<sets></sets>

@endsection