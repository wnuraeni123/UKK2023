<html>
<head>
    <title>Tambah Data</title>
    <style type="text/css" media="screen">
        @import url('https://fonts.googleapis.com/css?family=PT+Sans');
        body{
            background-color: rgb(112,128,145);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            font-family: sans-serif;
            font-size: 10px
        }
        h1{
            font-size:"10px";
        }
        h2{
  padding-top: 1.5rem;
}
.container{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    padding: 40px 100px;
    width: 500px;
    background-image: linear-gradient( slategray, royalblue);
    box-shadow: 0 0 20px rgba(255,255,255,.3);
    
}
font{
    font-size: 30px;
    
}
.Submit{
    background: violet;
	color: white;
	font-size: 11pt;
	width: 50%;
	border: none;
	border-radius: 20px;
	padding: 10px 20px;
}
.Reset{
    background: violet;
	color: white;
	font-size: 10pt;
	width: 50%;
	border: none;
	border-radius: 20px;
	padding: 10px 20px;
}
    </style>
</head>
<body background = "gmbr1.jpg">
<div style="border:0; padding:10px; width:760px; height:auto;">
<form class="container" action="proses.php" method="POST" name="proses">
<h1 align="center">DAFTAR AKUN MASYARAKAT </h1>
    <table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr height="46">
                <td width=""> </td>
                <td width=""> </td>
        </tr>
        <tr height="46" >
            <td> </td>
            <td>NIK</td>
            <td><input type="text" name="nik" size="23" required/></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>Nama</td>
            <td><input type="text" name="nama" size="23"  required/></td>
        </tr>
        
        <tr height="46">
            <td> </td>
            <td>username</td>
            <td><input type="text" name="username" size="23"  required/></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>password</td>
            <td><input type="text" name="password" size="23"  required/></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>telp</td>
            <td><input type="text" name="telp" size="23" required/></td>
        </tr>
        <tr>
        <td></td>
        <td><input type="submit" name="Submit" value="Submit" class="white-text" style="width: 75%;" /></td>
        <td>&nbsp;<input type="reset" value="Reset" /></td>
</tr>       
       
    </table>
</form>
</div>
</body>
</html>