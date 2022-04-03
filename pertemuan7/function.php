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
        $check=mysqli_affected_rows($conn);
        if($check>0){
            echo "<script>alert('Data berhasil diproses!');
            document.location.href='admin.php';
            </script>" ;
        }
        else{
            // echo "query gagal!" ;
            $fail=  mysqli_error($conn) ;
            echo "<br>" ;
            echo "<script>alert('Data gagal diproses! $fail');
            document.location.href='admin.php';
            </script>" ;
            // echo "<script>alert(`mysqli_error($conn) ;`);</script>" ;
        }
        return $check;
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
    function insertdata($data){
        $nim = htmlspecialchars($data["nim"]);
        $nama = htmlspecialchars($data["nama"]);
        $jurusan =htmlspecialchars($data["jurusan"]);
        $gambar = htmlspecialchars($data["gambar"]);
        $query = "
        INSERT INTO mahasiswa (nim,nama,jurusan,gambar) 
        VALUES ('$nim','$nama', '$jurusan', '$gambar');
        ";
        query($query);
        query_check();
    }
    function deletedata($data){
        global $conn;
        mysqli_query($conn,"DELETE FROM mahasiswa WHERE id=$data");
        query_check();
    }
?>
