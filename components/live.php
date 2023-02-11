<?php
require '../conf/config.php';

if (!empty($_POST['query'])) {
    $search = strtolower($_POST['query']);
    $stmt = $conn->prepare("SELECT * from blog where topic like '%$search%' or textbox like '%$search%' order By id DESC LIMIT 6");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if (!$result) {
        echo '';
    } else {
        foreach ($result as $row) {
            $topicc = substr($row['topic'], 0, 30);
            echo <<<EOT
            <p onclick="Search('$topicc')">$topicc..</p>
            EOT;


        }

    }
}
?>