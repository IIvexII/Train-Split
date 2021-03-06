<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="text-uppercase text-center">
                Get Your seat Book
                <span class="text-danger d-block">Now!</span>
            </h1>
            <!-- Take ticket order from customer -->
            <form action="?page=selectTime" method="post">
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
                        <div class="col-3">
                            <input name="age" type="text" class="form-control" placeholder="Age" require>
                        </div>
                        <div class="col-5">
                            <input name="date" type="date" class="form-control" require>
                        </div>
                    </div>
                    <!-- row 3 -->
                    <div class="row mt-3">
                        <div class="col-4"></div>
                        <div class="col-4">
                            <div class="col-3">
                                <input type="submit" name="book" value="Book Now" class="btn btn-lg btn-danger">
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
<!-- id, train number, seats, to, from, stay at -->