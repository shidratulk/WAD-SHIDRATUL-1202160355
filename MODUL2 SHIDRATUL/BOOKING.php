<!DOCTYPE html>
    <html>
        <head>
             <title>Home Booking</title>
        
        </head>
        <body>
           
            <img src = "https://sgp1.digitaloceanspaces.com/tz-mag-id/wp-content/uploads/2019/07/020207074343/hotel-1330834_1280-770x424.jpg" height = "300px" width = "400px"> 
                    <form action="output.php" method = "POST" enctype = "multipart/form-data">
                        <div class = "form-group">
                            <label>Name</label>
                            <input type = "text" class = "form-control" name = "Name" required = "required" />
                        </div>
                        <div class = "form-group">
                            <label>Check in</label>
                            <input type = "date" class = "form-control" name = "date" required = "required" />
                        </div>
                        <div class = "form-group">
                            <label>Duration</label>
                            <input type = "text" class = "form-control" name = "duration" required = "required" />
                        </div>
                        <div class = "form-group">
                            <label>Room Type </label>
                            <select name="roomtype" id="">
                            <option value="Standard">Standard</option>
                            <option value="Superior">Superior</option>
                            <option value="Luxury">Luxury</option>
                            </select>
                        </div>   
                        <div class = "form-group">
                            <label>Add Services</label>
                            <p><input type = 'checkbox' name= "addservices" value="Room Services" />Room Services</p>
                            <p><input type = 'checkbox' name= "addservices" value="Breakfast" />Breakfast</p>
                        </div>    
                        <div class = "form-group">
                            <label>Phone Number</label>
                            <input type = "text" class = "form-control" name = "contactno" required = "required" />
                        </div>
                      
                        <br />
                        <div class = "form-group">
                            <button class = "btn btn-info form-control" name = "add_guest"><i class = "glyphicon glyphicon-save"></i> Book</button>
                        </div>
                    </form>
                
     
</body> 
</html>
    