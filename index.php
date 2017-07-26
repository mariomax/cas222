<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <title>Ace in the Hole</title>
    
    <!-- Google fonts. Headline then Body font. -->
    <link href="https://fonts.googleapis.com/css?family=Alegreya" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ropa+Sans" rel="stylesheet">
    
    <!-- Stylesheets in the css folder. -->
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    
    <!-- Font Awesome! -->
    <script src="https://use.fontawesome.com/ef441b60f1.js"></script>
    
    <!-- jQuery library script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head> 


<body>
    <!-- This is the navigation from the includes folder. -->
    <?php include 'includes/nav.inc.html.php'; ?>
    
    <!-- This is the header from the includes folder. -->
    <?php include 'includes/header.inc.html.php'; ?>
<main>   
        <!-- Main content section -->
        <section class="section group" id="about">
        
        <!-- JavaScript slideshow for mobile and tablet. -->
        <div class="fullSlider">
            <img src="images/image_wf.png" alt="image">
        </div>    
        
        <!-- JavaScript slideshow for desktop. -->
        <div class="sideSlider col span_9_of_12">
            <img src="images/image_wf.png" alt="image">
        </div>
                   
        <!-- Weather API and social media feeds section for desktop only -->
        <div class="col span_3_of_12">
        <aside class="deskAside">
            
            <blockquote>Weather API</blockquote>
            <blockquote>Social Feed</blockquote>
            <blockquote>Social Feed</blockquote>
            
        </aside>
        </div>    
            
        <div class="col span_9_of_12">
            <h3>Page Title (h3)</h3>
            <p>Paragraph (p) Portland man braid ad flannel PBR lomo chambray skateboard venmo lumbersexual viral pour-over quinoa nulla dreamcatcher. Kitsch elit deserunt brooklyn, letterpress consequat minim. Cillum aesthetic food truck est kitsch tattooed tofu literally sed sunt. Cold-pressed coloring book neutra selfies.</p>
            <h4>Headline (h4)</h4>
            <ul>
                <li>List Item (li)</li>
                <li>List Item (li)</li>
            </ul>
            <h4>Headline (h4)</h4>
            <p>Paragraph (p)</p>
            <h4>Headline (h4)</h4>
            <p>Paragraph (p)</p>
            <h4>Headline (h4)</h4>
            <p>Paragraph (p)</p>
            <h4>Headline (h4)</h4>
            <p>Paragraph (p)</p>        
        </div>
        
        <!-- Weather API and social media feeds section for tablet only -->
        <div class="col span_3_of_12">
        <aside class="tabletAside">
            
            <blockquote>Weather API</blockquote>
            <blockquote>Social Feed</blockquote>
            <blockquote>Social Feed</blockquote>
            
        </aside>
        </div>
            
        </section>
         
        <section class="section group">
        <!--  Register content section -->
        <div class="register hideContent col span_9_of_12" id="register">
            <h3>Page Title (h3)</h3>
            <h4>Page Info (h4)</h4>
            <ul>
                <li>List Item</li>
                <li>List Item</li>
                <li>List Item</li>
                <li>List Item</li>
                <li>List Item</li>
                <li>List Item</li>
            </ul>
            <h4>Headline (h4)</h4>
            <p>Paragraphs (p) 11</p>
            <h4>Headline (h4)</h4>
            <p>Paragraph (p)</p>
            <h4>Headline (h4)</h4>
            <p>Paragraph (p)</p>
            <form>Form (PHP form)</form>
        </div>
    
            <!-- FAQ content section -->
            <section class="FAQs hideContent col span_9_of_12" id="FAQs">
                <h3>Page Title (h3)</h3>
                <p>Paragraph</p>
                <p>Paragraph</p>
                <p>Paragraph</p>
                <p>Paragraph</p>
                <p>Paragraph</p>
                <p>Paragraph</p>
                <p>Paragraph</p>
                <p>Paragraph</p>
            </section>
    
            <!-- Contact content section -->
            <div class="contact hideContent col span_9_of_12" id="contact">
                <h3>Page Title (h3)</h3>
                <form>Form (PHP form)</form>
                <p>Paragraph</p>
            </div>
            </section>
    
            <!-- Weather API and social media feeds section in mobile view only -->
            <aside class="mobileAside">
                <blockquote>Weather API</blockquote>
                <blockquote>Social Feed</blockquote>
                <blockquote>Social Feed</blockquote>
            </aside>

            <!-- This is the footer from the includes folder. -->
            <?php include 'includes/footer.inc.html.php'; ?>
 </main>   
            <!-- jQuery hamburger menu control -->
            <!-- This version doesn't closes with a click. -->
            <!--
            <script type="text/javascript">
                jQuery(function ($) {
                    $('.menu-btn').click(function () {
                        $('.responsive-menu').addClass('expand')
                        $('.menu-btn').addClass('btn-none')
                    })
                    $('.close-btn').click(function () {
                        $('.responsive-menu').removeClass('expand')
                        $('.menu-btn').removeClass('btn-none')
                    })
                })
            </script>
            -->
    
            <!-- jQuery hamburger menu control -->
            <!-- This version closes with a click. -->
            <script type="text/javascript">
                jQuery(function($){
                         $( '.menu-btn' ).click(function(){
                         $('.responsive-menu').toggleClass('expand')
                         })
                    })
            </script>

</body>

</html>