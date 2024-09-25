<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Trek Booking </title>
<?php require('inc/links.php'); ?>   
</head>
<body class="bg-light">
<?php require('inc/header.php');
?>
<div class="my5 px-4">
<h2 class="fw-bold h-font text-center">Harishchandragad Trek</h2>
<div class="h-line bg-dark"></div>
<p class="text-center mt-3">
..
</p>

<div class="container">
<div class="row justify-content-between align-items-center">
<div class="col-lg-6 col-md-6 px-4">
<section>
        <p>
        Harishchandragad is a historic hill fort in the Western Ghats of Maharashtra, 
        attracting trekkers with its diverse landscapes and historical significance. 
        Accessible from base villages like Pachnai and Khireshwar, the trek offers stunning views,
         ancient temples, and notable features like the Konkan Kada cliff. The fort is known for the Harishchandreshwar
         Temple and the Kedareshwar Cave, making it a popular destination for both trekking and cultural exploration.</p>
</section>
<section>
    <b>Location:</b>Ahmednagar district, Maharashtra, India <br>
    <b>Altitude:</b>Canyon trek <br>
    <b>Difficulty:</b>Moderate to Difficult<br>
    <b>Duration:</b>2 days (including travel and exploration)<br>
    </section>
<br>
    <section>
    <h5>Highlights</h5>
    <p><b>Canyon Exploration:</b>Embark on a unique trek through the narrow and picturesque Sandhan Valley, also known as the Valley of Shadows.
    <br><b>Rappelling and Trekking:</b>Experience a thrilling combination of trekking and rappelling along the rocky surfaces of the canyon
    <br><b>Camp Under the Stars:</b>Camp overnight within the valley, surrounded by the breathtaking rock formations.</p>
    </section>
    <section>
    <h5>Trek Itinerary</h5>
        <p><b>Base Village:</b>Samrad<br>
          <b>Start Time</b> Early morning<br>
          <b>1.Samrad to Sandhan Valley:</b>Begin the trek from Samrad, descending into the Sandhan Valley.
            Traverse through the narrow passages and rocky terrain.<br>
          <b>2.Rappelling and Exploration:</b>Engage in rappelling activities, adding an adventurous dimension to the trek.
            Explore the unique features of the valley, including rock formations and water bodies.
           <br><b>3.Overnight Camping:</b>
           Set up camp within the valley, enjoying a night under the starry sky.
           Share stories and experiences around the campfire       
                </p>
    <section>
    <h5><i class="bi bi-magic"></i>Essential Tips:</h5>
        <p><i class="bi bi-dot"></i> <b> Permits:</b> Obtain necessary permits from the Forest Department before starting the trek.
        <br><i class="bi bi-dot"></i><b>Guides:</b> It's advisable to hire a local guide familiar with the trail and wildlife
        <br><i class="bi bi-dot"></i><b>Water and Snacks:</b>Carry an adequate supply of water and energy snacks for the trek
        <br><i class="bi bi-dot"></i><b>Safety Measures:</b>Follow safety guidelines, especially during monsoon, as the trail can be slippery</p>
    </section>
       <section>
        <h5>How to Reach</h5>
        <p> <b>By Road:</b>Reach Samrad by road from various towns in Ahmednagar district
      <br> <b>Nearest Railway Station:</b>Igatpuri Railway Station
     <br> <b>Nearest Airport:</b>Chhatrapati Shivaji Maharaj International Airport, Mumbai</p>
    </section>

    <section>
        <h5>Conclusion</h5>
        Embark on the Sandhan Valley trek for an adrenaline-pumping adventure in the heart of nature. Immerse yourself in the 
        awe-inspiring beauty of the canyon and create lasting memories.
    </section>
</div>

<div class="col-lg-6 col-md-6 px-4 align-top">
<div class="card" style="width: 50rem;">
  <img src="images/harishchandragad.JPG" style="height: 440px; width: 550px;" class="card-img-top " alt="...">
  <div class="card-body">
    <h5 class="card-title">Harishchandragad Durg</h5>
    <p class="card-text"><h3>₹2599</h3><br>
    <i class="bi bi-stars"></i> Instant Confirmation <br>
    <i class="bi bi-stars"></i>100% Satisfaction Guarantee <br>
    <i class="bi bi-stars"></i>Secure & Easy Booking</p>
    <button type='button' class='btn btn-outline-dark shadow-none' data-bs-toggle='modal' data-bs-target='#book'>BookNow</button>
  </div>
  </div>
</div>
</div>
</div>
</div>
     

<div class="modal fade" id="book" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<form method="POST" action="payment.php">
<div class="modal-header">
<h5 class="modal-title d-flex-align-items-center">
<i class="bi bi-person-circle  fs-3 me-2"></i>Booking Form</h5>
<button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<div class="mb-3">
<label  class="form-label">Name</label>
<input type="text" id="name" name="name" class="form-control shadow-none">
<label  class="form-label">Email-Id</label>
<input type="text" id="email" name="email" class="form-control shadow-none" placeholder="name@example.com">
<label  class="form-label">Whatapp Number</label>
<input type="number" id="phone" name="phone"  class="form-control shadow-none" placeholder="+91" required>
<label  class="form-label">Total Cost = ₹2599
</label>
</div>
<div class="d-flex align-item-center justify-content-between mb-2">
<button type="submit" name="submit_booking" class="btn btn-dark shadow-none">Submit</button>
</div>
</div>
</form>
</div>
</div>
</div> 

<?php
require('inc/footer.php');
?>

</body>
</html>