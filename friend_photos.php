<?php include('header.php'); ?>
<?php include('session.php'); ?>
<body class="page-photos">
    <?php include('navbar.php'); ?>
    <div id="masthead">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="top-spacer"> </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-body">
                        <?php
                        $friend_id = isset($_GET['friend_id']) ? intval($_GET['friend_id']) : 0;
                        if ($friend_id <= 0) {
                            header('Location: friends.php');
                            exit;
                        }

                        $friend_stmt = $conn->prepare("SELECT * FROM friends WHERE (my_id = :session_id AND my_friend_id = :friend_id) OR (my_id = :friend_id AND my_friend_id = :session_id)");
                        $friend_stmt->execute(['session_id' => $session_id, 'friend_id' => $friend_id]);
                        if ($friend_stmt->rowCount() == 0) {
                            header('Location: friends.php');
                            exit;
                        }

                        $user_stmt = $conn->prepare("SELECT firstname, lastname FROM members WHERE member_id = :friend_id");
                        $user_stmt->execute(['friend_id' => $friend_id]);
                        $user_row = $user_stmt->fetch(PDO::FETCH_ASSOC);
                        $friend_name = $user_row ? $user_row['firstname'] . ' ' . $user_row['lastname'] : 'Amigo';
                        ?>
                        <h2>Fotos de <?php echo htmlspecialchars($friend_name); ?></h2>
                        <p><a class="btn btn-default" href="friends.php"><i class="icon-arrow-left"></i> Volver a Amigos</a></p>
                        <div class="row">
                            <?php
                            $photos_stmt = $conn->prepare("SELECT * FROM photos WHERE member_id = :friend_id");
                            $photos_stmt->execute(['friend_id' => $friend_id]);
                            if ($photos_stmt->rowCount() > 0) {
                                while ($photo = $photos_stmt->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                    <div class="col-md-3 col-sm-4 text-center" style="margin-bottom:20px;">
                                        <img class="photo" src="<?php echo htmlspecialchars($photo['location']); ?>" style="max-width:100%; height:auto;" />
                                    </div>
                                    <?php
                                }
                            } else {
                                ?>
                                <div class="col-md-12">
                                    <div class="alert alert-info">Este amigo no ha publicado fotos o aún no ha subido ninguna.</div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>
</body>
</html>
