<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" name="viewport" content="width=device-width" />
    <title>About | Believershome.com</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="accordion.css" />
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <header></header>
    <main>

        <!-- About Us -->
        <article>
            
        </article>
        <!-- Times -->
        <article>
            <h1>Times</h1>
            <p>Note: these times are subject to change.  If you wish to receive email updates about the prayer meetings including time changes, contant us through the believershome contact page.</p>

            <ul>
                <li>Tuesday&#9;7:30 - 9:30 PM EDT (<span id="tues"></span> in your time zone)</li>
                <li>Thursday&#9;8:00 - 9:30 PM EDT (<span id="thurs"></span> in your time zone)</li>
                <li>Saturday&#9;10:00 - 11:30 PM EDT (<span id="sat"></span> in your time zone)</li>
            </ul>
        </article>
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
<script>
document.getElementById("tues").innerText = new Date("1 7:30 PM EST").toLocaleTimeString() + " - " + new Date("1 9:00 PM EST").toLocaleTimeString();
document.getElementById("thurs").innerText = new Date("1 8:00 PM EST").toLocaleTimeString() + " - " + new Date("1 9:00 PM EST").toLocaleTimeString();
document.getElementById("sat").innerText = new Date("1 10:00 AM EST").toLocaleTimeString() + " - " + new Date("1 11:30 AM EST").toLocaleTimeString();
</script>


	<!-- PHP -->
	<?php include("count.php"); $hits = new HitCounter();  $hits->incrCounter();  ?>
</body>
</html>