<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi Pembelajaran PHP</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body{
            background: linear-gradient(135deg,#020617,#0f172a,#6d28d9);
            min-height:100vh;
            color:white;
        }

        .hero{
            width:100%;
            padding:60px 8%;
            display:flex;
            justify-content:space-between;
            align-items:center;
            flex-wrap:wrap;
            gap:40px;
        }

        .hero-text{
            flex:1;
            min-width:300px;
        }

        .tag{
            display:inline-block;
            padding:10px 20px;
            border:1px solid #8b5cf6;
            border-radius:30px;
            margin-bottom:20px;
            background:rgba(255,255,255,0.08);
        }

        .hero-text h1{
            font-size:65px;
            line-height:1.1;
            margin-bottom:20px;
        }

        .hero-text span{
            color:#8b5cf6;
        }

        .hero-text p{
            font-size:18px;
            color:#d1d5db;
            max-width:500px;
            line-height:1.7;
        }

        .hero-image{
            flex:1;
            min-width:300px;
            text-align:center;
        }

        .hero-image img{
            width:100%;
            max-width:500px;
            animation:float 3s ease-in-out infinite;
            filter:drop-shadow(0 20px 30px rgba(0,0,0,0.5));
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

        .container{
            width:90%;
            max-width:1100px;
            margin:auto;
            margin-top:20px;
            padding-bottom:50px;
        }

        .materi-list{
            background:white;
            border-radius:25px;
            padding:30px;
            box-shadow:0 10px 30px rgba(0,0,0,0.3);
        }

        .card{
            margin-bottom:20px;
            border-radius:20px;
            overflow:hidden;
            border:2px solid #eee;
            transition:0.3s;
        }

        .card:hover{
            transform:scale(1.02);
            box-shadow:0 10px 20px rgba(0,0,0,0.15);
        }

        .card a{
            text-decoration:none;
            color:#111827;
            display:flex;
            align-items:center;
            justify-content:space-between;
            padding:25px;
            font-size:24px;
            font-weight:bold;
        }

        .left{
            display:flex;
            align-items:center;
            gap:20px;
        }

        .icon{
            width:65px;
            height:65px;
            border-radius:18px;
            display:flex;
            align-items:center;
            justify-content:center;
            color:white;
            font-size:30px;
        }

        .arrow{
            font-size:35px;
            color:#7c3aed;
        }

        .bg1{background:#8b5cf6;}
        .bg2{background:#3b82f6;}
        .bg3{background:#22c55e;}
        .bg4{background:#f97316;}
        .bg5{background:#ec4899;}
        .bg6{background:#06b6d4;}
        .bg7{background:#7c3aed;}
        .bg8{background:#2563eb;}
        .bg9{background:#eab308;}
        .bg10{background:#374151;}

        @media(max-width:768px){

            .hero{
                text-align:center;
            }

            .hero-text h1{
                font-size:45px;
            }

            .card a{
                font-size:18px;
                padding:18px;
            }

            .icon{
                width:50px;
                height:50px;
                font-size:22px;
            }

            .arrow{
                font-size:25px;
            }
        }

    </style>
</head>
<body>

    <section class="hero">

        <div class="hero-text">
            <div class="tag">💻 Belajar PHP</div>

            <h1>
                Materi Pembelajaran
                <br>
                <span>PHP</span>
            </h1>

            <p>
                Pelajari PHP dari dasar hingga mahir dengan materi
                yang terstruktur dan mudah dipahami.
            </p>
        </div>

        <div class="hero-image">
            <!-- GANTI php.png DENGAN NAMA GAMBAR KAMU -->
            <img src="ChatGPT Image 13 Mei 2026, 08.00.35.png" alt="PHP Illustration">
        </div>

    </section>

    <div class="container">

        <div class="materi-list">

            <?php

            $materi = [
                ["materi1.php","Materi 1 : Variabel dan Tipe Data","📘","bg1"],
                ["materi2.php","Materi 2 : Kondisi dan Looping","🔄","bg2"],
                ["materi3.php","Materi 3 : Function","⚡","bg3"],
                ["materi4.php","Materi 4 : Database","🗄️","bg4"],
                ["materi5.php","Materi 5","📖","bg5"],
                ["materi6.php","Materi 6","💻","bg6"],
                ["materi7.php","Materi 7","🚀","bg7"],
                ["materi8.php","Materi 8","🧩","bg8"],
                ["materi9.php","Materi 9","💡","bg9"],
                ["materi10.php","Materi 10","🏆","bg10"]
            ];

            foreach($materi as $m){

                echo "
                <div class='card'>
                    <a href='$m[0]'>

                        <div class='left'>
                            <div class='icon $m[3]'>$m[2]</div>
                            <span>$m[1]</span>
                        </div>

                        <div class='arrow'>➜</div>

                    </a>
                </div>
                ";
            }

            ?>

        </div>

    </div>

</body>
</html>