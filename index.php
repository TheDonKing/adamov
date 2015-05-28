<?php $number= "8 988 200 30 30" ?>
<!doctype html>
<html class="no-js" lang="ru">
    <head>
        <!--Created by DonKing
    Base template (without user's data) checked by http://s-dt.ru-->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta http-equiv="x-ua-compatible" content="ie=edge"/>
        <meta name="author" lang="ru" content="s-dt.ru"/>
        <meta name="copyright" content="&copy; DTStudio <?php echo date("Y"); ?> "/>
        <meta name="keywords" content="Клиника Рамазановых"/>
        <meta name="robots" content="all"/>
        <meta name="description" content="Клиника Рамазановых">
        <title>Клиника Рамазановых  </title>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>

        <link rel="apple-touch-icon" href="apple-touch-icon.png"/>
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="css/normalize.css"/>
        <link rel="stylesheet" href="css/main.css"/>
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="css/component.css"/>
        <link rel="stylesheet"  href="css/moz.css" />
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="js/modernizr.custom.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="support-note"><!-- проверяем браузер с помощью плагина modernizr -->
            <!--span class="no-cssanimations">CSS анимация не поддерживается в вашем браузере</span-->
            <span class="no-csstransforms">CSS transforms are not supported in your browser</span>
            <!--span class="no-csstransforms3d">CSS 3D трансформация не поддерживается в вашем браузере</span-->
            <span class="no-csstransitions">CSS переходы не поддерживается в вашем браузере</span>
            <span class="note-ie">Используйте более новую версию браузера.</span>
        </div>
        <!-- Add your site or application content here -->
<div class="logoHeader">
    <div class="row">
        <div class="logoHeaderBlockLeft ">
          <img class="animated flip" src="img/logo.png"  />
          <h1>КЛИНИКА<br/>РАМАЗАНОВЫХ</h1>

        </div>
        <div class="logoHeaderBlockRight">
            <p>Медицинское учреждение по лечению
                бесплодия и восполительных процессов<br>
              <b>Авиценна-А.А. Лицензия LO-05-01-000934</b>
            </p>
            <p><i class="fa fa-phone"></i><?php echo $number ?></p>

        </div>
    </div>
</div>
        <div class="slider">
            <div class="row">
                <div class="slideshow">
                    <div class = 'iosSlider'>
                        <div class = 'slider'>
                            <div class = 'item'>
                                <img src="img/slide/1.png" />
                            </div>
                            <div class = 'item'>
                                <img src="img/slide/2.png" />
                            </div>
                            <div class = 'item'>
                                <img src="img/slide/1.png" />
                            </div>
                            <div class = 'item'>
                                <img src="img/slide/2.png" />
                            </div>
                        </div>
                        <div class = 'selectorsBlock'>

                            <div class = 'selectors'>
                                <div class = 'item first selected'></div>
                                <div class = 'item'></div>
                                <div class = 'item'></div>
                                <div class = 'item'></div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="formHeader">
                    <div class="form_bg" class="">
                        <p class="a3">Пройти безболезненную диагностику<br /> </p>
                        <form  method="POST" class="cmxform" id="commentForm"  action="formdata.php">
                            <fieldset class="ui-widget ui-widget-content ui-corner-all">
                                <div class="icon name"><input id="cname" placeholder="Ваше имя"  name="name" class="ui-widget-content" minlength="2" required type="text" /></div><br />

                                <div class="icon phone"><input id="cdate" placeholder="Ваш номер" name="phone" class="ui-widget-content"  type="phone" required /></div><br />
                                <button  class="buttom"  type="submit">Записаться на прием</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="production">
            <div class="row">
                <h2>Прием проводят врачи высшей категории,<br/>
                    обладающие солидным опытом работы:</h2>
            </div>
            <div class="item">
                <section class="main grid3d vertical" id="grid3d"  >

                    <ul class="ch-grid" >
                        <div class="grid-wrap">
                            <div class="grid">
                        <li>
                            <div class="ch-item ch-img-1 ">
                                <div class="ch-info-wrap">
                                    <div class="ch-info">
                                        <div class="ch-info-front ch-img-1 "></div>
                                        <div class="ch-info-back ">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p><a href="#">ГИНЕКОЛОГИЯ</a> </p>
                        </li>
                        <li>
                            <div class="ch-item ch-img-2">
                                <div class="ch-info-wrap">
                                    <div class="ch-info">
                                        <div class="ch-info-front ch-img-2"></div>
                                        <div class="ch-info-back">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p><a href="#">ПРОКТОЛОГ</a> </p>
                        </li>
                        <li>
                            <div class="ch-item ch-img-3">
                                <div class="ch-info-wrap">
                                    <div class="ch-info">
                                        <div class="ch-info-front ch-img-3"></div>
                                        <div class="ch-info-back">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p><a href="#">УРОЛОГИЯ</a> </p>
                        </li>
                        <li>
                            <div class="ch-item ch-img-4">
                                <div class="ch-info-wrap">
                                    <div class="ch-info">
                                        <div class="ch-info-front ch-img-4"></div>
                                        <div class="ch-info-back">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p><a href="#">ЛАБОРАТОРИЯ</a> </p>
                        </li>
                        <li>
                            <div class="ch-item ch-img-5">
                                <div class="ch-info-wrap">
                                    <div class="ch-info">
                                        <div class="ch-info-front ch-img-5"></div>
                                        <div class="ch-info-back">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p><a href="#">ДНЕВНОЙ СТАЦИОНАР</a> </p>
                        </li>
                        <li>
                            <div class="ch-item ch-img-6">
                                <div class="ch-info-wrap">
                                    <div class="ch-info">
                                        <div class="ch-info-front ch-img-6"></div>
                                        <div class="ch-info-back">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p><a href="#">УЗИ ИССЛЕДОВАНИЕ</a> </p>
                        </li>
                            </div>
                        </div>
                    </ul>
                    <div class="content">
                        <div>
                            <div class="dummy-img"><img src="img/contentshow/ginekolog_turciya.jpg"> </div>
                            <h3>МЫ ПОМОЖЕМ С ВАШЕЙ ПРОБЛЕМОЙ</h3>

                            <section class="reviewss">
                                <div class=" wrap ">
                                    <ul class="ch-grid">
                                        <li>
                                            <div style="opacity: 1;" class="hww_one aa1">
                                                <span>ЛЕЧЕНИЕ БЕСПЛОДНОГО БРАКА</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div style="opacity: 1;" class="hww_one aa2">
                                                <span>ЖЕНСКИЕ ВОСПАЛИТЕЛЬНЫЕ ЗАБОЛЕВАНИЯ</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div style="opacity: 1;" class="hww_one aa3">
                                                <span>ЛЕЧЕНИЕ ИНФЕКЦИЙ</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div style="opacity: 1;" class="hww_one aa4">
                                                <span>МЕДИКАМЕНТОЗНОЕ ПРЕРЫВАНИЕ БЕРЕМЕННОСТИ</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div style="opacity: 1;" class="hww_one aa5">
                                                <span>СОВРЕМЕННАЯ КОНТРАЦЕПЦИЯ</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </section>
                            <p class="dummy-text">Гинекологические заболевания отнимают не только женское здоровье,
                                но и психологический комфорт.
                                Именно поэтому мы создали в центре условия, которые располагают
                                к доверительному общению, комфортному обследованию и лечению.
                            </p>
                            <p class="dummy-text-2">
                               <span>ВОСПОЛЬЗУЙТЕСЬ НАШЕЙ МЕДИЦИНСКОЙ ПОМОЩЬЮ,</span><br>
                                ЗАПИШИТЕСЬ НА ПЕРВИЧНЫЙ ПРИЁМ К ГИНЕКОЛОГУ ПРЯМО СЕЙЧАС
                            </p>
                            <span class="number">8 928 570 82 02</span>
                            <div class="name-genekolog">
                                <h3>КТО ВЕДЕТ ПРИЁМ?</h3>
                                <p>Рамазанова Асият Ильясовна<br><span>Гинеколог</span></p>
                            </div>
                        </div>
                        <div>
                            <div class="dummy-img"><img src="img/contentshow/5.jpg"></div>
                            <h3>УЗИ исследование</h3>
                            <p class="dummy-text">Ультразвуковое исследование - это безопасный метод диагностики. При проведении УЗИ радиоактивное излучение отсутствует! В один день можно проводить несколько ультразвуковых исследований одного человека.
                                Для получения точной картины урологических и гинекологических заболеваний крайне необходимо пройти ультразвуковое исследование (УЗИ).
                                Современные аппараты УЗИ диагностирования, которыми оснащен медицинский центр «Клиника Рамазановых» позволяет получить полную картину течения таких болезней как простата, болезни почек, матки и яичников, органов малого таза и живота.
                            </p>
                            <p class="dummy-text">Современное УЗИ оборудование в клинике позволяет получить цифровые фото и мини-фильмы, которые могут быть записаны на CD, flash-память и выдаются пациентам вместе с письменным заключением от врача-специалиста. При дальнейшем лечении или прохождении диагностики любой лечащий врач всегда имеет возможность просмотреть эти снимки на компьютере, также они могут быть переданы через интернет в выбранный другой медицинский центр.
                                Такое заключение, либо в напечатанном виде, либо УЗИ снимки на цифровом носителе, является свидетельством современного класса оборудования и добросовестного выполнения исследования.УЗИ исследования могут носить самостоятельный характер обследования, также они включаются в гинекологический, урологический и в любой другой осмотр пациента.
                            </p>
                        </div>
                        <div>
                            <div class="dummy-img"><img src="img/contentshow/6.jpg"></div>
                            <h3>Урология</h3>
                            <p class="dummy-text">Сохранить здоровье мочеполовой системы - значит обеспечить высокое качество жизни, способность к деторождению, сексуальное долголетие!
                                Консультация уролога необходима для проведения ранней диагностики, своевременной профилактики, и лечения заболеваний мочеполовой системы, как у мужчин, так и у женщин!
                                «Клиника Рамазановых» - это полноценная урологическая диагностика на высоком уровне и уникальные методики лечения мужского бесплодия, эректильной дисфункции, воспалительных заболеваний мочеполовой системы.
                            </p>
                        </div>
                        <div>
                            <div class="dummy-img"><img src="img/contentshow/2.jpg"></div>
                            <h3>Лаборатория</h3>
                            <p class="dummy-text">Современные лабораторные исследования позволяют получить наиболее точные результаты для оценки состояния пациента, что дает возможность впоследствии назначить эффективное лечение.
                                Очень важно регулярно проходить профилактический осмотр, что позволяет предупредить болезни на ранней стадии, не позволяя её распространению.
                                Лабораторное исследование является важной диагностикой любой болезни. Направляет пациента на лабораторные исследования лечащий врач, который оценивает состояние больного и также назначает проведение необходимых анализов.
                                В медицинском центре «Рамазановых» расположена современная лаборатория, оснащенная современными приборами, способными обнаружить патологические процессы в организме.
                                Специальные анализы в лаборатории клиники можно определить не только гормональный, но и иммунный статус человека, такие показатели крайне важны для диагностирования аутоиммунных патологий, нарушений эндокринной системы и менструального цикла, выяснения причин женского и мужского бесплодия..</p>
                            <p class="dummy-text">Лабораторная диагностика позволяет получить результаты анализов в самых разных направлениях, в таких как: гематология, биохимия, иммунология, цитология, а также проводится диагностика на молекулярном уровне.
                                Перед прохождением некоторых лабораторных исследований проводится специальная подготовка пациента, о котором его предупреждает лечащий врач.
                                Самый информативный метод выявления заболевания - это лабораторная диагностика и зачастую результаты таких исследований являются главным фактором выбора тактики лечения болезни.</p>
                        </div>
                        <div>
                            <div class="dummy-img"><img src="img/contentshow/4.jpg"></div>
                            <h3>Дневной стационар</h3>
                            <p class="dummy-text"><b>Условия оказания медицинской помощи</b> </p>
                            <p class="dummy-text">
                               <b>Материально-техническое оснащение:</b> <br>
                                Площадь зданий и число рабочих помещений ,вид постройки ,этажность<br>
                                Площадь главного корпуса- 214,5 .Вид постройки - кирпичная<br>
                                Этажность - 4<br>
                                Техническое состояние зданий : год постройки больницы - 2004 г<br>
                                Состояние ремонта не требуется.<br>
                                <b>Обеспеченность здания коммуникациями :</b>
                                Имеется холодное и горячее водоснабжение ,автономное отопление .<br>
                                <b>2.Обеспеченность медицинскими кадрами</b>
                                Врачи - 6 ; <br>
                                средний мед. Персонал – 4<br>
                                <b>3.Перечень медицинских услуг, выполняемых при оказании стационарной медицинской помощи :</b>
                                Гинекология , в том числе проводимых диагностических исследований: общий анализ крови, мочи, биохимический анализ крови , УЗИ органов.
                                Урология<br>
                                <b>4.Коечный фонд стационара</b>
                                Гинекология - 8 коек<br>
                                Урология - 6 коек<br>
                                Проктология - 6 коек<br>
                                <b>5. Порядок госпитализации</b><br>
                                1) Госпитализация гражданина в больничное учреждение осуществляется в случаях:<br>
                                направления лечащим врачом ;<br>
                                доставки бригадой скорой помощи ;<br>
                                самостоятельного обращения больного по экстренным показаниям .<br>
                                2) Показания к госпитализации :<br>
                                Госпитализация гражданина в дневной стационар осуществляется в случаях: направления лечащим врачом;
                                обострения хронических болезней ;состояния,требующие интенсивной терапии,дневного медицинского наблюдения ;
                                плановой госпитализации-проведение диагностики и лечения,требующие медицинского наблюдения.
                                При госпитализации гражданина в стационарно-поликлиническое учреждение ,ему по клиническим показаниям устанавливается режим и дневное медицинское наблюдение.<br>
                                3) Сроки плановой госпитализации с момента обращения пациента в приемный покой :<br>
                                В случае оказания плановой мед.помощи возможно наличие очередности.
                                При выборе гражданином определенного медицинского учреждения,срок ожидания плановой госпитализации в данное медицинское учреждение ,осуществляется в порядке очередности.
                                При направлении гражданина лечащим врачом на консультацию ,диагностическое исследование или госпитализацию при
                                отсутствии экстренных показаний ,медицинские учреждения,куда направлен пациент ,должны фиксировать очередность в случае,когда срок ожидания пациентом медицинской услуги,превышает 7 календарных дней.
                                Сроки ожидания госпитализации плановых пациентов до 2 суток .<br>
                                4) Все ,что необходимо иметь при себе пациенту при госпитализации :<br>
                                1)- направление
                                - паспорт
                                - действующий полис обязательного медицинского страхования .
                                2)- предметы личной гигиены
                                Иногородним пациентам – копию полиса и копию паспорта

                            </p>
                            <p class="dummy-text">В направлении на плановую госпитализацию должны быть указаны
                                результаты следующих диагностических исследований :
                                - общие анализы : мочи, крови<br>
                                - ЭКГ<br>
                                - УЗИ гениталий<br>
                                Срок действия анализов : все анализы действительны в течении 10 дней<br>
                                Оказываемые услуги :

                                Амбулаторно проводится диагностика и лечение при острых и хронических заболеваниях .
                                При острых заболеваниях помощь гарантируется в день обращения .
                                Пациенты имеют право выбора поликлиники и врача (при его согласии)
                                Прием пациентов осуществляется при предъявлении страхового полиса и документа ,удостоверяющего личность .
                                Прием у врача осуществляется в часы его работы ,в порядке очередности или предварительной записи .
                                Объем диагностических и лечебных мероприятий для конкретного пациента определяется лечащим врачом ,в соответствии со стандартами обследования и лечения .
                                Обязательный объем лечебных и диагностических мероприятий определяется медицинскими стандартами ,утвержденными Минздравом РД.
                                Направление пациента на плановую госпитализацию в дневной стационар ,осуществляется лечащим врачом ,в соответствии с клиническими показаниями ,требующими терапии и наблюдения врача.
                                Иногородним пациентам медицинская помощь предоставляется при предъявлении страхового полиса или паспорта .
                                Без очереди обслуживаются инвалиды и участники ВОВ и приравненные к ним группы; инвалиды ,имеющие 3 и 2 степени ограничения способности к трудовой деятельности, реабилитированые лица ,признанные пострадавшими от политических репрессий , медицинские работники и граждане ,награжденные знаком "Почетный донор России".

                            </p>
                        </div>
                        <div>
                            <div class="dummy-img"><img src="img/contentshow/5.jpg"></div>
                            <h3>Узи исследование</h3>
                            <p class="dummy-text">Ультразвуковое исследование - это безопасный метод диагностики. При проведении УЗИ радиоактивное излучение отсутствует! В один день можно проводить несколько ультразвуковых исследований одного человека.
                                Для получения точной картины урологических и гинекологических заболеваний крайне необходимо пройти ультразвуковое исследование (УЗИ).
                                Современные аппараты УЗИ диагностирования, которыми оснащен медицинский центр «Клиника Рамазановых» позволяет получить полную картину течения таких болезней как простата, болезни почек, матки и яичников, органов малого таза и живота.</p>
                            <p class="dummy-text">
                                Современное УЗИ оборудование в клинике позволяет получить цифровые фото и мини-фильмы, которые могут быть записаны на CD, flash-память и выдаются пациентам вместе с письменным заключением от врача-специалиста. При дальнейшем лечении или прохождении диагностики любой лечащий врач всегда имеет возможность просмотреть эти снимки на компьютере, также они могут быть переданы через интернет в выбранный другой медицинский центр.
                                Такое заключение, либо в напечатанном виде, либо УЗИ снимки на цифровом носителе, является свидетельством современного класса оборудования и добросовестного выполнения исследования.УЗИ исследования могут носить самостоятельный характер обследования, также они включаются в гинекологический, урологический и в любой другой осмотр пациент</p>
                        </div>
                        <span class="loading"></span>
                        <span class="icon close-content"></span>
                    </div>
                </section>

            </div>
        </div>
        <div class="paralax">
            <div class="slide" id="slide3" data-slide="3" data-stellar-background-ratio="3.5">
                <img  src="img/paralax/psdtuts.png" data-stellar-ratio="1.5" data-stellar-vertical-offset="-53" style="left:0 !important; "   alt="">

            </div><!--End Slide 3-->
        </div>
        <div class="uslugi">
            <div class="row">
            <section class="hww">
                <h2>В НАШЕЙ КЛИНИКЕ Вам проведут все необходимые исследования и назначат
                    подходящее лечение.
                    Вам предложат профессиональную медицинскую помощь </h2>
                <div class="wrap scroll-animate">
                    <ul class="ch-grid">
                        <li>
                            <div style="opacity: 1;" class="hww_one animation h1">
                                <span>определение проходимости маточных труб</span>
                            </div>
                        </li>
                        <li>
                            <div style="opacity: 1;" class="hww_one animation h2">
                                <span>ИНТИМНОЕ ОМОЛОЖЕНИЕ</span>
                            </div>
                        </li>
                        <li>
                            <div style="opacity: 1;" class="hww_one animation h3">
                                <span>ПОДГОТОВКА СУПРУЖЕСКИХ ПАР К ЭКО</span>
                            </div>
                        </li>
                        <li>
                            <div style="opacity: 1;" class="hww_one animation h4 ">
                                <span>ПРОВЕДЕНИЕ СЕАНСОВ ОЗОНОТЕРАПИИ</span>

                            </div>
                        </li>

                    </ul>
                    <div class="clear"></div>
                </div>
            </section>
            </div>
        </div>
        <div class="uslugiFooter ">
            <div class="row">
                <section class="reviews">

                    <div class=" wrap scroll-animate">
                <ul class="ch-grid">
                    <li>
                        <div style="opacity: 1;" class="hww_one animation z1">
                            <span>Точная диагностика</span>
                        </div>
                    </li>
                    <li>
                        <div style="opacity: 1;" class="hww_one animation z2">
                            <span>Индивидуальный подход</span>
                        </div>
                    </li>
                    <li>
                        <div style="opacity: 1;" class="hww_one animation z3">
                            <span>Вимание и чуткость к пациентов</span>
                        </div>
                    </li>
                </ul>
                    </div>
                <img src="img/uslugiheader.png">
                </section>
                <h2>Мы считаем, что эффективность лечения зависит от индивидуального подхода врача и от его профессионализма, это позволяет добиться успеха в лечении порой запущенных и трудноподдающихся лечению воспалительных процессов.
                    Приходите к нам в «Клинику Рамазановых» и мы решим Вашу проблему.  </h2>
            </div>
        </div>
        <div class="sertificat">
            <div class="row">
                <ul id="flexiselDemo3">
                    <li><img src="img/flexslider/1.jpg" /></li>
                    <li><img src="img/flexslider/2.jpg" /></li>
                    <li><img src="img/flexslider/3.jpg" /></li>
                    <li><img src="img/flexslider/4.jpg" /></li>
                </ul>
            </div>
        </div>

        <div class="form">
            <div class="row">
                <div class="textForm">
                    <h2>Контакты:</h2>
                    <p><span>Адрес:</span>
                        Россия, г. Махачкала,  <br />
                        ул. Лермонтова, 2 А (рядом со школой № 16)<br/>
                        Тел. регистратуры: 8 (8722) 67-64-47<br/>
                        Тел. руководителя: 988-200-30-30, 90-40-00<br/>
                        Наш центр работает: С 8.00 до 16.00<br/>
                        Суббота –  воскресенье выходной<br/>
                        E-mail:  <a href="mailto:ramazanovi.ru@mail.ru" target="_blank">ramazanovi.ru@mail.ru</a>
                        <br/>
                    </p>
                </div>
                <form class="contact-form" action="formdata.php" method="POST" name="form">
                    <h3>Форма обратной связи:</h3>
                    <fieldset>
                        <label>
                            <input type="text" value="Имя" onBlur="if(this.value=='')  this.value='Имя'" onFocus="if(this.value =='Имя' ) this.value=''"  name="name"  maxlength="20"/>
                        </label>
                        <label>
                            <input type="text" value="Email" onBlur="if(this.value=='') this.value='Email'" onFocus="if(this.value =='Email' ) this.value=''" name="mail" maxlength="25"/>
                        </label>
                        <label>
                            <input type="text" value="Телефон" onBlur="if(this.value=='') this.value='Телефон'" onFocus="if(this.value =='Телефон' ) this.value=''" name="phone" maxlength="13"/>
                        </label>
                        <textarea onBlur="if(this.value=='') this.value='Сообщение'" onFocus="if(this.value =='Сообщение' ) this.value=''" name="message" >Сообщение</textarea>

                        <div class="buttons-wrapper">
                            <input type="submit" id="inp" style="color:#000; width:175px;"  value="Отправить">

                        </div>
                    </fieldset>
                </form>
            </div>
        </div>

        <div class="map">
            <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=SzjT8PL3PmZemvT9Ofa29OAsoqn0I_jb&width=100%&height=450"></script>
        </div>

        <div class="footer">
            <div class="row">
                <p>© Клиника камазановых<br>
                    2015 г.</p>
                <p><?php echo $number ?></p>
                <p class="dt"><a href="http://www.s-dt.ru" target="_blank" >Разработано в DTStudio</a> </p>
            </div>
        </div>




        <!-- Тут подключаем скрипты -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.4.2.min.js"><\/script>')</script>
        <script src="js/jquery.js"></script>
        <!-- Paralax -->
        <script type="text/javascript" src="js/paralax/jquery.stellar.min.js"></script>
        <!-- Анимация 2 как мы работаем -->
        <script type="text/javascript" src="js/animation/scripts.js"></script>
        <script type="text/javascript" src="js/animation/jquery.js"></script>
        <!-- Grid3D -->
        <script src="js/grid3d/classie.js"></script>
        <script src="js/grid3d/helper.js"></script>
        <script src="js/grid3d/grid3d.js"></script>
        <script>
            new grid3D( document.getElementById( 'grid3d' ) );
        </script>
        <!-- iosSlider plugin -->
        <script src = "js/jquery.iosslider.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {

                $('.iosSlider').iosSlider({
                    snapToChildren: true,
                    desktopClickDrag: true,
                    keyboardControls: true,
                    navNextSelector: $('.next'),
                    navPrevSelector: $('.prev'),
                    navSlideSelector: $('.selectors .item'),
                    onSlideChange: slideChange
                });

            });

            function slideChange(args) {

                $('.selectors .item').removeClass('selected');
                $('.selectors .item:eq(' + (args.currentSlideNumber - 1) + ')').addClass('selected');

            }
        </script>
        <!-- Проверка формы -->
        <script src="js/jquery.validate.js" type="text/javascript"></script>
        <script src="js/plugins.js"></script>
        <!--Scroling-->
        <script src="js/jquery.nicescroll.js"></script>
        <script>
            $(document).ready(function() {
                $("body").niceScroll();
            });
        </script>

        <!-- Карусель -->
        <script type="text/javascript" src="js/flexslider/jquery.flexisel.js"></script>
        <script type="text/javascript">
            $(window).load(function() {
                $("#flexiselDemo3").flexisel({
                    visibleItems: 3,
                    animationSpeed: 1000,
                    autoPlay: true,
                    autoPlaySpeed: 3000,
                    pauseOnHover: true,
                    enableResponsiveBreakpoints: true,
                    responsiveBreakpoints: {
                        portrait: {
                            changePoint:480,
                            visibleItems: 1
                        },
                        landscape: {
                            changePoint:640,
                            visibleItems: 2
                        },
                        tablet: {
                            changePoint:768,
                            visibleItems: 3
                        }
                    }
                });
            });
        </script>

        <script type="text/javascript" src="js/main.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
