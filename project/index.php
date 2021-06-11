<?php
include("header.php");
?>
<body>
    <div class="preloader"></div>
    <div class="container-header">
        <div class="container-header-box">
            <div class="container-header-box-row wrapper">
                <div class="container-header-box-row-left">
                    <a href="#" class="animate-show logo" id="logo" class="logo"></a>
                    <h1 class="animate-show">Разработка сайтов любой сложности</h1>
                    <div class="animate-show text">
                        <p>FastStart - команда опытных профессионалов по реализации задач любой сложности в области web-разработки и программирования. В кратчайшие сроки мы реализуем все ваши идеи и мысли и дадим мощный толчок вашему бизнесу!</p>
                    </div>
                    <div class="animate-show btn-container">
                        <a href="#" class="btn-about">О нас</a>
                        <a href="#" class="btn-cost">Стоимость</a>
                    </div>
                </div>
                <div class="container-header-box-row-right">
                    <div class="animate-show signup-header">
                        <h3>Свяжитесь со мной</h3>
                            <form action="/handlers/signupHeader.php" method="POST" class="signup-form">
                                <input  name="" id="name" type="text" placeholder="Мое имя" required>
                                <input  name="" id="email" type="email" placeholder="Мой e-mail" required> 
                                <input type="submit" class="btn" value="Отправить запрос">
                            </form>
                        <p>Нажимая кнопку "ОТПРАВИТЬ ЗАПРОС" Вы даете согласие на обработку личных данных в соотстветствии правилами политики конфиденциальности.</p>
                        <div class="signup-header-message"></div>
                    </div>
                </div>
            </div>     
        </div>
    </div>
 <header>
        <div class="container-menu">
            <div class="container-menu-box wrapper">
                <a href="#" class="logo-menu" id="logo" class="animation-show logo"></a>
                <nav>
                    <ul>
                        <li><a class="about-ua" href="#aboutUs">О нас</a></li>
                        <li><a  class="advantage" href="#advantage">Преимущества</a></li>
                        <li><a  class="what-to-order" href="#howToOrder">Как заказать</a>
                        <li><a  class="cost" href="#cost">Стоимость</a></li>
                        <li><a  class="reviews" href="#reviews">Отзывы</a></li>
                        <li><a  class="contacts" href="#contacts">Контакты</a></li>
                    </ul>
                </nav>
                <div class="burger">
                    <div class="burger-line"></div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="contant">
            <div class="contant-box wrapper">
                <div class="contant-box-container isee" id="aboutUs">
                    <div class="animate-show contant-box-container-left">
                        <div class="animate-show contant-box-container-left-pic"></div>
                    </div>
                    <div class="animate-show contant-box-container-right">
                        <h2>Наша главная задача - сделать ваш бизнес в интернете уникальным.</h2>
                        <p>
                            Для нас нет сложных задач. Мы разрабатываем не просто интернет-ресурсы для бизнеса, а создаем уникальные
                            сайты и порталы, которые максимально удовлетворяют потребности любого, даже самого требовательного, пользователя.
                        </p>
                        <div class="btn-main"><a href="#">Подробнее</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="feature">
            <div class="feature-container wrapper">
                <div class="feature-container-box isee" id="advantage">
                    <div class="feature-container-box-heading">
                        <h2>Превращаем самые невероятные идеи в реальность</h1>
                        <p>Если вы еще не знаете чего хотите, то мы придумаем все за вас!</p>
                    </div>
                    <div class="feature-container-box-about">
                        <div class="feature-container-box-about-img">
                            <div class="animate-show feature-container-box-about-img-pic"></div>
                        </div>
                        <div class="feature-container-box-about-text">
                            <div class="feature-container-box-about-text-images">
                                <i class="animate-show pe-7s-notebook"></i>
                                <div class="inner">
                                    <h3>Уникальный подход</h3>
                                    <p>Мы подходим к идеям разработки с самых необычных сторон, что позволяет удивлять будущих пользователей.</p>
                                </div>
                            </div>
                            <div class="feature-container-box-about-text-images">
                                <i class="animate-show pe-7s-cash"></i>
                                <div class="inner">
                                    <h3>Монетизация</h3>
                                    <p>Правильный дизайн быстро приводит потенциальных клиентов к покупке, поэтому наша команда уделяет этому самую важную роль.</p>
                                </div>
                            </div>
                            <div class="feature-container-box-about-text-images">
                                <i class="animate-show pe-7s-cart"></i>
                                <div class="inner">
                                    <h3>Повышение функционала</h3>
                                    <p>Разработанные нами проекты всегда готовы к дополнительным расширеням функционала. За счет гибкости разработки, мы в кратчайшие добавим новые модули и решения.</p>
                                </div>
                            </div>
                            <div class="animate-show feature-container-box-about-text-images">
                                <i class="animate-show pe-7s-users"></i>
                                <div class="inner">
                                    <h3>Оптимизация процессов</h3>
                                    <p>Весь оборот и отчетность по клиентам будут доступны в специальной системе userBox, которая разработана нашей командой для оптимизации процессов работы с клиентами.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="feature-2">
            <div class="feature-2-container wrapper">
                <div class="feature-2-container-box isee" id="howToOrder">
                    <div class="animate-show feature-2-container-box-left">
                        <h2>Качественный сайт в разумные сроки</h2>
                        <p>За счёт оптимизации внутренних процессов, многие работы по разработке сайта выполняются параллельно.
                            Это позволяет нам сократить время выкладки сайта, не увеличивая при этом итоговую цену.</p>
                        <p>Стоимость разработки сайта считается исходя из необходимого функционала и трудозатрат.
                            При ограниченном бюджете есть возможность упростить некоторые этапы или изменить перечень функционала.
                            Стоимость создания проекта  начинается от 15 000 руб.</p>
                        <div class="btn-feature-2"><a href="">Узнать стоимость</a></div>
                    </div>
                    <div class="feature-2-container-box-right">
                        <div class="animate-show feature-2-container-box-right-pic"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="business">
            <div class="business-container">
                <div class="business-container-box">
                    <div class="business-container-box-content wrapper">
                        <div class="business-container-box-content-text">
                            <h2 class="animate-show">Хотите узнать, как развить свой бизнес?</h2>
                            <p class="animate-show">Свяжитесь с нами и мы расскажем о том, что подойдет именно для вашего бизнеса и какие инструменты мы будем использовать.</p>
                            <a href="#" class="animate-show business-container-box-content-btn">Связаться с нами</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="package isee" id="cost">
            <div class="package-container wrapper">
                <div class="package-container-text">
                    <h2 class="animate-show">Стоимость</h2>
                    <div class="animate-show line"></div>
                </div>
                <div class="package-container-option">
                    <div class="package-container-option-box">
                        <div class="animate-show package-container-option-box-price">
                            <div class="package-container-option-box-price-heading">
                                <i class="pe-7s-radio"></i>
                                <h3>Сайт-визитка</h3>
                            </div>
                            <div class="package-container-option-box-price-group">
                                <span class="dollar">от</span>
                                <span class="price">15</span>
                                <span class="time">тыс. руб.</span>
                            </div>
                            <ul class="feature-price">
                                <li><strong>1</strong> страница</li>
                                <li><strong>Эксклюзивный</strong> дизайн</li>
                                <li><strong>Адаптивная</strong> верстка</li>
                                <li><strong>Внутренняя</strong> оптимизация</li>
                                <li class="userBox">Платформа userBox</li>	
                            </ul>
                            <div class="package-container-option-box-price-footer">
                                <a class="btn-price" href="#">Заказать</a>
                            </div>
                        </div>
                        <div class="animate-show package-container-option-box-price">
                            <div class="package-container-option-box-price-heading">
                                <i class="pe-7s-joy"></i>
                                <h3>Сайт компании</h3>
                            </div>
                            <div class="package-container-option-box-price-group">
                                <span class="dollar">от</span>
                                <span class="price">40</span>
                                <span class="time">тыс. руб.</span>
                            </div>
                            <ul class="feature-price">
                                <li>до <strong>10 </strong>страниц</li>
                                <li><strong>Эксклюзивный</strong> дизайн</li>
                                <li><strong>Адаптивная</strong> верстка</li>
                                <li><strong>Внутренняя</strong> оптимизация</li>
                                <li class="userBox">Платформа userBox</li>	
                            </ul>
                            <div class="package-container-option-box-price-footer">
                                <a class="btn-price" href="#">Заказать</a>
                            </div>
                        </div>
                        <div class="animate-show package-container-option-box-price">
                            <div class="package-container-option-box-price-heading">
                                <i class="pe-7s-science"></i>
                                <h3>Магазин</h3>
                            </div>
                            <div class="package-container-option-box-price-group">
                                <span class="dollar">от</span>
                                <span class="price">220</span>
                                <span class="time">тыс. руб.</span>
                            </div>
                            <ul class="feature-price">
                                <li><strong>Эксклюзивный</strong> дизайн</li>
                                <li><strong>Адаптивная</strong> верстка</li>
                                <li><strong>Внутренняя</strong> оптимизация</li>
                                <li><strong>Маркейтинг</strong> решения</li>
                                <li>Платформа<strong> userBox</strong></li>	
                            </ul>
                            <div class="package-container-option-box-price-footer">
                                <a class="btn-price" href="#">Заказать</a>
                            </div>
                        </div>
                            <div class="animate-show package-container-option-box-price">
                                <div class="package-container-option-box-price-heading">
                                    <i class="pe-7s-tools"></i>
                                    <h3>Интернет-портал</h3>
                                </div>
                                <div class="package-container-option-box-price-group">
                                    <span class="dollar">от</span>
                                    <span class="price">500</span>
                                    <span class="time">тыс. руб.</span>
                                </div>
                                <ul class="feature-price">
                                    <li><strong>Эксклюзивный</strong> дизайн</li>
                                    <li><strong>Адаптивная</strong> верстка</li>
                                    <li><strong>Внутренняя</strong> оптимизация</li>
                                    <li><strong>Маркейтинг</strong> решения</li>
                                    <li>Платформа<strong> userBox</strong></li>	
                                </ul>
                                <div class="package-container-option-box-price-footer">
                                    <a class="btn-price" href="#">Заказать</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <section>
        <div class="client">
            <div class="client-container">
                <div class="client-container-text">
                    <h2 class="animate-show">Наши клиенты</h2>
                    <div class="animate-show line"></div>
                </div>
                <div class="client-container-box">
                    <div class="client-container-box-pic">
                        <div class="animate-show client-container-box-pic-client pic-finnair"></div>
                        <div class="animate-show client-container-box-pic-client pic-event"></div>
                        <div class="animate-show client-container-box-pic-client pic-letidor"></div>
                        <div class="animate-show client-container-box-pic-client pic-viking"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="reviews isee" id="reviews">
            <div class="reviews-container wrapper">
                <div class="reviews-container-text">
                    <h2 class="animate-show">Отзывы</h2>
                    <div class="animate-show line"></div>
                </div>
                <div class="reviews-container-slider">
                    <div class="animate-show reviews-container-slider-box">
                        <div class="reviews-container-slider-box-item"></div>
                        <div class="reviews-container-slider-box-item normal">
                            <div class="reviews-container-slider-box-item-client baklanov"></div>
                            <div class="reviews-container-slider-box-item-client-box">
                                <p>“Выражаем благодарность компании за работу над улучшением нашего сайта finnair.com Я высоко оцениваю качество выполненных работ по анализу потребностей пользователей и проектированию интерфейса новой системы личных сообщений. Считаю необходимым отдельно упомянуть ответственность по отношению к срокам выполнения поставленных задач и неукоснительное следование целям заказчика.”</p>
                            </div>
                            <div class="reviews-container-slider-box-item-client-info">
                                <p>Илья Бакланов, <span class="company">Finnair</span></p>
                            </div>
                        </div>
                        <div class="reviews-container-slider-box-item normal">
                            <div class="reviews-container-slider-box-item-client starik"></div>
                            <div class="reviews-container-slider-box-item-client-box">
                                <p>“С начала нашего сотрудничества чувствуется ответственное отношение менеджера к нашему проекту. В процессе своей деятельности специалисты компании подтвердили свой высокий профессиональный статус и оперативность в решении проблем. Нам отвечали своевременно на все возникающие вопросы, предоставляли консультации и рекомендации относительно нашего сайта. Чувствуется, что в данной компании работают настоящие профессионалы своего дела.”</p>
                            </div>
                            <div class="reviews-container-slider-box-item-client-info">
                                <p>Анна Старик, <span class="company">Eventworld</span></p>
                            </div>
                        </div>
                        <div class="reviews-container-slider-box-item  normal">
                            <div class="reviews-container-slider-box-item-client vorobiov"></div>
                            <div class="reviews-container-slider-box-item-client-box">
                                <p>“Был проведен комплексный анализ портала в плоскостях юзабилити и SEO, по результатам которого предоставлен развернутый экспертный отчет с рекомендациями по оптимизации визуальной и текстовой составляющих. Итоговые материалы были достойно оформлены и написаны доступным и понятным языком. Полученный документ лег в основу измененной концепции работы над сайтом "Viking Line"”</p>
                            </div>
                            <div class="reviews-container-slider-box-item-client-info">
                                <p>Денис Воробьев,<span class="company">Viking Line</span></p>
                            </div>
                        </div>
                        <div class="reviews-container-slider-box-item"></div>
                    </div>
                </div>
                <div class="animate-show bullets-box">
                    <div class="bullets-box-item active"></div>
                    <div class="bullets-box-item"></div>
                    <div class="bullets-box-item"></div>       
                    </div>
                </div>
            </div>
        </div>
        <div class="contact isee" id="contacts">
            <div class="contact-container">
                <div class="contact-container-box wrapper">
                    <div class="contact-container-box-row">
                        <div class="animate-show contact-container-box-row-left">
                            <h2><span class="high">Свяжитесь</span> с нами</h2>
                            <ul class="address">
                                <li><i class="pe-7s-map-marker"></i>Большая Спасская ул. 12</br>Москва, Россия</li>
                                <li><i class="pe-7s-phone"></i>8(495)626-46-00</li>
                                <li><i class="pe-7s-mail"></i><a href="mailto:moscow@faststart.ru">moscow@faststart.ru</a></li>
                                <li><i class="pe-7s-look"></i><a href="#">www.faststart.ru</a></li>
                            </ul>
                        </div>
                        <div class="animate-show contact-container-box-row-right">
                            <form method="POST" action="/handlers/form-contact.php" class="from-contact">
                                <input type="text" name="name" placeholder="Ваше имя" required/>
                                <input type="text" name="email" placeholder="Ваш Email" required/>			
                                <textarea class="animate-show" name="comment" placeholder="Я хочу..." required></textarea>
                                <button class="button-form" type="submit" name="submit" value="Отправить запрос">Отправить запрос</button>
                            </form>	
                            <div class="contact-container-box-row-right-message"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include("footer.php") ?>
