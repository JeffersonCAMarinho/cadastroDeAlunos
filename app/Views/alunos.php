<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title> Alunos </title>
    </head>
    <body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        
    <div class="container mt-5">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newAluno">Novo Aluno</button>
    </div>
    <div class="container mt-5">
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Endereço</th>
                    <th>Acoes</th>
                </tr>
                <?php foreach ($alunos as $alunos){
                $tr = '<tr class="tr_status _link" id="'.$alunos['id'].'">'.
                        '<td>'. $alunos['id'] .'</td>'.
                        '<td>'. $alunos['nome'] .'</td>'.
                        '<td>'. $alunos['endereco'] .'</td>'
                        .'<td>'.$td_delete = anchor('aluno/delete/'. $alunos['id'], 'Deletar', ['onclick' => 'return confirma()']).'</td>'.
                    '</tr>';
                echo $tr;
                }
                ?>
                </table>
    </body>

    <script>
        function confirma(){
        var answer = window.confirm("Deletar Aluno?");
        if (answer) {
            return true;
        }
        else {
            return false;
        }
    }
    
    $(".tr_status").click(async function () {
    var parms = {
        id: $(this).attr("id")
    };
    console.log(parms);
    var viewAluno = await $.ajax({
        url: '/project-root/public/aluno/getAluno/'+parms.id,
        type: 'GET',
        async: true,
        dataType: 'json',
        success: function(response){
            return response;
        },
        error: function (xhr, type, exception) {
            return false;
        }
    });
    console.log(viewAluno);
    setDadosAlterarStatus(viewAluno);
    $("#viewEditAluno").modal('show');
});

function setDadosAlterarStatus(aluno) {
    $("#id").val(aluno.id);
    $("#nome").val(aluno.nome);
    $("#endereco").val(aluno.endereco);
    $('#foto').attr('src',aluno.foto);
}


    </script>
</html>

<?php echo view('modals/viewEditAluno'); ?>
<?php echo view('modals/newAluno'); ?>