<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="text-uppercase text-center">
                Get Your seat Book
                <span class="text-danger d-block">Now!</span>
            </h1>
            <form action="" method="post">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-4">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>From</option>
                                <?php
                                    showAllCities($connection, "option",);
                                ?>
                            </select>
                        </div>
                        <div class="col-4">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>To</option>
                                <?php
                                    showAllCities($connection, "option",);
                                ?>
                            </select>
                        </div>
                        <div class="col-4">
                            <input type="submit" value="Book Now" class="btn btn-danger">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-5"><img id="head-train" width="400" src="images/train.png" alt=""></div>
    </div>
</div>