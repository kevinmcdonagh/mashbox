<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Mash Box</title>
    <link rel="stylesheet" href="css/mashbox1.css" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Molengo' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Reenie+Beanie' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/sc-player-mashbox.css" type="text/css" />
</head>
<body>
    <div id="content">
        <h1>Mash Box</h1>
        <div id="player">
            <div><a href="http://soundcloud.com/matas/hobnotropic" class="sc-player">My new dub track</a></div>
            <div>
                <h2><img src="http://dummyimage.com/32x32/000/fff&amp;text=cover"> Nikka NAAN - Wavin' Ching</h2>
                <ul>
                    <li><img src="http://dummyimage.com/16x16/000/fff&amp;text=cover"> <span>Nikka Costa - Ching Ching Ching</span></li>
                    <li><img src="http://dummyimage.com/16x16/000/fff&amp;text=cover"> <span>K'NAAN - Wavin' Flag</span></li>
                </ul>
            </div>
        </div>
        <div id="add-track">
            <span id="files"><a href="#"><b>+</b> <span>Add your own mix to the mash!</span></a></span>
			<div>
				<ul id="genres">
					<li><a class="genre-rock" href="#">Rock</a><li>
					<li><a class="genre-rap" href="#">Rap</a><li>
					<li><a class="genre-instrumental" href="#">Instrumental</a><li>
					<li><a class="genre-electro" href="#">Electro</a><li>												
				</ul>				
				<ul id="files-rap" class="hidden">
					<li>Rap Track #1<li>
					<li>Rap Track #2<li>
					<li>Rap Track #3<li>
					<li>Rap Track #4<li>												
				</ul>				
				<ul id="files-rock" class="hidden">
					<li>Rock Track #1<li>
					<li>Rock Track #2<li>
					<li>Rock Track #3<li>
					<li>Rock Track #4<li>												
				</ul>
				<ul id="files-instrumental" class="hidden">
					<li>Instrumental Track #1<li>
					<li>Instrumental Track #2<li>
					<li>Instrumental Track #3<li>
					<li>Instrumental Track #4<li>												
				</ul>
				<ul id="files-electro" class="hidden">
					<li>Electro Track #1<li>
					<li>Electro Track #2<li>
					<li>Electro Track #3<li>
					<li>Electro Track #4<li>												
				</ul>
				<a id="hide" href="#"></a>
			</div>
        </div>
        <div id="list">
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Mixed by</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><span>Wu Tang</span> <b>+</b> <span>Fisher Band</span></td>
                        <td><span>Kevin</span> <b>&amp;</b> <span>Yves</span></td>
                    </tr>
                    <tr>
                        <td><span>Wu Tang</span> <b>+</b> <span>Fisher Band</span></td>
                        <td><span>Kevin</span> <b>&amp;</b> <span>Yves</span></td>
                    </tr>
                    <tr>
                        <td><span>Wu Tang</span> <b>+</b> <span>Fisher Band</span></td>
                        <td><span>Kevin</span> <b>&amp;</b> <span>Yves</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="js/soundcloud.player.api.js"></script>
<script type="text/javascript" src="js/sc-player.js"></script>
<script type="text/javascript" src="scripts/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="scripts/jquery-ui-1.8.4.custom.min.js"></script>
<script type="text/javascript">
	$(function() {
		$("#add-track").accordion({
			collapsible: true, active: false
		});
		$('a.genre-rock').click(function() {
		  $('#files-rock').toggleClass('hidden');
		  $('#genres').toggleClass('hidden');
		});
		$('a.genre-rap').click(function() {
		  $('#files-rap').toggleClass('hidden');
		  $('#genres').toggleClass('hidden');
		});
		$('a.genre-electro').click(function() {
		  $('#files-electro').toggleClass('hidden');
		  $('#genres').toggleClass('hidden');
		});
		$('a.genre-instrumental').click(function() {
		  $('#files-instrumental').toggleClass('hidden');
		  $('#genres').toggleClass('hidden');
		});
	});
</script>
</html>