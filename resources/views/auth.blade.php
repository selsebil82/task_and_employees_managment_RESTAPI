 

<!DOCTYPE html>
<!-- === Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="style.css">
         
    <!--<title>Login & Registration Form</title>-->
</head>
<body>
    
<div class="container">
    <div class="forms">
        <div class="form login">
            <span class="title">Login</span>
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('authenticate') }}">
                @csrf

                <div class="input-field">
                    <input type="text" placeholder="Enter your email" name="email" required>
                    <i class="uil uil-envelope icon"></i>
                </div>
                
                <div class="input-field">
                    <input type="password" class="password" placeholder="Enter your password" name="password" required>
                    <i class="uil uil-lock icon"></i>
                    <i class="uil uil-eye-slash showHidePw"></i>
                </div>

                <div class="checkbox-text">
                   
                </div>

                <div class="input-field button">
                    <input type="submit" value="Login">
                </div>
            </form>




                <div class="login-signup">
                    <span class="text">Not a member?
                        <a href="#" class="text signup-link">Signup Now</a>
                    </span>
                </div>
            </div>

            <!-- Registration Form -->
            <div class="form signup">
    <span class="title">Registration</span>

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="input-field">
            <input type="text" name="name" placeholder="Enter your name" required>
            <i class="uil uil-user"></i>
        </div>
        <div class="input-field">
            <input type="email" name="email" placeholder="Enter your email" required>
            <i class="uil uil-envelope icon"></i>
        </div>
        <div class="input-field">
            <input type="password" name="password" class="password" placeholder="Create a password" required>
            <i class="uil uil-lock icon"></i>
        </div>
        <div class="input-field">
            <input type="password" name="password_confirmation" class="password" placeholder="Confirm your password" required>
            <i class="uil uil-lock icon"></i>
            <i class="uil uil-eye-slash showHidePw"></i>
        </div>

        <div class="checkbox-text">
            <div class="checkbox-content">
                <input type="checkbox" id="termCon" name="terms" required>
                <label for="termCon" class="text">I accept all terms and conditions</label>
            </div>
        </div>

        <div class="input-field button">
        <input type="button" value="Signup">
        </div>
    </form>

    <div class="login-signup">
        <span class="text">Already a member? <a href="{{ route('login') }}" class="text login-link">Login Now</a></span>
    </div>
</div>



    <!--<script src="script.js"></script>-->
</body>
<style>
    /* ===== Google Font Import - Poformsins ===== */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body{
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #11101D
;
}

.container{
    position: relative;
    max-width: 430px;
    width: 100%;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    margin: 0 20px;
}

.container .forms{
    display: flex;
    align-items: center;
    height: 440px;
    width: 200%;
    transition: height 0.2s ease;
}


.container .form{
    width: 50%;
    padding: 30px;
    background-color: #fff;
    transition: margin-left 0.18s ease;
}

.container.active .login{
    margin-left: -50%;
    opacity: 0;
    transition: margin-left 0.18s ease, opacity 0.15s ease;
}

.container .signup{
    opacity: 0;
    transition: opacity 0.09s ease;
}
.container.active .signup{
    opacity: 1;
    transition: opacity 0.2s ease;
}

.container.active .forms{
    height: 600px;
}
.container .form .title{
    position: relative;
    font-size: 27px;
    font-weight: 600;
}

.form .title::before{
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    height: 3px;
    width: 30px;
    background-color:    #11101D
;
    border-radius: 25px;
}

.form .input-field{
    position: relative;
    height: 50px;
    width: 100%;
    margin-top: 30px;
}

.input-field input{
    position: absolute;
    height: 100%;
    width: 100%;
    padding: 0 35px;
    border: none;
    outline: none;
    font-size: 16px;
    border-bottom: 2px solid #ccc;
    border-top: 2px solid transparent;
    transition: all 0.2s ease;
}

.input-field input:is(:focus, :valid){
    border-bottom-color:    #11101D
;
}

.input-field i{
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    color: #999;
    font-size: 23px;
    transition: all 0.2s ease;
}

.input-field input:is(:focus, :valid) ~ i{
    color:    #11101D
;
}

.input-field i.icon{
    left: 0;
}
.input-field i.showHidePw{
    right: 0;
    cursor: pointer;
    padding: 10px;
}

.form .checkbox-text{
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 20px;
}

.checkbox-text .checkbox-content{
    display: flex;
    align-items: center;
}

.checkbox-content input{
    margin-right: 10px;
    accent-color:    #11101D
;
}

.form .text{
    color: #333;
    font-size: 14px;
}

.form a.text{
    color:    #11101D
;
    text-decoration: none;
}
.form a:hover{
    text-decoration: underline;
}

.form .button{
    margin-top: 35px;
}

.form .button input{
    border: none;
    color: #fff;
    font-size: 17px;
    font-weight: 500;
    letter-spacing: 1px;
    border-radius: 6px;
    background-color:    #11101D
;
    cursor: pointer;
    transition: all 0.3s ease;
}

.button input:hover{
    background-color: #001155;
}

.form .login-signup{
    margin-top: 30px;
    text-align: center;
}

    </style>
    <script>
        const container = document.querySelector(".container"),
      pwShowHide = document.querySelectorAll(".showHidePw"),
      pwFields = document.querySelectorAll(".password"),
      signUp = document.querySelector(".signup-link"),
      login = document.querySelector(".login-link");

    //   js code to show/hide password and change icon
    pwShowHide.forEach(eyeIcon =>{
        eyeIcon.addEventListener("click", ()=>{
            pwFields.forEach(pwField =>{
                if(pwField.type ==="password"){
                    pwField.type = "text";

                    pwShowHide.forEach(icon =>{
                        icon.classList.replace("uil-eye-slash", "uil-eye");
                    })
                }else{
                    pwField.type = "password";

                    pwShowHide.forEach(icon =>{
                        icon.classList.replace("uil-eye", "uil-eye-slash");
                    })
                }
            }) 
        })
    })

    // js code to appear signup and login form
    signUp.addEventListener("click", ( )=>{
        container.classList.add("active");
    });
    login.addEventListener("click", ( )=>{
        container.classList.remove("active");
    });

        </script>
</html>

