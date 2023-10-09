<style>
    .button {
        display: inline-block;
        border-radius: 20px;
        background-color: #f4511e;
        border: none;
        color: white;
        text-align: center;
        font-size: 20px;
        padding: 5px;
        width: 400px;
        transition: all 0.5s;
        cursor: pointer;
        margin: 13px;
    }

    .button span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
    }

    .button span:after {
        content: '\29D0';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
    }

    .button:hover span {
        padding-right: 25px;
    }

    .button:hover span:after {
        opacity: 1;
        right: 0;
    }

    h3{
        text-align: center;
    }

    p{
        text-indent: 0.5in;
        text-align: justify;
    }
</style>

<?php include('header.php');?>
<section>
    <div class="content">
    <center>
        <h2 class="h2-sejarah"><b><u><i><strong class="tebal">JURUSAN</strong> SMK WAKANDA</i></u></b></h2>

        <a href="#rpl" class="button"><span>Rekayasa Perangkat Lunak (RPL)</span></a>
        <a href="#tkj" class="button"><span>Tehnik Komputer dan Jaringan (TKJ)</span></a>
        <a href="#mesin" class="button"><span>Tehnik Mesin</span></a>

        <h2><b>~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~</b></h2>
    </center>
    </div>
    
</section>

<section id="rpl">
    <h3>Rekayasa Perangkat Lunak (RPL)</h3>
    <p>
        Jurusan Rekayasa Perangkat Lunak (RPL) adalah jurusan yang mempelajari dan mendalami semua cara-cara pengembangan perangkat lunak termasuk pembuatan, pemeliharaan, manajemen organisasi pengembangan perangkat lunak dan manajemen kualitas.
    </p>
</section>

<section id="tkj">
    <h3>Tehnik Komputer dan Jaringan (TKJ)</h3>
    <p>
    Teknik Komputer dan Jaringan (TKJ) adalah jurusan yang mempelajari tentang komputer dan jaringan komputer. Jurusan ini mempelajari tentang cara merakit komputer, instalasi jaringan, troubleshooting, dan keamanan komputer dan jaringan.
    </p>
</section>

<section id="mesin">
    <h3>Tehnik Mesin</h3>
    <p>        
        Teknik mesin adalah jurusan yang mempelajari tentang perancangan, analisis, manufaktur, dan pemeliharaan sistem mekanik. Jurusan ini mempelajari tentang prinsip-prinsip fisika dan matematika untuk diterapkan pada mesin dan peralatan.
    </p>
</section>

<section>
    <center>        
        <h2><b>~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~</b></h2>
    </center>
</section>

<?php include('footer.php');?>