<?php 

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    //str_replace substitui o # (nesse caso) por - para que não haja confusão em relação ao # que colocamos para separar os resultados na criação do $texto
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    //implode('#', $_POST); -> com base em determinado caracter transforma um array em uma string
    
    $texto = $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL; //EOL significa END OF LINE

    //função nativa para abrir arquivo de texto (ou criar caso ainda não exista), para o registro de chamadas
    //fopen é open file or url
    $arquivo = fopen('arquivo.hd', 'a'); //primeiro parâmetro = nome do arquivo.extensão, segundo parâmetro = modo (se apenas leitura 'r', se apenas escrita 'a')

    //função nativa para escrever o texto no arquivo
    fwrite($arquivo, $texto); //1º parâmetro = referência do arquivo que abrimos/ 2º parâmetro = o que eu quero escrever dentro do arquivo

    //função nativa para fechar o arquivo de texto
    fclose($arquivo); //por parâmetro a referência do arquivo que foi aberto e teve alterações dentro dele
    
    
    //echo "$texto";

    header('Location: abrir_chamado.php');
?>