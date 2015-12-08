        <div id="form" class="clearfix">
            <?php
			//init variables
			$cf = array();
			$sr = false;
			
			if(isset($_SESSION['cf_returndata'])){
				$cf = $_SESSION['cf_returndata'];
			 	$sr = true;
			}
            ?>
            <ul id="errors" class="<?php echo ($sr && !$cf['form_ok']) ? 'visible' : ''; ?>">
                <li id="info">There were some problems with your form submission:</li>
                <?php 
				if(isset($cf['errors']) && count($cf['errors']) > 0) :
					foreach($cf['errors'] as $error) :
				?>
                <li><?php echo $error ?></li>
                <?php
					endforeach;
				endif;
				?>
            </ul>
            <p id="success" class="<?php echo ($sr && $cf['form_ok']) ? 'visible' : ''; ?>">Thank you for your message! I will get back to you as soon as possible.</p>
            <form method="post" action="elements/includes/form-process.php">
                <label for="name">Name: <span class="required">*</span></label>
                <input type="text" id="name" name="name" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['name'] : '' ?>" placeholder="Full Name" required />
                
                <label for="email">Email Address: <span class="required">*</span></label>
                <input type="email" id="email" name="email" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['email'] : '' ?>" placeholder="name@mail.com" required />
                
                <label for="subject">Subject: </label>
                <select id="subject" name="subjct">
                    <option value="General" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['subject'] == 'General') ? "selected='selected'" : '' ?>>General</option>
                    <option value="Video Suggestion" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['subject'] == 'Video Suggestion') ? "selected='selected'" : '' ?>>Video Suggestion</option>
                    <option value="Feedback" <?php echo ($sr && !$cf['form_ok'] && $cf['posted_form_data']['subject'] == 'Feedback') ? "selected='selected'" : '' ?>>Feedback</option>
                </select>
                <label for="message">Message: <span class="required">*</span></label>
                <textarea id="message" name="message" placeholder="Your message must be greater than 10 charcters" required data-minlength="10"><?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['message'] : '' ?></textarea>
                
                <span id="loading"></span>
                <input type="submit" value="Submit" id="submit-button"/>
                <p id="req-field-desc"><span class="required">*</span> indicates a required field</p>
            </form>
            <?php unset($_SESSION['cf_returndata']); ?>
        </div><!-- end .form -->