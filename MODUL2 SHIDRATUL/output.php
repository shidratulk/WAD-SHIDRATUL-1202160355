<!DOCTYPE html>
    <html>
        <head>
             <title>Home Booking</title>
        </head>
        <body>
            <?php
            $nama = $_POST['Name'];
            $checkin = $_POST['date'];
            $duration = $_POST['duration'];
            $roomtype = $_POST['roomtype'];
            $addservices = $_POST['addservices'];
            $phonenumber = $_POST['contactno'];
            ?>
            <fieldset>
                <table class="table">
                    <tr>
                        <td>Name: </td>
                        <td><?= $nama ?> </td>
                    </tr>
                    <tr>
                        <td>Check in: </td>
                        <td><?=$checkin ?> </td>
                    </tr>
                    <tr>
                        <td>Duration: </td>
                        <td><?= $duration ?> </td>
                    </tr> 
                    <tr>
                        <td>Room Type: </td>
                        <td><?= $roomtype ?> </td>
                    </tr>
                    <tr>
                        <td>Add Services: </td>
                        <td><?= $addservices ?> </td>
                    </tr>    
                    <tr>
                        <td>Phone Number: </td>
                        <td><?= $phonenumber ?> </td>
                    </tr>  
</table>
                    <div style="text-align: center;">
                        <a href="BOOKING.php" class="btn btn-primary mb-2">
                            Kembali</a>
</div>
</fieldset>
