<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="description" content="Список отчетов">
  <meta name="keywords" content="Список отчетов, Тептар, тептар">
  <link rel="stylesheet" href="./assets/css/style.css">
  <script src="../jquery-3.6.0.min.js"></script>
    <!--[if IE 9]>
    <link rel="stylesheet" href="./assets/css/style-for-ie9.css">
    <![endif]-->
  <script type="text/javascript" src="assets/js/reports.js"></script>
  <script type="text/javascript"  src="../reusable-blocks/menu/menu.js"></script>
  <script type="text/javascript"  src="../reusable-blocks/menu/__main.js"></script>
  <script type="text/javascript"  src="../reusable-blocks/menu/__header.js"></script>
  <script type="text/javascript"  src="../reusable-blocks/menu/__body.js"></script>
  <script type="text/javascript"  src="../reusable-blocks/menu/__footer.js"></script>
  <script type="text/javascript"  src="../reusable-blocks/header/header.js"></script>
  <script type="text/javascript"  src="../reusable-blocks/header/__main.js"></script>
      <script type="text/javascript"  src="./blocks/content/body/body.js"></script>
  <script type="text/javascript" src="./blocks/content/body/__reports-title.js"></script>
  <script type="text/javascript"  src="./blocks/content/body/__reports.js"></script>
  <script type="text/javascript"  src="./blocks/content/body/__reports-footer.js"></script>
  <script type="text/javascript"  src="./blocks/content/content.js"></script>
  <title>Список отчетов</title>
</head>
<body>

      <!-- Меню -->
      <?php  include '../reusable-blocks/menu/menu.php'; ?>
      <!-- Меню -->
      
      <div class="content">

      <!-- header -->
      <?php  include '../reusable-blocks/header/header.php'; ?>
      <!-- header -->

        <div class="body">
          <div class="reports-title">
            <div class="reports-title__my-reports">
              <div class="reports-title__my-reports__text">
                <h1>Мои отчеты</h1>
              </div>
              <div class="reports-title__my-reports__btn">
                <button class="add-report-btn">
                  <img src="./assets/img/svg/add_ring_light.svg" alt="add_ring_light">
                  Добавить отчет
                </button>
              </div>
            </div>
            <div class="sort">
              <span class="sort__toggle">
                Сортировать по: <span class="sort__value">Году</span> <span class="icon-sort sort__icon">
              </span>
              <div class="sort__block none">
                <div class="sort__block__element"><span class="icon-folder_alt sort-element year"></span>По годам</div>
                <div class="sort__block__element"><span class="icon-save_light sort-element month"></span>По месяцам</div>
                <div class="sort__block__element"><span class="icon-save_light sort-element important"></span>По важности</div>
                <div class="sort__block__element"><span class="icon-save_light sort-element views"></span>По просмотрам</div>
              </div>
            </div>
          </div>
          <div class="reports">
            <div class="reports-list">
                <div style="margin-bottom: 20px;" class="reports-list__title">
                  <div class="reports-list__title__element">
                      <input type="checkbox" id="first-checkbox" class="reports-list__title__checkbox">
                      <label for="first-checkbox"></label>
                    <img class="report-table-header-img" src="./assets/img/svg/setting.svg" alt="setting">
                    Название
                  </div>
                  <div class="reports-list__title__element">
                    Эффективность
                  </div>
                  <div class="reports-list__title__element">
                    Крайний срок
                  </div>
                  <div class="reports-list__title__element">
                    Помощник
                  </div>
                  <div class="reports-list__title__element">
                    Ответственный
                  </div>
            </div>

                <div class="reports__body">

                    <div class="reports__body__line" style="display: none;">
                        <div class="reports__body__line__name">
                            <input type="checkbox" id="checkbox-0" class="reports__body__checkbox">
                            <i class="icon-menu reports__body__i"></i>
                            <span>Отчет 2021<span>
                        </div>
                        <div class="reports__body__line__activity"></div>
                        <div class="reports__body__line__term"></div>
                        <div class="reports__body__line__assistant">
                            <div class="name-block">
                                <img class="reports__body__avatar"><span class="name"></span>
                            </div>
                        </div>
                        <div class="reports__body__line__responsible">
                            <div class="name-block">
                                <img src="assets/img/avatar.jpg" class="reports__body__avatar"><span class="name"></span>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
          </div>
          <div class="reports-footer none">
              <div class="reports-footer__action">
                <span>Выгрузить</span>
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
                <img width="24" height="24" src="./assets/img/svg/arrow_drop_down_black.svg" alt="&#x2193">
              </div>
              <div class="reports-footer__submit__button">
                <button>Применить</button>
              </div>
            <div class="reports-footer__count">Отмечено 2/9</div>
          </div>
        </div>
      </div>

</body>
</html>
