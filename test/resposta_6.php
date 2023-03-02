<!DOCTYPE html>
<html>
<head>
  <title>Lista de Pedidos</title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th , td {
      border: 1px solid #ddd;
      padding: 8px;
        text-align: center;
    }

    th {
      background-color: #ff0000;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>ID do Cliente</th>
        <th>Data</th>
        <th>Total do Pedido</th>
      </tr>
    </thead>
    <tbody>
      <?php
$servername = "localhost"; // substitua pelo nome do servidor
$username = "root"; // substitua pelo nome de usuário do banco de dados
$password = ""; // substitua pela senha do banco de dados
$dbname = "order"; // substitua pelo nome do banco de dados

// cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
   
    $sql = "SELECT * FROM user,orders"; 
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
     
      while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['order_id'] . '</td>';
        echo '<td>' . $row['order_user_id'] . '</td>';
        echo '<td>' . $row['order_date'] . '</td>';
        echo '<td>' . $row['order_total'] . '</td>';
        echo '</tr>';
      }
    } else {
      echo "Nenhum pedido encontrado.";
    }
    
    $conn->close();
?>

    </tbody>
  </table>
</body>
</html>
