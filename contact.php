<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
sdsd
<div id ="content">
            <div id="title">
               <span><?php echo $lang['kontakt']; ?></span>
                <a class="whyus-window" href="#why_us_contener"><span><?php echo $lang['dlaczego_my']; ?></span></a>
            </div>
    <div id="about_us_contener">
        <span style="display: block; margin-bottom: 34px;">
            <?php echo $lang['contact_short_decription']; ?>
            </span>
        <div id="left">
            <h>Clever Code</h>
        <ul id="contact_data">
            <li>
            <span>Regon:</span>
            200-743-746
            </li>
            <li>
            <span>E-mail:</span>
             <?php echo $lang['e-mail_address']; ?>
            </li>
            <li>
            <span><?php echo $lang['tel']; ?>:</span>
            +48 796 88 66 15
            </li>
            <li>
            <span>Skype:</span>
            clevercodeoffice
            </li>
        </ul>
        </div>
        <div id="right">
            <h><?php echo $lang['formularz_kontaktowy']; ?></h>
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
                            <td>
                                    <span><?php echo $lang['imie_nazw']; ?></span>
                                    <input class="big_contact_field" type="text" name="nadawca" size="15" />
                                    <div class="contact_error_div" id="nadawca" /><?php echo $lang['pole_wymagane']; ?></div>

                            </td>
                            <td>
                                <span><?php echo $lang['email']; ?></span>
                                    <input class="big_contact_field" type="text" name="email" size="15" />
                                    <div class="contact_error_div" id="email" ><?php echo $lang['bledny_mail']; ?></div>
                            </td>
                    </tr>

                    <tr>
                            <td>
                                <span><?php echo $lang['nazwa_firmy']; ?></span>
                                    <input class="big_contact_field" type="text" name="firma" size="15"/>
                            </td>
                            <td>
                                <span><?php echo $lang['temat']; ?></span>
                                    <input class="big_contact_field" type="text" name="temat" size="15" />
                                    <div class="contact_error_div" id="temat" ><?php echo $lang['pole_wymagane']; ?></div>
                            </td>
                    </tr>
                    <tr colspan="2">
                            <td style="width:inherit" >
                                <span><?php echo $lang['tresc']; ?></span>
                                    <textarea class="big_contact_field" rows="8" cols="12" name="message"></textarea>
                                    <div id="message" class="contact_error_div" style="left: 20px; width:540px"><?php echo $lang['pole_wymagane']; ?></div>
                                    <input id="sendButton" onclick type="submit"  value="<?php echo $lang['wyslij']; ?>"  name="submit">
                            </td>
                    </tr>
            </table>
        </form>
            
        </div>
    </div>
</div>