<?php
session_start();

// include('database.php');

$Mat_number = $_SESSION['Mat_number'] = $_POST['student_name'];
$studentLevel = $_POST['student_level'];

if (empty($_SESSION['Mat_number'])) {
    header("Location: index.php");
    die();
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>

<body><br>

    <div class="container" style="padding: 4rem 1rem;">
        <form id="contentToPrint">
            
                <span><h6>Mat Number: <?php echo $Mat_number; ?></h6></span>
               <span><h6>Level: <?php echo $studentLevel; ?></h6></span> 

            <?php


            $x = $_POST['hello'];

            for ($i = 0; $i < intval($x); $i++) {

                echo "<div class='row';>
                
                <input style='margin: 0 0rem' type='text' placeholder='Course Code' class='courses key-0 form-control col' required />

                <input style='margin: 0 0rem' type='number' class='credit-units key-0 form-control col' placeholder='Course Units' value='' required />
             
                <select style='margin: 0 0rem' class='grade key-0 form-control col' required>
                  <option class='grade' value='select'>Select</option>
                  <option class='grade' value='5'>A</option>
                  <option class='grade' value='4'>B</option>
                  <option class='grade' value='3'>C</option>
                  <option class='grade' value='1'>D</option>
                  <option class='grade' value='0'>F</option>
                </select>
                
                
                </div> <br>";

            }


            ?>
                <div  id="lastp">
                <p id="totalUnit" name="totalUnit" value=""></p>
            </div>
            <div  id="lastp">
                <p id="TearnedUnit" name="TearnedUnit" value=""></p>
            </div>
            <div class="lastp" id="lastp">
                <p id="cgpa-calc">
                    
                </p>
            </div>
            <!-- <span id='a1' class='btn btn-secondary'>
                Add course
            </span>
            <span id='a2' class='btn btn-secondary'>
                Remove course
            </span> -->
            <span id="a3" name='submit' class='btn btn-secondary' onclick='calcCgpa();'>Calculate</span>
            <span id="a4" class="btn btn-primary" onclick="Convert_HTML_To_PDF();">Print CGPA</span>
        </form>
        <br>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

    <script src="main.js"></script>


    <script>

        window.jsPDF = window.jspdf.jsPDF;

        // Convert HTML content to PDF
        function Convert_HTML_To_PDF() {
                // document.getElementById("a1").style.display = "none";
                // document.getElementById("a2").style.display = "none";
                document.getElementById("a3").style.display = "none";
            document.getElementById("a4").style.display = "none";

            setTimeout(() => {
                document.location.reload();
            }, 4000);

            var doc = new jsPDF('p', 'mm', [297, 210]);

            // Source HTMLElement or a string containing HTML.
            var elementHTML = document.querySelector("#contentToPrint");

            doc.html(elementHTML, {
                callback: function (doc) {
                    // Save the PDF
                    doc.save('etech.pdf');
                },
                margin: [10, 10, 10, 10],
                autoPaging: 'text',
                x: 0,
                y: 0,
                width: 190, //target width in the PDF document
                windowWidth: 675 //window width in CSS pixels

            });


        }



    </script>
    



</body>

</html>