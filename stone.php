<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="calculate-step-title">
                <h2 class="content-title-black">Конструктор столешниц</h2>
            </div>
            <div class="calculate-step-link-block">
                <div class="calculate-step-tab">
                    <a href="#" class="calculate-step-link calculate-step-link-active" data-step-id="calculate-step-1">Тип столешницы</a>
                </div>
                <div class="calculate-step-tab">
                    <a href="#" class="calculate-step-link" data-step-id="calculate-step-2">Размер столешницы</a>
                </div>
                <div class="calculate-step-tab">
                    <a href="#" class="calculate-step-link" data-step-id="calculate-step-3">Тип камня</a>
                </div>
                <div class="calculate-step-tab">
                    <a href="#" class="calculate-step-link" data-step-id="calculate-step-4">Дополнения</a>
                </div>
                <div class="calculate-step-tab">
                    <a href="#" class="calculate-step-link" data-step-id="calculate-step-5">Итого</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="calculate-step-1" class="calculate-step calculate-step-active">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="type-table-block type-table-block-active">
                    <div class="type-table-block-title">
                        <h3>Прямая столешница</h3>
                    </div>
                    <div class="type-table-block-img">
                        <img src="img/type-table/type-table-1.jpg" alt="">
                    </div>
                    <div class="type-table-block-checkbox">
                        <input id="type-table-1" type="radio" checked name="type-table"/>
                        <label class="fa" for="type-table-1">Прямая столешница</label>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="type-table-block">
                    <div class="type-table-block-title">
                        <h3>Г-образная столешница</h3>
                    </div>
                    <div class="type-table-block-img">
                        <img src="img/type-table/type-table-2.jpg" alt="">
                    </div>
                    <div class="type-table-block-checkbox">
                        <input id="type-table-2" type="radio" name="type-table"/>
                        <label class="fa" for="type-table-2">Г-образная столешница</label>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="type-table-block">
                    <div class="type-table-block-title">
                        <h3>П-образная столешница</h3>
                    </div>
                    <div class="type-table-block-img">
                        <img src="img/type-table/type-table-3.jpg" alt="">
                    </div>
                    <div class="type-table-block-checkbox">
                        <input id="type-table-3" type="radio" name="type-table"/>
                        <label class="fa" for="type-table-3">П-образная столешница</label>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="btn-calculate-step">
                    <!--<a href="#" class="btn-first-prev btn-grey"><i class="fa fa-angle-left" aria-hidden="true"></i></a>-->
                    <a href="#" class="btn-next-step btn-yellow">Размер <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="calculate-step-2" class="calculate-step">
    <div class="container">
        <div class="row">
            <div class="col-7">
                <div class="table-size-img-main">
                    <img src="img/size-table/size-1.jpg" alt="">
                </div>
            </div>
            <div class="col-5">
                <div class="table-size-mm-title">
                    <h3>Укажите размер столешницы в мм</h3>
                    <div class="table-size-mm-content">
                        <div class="table-size-mm-content-a">
                            <label>A</label>
                            <input type="number" value="300">
                        </div>
                        <div class="table-size-mm-content-b">
                            <label>B</label>
                            <input type="number" value="2000">
                        </div>
                    </div>
                    <div class="skibidiAgree skibidiAgree-calc table-size-none">
                        <div class="skibidiChekboxAgree checked"></div>
                        <div class="skibidiTextAgree">Я не знаю размеры</div>
                    </div>
                    <h3>Выберите вид угла столешницы</h3>
                    <div class="table-size-corner">
                        <div class="row">
                            <div class="col-6">
                                <div class="table-size-corner-img corner-active">
                                    <img src="img/size-table/size-1.jpg" alt="">
                                    <p>Прямая</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="table-size-corner-img">
                                    <img src="img/size-table/size-2.jpg" alt="">
                                    <p>Закругленная</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="table-size-corner-img">
                                    <img src="img/size-table/size-3.jpg" alt="">
                                    <p>Косая</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="table-size-corner-img">
                                    <img src="img/size-table/size-4.jpg" alt="">
                                    <p>Скошенная</p>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" class="corner-name" value="size-1">
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="btn-calculate-step">
                    <a href="#" class="btn-next-prev btn-grey"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                    <a href="#" class="btn-next-step btn-yellow">Тип камня <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="calculate-step-3" class="calculate-step">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="tabs-stone-content">
                    <div class="table-stone-tab">
                        <div class="stone-tab-block">
                            <a href="#" class="active"><img src="img/stone-table/brand/01-caesarstone.jpg" alt=""></a>
                        </div>
                        <div class="stone-tab-block">
                            <a href="#"><img src="img/stone-table/brand/02-du-pont-corian.jpg" alt=""></a>
                        </div>
                        <div class="stone-tab-block">
                            <a href="#"><img src="img/stone-table/brand/03-hanex.jpg" alt=""></a>
                        </div>
                        <div class="stone-tab-block">
                            <a href="#"><img src="img/stone-table/brand/04-lg.jpg" alt=""></a>
                        </div>
                        <div class="stone-tab-block">
                            <a href="#"><img src="img/stone-table/brand/05-plaza.jpg" alt=""></a>
                        </div>
                        <div class="stone-tab-block">
                            <a href="#"><img src="img/stone-table/brand/06-samsung.jpg" alt=""></a>
                        </div>
                        <div class="stone-tab-block">
                            <a href="#"><img src="img/stone-table/brand/07-tristone.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="table-stone-box">
                        <div class="stone-box-block stone-box-block-active">
                            <?php
                            function myScandir($dir, $sort=0) {
                                $list = scandir($dir, $sort);
                                if (!$list) return false;
                                if ($sort == 0) {
                                    unset($list[0],$list[1]);
                                } else {
                                    unset($list[count($list)-1], $list[count($list)-1]);
                                }
                                return $list;
                            }
                            ?>
                            <?
                            $dir1 = "img/stone-table/stone/01";
                            $stone1 = myScandir($dir1, 1);
                            foreach($stone1 as $val): ?>
                                <img src="<?=$dir1 . "/" . $val?>" data-stone-name="<?=$val?>" alt="">
                            <? endforeach; ?>
                            <?/*
                            <div id="stone-slider-1">
                                <?
                                $dir1 = "img/stone-table/stone/01";
                                $stone1 = myScandir($dir1, 1);
                                foreach($stone1 as $val): ?>
                                    <img src="<?=$dir1 . "/" . $val?>" data-stone-name="<?=$val?>" alt="">
                                <? endforeach; ?>
                            </div>
                            <script>
                                $( document ).ready(function() {
                                    $("#stone-slider-1").slick({
                                        centerMode: true,
                                        centerPadding: '60px',
                                        slidesToShow: 6
                                    });
                                });
                            </script>*/?>
                        </div>
                        <div class="stone-box-block">
                            <?
                            $dir2 = "img/stone-table/stone/02";
                            $stone2 = myScandir($dir2, 1);
                            foreach($stone2 as $val): ?>
                                <img src="<?=$dir2 . "/" . $val?>" data-stone-name="<?=$val?>" alt="">
                            <? endforeach; ?>
                        </div>
                        <div class="stone-box-block">
                            <?
                            $dir3 = "img/stone-table/stone/03";
                            $stone3 = myScandir($dir3, 1);
                            foreach($stone3 as $val): ?>
                                <img src="<?=$dir3 . "/" . $val?>" data-stone-name="<?=$val?>" alt="">
                            <? endforeach; ?>
                        </div>
                        <div class="stone-box-block">
                            <?
                            $dir4 = "img/stone-table/stone/04";
                            $stone4 = myScandir($dir4, 1);
                            foreach($stone4 as $val): ?>
                                <img src="<?=$dir4 . "/" . $val?>" data-stone-name="<?=$val?>" alt="">
                            <? endforeach; ?>
                        </div>
                        <div class="stone-box-block">
                            <?
                            $dir5 = "img/stone-table/stone/05";
                            $stone5 = myScandir($dir5, 1);
                            foreach($stone5 as $val): ?>
                                <img src="<?=$dir5 . "/" . $val?>" data-stone-name="<?=$val?>" alt="">
                            <? endforeach; ?>
                        </div>
                        <div class="stone-box-block">
                            <?
                            $dir6 = "img/stone-table/stone/06";
                            $stone6 = myScandir($dir6, 1);
                            foreach($stone6 as $val): ?>
                                <img src="<?=$dir6 . "/" . $val?>" alt="">
                            <? endforeach; ?>
                        </div>
                        <div class="stone-box-block">
                            <?
                            $dir7 = "img/stone-table/stone/07";
                            $stone7 = myScandir($dir7, 1);
                            foreach($stone7 as $val): ?>
                                <img src="<?=$dir7 . "/" . $val?>" alt="">
                            <? endforeach; ?>
                        </div>
                        <input type="hidden" class="stone-name">
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="btn-calculate-step">
                    <a href="#" class="btn-next-prev btn-grey"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                    <a href="#" class="btn-next-step btn-yellow">Дополнения <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="calculate-step-4" class="calculate-step">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="calculate-dop-content">
                    <div class="calculate-dop">
                        <div class="calculate-dop-name">
                            <span>Вырез под смеситель</span>
                        </div>
                        <div class="calculate-dop-price">
                            <span>+ 200 руб.</span>
                        </div>
                        <div class="calculate-dop-check">
                            <input type="checkbox" id="check-1">
                            <label class="fa" for="check-1"></label>
                        </div>
                    </div>
                    <div class="calculate-dop">
                        <div class="calculate-dop-name">
                            <span>Вырез под варочную панель</span>
                        </div>
                        <div class="calculate-dop-price">
                            <span>+ 200 руб.</span>
                        </div>
                        <div class="calculate-dop-check">
                            <input type="checkbox" id="check-2">
                            <label class="fa" for="check-2"></label>
                        </div>
                    </div>
                    <div class="calculate-dop">
                        <div class="calculate-dop-name">
                            <span>Вырез под мойку</span>
                        </div>
                        <div class="calculate-dop-price">
                            <span>+ 200 руб.</span>
                        </div>
                        <div class="calculate-dop-check">
                            <input type="checkbox" id="check-3">
                            <label class="fa" for="check-3"></label>
                        </div>
                    </div>
                    <div class="calculate-dop">
                        <div class="calculate-dop-name">
                            <span>Встроенная мойка</span>
                        </div>
                        <div class="calculate-dop-price">
                            <span></span>
                        </div>
                        <div class="calculate-dop-check">
                            <input type="checkbox" id="check-4">
                            <label class="fa" for="check-4"></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="calculate-dop-edge">
                    <h3>Кромка</h3>
                    <div class="calculate-dop-edge-img">
                        <img src="img/stone-edge/1.jpg" data-edge-name="stone-edge-1" alt="">
                        <img src="img/stone-edge/2.jpg" data-edge-name="stone-edge-2" alt="">
                        <img src="img/stone-edge/3.jpg" data-edge-name="stone-edge-3" alt="">
                        <img src="img/stone-edge/4.jpg" data-edge-name="stone-edge-4" alt="">
                        <img src="img/stone-edge/5.jpg" data-edge-name="stone-edge-5" alt="">
                        <img src="img/stone-edge/6.jpg" data-edge-name="stone-edge-6" alt="">
                        <img src="img/stone-edge/7.jpg" data-edge-name="stone-edge-7" alt="">
                        <img src="img/stone-edge/8.jpg" data-edge-name="stone-edge-8" alt="">
                        <img src="img/stone-edge/9.jpg" data-edge-name="stone-edge-9" alt="">
                        <img src="img/stone-edge/10.jpg" data-edge-name="stone-edge-10" alt="">
                        <img src="img/stone-edge/11.jpg" data-edge-name="stone-edge-11" alt="">
                        <img src="img/stone-edge/12.jpg" data-edge-name="stone-edge-12" alt="">
                    </div>
                    <input type="hidden" class="edge-name">
                </div>
            </div>
            <div class="col-12">
                <div class="btn-calculate-step">
                    <a href="#" class="btn-next-prev btn-grey"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                    <a href="#" class="btn-next-step btn-yellow">Итого <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="calculate-step-5" class="calculate-step">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="calculate-result-img">
                    <img src="img/size-table/size-1.jpg" alt="">
                </div>
            </div>
            <div class="col-6">
                <div class="calculate-result-params">
                    <div class="calculate-result-params-stone">
                        <div class="result-stone-type">
                            <p>Тип камня</p>
                            <img src="img/stone-table/stone/07/ts119.jpg" alt="">
                            <span>S-345</span>
                        </div>
                        <div class="result-stone-edge">
                            <p>Кромка</p>
                            <img src="img/stone-edge/4.jpg" alt="">
                            <span>Расчет стоимости фигурной кромки производится индивидуально</span>
                        </div>
                    </div>
                    <div class="calculate-result-params-dop">
                        <h3>Дополнения</h3>
                        <div class="result-dop-content">
                            <div class="calculate-dop">
                                <div class="calculate-dop-name">
                                    <span>Вырез под смеситель</span>
                                </div>
                                <div class="calculate-dop-check">
                                    <input type="checkbox" id="result-check-1">
                                    <label class="fa" for="result-check-1"></label>
                                </div>
                            </div>
                            <div class="calculate-dop">
                                <div class="calculate-dop-name">
                                    <span>Вырез под варочную панель</span>
                                </div>
                                <div class="calculate-dop-check">
                                    <input type="checkbox" id="result-check-2">
                                    <label class="fa" for="result-check-2"></label>
                                </div>
                            </div>
                            <div class="calculate-dop">
                                <div class="calculate-dop-name">
                                    <span>Вырез под мойку</span>
                                </div>
                                <div class="calculate-dop-check">
                                    <input type="checkbox" id="result-check-3">
                                    <label class="fa" for="result-check-3"></label>
                                </div>
                            </div>
                            <div class="calculate-dop">
                                <div class="calculate-dop-name">
                                    <span>Встроенная мойка</span>
                                </div>
                                <div class="calculate-dop-check">
                                    <input type="checkbox" id="result-check-4">
                                    <label class="fa" for="result-check-4"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="sep"></div>
            </div>
            <div class="col-12">
                <div class="result-size">
                    <h3>Размеры столешницы</h3>
                    <div class="result-size-mm">
                        <div class="result-size-a">
                            <span class="result-size-name">A:</span>
                            <span class="result-size-num">300 мм</span>
                        </div>
                        <div class="result-size-b">
                            <span class="result-size-name">B:</span>
                            <span class="result-size-num">2000 мм</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="result-form">
                    <h3>Введите ваши данные для отправки расчетов</h3>
                    <form method="post" action="/" class="skibidi-form">
                        <input type="hidden" name="action" value="feedback">
                        <div class="result-form-input">
                            <div class="col">
                                <input type="text" required name="skibidi-name" placeholder="Имя" >
                                <p class="err_message"></p>
                            </div>
                            <div class="col">
                                <input type="text" required name="skibidi-phone" placeholder="Телефон" >
                                <p class="err_message"></p>
                            </div>
                            <div class="col">
                                <input type="text" name="skibidi-email" placeholder="E-mail" >
                                <p class="err_message"></p>
                            </div>
                            <div class="col">
                                <input type="submit" value="Отправить" class="btn-yellow skibidi-form-submit transition-none">
                            </div>
                        </div>
                        <div class="skibidiAgree skibidiAgree-calc">
                            <div class="skibidiChekboxAgree checked"></div>
                            <div class="skibidiTextAgree">«Нажимая на кнопку Отправить, я даю <a href="docs/soglasie.pdf" target="_blank">согласие на обработку персональных данных</a>»</div>
                        </div>
                    </form>
                </div>

            </div>
            <div class="col-12">
                <div class="btn-calculate-step">
                    <a href="#" class="btn-next-prev btn-grey"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/calc.js"></script>