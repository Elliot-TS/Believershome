/* Headers */
var header = `
<header id="top">
    <h1>The Believer's Home</h1>
    <h2 style="font-weight:normal">The believer's home is a Christ-centered home; a place where the written word of God is taught, honored, read, and known.</h2>
    <p>(See Psalm 127:1 and Proverbs 24:3-4)</p>
    <nav>
        <ul class="accordion">
            <li>
                <a>Menu</a>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="christian-resources.php">Christian Resources</a></li>
                    <li><a href="bible-program.php">Bible Program</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </li>
        </ul>
    </nav>

</header>
`;

var headers = document.getElementsByTagName("header");
for (var i = 0; i < headers.length; i++) {
    headers[i].outerHTML = header;
}

/* Go to top button */
var goToTopEl = document.createElement("a");
goToTopEl.href = "#top";
goToTopEl.classList.add("goToTop");
goToTopEl.classList.add("fa-arrow-up");
document.body.appendChild(goToTopEl);

function toggleGoToTop() {
    var scrollHeight = 1000;
    if (!goToTopEl.classList.contains("show") && (document.body.scrollTop >= scrollHeight || document.documentElement.scrollTop >= scrollHeight)) {
        goToTopEl.classList.add("show");
    } else if (goToTopEl.classList.contains("show") && (document.body.scrollTop < scrollHeight && document.documentElement.scrollTop < scrollHeight)) {
        goToTopEl.classList.remove("show");
    }
}

window.onscroll = function () { toggleGoToTop(); };

/* Copyright */
var copyrightEl = document.getElementById("copyright");
if (copyrightEl !== null) {
    copyrightEl.innerHTML = "Since April 29, 2005 Copyright 2018 by Elliot Swaim.";
}
else {
    copyrightEl = document.createElement("p");
    copyrightEl.innerHTML = "Since April 29, 2005 Copyright 2018 by Elliot Swaim.";
    copyrightEl.classList.add("copyright");
    document.body.getElementsByTagName("main")[0].appendChild(copyrightEl);
}

/* Remove Warning and Caution Elements */
var remove_warnings = true;
var remove_cautions = true;

var warnings = document.getElementsByClassName("warning");
var cautions = document.getElementsByClassName("caution");
var i = 0;
if (remove_warnings) {
    while (warnings.length - i > 0) {
        if (warnings[i].classList.contains("keep")) { i++; }
        warnings[i].parentElement.removeChild(warnings[i]);
    }
}
i = 0;
if (remove_cautions) {
    while (cautions.length - i > 0) {
        if (cautions[i].classList.contains("keep")) { i++; }
        cautions[i].parentElement.removeChild(cautions[i]);
    }
}
