<?php require_once('header.php') ?>

    <style>
        html,
        body {
            height: 100%;
        }

        body {
            background: #141E30;
        }

        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
            color: #212121;
            border: 4px solid #ff993b;
            border-radius: 25px;
        }

        .form-signin .checkbox {
            font-weight: 400;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>

</head>

<body class="text-center">
    <div class="form-signin bg-light">
        <form action="controller/register.php" method="POST">
            <img class="mb-4" src="https://www.dropbox.com/s/zgbbayj1iqd9fjf/CF_Mark.jpg?raw=1" alt="" width="72">
            <h1 class="h3 mb-3 fw-normal">Kérem regisztráljon</h1>

            <div class="form-floating">
                <input type="email" class="form-control"  placeholder="name@example.com" name="email" id="email">
                <label for="floatingInput">Email Cím</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                <label for="floatingPassword">Jelszó</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control"  placeholder="Password Repeat" id="repeat_password" name="repeat_password" >
                <label for="floatingPassword">Jelszó Újra</label>
            </div>

            
            <button class="w-100 btn btn-lg btn-dark" type="submit" name="submit" id="submit">Registration</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
        </form>
    </div>


<?php require_once 'footer.php';?>