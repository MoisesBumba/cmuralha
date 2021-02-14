@extends('painel.templates.template')

@section('contect')
<!--main content start-->
<section id="main-content">
    <section class="wrapper"> 
      <!--overview start--> 
      <div class="row">
        <div class="col-lg-12"> 
          <h3 class="page-header"><i class="fa fa-laptop"></i>Doutores</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="{{url('/painel/doctor')}}">Home</a></li>
            <li><i class="fa fa-laptop"></i>Doutores</li> 
          </ol>
        </div>
      </div>  
      <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
              <a href="{{ route('doctor.create') }}" data-toggle="modal" class="btn btn-primary">
                  + Inserir
              </a>
            
              </header>
              @if ( Session::has('success') )
              <div class="alert alert-success hide-msg" style="float: left; width:100%; margin: 10px 0px">
                  {{ Session::get('success') }}
              </div>
          
              @endif
    
              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i class="icon_profile"></i>Nome</th>
                    <th><i class="icon_mail_alt"></i>Especialidade</th>
                    <th><i class="icon_mobile"></i> Descrição</th>
                    <th><i class="icon_mobile"></i>Imagem</th>
                    <th><i class="icon_cogs"></i> Ações</th>
                  </tr>
    
                  @forelse ($data as $doctor)
                  <tr>
                      <td>{{$doctor->name}}</td>
                      <td>{{$doctor->specialty}}</td>
                      <td>{{$doctor->description}}</td>
                      <td>{{$doctor->image}}</td>
                      <td>{{$doctor->status}}</td> 
                      <td>
                        <div class="btn-group">
                        <a class="btn btn-primary" href='{{route('doctor.edit', $doctor->id)}}'><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href='{{route('doctor.show', $doctor->id)}}'><i class="icon_check_alt2"></i></a>
                        </div>
                      </td>
                    </tr> 
                  @empty
                      <p>Nenhum Dado Cadastrado</p>
                  @endforelse
                </tbody>
           
        
              </table>
              {!! $data ->links() !!}
            </section>
          </div>
        </div>
       
    </section>
  </section>
@endsection