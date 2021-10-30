<?php
    include_once("../Model/M_Student.php");
    class C_student {
        public function invoke()
        {
            if(isset($_GET['stid']))
            {
                $model_Student = new Model_student();
                $student = $model_Student->getStudentDetail($_GET['stid']);
                include_once("../View/V_detailStudent.php");
            }
            else 
            {
                $model_Student = new Model_student();
                $studentList = $model_Student->getAllStudent();
                include_once("../View/V_allStudent.php");
            }
        } 
    }
    $Ctrl_student = new C_student();
    $Ctrl_student->invoke()
?>
