<?php
// var_dump($_SERVER);  // Uncomment this line for debugging server variables
// echo $_SERVER['PHP_SELF'];  // Outputs the current file path

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];  // Retrieving the posted email
    echo "<h1>My Email is $email</h1>";
} else {
    echo "Please submit the form.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-whatever" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-whatever" crossorigin="anonymous"></script>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="container mt-5">
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
        </div>
        <button type="submit" class="btn btn-lg btn-primary">Save</button>
    </form>
</body>
</html>
