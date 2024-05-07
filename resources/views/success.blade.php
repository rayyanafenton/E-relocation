<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link type="text/css" rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />

    <title>Success</title>
    <style>
         @font-face{
            font-family: 'Axiata Book';
            src: url('/AXIATA\ BOOK.TTF')
        }

      body {
        font-family: "Axiata Book";
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        margin: 0;
      }

      .head {
        margin-bottom: 30px;
        text-align: center;
        padding-left: 10px;
        padding-right: 10px;
      }

      .footer {
        background-color: #000;
        color: white;
        font-weight: bold;
        height: 50px;
        width: 100%;
        padding: 20px 0;
        text-align: center;
        flex-shrink: 0;
      }

      .container {
        flex: 1;
      }
    </style>
  </head>

  <body>
    <nav
      class="navbar navbar-default"
      style="
        background-color: #164396;
        height: 25px;
        width: 100%;
        margin-bottom: 50px;
      "
    >
      <a class="navbar-brand" href="">
        <img
          src="https://storage.googleapis.com/newxlife-staging/navbar-img.png"
          style="margin-top: -6%; margin-left: -12px"
        />
      </a>

    </nav>

    <div class="container">
      <div
        style="
          padding: 10px 10px;
          border-radius: 20px;
          width: auto;
          margin-bottom: 40px;
          display: block;
        "
      >

      @if(session('success_message'))
        <div class="head">
            <h3 style="font-weight: bold">{{ session('success_message') }}</h3>
        </div>

        <div
            class="container-button"
            style="
            display: flex;
            justify-content: center;
            text-align: center;
            padding-top: 30px;
            padding-bottom: 30px;

            margin: auto;
            "
        >
            <form action="{{ route('form')  }}" method="GET">
                <button
                type="submit"
                class="btn btn-success"
                id="submitButton"
                style="
                    font-weight: bold;
                    font-size: 14px;
                    height: 35px;
                    width: 100;
                    border-radius: 5px;
                    "
                >
                Kembali
                </button>
            </form>
        </div>
        @endif
      </div>
    </div>

    <div class="footer">
      <div>
        <p>@ 2024 HC Digitalization</p>
      </div>
    </div>
  </body>
</html>
