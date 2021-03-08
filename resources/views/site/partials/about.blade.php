<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
    	<div class="container"> 
		@forelse ($dadosabout as $about)
    		<div class="row d-flex">
    			<div class="col-md-6 col-lg-5 d-flex">
    				<div class="img d-flex align-self-stretch align-items-center" style="background-image:" src= "{{url("assets/uploads/about/{$about->image}")}}" >
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-7 pl-lg-5 py-md-5">
    				<div class="py-md-5">
	    				<div class="row justify-content-start pb-3">
			          <div class="col-md-12 heading-section ftco-animate p-4 p-lg-5">
			            <h2 class="mb-4">{{$about->title}}</h2>
			            <p>{!! $about->description !!}</p>
			            <p><a href="#" class="btn btn-primary py-3 px-4">Serviços Médicos</a> <a href="#" class="btn btn-secondary py-3 px-4">Contactos</a></p>
			          </div> 
			        </div>
		        </div>  
	        </div>
        </div>
    	</div>
		@empty
         <p>Nenhema informação Cadastrada</p>   
       @endforelse
    </section>

	