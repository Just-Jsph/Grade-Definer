<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Defiiner</title>
</head>
<body>
    <form method="post">
        <h3>Grade Definer</h3>
        <p>Please input your grade: </p>
        <input type="number" name="grade">
        <button type="submit">Sumbmit Grade</button>

        <?php 
        if ($_SERVER["REQUEST_METHOD"] === "POST"){
            $grade = $_POST["grade"];
            
            if($grade>100 ){
                $output="Grade is Exceeds the Limit";
            }
            elseif($grade==100){
                $output="Perfect!";
            }
            elseif($grade>=90 && $grade<=99){
                $output="Excellent!";
            }
            elseif($grade>=80 && $grade<=89){
                $output="Good!";
            }
            elseif($grade>=75 && $grade<=79){
                $output="Pass!";
            }
            elseif($grade<=74){
                $output="Failed!";
            }
        }
        
        echo "<br>Your Grade Equivalent is: $grade : $output"
        ?>
    </form>
</body>
</html>