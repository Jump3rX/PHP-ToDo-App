<?php include("db.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <title>PHP ToDo App</title>
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-center bg-success  p-3 mt-3 rounded">
            <h1 class="text-white">PHP ToDo App</h1>
        </div>

        <div class="rounded shadow p-3 mt-5">
            <form action="index.php" method="post" class="row g-2">
                <div class="input-group mt-5 mb-3">
                    <input type="text" name="task" class="form-control" placeholder="Enter Task" aria-label="Recipient’s username" aria-describedby="button-addon2">
                    <button class="btn btn-success" type="submit" id="button-addon2">Add Task</button>
                </div>
            </form>         
        </div>

        <div class="rounded shadow-sm p-3 mt-3">
            <ul class="list-group">
                <li class="list-group-item list-group-item-action">An item</li>
                <li class="list-group-item list-group-item-action">A second item</li>
                <li class="list-group-item list-group-item-action">A third item</li>
                <li class="list-group-item list-group-item-action">A fourth item</li>
                <li class="list-group-item list-group-item-action">And a fifth one</li>
            </ul>
        </div>
        
    </div>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $task_name = filter_input(INPUT_POST,"task",FILTER_SANITIZE_SPECIAL_CHARS);
    $sql = "INSERT INTO tasks (task) VALUES  ('$task_name')";
    mysqli_query($conn, $sql);
}
    mysqli_close($conn);
?>