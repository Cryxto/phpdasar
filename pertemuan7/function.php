<?php
    $hostname = "localhost";
    $username = "admin2";
    $password = "12345";
    $dbname = "latihan_php";
    $conn = mysqli_connect($hostname, $username, $password, $dbname);
    function db_connection_status()
    {
        global $conn;
        if ($conn == false) {
            die("ERROR: Could not connect. " . mysqli_connect_error());
        } else {
            echo "Connect Successfully. Host info: " . mysqli_get_host_info($conn);
        }
    }
    function query_check(){
        global $conn;
        if(mysqli_affected_rows($conn)>0){
            echo "query berhasil!" ;
        }
        else{
            echo "query gagal!" ;
            echo "<br>" ;
            echo mysqli_error($conn) ;
        }
    }
    // $query = "SELECT * FROM mahasiswa;";
    //$result = mysqli_query($conn, $query);
    //$fetch = mysqli_fetch_assoc($result);
    //var_dump($fetch);
    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $data = [];
        
        while($fetch = mysqli_fetch_assoc($result)){
            $data[]=$fetch;
        }
        return $data;
    }
?>