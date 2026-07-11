<?php include('dbcon.php'); ?>
<?php include('session.php'); ?>
<?php
    $my_friend_id = $_POST['my_friend_id'];
    if ($my_friend_id != $session_id) {
        $stmt = $conn->prepare("SELECT * FROM friends WHERE (my_id = :session_id AND my_friend_id = :friend_id) OR (my_id = :friend_id AND my_friend_id = :session_id)");
        $stmt->execute(['session_id' => $session_id, 'friend_id' => $my_friend_id]);
        if ($stmt->rowCount() == 0) {
            $insert = $conn->prepare("INSERT INTO friends (my_id,my_friend_id) VALUES (?, ?)");
            $insert->execute([$session_id, $my_friend_id]);
        }
    }
    header('Location: friends.php');
    exit;
?>