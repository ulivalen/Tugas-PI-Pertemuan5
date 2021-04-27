<?php include('auth.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-9">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tugas Pertemuan 5 Mata Kuliah Pemrograman Integratif | </title>
<link rel="stylesheet" href="style.css" type="text/css"> 
</head>

<body class="body">
        
 <div class="content">
  <div class="header">
   <p>FORM DAFTAR</p>
   <a href="#"> </a>
  </div>
   <div class="body-form">
    <form action="daftar.php" method="post">
     <table>
      <tr>
       <td width="200">Username</td>
       <td><input type="text" id="username" name="username" value="<?php echo $username; ?>"/></td>
      </tr>
      <tr>
       <td>Email</td>
       <td><input type="text" name="email" id="email" value="<?php echo $email; ?>"/></td>
      </tr>
      <tr>
       <td>Password</td>
       <td><input type="Password" id="password_1" name="password_1"></td>
      </tr>
      <tr>
       <td>Confirm Password</td>
       <td><input type="Password"  id="password_2" name="password_2">
        <span id="pesan" class="pesan-confirm"></span>
       </td>
      </tr>
     </table>
      <div class="footer-table">
       <table>
        <input type="submit" name="reg_user" value="DAFTAR"/>
       </table>
      </div>
    </form>
   </div>
 </div>
</body>
<?php include('errors.php'); ?>
</html>
