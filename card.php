<?php require_once 'header.php' ?>
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            background: #41295a;

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
        <form action="controller/card_upload.php" method="POST" enctype="multipart/form-data">
            <img class="mb-4" src="https://www.dropbox.com/s/zgbbayj1iqd9fjf/CF_Mark.jpg?raw=1" alt="" width="72">
            <h1 class="h3 mb-3 fw-normal">Kártya Készités</h1>

            <div class="form-floating">
                <input type="text" class="form-control" placeholder="KartyaNeve" name="nev" id="nev">
                <label for="floatingInput">Neve</label>
            </div>
            <div class="form-floating">
            <input type="text" class="form-control" placeholder="Leiras" name="leiras" id="leiras">
                <label for="floatingInput">Leiras</label>
            </div>
            <div class="form-floating">
            Válassza Ki a Filet
            <input type="file" name="file" id="file">
        
            </div>
            <button class="w-100 btn btn-lg btn-dark" type="submit" name="submit" id="submit">Hozza adas</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
    </script>
</body>
<?php require_once 'footer.php' ?>