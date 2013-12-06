<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<style>
    
#center {
    margin: auto;
    width: 575px;
}
.hidden{
    display: none;
    visibility: hidden;
}
    </style>
    
<div id ="content">
            <div id="title">
               <span><?php echo $lang['kontakt']; ?></span>
                <a class="whyus-window" href="#why_us_contener"><span><?php echo $lang['dlaczego_my']; ?></span></a>
            </div>
    <div id="about_us_contener">
        <span style="display: block; margin-bottom: 34px;">
            We are appreciate that You made a desicion. Please fill form with Your private email so we will be able to contact with You. If You do not mind giving us Your phone number please add it to Content.
            <?php echo $lang['contact_short_decription']; ?>
            </span>
        <div id="center">
           
            <?php if(isset($mail_send)){ ?>
                <div class="big_mail_information">
                    <?php 
                        if($mail_send)
                            echo $lang['wiadomosc_wyslana_kom']; 
                        else
                            echo $lang['blad_wysylania_kom'];
                        ?>
                </div>
           <?php } ?>
        <form method="post" action="index.php?site=contact&action=mail" name="contactForm" onSubmit="return contact.show();">
            <table id="contact_form" cellpadding="0" cellspacing="0">
                    <tr>
                            <td class="hidden">
                                <span><?php echo $lang['nazwa_firmy']; ?></span>
                                    <input class="big_contact_field" type="text" name="firma" size="15" value="Nieznana" />
                            </td>
                            <td class="hidden">
                                <span><?php echo $lang['temat']; ?></span>
                                    <input class="big_contact_field" type="text" name="temat" size="15" value="I am interested about saving my money" />
                                    <div class="contact_error_div" id="temat" ><?php echo $lang['pole_wymagane']; ?></div>
                            </td>
                    </tr>    
                    <tr colspan="2">
                            
                            <td>
                                <span>Private e-mail address</span>
                                    <input class="big_contact_field" type="text" name="email" size="15" />
                                    <div class="contact_error_div" id="email" ><?php echo $lang['bledny_mail']; ?></div>
                                    
                                             <input class="big_contact_field hidden" type="text" name="nadawca" size="15" value="nieznana" />
                                    <div class="contact_error_div" id="nadawca" /><?php echo $lang['pole_wymagane']; ?></div>
                            </td>
                    </tr>
                    <tr colspan="2">
                            <td style="width:inherit" >
                                <span>Content</span>
                                    <textarea class="big_contact_field" rows="8" cols="12" name="message">
                                        Yes i would like to find some information. I am waiting for Your response. You can call me on my phone number : "+31 ....."
                                    </textarea>
                                    <div id="message" class="contact_error_div" style="left: 20px; width:540px"><?php echo $lang['pole_wymagane']; ?></div>
                                    <input id="sendButton" onclick type="submit"  value="<?php echo $lang['wyslij']; ?>"  name="submit">
                            </td>
                    </tr>
            </table>
        </form>
            
        </div>
    </div>
</div>