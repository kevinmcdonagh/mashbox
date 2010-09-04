jQuery(document).ready(function(){
    setTimeout(function(){
        jQuery('h2').append(' '+jQuery('.sc-info h3 a').text());
    },1000);
});