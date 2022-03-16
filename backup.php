<?php
    // $server = "localhost";
    // $userName = "root";
    // $projectDbName = "dr_agrivet";
    // $password = "";
     $directory = "sql_dump";
    // include_once('Mysqldump/Mysqldump.php');
    // if (is_dir($directory) === false) {
    //     mkdir($directory);
    //     dump_sql_data($server, $projectDbName, $userName, $password, $directory);
    // }else {
    //     dump_sql_data($server, $projectDbName, $userName, $password, $directory);
    // }

    // function dump_sql_data($server, $projectDbName, $userName, $password, $directory) {
    //     try {
    //         $dump = new Ifsnop\Mysqldump\Mysqldump('mysql:host='.$server.';dbname='.$projectDbName.'', ''.$userName.'', ''.$password.'');
    //         $f = date('d-m-Y');
    //         $dump->start("".$directory."/".$f."_".$projectDbName."_backup.sql");
    //         //   echo "<pre>";
    //         // print_r($dump);
    //         // echo "</pre>"; 
    //         echo "success";
    //     } catch (\Exception $e) {
    //         echo 'mysqldump-php error: ' . $e->getMessage();
    //     }
    // }

    // specifying directory
 
    //scanning files in a given directory in ascending order
    $myfiles = scandir($directory);
    //$files = array_diff($myfiles, array('.', '..'));

    $files=array_slice($myfiles, 2);
    
    //displaying the files in the directory
    print_r($files);

    ?>




                    <?php
function getDirContents($dir, &$results = array()){
    $files = scandir($dir);
    foreach($files as $key => $value){
        $path = realpath($dir.DIRECTORY_SEPARATOR.$value);
        if(!is_dir($path)) {
            $results[] = ['path'=>$path,'size'=>filesize($path)];
        } else if($value != "." && $value != "..") {
            getDirContents($path, $results);
            $results[] = ['path'=>$path,'size'=>filesize($path)];
        }
    }
    return $results;
}
$fileslist = getDirContents($directory);
echo "<pre>";

print_r($fileslist); 

foreach($fileslist as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
  }