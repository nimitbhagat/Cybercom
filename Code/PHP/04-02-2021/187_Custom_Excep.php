<?php


class DatabaseException extends Exception
{
}

class ServerException extends Exception
{
}

try {

    if (!@$con = mysqli_connect('localhost', 'root', '',)) {
        throw new ServerException("Coluld Not Connect To Server");
    } else if (!@mysqli_select_db($con, 'cybercom')) {
        throw new DatabaseException("Coluld Not Connect To Database");
    } else {
        echo ("Connected");
    }
} catch (ServerException $ex) {
    echo "Error : " . $ex->getMessage();
} catch (DatabaseException $ex) {
    echo "Error : " . $ex->getMessage();
}
