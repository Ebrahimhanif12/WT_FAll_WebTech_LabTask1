<!DOCTYPE html>

<html lang="en">
<head>
  
<style>
    #i{
        width: 100%;
        padding: 2px;
        height: 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    
</style>

</head>
<body>
    <center>
    <h1 style="text-align: center;">Clinick Patient Registratin</h1>

    <div style="ackground-color: #f9f9f9; width: 550px; text-align: left; padding: 10px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
        <p>First Name:</p>
        <input id="i"  type="text">
        <p>Age:</p>
        <input id="i" type="number">
        <p>Phone Number:</p>
        <input id="i" type="number">
        <p>Email Address:</p>
        <input id="i" type="text">
        <p>Insurance Provider:</p>
         
        <!-- <input type="checkbox" id ="provider1"/> Provider1
        <input type="checkbox" id ="provider1"/> Provider2
        <input type="checkbox" id ="provider1"/> Provider3
        <input type="checkbox" id ="provider1"/> Provider4 -->


        
        <select style="width:100%">
            <option value="1">Select Provider</option>
            <option value="2">Provider 1</option>
            <option value="3">Provider 2</option>
            <option value="4">Provider 3</option>
            <option value="5">Provider 4</option>
        </select>
        <p>Insurance Policy Number:</p>
        <input id="i"  type="number">

        <p style="font-weight: bold; text-align: center;">Additional Information:</p>

        <p>Username</p>
        <input id="i" type="text">
        <p>Password</p>
        <input id="i" type="password"> <br><br>
        <button style="background-color: blue; width: 100%; color: white; border: none; padding: 10px 15px; cursor: pointer;" type="submit">Submit</button>

    </div>
</center>
</body>

</html>

