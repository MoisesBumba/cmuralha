@extends('painel.templates.template')

@section('contect')

 <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!--overview start-->
            <div class="row">
                <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-laptop"></i>Contacto</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="{{url('/painel')}}">Home</a></li>
                    <li><i class="fa fa-laptop"></i><a href="{{url('/painel/contact')}}">Contacto</a></li>
                    <li><i class="fa fa-laptop"></i>Listar Doutores</li>
                </ol>
                </div>
            </div> 
    
<div class="col-lg-9">
<section class="panel">
<header class="panel-heading">
    <b>{{$data ->name}}
</header>
<div class="panel-body">
    @if (isset($errors) && count($errors) > 0)
        <div class="alert alert-warning">
            @foreach ($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
        </div> 
    @endif
        <h4><strong>Titulo: </strong>{{ $data ->title }}</h4>
        <h4><strong>Descrição: </strong>{{ $data ->description }}</h4>
        <h4><strong>Enderenço: </strong>{{ $data ->address }}</h4>
        <h4><strong>Telemovel: </strong>{{ $data ->telephone }}</h4>
        <h4><strong>Email: </strong>{{ $data ->email }}</h4>
        <h4><strong>site: </strong>{{ $data ->site }}</h4>
        <h4><strong>Status: </strong>{{ $data ->status }}</h4>
        
        
        {!! Form::open(['route' => ['contact.destroy', $data ->id], 'class' => 'form form-search form-ds', 'method' => 'DELETE'])  !!}
    <div class="form-group">
        {!! Form::submit('Apagar Dados', ['class' => 'btn btn-danger']) !!}
    </div>
        {!! Form::close() !!}

        </div>
    </section>
    </div>

        </section>
    </section>
@endsection