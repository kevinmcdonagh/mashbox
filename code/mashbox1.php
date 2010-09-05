<?php
/*  LAST FM API
    Your API Key is 3c71d615bf24a4a761091967791f9204
    Your secret is 314d7e629aa63c8737f6b6aaa258fb7a */
?><!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Mash Box</title>
    <link rel="stylesheet" href="css/jquery-ui/pepper-grinder/jquery-ui-1.8.4.custom.css" type="text/css">
    <link rel="stylesheet" href="css/mashbox1.css" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Molengo' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Reenie+Beanie' rel='stylesheet' type='text/css'>
</head>
<body>
    <div id="content">
        <h1>Mash Box</h1>
        <div id="player">
            <div><a href="http://soundcloud.com/matas/hobnotropic" class="sc-player">Play</a></div>
            <div>
                <h2></h2>
                <div id="covers">
                    <img src="http://dummyimage.com/16x16/000/fff&amp;text=cover" id="cover1">
                    <img src="http://dummyimage.com/16x16/000/fff&amp;text=cover" id="cover2">
                </div>
                <ul>
                    <li><span><span id="artist1">Nikka Costa</span> - <span id="title1">Ching Ching Ching</span></span></li>
                    <li><span><span id="artist2">Foo Fighters</span> - <span id="title2">My Hero</span></span></li>
                </ul>
            </div>
        </div>
        <div id="add-track">
            <span id="files"><a href="#"><b>+</b> <span>Add your own track to the mash!</span></a></span>
            <div>
                <h3 id="choose-genre">
                    Choose a genre !
                </h3>
                <ul id="genres">
                    <li><a class="genre-rock" href="#">Rock</a></li>
                    <li><a class="genre-rap" href="#">Rap</a></li>
                    <li><a class="genre-instrumental" href="#">Instrumental</a></li>
                    <li><a class="genre-electro" href="#">Electro</a></li>
                </ul>
                <ul id="files-rap" class="genre hidden">
                    <li><a class="rap1 chosen" href="#">Rap Track #1</a></li>
                    <li><a class="rap2 chosen" href="#">Rap Track #2</a></li>
                    <li><a class="rap3 chosen" href="#">Rap Track #3</a></li>
                    <li><a class="rap4 chosen" href="#">Rap Track #4</a></li>
                </ul>
                <ul id="files-rock" class="genre hidden">
                    <li><a class="rock1 chosen" href="#">Rock Track #1</a></li>
                    <li><a class="rock2 chosen" href="#">Rock Track #2</a></li>
                    <li><a class="rock3 chosen" href="#">Rock Track #3</a></li>
                    <li><a class="rock4 chosen" href="#">Rock Track #4</a></li>
                </ul>
                <ul id="files-instrumental" class="genre hidden">
                    <li><a class="instrumental1 chosen" href="#">Instrumental Track #1</a></li>
                    <li><a class="instrumental2 chosen" href="#">Instrumental Track #2</a></li>
                    <li><a class="instrumental3 chosen" href="#">Instrumental Track #3</a></li>
                    <li><a class="instrumental4 chosen" href="#">Instrumental Track #4</a></li>
                </ul>
                <ul id="files-electro" class="genre hidden">
                    <li><a class="electro1 chosen" href="#">Electro Track #1</a></li>
                    <li><a class="electro2 chosen" href="#">Electro Track #2</a></li>
                    <li><a class="electro3 chosen" href="#">Electro Track #3</a></li>
                    <li><a class="electro4 chosen" href="#">Electro Track #4</a></li>
                </ul>
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
					<?php
						$dbh = new PDO('sqlite:mashbox2.sqlite');
						foreach($dbh->query('SELECT * FROM tracks') as $row){
							echo ("<tr>\n");
							echo ("<td><span><strong>" . $row['title'] . "</strong> by " . $row['artist'] . "</span></td>\n");
							echo ("<td><span>". $row['addedby1'] . "</span> <b>&amp;</b> <span>". $row['addedby2'] . "</span></td>\n");		                        
							echo ("<tr>\n");
					  	}
						$dbh = null;
					?>
                </tbody>
            </table>
        </div>
    </div>
	<div id="dialog" title="Making a Mash!">
		<ol class="txt_mash">
			<li>
				<div class="trackItem">
					<img class="cover" src="img/cover_1.jpg" width="100px" height="100px"/>
					<span class="details"><h3>Title</h3><p>artist</p></span>
				</div>
			</li>
			<li class="plus">+</li>			
			<li>
				<div class="trackItem">
					<img class="cover" src="img/cover_2.jpg" width="100px" height="100px"/>
					<span class="details"><h3>Title</h3><p>artist</p></span>
				</div>
			</li>
			<li><span class="equals">=</span><span class="result">Title - artist!</span></li>
		</ol>
		<p class="loading">Loading...</p>
	</div>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/soundcloud.player.api.js"></script>
    <script type="text/javascript" src="js/sc-player.js"></script>
    <script type="text/javascript" src="js/mashbox1.js"></script>
	<script type="text/javascript">
	$(function() {
		$("#dialog").dialog({ 
			autoOpen: false,
			height: 340,
			width: 440,
			modal: true });

		$(".chosen").click(function(){
			$("#dialog").dialog('open');
		});
	});
	</script>
</body>
</html>