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
            <li><i class="fa fa-home"></i><a href="{{url('/painel/banner')}}">Home</a></li>
            <li><i class="fa fa-laptop"></i>Banner</li> 
          </ol>
        </div>
      </div> 
      <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
              <a href="{{ route('banner.create') }}" data-toggle="modal" class="btn btn-primary">
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
                    <th><i class="icon_mail_alt"></i>Descrição</th>
                    <th><i class="icon_mobile"></i>Status</th>
                    <th><i class="icon_mobile"></i>Destaque</th>
                    <th><i class="icon_mobile"></i>Imagem</th>
                    <th><i class="icon_cogs"></i> Ações</th>
                  </tr>
    
                  @forelse ($data as $banner)
                  <tr>
                      <td>{{$banner->title}}</td>
                      <td>{{$banner->description}}</td>
                      <td>{{$banner->status}}</td>
                      <td>{{$banner->featured}}</td>
                      <td>{{$banner->image}}</td>
                      <td>
                        <div class="btn-group">
                        <a class="btn btn-primary" href='{{route('banner.edit', $banner->id)}}'><i class="icon_plus_alt2"></i></a>
                        <a class="btn btn-success" href='{{route('banner.show', $banner->id)}}'><i class="icon_check_alt2"></i></a>
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