<?php
$filename = basename($_SERVER['PHP_SELF']);
function generateNavbar() {
    echo '<div id="navbar" class="navbar">';
    echo "<a "; if ($filename == "index.php") {echo 'class="active" href="#"';} else {echo 'href="index.php"';} echo ">Home</a>";
    echo "<a "; if ($filename == "onlinecv.php") {echo 'class="active" href="#"';} else {echo 'href="onlinecv.php"';} echo ">Online CV</a>";
    echo "<a "; if ($filename == "samples.php") {echo 'class="active" href="#"';} else {echo 'href="samples.php"';} echo ">Samples</a>";
    echo "<a "; if ($filename == "sandbox.php") {echo 'class="active" href="#"';} else {echo 'href="sandbox.php"';} echo ">Sandbox</a>";
    echo "<a "; if ($filename == "blog.php") {echo 'class="active" href="#"';} else {echo 'href="blog.php"';} echo ">Blog</a>";
    echo "<a class=" . '"right email"' . ' id="email"><i class="' . 'fa fa-envelope-o"></i><span> Email</span></a>';
    echo "<a class=" . '"right twitter"' . ' id="twitter" href="https://www.twitter.com/gavin_sykes" target="_blank"><i class="' . 'fa fa-twitter"></i><span> Twitter</span></a>';
    echo "<a class=" . '"right stackoverflow"' . ' id="stackoverflow" href="https://www.stackoverflow.com/users/9881230/gavin-sykes" target="_blank"><i class="' . 'fa fa-stack-overflow"></i><span> Stack Overflow</span></a>';
    echo "<a class=" . '"right linkedin"' . ' id="linkedin" href="https://www.linkedin.com/in/gavinsykes/" target="_blank"><i class="' . 'fa fa-linkedin"></i><span> LinkedIn</span></a>';
    echo "<a class=" . '"right github"' .  ' id="github" href="https://www.github.com/GavHTFC" target="_blank"><i class="' . 'fa fa-github"></i><span> Github</span></a>';
    echo '<a class="icon" id="icon" href="javascript:void(0)">&#9776;</a></div>';
}
?>

// In the page(s) where you want your navbar to appear, insert a `require_once 'navbar.php';` statement and simply call the `generateNavbar()` function where required.

