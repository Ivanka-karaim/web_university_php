<?php
$response="pop_up";
$error="";
$pattern = "/^\+380\d{3}\d{2}\d{2}\d{2}$/";
if(!empty($_POST)){
    $phone_number=trim($_POST["phone_number"]);
    if(preg_match($pattern, $phone_number)) {
        $error="";
        $response="pop_up";
    }
    else {
        $error="Ви ввели неправильний номер телефону!!!";
        $response .= " active";
    }

}
?>
<div class="<?php echo $response?>" id="pop_up">
    <div class="pop_up_container">
        <div class="pop_up_body" id="pop_up_body">
            <h3>Для замовлення введіть ваш номер телефону</h3>
            <p>Наш консультант зателефонує вам в найближчий термін для уточнення усіх даних</p>
            <form action="" method="post">
                <input type="text" placeholder="+38 (000) 000 00 00" id="phone_number" name="phone_number" required="">
                <p><?=$error?></p>
                <button id="open_response">Надіслати</button>
            </form>
            <div class="pop_up_close" id="pop_up_close">&#10006
            </div>
        </div>
    </div>
</div>
<section class="way">
    <div class="container">
        <div class="way_block">
            <div class="way_flex">
                <a href="./"><h2>Головна</h2></a>
                <i class="fa-solid fa-arrow-right-long"></i>
                <a href="./?page=catalog"><h2>Каталог</h2></a>
                <i class="fa-solid fa-arrow-right-long"></i>
                <a href="./?page=products"><h2>Душові кабіни</h2></a>
            </div>
            <div class="way_flex">
                <i class="fa-solid fa-arrow-right-long"></i>
                <a href="./?page=product"><h2>Звичайна кутова душова кабіна</h2></a>
            </div>
        </div>
        <h1>Звичайна кутова душова кабіна</h1>
    </div>
</section>

<section class="product">
    <div class="container">


        <div class="product_photo_and_description">
            <div class="row">
                <div class="col-lg-6">
                    <img src="resource/img/catalog/dush_kab.jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <div class="description">
                        <h2>Характеристики:</h2>
                        <hr>
                        <div class="text">
                            <p >Використане скло: PILKINGTON (Англія),гартоване</p>
                            <p>Фурнітура: Siso(Данія)</p>
                            <p>Колір скла: матове, флоат(прозоре), висвітлене(ультрапрозоре), бронза, графіт</p>
                            <p>Колір фурнітури: хром, золото, чорний</p>
                            <p>Ширина: від 600мм</p>
                            <p>Висота: від 800мм</p>
                        </div>
                        <div class="order">
                            <div class="guarantee">
                                <div class="column_guarantee">
                                    <h2>Час Виготовлення:</h2>
                                    <h2 class="usual">15 робочих днів</h2>
                                </div>
                                <div class="column_guarantee">
                                    <h2>Гарантія:</h2>
                                    <h2 class="usual">1 рік</h2>
                                </div>
                            </div>
                            <div class="buy">
                                <a href="#" id="open_pop_up">
                                    Замовити
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="product_photo_and_description_medium">
            <div class="row">
                <div class="col-md-7">
                    <img src="resource/img/catalog/dush_kab.jpg" alt="" >
                    <div class="guarantee">
                        <div class="column_guarantee">
                            <h2>Час Виготовлення:</h2>
                            <h2 class="usual">15 робочих днів</h2>
                        </div>
                        <div class="column_guarantee">
                            <h2>Гарантія:</h2>
                            <h2 class="usual">1 рік</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="description">
                        <h2>Характеристики:</h2>
                        <hr>
                        <div class="text">
                            <p >Використане скло: PILKINGTON (Англія),гартоване</p>
                            <p>Фурнітура: Siso(Данія)</p>
                            <p>Колір скла: матове, флоат(прозоре), висвітлене(ультрапрозоре), бронза, графіт</p>
                            <p>Колір фурнітури: хром, золото, чорний</p>
                            <p>Ширина: від 600мм</p>
                            <p>Висота: від 800мм</p>
                        </div>
                        <div class="order">
                            <div class="buy">
                                <a href="#" id="open_pop_up_1">
                                    Замовити
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        <div class="product_photo_and_description_mobile">
            <img src="resource/img/catalog/dush_kab.jpg" alt="" >
            <div class="guarantee">
                <div class="column_guarantee">
                    <h2>Час Виготовлення:</h2>
                    <h2 class="usual">15 робочих днів</h2>
                </div>
                <div class="column_guarantee">
                    <h2>Гарантія:</h2>
                    <h2 class="usual">1 рік</h2>
                </div>
            </div>

            <div class="buy">
                <a href="#" id="open_pop_up_2">
                    Замовити
                </a>
            </div>


            <div class="description">
                <h2>Характеристики:</h2>
                <hr>
                <div class="text">
                    <p >Використане скло: PILKINGTON (Англія),гартоване</p>
                    <p>Фурнітура: Siso(Данія)</p>
                    <p>Колір скла: матове, флоат(прозоре), висвітлене(ультрапрозоре), бронза, графіт</p>
                    <p>Колір фурнітури: хром, золото, чорний</p>
                    <p>Ширина: від 600мм</p>
                    <p>Висота: від 800мм</p>
                </div>

            </div>
        </div>
        <div class="type">
            <h1>Тип скла</h1>
            <hr>
            <div class="my_row">
                <div class="row_sklo">
                    <img src="resource/img/type/type_sklo/Стекло-Crystalvision-оптивайт.jpg" alt="">
                    <h2>Висвітлене</h2>
                </div>
                <div class="row_sklo">
                    <img src="resource/img/type/type_sklo/Стекло-матовое.jpg" alt="">
                    <h2>Матове</h2>
                </div>
                <div class="row_sklo">
                    <img src="resource/img/type/type_sklo/Стекло-тонированное-бронза.jpg" alt="">
                    <h2>Бронза</h2>
                </div>
                <div class="row_sklo">
                    <img src="resource/img/type/type_sklo/Стекло-тонированное-графит-.jpg" alt="">
                    <h2>Графіт</h2>
                </div>
                <div class="row_sklo">
                    <img src="resource/img/type/type_sklo/Стекло-БЦ-флоат.jpg" alt="">
                    <h2>Флоат</h2>
                </div>
            </div>
            <h1>Тип фурнітури</h1><hr>
            <div class="fur">
                <div class="my_row">
                    <div class="row_fur">
                        <div class="photo">
                            <img src="resource/img/type/type_fur/image%2019.png" alt="">
                            <img src="resource/img/type/type_fur/image%2018.png" alt="">
                        </div>
                        <h2>Хром</h2>
                    </div>
                    <div class="row_fur">
                        <img src="resource/img/type/type_fur/image%2015.png" alt="">
                        <h2>Золото</h2>

                    </div>
                    <div class="row_fur">
                        <div class="photo">
                            <img src="resource/img/type/type_fur/image%2016.png" alt="">
                            <img src="resource/img/type/type_fur/image%2017.png" alt="">
                        </div>
                        <h2>Чорний</h2>

                    </div>
                </div>
            </div>
            <div class="fur_medium">
                <div class="row">
                    <div class="col-md-4">
                        <img src="resource/img/type/type_fur/image%2019.png" alt="">
                        <h2>Хром</h2>
                    </div>
                    <div class="col-md-4">
                        <img src="resource/img/type/type_fur/image%2015.png" alt="">
                        <h2>Золото</h2>

                    </div>
                    <div class="col-md-4">
                        <img src="resource/img/type/type_fur/image%2016.png" alt="">
                        <h2>Чорний</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="type_mobile">
            <h1>Тип скла</h1>
            <hr>
            <div class="row">
                <div class="col-6">
                    <img src="resource/img/type/type_sklo/Стекло-Crystalvision-оптивайт.jpg" alt="">
                    <h2>Висвітлене</h2>

                </div>
                <div class="col-6">
                    <img src="resource/img/type/type_sklo/Стекло-матовое.jpg" alt="">
                    <h2>Матове</h2>

                </div>
                <div class="col-6">
                    <img src="resource/img/type/type_sklo/Стекло-тонированное-бронза.jpg" alt="">
                    <h2>Бронза</h2>

                </div>
                <div class="col-6">
                    <img src="resource/img/type/type_sklo/Стекло-тонированное-графит-.jpg" alt="">
                    <h2>Графіт</h2>

                </div>
                <div class="col-3">

                </div>
                <div class="col-6">
                    <img src="resource/img/type/type_sklo/Стекло-БЦ-флоат.jpg" alt="">
                    <h2>Флоат</h2>

                </div>
                <div class="col-3">

                </div>
            </div>
            <h1>Тип фурнітури</h1>
            <hr>
            <div class="row">
                <div class="col-6">
                    <img src="resource/img/type/type_fur/image%2019.png" alt="">
                    <h2>Хром</h2>
                </div>
                <div class="col-6">
                    <img src="resource/img/type/type_fur/image%2016.png" alt="">
                    <h2>Чорний</h2>
                </div>
                <div class="col-3"></div>
                <div class="col-6">
                    <img src="resource/img/type/type_fur/image%2015.png" alt="">
                    <h2>Золото</h2>

                </div>

                <div class="col-3"></div>
            </div>


        </div>
    </div>

</section>






