<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<?php

function donation_forms()
{ 
    $course_ID = $_GET['id'];
 

?>

    <form class="" method="post" action="" id="donateForm">
        <div class="col-lg-6 ">
            <div class="default-title">
                <h3>DONATION DETAILS</h3>
            </div>
            <div class="form-group">
                <label for="ds-amount" class="field-label">How much would you like to donate? (LKR)</label>
                <input type="number" class="form-control" name="ds_amount" id="ds-amount" placeholder="Enter Your Amount" required>
            </div>
            <div class="form-group ">
                <label for="ds-msg" class="field-label">Message</label>
                <textarea  class="form-control" name="ds_msg" id="ds-msg" row="5" ></textarea>
            </div>

        </div>
        <div class="col-lg-6  row">
            <div class="default-title col-lg-12">
                <h3>DONOR DETAILS</h3>
            </div>

            <div class="form-group col-lg-6">
                <label for="ds-fname" class="field-label">First Name</label>
                <input type="text" class="form-control" name="ds_fname" id="ds-fname" required>
            </div>

            <div class="form-group col-lg-6">
                <label for="ds-lname" class="field-label">Last Name</label>
                <input type="text" class="form-control" name="ds_lname" id="ds-lname" required>
            </div>

            <div class="form-group col-lg-6">
                <label for="ds-email" class="field-label">Email</label>
                <input type="email" class="form-control" name="ds_email" id="ds-email" required>
            </div>

            <div class="form-group col-lg-6">
                <label for="ds-phone" class="field-label">Phone</label>
                <input type="text" class="form-control" name="ds_phone" id="ds-phone" required>
            </div>

            <div class="form-group col-lg-12">
                <label for="ds-address" class="field-label">Address</label>
                <textarea  class="form-control" name="ds_address" id="ds-address" required></textarea>
            </div>

            <input type="hidden" class="form-control" name="ds_course_id" id="ds-course-id" value="<?php echo $course_ID; ?>">

            <div class="form-group col-lg-12">
            <button type="submit" id="submit" class="theme-btn btn-style-one">Submit Donation</button>
            </div>
        </div>
    </form>

    <div style="display:none" class="success-msg-div" id="pd-form-subm-success">        
        <p>Donation message successfully sent.</p>
        <h5>Thank you for your Donation</h5>
    </div>

    <?php
    global $wpdb;
    $Name = $_POST["ds_fname"] .' '. $_POST["ds_lname"];
    $email = $_POST["ds_email"];
    $phone = $_POST["ds_phone"];
    $address = $_POST["ds_address"];
    $amount = $_POST["ds_amount"];
    $message = $_POST["ds_msg"];
    $cid = $_POST["ds_course_id"];

    $wpdb->insert('wp_donation', array(
        'donor_name' => $Name,
        'donor_email' => $email,
        'donor_phone' => $phone,
        'donor_address' => $address,
        'donation_amount' => $amount,
        'donor_message' => $message,
        'couse_id' => $cid,
    ));
    ?>


<script>
        $(document).ready(function() {
            $("#donateForm").submit(function(event) {
                event.preventDefault();
                var fname = $("#ds-fname").val();
                var lname = $("#ds-lname").val();
                var email = $("#ds-email").val();
                var phone = $("#ds-phone").val();
                var address = $("#ds-address").val();
                var amount = $("#ds-amount").val();
                var message = $("#ds-msg").val();
                var courseId = $("#ds-course-id").val();

                $.ajax({
                    url: '',
                   // dataType: 'json',
                    type: 'POST',
                    data: {
                        ds_fname: fname,
                        ds_lname: lname,
                        ds_email: email,
                        ds_phone: phone,
                        ds_address: address,
                        ds_amount: amount,
                        ds_msg: message,
                        ds_course_id: courseId

                    },

                    success: function(data) {                    
                        $('#donateForm').fadeOut();
                        $('#pd-form-subm-success').css("display","block");
                        
                    }

                })

            });
        });
    </script>


<?php } ?>

</div>
<?php add_shortcode('donation_details', 'donation_forms');

// --------------- mail function
function mail_Function(){

$name = $_POST["ds_fname"] .' '. $_POST["ds_lname"];
$email = $_POST["ds_email"];
$phone = $_POST["ds_phone"];
$address = $_POST["ds_address"];
$amount = $_POST["ds_amount"];
$message = $_POST["ds_msg"];

$mail =$_GET['mail'];

if(isset($_POST['ds_email'])){

    $to      = $mail;
    $subject = 'Donation Recieved note From Dream Squad Charity';
    $message = '
    <html>
    <head></head>
    <body>
  <h2>Donation From '.$name.'</h2>
  <h3><strong>Phone: </strong>'.$phone.'<h3>
  <h3><strong>Email: </strong>'.$email.'<h3>
  <h3><strong>Address: </strong>'.$address.'<h3>
  <h3><strong>Amount: </strong>'.$amount.'.00LKR<h3>
  <h3><strong>Message: </strong>'.$message.'<h3>
  </body>
  </html>

  ';
   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    
    mail($to, $subject, $message, $headers);
}

}

add_shortcode('donation_mail', 'mail_Function');


