<?php
    include_once("../Model/M_Student.php");
    class C_student {
        public function invoke()
        {
            // chèn
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
            // update
            else if(isset($_GET['mod2']))
            {
                $model_Student = new Model_student();
                $studentList = $model_Student->getAllStudent();
                include_once('../View/V_updateAllStudent.php');
            }
            else if(isset($_GET['update']))
            {
                $name = $_REQUEST['name'];
                $age = $_REQUEST['age'];
                $university = $_REQUEST['university'];
                $model_Student = new Model_student();
                $model_Student->updateStudent($_GET['update'], $name, $age, $university);
                $studentList = $model_Student->getAllStudent();
                include_once("../View/V_allStudent.php");
            }
            else if(isset($_GET['ID1']))
            {
                $ID1 = $_GET['ID1'];
                //include_once("../View/V_test.php");
                include_once('../View/V_formUpdate.php');
            }

            // xóa
            else if(isset($_GET['mod3']))
            {
                $model_Student = new Model_student();
                $studentList = $model_Student->getAllStudent();
                include_once('../View/V_removeStudent.php');
            }
            else if(isset($_GET['removeID']))
            {
                $removeID = $_GET['removeID'];
                $model_Student = new Model_student();
                $model_Student->removeStudent($removeID);
                $studentList = $model_Student->getALlStudent();
                include_once('../View/V_updateAllStudent.php');
            }
            // tìm kiếm
            else if(isset($_GET['mod4']))
            {
                include_once('../View/V_formSearchStudent.php');
            }
            else if(isset($_GET['search']))
            {
                $chon = $_REQUEST['chon'];
                $noidung = $_REQUEST['noidung'];
                //include_once('../View/V_test.php');
                $model_Student = new Model_student();
                $studentList1 = $model_Student->searchStudent($chon, $noidung);
                include_once('../View/V_resSearch.php');
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
