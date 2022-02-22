<?php
session_start();
if(!isset($_SESSION['username']))
{
    header("location:index.php");
}
require("connection.php");
?><html>
    <head>
        <title>Messenger</title>
        <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div id="main_home">
<div id="userinfo">
    
    <?php
    echo $_SESSION['username'];
    
    ?>
    <a href="logout.php">Logout</a>
    </div>
    <div id="msgscreen">
        <?php
  $sql="SELECT * FROM message";
  $result=mysqli_query($conn,$sql);
  echo "<table>
  <tr>
  <th></th>
  <th></th>
  </tr>
  ";
  while($row=mysqli_fetch_array($result))
  {
      echo "<tr>";
      echo"<td style= 'font-size:12px; '>".$row['username']."</td>";
      echo"<td style= 'font-size:12px; background-color: #99b54a; '>".$row['content']."</td>";
      echo "</tr>";
  }
  echo"</table>";
        ?>
</div>
<div id="msgbox">
    <form method="post" action="send.php">
        <textarea name="message"cols="25" rows="3"></textarea>
        <button type="submit" >Send</button>   
    
</form>
</div>


</div>
</body>
</html>
