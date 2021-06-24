<html>

<head>

    
</head>


<body>
    <br />
    <?php
    function GetAllLinksFromDir($dir, &$array) {
      if($dir[strlen($dir) - 1] != '/') $dir .= '/';
      $hand = opendir($dir); 
      while($file = readdir($hand))   
        if(is_file($dir.$file)) 
          $array[] = '<a href="'.$dir.$file.'">'.$dir.$file.'</a>';
        elseif(is_dir($dir.$file) && $file != '.' && $file != '..')
          GetAllLinksFromDir($dir.$file, $array); 
      closedir($hand); 
    }
    $linki = array();
    GetAllLinksFromDir('.', $linki);
    ksort($linki);
    echo join("<br>\n", $linki);
    ?>
  </body>
  </html>