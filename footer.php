    <footer class="l-footer">
      <ul class="l-footer__info"> <!-- flex row center ヨコ並び真ん中-->
        <li class="l-footer__info__list"><a href="<?php echo esc_url(home_url('/ショップについて'));?>">ショップ情報</a></li>
        <li class="l-footer__info__list"><a href="<?php echo esc_url(home_url('/ヒストリー'));?>">ヒストリー</a></li>
      </ul>

      <p class="p-copyright">Copyright: RaiseTech</p> <!-- flex row center ヨコ並び真ん中-->
    </footer>
    <?php wp_footer(); ?> <!-- 必ず入れる プラグインや情報出力が機能しなくなってしまう -->
  </body>

</html>


