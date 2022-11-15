<?php


$username=$_POST['usrname'];
$fileinfo=$_POST['fileinfo'];

echo $username."<br/>".$fileinfo."<br/>";

echo "<pre>";
print_r($_FILES);
echo "</pre>";

$file_size=$_FILES['myfile']['size'];

echo $file_size;//不能测量pdf文件的size;



if($file_size > 2*1024*1024){    
    echo "文件不能大于2M";
    exit();
}


// $file_type=$_FILES['myfile']['type'];
// echo $file_type;//不能测量pdf文件的size;

// if($file_size !='image/jpag' &&  $file_size !='image/pjpag' ){
//     echo "文件只能是 jpg的";
//     exit();
// }

if(is_uploaded_file($_FILES['myfile']['tmp_name'])){
    $uploded_file=$_FILES['myfile']['tmp_name'];
    //给每个动态用户创建一个文件夹
    $user_path=$_SERVER['DOCUMENT_ROOT']."/files/up/".$username;
    
//     $user_path=iconv("utf-8","gb2312",$user_path);//中文路径？？
    
    //判断该用户是否已经有文件夹
    if(!file_exists($user_path)){
        mkdir($user_path);
    }
    
//     $move_to_file=$user_path."/".$_FILES['myfile']['name'];

    //防止用户使用相同文件名，覆盖前一个,也可以用MD5；
    $file_truename=$_FILES['myfile']['name'];
    $move_to_file=$user_path."/".time().rand(1,1000).substr($file_truename,strrpos($file_truename,"."));
    
    // if(move_uploaded_file($uploded_file, $move_to_file)){   //路径有中文名文件，下一行
    if(move_uploaded_file($uploded_file,iconv("utf-8","gb2312",$move_to_file))){ 
        echo $_FILES['myfile']['name']."上传OK!!";

    }else {
        echo "上传失败！！";
    }
    
}else {
    echo "上传失败！！";
   
}
?>

