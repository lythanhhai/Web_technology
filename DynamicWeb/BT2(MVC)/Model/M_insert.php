<?php 
    include_once("E_Student.php");

    class Model_student
    {
        public function __construct() {}
        public function insertStudent()
        {
            $link = mysqli_connect("localhost:3307","root","") or die ("khong the ket noi");
            // chọn loại kết nối
            mysqli_select_db($link,"qlsv");
            $sql ="insert into sinhvien values()";
            // lấy kết quả từ query
            $result= mysqli_query($link, $sql);
            // $i = 0;
            // while ($row = mysqli_fetch_array($result))
            // {
            //     $ID = $row['ID'];
            //     $Name = $row['Name'];
            //     $Age = $row['Age'];
            //     $University = $row['University'];
            //     while($i != $ID) { $i += 1;}
            //     $Students[$i++] = new Entity_student($ID, $Name, $Age, $University);
            // }
            // return $Students;
        }
    }
?>