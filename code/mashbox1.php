<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Mash Box</title>
    <link rel="stylesheet" href="mashbox1.css" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Molengo' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Reenie+Beanie' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="scripts/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="scripts/jquery-ui-1.8.4.custom.min.js"></script>
	<script type="text/javascript">
		$(function() {
			$("#add-track").accordion({
				collapsible: true, active: false, 
			});
		});
	</script>
</head>
<body>
		
    <div id="content">
        <h1>Mash Box</h1>
        <div id="player">
            <span><button>Play</button></span>
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
				<p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.</p>
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
    
    <!-- hello -->
</body>
</html>