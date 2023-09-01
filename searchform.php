          <form class="c-form p-search" id="searchform" method="get" action="<?php echo home_url('/'); ?>"> <!-- flex row ヨコ並び -->
            <input class="c-form__text p-search__text" type="text" placeholder="" value="<?php the_search_query(); ?>"name="s" id="s">
            <input class="c-form__submit p-search__submit" type="submit" value="検索" >
          </form>

