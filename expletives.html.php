<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="icon" 
      type="image/png" 
      href="images/octothorpe.png">
    <meta charset="utf-8">
    <title>Expletive Me</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Della+Respira' rel='stylesheet' type='text/css'>
  </head>
  <body>
 <div class="slogan"><img src="images/q.png" class="grawlix q"><img src="images/omg.png" class="grawlix omg"><img src="images/at.png" class="grawlix space at"><img src="images/and.png" class="grawlix and space">Expletive Me</div>
  <div class="container">
   <div class="work">
    <p class="fbombs"><a href="?addprofanity" class="add">Submit something profane</a></p>
    </div>
    </div>
     <div class="wrapper">
      <div class="library"><div class="data">database</div><a class="anchorLink2" data-atr="anchor" href="#anchor"><img src="images/arrow.png" id="arrow"></a></div>
      <p class="cause">expletive.me is a crowdsourcing project for the purpose of compiling a library of offensive language as a resource for developers and interactive installation artists.<br><br>The spirit isn't one of censorship; in some instances -- depending on the project or venue -- there is a necessity to filter user input.</p>
      <p class="privacy">The only data that I am collecting is the text of submissions.</p>
      <p class="jay">@jaymray</p>
     <p class="reveal">PROUDLY <span class="notwp">NOT</span> POWERED BY WORDPRESS<br>
    THEME EXPLETIVE BY ME</p>
    <div class="fucker">
    <img src="images/devil.png" class="devil"></div></div>
    <!--<div><a href="?profanetext">work motherfucker</a></div>-->
    <div class="flow" id="anchor">
    <div class="litany"><p class="blue">Here are all the expletives in the database</p></div>
    <?php foreach ($profanes as $profane): ?>
      <div class="list"><blockquote>
        <p class="blue"><?php echo htmlspecialchars($profane, ENT_QUOTES, 'UTF-8'); ?></p>
      </blockquote></div>
    <?php endforeach; ?>
    </div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script>
	$(document).ready(function() {
    $(".and").hover(function(){
    $(".reveal").fadeIn("slow");
},
function(){
    $(".reveal").fadeOut();
});
	
    $(".q").hover(function(){
    $(".cause").fadeIn("slow");
},
function(){
    $(".cause").fadeOut();
});
$(".at").hover(function(){
    $(".jay").fadeIn("slow");
},
function(){
    $(".jay").fadeOut();
});
$(".omg").hover(function(){
    $(".privacy").fadeIn("slow");
},
function(){
    $(".privacy").fadeOut();
});
	});
</script>
<script type="text/javascript">
$(document).ready(function () {
 
                $(".anchorLink").click(function () {
                    $("html, body").animate({ scrollTop: 0 }, "slow");
                    return false;
                });        
 
               
                jQuery('.anchorLink2').click(function (event) {
                    event.stopPropagation();                
                    var idTo = jQuery(this).attr('data-atr');                
                    var Position = jQuery('[id="' + idTo + '"]').offset().top;
                    jQuery('html, body').animate({ scrollTop: Position }, 'slow');
                    return false;
                });
});

</script>
  </body>
</html>
