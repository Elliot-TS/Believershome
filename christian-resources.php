<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" name="viewport" content="width=device-width" />
    <title>Christian Resources | Believershome.com</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="accordion.css" />
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <!-- TODO: Label all brethren resources with brethren class to filter brethren links only -->

    <header></header>
    
    <main>
        <div class="links">
			<a href="brethren-resources.php">Brethren Resources</a>
		</div>
    </main>

    <!-- Scripts -->
    <script src="attachComponents.js"></script>
    <script src="accordion.js"></script>
    <script src="closeable.js"></script>

    <script>
	var refTagger = {
		settings: {
			bibleReader: "bible.faithlife",
			bibleVersion: "ESV",			
			roundCorners: true,
			socialSharing: [],
			customStyle : {
				heading: {
					backgroundColor : "#3D7068",
					color : "#fff"
				}
			}
		}
	};
	(function(d, t) {
		var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
		g.src = "https://api.reftagger.com/v2/RefTagger.js";
		s.parentNode.insertBefore(g, s);
	}(document, "script"));
</script>
	

	<!-- PHP -->
	<?php include("count.php"); $hits = new HitCounter();  $hits->incrCounter();  ?>
</body>
</html>