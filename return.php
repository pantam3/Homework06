<?php
    session_start();
    echo "<pre>";
    echo var_dump($_GET);
    echo "</pre>";

    $counter = 0;

    if(isset($_GET["question1"])){
        $answer = $_GET["question1"];
        if($answer == "681"){
            $counter++;
        }
    }

    if(isset($_GET["question2"])){
        $answer = $_GET["question2"];
        if($answer == "Paisii"){
            $counter++;
        }
    }

    if(isset($_GET["question3"])){
        $answer = $_GET["question3"];
        if($answer == "863"){
            $counter++;
        }
    }

    if(isset($_GET["question4"])){
        $answer = $_GET["question4"];
        if($answer == "Boris"){
            $counter++;
        }
    }

    if(isset($_GET["question5"])){
        $answer = $_GET["question5"];
        if($answer == "bqlo"){
            $counter++;
        }
    }

    if(isset($_GET["question6"])){
        $answer = $_GET["question6"];
        if($answer == "Cvetan"){
            $counter++;
        }
    }

    if(isset($_GET["question7"])){
        $answer = $_GET["question7"];
        if($answer == "Konstantin"){
            $counter++;
        }
    }

    if(isset($_GET["question8"])){
        $answer = $_GET["question8"];
        if($answer == "Sofronii"){
            $counter++;
        }
    }

    if(isset($_GET["question9"])){
        $answer = $_GET["question9"];
        if($answer == "Krum"){
            $counter++;
        }
    }

    if(isset($_GET["question10"])){
        $answer = $_GET["question10"];
        if($answer == "Asen"){
            $counter++;
        }
    }

    $_SESSION['counter'] = $counter;


    header('Location: http://localhost:8080/Homework2/index.php');


?>