<!DOCTYPE html>    
<html>    
<head>    
<meta name="viewport" content="width=device-width, initial-scale=1">    
<style>    
* {    
  box-sizing: border-box;    
}    
    
input[type=text], select, textarea {    
  width: 100%;    
  padding: 12px;    
  border: 1px solid rgb(70, 68, 68);    
  border-radius: 4px;    
  resize: vertical;    
}    
input[type=email], select, textarea {    
  width: 100%;    
  padding: 12px;    
  border: 1px solid rgb(70, 68, 68);    
  border-radius: 4px;    
  resize: vertical;    
}    
    
label {    
  padding: 12px 12px 12px 0;    
  display: inline-block;    
}    
    
input[type=submit] {    
  background-color: rgb(37, 116, 161);    
  color: white;    
  padding: 12px 20px;    
  border: none;    
  border-radius: 4px;    
  cursor: pointer;    
  float: right;    
}    
    
input[type=submit]:hover {    
  background-color: #45a049;    
}    
    
.container {    
  border-radius: 5px;    
  background-color: #f2f2f2;    
  padding: 20px;    
}    
    
.col-25 {    
  float: left;    
  width: 25%;    
  margin-top: 6px;    
}    
    
.col-75 {    
  float: left;    
  width: 75%;    
  margin-top: 6px;    
}    
    
/* Clear floats after the columns */    
.row:after {    
  content: "";    
  display: table;    
  clear: both;    
}    
    
/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */    
</style>    
</head>    
<body>    
<h2>FEED BACK FORM</h2>    
<div class="container">    
  <form action="feed.php" method="POST">    
    <div class="row">    
      <div class="col-25">    
        <label for="fname"> Name</label>    
      </div>    
      <div class="col-75">    
        <input type="text" id="fname" name="firstname" placeholder="Your name..">    
      </div>    
    </div>    
    <div class="row">    
      <div class="col-25">    
        <label for="lname">last name</label>    
      </div>    
      <div class="col-75">    
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">    
      </div>    
    </div>    
    <div class="row">    
        <div class="col-25">    
          <label for="email">Mail Id</label>    
        </div>    
        <div class="col-75">    
          <input type="email" id="email" name="mailid" placeholder="Your mail id..">    
        </div>    
      </div>    
    <div class="row">    
      <div class="col-25">    
        <label for="Rating">Rating</label>    
      </div>    
      <div class="col-75">    
        <select id="Rating" name="Rating">    
            <option value="none">Rate this out!</option>    
          <option value="australia">1</option>    
          <option value="canada">2</option>    
          <option value="usa">3</option>    
          <option value="russia">4</option>    
          <option value="japan">5</option>    
   
        </select>    
      </div>    
    </div> 
    <div class="row">    
        <div class="col-25">    
          <label for="art_name">Art ID</label>    
        </div>    
        
        <div class="col-75">    
          <input type="text" id="art_category" name="art_id" placeholder="art_id..">    
        </div>    
      </div>    
    <div class="row">    
        <div class="col-25">    
          <label for="art_name">Art name</label>    
        </div>    
        
        <div class="col-75">    
          <input type="text" id="art_name" name="art_name" placeholder="art_name..">    
        </div>    
      </div>    

      

      <div class="row">    
        <div class="col-25">    
          <label for="art_name">Artist name</label>    
        </div>    
        
        <div class="col-75">    
          <input type="text" id="art_name" name="artist_name" placeholder="artist_name..">    
        </div>    
      </div>    
    
      <div class="row">    
        <div class="col-25">    
          <label for="art_name">Art category</label>    
        </div>    
        
        <div class="col-75">    
          <input type="text" id="art_category" name="art_category" placeholder="art_category..">    
        </div>    
      </div>    

    
       
    <div class="row">    
      <div class="col-25">    
        <label for="feed_back">Feed Back</label>    
      </div>    
      <div class="col-75">    
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>    
      </div>    
    </div>    
    <div class="row">    
      <input type="submit" value="Submit">    
    </div>    
  </form>    
</div>    
    
</body>    
</html>    