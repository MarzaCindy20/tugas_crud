<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Login</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family:'poppins',sans-serif;
        }
        
        section{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height:100vh;
            width: 100%;
            background: url('anime 2.jpg');
            background-position: center;
            background-size: cover;
        }
        
        .form-box{
            position: relative;
            width: 400px;
            height: 450px;
            background: transparent;
            border: 2px solid rgba(255, 255, 255, 0.5);
            border-radius: 20px;
            backdrop-filter: blur(15px);
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        h2{
            font-size: 2em;
            color: black;
            text-align: center;
        }
        
        .inputbox{
            position: relative;
            margin: 30px 0;
            width: 310px;
            border-bottom: 2px solid black;
        }
        
        .inputbox label{
            position: absolute;
            top: 50%;
            left: 5px;
            transform: translateY(-50%);
            color: red;
            font-size: 1em;
            pointer-events: none;
            transition: -5s;
        }
        
        
        .inputbox input{
            width: 100%;
            height: 50px;
            background: transparent;
            border: none;
            outline: none;
            font-size: 1em;
            padding: 0 35px 0 5px;
            color: black;   
        }
        
        .inputbox ion-icon{
        position: absolute;
        right: 8px;
        color: grey;
        font-size: 1.2em;
        top: 20px;
        }
        
        .forget{
        margin: -15px 0 15px;
        font-size: .9em;
        color: black;
        display: flex;
        justify-content: center;
        }
        
        .forget label input{
        margin-right: 3px;
        }
        
        .inputbox label a{
        text-decoration: none;
        }
        
        .forget label a:hover{
        text-decoration: underline;
        }
        
        .buttons{
        text-align: center;
        padding: 10px 15px;
        border-radius: 40px;
        background: black;
        border: none;
        margin: 0 auto;
        outline: none;
        cursor: pointer;
        font-size: 1em;
        font-weight: 600;
        color: white;
        }
        
        .daftar{
        font-size: .9em;
        color: blue;
        text-align: center;
        margin: 25px 0 10px;
        }
        
        .daftar p a{
        text-decoration: none;
        color: black;
        font-weight: 600;
        }
        
        .daftar p a:hover{
        text-decoration: underline;
        }
        .btn-login{
            text-align:center;
        }
    </style>

</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="loginproses.php" method="post">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        <input type="teks" name="username" placeholder="Username" required>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="forget">
                        <label for=""><input type="checkbox">Ingatkan saya</label>
                        <a href="#">Ingatkan saya</a>
                    </div>
                    <div class="btn-login">
                        <input class="buttons btn-login" type="submit" value="login"></input>
                    </div>
                    <div class="daftar">
                        <p>Tidak memiliki akun<a href="#">Daftar</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>