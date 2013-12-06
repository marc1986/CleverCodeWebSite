/*
 * SimpleModal Contact Form
 * http://www.ericmmartin.com/projects/simplemodal/
 * http://code.google.com/p/simplemodal/
 *
 * Copyright (c) 2009 Eric Martin - http://ericmmartin.com
 *
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 *
 * Revision: $Id: contact.js 212 2009-09-03 05:33:44Z emartin24 $
 *
 */

    	  var contact = {
    			  
    			  
    				message: null,
    				nadawca_first_val:null,
    				email_first_val:null,
    		  		tresc_first_val:null,
					code_first_val:null,
    		  		temat_first_val:null,
    				load: function(){
    		  			
    		  		this.nadawca_first_val=$('input[name="nadawca"]').val();
    		  		this.email_first_val = $('input[name=email]').val();
    		  		this.tresc_first_val=$('textarea[name=message]').val();
					this.code_first_val=$('input[name=code]').val();
    		  		this.temat_first_val=$('input[name=temat]').val();
    	  				},
    				show: function () {
                        			
    						// validate form
    						if (contact.validate()) {
    						return true;
    						}
    						else {
    							
    							return false;
    							
    						}
    					
    				},
    				
    				error: function (xhr) {
    					alert(xhr.statusText);
    				},
    				validate: function () {
    					//alert($('.contact_field[name=nadawca]').val());
    					var tresc="pole wymagane";
    				   				
    					
    					var error_names=new Array();
    					
    					
    					function showError(co,tresc) {
                                                $(co).show();
        				}
        				function hideError(co,tresc) 
                                        {
    						$(co).hide();
                                        }
    					var v=$('input[name="nadawca"]').val(); 
        				
        				
                                        
                                        
    					if ($('input[name="nadawca"]').val()==this.nadawca_first_val
                                            || $('input[name="nadawca"]').val()==""
                                ) {
    						  
    						showError("#nadawca");

    						//$('#nadawca').fadeIn(1000);
    						error_names[0]="s";
                                                
    					}
    					else{
    						hideError("#nadawca");
    						error_names[0]="";
    						
    					}
    					
    				
    					var email = $('input[name=email]').val();
    					if (!email) {
    						showError("#email",tresc);
							error_names[1]="s";
    					}
    					else if(email) {
    						if (!contact.validateEmail(email)) {
    							showError("#email",'b��dny adres e-mail');
    							error_names[1]="s";
        					}
    						else{
    							hideError("#email");
    							error_names[1]="";
            				}
    					}
    					
    					
    					if ($('input[name=temat]').val()==this.temat_first_val
                                            || $('input[name=temat]').val() == "") {
    						showError("#temat");
    						error_names[2]="s";
    					}
    					else{
    						hideError("#temat");
    						error_names[2]="";
    						
    					}
    					

    					if ($('textarea[name=message]').val()==this.tresc_first_val
                                            || $('textarea[name=message]').val() =="") {
    						showError("#message",tresc);
    						error_names[3]="s";

    					}
    					else{
    						hideError("#message");
    						error_names[3]="";
    						
    					}		
    					
    					
    					    					
    					blad=false;
    					for (i=0;i<error_names.length;i++)
    					{
    						if(error_names[i].length){
    							
    							blad=true;
    							
    						}
    					}
    					if (blad) {
    						return false;
    					}
    					else {
    						return true;
    					}
    				},
    				validateEmail: function (email) {
    					var at = email.lastIndexOf("@");

    					// Make sure the at (@) sybmol exists and  
    					// it is not the first or last character
    					if (at < 1 || (at + 1) === email.length)
    						return false;

    					// Make sure there aren't multiple periods together
    					if (/(\.{2,})/.test(email))
    						return false;

    					// Break up the local and domain portions
    					var local = email.substring(0, at);
    					var domain = email.substring(at + 1);

    					// Check lengths
    					if (local.length < 1 || local.length > 64 || domain.length < 4 || domain.length > 255)
    						return false;

    					// Make sure local and domain don't start with or end with a period
    					if (/(^\.|\.$)/.test(local) || /(^\.|\.$)/.test(domain))
    						return false;

    					// Check for quoted-string addresses
    					// Since almost anything is allowed in a quoted-string address,
    					// we're just going to let them go through
    					if (!/^"(.+)"$/.test(local)) {
    						// It's a dot-string address...check for valid characters
    						if (!/^[-a-zA-Z0-9!#$%*\/?|^{}`~&'+=_\.]*$/.test(local))
    							return false;
    					}

    					// Make sure domain contains only valid characters and at least one period
    					if (!/^[-a-zA-Z0-9\.]*$/.test(domain) || domain.indexOf(".") === -1)
    						return false;	

    					return true;
    				}
    		
    			}
  
      


