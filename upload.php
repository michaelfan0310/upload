<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>upload files</title>

</head>
<body>
  <div class="register">
     <br/>
    <img src="./images/dac.png" width="15%" />
    <h1>Upload Files</h1>
    
    <form enctype="multipart/form-data" method="post" action="uploadprocess.php" name="myform">
    
      <table border='1' cellspacing='0px'; style="border-color:lightgreen;width:80%;">

      <tr>        
        <td align="center" colspan="2"><font style="font-size: 40px">文件上传</font></td> </tr>
        
      <tr><td>请填写用户名：</td><td><input type="text" name="usrname" /></td> </tr> 
        
      <tr><td>请简单介绍该文件</td><td><textarea name="fileinfo" rows="10" cols="80" /></textarea></td> </tr>
      
      <tr><td>请选择你要上传的文件：</td><td><input type="file" name="myfile" /></td> </tr>
        
      <tr>
        <td><input type="submit"   value="上传文件"  /></td>
      </tr>
      
    </table>
    </form>
  </div>



</body>
</html>
