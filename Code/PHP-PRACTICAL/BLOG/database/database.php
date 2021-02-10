<?php
define('host', "localhost");
define('user', "root");
define('password', "");
define('database', "CybercomCreation");

class DatabaseConnection
{
    public $connection = "";
    public function __construct()
    {
        if (!@$this->connection = mysqli_connect(constant('host'), constant('user'), constant('password'), constant('database'))) {
            die("OK");
        }
    }

    public function login($email, $password)
    {
        $password = md5($password);
        $query = "select * from tbluser where email='$email' and password='$password'";

        if ($result = mysqli_query($this->connection, $query)) {
            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_assoc($result);
                $query = "update tbluser set last_login='" . date('Y-m-d H:i:s') . "' where id=" . $row['id'];

                if (mysqli_query($this->connection, $query)) {
                    return $row;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }
    }


    function register($prefix, $fname, $lname, $email, $phone, $password, $information)
    {
        $query = "insert into tbluser (prefix,fname,lname,email,mobile,password,information) values('$prefix','$fname','$lname','$email','$phone',md5($password),'$information')";

        if (mysqli_query($this->connection, $query)) {
            return array(true, "Registered");
        } else {
            if (mysqli_errno($this->connection) == 1062) {
                return array(false, "Email Aready Registered");
            } else {
                return array(false, "Registration Fail");
            }
        }
    }

    function categoryId()
    {
        $query = "select DISTINCT id, title from tblcategory";
        $result = mysqli_query($this->connection, $query);

        if (!mysqli_error($this->connection)) {
            if (mysqli_num_rows($result)) {
                return $result;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    function insertCategory($uid, $id, $title, $mtitle, $url, $content)
    {
        $query = "insert into tblcategory (parent_c_id,title,meta_title,url,content)values('$id','$title','$mtitle','$url','$content')";
        $result = mysqli_query($this->connection, $query);


        if (!mysqli_error($this->connection)) {
            return $result;
        } else {
            return false;
        }
    }

    function selectCategory()
    {
        $query = "select * from tblCategory";

        $result = mysqli_query($this->connection, $query);

        if (!mysqli_error($this->connection)) {
            return $result;
        } else {
            return false;
        }
    }

    function deleteCategory($id)
    {
        $query = "delete from tblCategory where id=$id";

        $result = mysqli_query($this->connection, $query);

        if (!mysqli_error($this->connection)) {
            return true;
        } else {
            return false;
        }
    }
}
