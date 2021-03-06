<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Info</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="backcolor">
    
 <table class="table">
     <h1>Employee Information</h1>
     <tr>
         <td>Employee Name:</td>
         <td><input type="text" id="name" class="form-control"></td>
     </tr>
     <tr>
         <td>Home:</td>
         <td><input type="text" id="address" class="form-control"></td>
     </tr>
     <tr>
         <td>Designation:</td>
         <td><input type="text" id="designation" class="form-control"></td>
     </tr>
     <tr>
         <td>Salary:</td>
         <td><input type="text" id="salary" class="form-control"></td>
     </tr>
     <tr>
         <td>Address:</td>
         <td><input type="text" class="form-control"></td>
     </tr>
     <tr>
         <td>Email:</td>
         <td><input type="text" id="email" class="form-control"></td>
     </tr>
     <tr>
         <td>Phone:</td>
         <td><input type="text" id="phone" class="form-control"></td>
     </tr>
     <tr>
         <td>Gender:</td>
         <td><input type="radio"  id="gender" name="gender">Male<input type="radio"  id="gender" name="gender" >Female</td>
     </tr>
     <tr>
         <td><input type="checkbox" class="form-control"></td>
         <td>Terms and conditions</td>
     </tr>
     <tr>
         <td></td>
         <td><button onclick="clickme()" class="btn btn-success">Register</button></td>
     </tr>
 </table>
 <script src="js\script.js">
         
 </script>   
</body>
</html>