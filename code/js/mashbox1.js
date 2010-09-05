jQuery(document).ready(function(){
    setSCTitle();
    handleList();
    lastFmGetCover(1);
    lastFmGetCover(2);
    setSCTable();
});

function setSCTitle() {
    setTimeout(function(){
        jQuery('h2').append(' '+jQuery('.sc-info h3').html());
    },2500);
}

function setSCTable() {
    jQuery('tbody tr').bind('click',function(e){
        e.preventDefault();
        var player = soundcloud.getPlayer('scPlayerEngine');
        player.api_stop();
        var link = jQuery(this).find('a')[0].href;
        jQuery('#player div:first-child').html('<a href="'+link+'" id="sc-play-me"></a>');
        jQuery('#sc-play-me').scPlayer();
        var player = soundcloud.getPlayer('scPlayerEngine');
        setTimeout(function(){
            console.log(player)
            player.api_toggle();
            jQuery('.sc-play').click();
        },500);
    });
    jQuery('tbody tr a').bind('click',function(e){
        e.preventDefault();
    });
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





