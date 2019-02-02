function closeSection(el, b, noScroll) {
    for (var i = 0; i < el.children.length; i++) {
        el.children[i].style.display = "none";
    }
    el.classList.remove("open");
    el.classList.add("closed");
    b.innerText = "+";
    b.style.position = "relative";
    b.style.top = "0px";
    if (!noScroll) {
        var scrollAmount = el.parentNode.getBoundingClientRect().top + (window.pageYOffset || document.documentElement.scrollTop);
        if (scrollAmount > 0) {
            window.scroll({
                top: scrollAmount,
                left: 0,
            });
        }
    }
}
function openSection(el, b, noScroll) {
    for (var i = 0; i < el.children.length; i++) {
        el.children[i].style.display = "block";
    }
    el.classList.remove("closed");
    el.classList.add("open");

    b.innerText = "-";
    b.style.position = "sticky";
    b.style.position = "-webkit-sticky";
    b.style.top = "20px";
    if (!noScroll) {
        var scrollAmount = el.getBoundingClientRect().top + (window.pageYOffset || document.documentElement.scrollTop);
        if (scrollAmount > 0) {
            window.scroll({
                top: scrollAmount,
                left: 0,
                behavior: 'smooth'
            });
        }
    }
}
function toggleOpenSection(el, b) {
    if (el.classList.contains("open")) {
        closeSection(el,b);
    }
    else if (el.classList.contains("closed")) {
        openSection(el,b);
    }
}

function makeCloseable(el) {
    var b = document.createElement("button");
    b.classList.add("opencloseBtn");
    if (el.parentNode.classList.contains("square")) { b.classList.add("square"); }
    b.innerText = "+";
    b.addEventListener("click", function () { toggleOpenSection(el, b); });
    el.parentNode.insertBefore(b, el);
    closeSection(el, b, true);

    if (el.parentNode.classList.contains("closeable")) { closeSection(el.parentNode, el.parentNode.getElementsByTagName("button")[0], true); }
}

var closeableEls = document.getElementsByClassName("closeable");
for (var i = 0; i < closeableEls.length; i++) {
    makeCloseable(closeableEls[i]);
}

