jQuery(document).ready(function(){
    setSCTitle();
    handleList();
    lastFmGetCover(1);
    lastFmGetCover(2);
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
    
    var chooseGenre = jQuery('#choose-genre');
    
    jQuery('#genres a').bind('click',function(){
        var genre = this.className.split('-')[1];
        jQuery('#files-'+genre).removeClass('hidden');
        jQuery('#genres').slideUp();
        chooseGenre.html('<span></span><button>'+genre+'</button>');
        chooseGenre.addClass('active')
    });
    
    jQuery('#choose-genre button').live('click',function(){
        var genre = jQuery('#choose-genre').text();
        jQuery('#files-'+genre).addClass('hidden');
        jQuery('#genres').slideDown();
        chooseGenre.html('Choose a genre !');
        chooseGenre.removeClass('active')
    });

}

var lastFmGetCover = function(nb) {
    var artist = jQuery('#artist'+nb).text();
    var title  = jQuery('#title'+nb).text();
    var data = 'method=track.getinfo&api_key=3c71d615bf24a4a761091967791f9204&artist='+artist+'&track='+title;
    data = data.replace(' ', '%20');
    var url  = 'proxy.php';
    jQuery.ajax({
        type:'POST',
        url:url,
        data:data,
        success:function(xml){
            var cover = jQuery(xml).find('image[size="small"]').text();
            jQuery('#cover'+nb)[0].src = cover;
        }
    });
    
}

// console.log(soundcloud)
// soundcloud.addEventListener('onPlayerReady', function(){
//     alert('ok')
// });





