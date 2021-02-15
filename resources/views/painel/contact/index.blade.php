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
            <li><i class="fa fa-home"></i><a href="{{url('/painel/contact')}}">Home</a></li>
            <li><i class="fa fa-laptop"></i>Contacto</li> 
          </ol>
        </div>
      </div>  
      <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
              <a href="{{ route('contact.create') }}" data-toggle="modal" class="btn btn-primary">
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
                    <th><i class="icon_profile"></i>Titulo</th>
                    <th><i class="icon_mail_alt"></i> Descrição</th>
                    <th><i class="icon_mobile"></i>Enderenço</th>
                    <th><i class="icon_mobile"></i>Telemovel</th>
                    <th><i class="icon_mail_alt"></i> Email</th>
                    <th><i class="icon_cogs"></i> site</th>
                    <th><i class="icon_cogs"></i> Ações</th>
                  </tr>
    
                  @forelse ($data as $contact)
                  <tr>
                      <td>{{$contact->title}}</td>
                      <td>{{$contact->description}}</td>
                      <td>{{$contact->address}}</td>
                      <td>{{$contact->telephone}}</td>
                      <td>{{$contact->email}}</td> 
                      <td>{{$contact->site}}</td> 
                      <td>{{$contact->status}}</td> 
                      <td>
                        <div class="btn-group">
                        <a class="btn btn-primary" href='{{route('contact.edit', $contact->id)}}'><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href='{{route('contact.show', $contact->id)}}'><i class="icon_check_alt2"></i></a>
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