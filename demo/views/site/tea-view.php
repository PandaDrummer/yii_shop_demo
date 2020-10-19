<section class="product container row">

    <section class="view_product row">
        <div class="col-4">
            <div class="product_view_img">
                <img src="<?= Yii::getAlias('@web')?>/uploads/<?= $tea->img?>" alt="">
            </div>
        </div>
        <div class="col-1"></div>
        <div class="col-7 view_product_information">
            <h2 class="view_product_name">
                <?=$tea->name ?>
            </h2>
            <p class="view_product_discription">
                <?=$tea->discription ?>
            </p>

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
                                    <th><?= $tea->l_price?></th>
                                </tr>
                                <tr>
                                    <th>
                                        <input type="radio" name="weight" id="m_price" value="2" >
                                        150г
                                    </th>
                                    <th><?= $tea->m_price?></th>
                                </tr>
                                <tr>
                                    <th>
                                        <input type="radio" name="weight" id="h_price" value="3" >
                                        200г
                                    </th>
                                    <th><?= $tea->h_price?></th>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
                <div class="col-6">
                    <button class="btn_buy" onclick="addcart(<?= $tea->id?>,ptype ,wieght)">купить </button>
                </div>
            </div>
        </div>
    </section>
    <script>
        var ptype='tea';
        var wieght=100;

        $('#l_price').click(function (e){
            wieght=100;
        });
        $('#m_price').click(function (e){
            wieght=150;
        });
        $('#h_price').click(function (e){
            wieght=200;
        });
    </script>
