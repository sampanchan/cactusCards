<?php
    // Template Name: contact-page
    get_header();
?>
<div class="contact-wrapper">
    <h1>Contact</h1>
        <form >
            <fieldset>
                
                <div class="info">
                    <div class="name">
                        <label for="first-name">Name:</label>
                        <input type="text" name="user_name" id="name" required>
                    </div>
                    <div class="email">
                        <label for="email">Email: </label>
                        <input for="text" id="email" name="email" class="text" type="email" required>
                    </div>
                    
                </div>
                <textarea name="message" id="message" class="message" cols="40" rows="20"> Type here.</textarea>
                <p>* Please leave your name and email so I can get back to you in a timely manner. <br/> Type your message in the text box above.</p>
                <button><a href="#">Submit</a></button>
                
            </fieldset>
        </form>
</div>


<?php
get_footer();
?>