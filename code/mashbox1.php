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
	<?php
		$dbh = new PDO('sqlite:mashbox2.sqlite');
	?>
    <div id="content">
        <h1>Mash Box</h1>
        <div id="player">
            <div><a href="http://soundcloud.com/matas/hobnotropic" class="sc-player">Play</a></div>
            <div>
                <h2></h2>
                <div id="covers">
                    <img src="img/spacer.gif" id="cover1">
                    <img src="img/spacer.gif" id="cover2">
                </div>
                <ul>
                    <li><span><span id="artist1">Nikka Costa</span> - <span id="title1">Ching Ching Ching</span></span></li>
                    <li><span><span id="artist2">Foo Fighters</span> - <span id="title2">My Hero</span></span></li>
                </ul>
            </div>
        </div>
        <div id="add-track">
            <span id="files"><a href="#"><b>+</b> <span>Choose a track to the mash!</span></a></span>
            <div>
                <h3 id="choose-genre">
                    Choose a genre !
                </h3>
                <ul id="genres">
                    <li><a class="genre-pop" href="#">Pop</a></li>
                    <li><a class="genre-rap" href="#">Rap</a></li>
                    <li><a class="genre-instrumental" href="#">Instrumental</a></li>
                    <li><a class="genre-electro" href="#">Electronic</a></li>
                    <li><a class="genre-dance" href="#">Dance</a></li>
                    <li><a class="genre-soul" href="#">Soul</a></li>
                    <li><a class="genre-indie" href="#">Indie</a></li>
                </ul>
                <ul id="files-pop" class="genre hidden">
				<?php foreach($dbh->query("SELECT * FROM tracks WHERE genre = 'pop' ") as $row){
						echo ("<li><a class='chosen' href='#'> <span class='artist'>" . $row['artist']. "</span> - <span class='title'>" . $row['title']. "</span></a></li>\n");
					}
				?>
                </ul>
                <ul id="files-rap" class="genre hidden">
					<?php foreach($dbh->query("SELECT * FROM tracks WHERE genre = 'rap' ") as $row){
							echo ("<li><a class='chosen' href='#'>" . $row['title']. "</a></li>\n");
						}
					?>	
                </ul>
                <ul id="files-instrumental" class="genre hidden">
					<?php foreach($dbh->query("SELECT * FROM tracks WHERE genre = 'instrumental' ") as $row){
							echo ("<li><a class='chosen' href='#'>" . $row['title']. "</a></li>\n");
						}
					?>
                </ul>
                <ul id="files-electro" class="genre hidden">
					<?php foreach($dbh->query("SELECT * FROM tracks WHERE genre = 'electronic' ") as $row){
							echo ("<li><a class='chosen' href='#'>" . $row['title']. "</a></li>\n");
						}
					?>
                </ul>
                <ul id="files-dance" class="genre hidden">
					<?php foreach($dbh->query("SELECT * FROM tracks WHERE genre = 'dance' ") as $row){
							echo ("<li><a class='chosen' href='#'>" . $row['title']. "</a></li>\n");
						}
					?>
                </ul>
                <ul id="files-soul" class="genre hidden">
					<?php foreach($dbh->query("SELECT * FROM tracks WHERE genre = 'soul' ") as $row){
							echo ("<li><a class='chosen' href='#'>" . $row['title']. "</a></li>\n");
						}
					?>
                </ul>
                <ul id="files-indie" class="genre hidden">
					<?php foreach($dbh->query("SELECT * FROM tracks WHERE genre = 'indie' ") as $row){
							echo ("<li><a class='chosen' href='#'>" . $row['title']. "</a></li>\n");
						}
					?>
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
						foreach($dbh->query('SELECT * FROM mashes') as $row){
							echo ("<tr>\n");
							echo ("<td><span><a href=\"".$row['soundcloud_url']."\"<strong>" . $row['name'] . "</strong> by " . $row['artist'] . "</a></span></td>\n");
							echo ("<td><span>". $row['original_artist'] . "</span> <b>&amp;</b> <span>". $row['random_mash_artist'] . "</span></td>\n");		                        
							echo ("<tr>\n");
					  	}
					?>
                </tbody>
            </table>
        </div>
        <div id="footer" style="width:100%;text-align:center;padding-top:250px;">
        		<img src="sc.png" height="50"/>
        		<img src="ec.png" height="50"/>
        </div>
    </div>
	<div id="dialog" title="Making a Mash!">
		<ol class="txt_mash">
			<li class="cover-1">
				<div class="trackItem">
					<img class="cover" src="img/cover_1.jpg">
					<span class="details"><h3>Title</h3><p>artist</p></span>
				</div>
			</li>
			<li class="cover-2">
				<div class="trackItem">
					<span class="details"><h3>Title</h3><p>artist</p></span>
					<img class="cover" src="img/cover_2.jpg">
				</div>
			</li>
		</ol>
		<div id="equals-artist">
		    <label for="name-it">Name it :</label>
	        <input id="name-it" name="name-it" value="" type="text">
	        <button>Ok</button>
		</div>
		<p class="loading"><img src="img/ajax-loader.gif" alt="Loading"></p>
	</div>
	<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="js/soundcloud.player.api.js"></script>
    <script type="text/javascript" src="js/sc-player.js"></script>
    <script type="text/javascript" src="js/mashbox1.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.8.4.custom.min.js"></script>
	<script type="text/javascript">
	$(function() {
		$("#dialog").dialog({ 
			autoOpen: false,
			height: 200,
			width: 440,
			modal: true });

		$(".chosen").click(function(){
			$("#dialog").dialog('open');
		});
	});
	</script>
	<?php
		$dbh = null;
	?>
</body>
</html>
