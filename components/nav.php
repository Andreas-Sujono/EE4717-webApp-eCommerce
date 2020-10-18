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
                <div class="account-btn">
                    <img src="../images/account.png" alt="account"/>
                    <div>Account</div>
                </div>
                <div class="account-dropdown" style="height: 0; padding: 0;">
                    <ul>
                        <li class="modal-open-btn" data-target="login-modal">Login <hr/></li>
                        <li class="modal-open-btn" data-target="signup-modal">Signup</li>
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
                <form>
                    <div class="input-group">
                        <input 
                            type="text" 
                            name="username"
                            placeholder="Username"
                        />
                    </div>
                    <div class="input-group">
                        <input 
                            type="password" 
                            name="password"
                            placeholder="Password"
                        />
                    </div>
                    <button>Sign In</button>
                </form>
                <!-- <small>Don't have an account? Register <span>here</span></small> -->
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
                <form>
                    <div class="input-group">
                        <input 
                            type="email" 
                            name="email"
                            placeholder="Email"
                        />
                    </div>
                    <div class="input-group">
                        <input 
                            type="text" 
                            name="username"
                            placeholder="Username"
                        />
                    </div>
                    <div class="input-group">
                        <input 
                            type="date" 
                            name="dateOfBirth"
                            placeholder="Date of Birth"
                        />
                    </div>
                    <div class="input-group">
                        <input 
                            type="password" 
                            name="password"
                            placeholder="Password"
                        />
                    </div>
                    <div class="input-group">
                        <input 
                            type="password" 
                            name="confirmPassword"
                            placeholder="Confirm Password"
                        />
                    </div>
                    <button>Sign Up</button>
                </form>
                <!-- <small>Already have an account? <span onclick="function x(){
                        const event = new Event('custom-click');
                        let loginModal = document.getElementById('login-modal')
                        loginModal.dispatchEvent(event);
                    }; 
                    x();
                ">Sign In here</span></small> -->
            </div>
        </div>
    </div>
    
    <script src="../js/modal.js"></script>
    <script src="../js/nav.js"></script>
</nav>