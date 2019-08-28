<?php
function generateNavbar() {
    $filename = basename($_SERVER['PHP_SELF']);
    echo '<nav>';
    echo '<a '; echo $filename == "index.php" ? 'class="active" href="#"' : 'href="index.php"'; echo '>Home</a>';
    echo '<a '; echo $filename == "page1.php" ? 'class="active" href="#"' : 'href="onlinecv.php"'; echo '>Page 1</a>';
    echo '<a '; echo $filename == "page2.php" ? 'class="active" href="#"' : 'href="samples.php"'; echo '>Page 2</a>';
    echo '<a '; echo $filename == "page3.php" ? 'class="active" href="#"' : 'href="sandbox.php"'; echo '>Page 3</a>';
    echo '<a '; echo $filename == "page4.php" ? 'class="active" href="#"' : 'href="page4.php"'; echo '>page 4</a>';
    echo '<div class="middle"></div>'
    echo '<a class="codepen" href="https://codepen.io/gavinsykesuk" target="_blank"><i class="fab fa-codepen"></i><span> Codepen</span></a>';
    echo '<a class="github" href="https://github.com/gavinsykes" target="_blank"><i class="fab fa-github"></i><span> Github</span></a>';
    echo '<a class="linkedin" href="https://www.linkedin.com/in/gavinsykes/" target="_blank"><i class="fab fa-linkedin"></i><span> LinkedIn</span></a>';
    echo '<a class="stackoverflow" href="https://stackoverflow.com/users/8640133/gavin" target="_blank"><i class="fab fa-stack-overflow"></i><span> Stack Overflow</span></a>';
    echo '<a class="twitter" href="https://www.twitter.com/gavinsykes_uk" target="_blank"><i class="fab fa-twitter"></i><span> Twitter</span></a>';
    echo '<div id="nav-open" class="open-icon">≡</div>
}

// In the page(s) where you want your navbar to appear, insert a `require_once 'navbar.php';` statement and simply call the `generateNavbar()` function where required.

