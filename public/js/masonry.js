/**
 * @author Deewan
 */

$(document).ready(function(){
    //Init jQuery Masonry layout
    init_masonry();

});


function init_masonry(){
    var $container = $('.gallery-section');

    $container.imagesLoaded( function(){
        $container.masonry({
          itemSelector: '.album_item',
          isAnimated: true,
          percentPosition: true,
        });
    });
}
