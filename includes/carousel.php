<?php
    // Activates when user clicks  on book button.
    // Also checks if user selected cities or not
    // by comparing default values "To" & "From.
    if(isset($_POST['book']) && $_POST['To']!="To" && $_POST['from']!="From")
    {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $dateTime = $_POST['dateTime'];
        $to = $_POST['to'];
        $from = $_POST['from'];

        // Book a seat for customer
        bookSeat($connection,$name,$age, $dateTime, $from, $to);
    }
?>
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="text-uppercase text-center">
                Get Your seat Book
                <span class="text-danger d-block">Now!</span>
            </h1>
            <!-- Take ticket order from customer -->
            <form action="" method="post">
                <div class="container mt-5">
                    <!-- row 1 -->
                    <div class="row">
                        <div class="col-6">
                            <select name="from" class="form-select" aria-label="Default select example">
                                <option selected>From</option>
                                <?php
                                    showAllCities($connection, "option",);
                                ?>
                            </select>
                        </div>
                        <div class="col-6">
                            <select name="to" class="form-select" aria-label="Default select example">
                                <option selected>To</option>
                                <?php
                                    showAllCities($connection, "option",);
                                ?>
                            </select>
                        </div>
                    </div>
                    <!-- row 2 -->
                    <div class="row mt-3">
                        <div class="col-4">
                            <input name="name" type="text" class="form-control" placeholder="Name" require>
                        </div>
                        <div class="col-4">
                            <input name="age" type="text" class="form-control" placeholder="Age" require>
                        </div>
                        <div class="col-4">
                            <input name="dateTime" type="datetime-local" class="form-control" require>
                        </div>
                    </div>
                    <!-- row 3 -->
                    <div class="row mt-3">
                        <div class="col-4"></div>
                        <div class="col-4">
                            <div class="col-3">
                                <input name="book" type="submit" value="Book Now" class="btn btn-lg btn-danger">
                            </div>
                        </div>
                        <div class="col-4"></div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-5"><img id="head-train" width="400" src="images/train.png" alt=""></div>
    </div>
</div>