<?php 
    include_once("E_Student.php");

    class Model_student
    {
        public function __construct() {}
        public function getAllStudent()
        {
            $link = mysqli_connect("localhost:3307","root","") or die ("khong the ket noi");
            // chọn loại kết nối
            mysqli_select_db($link,"qlsv");
            $sql ="select * from sinhvien";
            // lấy kết quả từ query
            $result= mysqli_query($link, $sql);
            $i = 0;
            while ($row = mysqli_fetch_array($result))
            {
                $ID = $row['ID'];
                $Name = $row['Name'];
                $Age = $row['Age'];
                $University = $row['University'];
                while($i != $ID) { $i += 1;}
                $Students[$i++] = new Entity_student($ID, $Name, $Age, $University);
            }
            mysqli_free_result($result);
            mysqli_close($link);
            return $Students;

        }
        public function getStudentDetail($stid)
        {
            $allStudent = $this->getAllStudent();
            // for($i = 1; $i <= sizeof($allStudent) ; $i++)
            // {
            //     if($stid == $allStudent[$i]->ID)
            //     {
            //         $student = new Entity_student($allStudent[$i]->ID, $allStudent[$i]->Name, $allStudent[$i]->Age, $allStudent[$i]->University);
            //     }
            // }
            return $allStudent[$stid];
        }
        public function insertStudent($id, $name, $age, $university)
        {
            $link = mysqli_connect("localhost:3307","root","") or die ("khong the ket noi");
            // chọn loại kết nối
            mysqli_select_db($link,"qlsv");
            $sql ="insert into sinhvien values('$id', '$name', '$age', '$university')";
            // lấy kết quả từ query
            $result= mysqli_query($link, $sql);
        }
        
    }
?>