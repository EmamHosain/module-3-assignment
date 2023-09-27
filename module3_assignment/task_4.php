<?php
/*
 Create a multidimensional array called $studentGrades to store the grades 
 of three students. Each student has grades for three subjects: Math, English, and Science. Write 
 a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student.
*/



$studentGrades = [
    "student_1" => ["Math" => 56, "English" => 70, "Science" => 80],
    "student_2" => ["Math" => 70, "English" => 50, "Science" => 90],
    "student_3" => ["Math" => 50, "English" => 80, "Science" => 85],
];

function calculateAVG($grades)
{
    foreach ($grades as $key => $value) {
        // print_r($key);
        $sum = array_sum($value);
        $student = count($value);
        $gradesAVG = floor($sum / $student);
    //    echo $gradesAVG . PHP_EOL;
        if($gradesAVG >= 80 && $gradesAVG <= 100){
           echo "$key : average is $gradesAVG and you have got A+" . PHP_EOL;
        }
        else if($gradesAVG >= 70 && $gradesAVG <= 79){
            echo "$key : average is $gradesAVG and you have got A". PHP_EOL;
        }
        else if($gradesAVG >= 60 && $gradesAVG <= 69){
            echo "$key : average is $gradesAVG and you have got A-". PHP_EOL;
        }
        else if($gradesAVG >= 50 && $gradesAVG <= 59){
            echo "$key : average is $gradesAVG and you have got B". PHP_EOL;
        }
        else if($gradesAVG >= 40 && $gradesAVG <= 49){
            echo "$key : average is $gradesAVG and you have got c". PHP_EOL;
        }
        else if($gradesAVG >= 30 && $gradesAVG <= 39){
            echo "$key : average is $gradesAVG and you have got D". PHP_EOL;
        }
        else{
            echo "$key : average is $gradesAVG and you have got F". PHP_EOL;
        }
    }

}

calculateAVG($studentGrades);
