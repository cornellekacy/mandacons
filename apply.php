<?php include 'header2.php'; ?>
             <section class="jobguru-breadcromb-area">
         <div class="breadcromb-top section_100">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="breadcromb-box">
                        <h3>Apply for a job</h3>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="breadcromb-bottom">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="breadcromb-box-pagin">
                        <ul>
                           <li><a href="#">home</a></li>
                           <li class="active-breadcromb"><a href="#">Apply for a job</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
       
      <!-- Candidate Dashboard Area Start -->
      <section class="candidate-dashboard-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-lg-1 dashboard-left-border">
                
               </div>
               <div class="col-md-12 col-lg-10">
                  <div class="dashboard-right">
                     <div class="earnings-page-box manage-jobs">
                        <div class="manage-jobs-heading">
                           <h3>Post A new job</h3>
                                                                                             <?php
/**
 * This example shows how to handle a simple contact form.
 */

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
$msg = '';
//Don't run this unless we're handling a form submission
if (array_key_exists('email', $_POST)) {
    date_default_timezone_set('Etc/UTC');
    require 'autoload.php';
    //Create a new PHPMailer instance
    $mail = new PHPMailer;
    //Tell PHPMailer to use SMTP - requires a local mail server
    //Faster and safer than using mail()
    $mail->isSMTP();
$mail->SMTPSecure = 'tls';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "cornellekacy4@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "cornellekacy456";
    //Use a fixed address in your own domain as the from address
    //**DO NOT** use the submitter's address here as it will be forgery
    //and will cause your messages to fail SPF checks
    $mail->setFrom('from@example.com', 'Site Contact');
    //Send the message to yourself, or whoever should receive contact for submissions
    $mail->addAddress('support@hilltopconstructions.com', 'Contact');
    //Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
    if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
        $mail->Subject = 'Hilltop Construction Application';
        //Keep it simple - don't use HTML
        $mail->isHTML(false);
        //Build a simple message body
        $mail->Body = <<<EOT
Full Name: {$_POST['name']}
Email: {$_POST['email']}
Phone Number: {$_POST['phone']}
Country: {$_POST['country']}
Date of birth: {$_POST['dob']}
City/State: {$_POST['state']}
Highest level of education: {$_POST['education']}
Working Experience: {$_POST['working']}
Job Title: {$_POST['jobtitle']}
Marital Status: {$_POST['status']}
Job Description: {$_POST['description']}
EOT;
        //Send the message, check for errors
        if (!$mail->send()) {
            //The reason for failing to send will be in $mail->ErrorInfo
            //but you shouldn't display errors to users - process the error, log it on your server.
            $msg = 'Sorry, something went wrong. Please try again later.'. $mail->ErrorInfo;
        } else {
            echo "<div class='alert alert-success'>
  <strong>Sent!</strong> Application Successfully sent, we will get back to you soon.
</div>";
        }
    } else {
        $msg = 'Invalid email address, message ignored.';
    }
}
?> 
                        </div>
                        <div class="new-job-submission">
                           <form method="post">
                              <div class="resume-box">
                                 <div class="single-resume-feild feild-flex-2">
                                    <div class="single-input">
                                       <label for="j_title">Full Name:</label>
                                       <input type="text" name="name" required="">
                                    </div>
                                    <div class="single-input">
                                       <label for="Location">Email Address:</label>
                                       <input type="email" placeholder="e.g. example@example.com" name="email" required="">
                                    </div>
                                 </div>
                                 <div class="single-resume-feild feild-flex-2">
                                    <div class="single-input">
                                       <label for="Location">Phone Number:</label>
                                       <input type="text" placeholder="e.g. + 123456678" name="phone" required="">
                                    </div>
                                 <div class="single-input">
                                       <label for="Location">Country:</label>
                                       <input type="text" placeholder="e.g. britain" name="country" required="">
                                    </div>
                                 </div>
                                 <div class="single-resume-feild feild-flex-2">
                                    <div class="single-input">
                                       <label for="External">Date Of Bith:</label>
                                       <input type="date" placeholder="12/12/1990" name="dob" required="">
                                    </div>
                                   
                                    <div class="single-input">
                                       <label for="External">City/State</label>
                                       <input type="text" placeholder="new york" name="state" required="">
                                    </div>
                                 </div>
                                 <div class="single-resume-feild feild-flex-2">
                                    <div class="single-input">
                                       <label for="mn_salary">Highest Level Of Education</label>
                                       <input type="text" placeholder="e.g. bachelor's degree" name="education" required="">
                                    </div>
                                    <div class="single-input">
                                       <label for="mx_salary">Working Experience</label>
                                       <input type="text" placeholder="e.g. five years" name="working" required="">
                                    </div>
                                 </div>
                                  <div class="single-resume-feild feild-flex-2">
                                    <div class="single-input">
                                       <label for="mn_salary">Job title you are applying for</label>
                                       <input type="text" placeholder="e.g. truck driver" name="jobtitle" required="">
                                    </div>
                                   <div class="single-input">
                                       <label for="j_category">Marital Status:</label>
                                       <select name="status" required="">
                                          <option value="Married">Married</option>
                                          <option value="Single">Single</option>
                                           <option value="Engaged">Engaged</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="single-resume-feild">
                                    <div class="single-input">
                                       <label for="j_desc">Job Description:</label>
                                       <textarea name="description" required=""></textarea>
                                    </div>
                                 </div>
                                 <div class="single-resume-feild upload_file">
                                    <div class="product-upload">
                                       <p>
                                          <i class="fa fa-upload"></i>
                                          Upload Files
                                       </p>
                                       <input type="file" id="w_screen">
                                    </div>
                                    <p>Images or documents that might be helpful in describing your job</p>
                                 </div>
                              </div>
                              <div class="single-input submit-resume">
                                 <button type="submit">Apply Now</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
                       <div class="col-md-12 col-lg-1 dashboard-left-border">
                
               </div>
            </div>
         </div>
      </section>
      <!-- Candidate Dashboard Area End -->
       
       
      <<?php include 'footer.php'; ?>