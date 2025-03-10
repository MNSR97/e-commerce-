<?php

// require_once "config\Database.php";

// class SearchModel {
//     protected $connect;
// public function __construct() {
//     $this->connect = database::getInstance();
// }
// if (isset($_POST['search'])) {
//     $search = '%' . $_POST['search'] . '%';
//     $stmt = $conn->prepare("SELECT product_name FROM products WHERE product_name LIKE ? LIMIT 5");
//     $stmt->bind_param("s", $search);
//     $stmt->execute();
//     $result = $stmt->get_result();

//     if ($result->num_rows > 0) {
//         while ($row = $result->fetch_assoc()) {
//             echo "<div class='result-item'>" . htmlspecialchars($row['product_name']) . "</div>";
//         }
//     } else {
//         echo "<div class='result-item'>No results found</div>";
//     }
//     $stmt->close();
// }
// }
?>