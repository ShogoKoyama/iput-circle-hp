<!-- ログインページ -->
<!DOCTYPE html>
<html lang="ja">

<head>
    <title>ログイン | IPUT学生団体</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/style-login.css" rel="stylesheet" type="text/css" />
    <!-- CSS Bootstrap v5.0.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CSS Bootstrap Icons v1.8.0 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <!-- Google Fonts Icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
</head>

<body>
    <!-- ヘッダー -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #99CD00;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">IPUT学生団体</a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#top-nav"
                    aria-controls="top-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="top-nav">
                    <ul class="navbar-nav">
                        <li class="nav-item ms-2 me-2">
                            <a class="nav-link active" aria-current="page" href="#">活動</a>
                        </li>
                        <li class="nav-item ms-2 me-2">
                            <a class="nav-link active" aria-current="page" href="#">ブログ</a>
                        </li>
                        <li class="nav-item ms-2 me-2">
                            <a class="nav-link active" aria-current="page" href="#">サークル</a>
                        </li>
                        <li class="nav-item ms-2 me-2">
                            <a class="nav-link active" aria-current="page" href="#">FAQ</a>
                        </li>
                        <li class="nav-item ms-2 me-2">
                            <a class="nav-link active" aria-current="page" href="#">お問い合わせ</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="nav-item ms-2 me-2 d-flex justify-content-end">
                            <button type="button" class="btn btn-light" style="border-radius: 20px">ログイン</button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="contents">
        <div class="bg-blur"></div>
        <!-- ログインフォーム -->
        <div class="container w-100 h-100 d-flex align-items-center justify-content-center p-5" id="form-login">
            <form class="row row-cols-1 g-3 p-4 pb-5 max-width-md">
                <div class="container col col-md-8">
                    <label class="form-label" for="email-input">メールアドレス</label>
                    <input type="email" class="form-control" id="email-input" value="" placeholder="メールアドレスを入力してください"
                        aria-label="メールアドレス" aria-describedby="email-help" required>
                    <div class="form-text" id="email-help">大学のメールアドレス</div>
                    <div class="invalid-feedback">正しいメールアドレスを入力してください</div>
                </div>
                <div class="container col col-md-8">
                    <label class="form-label" for="password-input">パスワード</label>
                    <input type="password" class="form-control" id="password-input" value=""
                        placeholder="パスワードを入力してください" aria-label="パスワード" aria-describedby="password-help" required>
                    <div class="form-text" id="password-help"></div>
                    <div class="invalid-feedback">正しいパスワードを入力してください</div>
                </div>
                <div class="container col col-md-8 d-flex justify-content-center">
                    <div class="form-check">
                        <input class="form-check-input" id="keep-input" type="checkbox" value="" aria-label="ログイン状態の維持"
                            aria-describedby="keep-help">
                        <label class="form-check-label" for="keep-input">ログイン状態を維持しますか？</label>
                        <div class="form-text" id="keep-help">共有のパソコンではチェックを外す</div>
                    </div>
                </div>
                <div class="container col col-md-8 d-flex justify-content-center">
                    <button class="btn btn-success" type="submit">ログイン</button>
                </div>
            </form>
        </div>

    </main>

    <!-- フッター -->
    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 footer-links">
                        <div class="row">
                            <div class="col">
                                <h6>リンク</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="mb-1"><a href="#">活動一覧</a></p>
                                <p class="mb-1"><a href="#">ニュース一覧</a></p>
                                <p class="mb-1"><a href="#">FAQ</a></p>
                                <p class="mb-1"><a href="#">お問い合わせ</a></p>
                            </div>
                            <div class="col-md-6">
                                <p><a href="#">このサイトについて</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 offset-md-1">
                        <h6>外部リンク</h6>
                        <p><a href="#">東京国際工科専門職大学</a></p>
                        <p><a href="#">IPUT days Tokyo - Twitter</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="assets/base.js"></script>
    <!-- JavaScript Bootstrap v5.0.2 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"
  integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
  crossorigin="anonymous"></script> -->
    <!-- jQuery Slim v3.3.1 -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
</body>

</html>