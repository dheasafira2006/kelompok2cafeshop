<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">Selamat Datang</h1>

        <p class="lead">CAFEESHOP SUGARDADDY</p>

        <p><a class="btn btn-lg btn-success" href="https://www.yiiframework.com">Klik Disini</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4 mb-3">
                <h2>Coffe Latte</h2>
 
            <img src="<?= Yii::getAlias(alias: '@web')?>/images/jpg coffe.JPEG" alt="logo" width = "200">

                <p>Coffee latte adalah minuman kopi yang terdiri dari perpaduan antara espresso dan susu cair hangat dengan lapisan tipis busa susu di atasnya. Minuman ini memiliki rasa yang lembut dan creamy, dengan keseimbangan sempurna antara kekuatan rasa kopi dari espresso dan kelembutan susu. Coffee latte sering dihiasi dengan latte art, berupa pola indah yang dibuat di atas busa susu, menjadikannya tidak hanya nikmat tetapi juga menarik secara visual.
                    Minuman ini sangat populer di berbagai kafe dan menjadi pilihan favorit untuk dinikmati di pagi hari atau sebagai teman santai sepanjang hari..</p>

                <p><a class="btn btn-outline-secondary" href="https://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4 mb-3">
                <h2>Nasi Telur Kribo</h2>
                <img src="<?= Yii::getAlias(alias: '@web')?>/images/nasi telur kribo.JPG" alt="logo" width = "200">
                <p>Nasi telur kribo adalah hidangan sederhana namun menggugah selera yang terdiri dari nasi putih hangat yang disajikan dengan telur goreng berbentuk unik menyerupai rambut keriting atau "kribo." Telur ini digoreng hingga bagian putihnya renyah dan membentuk tekstur yang garing, sementara kuning telurnya tetap lembut dan lumer. Biasanya, hidangan ini dilengkapi dengan sambal pedas, kecap manis, atau taburan bawang goreng untuk menambah cita rasa.
                Dengan perpaduan rasa gurih, pedas, dan tekstur renyah, nasi telur kribo menjadi pilihan praktis dan lezat untuk santapan sehari-hari.</p>

                <p><a class="btn btn-outline-secondary" href="https://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Kentang Goreng</h2>

                <p>Kentang goreng adalah camilan klasik yang terbuat dari potongan kentang yang digoreng hingga renyah dan berwarna keemasan. Hidangan ini memiliki tekstur luar yang garing dengan bagian dalam yang lembut, memberikan sensasi nikmat di setiap gigitan. Biasanya disajikan dengan taburan garam untuk menambah cita rasa, kentang goreng juga sering dipadukan dengan saus seperti saus tomat, mayones, atau keju leleh sebagai pelengkap. 
                Dengan rasa gurih dan kepraktisannya, kentang goreng menjadi salah satu makanan ringan favorit di seluruh dunia, baik sebagai camilan maupun pendamping hidangan utama.</p>

                <p><a class="btn btn-outline-secondary" href="https://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
