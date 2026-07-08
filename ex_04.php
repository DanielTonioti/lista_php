<?php
function gerarSenha($tamanho)
{
    $caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_+-=[]{}|;:,.<>?';
    $max = strlen($caracteres) - 1;
    $senha = '';

    for ($i = 0; $i < $tamanho; $i++) {
        $senha .= $caracteres[random_int(0, $max)];
    }

    return $senha;
}

?>
<form method="POST">
    <input type="number" placeholder="quantidade de caracteres" name="tamanho_senha" min="1" required>
    <button type="submit">enviar</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tamanhoSenha = $_POST['tamanho_senha'];
    echo "Senha: " . gerarSenha($tamanhoSenha);
}
?>