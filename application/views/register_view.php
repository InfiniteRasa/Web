<script>
    
    // This method is called right before the ajax form validation request
    // it is typically used to setup some visuals ("Please wait...");
    // you may return a false to stop the request 
    function beforeCall(form, options){
        if (window.console) 
            console.log("Right before the AJAX form validation call");
        return true;
    }
    
    // Called once the server replies to the ajax form validation request
    function ajaxValidationCallback(status, form, json, options){
        if (window.console) 
            console.log(status);
        
        if (status === true) {
            alert("the form is valid!");
            // uncomment these lines to submit the form to form.action
            // form.validationEngine('detach');
            // form.submit();
            // or you may use AJAX again to submit the data
        }
    }
    
    jQuery(document).ready(function(){
        jQuery("#formID").validationEngine({
			ajaxFormValidation: true,
            onAjaxFormComplete: ajaxValidationCallback,
        });
    });
</script>

<div id='formwrapper'>
	
	<form id="formID" class="formular" method="post" action="<?php echo base_url(); ?>index.php/register/insert/">
            <fieldset>
                <legend>
                    Register
                </legend>
                <label>
                    <span>Username</span>
                    <input value="" class="validate[required,custom[onlyLetterNumber],maxSize[20],ajax[ajaxUserCallPhp]] text-input" type="text" name="user" id="user" />
                </label>
                <br />
                <label>
                    <span>Password</span>
                    <input value="" class="validate[custom[onlyLetterSp],maxSize[100]] text-input" type="password" name="firstname" id="firstname" />
                </label>
                <br />
                <label>
                    <span>Confirm Password</span>
                    <input value="" class="validate[custom[onlyLetterSp],maxSize[100]] text-input" type="password" name="firstname" id="firstname" />
                </label>
                <br />
                <label>
                    <span>Email</span>
                    <input value="" class="validate[required,custom[email]] text-input" type="text" name="email" id="email" />
                </label>
            </fieldset>
            <input class="submit" type="submit" value="Validate & Send the form!"/><hr/>
        </form>
		
</div>