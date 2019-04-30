<?php

	$this  ->  m_contact_form  =  "<div class=\"grid_12 body-content\">
       <h3><span>get in touch with us </span></h3>

       <div class=\"form-wrapper\">

       <form id=\"form\" name=\"contact\" method=\"post\" action=\"\">


       <label class=\"name\">
       <input type=\"text\" name=\"name\" placeholder=\"Name:\" data-constraints=\"@Required @JustLetters\" />
       </label>


       <label class=\"email\">
       <input type=\"text\" name=\"email\" placeholder=\"E-mail:\" data-constraints=\"@Required @Email\" />
       </label>



        <label class=\"phone\">
           <input type=\"text\" name=\"phone-number\" placeholder=\"Phone:\" data-constraints=\"@Required @JustNumbers\"/>
           </label>


       <label class=\"message\">
       <textarea placeholder=\"Message:\" name=\"message\" data-constraints=\"@Required @Length(min=20,max=999999)\"></textarea>
       </label>


       <div>
       <div class=\"clear\"></div>


       <div class=\"btns\">

       <button name =\"contact-clear\" class=\"btn buffer\" type=\"clear\">
       clear

       </button>


              <button name =\"contact-submit\" class=\"btn buffer\" type=\"submit\">
       Submit

       </button>

       </div>


       </form>


        </div>
";

	// <a href=\"#\" data-type=\"reset\" class=\"btn\">clear</a>

	// <a href=\"#\" data-type=\"submit\" class=\"btn\">send</a></div>
?>


<!--

<div class="grid_12">
<h3><span>feedback</span></h3>
<form id="form">
<div class="success_wrapper">
<div class="success-message">Contact form submitted</div>
</div>
<label class="name">
<input type="text" placeholder="Name:" data-constraints="@Required @JustLetters" />
<span class="empty-message">*This field is required.</span>
<span class="error-message">*This is not a valid name.</span>
</label>
<label class="email">
<input type="text" placeholder="E-mail:" data-constraints="@Required @Email" />
<span class="empty-message">*This field is required.</span>
<span class="error-message">*This is not a valid email.</span>
</label>
<label class="phone">
<input type="text" placeholder="Phone:" data-constraints="@Required @JustNumbers"/>
<span class="empty-message">*This field is required.</span>
<span class="error-message">*This is not a valid phone.</span>
</label>
<label class="message">
<textarea placeholder="Message:" data-constraints="@Required @Length(min=20,max=999999)"></textarea>
<span class="empty-message">*This field is required.</span>
<span class="error-message">*The message is too short.</span>
</label>
<div>
<div class="clear"></div>
<div class="btns">
<a href="#" data-type="reset" class="btn">clear</a>
<a href="#" data-type="submit" class="btn">send</a></div>
</div>
</form>
</div>
-->


