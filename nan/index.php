<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Neha</title>
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="./1style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<!-- partial:index.partial.html -->
<!-- 3D Slideshow Section --> 
<section class="intro"  id="slideshow">
			<div class="entire-content">
				<div class="content-carrousel ">
					<figure class="shadow"><img src="https://images.pexels.com/photos/758733/pexels-photo-758733.jpeg?w=940&h=650&auto=compress&cs=tinysrgb"/></figure>
					<figure class="shadow"><img src="https://images.pexels.com/photos/21261/pexels-photo.jpg?w=940&h=650&auto=compress&cs=tinysrgb"/></figure>
					<figure class="shadow"><img src="https://images.pexels.com/photos/567973/pexels-photo-567973.jpeg?w=940&h=650&auto=compress&cs=tinysrgb"/></figure>
					<figure class="shadow"><img src="https://images.pexels.com/photos/776653/pexels-photo-776653.jpeg?w=940&h=650&auto=compress&cs=tinysrgb"/></figure>
					<figure class="shadow"><img src="https://images.pexels.com/photos/54630/japanese-cherry-trees-flowers-spring-japanese-flowering-cherry-54630.jpeg?w=940&h=650&auto=compress&cs=tinysrgb"/></figure>
					<figure class="shadow"><img src="https://images.pexels.com/photos/131046/pexels-photo-131046.jpeg?w=940&h=650&auto=compress&cs=tinysrgb"/></figure>
					<figure class="shadow"><img src="https://images.pexels.com/photos/302515/pexels-photo-302515.jpeg?w=940&h=650&auto=compress&cs=tinysrgb"/></figure>
					<figure class="shadow"><img src="https://images.pexels.com/photos/301682/pexels-photo-301682.jpeg?w=940&h=650&auto=compress&cs=tinysrgb"/></figure>
					<figure class="shadow"><img src="https://images.pexels.com/photos/933054/pexels-photo-933054.jpeg?w=940&h=650&auto=compress&cs=tinysrgb"/></figure>
					
				</div>
	</div>
</section>
<section class="intro" id="intro slideshow">
    <section class="balloons-conatiner" id="balloons-container">
        <div class="balloon yellow" ></div>
        <div class="balloon blue"   ></div>
        <div class="balloon purple" ></div>
        <div class="balloon red"    ></div>
        <div class="balloon cyan"   ></div>
        <!-- infinite-->
        <div class="balloon pink"   ></div>
        <div class="balloon orange" ></div>
        <div class="balloon blue"   ></div>
        <div class="balloon yellow" ></div>
        <div class="balloon purple" ></div>
        <div class="balloon green"  ></div>             
        <div class="balloon cyan"   ></div>
        <div class="balloon red"    ></div>
		
    </section>
</section>

<div class="container">
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Contact Me</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         <form action="" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="first_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Email" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Message Howz My Gift</label>
    <input type="text" name="message" class="form-control" id="exampleInputPassword1" placeholder="Message me" required>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
     
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

<!-- partial -->
<script  src="./script.js"></script>
<?php 
if(isset($_POST['submit'])){
    $to = "m4mohammadkhalid@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
   
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
</body>
</html>
