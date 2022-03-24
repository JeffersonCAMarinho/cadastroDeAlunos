<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AlunoModel;

class Aluno extends BaseController
{
    private $alunoModel;

    public function __construct(){
        $this->alunoModel = new AlunoModel();
    }
    public function index()
    {
        return view('alunos', ['alunos' => $this->alunoModel->paginate(10),
        'pager' => $this->alunoModel->pager
    ]);
    }

    public function edit($id)
    {
        echo('teste');
    }

    public function getAluno($id)
    {
        return json_encode($this->alunoModel->find($id));
        
    }

    public function saveAluno()
    {
        if(isset($_POST)){
            $dados['nome'] = $_POST['nome'];
            $dados['endereco'] = $_POST['endereco'];
            if(isset($_POST['id']))
                $dados['id'] = $_POST['id'];
            if(isset($_POST['foto']))
            {
                $dados['imagem'] = $_POST['foto'];
                var_dump($dados['imagem']);die;
            }
        }

        if (isset($_FILES['my_image'])) {

            $img_name = $_FILES['my_image']['name'];
            $img_size = $_FILES['my_image']['size'];
            $tmp_name = $_FILES['my_image']['tmp_name'];
            $error    = $_FILES['my_image']['error'];
            

            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);

			$img_ex_lc = strtolower($img_ex);

            $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;

            $diretorio = "uploads/";

            // $img_upload_path = 'uploads/'. $new_img_name;

            move_uploaded_file($_FILES['my_image']['tmp_name'], $diretorio.$new_img_name);

            $dados['imagem'] = $diretorio.$new_img_name;

        }

        if(isset($dados['imagem'])) {
            $data = array(
                'foto'=>$dados['imagem'],
                'nome'=> $dados['nome'],
                'endereco'=> $dados['endereco'],  
            );
        }
        else {
            $data = array(
                'nome'=> $dados['nome'],
                'endereco'=> $dados['endereco'],
            ); 
        }
        
        if(isset($dados['id']))
        {
            if($this->alunoModel->update($dados['id'], $data))
                echo 'Dados Atualizados com sucesso';
            else
                echo 'Erro ao atualizar dados';
            
            return ;
        }
        if ($this->alunoModel->insert($data)){
            echo 'Aluno salvo com sucesso';
        }
        else
            echo 'Erro ao Registrar Aluno';
    }

    public function delete($id)
    {
        if($this->alunoModel->delete($id)) {
            echo 'Aluno deletado';
        }else 
            echo 'erro ao deletar aluno';
    }
}
