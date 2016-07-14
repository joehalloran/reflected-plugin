/*
 * Attaches the image uploader to the input field
 */
jQuery(document).ready(function($){
 
    // Instantiates the variable that holds the media library frame.
    var meta_image_frame;

    var el;
 
    // Runs when the image button is clicked.
    $('.meta-image-button').click(function(e){
        
        // Prevents the default action from occuring.
        e.preventDefault();

        $el = $(this);

        // If the frame already exists, re-open it.
        if ( meta_image_frame ) {
            meta_image_frame.open();
            return;
        }
 
        // Sets up the media library frame
        meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
            title: "Select or Upload Media",
            button: { text:  "Use this media" },
            library: { type: 'image' }
        });

        // Runs when an image is selected.
        meta_image_frame.on('select', function(event){

            // Grabs the attachment selection and creates a JSON representation of the model.
            var media_attachment = meta_image_frame.state().get('selection').first().toJSON();

            // Sends the attachment URL to our custom image input field.
            $el.siblings('.meta-resource-input').val(media_attachment.url);

        });
        

        // Opens the media library frame.
        meta_image_frame.open();
    });

    var $inputPar = $('#additional-resources').children('p').last();
    $('#meta-image-more').click(function(e){

        $clone = $inputPar.clone();
        $clone.children('.resource-title').val('');
        $clone.children('.meta-resource-input').val('');
        $('#additional-resources').children('p:last').after( $clone  );

    });
});