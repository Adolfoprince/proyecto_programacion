@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
                <h1>Menu Principal</h1><br><br>
                <h3><strong> Compradores</strong></h3>
                 <div class="links">
                    <a href="{{ route('compradores.index') }}" class="btn btn-primary">Listado de Compradores</a>
                </div>
    </div>
</div>
<br><br><br>
<a href="{{ url('/') }}" class="btn btn-warning">Volver al Portal</a>
@endsection