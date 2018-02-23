jQuery(document).ready(function($) {

    // Assuming the items we want to square are .film-listing...
    if( $('.square-responsive').length ) {
        makeItSquare('.square-responsive');

        // This handles resizing and preserving the nice squareness
        $(window).bind('resizeEnd', function() {
            makeItSquare('.square-responsive');
        });
    }

}); // (document).ready(function($)

/**
 * Makes items square based on the grid cell they're enclosed in
 */
function makeItSquare( target ) {

    $this = $(target);

    // Get the width of the grid item the targets are enclosed in.
    // We'll be setting that as the height.
    var targetWidth = $this.parents('.cell').width();
    $this.height(targetWidth);
}

/*
 * ResizeEnd
 *
 * Example:
 * $(window).bind('resizeEnd', function() {
 *  console.log('resize ended 500ms ago');
 * });
 */
$(window).resize(function() {

    if(this.resizeTO) clearTimeout(this.resizeTO);

    this.resizeTO = setTimeout(function() {
        $(this).trigger('resizeEnd');
    }, 500);

});
