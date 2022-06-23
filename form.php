<!DOCTYPE html>
<html lang="en">
<head>
<style>
div {
  background: rgb(150, 228, 50,0.8);
}

div.form-group {
  background: rgba(20, 128, 100, 0.7);
}

div.container {
  background: rgba(20, 128, 300, 0.2);
}

div.card{
    background: rgba(150, 228, 50, 0.3);
}
div.card-header {
  
  background: rgba(20, 128, 100, 0.7);
}
</style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
          crossorigin="anonymous">
    
    <title>Contact Form</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Simple Web Contact Form</h3>
            </div>
            <div class="card-body">
                <form action="show.php" method="POST">
                    <div class="form-group">
                        <label for="first name"><strong>first Name</strong></label>
                        <input type="text" name="firstname" class="form-control"
                          value="<?php if (isset($_SESSION['first name'])) echo $_SESSION['first name'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="last name"><strong>Last Name</strong></label>
                        <input type="text" name="lastname" class="form-control"
                          value="<?php if (isset($_SESSION['last name'])) echo $_SESSION['last name'] ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="email"><strong>Email</strong></label>
                        <input type="text" name="email" class="form-control"
                          value="<?php if (isset($_SESSION['email'])) echo $_SESSION['email'] ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="problem"><strong>Your Problem: </strong>  </label>
                        <select name="problem" id="si" clas="form-control"
                          value="<?php if (isset($_SESSION['Problem'])) echo $_SESSION['Problem'] . ' selected'?>">
                            <option value="query" 
                            <?php if (isset($_SESSION['Problem']) && $_SESSION['Problem'] == 'query') echo "selected" ?>>Query</option>
                            <option value="feedback"
                            <?php if (isset($_SESSION['Problem']) && $_SESSION['Problem'] == 'feedback') echo "selected" ?>>Feedback</option>
                            <option value="complaint"
                            <?php if (isset($_SESSION['Problem']) && $_SESSION['Problem'] == 'complaint') echo "selected" ?>>Complaint</option>
                            <option value="other"
                            <?php if (isset($_SESSION['Problem']) && $_SESSION['Problem'] == 'other') echo "selected" ?>>Other</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="description"><strong>Description</strong></label><br>
                        <textarea name="description" cols="30" rows="2" class="form-control"></textarea>
                        <script>
                            CKEDITOR.replace( 'description' );
                            <?php
                                $var = $_SESSION['description'];
                                echo isset($_SESSION['description']) ? "let jsvar ='$var';" : "let jsvar = ''";
                            ?>
                            CKEDITOR.instances['description'].
                            setData(jsvar);
                        </script>
                    </div>
                    
                    <button type='submit' name='submit' class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
</body>
</html>