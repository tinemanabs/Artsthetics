<?php
session_start();
include "./conn.inc.php";
$postid = $_GET["post"];
$sql = "SELECT * FROM user_post WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $_SESSION["id"]);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

unlink("uploads/" . $_SESSION["uname"] . "/" . $row['post_img']);

$deleteSql = "DELETE FROM user_post WHERE post_id = ?";
$deleteStmt = $conn->prepare($deleteSql);
$deleteStmt->bind_param('i', $postid);
$deleteStmt->execute();
header("location: ../profile.php");
echo "<script>";
echo "Swal.fire(
        'Deleted!',
        'Your post has been removed from your profile,
        'success'
        )";
echo "</script>";
