<?php session_start();
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>AAU CGPA CALCULATOR</title>
</head>

<body>

    <div class="container" style="margin-top: 2rem; padding: 1rem .3rem;">

        <h1>CGPA CALCULATOR</h1>
        <div class="intro">
            <p>
                This CGPA Calculator is based on the Nigerian University grading
                system.
            </p>
            <p style="text-decoration: underline;">
                <caption>AMBROSE ALLI UNIVERSITY</caption>
            </p>
        </div>
        <div class="instruction" style="color: red;">
            <caption>Instruction: Enter Student name, Level and the total number of course per session(level)</caption>
        </div><br>
        <form action="solve.php" method="post">
            <div class="row">
                <div class="col">
                    <input autocomplete="off" type="text" class="form-control" name="student_name" id="Mat_number"
                        placeholder="MAT Number" requried><br>
                </div>
                <div class="col">
                    <input id="level" type="number" class="form-control" name="student_level"
                        placeholder="Student level" required ><br>
                </div>
            </div>

            <div class="col">
                <input id="totalCourse" type="number" autocomplete="off" class="form-control" name="hello"
                    placeholder="Number of courses" required max="35"><br>
                <div>
                    <button class="btn btn-secondary" name="submit" onclick="Mat_numbervalidation();">Submit</button>
                </div><br>
            </div>
        </form>

    </div>





    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

    <script>

        function inputValidation() {
            Mat_numbervalidation();
        }

        function Mat_numbervalidation() {
            let Mat_number = document.getElementById('Mat_number').value;
            let studentLevel = document.getElementById('level').value;
            let totalCourse = document.getElementById('totalCourse').value;


            if (Mat_number === '') {
                document.location.reload();
            }

        }




    </script>



</body>

</html>