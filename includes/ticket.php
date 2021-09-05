<?php
    if ($_SESSION["ticketNumber"])
    {
        showAlert("success", "Press CTRL + P to save this ticket.");        
?>
        <div class="container">
            <div class="row">
                <div class="col-4 mt-5"></div>
                <div class="col-4 mt-5 pt-3">
                    <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Ticket</h2>
                        <br>
                        <!-- Name -->
                        <p class="card-text">
                            <div class="container">
                                <div class="row">
                                    <div class="col-6"><strong>Name: </strong></div>
                                    <div class="col-6"><span class="text-capitalize"><?= $_SESSION["name"] ?></span></div>
                                </div>
                            </div>    
                        </p>
                        <!-- Source -->
                        <p class="card-text">
                            <div class="container">
                                <div class="row">
                                    <div class="col-6"><strong>Source: </strong></div>
                                    <div class="col-6"><span class="text-capitalize"><?= $_SESSION["source"] ?></span></div>
                                </div>
                            </div>         
                        </p>
                        <!-- Destination -->
                        <p class="card-text">
                            <div class="container">
                                <div class="row">
                                    <div class="col-6"><strong>Destination: </strong></div>
                                    <div class="col-6"><span class="text-capitalize"><?= $_SESSION["destination"] ?></span></div>
                                </div>
                            </div>
                        </p>
                        <!-- Ticket Number -->
                        <p class="card-text">
                            <div class="container">
                                <div class="row">
                                    <div class="col-6"><strong>Ticket Number: </strong></div>
                                    <div class="col-6"><span class="text-capitalize"><?= $_SESSION["ticketNumber"] ?></span></div>
                                </div>
                            </div>
                        </p>
                        <!-- Train Number -->
                        <p class="card-text">
                            <div class="container">
                                <div class="row">
                                    <div class="col-6"><strong>Train Number: </strong></div>
                                    <div class="col-6"><span class="text-capitalize"><?= $_SESSION["trainNumber"] ?></span></div>
                                </div>
                            </div>          
                        </p>
                        <!-- Date -->
                        <p class="card-text">
                            <div class="container">
                                <div class="row">
                                    <div class="col-6"><strong>Date: </strong></div>
                                    <div class="col-6"><span class="text-capitalize"><?= $_SESSION["date"] ?></span></div>
                                </div>
                            </div>
                        </p>
                        <p class="card-text">
                            <div class="container">
                                <div class="row">
                                    <div class="col-6"><strong>Time: </strong></div>
                                    <div class="col-6"><span class="text-capitalize"><?= $_SESSION["time"] ?></span></div>
                                </div>
                            </div>
                        </p>
                    </div>
                </div>
                <div class="col-4 mt-5"></div>
            </div>
        </div>

<?php }
    else
    {
        header("Location: .");
    }
?>