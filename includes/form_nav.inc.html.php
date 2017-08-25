<nav>

    <!-- This is the hamburger part of the menu. -->
    <div class="mobile-nav">
        <div class="menu-btn" id="menu-btn">
            <div></div>
            <span></span>
            <span></span>
            <span></span>
        </div>

        <!-- Responsive dropdown menu on mobile only. -->
        <div class="responsive-menu">
            <ul>
                <li><a href="/ace/index.php">Home</a></li>
                <li><a href="/ace/index.php#courses">Courses</a></li>
                <li><a href="/ace/index.php#register">Register</a></li>
                <li><a href="/ace/index.php#FAQs">FAQs</a></li>
                <li><a href="/ace/index.php#contact">Contact</a></li>
            </ul>
        </div>
    </div>

    <!-- Navigation for tablet and desktop sizes. -->
    <div class="tablet-desk-menu">
        <ul>
            <li><a href="/ace/index.php">Home</a></li>
            <li><a href="/ace/index.php#courses">Courses</a></li>
            <li><a href="/ace/index.php#register">Register</a></li>
            <li><a href="/ace/index.php#FAQs">FAQs</a></li>
            <li><a href="/ace/index.php#contact">Contact</a></li>
        </ul>
    </div>

</nav>
<!-- jQuery hamburger menu control. -->
<!-- This version closes with a click. -->
<script type="text/javascript">
    jQuery(function($) {
        $('.menu-btn').click(function() {
            $('.responsive-menu').toggleClass('expand')
        })
    })
</script>