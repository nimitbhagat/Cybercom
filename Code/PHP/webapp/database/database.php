<?php

class DatabaseConnection
{
    var $host = "";
    var $username = "";
    var $password = "";
    var $database = "";
    var $con;
    function __construct()
    {
        $this->host = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->database = "cybercom";
    }

    function connect()
    {
        if (!@$this->con = mysqli_connect($this->host, $this->username, $this->password, $this->database)) {
            die("Internal Server Error!!");
        }
    }


    function deleteRecord($id)
    {
        if ($this->con != "") {
            $query = "delete from contacts where id=$id";
            mysqli_query($this->con, $query);
        } else {
            $this->connect();
            $this->deleteRecord($id);
        }
    }

    function __call($name, $arg)
    {

        if ($this->con != "") {
            $query = "";

            if ($name == "selectContacts") {
                switch (count($arg)) {
                    case 1: {
                            //echo ("No Args");
                            $query = "SELECT * FROM contacts where id='$arg[0]'";
                            $result = mysqli_query($this->con, $query);
                            return $result;
                            break;
                        }
                    case 2: {
                            //echo ("2 Args");
                            $query = "SELECT * FROM contacts ORDER BY id LIMIT $arg[0],$arg[1]";
                            $result = mysqli_query($this->con, $query);
                            return $result;
                            break;
                        }
                }
            } else if ($name == "countRecords") {
                //echo ("Recored Count");
                $query = "SELECT * FROM contacts";
                $result = mysqli_query($this->con, $query);
                $count = mysqli_num_rows($result);
                return $count;
            }
        } else {

            //echo ("Connection");
            $this->connect();
            if ($name == "selectContacts") {
                if (count($arg) == 2) {
                    return $this->selectContacts($arg[0], $arg[1]);
                } else {
                    return $this->selectContacts();
                }
            } else if ($name == "countRecords") {
                return $this->countRecords();
            }
        }
    }

    function insertContacts($data)
    {
        if ($this->con != "") {
            $query = "insert into contacts(name,email,phone,title,created) values ('" . $data['name'] . "','" . $data['email'] . "','" . $data['phone'] . "','" . $data['title'] . "','" . $data['created'] . "')";

            if (!@mysqli_query($this->con, $query)) {
                echo "Insert Error!!";
            } else {
                echo "Contact Created";
                sleep(2);
                header('location:contacts.php');
            }
        } else {
            $this->connect();
            $this->insertContacts($data);
        }
    }

    function updateContacts($data)
    {
        if ($this->con != "") {
            $query = "update contacts set(name,email,phone,title,created) values ('" . $data['name'] . "','" . $data['email'] . "','" . $data['phone'] . "','" . $data['title'] . "','" . $data['created'] . "')";

            if (!@mysqli_query($this->con, $query)) {
                echo "Insert Error!!";
            } else {
                echo "Contact Created";
                sleep(2);
                header('location:contacts.php');
            }
        } else {
            $this->connect();
            $this->insertContacts($data);
        }
    }
}
