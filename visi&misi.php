<?php include('header.php');?>

<style>
    .bagian1{
        font-family: "Humnst777 Blk BT";
        padding-top: 20px;
        text-align: center;
    }

    .bagian2{
        font-family: "Humnst777 Blk BT";
        padding-top: 50px;
        text-align: center;
    }

    .button {
        display: inline-block;
        border-radius: 4px;
        background-color: #f4511e;
        border: none;
        color: #FFFFFF;
        text-align: center;
        font-size: 28px;
        padding: 10px;
        width: 100px;
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

    .visi{
        padding-top: 20px;
        font-family: "Tahoma";
        font-size: 20px;
        text-indent: 0.5in;
    }

    .utama{
        color: magenta;
    }

    tr:nth-child(even) {
        background-color: #D6EEEE;
    }

    .a{
        padding: 10px;
        text-align:left ;
    }

    .b{
        text-align: center;
    }
    
    .c{
        font-family: "Tahoma";
    }

</style>

<section>
    <center>
        <h2 class="h2-sejarah"><b><u><i><strong class="tebal">VISI DAN MISI</strong> SMK WAKANDA</i></u></b></h2>

        <!-- <a href="#visi" class="button"><span>VISI</span></a>
        <a href="#misi" class="button"><span>MISI</span></a> -->

        <h2><b>~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~</b></h2>
    </center>  
</section>

<section id="visi">
    <h2 class="bagian1"><b><u><i><strong class="utama">VISI</strong> SMK WAKANDA</i></u></b></h2>
    <p class="visi">Menjadi pusat pendidikan yang unggul dalam menciptakan generasi muda yang kompeten, kreatif, dan berintegritas, siap menghadapi tantangan global.</p>
</section>

<section id="misi">
    <h2 class="bagian2"><b><u><i><strong class="utama">MISI</strong> SMK WAKANDA</i></u></b></h2>
    <table border="2" style="width:100%">
        <tr>
            <th style="width:23%"></th>
            <th style="width:1%"></th>
            <th></th>
        </tr>
        <tr>
            <td class="a"><b><p><li>Pendidikan Berkualitas</li></p></b></td>
            <td class="b"><p>:</p></td>
            <td class="c"><p>Memberikan pendidikan berstandar tinggi yang mendorong pembelajaran aktif, inovasi, dan penerapan teknologi.</p></td>
        </tr>
        <tr>
            <td class="a"><b><p><li>Pengembangan Karakter</li></p></b></td>
            <td class="b"><p>:</p></td>
            <td class="c"><p>Membentuk siswa-siswa menjadi individu yang berintegritas, tangguh, dan bertanggung jawab dalam masyarakat.</p></td>
        </tr>
        <tr>
            <td class="a"><b><p><li>Keterampilan Praktis</li></p></b></td>
            <td class="b"><p>:</p></td>
            <td class="c"><p>Menyediakan program pelatihan praktis dan relevan yang mempersiapkan siswa untuk sukses dalam dunia kerja.</p></td>
        </tr>
        <tr>
            <td class="a"><b><p><li>Kreativitas dan Inovasi</li></p></b></td>
            <td class="b"><p>:</p></td>
            <td class="c"><p>Mendorong siswa untuk berpikir kreatif, inovatif, dan berkontribusi pada perkembangan teknologi dan industri.</p></td>
        </tr>
        <tr>
            <td class="a"><b><p><li>Keragaman dan Inklusi</li></p></b></td>
            <td class="b"><p>:</p></td>
            <td class="c"><p>Menyediakan lingkungan yang inklusif, menerima perbedaan, dan menghargai keragaman dalam budaya, bahasa, dan latar belakang.</p></td>
        </tr>
        <tr>
            <td class="a"><b><p><li>Kemitraan Bersama</li></p></b></td>
            <td class="b"><p>:</p></td>
            <td class="c"><p>Membangun kemitraan yang erat dengan industri, komunitas, dan lembaga pendidikan lain untuk meningkatkan pengalaman pendidikan.</p></td>
        </tr>
        <tr>
            <td class="a"><b><p><li>Keberlanjutan</li></p></b></td>
            <td class="b"><p>:</p></td>
            <td class="c"><p> Mengintegrasikan pemahaman tentang keberlanjutan dalam kurikulum dan praktik sekolah sehari-hari.</p></td>
        </tr>
        <tr>
            <td class="a"><b><p><li>Pelayanan Masyarakat</li></p></b></td>
            <td class="b"><p>:</p></td>
            <td class="c"><p>Mendorong siswa untuk terlibat dalam kegiatan pelayanan masyarakat, sehingga mereka menjadi warga yang peduli dan berempati.</p></td>
        </tr>
        <tr>
            <td class="a"><b><p><li>Pengembangan Profesional</li></p></b></td>
            <td class="b"><p>:</p></td>
            <td class="c"><p>Mendukung staf pengajar dalam pengembangan profesional mereka untuk meningkatkan kualitas pengajaran.</p></td>
        </tr>
        <tr>
            <td class="a"><b><p><li>Prestasi Unggul</li></p></b></td>
            <td class="b"><p>:</p></td>
            <td class="c"><p> Mendorong siswa untuk mencapai prestasi unggul dalam bidang akademik, seni, olahraga, dan berbagai kompetisi.</p></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</section>
    

<?php include('footer.php');?>