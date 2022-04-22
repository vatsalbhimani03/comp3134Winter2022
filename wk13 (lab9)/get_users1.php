<?php
    $query = "SELECT * FROM users WHERE firstname='" . $_GET['query'] . "' AND active=1 </br>";
    echo $query;
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=wk13", "root", "ThisIsAVerySecurePassword"); 
        $stmt = $pdo->prepare("SELECT * FROM users WHERE firstname='" . $_GET['query'] . "' AND active=1");
        $stmt->execute();
        $users = $stmt->fetchAll();
        
        
        #$query = $pdo->query("SELECT * FROM users"); # 
    } catch (PDOException $e) {
        die("Could not connect to the database $dbname :" . $e->getMessage());
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Users</title>
</head>
<body>
    <form>
        <input type="text" name="query" placeholder="query">
        <input type="submit" value="Submit">
    </form>
    <h2>Results</h2>
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>username</td>
                <td>email</td>
                <td>firstname</td>
                <td>lastname</td>
                <td>active</td>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($users as $user) {
                    echo "<tr>";
                    echo "<td>" . $user['id'] . "</td>";
                    echo "<td>" . $user['username'] . "</td>";
                    echo "<td>" . $user['email'] . "</td>";
                    echo "<td>" . $user['firstname'] . "</td>";
                    echo "<td>" . $user['lastname'] . "</td>";
                    echo "<td>" . $user['active'] . "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>