<?php
    // This function Show all the cities
    function showAllCities($conneciton, $tag, $class="")
    {
        $query = "SELECT * FROM cities";
        $cities = mysqli_query($conneciton, $query);

        while ($city = mysqli_fetch_assoc($cities))
        {
            echo "<$tag class='$class' value='$city[id]'>$city[name]</$tag>";
        }
    }
?>