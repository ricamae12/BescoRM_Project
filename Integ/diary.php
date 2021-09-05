<!DOCTYPE html>
<html>
<head>
<title>My Personal Diary</title>
	
<style>

body {
  margin: 2px;  
}
.header {
  background-color:#dfbf9f;
  padding: 1px;
  height: 70px;
  text-align: left;
}
</style>

<style>

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}


<style>
input[type=text], select {
  width: 100%;
  padding: 15px 5px;
  margin: 5px ;
  display: inline-block;
  border: 1px solid #dfbf9f;
  border-radius: 7px;
  box-sizing: border-sizing;
  
}



div {
  border-radius: 4px;
  background-color: #e6ccb3;
  padding: 20px;
}

h1 {
  text-shadow: 8px 2px;
}

.user{
  font-weight: bold;
  color:black;
}
.time{
  color:gray
}
.userComments{
  color:black;
}
.replies{
  margin-left: 20px;
  
}
</style>

<body>

<br>

<div>
<style>
h1 {
  text-shadow: 2px 2px;
}
</style>
<div class="header">
  <h1 style="font-family:courier;"align= "center" <b> Personal Diary </b></h1>
</div>
<div style="width:500px; height:670px; margin:100px 400px 100px 400px; background-color:white; border:2px solid white;">
	<div style="margin:20px">
 
    <form>
 <input type='date' id='date' name='date' required>
</form>

    <div class="container">
        <form action="data.php" method="POST">
        <label for="Memories">Upload your memories here<span style="color:red"></span></label>
        <p><textarea name="memories" placeholder="Type your memories here..." cols="40" rows="5" required></textarea></p>
    <input type="submit" name= "save" value="save"></td></button>
    <input type="submit" name= "edit" value="edit"></td></button>
    <input type="submit" name= "delete" value="delete"></td></button>
    </div>
    <br>

  </form>
</div>

<style>
body {
  background-image: url("https://i.pinimg.com/564x/b2/81/b7/b281b76a945139945e9a93c8e0a11322.jpg");
  background-repeat:repeat;
  background-attachment: fixed;
}
</style>

</body>
</html>