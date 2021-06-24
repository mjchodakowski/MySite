<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8" />
    <title>SendFile</title>
    <link rel="stylesheet" href="css/index.css">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="https://s.electerious.com/basicScroll/dist/basicScroll.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <style>

body{
    width: 100%;

}

.div{
 width: 40%;
 background-color: rgb(240, 240, 240);
 border-radius: 10px;
 margin-top: 10%;
 margin-left: auto;
 margin-right:auto;
 padding: 20px;

}

.div2{
 width: 95%;
 background-color: rgba(235, 201, 139, 0.754);
 border-radius: 10px;
 margin-left: auto;
 margin-right:auto;
 padding: 10px;

}

.custom-file-input{
    color: #999;



}

    .card-title{
        
    }


    .submits{
width: 30%;
margin-top: 1%;
margin-right: 5px;
margin-left: auto;


    }

    .card-body{
    margin:30px;
    border: solid 1px black;
    border-radius: 10px;
    color:rgb(157, 157, 157);
    background: white;

    }

.table{
padding: 10px;
border-radius: 10px,10px;
background: #DEB887;
border: 0px solid;
border-radius: 10px;

}

.tabllist{
border: 0.0px solid white;
border-radius: 10px 0px;
padding: 1px;
color:white
}

.table a{
    color:black;
    text-decoration: none;
    font-size:18px;
    padding: 10px;
}

</style>

</head>




<body>
<div class="div">
    <div class="div2">

<div class="table">
    Lista plików:
    <?php
    function GetAllLinksFromDir($dir, &$array) {
      if($dir[strlen($dir) - 1] != '/') $dir .= '/file/';
      $hand = opendir($dir); 
      while($file = readdir($hand))   
        if(is_file($dir.$file)) 
          $array[] = '<div class="tabllist"><a href="'.$dir.$file.'">'.$file.'</a></div>';
        elseif(is_dir($dir.$file) && $file != '.' && $file != '..')
          GetAllLinksFromDir($dir.$file, $array); 
      closedir($hand); 
    }
    $linki = array();
    GetAllLinksFromDir('.', $linki);
    ksort($linki);
    echo join("", $linki);
    ?>
</div>

<form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" class="custom-file-input form-control "  name="image[]" multiple="">
    <div class="card-body">
    <h6 class="card-title" style="min-width: 60%;"><i class="fa fa-upload"></i></h6>
    <div class="progress m-t-20" >
       <div class="progress-bar bg-success" style="width: 0%; height:20px;" role="progressbar">0%</div>
    </div>
 </div>
<div style="text-align: right;"><input type="submit" style="min-width: 40%;" class="btn btn-primary submits" value="WYSLIJ PLIKI"/></div>
</form>
<div style="clear:both"></div>

</div>
</div>

</body>

<script>
$('form').submit(function(e){
     e.preventDefault();
     var formData = new FormData($(this)[0]);
$.ajax({
      xhr: function() {
         var xhr = new window.XMLHttpRequest();
         xhr.upload.addEventListener("progress", function(evt) {
             if (evt.lengthComputable) {
                 var percentComplete = evt.loaded / evt.total;
                 var progressval = Math.round(percentComplete*100)+'%';
$('.progress-bar').css('width', progressval); /* Animacja paska postępu */
$('.progress-bar').text(progressval);  /* Zmiana tekstu z procentami */
             }
        }, false);
        return xhr;
},
     url:"upload.php",
     method:"POST",
     data: formData,
     contentType:false,
     processData:false,
     enctype: 'multipart/form-data',
     success:function(output){
         /* Instrukcje wykonywane po poprawnym załadowaniu */    
     }
 });
});
</script>
</html>