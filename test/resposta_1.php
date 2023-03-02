<html>

<head>
  <title>resposta 1</title>
</head>

<body>

  <form action="" method="post">

    Nota 1: <input type="number" name="nota01" min="0" value="0" max="10" /><br />
    <br />
    Nota 2: <input type="number" name="nota02" min="0" value="0" max="10" /><br />
    <br />
    Nota 3: <input type="number" name="nota03" min="0" value="0" max="10" /><br />
    <br /> 
    <input type="submit" name="submit" value="Calcular" /> 

  </form>
  <?php
  $nota1 = $_POST['nota01'];  //recebe o valor do campo nota01
  $nota2 = $_POST['nota02'];  //recebe o valor do campo nota02
  $nota3 = $_POST['nota03'];  //recebe o valor do campo nota03
  $media = ($nota1 + $nota2 + $nota3) / 3; //calcula a média
  $media = number_format($media, 1); //formata a média para 1 casa decimal

  echo "Média: $media <br />";
  if ($media < 5)
    echo "Reprovado";
  elseif ($media < 7)
    echo "Recuperação";
  elseif ($media == 10)
    echo "Aprovado com nota máxima";
  else
    echo "Aprovado";
  ?>

</body>

</html>