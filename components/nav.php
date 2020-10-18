<?php
    include '../php/connect.php';

    session_start();
    if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['type']) ){
        $username = $conn->real_escape_string($_POST['username']);
        $password = $conn->real_escape_string($_POST['password']);
        $password = md5($password);
        $showModal = null;

        //handle login here
        if($_POST['type'] == 'login'){
            $query = 'SELECT * from Account '
           ."WHERE username='$username' "
           ." AND password='$password'";

           $result = $conn->query($query);
           if ($result->num_rows >0 ) //if login is successfull
            {
                $row = $result->fetch_assoc();
                $accountId = $row['accountId'];   
                
                $_SESSION['username'] = $username;    
                $_SESSION['accountId'] = $accountId;

                $query = 'SELECT * from CustomerDetails '
                ."WHERE accountId='$accountId'";
                $result = $conn->query($query);
                $row = $result->fetch_assoc();
                $custId = $row['custId']; 
                
                $_SESSION['custId'] = $custId;
            }
            else{ //if login is failed
                $errorMessage = 'Invalid username or password';
                $showModal = 'login-modal';
                $prev_username = $username;
                $prev_password = $_POST['password'];
            }

        }
        //handle signup here
        else if($_POST['type'] == 'signup'){
            //validate first
            $isValidated = true;
            if ($_POST['password'] !== $_POST['confirmPassword'] ){
                $errorMessage = 'Password is not matched';
                $showModal = 'signup-modal';
                $isValidated = false;
            }
            if(!isset($_POST['fullName']) || !isset($_POST['email']) || !isset($_POST['email']) || !isset($_POST['dateOfBirth']) || !isset($_POST['confirmPassword'])){
                $errorMessage = 'Please fill all the field';
                $showModal = 'signup-modal';
                $isValidated = false;
            } 

            if(!$isValidated){
                $prev_fullName = $_POST['fullName'];
                $prev_username = $username;
                $prev_password = $_POST['password'];
                $prev_email = $_POST['email'];
                $prev_dateOfBirth= $_POST['dateOfBirth'];
                $prev_confirmPassword = $_POST['confirmPassword'];
            }

            //signup account to database
            if($isValidated){
                $email = $_POST['email'];
                $fullName = $_POST['fullName'];
                $dateOfBirth = $_POST['dateOfBirth'];

                $query = "INSERT INTO Account (username, password) 
                        VALUES ('$username', '$password')";
                $result = $conn->query($query);

                $query2 = "SELECT * from Account where username = '$username'";
                $result = $conn->query($query2);
                $row = $result->fetch_assoc();
                $accountId = $row['accountId'];

                $query3 = "INSERT INTO CustomerDetails(accountId, fullName, email, phoneNumber, dateOfBirth)
                VALUES ( $accountId, '$fullName', '$email', 'test' , '$dateOfBirth' )";
                $result = $conn->query($query3);

                //register a session here
                $_SESSION['username'] = $username;    
                $_SESSION['accountId'] = $accountId;    

                $query = 'SELECT * from CustomerDetails '
                ."WHERE accountId='$accountId'";
                $result = $conn->query($query);
                $row = $result->fetch_assoc();
                $custId = $row['custId']; 
                
                $_SESSION['custId'] = $custId;
            }
            
        }
    }

    $conn->close();
?>

<nav>
    <div class="nav-content">
        <div class="logo">
            <a href="../pages/index.php">
                <img src="../images/logo-white.png"/>
            </a>
        </div>
        <ul>
            <li><a href="../pages/category.php?productCategory=laptop">Laptop</a><li>
            <li><a href="../pages/category.php?productCategory=phone">Phone</a><li>
            <li><a href="../pages/category.php?productCategory=tablet">Tablet</a><li>
            <li><a href="../pages/category.php?productCategory=accessories">Accessories</a><li>
        </ul>
        <div class="right-content">
            <div class="wishlist">
                <a href="../pages/wishlist.php">
                    <img src="../images/wishlist.png" alt="wishlist"/>
                    <div>Wishlist</div>
                </a>
            </div>
            <div class="cart">
                <a href="../pages/shoppingCart.php">
                    <img src="../images/cart.png" alt="cart"/>
                    <div>Cart</div>
                </a>
            </div>
            <div class="account">
                <a href="#" class="account-btn">
                    <img src="../images/account.png" alt="account"/>
                    <div>
                        <?php 
                            if (isset($_SESSION['username']))
                                echo $_SESSION['username'];
                            else
                                echo 'Account'
                        ?>
                    </div>
                </a>
                <div class="account-dropdown" style="height: 0; padding: 0;">
                    <ul>
                        <?php 
                            if (!isset($_SESSION['username'])){
                                echo '
                                <li class="modal-open-btn" data-target="login-modal">Login <hr/></li>
                                <li class="modal-open-btn" data-target="signup-modal">Signup</li>
                                ';
                            }
                            else {
                                echo '
                                    <li style="margin-top:12px; cursor: pointer;"> <a href="../php/logout.php" style="color:black;">logout</a></li>
                                ';
                            }
                        ?>
                    <ul>
                </div>
            </div>
        </div>
    </div>

    <!-- login Modal -->
    <div id="login-modal" class="login-modal modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="modal-body">
                <h1>Login</h1>
                <form method="POST">
                    <div class="input-group">
                        <input 
                            type="text" 
                            name="username"
                            placeholder="Username"
                            required
                            value="<?php echo $_POST['type'] == 'login' ? $prev_username : '' ?>"
                        />
                    </div>
                    <div class="input-group">
                        <input 
                            type="password" 
                            name="password"
                            placeholder="Password"
                            required
                            value="<?php echo $_POST['type'] == 'login' ? $prev_password : '' ?>"
                        />
                    </div>
                    <input type="hidden" name="type" value="login"/>
                    <div class="error-message"><?php echo $_POST['type'] == 'login' ? $errorMessage : '' ?></div>
                    <button>Sign In</button>
                </form>
                <small>Don't have an account? Register <span
                    onclick="triggerModalById('signup-modal')"
                >here</span></small>
            </div>
        </div>
    </div>


    <!-- login Modal -->
    <div id="signup-modal" class="signup-modal modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="modal-body">
                <h1>Sign Up</h1>
                <form method="POST">
                    <div class="input-group">
                        <input 
                            type="text" 
                            name="fullName"
                            placeholder="Full Name"
                            required
                            value="<?php echo $_POST['type'] == 'signup' ? $prev_fullName : '' ?>"
                        />
                    </div>
                    <div class="input-group">
                        <input 
                            type="email" 
                            name="email"
                            placeholder="Email"
                            required
                            value="<?php echo $_POST['type'] == 'signup' ?  $prev_email : '' ?>"
                        />
                    </div>
                    <div class="input-group">
                        <input 
                            type="text" 
                            name="username"
                            placeholder="Username"
                            required
                            value="<?php echo $_POST['type'] == 'signup' ?  $prev_username : '' ?>"
                        />
                    </div>
                    <div class="input-group">
                        <input 
                            type="date" 
                            name="dateOfBirth"
                            placeholder="Date of Birth"
                            required
                            value="<?php echo $_POST['type'] == 'signup' ? $prev_dateOfBirth : '' ?>"
                        />
                    </div>
                    <div class="input-group">
                        <input 
                            type="password" 
                            name="password"
                            placeholder="Password"
                            required
                            value="<?php echo $_POST['type'] == 'signup' ? $prev_password : '' ?>"
                        />
                    </div>
                    <div class="input-group">
                        <input 
                            type="password" 
                            name="confirmPassword"
                            placeholder="Confirm Password"
                            required
                            value="<?php echo $_POST['type'] == 'signup' ? $prev_confirmPassword : '' ?>"
                        />
                    </div>
                    <input type="hidden" name="type" value="signup"/>
                    <div class="error-message"><?php echo $_POST['type'] == 'signup' ? $errorMessage : '' ?></div>
                    <button>Sign Up</button>
                </form>
                <small>Already have an account? <span onclick="triggerModalById('login-modal')">Sign In here</span></small>
            </div>
        </div>
    </div>
    
    <script src="../js/modal.js"></script>
    <script src="../js/nav.js"></script>
    <?php 
        if($showModal == 'login-modal')
            echo '<script> triggerModalById("login-modal") </script>';
        else if($showModal == 'signup-modal')
            echo '<script> triggerModalById("signup-modal") </script>';
    ?>
</nav>