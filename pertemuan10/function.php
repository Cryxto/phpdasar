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
        $fail= addslashes(mysqli_error($conn)); 
        if($check>0){
            echo "<script>alert('Data berhasil diproses!');
            document.location.href='admin.php';
            </script>" ;
        }
        else{
            // echo "query gagal!" ;
            // echo mysqli_errno($conn) ;
            // echo mysqli_error($conn) ;
            // echo $fail ;
            // echo "<br>" ;
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
        global $conn;
        $nim = htmlspecialchars($data["nim"]);
        $nama = htmlspecialchars($data["nama"]);
        $jurusan =htmlspecialchars($data["jurusan"]);
        // $gambar = htmlspecialchars($data["gambar"]);
        $gambar = upload($nama);
        if (!$gambar) {
            echo "<script>alert('Data gagal diproses!');
            document.location.href='admin.php';
            </script>" ;
            return false; //biar query dibawah gk ke eksekusi 
        }
        $query = "
        INSERT INTO mahasiswa (nim,nama,jurusan,gambar) 
        VALUES ('$nim','$nama', '$jurusan', '$gambar');
        ";
        // echo $query ;
        // var_dump(mysqli_query($conn,$query)) ;
        mysqli_query($conn,$query);
        // echo mysqli_errno($conn);
        query_check();
    }
    function upload($forname){
        $filename = $_FILES['gambar']['name'];
        $filesize = $_FILES['gambar']['size'];
        $fileeror = $_FILES['gambar']['error'];
        $filetmpname = $_FILES['gambar']['tmp_name'];
        $allowedextension = ["jpg","jpeg","png"];
        // $imgextension =explode('.',$filename);
        // $imgextension =strtolower(end($imgextension)); 
        //cara diatas cara pak Sandika
        $imgextension =pathinfo($filename, PATHINFO_EXTENSION);
        // var_dump($_FILES['gambar']);
        // return false;
        if ($fileeror!==0&&$fileeror!==4){
            echo "<script> alert('error with code : $fileeror'</script>)" ;
            return false;
        }
        if(!in_array($imgextension, $allowedextension)){
            echo "<script> alert('invalid image!')</script>" ;
            return false;
        }
        if($filesize>1000000){
            echo "<script> alert('file size too large!')</script>" ;
            return false;
        }
        $newfilename = strtolower(uniqid($forname));
        $newfilename = preg_replace('/\s+/', '', $newfilename);;
        $newfilename .= '.';
        $newfilename .= $imgextension;
        move_uploaded_file($filetmpname, '../img/'.$newfilename);
        return $newfilename;
    }
    function deletedata($data){
        global $conn;
        mysqli_query($conn,"DELETE FROM mahasiswa WHERE id=$data");
        query_check();
    }
    function updatedata($data){
        global $conn;
        $id = $data["id"];
        $nim = htmlspecialchars($data["nim"]);
        $nama = htmlspecialchars($data["nama"]);
        $jurusan =htmlspecialchars($data["jurusan"]);
        $gambarlama = htmlspecialchars($data["gambarlama"]);

        if ($_FILES["gambar"]["error"]===4){
            $gambar = $gambarlama;
        }
        else{
            $gambar = upload($nama);
        }

        $query = "
        UPDATE mahasiswa SET
        nim='$nim',
        nama='$nama', 
        jurusan='$jurusan', 
        gambar='$gambar'
        WHERE id = $id;
        ";
        mysqli_query($conn,$query);
        query_check();
    }
    function searchData($data){
        // echo $data["keysearch"] ;
        $query = "SELECT * FROM mahasiswa WHERE 
        nim LIKE '%$data%' OR
        nama LIKE '%$data%' OR
        jurusan LIKE '%$data%' OR
        gambar LIKE '%$data%'
        ;";
        
        return query($query);
        // query_check();
    }
    function registration($data){
        global $conn;
        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($conn,$data["password"]);
        $passconfirm = mysqli_real_escape_string($conn,$data["passconfirm"]);
        $result = mysqli_query($conn,"SELECT username FROM user WHERE username = '$username';");
        if(mysqli_fetch_assoc($result)){
            echo "username tidak tersedia!" ;
            return false;
        }
        if($password!==$passconfirm){
            echo "<script>alert('Konfirmasi salah!')</script>" ;
            // query_check();
            return false;
        }
        else{
            echo "Successfully added user!" ;
        }
        $password = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO user (username, password) VALUES ('$username','$password');";
        mysqli_query($conn,$query);
        query_check();
    }
?>
