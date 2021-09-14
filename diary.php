<!DOCTYPE html>
<html>
<head>
<title>My Personal Diary</title>

<style>
    body {
      background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhkdHSizK5bHI3Xt7ZvOoLlkEfdLVBsqsldA&usqp=CAU');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100% 100%;
    }

    </style>
<style>

body {
  margin: 2px;  
}
.header {
  background-color:#9e9e9e80;
  padding: 1px;
  height: 70px;
  text-align: left;
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
  <h1 style="font-family:courier;"align ="center" ><b>Welcome to your diary</b></h1>
</div>
<div style="width:500px; height:300px; margin:100px 400px 100px 400px; background-color:rgba(255, 255, 255, 0.116); border:2px solid white;">
	<div style="margin:20px">
 

  <div id="datediv" class= "row text-left">
  <div class ="col">
  <label for="udato"><b>Date</b> <span style="color:red"></span></label>
  <span id ="dateinput"> 
    <input class id= "udato" type ="datetime-local" name= "udato"
    autocomplete ="on" value= "2021-09-14 13:48:43">
    <a href="?" class= "doit" data-action="toggle-dateinput">
      <i class= "ml-2 fa fa-refresh">
        
      </i>
</a>

</span>
      

    <div class="container">
        <form action="data.php" method="POST">
          <br>
        <label for="Memories"><b>Upload your memories here</b><span style="color:red"></span></label>
        <p><textarea name="memories" placeholder="Type your memories here..." cols="40" rows="5" required></textarea></p>
    <input type="submit" name= "save" value="save"></td></button>
    <input type="submit" name= "edit" value="edit"></td></button>
    <input type="submit" name= "submit" value="delete"></td></button>
    </div>
    <br>

  </form>
</div>


</body>
</html>
