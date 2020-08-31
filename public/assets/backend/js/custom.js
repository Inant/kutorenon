$(document).ready(function() {
    // ClassicEditor
    //     .create( document.querySelector( '#editor' ) )
    //     .catch( error => {
    //     console.error( error );
    // } );

    // ClassicEditor
    //     .create( document.querySelector( '#editor2' ) )
    //     .catch( error => {
    //     console.error( error );
    // } );

    CKEDITOR.replace( 'editor');
    CKEDITOR.replace( 'editor2');

    $(".datepicker").datepicker({
        format: "yyyy-mm-dd"
    });

    $(".select2").select2();
    
    $(".fullpage-version").click(function(e) {
        e.preventDefault();
        $("body").toggleClass("fullpage");
        $(".fullpage-version span").toggleClass("fa-chevron-right");
    });
    $("form").submit(function() {
        $(".loading").addClass("show");
    });
    $(".nav-link[data-toggle='collapse']").click(function() {
        if ($(this).hasClass("collapsed")) {
            $(".nav-link[data-toggle='collapse']").addClass("collapsed");
            $(".nav-link[data-toggle='collapse']").attr("aria-expanded", false);

            $(this).removeClass("collapsed");
            $(this).attr("aria-expanded", true);

            var target = $(this).data("target");
            $(".nav-collapse.collapse").removeClass("show");
            $(".nav-collapse.collapse" + target).addClass("collapsing");
        }
        /*         $(".nav-collapse").removeClass('show')
        var target = $(this).data('target')
        $(".nav-collapse"+target).toggleClass('show')
 */
    });
});
