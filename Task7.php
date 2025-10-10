    <?php 
        function CalcSalary($Employer) {
            $result = "";
            
            foreach($Employer as $item){    
                $Bonus = 0;        
                if($item['years_of_experience'] > 5){
                    $Bonus += $item['base_salary'] * 0.10 ; 
                } 
                if($item['performance_score'] > 90){
                    $Bonus += ($item['base_salary'] * 0.05);
                }

                $TotalSalary = $item['base_salary'] + $Bonus;
                $MaxAllowed = $item['base_salary'] * 1.5;

                if( $MaxAllowed < $TotalSalary ){
                    $TotalSalary = $MaxAllowed;
                }
            
                $result .= "{$item['name']}  → Base : {$item['base_salary']} | Bonus : {$Bonus} | Final : {$TotalSalary} <br>" ;
            }
            return $result;
        }
            $employees = [
        ["name" => "Khalid", "base_salary" => 3000, "years_of_experience" => 6, "performance_score" => 92],
        ["name" => "Amina", "base_salary" => 2800, "years_of_experience" => 3, "performance_score" => 88],
        ["name" => "Omar", "base_salary" => 2500, "years_of_experience" => 8, "performance_score" => 95]
    ];
        echo CalcSalary($employees);

    ?>