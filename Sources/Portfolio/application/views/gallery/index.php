<div class="container">
    <div class="gallery">
    <?php foreach ($data['img'] as $img): ?>        
        <a href="<?=URL?>assets/img/gallery/<?=$img["location"]?>"><img src="<?=URL?>assets/img/gallery/<?=$img["location"]?>" style="width:20%"></a>
        <?php endforeach; ?>
    </div>    
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">

// Képek lapozásának próbálkozása

var $gallery = $('.gallery a').simpleLightbox();

$.simpleLightbox({
 
    sourceAttr: 'href',
    overlay:    true,
    spinner:    true,
    nav:      true,
    navText:    ['&larr;','&rarr;'],
    captions:   true,
    captionDelay:   0,
    captionSelector:  'img',
    captionType:    'attr',
    captionPosition:  'bottom',
    captionClass: '',
    captionsData: 'title',
    close:      true,
    closeText:    'X',
    swipeClose: true,
    showCounter:  true,
    fileExt:    'png|jpg|jpeg|gif',
    animationSlide:   true,
    animationSpeed: 250,
    preloading:   true,
    enableKeyboard: true,
    loop:     true,
    rel: false,
    docClose:     true,
    swipeTolerance: 50,
    className:    'simple-lightbox',
    widthRatio:   0.8,
    heightRatio:  0.9,
    scaleImageToRatio: false,
    disableRightClick:  false,
    alertError:     true,
    alertErrorMessage:  'Image not found, next image will be loaded',
    additionalHtml:   false,
    history: true,
    throttleInterval: 0,
    doubleTapZoom: 2,
    maxZoom: 10
});

gallery.open();

</script>