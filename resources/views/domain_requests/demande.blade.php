@extends('layouts.dns')

<!-- @include('components.nav') -->

@section('content')
<div class="domain-list">
    <div>
    <h2>Liste des domaines enregistrés</h2>
    </div>

    <div class="my-6 justify-end flex rounded-md">
        <a href="/" class="p-1  bg-blue-500 text-white ">Faire autre demande</a>
    </div>
@include('domaiindex')

</div>
@endsection