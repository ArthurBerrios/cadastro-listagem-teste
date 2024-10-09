
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Teste</title>
</head>
<body>
    <form action="cadastro.php" method="post">
        <label>Cadastro de Produtos</label><br><br>
        <input type="text" name="nome" placeholder="Digite o nome do produto"><br><br>
        <input type="text" name="descricao" placeholder="Descrição do produto"><br><br>
        <input type="number" name="preco" placeholder="Valor do produto"><br><br>
        <label>Disponível para venda?</label><br>
        <input type="radio" name="disponivel" value="Sim"> <label>Sim</label>
        <input type="radio" name="disponivel" value="Não"><label>Não</label><br><br>
        <input type="submit" value="Cadastrar">
    </form>





    <script>
    
    let lastChecked = null; 
    const radios = document.querySelectorAll('input[type="radio"]');

    radios.forEach(radio => {
      radio.addEventListener('click', function() {
        if (lastChecked === this) {
          this.checked = false;
          lastChecked = null; 
        } else {
          lastChecked = this; 
        }
      });
    });
  </script>
</body>
</html>