@extends('painel.templates.template')

@section('contect')

 <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!--overview start-->
            <div class="row">
                <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa-laptop"></i>{{ $title ?? 'CLINICA GRANDE MURALHA DA CHINA' }}</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="{{url('/painel')}}">Home</a></li>
                    <li><i class="fa fa-laptop"></i><a href="{{url('/painel/contact')}}">Contacto</a></li>
                    <li><i class="fa fa-laptop"></i>Inserir </li>
                </ol>
                </div>
            </div>
         
    <div class="col-lg-9">
    <section class="panel">
        <header class="panel-heading">
            <b>{{$data ->name ?? 'Novo'}}
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
        {!! Form::model($data , ['route' => ['contact.update', $data ->id], 'class' => 'form form-search form-ds', 'files' => true, 'method' => 'PUT'])  !!}
        @else
                {!! Form::open(['route' => 'contact.store', 'class' => 'form form-search form-ds', 'files' => true])  !!}
        @endif
            <div class="form-group">
                {!! Form::text('title', null, ['placeholder' => 'Titulo:', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::text('description', null, ['placeholder' => 'Descrição:', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group">
            {!! Form::text('address', null, ['placeholder' => 'Endereço:', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group"> 
            {!! Form::text('telephone', null, ['placeholder' => 'Telemovel:', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group">
            {!! Form::text('email-address', null, ['placeholder' => 'Email:', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group">
            {!! Form::text('site', null, ['placeholder' => 'Site:', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group"> 
                    Selecione o Status:
                    {!! Form::select('status', ['A' => 'Activo', 'R' => 'Rascunho'], null, ['class' => 'form-control']) !!}
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

@push('scripts')
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea'});</script>
@endpush