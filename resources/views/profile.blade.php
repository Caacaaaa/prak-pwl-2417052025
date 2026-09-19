<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>

   <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            min-height: 100vh;

            display: flex;
            justify-content: center;
            align-items: center;

            background-color: #f5ead7;
        }

        .card {
            width: 380px;
            background-color: #171717;
            padding: 35px;
            border-radius: 20px;
            text-align: center;

            box-shadow: 8px 8px 0px #b83232;
        }

        h1 {
            font-size: 28px;
            color: #f5ead7;
            margin-bottom: 8px;
        }

        .subtitle {
            color: #c94a4a;
            font-size: 13px;
            margin-bottom: 25px;
        }

        .pp {
            width: 145px;
            height: 145px;

            margin: 0 auto 30px;

            border-radius: 50%;
            overflow: hidden;

            border: 5px solid #c03939;
            background-color: #f5ead7;
        }

        .pp img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .info {
            text-align: left;
        }

        .box {
            background-color: #f5ead7;

            padding: 14px 18px;
            margin-bottom: 13px;

            border-radius: 10px;

            border-left: 5px solid #c03939;
        }

        .label {
            font-size: 11px;
            font-weight: bold;
            color: #9b3030;
            margin-bottom: 5px;
            letter-spacing: 1px;
        }

        .value {
            font-size: 17px;
            font-weight: bold;
            color: #171717;
        }

    </style>
</head>

<body>

        <div class="card">

            <h1>PROFILE</h1> <br>

        <div class="pp">
            <img src="{{ asset('poto/foto.jpg') }}" alt="">
        </div>

        <div class="info">

            <div class="box">
                <div class="label">NAMA</div>
                <div class="value">{{ $nama }}</div>
            </div>

            <div class="box">
                <div class="label">KELAS</div>
                <div class="value">{{ $kelas }}</div>
            </div>

            <div class="box">
                <div class="label">NPM</div>
                <div class="value">{{ $NPM }}</div>
            </div>

        </div>

        </div>

    </div>

</body>
</html>