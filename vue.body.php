<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.min.js"></script>
<link rel="stylesheet/less" href="./vue.3.less ">

<div id='app'>
  <div class='container'>
    <h1 class='pageTitle'>商品一覧</h1>
    <!-- 検索欄 -->
    <div class='search'>
      <div class='result'>
        検索結果<span class='count'>6件</span>
      </div>
      <!-- result -->
      <div class='condition'>
        <div class='target'>
          <label><input type='checkbox'>セール対象</label>
          <label><input type='checkbox'>送料無料</label>
        </div>
        <!-- target -->
        <div class='sort'>
          <label for='sort'>並び替え</label>
          <select id='sort' class='sorting'>
            <option value='1'>標準</option>
            <option value='2'>価格が安い順</option>
          </select>
        </div>
        <!-- sort -->
      </div>
      <!--condition-->
    </div>
    <!-- search -->

    <!-- 商品一覧 -->
    <div class='list'>

    <div class='item'>
        <figure class='image'>
          <div class='status'>SALE</div>
          <img src='<?= $g_img."vue/01.jpg" ?>' alt=''>
          <figcaption>Michael<br>スマホケース</figcaption>
        </figure>
        <div class='detail'>
          <div class='price'><span>1,580</span>円(税込)</div>
          <div class='shipping-fee none'>送料無料</div>
        </div>
        <!-- detail -->
      </div>
      <!-- item -->

      <div class='item'>
        <figure class='image'>
          <div class='status'>SALE</div>
          <img src='<?= $g_img."vue/02.jpg" ?>' alt=''>
          <figcaption>Michael<br>スマホケース</figcaption>
        </figure>
        <div class='detail'>
          <div class='price'><span>1,580</span>円(税込)</div>
          <div class='shipping-fee none'>送料無料</div>
        </div>
        <!-- detail -->
      </div>
      <!-- item -->

      <div class='item'>
        <figure class='image'>
          <div class='status'>SALE</div>
          <img src='<?= $g_img."vue/03.jpg" ?>' alt=''>
          <figcaption>Michael<br>スマホケース</figcaption>
        </figure>
        <div class='detail'>
          <div class='price'><span>1,580</span>円(税込)</div>
          <div class='shipping-fee'>+送料240円</div>
        </div>
        <!-- detail -->
      </div>
      <!-- item -->

      <div class='item'>
        <figure class='image'>
          <div class='status'>SALE</div>
          <img src='<?= $g_img."vue/04.jpg" ?>' alt=''>
          <figcaption>Michael<br>スマホケース</figcaption>
        </figure>
        <div class='detail'>
          <div class='price'><span>980</span>円(税込)</div>
          <div class='shipping-fee none'>送料無料</div>
        </div>
        <!-- detail -->
      </div>
      <!-- item -->

      <div class='item'>
        <figure class='image'>
          <img src='<?= $g_img."vue/05.jpg" ?>' alt=''>
          <figcaption>Michael<br>スマホケース</figcaption>
        </figure>
        <div class='detail'>
          <div class='price'><span>980</span>円(税込)</div>
          <div class='shipping-fee none'>送料無料</div>
        </div>
        <!-- detail -->
      </div>
      <!-- item -->

      <div class='item'>
        <figure class='image'>
          <img src='<?= $g_img."vue/06.jpg" ?>' alt=''>
          <figcaption>Michael<br>スマホケース</figcaption>
        </figure>
        <div class='detail'>
          <div class='price'><span>1,580</span>円(税込)</div>
          <div class='shipping-fee none'>送料無料</div>
        </div>
        <!-- detail -->
      </div>
      <!-- item -->

    </div>
    <!-- list -->

  </div>
  <!-- container -->
</div>
<!-- app -->

<script src='vue.3.js'></script>
<script src="//cdn.jsdelivr.net/npm/less@3.13"></script>
