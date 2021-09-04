<?php
    /*
        Get the values from the table and register
        a ticket for the user.
    */
    if (isset($_POST['submit']))
    {
        $name = $_SESSION['name'];
        $age = $_SESSION['age'];
        $date = $_SESSION['date'];
        $from = $_SESSION['source'];
        $to = $_SESSION['destination'];

        $arr = explode(',',$_POST['selectSlot']); 
        $trainNumber = $arr[0];
        $time = $arr[1];

        // Book a seat for customer
        bookSeat($connection, $trainNumber, $name, $age, $date, $time, $from, $to);

        session_destroy();
    }
    // Activates when user clicks  on book button.
    // Also checks if user selected cities or not
    // by comparing default values "To" & "From.
    if(isset($_POST['book']) && $_POST['To']!="To" && $_POST['from']!="From")
    {
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['age'] = $_POST['age'];
        $_SESSION['date'] = $_POST['date'];
        $_SESSION['source'] = $_POST['from'];
        $_SESSION['destination'] = $_POST['to'];

    }
    else 
    {
        header("Location: .");
    }
?>
<form action="" method="post">
    <div class="container mt-5">
        <div class="row pt-5">
            <div class="col-2"></div>
            <div class="col-8">
                <table class="table table-bordered border-danger">
                    <thead>
                        <tr>
                            <th>Train Number</th>
                            <th>Time</th>
                            <th>Source</th>
                            <th>Destination</th>
                            <th>Select</th>
                        </tr>
                    </thead>
                    <tbody>
                    <!-- Show all time slots available  -->
                        <?php
                        $query = "SELECT * FROM timing WHERE source='$_SESSION[source]' AND destination='$_SESSION[destination]'";
                        $timings = mysqli_query($connection, $query);
                        
                        while ($time = mysqli_fetch_assoc($timings))
                        {?>
                            <tr>
                                <td><?php echo $time['trainNumber'];?></td>
                                <td><?php echo $time['time'];?></td>
                                <td><?php echo $time['source'];?></td>
                                <td><?php echo $time['destination'];?></td>
                                <td>
                                    <div class="form-check">
                                        <input  type="radio" value="<?php echo $time['trainNumber'] .','.$time['time']; ?>" name="selectSlot" id="timeRadio" class="form-check-input">
                                    </div>
                                </td>
                            </tr>
                    
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-6">
                        <input type="submit" name="submit" class="btn btn-danger mx-auto d-block">
                    </div>
                    <div class="col-6">
                            <input type="button" onclick="window.location.href='.'" value="Close" class="btn btn-dark mx-auto d-block"> 
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</form>
