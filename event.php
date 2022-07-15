<!DOCTYPE html>
<html lang="en">

<head>
<style>

.open-button {
 background-color: #555;
 color: white;
 padding: 16px 20px;
 border: none;
 cursor: pointer;
 opacity: 0.8;
 position: fixed;
 bottom: 23px;
 right: 28px;
 width: 280px;
}

.chat-popup {
 display: none;
 position: fixed;
 bottom: 0;
 right: 15px;
 border: 3px solid #f1f1f1;
 z-index: 9;
}


.form-container {
 max-width: 300px;
 padding: 10px;
 background-color: white;
}


.form-container textarea {
 width: 100%;
 padding: 15px;
 margin: 5px 0 22px 0;
 border: none;
 background: #f1f1f1;
 resize: none;
 min-height: 200px;
}


.form-container textarea:focus {
 background-color: #ddd;
 outline: none;
}


.form-container .btn {
 background-color: #04AA6D;
 color: white;
 padding: 16px 20px;
 border: none;
 cursor: pointer;
 width: 100%;
 margin-bottom:10px;
 opacity: 0.8;
}


.form-container .cancel {
 background-color: red;
}


.form-container .btn:hover, .open-button:hover {
 opacity: 1;
}



 body {
  margin: 0;
  padding: 0;
 }
 
 
  image and dimensions */
 section {
  width: 100%;
  height: 100vh;
  background:white;
  background-size: cover;
 }
 
 /* Styling the left floating section */
 section .leftBox {
  width: 50%;
  height: 100%;
  float: left;
  padding: 50px;
  box-sizing: border-box;
 }
 
 /* Styling the background of
  left floating section */
 section .leftBox .content {
  color: #fff;
  background: rgba(0, 0, 0, 0.5);
  padding: 40px;
  transition: .5s;
 }
 
 /* Styling the hover effect
  of left floating section */
 section .leftBox .content:hover {
  background: #e91e63;
 }
 
 /* Styling the header of left
  floating section */
 section .leftBox .content h1 {
  margin: 0;
  padding: 0;
  font-size: 50px;
  text-transform: uppercase;
 }
 
 /* Styling the paragraph of
  left floating section */
 section .leftBox .content p {
  margin: 10px 0 0;
  padding: 0;
 }
 
 /* Styling the three events section */
 section .events {
  position: relative;
  width: 50%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
  float: right;
  box-sizing: border-box;
 }
 
 /* Styling the links of
 the events section */
 section .events ul {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  margin: 0;
  padding: 40px;
  box-sizing: border-box;
 }
 
 /* Styling the lists of the event section */
 section .events ul li {
  list-style: none;
  background: #fff;
  box-sizing: border-box;
  height: 200px;
  margin: 15px 0;
 }
 
 /* Styling the time class of events section */
 section .events ul li .time {
  position: relative;
  padding: 20px;
  background: #262626;
  box-sizing: border-box;
  width: 30%;
  height: 100%;
  float: left;
  text-align: center;
  transition: .5s;
 }
 
 /* Styling the hover effect
  of events section */
 section .events ul li:hover .time {
  background: #e91e63;
 }
 
 /* Styling the header of time
  class of events section */
 section .events ul li .time h2 {
  position: absolute;
  margin: 0;
  padding: 0;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: #fff;
  font-size: 60px;
  line-height: 30px;
 }
 
 /* Styling the texts of time
 class of events section */
 section .events ul li .time h2 span {
  font-size: 30px;
 }
 
 /* Styling the details
 class of events section */
 section .events ul li .details {
  padding: 20px;
  background: #fff;
  box-sizing: border-box;
  width: 70%;
  height: 100%;
  float: left;
 }
 
 /* Styling the header of the
 details class of events section */
 section .events ul li .details h3 {
  position: relative;
  margin: 0;
  padding: 0;
  font-size: 22px;
 }
 
 /* Styling the lists of details
 class of events section */
 section .events ul li .details p {
  position: relative;
  margin: 10px 0 0;
  padding: 0;
  font-size: 16px;
 }
 
 /* Styling the links of details
 class of events section */
 section .events ul li .details a {
  display: inline-block;
  text-decoration: none;
  padding: 10px 15px;
  border: 1.5px solid #262626;
  margin-top: 8px;
  font-size: 18px;
  transition: .5s;
 }
 
 /* Styling the details class's hover effect */
 section .events ul li .details a:hover {
  background: #e91e63;
  color: #fff;
  border-color: #e91e63;
 }
</style>
</head>

<body>
<section>
 <div class="leftBox">
  <div class="content">
   <h1>
    Virtual Run Event
   </h1>
   
<p>


<h1>UiTM Kuala Terengganu</h1>

<p>Date: 15th January 2022</p>
<p>Distance: 3km</p>
<p>Event Theme: Halloween</p>
<p>Registration Dateline: 7th February 2022</p>

<form action="register.php" method="post">


</form>


<html>
<head>
<title>Personal Info</title>
</head>
<body>
<form action = "handleform.php" method="post">
<p><b> Name </b> <input type="text" size="12" maxlength="12" name="name"><p /> 
<p><b> Email Address: </b> <input type="text" size="12" maxlength="36" name="email"><p /> 
<p><b> Gender </b>
<input type="radio" name="gender" value="M" /> Male
<input type="radio" name="gender" value="F" /> Female
</p>
<p></b> Age: </b>
<select name="age">
<option value="0-30">Under 30</option>
<option value="30-60">Between 30 and 60</option>
<option value="60+">over 60</option>
</select></p>
<p><b> Comments: </b> <textarea name="comments" rows="3" cols="50"> </textarea></p>
<div align="center"> <input type="submit" name="submit" value="Submit Information" />
</div>
</form>
</body>
<html>

</body>
</html>
   </p>

  </div>
 </div>

 <div class="events">
  <ul>
   <li>
    <div class="time">
     <h2>
      15 <br><span>March</span>
     </h2>
    </div>
    <div class="details">
     <h3>
      Where is the event happening?
     </h3>
     
<p>
      The first event is happening 
      at the Tasik Kemboja with all the innovative brains 
      together at one place
     </p>


     <a href="#">View Details</a>
    </div>
    <div style="clear: both;"></div>
   </li>

   <li>
    <div class="time">
     <h2>
      27 <br><span>May</span>
     </h2>
    </div>
    <div class="details">
     <h3>
      Where is the event happening?
     </h3>
     
<p>
      The second event is happening in Dewan Lestari with the alumni of UiTM Kuala Terengganu with 
      their innovative brains
     </p>

     <a href="#">View Details</a>
    </div>
    <div style="clear:both;"></div>
   </li>

   <li>
    <div class="time">
     <h2>
      12 <br><span>August</span>
     </h2>
    </div>
    <div class="details">
     <h3>
      Where is the event happening?
     </h3>
     
<p>
      The third event is happening in Padang Lestari with all the 
      UiTM Kuala Terengganu alumni there
     </p>


     <a href="#">View Details</a>
    </div>
    <div style="clear:both;"></div>
   </li>
  </ul>
 </div>
</section>
<button class="open-button" onclick="openForm()">Chat</button>

<div class="chat-popup" id="myForm">
 <form action="/action_page.php" class="form-container">
   <h1>Chat</h1>

   <label for="msg"><b>Message</b></label>
   <textarea placeholder="Type message.." name="msg" required></textarea>

   <button type="submit" class="btn">Send</button>
   <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
 </form>
</div>

<script>
function openForm() {
 document.getElementById("myForm").style.display = "block";
}

function closeForm() {
 document.getElementById("myForm").style.display = "none";
}
</script>
</body>

</html>








