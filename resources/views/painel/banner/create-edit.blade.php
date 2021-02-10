@extends('painel.templates.template')

@section('contect')

 <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!--overview start-->
            <div class="row">
                <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-laptop"></i>Banner</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                    <li><i class="fa fa-laptop"></i><a href="{{url('/painel/banner')}}">Usuários</a></li>
                    <li><i class="fa fa-laptop"></i>Inserir Banner</li>
                </ol>
                </div>
            </div>
         
    <div class="col-lg-9">
    <section class="panel">
        <header class="panel-heading">
            Gestão de Banner: <b>{{$data ->name ?? 'Novo'}}
        </header>
        <div class="panel-body"> 
            @if (isset($errors) && count($errors) > 0)
               <div class="alert alert-warning">
                   @foreach ($errors->all() as $error)
                        <p>{{$error}}</p>
                   @endforeach
                </div> 
            @endif
        @if (isset($data ))
        {!! Form::model($data , ['route' => ['banner.update', $data ->id], 'class' => 'form form-search form-ds', 'files' => true, 'method' => 'PUT'])  !!}
        @else
                {!! Form::open(['route' => 'banner.store', 'class' => 'form form-search form-ds', 'files' => true])  !!}
        @endif
            <div class="form-group">
                {!! Form::text('title', null, ['placeholder' => 'Titulo:', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::textarea('description', null, ['placeholder' => 'Descrição:', 'class' => 'form-control']) !!}
            </div>
          
            <div class="form-group">
                    <label>
                            {!! Form::checkbox('featured', null) !!}
                            Destaque? 
                    </label>
            </div>
            <div class="form-group">
                    Selecione o Status do Banner:
                    {!! Form::select('status', ['A' => 'Activo', 'R' => 'Rascunho'], null, ['class' => 'form-control']) !!}
                </div>
            <div class="form-group">
                <label for="exampleInputFile">Selecione uma Imagem</label>
                {!! Form::file('image', ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Gravar', ['class' => 'btn btn-primary']) !!}
            </div>
                {!! Form::close() !!}

        </div>
    </section>
    </div>
    </section> 
</section>
@endsection