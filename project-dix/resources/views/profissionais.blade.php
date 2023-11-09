@extends('layouts.main')

@section('title', $namePage)


@section('content')

<h2>Profissionais</h2>

<div class="container">
    <pre>
        <?php print_r($data); ?>
    </pre>
</div>

@endsection