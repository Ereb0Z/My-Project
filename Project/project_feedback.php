<html>
 <head> 
     <title>SenpaiNime</title>
    
    <!--link css-->
    <link rel="stylesheet" href="style_homepage.css">
    
 </head> 
 <body> 
    <nav class="navbar item">
        <i class='bx bx-menu icon'></i>
        
        <ul class="menu">
            <li><a href="Project_homepage.html">Home</a></li>
        </ul>
    </nav>
 <hr> 
 <br>
 <br>
     <form method="POST" action="project_action.php"> 
     <table border="2px">
    
        <tr>
            <td>Nickname :</td> 
            <td colspan="3"><input type="text" name="nama"/></td>
        </tr> 
        <tr>
            <td>Email :</td> 
            <td colspan="3"><input type="text" name="email"/></td>
        </tr> 
        <tr>
            <td>Feedback :</td> 
            <td><textarea name= Feedback cols="5"  rows="3"></textarea><br></td>
        </tr>
    </table> 
    <input type="submit"  value="submit" /> 
    <input type="reset" value="reset">
    </form> 
    <br>
    <br>
    <hr>
 </body> 
</html>