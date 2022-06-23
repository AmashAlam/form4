<?php

session_start();

$firstname = '';
$lastname = '';
$email = '';
$problem = '';
$description = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') :
    if (
        isset($_POST['submit'])
    ) {
        $firstname = $_SESSION['firstname'] = $_POST['firstname'];
        $lastname = $_SESSION['lastname'] = $_POST['lastname'];
        $email = $_SESSION['email'] = $_POST['email'];
        $problem = ucfirst($_SESSION['problem'] = $_POST['problem']);
        $description = $_SESSION['description'] = $_POST['description'];
    }else{
        echo "not done";
    }
?>
<div class="container">
    <div class="card-header">
        <h3>Record Inserted by the user </h3>
    </div>
    <div class="card-body">
        <table class="table">
            <tbody>
                <tr>
                    <th>First Name</th>
                    <td><?php echo $firstname?></td>
                </tr>
                <tr>
                    <th>Last Name</th>
                    <td><?php echo $lastname?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?php echo $email ?></td>
                </tr>
                <tr>
                    <th>problem</th>
                    <td><?php echo $problem ?></td>
                </tr>
                <tr>
                    <th>Descripiton</th>
                    <td><?php echo $description ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


<?php    
echo "<br>";
echo "<button class='btn btn-success'><a href='edit.php'>Edit</a></button";
endif; ?>