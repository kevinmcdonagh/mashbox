jQuery(document).ready(function(){
    setSCTitle();
    handleList();
    lastFmGetCover(jQuery('#artist1'),jQuery('#title1'),jQuery('#cover1'));
    lastFmGetCover(jQuery('#artist2'),jQuery('#title2'),jQuery('#cover2'));
    setSCTable();
});

function randomToN(maxVal,floatVal) {
   var randVal = Math.random()*maxVal;
   return typeof floatVal=='undefined'?Math.round(randVal):randVal.toFixed(floatVal);
}

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
            player.api_toggle();
            jQuery('.sc-play').click();
        },500);
        
        var artist = jQuery(this).find('.artist');
        var artist2  = jQuery(this).find('.artist2');
        var cover  = jQuery('.cover-1 .cover');
        lastFmGetCover(artist,jQuery('#blah'),jQuery('#cover1'));
        lastFmGetCover(artist2,jQuery('#blah'),jQuery('#cover2'));
        jQuery('#artist1').text(artist.text());
        jQuery('#title1').text('');
        jQuery('#artist2').text(artist2.text());
        jQuery('#title2').text('');
        jQuery('h2').text(jQuery(this).find('strong').text())

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
        chooseGenre.addClass('active');
        jQuery('#files-'+genre+' a').bind('click',function(){
            
            var artist = jQuery(this).children('.artist');
            var title  = jQuery(this).children('.title');
            var cover  = jQuery('.cover-1 .cover');
            lastFmGetCover(artist,title,cover);
            jQuery('.cover-1 h3').text(artist.text());
            jQuery('.cover-1 p').text(title.text());

            var nb = randomToN(jQuery('#files-'+genre+' a').length);
            var second = jQuery(jQuery('#files-'+genre+' a')[nb]);

            var artist2 = second.children('.artist');
            var title2  = second.children('.title');
            var cover2  = jQuery('.cover-2 .cover');
            lastFmGetCover(artist2,title2,cover2);
            jQuery('.cover-2 h3').text(artist2.text());
            jQuery('.cover-2 p').text(title2.text());

            
        });
    });
    
    jQuery('#choose-genre button').live('click',function(){
        var genre = jQuery('#choose-genre').text();
        jQuery('#files-'+genre).addClass('hidden');
        jQuery('#genres').slideDown();
        chooseGenre.html('Choose a genre !');
        chooseGenre.removeClass('active')
    });

}

var lastFmGetCover = function(artist,title,coverimg) {
    var artist = artist.text();
    var title  = title.text();
    var data = 'method=track.getinfo&api_key=3c71d615bf24a4a761091967791f9204';
    if (artist.length > 2) {
        data += '&artist='+artist;
    }
    if (title.length > 2) {
        data += '&track='+title;
    }
    data = data.replace(' ', '%20');
    var url  = 'proxy.php';
    jQuery.ajax({
        type:'POST',
        url:url,
        data:data,
        success:function(xml){
            var cover = jQuery(xml).find('image[size="small"]').text();
            if (cover == '') cover = 'img/spacer.gif';
            coverimg[0].src = cover;
        }
    });
    
}





