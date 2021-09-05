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

            if ($result)
            {
                $_SESSION["ticketNumber"] = $ticketNumber;
                header("Location: ?page=ticket");
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

    // Show alert / message.
    function showAlert($type, $message)
    {
        echo "
        <div class='alert alert-${type} alert-dismissible fade show' role='alert'>
            $message
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
    }

    // Search by ticket Number
    function search($connection, $ticketNumber)
    {
        $query = "SELECT * FROM tickets";
        $tickets = mysqli_query($connection, $query);
        if ($tickets)
        {
            while($ticket = mysqli_fetch_assoc($tickets))
            {
                if ($ticket['ticketNumber'] == $ticketNumber)
                {
                    $_SESSION['name'] = $ticket['name'];
                    $_SESSION['source'] = $ticket['from_destination'];
                    $_SESSION['destination'] = $ticket['to_destination'];
                    $_SESSION['ticketNumber'] = $ticket['ticketNumber'];
                    $_SESSION['trainNumber'] = $ticket['trainNumber'];
                    $_SESSION['date'] = $ticket['date'];
                    $_SESSION['time'] = $ticket['time'];
                    
                    header("Location: ?page=ticket");
                }
                
            }
        }
    }
?>