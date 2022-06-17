<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="description" content="Форма создания отчета">
  <script src="../jquery-3.6.0.min.js"></script>
  <!--[if lte IE 11]>
        <link rel="stylesheet" href="./assets/css/style-for-ie9.css">
  <![endif]-->
  <meta name="keywords" content="Список отчетов, Тептар, тептар">
  <link type="text/css" rel="stylesheet" href="./assets/css/style.css">
  <script src="../reusable-blocks/menu/menu.js"></script>
  <script src="../reusable-blocks/menu/__main.js"></script>
  <script src="../reusable-blocks/menu/__header.js"></script>
  <script src="../reusable-blocks/menu/__body.js"></script>
  <script src="../reusable-blocks/menu/__footer.js"></script>
  <script src="../reusable-blocks/header/header.js"></script>
  <script src="../reusable-blocks/header/__main.js"></script>
  <script src="./blocks/content/body/body.js"></script>
  <script src="./blocks/content/body/reports-title.js"></script>
  <script src="./blocks/content/body/__body.js"></script>
  <script src="./blocks/content/body/__footer.js"></script>
  <script src="./blocks/content/body/__side-block.js"></script>
  <script src="./blocks/content/content.js"></script>
  <script src="../../"></script>
  <title>Просмотр отчета</title>
</head>
<body>

    <?php include "../reusable-blocks/districts-menu/menu.php";?>

      <div class="content">
        
          <?php include '../reusable-blocks/header/header.php';?>

        <div class="body">
          <div class="body__back-button">
            <a href="#">
              <span class="icon-expand_left_right body__back__arrow"></span>
              Вернуться
            </a>
            <div class="body__back-button__icons">
              <a href="#">
              <span class="body__back-button__icon">
                <span class="icon-trophy"></span>
                Рейтинг
              </span>
              </a>
              <a href="#">
              <span class="body__back-button__icon">
                <span class="icon-save_light"></span>
                Диск
              </span>
              </a>
            </div>
          </div>
          <div class="reports-title">
            <div class="reports-title__my-reports">
              <div class="reports-title__my-reports__text">
                <h1>Отчет 2022</h1>
              </div>
              <div class="reports-title__my-reports__btn">
              </div>
            </div>
          </div>
          <div class="reports-body">
            <div class="reports-body__content">
              <div class="reports-body__content__main">
                <div class="reports-body__header">
                  <div class="reports-body__header__buttons">
                    <span class="reports-body__header__edit">Редактировать</span>
                    <span class="reports-body__header__print">Печать</span>
                  </div>
                  <div class="reports-body__content__header__download">
                    <div class="reports-footer__action">
                      <span>Выгрузить</span>
                      <span class="icon-arrow_drop_down arrow_icon"></span>
                      <div class="reports-footer__action__sort none">
                        <div class="variables excel">
                          <img width="30" height="30" src="./assets/img/svg/xlsx.svg">
                          Выгрузить в Excel
                        </div>
                        <div class="variables word">
                          <img width="30" height="30" src="./assets/img/svg/word.svg">
                          Выгрузить в Word
                        </div>
                        <div class="variables pdf">
                          <img width="30" height="30" src="./assets/img/svg/pdf.svg">
                          Выгрузить в PDF
                        </div>
                    </div>
                  </div>
                  
                  </div>
                </div>
                <div class="reports-body__info">

                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Sed id semper risus in hendrerit gravida rutrum. Leo integer malesuada nunc vel risus commodo viverra maecenas accumsan.</p>

                </div>
                <div class="reports-form__body__icons">
                  <a href="#">
                    <div class="reports-form__body__icon">
                      <img src="../assets/img/svg/import_light.svg">
                      Файл
                    </div>
                  </a>
                </div>
              </div>
              <div class="reports-body__content__activity">
                <div class="reports-body__content__last-activity">
                  <span>Последняя активность</span>
                </div>
                <div class="reports-body__content__changes">
                
              <?php include "./blocks/content/activity/activity.php"; ?>

            </div>
            <div class="reports-body__side-block">
              <div class="reports-body__side-block__status">
                <div class="side-block__header">
                  <span class="side-block__header__status">Завершен</span>
                  <span class="side-block__header__date">24.05.2022</span>
                </div>
                <div class="side-block__body">
                  <ul class="side-block__body__names">
                    <li>Крайний срок:</li>
                    <li>Создание отчета:</li>
                    <li>Дата сдачи:</li>
                    <li>Оценка:</li>
                  </ul>
                  <ul class="side-block__body__values">
                    <li class="side-block__body__term-date">20.05.2022 18:33:33</li>
                    <li class="side-block__body__create-date">20.05.2022 18:33:33</li>
                    <li class="side-block__body__final-date">20.05.2022 18:33:33</li>
                    <li class="side-block__body__rating">
                      <span class="icon-star side-block__star"></span>
                      <span class="icon-star side-block__star"></span>
                      <span class="icon-star side-block__star"></span>
                      <span class="icon-star side-block__star"></span>
                      <span class="icon-star side-block__star"></span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="reports-body__side-block__table">
                <div class="side-block__header">Таблица</div>
                <div class="side-block__body">
                  <span class="icon-darhboard_alt"></span>
                  <a href="#">Смотреть таблицу</a>
                </div>
              </div>
              <div class="reports-body__side-block__responsible">
                <div class="side-block__header">Ответственный</div>
                <div class="side-block__body">
                  <img src="../assets/img/avatar.jpg" alt="">
                  <div class="responsible__info">
                    <span class="responsible__name">Ибрагим Грозный</span>
                    <span class="responsible__post">Районный сотрудник</span>
                  </div>
                </div>
              </div>
              <div class="reports-body__side-block__assistant">
                <div class="side-block__header">Сотрудник</div>
                <div class="side-block__body">
                  <img src="../assets/img/avatar.jpg" alt="">
                  <div class="assistant__info">
                    <span class="assistant__name">Ибрагим Грозный</span>
                    <span class="assistant__post">Районный сотрудник</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


</body>
</html>