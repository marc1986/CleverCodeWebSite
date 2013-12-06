<?php
 require_once 'include/oninit.php';       
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php if($site=="portfolio"){?>
        <meta name="robots" content="NOINDEX, NOFOLLOW">
        <?php } ?>
        <meta name="Keywords" content="Clever Code, Marcin Baranowski, Programowanie, freelancer">
        <title>
            Clever Code / Marcin Baranowski - Aplikacje dedykowane, Serwisy Internetowe, Strony WWW
        </title>
        <meta name="Description" content="Clever Code - oferujemy wszechstronny wachlarz usług związanych z programowaniem. Aplikacje na zamówienie, integracje systemów, rozwój oraz utrzymanie istniejących rozwiązań. Portale branżowe, Sklepy internetowe, Serwisy Społecznościowe">
        <link href="../images/icona.png" type="image/x-icon" rel="shortcut icon">
        <link href="/css/main.css" rel="stylesheet">
        <script type="text/javascript">
        ///GOOGLE ANLYTICS CODE
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-38126873-1']);
            _gaq.push(['_trackPageview']);

            (function() {
              var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
              ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
              var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();

        </script>
        <script type="text/javascript" src="/js/jquery-1.8.3.js"></script>
        <script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>
        <!-- jquery.easing.compatibility -->
        <?php if($site=="home"){?>
        <script type="text/javascript" src="/js/scripts.js"></script>
        <?php } ?>
        <script type="text/javascript">
            var _siteRoot='index.php',_root='indsex.php';
            var liczba_slajdow=5;
        </script>
        <?php if($site=="contact"){?>
        <script type="text/javascript" src="/js/contact.js"></script>
        <?php } ?>
        <script type="text/javascript" src="/js/jquery.roundabout.js"></script>
        <script>
            if(!window.slider) var slider={};slider.data=[
                {"id":"slide-img-1","client":"nature beauty","desc":"<?php echo $lang['slide_1_text']; ?>", "button-text":"<?php echo $lang['slide_1_title']; ?>"},
                {"id":"slide-img-2","client":"nature beauty","desc":"<?php echo $lang['slide_2_text']; ?>", "button-text":"<?php echo $lang['slide_2_title']; ?>"},
                {"id":"slide-img-3","client":"nature beauty","desc":"<?php echo $lang['slide_3_text']; ?>", "button-text":"<?php echo $lang['slide_3_title']; ?>"},
                {"id":"slide-img-4","client":"nature beauty","desc":"<?php echo $lang['slide_4_text']; ?>", "button-text":"<?php echo $lang['slide_4_title']; ?>"},
                {"id":"slide-img-5","client":"nature beauty","desc":"<?php echo $lang['slide_5_text']; ?>", "button-text":"<?php echo $lang['slide_5_title']; ?>"}
            ];
            var roundabout_options = 
            [
                {"minOpacity":"1"},
                {"maxOpacity":"1"}
            ];
            
            $(document).ready(function() {
                <?php if($first_open){?>
                $('#main li a').animate({  
                    bottom: "0px"
                    },800,"easeOutElastic"); 
                     <?php } ?>
                $('#main li').delegate('a:not(a.highlight)','mouseover' ,function(){
                    
                    $(this).animate({  
                    "padding-top": "30px"
                    }, 100,null
                      ,function(){
                           $(this).animate(
                            {"padding-top": "0px"
                            }
                            ,180
                           );
                      }
                );
                });
               
                   
                $('ul#roundabout > li').focus(function(){
                var t = $(this).children('div.portfolio_text').html();
                $('#right-text-box').html(t);
            });
               $('#roundabout').roundabout({
                tilt: -4,
                minScale: 0.5,
                btnNext: ".next",
                btnPrev: ".prev",
                minOpacity: 1
                })
              
              //Why Us Code  
              $('a.whyus-window').click(function() {
		
                    //Getting the variable's value from a link 
                    var loginBox = $(this).attr('href');

                    //Fade in the Popup
                    $(loginBox).fadeIn(300);

                    //Set the center alignment padding + border see css style
                    var popMargTop = ($(loginBox).height() + 24) / 2; 
                    var popMargLeft = ($(loginBox).width() + 24) / 2; 

                    $(loginBox).css({ 
                            'margin-top' : -popMargTop,
                            'margin-left' : -popMargLeft
                    });

                    // Add the mask to body
                    $('body').append('<div id="mask"></div>');
                    $('#mask').fadeIn(300);

                    return false;
                });

                // When clicking on the button close or the mask layer the popup closed
                $('a.close, #mask').live('click', function() { 
                  $('#mask , div.whyus-popup').fadeOut(300 , function() {
                        $('#mask').remove();  
                }); 
                return false;
                });  
              
            });
            
            
            
        </script> 
        <?php if(!$first_open){?>
        <style>
            #main li a{
             bottom: 0px;   
            }
             
        </style>
        <?php } ?>
    </head>
    <body>
        <div id ="head_er">
            <div>
                <ul id="main">
                    <li>
                        <a class="left <?php if($site == "home") echo "highlight";?>" href="index.php?site=home"><?php echo $lang['home']; ?></a> <a href="index.php?site=career" class="right <?php if($site == "career") echo "highlight";?>"><?php echo $lang['kariera']; ?></a>
                    </li>
                    <li>
                        <a class="left <?php if($site == "about") echo "highlight";?>" href="index.php?site=about"><?php echo $lang['o_nas']; ?></a> <a href="index.php?site=contact" class="right <?php if($site == "contact") echo "highlight";?>"><?php echo $lang['kontakt']; ?></a>
                    </li>
                    <li>
                        <a class="left <?php if($site == "offer") echo "highlight";?>" href="index.php?site=offer"><?php echo $lang['oferta']; ?></a> <a href="index.php?site=portfolio" class="right <?php if($site == "portfolio") echo "highlight";?>"><?php echo $lang['portfolio']; ?></a>
                    </li>
                </ul> 
            </div>
            <ul id="lang">
                    <li>
                        <a href="index.php?site=<?php echo $site; ?>&lang=pl">PL</a>
                    </li>
                    <li>
                        /
                    </li>
                    <li>
                        <a href="index.php?site=<?php echo $site; ?>&lang=en">EN</a>
                    </li>
            </ul>
        </div>
      
         <?php
            switch ($site){
                    case "about": include 'about.php'; break;
                    case "contact": include 'contact.php'; break;
                    case "offer": include 'offer.php'; break;
                    case "portfolio": include 'portfolio.php'; break;
                    case "career": include 'career.php'; break;
                    case "home": include 'home.php'; break;
                    case "whyus": include 'whyus.php'; break;
                    case "email": include 'email.php'; break;
                }
         ?>
        </div>
        <div id="trust_us">
            <span><?php echo $lang['zaufali_nam']; ?></span>
            <ul>
                <li><a href="http://www.torbalscales.com" id="torbalscale"></a></li>
                <li><a href="http://www.inleo.pl" id="inleo"></a></li>
                <li><a href="" id="techmar"></a></li>
                <li><a href="http://www.designarts.pl" id="designarts"></a></li>
            </ul>
        </div>
            <?php include 'whyus.php'; ?>
        
    </body>
</html>
