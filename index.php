<?php
    include 'gallery/Gallery.php';
    
    $gallery = new Gallery();
    $gallery->setPath('gallery/images');
    $images = $gallery->getImages(array('jpg'));
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Photo Gallery</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="gallery/gallery.css">
    </head>
    <body>
        
        <header>
            <h1>Photo Gallery</h1>
            <nav>
            
            </nav>
            <hr>
        </header>
        
        <main class="container">
            <?php if ($images): ?>
            <div class="gallery cf">
                <?php foreach($images as $image): ?>
                <div class="gallery-item">
                    <a href="<?php echo $image['full']; ?>"><img src="<?php echo $image['thumb']; ?>"></a>
                </div>
            <?php endforeach; ?>
            </div>
            <?php else: ?>
                There are no images.
            <?php endif; ?>
        </main>
        
        <footer>
            <hr>
            <small>by S Rayner</small>
        </footer>
        
    </body>
</html>