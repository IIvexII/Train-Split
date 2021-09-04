<?php
    // This function Show all the cities
    function showAllCities($conneciton, $tag, $class="")
    {
        $query = "SELECT * FROM cities";
        $cities = mysqli_query($conneciton, $query);

        while ($city = mysqli_fetch_assoc($cities))
        {
            echo "<$tag class='$class' value='$city[name]'>$city[name]</$tag>";
        }
    }

    function bookSeat($connection,$trainNumber, $name, $age, $date, $time, $from, $to)
    {
        if (isValidRoute($from, $to))
        {
            $ticketNumber = generateTicket($connection);

            $query  = "INSERT INTO tickets";
            $query .= "(ticketNumber, trainNumber ,name, age, date, time, from_destination, to_destination)";
            $query .= "VALUES('$ticketNumber', '$trainNumber', '$name', $age, '$date', '$time', '$from', '$to')";

            $result = mysqli_query($connection, $query);
            if (!$result)
            {
                echo mysqli_error($connection);
            }
        }
    }

    // generate a unique ticket number
    function generateTicket($connection)
    {
        $ticketNo = rand(100,999)."-".rand(1000, 9999);
        $query = "SELECT * FROM tickets";
        $tickets = mysqli_query($connection, $query);

        while ($ticket = mysqli_fetch_assoc($tickets))
        {
            if ($ticketNo == $ticket['ticketNumber'])
            {
                generateTicket($connection);
                return;
            }
        }
        return $ticketNo;

    }

    // Validate Route
    function isValidRoute($from, $to)
    {
        if ($from == $to)
        {
            return false;
        }
        return true;
    }
?>