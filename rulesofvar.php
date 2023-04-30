


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <?php

    echo "Rules for creating variables";

    ?>

    <ul>
        <li>


        <?php

$name = "Ansar"; // starts with a dollar
echo $name;

        ?>
        </li>
        <li>
        <?php

$lastname = "ali"; // cannot satrts with a number
echo $lastname;

        ?>
        </li>
        <li>
        <?php

$_fathername = "Ghulam";  // can starts with an underscore
echo $_fathername;

        ?>
        </li>
        <li>

        <?php

$current_sem = 2; // can consist of alphanumeric and letters
echo $current_sem;

        ?>
        </li>
        <li>
        <?php

$Name = "Ansar ali";  // case sensitive
echo $Name;

        ?>
        </li>
    </ul>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>



