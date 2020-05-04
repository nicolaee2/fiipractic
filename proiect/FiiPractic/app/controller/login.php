<?php 

        $emailErr = $passwordErr =  "";
        $email = $password  = "";


        require '../app/controller/session.php';
        require '../app/controller/security.php';

        if(!empty($_SESSION['email']))
        {
            header("Location: home");
        }


        $name = 'token-' . mt_rand();
        $token = bin2hex(random_bytes(32));
        $_SESSION[$name] = $token;


        if (isset($_POST['submit'])) 
        {
            if  (  isset($_POST['_csrfname']) 
                && isset($_POST['_csrfvalue']) 
                && isset($_SESSION[$_POST['_csrfname']]) 
                && $_SESSION[$_POST['_csrfname']] === $_POST['_csrfvalue'] 
                && $_POST['_csrfvalue'] !== '' 
                ) 
            {
                    
                    $email = $_POST["email"];
                    $password = $_POST["password"];

                    if(empty($email))
                        $emailErr = "Introduceti Email";
                    if(empty($password))
                        $passwordErr = "Introduceti Parola";


                    if(    empty($emailErr) 
                        && empty($passwordErr) 
                      )

                    {

                        
                        
                        

                        require '../app/controller/connect.php';

                        $email = $_POST['email'];
                        $password = $_POST["password"];

                        $sql = "SELECT * FROM users WHERE email=?";

                        $stmt = mysqli_stmt_init($conn);

                        if(!mysqli_stmt_prepare($stmt,$sql))
                        {
                            $emailErr = "Reintroduceti datele";
                        }
                        else
                        {

                            mysqli_stmt_bind_param($stmt, "s" , $email);
                            mysqli_stmt_execute($stmt);
                            $results = mysqli_stmt_get_result($stmt);
                            if($row = mysqli_fetch_assoc($results))
                            {
                                //echo $password;
                                $passwordCheck = password_verify($password, $row['password']);

                                if($passwordCheck == false)
                                {
                                    $emailErr = "Email sau parola nu exista";
                                }
                                else if($passwordCheck == true)
                                {
                                    //echo 1;
                                    $_SESSION['email'] = $row['email'];
                                    $_SESSION['first'] = $row['firstName'];
                                    $_SESSION['last'] = $row['lastName'];
                                    $_SESSION['judet'] = $row['judet'];
                                    $_SESSION['admin'] = $row['admin'];
                                    $_SESSION["id"] = $row["id"];
                                    header("Location: home");

                                }
                                else
                                {
                                    $emailErr = "Email sau parola nu exista";
                                }
                            }
                            else
                            {
                                $emailErr = "Email sau parola nu exista";

                            }   
                        }
                    }
            } 
            else 
            {
                header("Location: home");
            }
        }		

?>