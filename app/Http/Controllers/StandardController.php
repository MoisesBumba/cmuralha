<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;


class StandardController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $totalPage = 10; 
    protected $upload = false; 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    { 
       

        $title = "Listagem das {$this->name}s";

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
        $title = "Cadastrar Nova {$this->name}s"; 

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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
         
        $data = $this->model->find($id);
 
        $title = "{$this->name}: $data->name"; 

        return view("{$this->view}.show", compact('data', 'title')); 

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->model->find($id);

        $title = "Editar {$this->name}: $data->name"; 

        return view("{$this->view}.create-edit", compact('data','title'));
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = $this->model->find($id);

        $delete = $data->delete();

        if( $delete )
                return redirect()
                    ->route("$this->route.index")
                        ->with(['success' => "{$data->name} excluido com sucesso! "]);
        else 
                return redirect()->route("$this->route.edit", ['id' => $id])
                            ->withErrors(['errors' => 'Falha ao excluir Categoria']);
                
    }

    public function search(Request $request)
    {
        
        //Recuperar os dados do formulario
        $dataForm = $request->except('_token');

        //Filtra os usuários
        $data = $this->model
                    ->Where('name', 'LIKE', "%{$dataForm['key-search']}%")
                    ->paginate($this->totalPage);
            
        return view("{$this->view}.index", compact('data', 'dataForm'));
    }
}



 