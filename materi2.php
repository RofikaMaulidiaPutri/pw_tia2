<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping PHP</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }

        body{
            min-height:100vh;
            background:linear-gradient(135deg,#020617,#0f172a,#6d28d9);
            color:white;
            padding:40px;
        }

        .container{
            max-width:900px;
            margin:auto;
        }

        .hero{
            display:flex;
            justify-content:space-between;
            align-items:center;
            gap:40px;
            flex-wrap:wrap;
            margin-bottom:40px;
        }

        .hero-text{
            flex:1;
            min-width:300px;
        }

        .tag{
            display:inline-block;
            padding:10px 20px;
            border-radius:30px;
            background:rgba(255,255,255,0.1);
            border:1px solid #8b5cf6;
            margin-bottom:20px;
        }

        .hero-text h1{
            font-size:55px;
            margin-bottom:20px;
            line-height:1.1;
        }

        .hero-text span{
            color:#8b5cf6;
        }

        .hero-text p{
            color:#d1d5db;
            line-height:1.7;
            font-size:18px;
        }

        .hero-image{
            flex:1;
            min-width:300px;
            text-align:center;
        }

        .hero-image img{
            width:100%;
            max-width:420px;
            animation:float 3s ease-in-out infinite;
            filter:drop-shadow(0 15px 25px rgba(0,0,0,0.5));
        }

        @keyframes float{
            0%{
                transform:translateY(0px);
            }
            50%{
                transform:translateY(-15px);
            }
            100%{
                transform:translateY(0px);
            }
        }

        .card{
            background:white;
            color:#111827;
            border-radius:25px;
            padding:35px;
            box-shadow:0 15px 35px rgba(0,0,0,0.3);
        }

        form{
            margin-bottom:30px;
        }

        input[type="number"]{
            width:100%;
            padding:15px;
            margin-top:10px;
            border:none;
            border-radius:12px;
            background:#f3f4f6;
            font-size:18px;
            margin-bottom:20px;
        }

        input[type="submit"]{
            background:linear-gradient(135deg,#7c3aed,#2563eb);
            color:white;
            border:none;
            padding:15px 30px;
            border-radius:12px;
            cursor:pointer;
            font-size:18px;
            font-weight:bold;
            transition:0.3s;
        }

        input[type="submit"]:hover{
            transform:scale(1.05);
        }

        .hasil{
            margin-top:30px;
        }

        .box{
            background:#f9fafb;
            border-left:6px solid #7c3aed;
            padding:18px;
            margin-bottom:15px;
            border-radius:15px;
            transition:0.3s;
        }

        .box:hover{
            transform:translateX(5px);
            background:#ede9fe;
        }

        h2{
            margin-top:30px;
            margin-bottom:20px;
            color:#7c3aed;
        }

        @media(max-width:768px){

            .hero{
                text-align:center;
            }

            .hero-text h1{
                font-size:40px;
            }

        }

    </style>

</head>
<body>

<div class="container">

    <div class="hero">

        <div class="hero-text">

            <div class="tag">
                🔄 Materi Looping PHP
            </div>

            <h1>
                Belajar <span>Looping</span><br>
                PHP Modern
            </h1>

            <p>
                Pelajari perulangan For, While, dan Do While
                dengan tampilan modern dan menarik.
            </p>

        </div>

        <div class="hero-image">

            <img src="https://cdn-icons-png.flaticon.com/512/919/919830.png">

        </div>

    </div>

    <div class="card">

        <form method="POST">

            <label>Masukan Angka :</label>

            <input type="number" name="angka" placeholder="Contoh : 10">

            <input type="submit" value="Kirim">

        </form>

        <div class="hasil">

        <?php

        if(isset($_POST['angka'])) {

            $data = $_POST['angka'];

            echo "<h2>Perulangan FOR</h2>";

            for ($i = 1; $i <= $data; $i++) {

                echo "<div class='box'>";

                echo "Angka $i ";

                if($i % 2 == 0){
                    echo "(Genap)";
                } else {
                    echo "(Ganjil)";
                }

                echo "</div>";
            }

            echo "<h2>Perulangan WHILE</h2>";

            $i = 1;

            while($i <= $data){

                echo "<div class='box'>";
                echo "Angka $i";
                echo "</div>";

                $i++;
            }

            echo "<h2>Perulangan DO WHILE</h2>";

            $i = 1;

            do{

                echo "<div class='box'>";
                echo "Angka $i";
                echo "</div>";

                $i++;

            } while($i <= $data);

        }

        ?>

        </div>

    </div>

</div>

</body>
</html>