<?php
    function CalcFinalGrade($students){
        $result = "";

        foreach($students as $item){
            if($item['attendance'] > 90 && $item['score'] <= 95){
                $item['score'] += 5;
            }else if($item['attendance'] > 90 && $item['attendance'] <= 95){
                $item['score'] = 100;
            }
            if($item['score'] >= 90){
                $grade = "A";
            }
            else if($item['score'] >= 75 &&  $item['score'] <= 89){
                $grade = "B";
            }
            else if($item['score'] >= 60) {
                $grade = "C";
            }else {
                $grade = "F";
            }
              $result .= "{$item['name']} → Final Score: {$item['score']} → Grade: {$grade} <br>";
        }

        return $result;
    }
    
    $students = [
        ["name" => "Ali", "score" => 87, "attendance" => 95],
        ["name" => "Sara", "score" => 72, "attendance" => 80],
        ["name" => "Youssef", "score" => 58, "attendance" => 92]
    ];
        echo CalcFinalGrade($students)
?>