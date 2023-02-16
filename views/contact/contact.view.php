<div class="contact">
    <div class="message">
        <div class="position">
            <h3 class="mb-4"><b class="text-warning">Business Development</b></h3>
            <p><b>WORKING HOUR :</b> <br>Morning (7:30AM - 11:30AM) Afternoon (1:00PM - 5:00PM)</p>
            <p><b>TELEPHONE :</b> 097 73 48 624</p>
            <p><b>EMAIL :</b> rienleam@gmail.com</p>
            <h3 class="mb-4"><b class="text-warning">Marketing</b></h3>
            <p><b>WORKING HOUR :</b> <br>Morning (7:30AM - 11:30AM) Afternoon (1:00PM - 5:00PM)</p>
            <p><b>TELEPHONE :</b> 097 73 48 624</p>
            <p><b>EMAIL :</b> rienleam@gmail.com</p>
        </div>
        <hr>
        <div class="form-contact">
            <h2 class="text-warning mb-4"><b>Contact Us</b></h2>
            <form class="chat" action= "<?php $action ?>"  method="post">
                <div class="username mb-3">
                    <div class="label">
                        <label class="mt-1" for="username">Your name</label>
                    </div>
                    <div class="input">
                        <input type="text" name="username" placeholder="Enter your name" style="width: 100%; padding: 5px;">
                        <small class="form-text text-danger"> <?php echo $username_error; ?></small> 
                    </div>
                </div>
                <div class="e-mail mb-3">
                    <div class="label">
                        <label class="mt-1" for="e-mail">Email</label>
                    </div>
                    <div class="input">
                        <input type="email" name="e-mail" placeholder="Enter your email" style="width: 100%; padding: 5px;">
                        <small class="form-text text-danger"> <?php echo $e_mail_error; ?></small> 
                    </div>
                </div>
                <div class="telephone mb-3">
                    <div class="label">
                        <label class="mt-1" for="telephone">Telephone</label>
                    </div>
                    <div class="input">
                        <input type="number" name="telephone" placeholder="Enter your telephone" style="width: 100%; padding: 5px;">
                        <small class="form-text text-danger"> <?php echo $telephone_error; ?></small> 
                    </div>
                </div>
                <div class="topic mb-3">
                    <div class="label">
                        <label class="mt-1" for="topic">Topic</label>
                    </div>
                    <div class="input">
                        <select name="the-topic" id="topic" style="width: 100%; padding: 7px;">
                            <option value="nothing" selected disabled>Please select a topic</option>
                            <option value="comment">Comment and Feedback</option>
                            <option value="apply">Apply for a job</option>
                            <option value="partner">Co-partner</option>
                        </select>
                        <small class="form-text text-danger"> <?php echo $topic_error; ?></small> 
                    </div>
                </div>
                <div class="chat-message mb-3">
                    <div class="label">
                        <label class="mt-1" for="user-message">Message</label>
                    </div>
                    <div class="input">
                        <textarea name="user-message" id="user-message" cols="5" rows="4" placeholder="Enter your message" style="width: 100%;"></textarea>
                        <small class="form-text text-danger"><?php echo $message_error; ?></small> 
                    </div>                  
                </div>
                <button type="submit" name="submit" class="send">SEND</button>
            </form>
        </div>        
    </div>
</div>