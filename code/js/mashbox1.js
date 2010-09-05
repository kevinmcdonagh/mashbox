jQuery(document).ready(function(){
    setSCTitle();
    handleList();
});

function setSCTitle() {
    setTimeout(function(){
        jQuery('h2').append(' '+jQuery('.sc-info h3').html());
    },2500);
}

function handleList() {
    jQuery("#files").bind('click',function(e){
        e.preventDefault();
        jQuery("#files + div").slideToggle();
    });

    jQuery('#genres a').bind('click',function(){
        var genre = this.className.split('-')[1];
        jQuery('#files-'+genre).removeClass('hidden');
        jQuery('#genres').slideUp();
        jQuery('#choose-genre').html('<span></span><button>'+genre+'</button>');
    });
    
    jQuery('#choose-genre button').live('click',function(){
        var genre = jQuery('#choose-genre').text();
        jQuery('#files-'+genre).addClass('hidden');
        jQuery('#genres').slideDown();
        jQuery('#choose-genre').html('Choose a genre !');
    });

}








