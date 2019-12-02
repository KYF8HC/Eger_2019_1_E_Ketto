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

<style>
.html, .body {
    font-family: 'Slabo 27px', serif;
    padding: 0;
    margin: 0;
    background: #ffffff;
  }
  
  * {
    box-sizing: border-box;
  }
  
  .a {
    color: #4ab19a;
  }
  
  .clear {
    clear: both;
    float: none;
    width: 100%;
  }
  
  .container {
    max-width: 1170px;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
  }
  .container .gallery a img {
    float: left;
    width: 20%;
    height: auto;
    border: 2px solid #fff;
    -webkit-transition: -webkit-transform .15s ease;
    -moz-transition: -moz-transform .15s ease;
    -o-transition: -o-transform .15s ease;
    -ms-transition: -ms-transform .15s ease;
    transition: transform .15s ease;
    position: relative;
  }
  .container .gallery a:hover img {
    -webkit-transform: scale(1.05);
    -moz-transform: scale(1.05);
    -o-transform: scale(1.05);
    -ms-transform: scale(1.05);
    transform: scale(1.05);
    z-index: 5;
  }
  .container .gallery a.big img {
    width: 40%;
  }
  
  .align-center {
    text-align: center;
  }
</style>