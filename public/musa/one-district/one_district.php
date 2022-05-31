<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="description" content="Список отчетов">
  <meta name="keywords" content="Список отчетов, Тептар, тептар">
  <link type="text/css" rel="stylesheet" href="./assets/css/style.css">
  <script type="text/javascript" src="./assets/js/script.js"></script>
  <script src="../reusable-blocks/menu/menu.js"></script>
  <script src="../reusable-blocks/menu/__main.js"></script>
  <script src="../reusable-blocks/menu/__header.js"></script>
  <script src="../reusable-blocks/menu/__body.js"></script>
  <script src="../reusable-blocks/menu/__footer.js"></script>
  <script src="../reusable-blocks/header/header.js"></script>
  <script src="../reusable-blocks/header/__main.js"></script>
  <script type="text/javascript"  src="./blocks/content/body/body.js"></script>
  <script type="text/javascript" src="./blocks/content/body/__reports-title.js"></script>
  <script type="text/javascript"  src="./blocks/content/body/__reports.js"></script>
  <script type="text/javascript"  src="./blocks/content/body/__reports-footer.js"></script>
  <script type="text/javascript"  src="./blocks/content/content.js"></script>
  <title>Район</title>
</head>
<body>

      <?php include "../reusable-blocks/menu/menu.php";?>
      <div class="content">
        <?php include "../reusable-blocks/header/header.php";?>
        <div class="body">
          <div class="body__back-button">
            <a href="#">
              <img width="16" height="16" src="../assets/img/svg/expand_left_right.svg" alt="&#8249">
              Вернуться к списку районов
            </a>
          </div>
          <div class="reports-title">
            <div class="reports-title__my-reports">
              <div class="reports-title__my-reports__text">
                <h1>Грозный</h1>
              </div>
              <div class="reports-title__my-reports__btn">
              </div>
            </div>
            <div class="sort">
              <span class="sort__toggle">
                Сортировать по:
                <span class="sort__toggle__time">Году</span>
                <img src="../assets/img/svg/sort.svg">
              </span>
              <div class="sort__block none">
                <div class="sort__block__element"><img src="../assets/img/svg/folder_alt.svg">По годам</div>
                <div class="sort__block__element"><img src="../assets/img/svg/save.svg">По месяцам</div>
                <div class="sort__block__element"><img src="../assets/img/svg/save.svg">По важности</div>
                <div class="sort__block__element"><img src="../assets/img/svg/save.svg">По просмотрам</div>
              </div>
            </div>
          </div>
          <div class="reports">
            <div class="reports-list">
                <div class="reports-list__title">
                  <div class="reports-list__title__element">
                    <input type="checkbox" class="reports-list__title__checkbox">
                    <img class="report-table-header-img" src="../assets/img/svg/setting.svg" alt="setting">
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
              <div class="reports-list__body">
              </div>
            </div>
          </div>
          <div class="reports-footer none">
              <div class="reports-footer__action">
                Выгрузить
                <div class="reports-footer__action__sort none">
                  <div class="variables" value="excel">
                    <img width="30" height="30" src="../assets/img/svg/xlsx.svg">
                    Выгрузить в Excel
                  </div>
                  <div class="variables" value="word">
                    <img width="30" height="30" src="../assets/img/svg/word.svg">
                    Выгрузить в Word
                  </div>
                  <div class="variables" value="pdf">
                    <img width="30" height="30" src="../assets/img/svg/pdf.svg">
                    Выгрузить в PDF
                  </div>
                </div>
                <img width="24" height="24" src="../assets/img/svg/arrow_drop_down_black.svg" alt="&#x2193">
              </div>
              <div class="reports-footer__submit__button">
                <button>Применить</button>
              </div>
            <div class="reports-footer__count"></div>
          </div>
        </div>
      </div>

</body>
</html>
