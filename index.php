<?php
    
    $students = array(
        array(
            'id' => 1,
            'firstname' => 'John',
            'lastname' => 'Doe',
            'email' => 'john@doe.com'
            
        ),
        
        array(
            'id' => 2,
            'firstname' => 'Patrick',
            'lastname' => 'Durand',
            'email' => 'patrick@durand.com'
        )
    );


    $dbconn = new PDO('mysql:host=localhost; dbname=students', 'me', 'mdp'); 

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

<head>
    <meta charset="utf-8">
    
</head>

<body>
    
    <h1> Students</h1>

    <ul>
       <?php
            foreach($dbconn->query('SELECT * FROM students') as $student) {
                echo "<li>".$student["firstname"]." ".$student["lastname"]." (".$student["email"].")</li>";
            }
        
        ?>
    </ul>
</body>

</html>