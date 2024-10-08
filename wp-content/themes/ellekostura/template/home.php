<?php
/*
Template Name: Elle Kustora - Home
*/
get_header();  // Include the header

?>
<div class="slider">
    <ul class="slides">
        <li class="" style="opacity: 0; transform: translateX(0px) translateY(0px);">
            <img src="data:image/gif;base64,R0lGODlhAQABAIABAP///wAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                style="background-image: url(&quot;https://images.unsplash.com/photo-1464817739973-0128fe77aaa1?dpr=1&amp;auto=compress,format&amp;fit=crop&amp;w=1199&amp;h=799&amp;q=80&amp;cs=tinysrgb&amp;crop=&quot;);">
            <!-- random image -->
            <div class="caption center-align" style="opacity: 0; transform: translateY(-100px);">
                <h3>Elle Kultura</h3>
                <h5 class="light grey-text text-lighten-3">Dress Shop</h5>
            </div>
        </li>
        <li class="active" style="opacity: 1; transform: translateX(0px) translateY(0px);">
            <img src="data:image/gif;base64,R0lGODlhAQABAIABAP///wAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                style="background-image: url(&quot;https://ununsplash.imgix.net/photo-1414849424631-8b18529a81ca?q=75&amp;fm=jpg&amp;s=0e993004a2f3704e8f2ad5469315ccb7&quot;);">
            <!-- random image -->
            <div class="caption left-align" style="opacity: 1; transform: translateX(0px) translateY(0px);">
                <h3>Elle Kultura</h3>
                <h5 class="light grey-text text-lighten-3">Dress Shop.</h5>
            </div>
        </li>
        <li class="" style="opacity: 0; transform: translateX(0px) translateY(0px);">
            <img src="data:image/gif;base64,R0lGODlhAQABAIABAP///wAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                style="background-image: url(&quot;https://ununsplash.imgix.net/uploads/1413259835094dcdeb9d3/6e609595?q=75&amp;fm=jpg&amp;s=6a4fc66161293fc4a43a6ca6f073d1c5&quot;);">
            <!-- random image -->
            <div class="caption right-align" style="opacity: 0; transform: translateX(100px);">
                <h3>Elle Kultura</h3>
                <h5 class="light grey-text text-lighten-3">Dress Shop</h5>
            </div>
        </li>
    </ul>
    <ul class="indicators">
        <li class="indicator-item"></li>
        <li class="indicator-item active"></li>
        <li class="indicator-item"></li>
    </ul>
</div>

<div class="row">
    <?php for($i=0;$i<=30;$i++): ?>
    <div class="col s3">
        <div class="card">
            <div class="card-image">
                <img src="images/sample-1.jpg">
                <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
                <a href="#">This is a link</a>
            </div>
        </div>
    </div>
    <?php endfor; ?>
</div>

<script>
jQuery(document).ready(function($) {
    $('.slider').slider({
        indicators: true, // Show indicators
        height: 400, // Slider height
        interval: 6000, // Interval between slides
        duration: 500 // Duration of transition
    });
});
</script>
<?php
get_footer();   // Include the footer
?>