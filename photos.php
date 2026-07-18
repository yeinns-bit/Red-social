<?php include('header.php'); ?>    
<?php include('session.php'); ?>    
<?php
/* ============================================================
   Subida de FOTOS y VIDEOS
   Configura aquí los formatos y límites (fácil de cambiar):
   ============================================================ */
$IMG_EXT = array('jpg', 'jpeg', 'png', 'webp', 'gif');
$VID_EXT = array('mp4', 'webm', 'ogg', 'mov');
$MAX_IMG = 10 * 1024 * 1024;   // 10 MB para imagenes
$MAX_VID = 50 * 1024 * 1024;   // 50 MB para videos

$upload_msg = '';

if (isset($_POST['submit']) && isset($_FILES['media'])) {
    $file = $_FILES['media'];

    if ($file['error'] !== UPLOAD_ERR_OK) {
        $upload_msg = 'No se pudo subir el archivo. Puede que sea mas grande de lo que permite el servidor.';
    } else {
        $ext    = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        $is_img = in_array($ext, $IMG_EXT);
        $is_vid = in_array($ext, $VID_EXT);

        if (!$is_img && !$is_vid) {
            $upload_msg = 'Formato no permitido. Usa imagenes (jpg, png, webp, gif) o videos (mp4, webm, mov).';
        } elseif ($is_img && $file['size'] > $MAX_IMG) {
            $upload_msg = 'La imagen supera el limite de 10 MB.';
        } elseif ($is_vid && $file['size'] > $MAX_VID) {
            $upload_msg = 'El video supera el limite de 50 MB.';
        } else {
            $base = preg_replace('/[^A-Za-z0-9_-]/', '_', pathinfo($file['name'], PATHINFO_FILENAME));
            $safe = $base . '_' . uniqid() . '.' . $ext;
            $dest = 'upload/' . $safe;

            if (move_uploaded_file($file['tmp_name'], $dest)) {
                $stmt = $conn->prepare("insert into photos (location, member_id) values (:loc, :mid)");
                $stmt->execute(array(':loc' => $dest, ':mid' => $session_id));
                echo "<script>window.location = 'photos.php';</script>";
                exit;
            } else {
                $upload_msg = 'No se pudo guardar el archivo en el servidor.';
            }
        }
    }
}
?>
    <body class="page-photos">
	<?php include('navbar.php'); ?>

<div id="masthead">  
  <div class="container">
	<?php include('heading.php'); ?> 
  </div><!-- /cont -->
  
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="top-spacer"> </div>
      </div>
    </div> 
  </div><!-- /cont -->
  
</div>


<div class="container">
  <div class="row">
    
    <div class="col-md-12"> 
      
      <div class="panel">
        <div class="panel-body">
          
			<h2 id="po">Mis Fotos y Videos</h2>
				<div class="pull-right">
							<form id="photos" method="POST" enctype="multipart/form-data">
									<label class="control-label" for="media">Foto o video:</label>
										<input type="file" id="media" name="media" class="font" accept="image/*,video/*" required>
										<p class="upload-hint">Imagenes (jpg, png, webp, gif) o videos (mp4, webm, mov). Max: 10&nbsp;MB imagen &middot; 50&nbsp;MB video.</p>
										<button type="submit" name="submit" class="btn btn-success"><i class="icon-upload"></i> Subir</button>
							</form>
							<?php if ($upload_msg): ?>
								<div class="upload-alert"><?php echo htmlspecialchars($upload_msg); ?></div>
							<?php endif; ?>
				</div>
			
          <div class="row">  		  
            <hr>
            <hr>
				<?php
	$query = $conn->query("select * from photos where member_id='$session_id'");
	while($row = $query->fetch()){
	$id  = $row['photos_id'];
	$loc = $row['location'];
	$ext = strtolower(pathinfo($loc, PATHINFO_EXTENSION));
	$is_video = in_array($ext, $VID_EXT);
	?>
            <div class="col-md-2 col-sm-3 text-center media-item">
				<?php if ($is_video): ?>
					<video class="photo is-video" controls preload="metadata">
						<source src="<?php echo $loc; ?>" type="video/<?php echo ($ext === 'mov' ? 'mp4' : $ext); ?>">
						Tu navegador no puede reproducir este video.
					</video>
				<?php else: ?>
					<img class="photo" src="<?php echo $loc; ?>" >
				<?php endif; ?>
				<hr>
	<a class="btn btn-danger" href="delete_photos.php<?php echo '?id='.$id; ?>"><i class="icon-remove"></i> Eliminar</a>
            </div>
				<?php } ?>
          </div>
          <hr>
        </div>
      </div>
   	</div><!--/col-12-->
  </div>
</div>
                                                
<?php include('footer.php'); ?>
        
    </body>
</html>
