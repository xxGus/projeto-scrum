<?php
require_once "../paginas/header.php";
?>
<?php
require_once '../controles/PessoaCtrl.php';
require_once '../entidades/Pessoa.php';

$_SERVER["REQUEST_METHOD"] == "POST";

if ($_POST['pessoa-submit'] == "Cadastrar") {
// Recebe os dados enviados pela submissão
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $siape = $_POST['siape'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $perfil = $_POST['perfil'];

    //$cpf = caracteres($cpf);
    //$telefone = caracteres($telefone);
    //$celular = caracteres($celular);

    if(strlen($cpf) < 11){ 
        echo "<div class='alert alert-warning' style='margin-top: 1%;'><strong>Atenção, a pessoa não foi cadastrada pois o CPF não foi informado!</strong></div>"; 
    } elseif(strlen($nome) < 5){ 
        echo "<div class='alert alert-warning' style='margin-top: 1%;'><strong>Atenção, a pessoa não foi cadastrada pois é preciso fornecer o Nome completo</strong></div>"; 
    }else{
        $pCtrl = new PessoaCtrl();

        $retorno = $pCtrl->cadastrarPessoa($nome, $cpf, $siape, $email, $telefone, $celular, $perfil);
        if($retorno > 0){
            echo "<div class='alert alert-info' style='margin-top: 1%;'><strong>Pessoa cadastrada com sucesso!</strong></div>";
        }else{
            echo "<div class='alert alert-danger' style='margin-top: 1%;'><strong>Erro ao cadastrar pessoa, dica: Verifique se a mesma já não está cadastrada!</strong></div>";
        }
    }
}

if ($_POST['pessoa-submit'] == "Alterar") {
// Recebe os dados enviados pela submissão
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $siape = $_POST['siape'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $perfil = $_POST['perfil'];
    $status = $_POST['status'];
    $idPessoa = $_POST['idPessoa'];

    //$cpf = caracteres($cpf);
    //$telefone = caracteres($telefone);
    //$celular = caracteres($celular);

    if(strlen($cpf) < 11){ 
        echo "<div class='alert alert-warning' style='margin-top: 1%;'><strong>Atenção, a pessoa não foi alterada pois o CPF não foi informado!</strong></div>"; 
    } elseif(strlen($nome) < 5){ 
        echo "<div class='alert alert-warning' style='margin-top: 1%;'><strong>Atenção, a pessoa não foi alterada pois é preciso fornecer o Nome completo</strong></div>"; 
    }else{
        $pCtrl = new PessoaCtrl();
        $retorno = $pCtrl->editarPessoa($nome, $cpf, $siape, $email, $telefone, $celular, $status, $idPessoa, $perfil);
        if($retorno == true){
            echo "<div class='alert alert-info' style='margin-top: 1%;'><strong>Pessoa alterada com sucesso!</strong></div>";
        }else{
            echo "<div class='alert alert-danger' style='margin-top: 1%;'><strong>Erro ao alterar pessoa!</strong></div>";
        }
    }
}

/*function caracteres($valor){
    $valor = str_replace(" ", "", $valor);
    $valor = str_replace(".", "", $valor);
    $valor = str_replace(",", "", $valor);
    $valor = str_replace("-", "", $valor);
    $valor = str_replace("/", "", $valor);
    $valor = str_replace("(", "", $valor);
    $valor = str_replace(")", "", $valor);
    return $valor;
}*/
?>