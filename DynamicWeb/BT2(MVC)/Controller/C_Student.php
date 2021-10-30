<?php
    include_once("../Model/M_Student.php");
    class C_student {
        public function invoke()
        {
            if(isset($_GET['mod1']))
            {
                include_once('../View/V_formInsert.php');
            }
            else if(isset($_POST['insert']))
            {
                $model_Student = new Model_student();
                $id = $_REQUEST['id'];
                $name = $_REQUEST['name'];
                $age = $_REQUEST['age'];
                $university = $_REQUEST['university'];
                $studentList = $model_Student->getAllStudent();
                $count = 0;
                for($i = 1; $i <= sizeof($studentList); $i++)
                {
                    if($id == $studentList[i]->ID)
                    {
                        $count++;
                    }
                }
                if($count > 0)
                {
                    alert('ton tai');
                }
                else 
                {
                    $model_Student->insertStudent($id, $name, $age, $university);
                    include_once('../View/V_allStudent.php');

                }
            }
            else 
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

    }
    $Ctrl_student = new C_student();
    $Ctrl_student->invoke()
?>
