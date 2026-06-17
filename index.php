<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Definer</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body{
            min-height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            background:linear-gradient(135deg,#4f46e5,#7c3aed);
        }

        form{
            width:400px;
            background:#fff;
            padding:35px;
            border-radius:20px;
            box-shadow:0 15px 35px rgba(0,0,0,0.2);
            text-align:center;
        }

        h3{
            color:#4f46e5;
            font-size:28px;
            margin-bottom:15px;
        }

        p{
            color:#555;
            margin-bottom:20px;
        }

        input[type="number"]{
            width:100%;
            padding:12px;
            border:2px solid #ddd;
            border-radius:10px;
            outline:none;
            font-size:16px;
            margin-bottom:15px;
            transition:.3s;
        }

        input[type="number"]:focus{
            border-color:#4f46e5;
        }

        button{
            width:100%;
            padding:12px;
            border:none;
            border-radius:10px;
            background:#4f46e5;
            color:white;
            font-size:16px;
            font-weight:bold;
            cursor:pointer;
            transition:.3s;
        }

        button:hover{
            background:#4338ca;
            transform:translateY(-2px);
        }

        .result{
            margin-top:20px;
            padding:12px;
            background:#eef2ff;
            border-left:5px solid #4f46e5;
            border-radius:8px;
            color:#333;
            font-weight:600;
            text-align:left;
        }
    </style>
</head>
<body>

    <form method="post">
        <h3>Grade Definer</h3>

        <p>Please input your grade:</p>

        <input type="number" name="grade" required>

        <button type="submit">Submit Grade</button>

        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $grade = $_POST["grade"];

            if ($grade > 100) {
                $output = "Grade Exceeds the Limit";
            }
            elseif ($grade == 100) {
                $output = "Perfect!";
            }
            elseif ($grade >= 90 && $grade <= 99) {
                $output = "Excellent!";
            }
            elseif ($grade >= 80 && $grade <= 89) {
                $output = "Good!";
            }
            elseif ($grade >= 75 && $grade <= 79) {
                $output = "Pass!";
            }
            elseif ($grade <= 74) {
                $output = "Failed!";
            }

            echo "<div class='result'>
                    Your Grade Equivalent is: <strong>$grade</strong><br>
                    Result: <strong>$output</strong>
                  </div>";
        }
        ?>
    </form>

</body>
</html>