<?php require_once('header.php') ?>
    <style>
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
        <form action="controller/login.php" method="POST">
            <img class="mb-4" src="https://img.freepik.com/free-vector/girl-wearing-beret-anime-character-poster_603843-2524.jpg?w=826&t=st=1665418644~exp=1665419244~hmac=5a7b995646eeb6bcb5e1bf6b9a93c02604c7943675f73e7b852903c26ec17b13" alt="" width="140">
            <h1 class="h3 mb-3 fw-normal">Jelenkezz be tess!!!</h1>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="Neve@valami.hu" name="email" id="name">
                <label for="floatingInput">Iméjl Cím</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" id="password">
                <label for="floatingPassword">Jelzsó more</label>
            </div>
            <button class="w-100 btn btn-lg btn-dark" type="submit" name="submit" id="submit">Jeletkezzé</button>
            <p class="mt-5 mb-3 text-muted">&copy; 1969–2420</p>
        </form>
    </div>
<?php require_once('footer.php') ?>
