<?php

namespace App\Http\Controllers;
use App\Models\Banner;
use App\Http\Controllers\StandardController; 
use Illuminate\Http\Request;


class BannerController extends StandardController
{
    protected $model;      
    protected $name = 'Banner'; 
    protected $view = 'painel.banner';
    protected $upload = ['name' => 'image', 'path' => 'banner'];
    protected $route = 'banner';

    public function __construct(Banner $banner)
    {
        $this->model = $banner;
    }  


    public function index()
    {
        $title = "Gestão {$this->name}";  

        $data = $this->model->paginate($this->totalPage);

        return view("{$this->view}.index", compact('data','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Cadastrar Novo {$this->name}"; 

        return view("{$this->view}.create-edit", compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validar Dados do Formulario
        $this->validate($request, $this->model->rules());

        //Pega todos os dados do Formulario
        $dataForm = $request->all();  

        //Verificar se o campo checkbox esta 1 : 0
        $dataForm['featured'] = isset( $dataForm['featured'] ) ? true : false;

        //Verificar se existe a imagem
        if( $this->upload && $request->hasFile($this->upload['name']) ){
            //pega o arquivo
            $image = $request->file($this->upload['name']);
            
            //Define o nome para o arquivo
            $nameFile = uniqid(date('YmdHis')).'.'.$image->getClientOriginalExtension();
            
            $upload = $image->storeAs($this->upload['path'], $nameFile);

            if( $upload ) 
                $dataForm[$this->upload['name']] = $nameFile;
            else   
                    return redirect()
                                ->route("{$this->route}.create")
                                ->withErrors(['errors' => 'Erro no Upload'])
                                ->withInput();
        
    }

     //Insere os dados d Formulario
     $insert = $this->model->create($dataForm);
 
     if( $insert )
         return redirect()
                     ->route("{$this->route}.index")
                     ->with(['success' => 'Cadastro realizado com sucesso']);
     else 
         return redirect()
                     ->route("{$this->route}.create")
                     ->withErrors(['errors' => 'Falha ao cadastrar'])
                     ->withInput();
 }


 public function edit($id)
 {
     $data = $this->model->find($id);

     $title = "Editar {$this->name}: $data->title"; 

     $nanners = Banner::get()->pluck('name', 'id'); 

     return view("{$this->view}.create-edit", compact('data','title', 'nanners'));
 }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { 
        //Valida os dados
        $this->validate($request, $this->model->rules($id));

        //Pega todos os dados do do formulario
        $dataForm =$request->all();
 
        //criar o objecto da model
        $data = $this->model->find($id);

        //Verificar se o campo checkbox esta 0 : 1
        $dataForm['featured'] = isset( $dataForm['featured'] ) ? true : false;

        //Verificar se existe o arquivo
        if( $this->upload && $request->hasFile( $this->upload['name'] ) ) {
            //pega Arquivo
            $image = $request->file( $this->upload['name'] );
 
            //Verificar se o nome do Arquivo não existe
            if ($data->image == '') {
                $nameImage = uniqid(date('YmdHis')).'.'.$image->getClientOriginalExtension();
                $dataForm[ $this->upload['name'] ] = $nameImage;
            }else {
                $nameImage = $data->image;
                $dataForm[ $this->upload['name'] ] = $data->image;
            }  
            
            $upload = $image->storeAs($this->upload['path'], $nameImage);
            if( $upload )
                $dataForm[$this->upload['name']] = $nameImage;
            else
                    return redirect()
                                ->route("{$this->route}.edit", ['id' => $id])
                                ->withErrors(['errors' => 'Erro no Upload'])
                                ->withInput();
        }
        
        
        //Alterar os dados 
        $update = $data->update($dataForm);

        if( $update )
            return redirect()
                        ->route("{$this->route}.index")
                        ->with(['success' => 'Alteração realizado com sucesso']);
        else 
            return redirect()
                        ->route("{$this->route}.edit", ['id' => $id])
                        ->withErrors(['errors' => 'Falha ao Editar'])
                        ->withInput();


    }
}
