<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .border {
            border: black thin solid;
            padding: 10px;
            position: absolute;
            display: block;
        }
    </style>
</head>

<?php

//Variables
$n = $e = $t = $c = $g = $agree = "";
$sub = [];
$chk = $chkErr = "";

//Error VAriables
$nErr = $eErr = $gErr = $webErr = $sErr = "";





if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['chkAgree'])) {
        $chk = "checked";
        //Validation For Name
        if (empty($_POST["txtName"])) {
            $nErr = "Required";
        } else {
            $n = test_input($_POST['txtName']);
        }

        //Validation For Email
        if (empty($_POST["txtEmail"])) {
            $emailErr = "Required";
        } else {
            $e = test_input($_POST["txtEmail"]);

            if (!filter_var($e, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }

        //Validation For Course
        if (!empty($_POST["txtTime"])) {
            $t = test_input($_POST["txtTime"]);
        }


        //Validation For Time
        if (!empty($_POST["txtClasses"])) {
            $c = test_input($_POST["txtClasses"]);
        }


        //Validation For Gender
        if (empty($_POST["radioGender"])) {
            $gErr = "Required";
        } else {
            $g = test_input($_POST["radioGender"]);
        }


        //Validation For Subjects
        if (empty($_POST["multiSubjects"])) {
            $sErr = "Select Subjects";
        } else {
            $sub = $_POST["multiSubjects"];
        }
    } else {
        $chkErr = "Please Agree The T&C.";
    }
}


function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<body>
    <div class="border">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <table>
                <tbody>
                    <tr>
                        <td colspan="2">
                            <h1>Absolute classes registration</h1>
                        </td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td>
                            <input type="text" name="txtName" id="txtName" placeholder="Name" required value="<?php echo $n; ?>">
                            <span class="error">* <?php echo $nErr; ?></span>
                        </td>

                    </tr>

                    <tr>
                        <td>Email</td>
                        <td>
                            <input type="email" name="txtEmail" id="txtEmail" placeholder="Email" required value="<?php echo $e; ?>">
                            <span class="error">* <?php echo $eErr; ?></span>
                        </td>
                    </tr>

                    <tr>
                        <td>Time</td>
                        <td>
                            <input type="time" name="txtTime" id="txtTime" placeholder="Time" value="<?php echo $t; ?>">
                            <span class="error"><?php echo $webErr; ?></span>
                        </td>
                    </tr>

                    <tr>
                        <td>Classes</td>
                        <td>
                            <textarea name="txtClasses" id="txtClasses" cols="40" rows="5"><?php echo $c; ?></textarea>
                        </td>
                    </tr>

                    <tr>
                        <td>Gender</td>
                        <td>
                            <input type="radio" name="radioGender" id="radioMale" value="Male">Male
                            <input type="radio" name="radioGender" id="radioFemale" value="Female">Female
                            <span class="error">* <?php echo $gErr; ?></span>
                        </td>
                    </tr>

                    <tr>
                        <td>Select</td>
                        <td>
                            <select name="multiSubjects[]" id="multiSubjects" multiple>
                                <option value="Android">Android</option>
                                <option value="Java">Java</option>
                                <option value="C#">C#</option>
                                <option value="Database">Database</option>
                                <option value="Php">Php</option>
                                <option value="Python">Python</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>Agree</td>
                        <td>
                            <input type="checkbox" name="chkAgree" id="chkAgree" value="1" <?php echo $chk; ?>>
                            <span class="error">* <?php echo $chkErr; ?></span>
                        </td>
                    </tr>

                    <tr>

                        <td colspan="2"><input type="submit" name="btnSubmit" id="btnSubmit" value="Submit"></td>
                    </tr>
                </tbody>
            </table>
        </form>

        <?php
        echo "<h2>Your given values are as :</h2>";
        echo ("<p>Your name is $n</p>");
        echo ("<p> your email address is $e</p>");
        echo ("<p>Your class time at $t</p>");
        echo ("<p>your class info $c </p>");
        echo ("<p>your gender is $g</p>");

        for ($i = 0; $i < count($sub); $i++) {
            echo ($sub[$i] . " ");
        }
        ?>
    </div>
</body>

</html>