        <div class="p-gmenu"> <!-- flex row flex-end ヨコ並び右端 -->
          <button class="p-gmenu__menu-opbtn js-menu-button">
            <span>Menu</span>
          </button>

          <div class="p-gmenu__layer"></div>
          <div class="p-gmenu__content"> <!-- flex column flex-end タテ並び右端 -->
            <button class="p-gmenu__content__menu-clbtn js-menu-button">
              <span>Close</span>
            </button>

            <h2  class="p-gmenu__content__title">Menu</h2>

            <?php wp_nav_menu(array('menu' => 'cateogrymenu')); ?> <!-- ナビゲーションメニューの表示 -->

          </div> <!-- .p-gmenu__content -->
        </div> <!-- .p-gmenu -->

