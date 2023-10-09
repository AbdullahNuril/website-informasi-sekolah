<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <style>
            nav ul li button{
                min-width: 100px;
                min-height: 30px;
                font-family: 'Nunito', sans-serif;
                font-size: 22px;
                text-transform: uppercase;
                letter-spacing: 1.3px;
                font-weight: 700;
                color: #313133;
                background: #4FD1C5;
                background: linear-gradient(90deg, rgba(129,230,217,1) 0%, rgba(79,209,197,1) 100%);
                border: none;
                border-radius: 1000px;
                box-shadow: 12px 12px 24px rgba(79,209,197,.64);
                transition: all 0.3s ease-in-out 0s;
                cursor: pointer;
                outline: none;
                position: relative;
                padding: 10px;
            }

            nav ul li button::before {
                content: '';
                border-radius: 1000px;
                min-width: calc(86px + 12px);
                min-height: calc(30px + 12px);
                border: 6px solid #00FFCB;
                box-shadow: 0 0 60px rgba(0,255,203,.64);
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                opacity: 0;
                transition: all .3s ease-in-out 0s;
            }

            .button2::before {
                min-width: calc(246px + 12px);
            }
            .button3::before {
                min-width: calc(166px + 12px);
            }
            .button4::before {
                min-width: calc(125px + 12px);
            }
            .button5::before {
                min-width: calc(87px + 12px);
            }

            nav ul li button:hover, nav ul li button:focus  {
                color: #313133;
                transform: translateY(-6px);  
            }

            nav ul li button:hover::before,nav ul li button:focus::before {
                opacity: 1;
            }

            nav ul li button:after{
                content: '';
                width: 30px; height: 30px;
                border-radius: 100%;
                border: 6px solid aqua;
                position: absolute;
                z-index: -1;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                animation: ring 1.5s infinite;
            }
        </style>
        <script src="js.js"></script>
    </head>
    <body>
        <header class="sticky">
            <h2>
                SMK WAKANDA
            </h2>
            <nav>
                <ul>
                    <li><button onclick="window.location.href='index.php';" class="button1">Home</button></li>
                    <li><button onclick="window.location.href='sejarah.php';" class="button2">Sejarah Sekolah</button></li>
                    <li><button onclick="window.location.href='visi&misi.php';" class="button3">Visi dan Misi</button></li>
                    <li><button onclick="window.location.href='jurusan.php';" class="button4">Jurusan</button></li>
                    <li><button onclick="window.location.href='info.php';" class="button5">Info</button></li>
                </ul>
            </nav>
        </header>
        
    </body>
</html>