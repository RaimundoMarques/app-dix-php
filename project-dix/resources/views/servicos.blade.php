@extends('layouts.main')

@section('title', $namePage)

@section('content')
<h2>Serviços</h2>

<div class="container">
    <?php

    for ($i = 0; $i < count($data); $i++) {
        extract($data[$i]);

        echo $nome . "</br>";
        echo $tipo . "</br>";
        echo $categoria . "</br>";
        echo "<hr>";
    }
    ?>
</div>

@endsection