<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="shortcut icon" href="<?= base_url() ?>assets/PINK LOGO-01.png">
    <script src="https://use.fontawesome.com/e2812b9932.js"></script>
</head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Abel|Abril+Fatface|Alegreya|Arima+Madurai|Dancing+Script|Dosis|Merriweather|Oleo+Script|Overlock|PT+Serif|Pacifico|Playball|Playfair+Display|Share|Unica+One|Vibur');

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body {
        background-image: linear-gradient(-455deg, #f852ae 0%, #008B8B 100%);
        background-attachment: fixed;
        background-repeat: no-repeat;
        opacity: .95;

    }

    .img {
        width: 150px;
        height: 145px;
        padding: 1px;
        margin: 1%;
        box-shadow: 5px 5px 5px rgba(0.1, 0.3, 0.6, 0.9);
        border-radius: 20%;
        perspective: 10000px;
        background-image: linear-gradient(-225deg, #008B8B 10%, #f852ae 100%);
        /* Properti CSS lainnya */
    }

    form {
        width: 400px;
        min-height: 520px;
        height: auto;
        border-radius: 20px;
        margin: 2% auto;
        box-shadow: 40px 40px 40px rgba(0.1, 0.3, 0.6, 0.9);
        padding: 10px;
        animation: neon;
        background-image: linear-gradient(-255deg, #00008B 0%, #008B8B 100%);
    }


    /* form Container */
    form .con {
        display: -webkit-flex;
        display: flex;
        -webkit-justify-content: space-around;
        justify-content: space-around;
        -webkit-flex-wrap: wrap;
        flex-wrap: wrap;

    }

    header {
        margin: 5% auto 10px auto;
        text-align: center;
        padding: 10px;
    }

    header h2 {
        font-size: 170%;
        color: #fff;
        font-family: "Arial Black";
        padding: 10px;
    }


    .input-item {
        background: #f852ae;
        color: #fff;
        padding: 17px 0px 15px 15px;
        border-radius: 20px 0px 0px 20px;
    }

    #eye {
        color: #000;
        margin: 1.0px 0 0 0;
        margin-left: -20px;
        padding: 15px 9px 19px 0px;
        border-radius: 0px 20px 20px 0px;
        float: right;
        position: relative;
        right: 2%;
        top: -.2%;
        z-index: 5;
        cursor: pointer;
    }

    /* inputs form  */
    input[class="form-input"] {
        width: 250px;
        height: 50px;

        margin: 0% auto 10px auto;
        padding: 10px;

        font-size: 16px;
        font-family: 'Abel', sans-serif;
        color: #000;

        outline: none;
        border: none;

        border-radius: 0px 20px 20px 0px;
        transition: 0.15s linear;
        box-shadow: 10px 10px 10px rgba(0.1, 0.3, 0.6, 0.4);
    }

    input[id="txt-input"] {
        width: 250px;
    }

    /* focus  */
    input:focus {
        transform: translateX(-2px);
        border-radius: 5px;
    }

    button {
        display: inline-block;
        color: #fff;

        width: 280px;
        height: 50px;

        padding: 0 10px;
        background: #f852ae;
        border-radius: 10px;

        outline: none;
        border: none;

        cursor: pointer;
        text-align: center;
        transition: all 0.1s linear;

        margin: 10% auto;
        letter-spacing: 0.10rem;

        padding: 14.5px 0px 15px 9px;
        border-radius: 20px 20px 20px 20px;

        box-shadow: 10px 10px 10px rgba(0.1, 0.3, 0.6, 0.);
    }

    @keyframes neon {
        0% {
            text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #fff, 0 0 20px #ff00de, 0 0 35px #ff00de, 0 0 40px #ff00de, 0 0 50px #ff00de;
        }

        50% {
            text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #fff, 0 0 20px #ff00de, 0 0 35px #ff00de, 0 0 40px #ff00de, 0 0 60px #ff00de;
        }

        100% {
            text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #fff, 0 0 20px #ff00de, 0 0 35px #ff00de, 0 0 40px #ff00de, 0 0 50px #ff00de;
        }
    }

    /* Submits */
    .submits {
        width: 100%;
        display: inline-block;
        float: left;
        margin-left: 2%;
    }

    .frgt-pass {
        background: transparent;
    }

    .sign-up {
        background: #B8F2E6;
    }

    button:hover {
        transform: translatey(3px);
        box-shadow: none;
    }

    button:hover {
        animation: ani9 0.4s ease-in-out infinite alternate;
        color: #000;
        background: #fff;
        text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #fff, 0 0 20px #ff0077, 0 0 35px #ff0077, 0 0 40px #ff0077, 0 0 50px #ff0077;
        animation-name: neon;
        animation-duration: 1.5s;
        animation-timing-function: linear;
        animation-iteration-count: infinite;
        box-shadow: 10px 10px 10px rgba(0.1, 0.3, 0.6, 0.9);
    }

    @keyframes ani9 {
        0% {
            transform: translateY(3px);
        }

        100% {
            transform: translateY(5px);
        }
    }

    */
</style>

<body>
    <div class="overlay">
        <form action="<?= base_url() ?>Login/login" method="POST">
            <div class="con">
                <header class="head-form">
                    <img src="assets/PINK LOGO-01 1.png" alt="Logo" class="img">
                    <h2>LOG IN MARKETING</h2>
                </header>
                <br>
                <div class="field-set">
                    <span class="input-item">
                        <i class="fa fa-user-circle"></i>
                    </span>
                    <input class="form-input" name="username" id="txt-input" type="text" placeholder="@UserName" required>
                    <br>
                    <span class="input-item">
                        <i class="fa fa-key"></i>
                    </span>
                    <input class="form-input" name="password" type="password" placeholder="Password" id="pwd" name="password" required>
                    <span>
                        <i class="fa fa-eye" aria-hidden="true" type="button" id="eye"></i>
                    </span>
                    <br>
                    <button> Log In </button>
                </div>
            </div>
        </form>
        <script>
            function show() {
                var p = document.getElementById('pwd');
                p.setAttribute('type', 'text');
            }

            function hide() {
                var p = document.getElementById('pwd');
                p.setAttribute('type', 'password');
            }

            var pwShown = 0;

            document.getElementById("eye").addEventListener("click", function() {
                if (pwShown == 0) {
                    pwShown = 1;
                    show();
                } else {
                    pwShown = 0;
                    hide();
                }
            }, false);
        </script>
</body>

</html>