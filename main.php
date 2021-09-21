<html>
<head>
    <title>HOME</title>
    <style >


    	.bg { 
  background-image: url("img/cool.jfif");
  height: 50%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
 }

      .topnav {
        overflow: hidden;
        background-color: #333;
       

      }

      .topnav a {
        float: left;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 21px;
      }

      .topnav a:hover {
        background-color: #ddd;
        color: black;
      }

      .topnav a.active {
        background-color: #4CAF50;
        color: white;
      }

      .form-popup {
        display: none;
        position: fixed;
        top: 27%;
        left:34%;
        
      }

      .form-container {
        max-width: 250px;
        padding: 10px;
        background-color: white;
      }

      .form-container input[type=text] {
        width: 75%;
        padding: 3px;
        margin: 5px 0 7px 0;
        border: none;
        background: #CFD8DC;
      }

      .form-container input[type=text]:focus {
        background-color: #ddd;
        outline: none;
      }

      .form-container .btn {
        background-color: #4CAF50;
        color: white;
        padding: 8px 15px;
        border: none;
        cursor: pointer;
        width: 100%;
        margin-bottom:5px;
        opacity: 0.8;
      }

      .form-container .cancel {
        background-color: red;
      }

      .form-container .btn:hover, .open-button:hover {
        opacity: 1;
      }


      .form-popup2 {
        display: none;
        position: fixed;
        top: 28%;
        left:50%;

      }

      .upd{
        overflow: visible;
        background-color: #D0D3D4;
        float: right;
        color: black;
       margin-top: -40px;
       margin-right: 10px;
        padding: 5px 10px;
        text-decoration: none;
        font-size: 15px;
        

      }

      .upd a:hover {
        background-color: black;
        color: white;
       
      }
    </style>

</head>


<body class="bg">
	<br><font size="40px"><b>FINANCE PEER</b></font><br><br>
	<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="Display.php">Display using jason</a>
 
      </div>


</div>
	<a style="text-decoration: none;" class="upd" onclick="log()" >Logout</a>&nbsp;&nbsp;&nbsp;
</body>
</html>