<section class="product container row">

    <section class="view_product row">
        <div class="col-4">
            <div class="product_view_img">
                <img src="<?= Yii::getAlias('@web')?>/uploads/<?= $coffe->img?>" alt="">
            </div>
            <div class="view_product_table">
                <table>
                    <tr>
                        <th>Кислинка:</th>
                        <th><?=$coffe->sourness ?>/5</th>
                    </tr>
                    <tr>
                        <th>Горчинка:</th>
                        <th><?=$coffe->bitterness ?>/5</th>
                    </tr>
                    <tr>
                        <th>Степень обжарки:</th>
                        <th><?=$coffe->roasting ?>/5</th>
                    </tr>
                </table>
            </div>
        </div>
        <div class="col-1"></div>
        <div class="col-7 view_product_information">
            <h2 class="view_product_name">
                <?=$coffe->name ?>
            </h2>
            <p class="view_product_discription">
                <?=$coffe->discription ?>
            </p>
            <p class="view_product_advice">
                Мы рекомендуем заваривать этот кофе в турке, эспрессо машинах, моке.
            </p>
            <strong class="view_product_select">
                Выберите тип помола:
            </strong>
            <div class="row">
                <div class="col-6">
                    <div class="view_product_icon" id="french" >
                        <img src="<?= Yii::getAlias('@web')?>/img/french_press.svg" alt="">
                        <p>Френч - Пресс</p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="view_product_icon" id="coffee_machine">
                        <img src="<?= Yii::getAlias('@web')?>/img/coffe_mash.svg" alt="">
                        <p>Кофемашина</p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="view_product_icon" id="cezve">
                        <img src="<?= Yii::getAlias('@web')?>/img/turk.svg" alt="">
                        <p>Турка</p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="view_product_icon view_product_selected" id="corn">
                        <img src="<?= Yii::getAlias('@web')?>/img/coffe_corn.svg" alt="">
                        <p>в зернах</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="view_product_weight">
                        <form class="" action="" method="post">
                            <table>
                                <tr>
                                    <th>
                                        <input type="radio" name="weight" id="l_price" value="1" checked="checked" >
                                        100г
                                    </th>
                                    <th><?= $coffe->l_price?></th>
                                </tr>
                                <tr>
                                    <th>
                                        <input type="radio" name="weight" id="m_price" value="2" >
                                        250г
                                    </th>
                                    <th><?= $coffe->m_price?></th>
                                </tr>
                                <tr>
                                    <th>
                                        <input type="radio" name="weight" id="h_price" value="3" >
                                        500г
                                    </th>
                                    <th><?= $coffe->h_price?></th>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
                <div class="col-6">
                    <button class="btn_buy" onclick="addcart(<?= $coffe->id?>,ptype ,wieght)">купить </button>
                </div>
            </div>
        </div>
    </section>
    <script>
        var ptype='Турка';
        var wieght=100;
        $('#french').click(function (e){
            ptype='Френч - Пресс';
            $(".view_product_icon").removeClass('view_product_selected');
            $('#french').addClass('view_product_selected')
        });
        $('#coffee_machine').click(function (e){
            ptype='Кофемашина';
            $(".view_product_icon").removeClass('view_product_selected');
            $('#coffee_machine').addClass('view_product_selected')
        });
        $('#cezve').click(function (e){
            ptype='Турка';
            $(".view_product_icon").removeClass('view_product_selected');
            $('#cezve').addClass('view_product_selected')
        });
        $('#corn').click(function (e){
            ptype='Турка';
            $(".view_product_icon").removeClass('view_product_selected');
            $('#corn').addClass('view_product_selected')
        });
        $('#l_price').click(function (e){
            wieght=100;
        });
        $('#m_price').click(function (e){
            wieght=250;
        });
        $('#h_price').click(function (e){
            wieght=500;
        });
    </script>
