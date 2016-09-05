/*
 * Attaches the image uploader to the input field
 */
jQuery(document).ready(function($){
 
    // Add files / images to additional resources
    $('#reflected-resources').on('click', '.meta-image-button', function(e){
        
        // Prevents the default action from occuring.
        e.preventDefault();

        $el = $(this);

        // Instantiates the variable that holds the media library frame.
        var meta_image_frame;

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

    // Delete additional resource items
    $('#additional-resources').on('click', '.meta-delete-button', function(e){
        
        e.preventDefault();

        $el = $(this);

        //console.log($el.parent('p').siblings('p'));
        
        if ( $el.parent('p').siblings('p').length > 0) {

            $el.parent('p').remove();

        }

    });

    var $inputPar = $('#additional-resources').children('p').last();
    $('#meta-image-more').click(function(e){

        $clone = $inputPar.clone();
        $clone.children('.resource-title').val('');
        $clone.children('.meta-resource-input').val('');
        $('#additional-resources').children('p:last').after( $clone  );
        //console.log("Adding More");

    });
});