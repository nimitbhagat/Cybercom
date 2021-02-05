<?php


class DatabaseException extends Exception
{
    public function showSpecific()
    {
        return "Error On Line " . $this->getLine() . " in " . $this->getFile();
    }
}

class ServerException extends Exception
{
}

try {

    if (!@$con = mysqli_connect('localhost', 'root', '',)) {
        throw new ServerException("Coluld Not Connect To Server");
    } else if (!@mysqli_select_db($con, 'cybercom')) {
        throw new DatabaseException("Coluld Not Connect To Data base");
    } else {
        echo ("Connected");
    }
} catch (ServerException $ex) {
    echo $ex->getMessage();
} catch (DatabaseException $ex) {
    echo $ex->showSpecific();
}
