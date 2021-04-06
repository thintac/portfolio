Vue.config.devtools = true;

//数値を通過書式
Vue.filter('number_format',function(val){
  return val.toLocaleString();
});

var app = new Vue({
  el: '#app',
  data: {
    //セール対象のチェック状態
    showSaleItem:false,
    //送料無料のチェック状態
    showDelvFree:false,
    //並び替えの選択値(1:標準、2:価格が安い順)
    sortOrder:1,
    //商品リスト
    products:[],
    //エラーの有無
    isError:false,
    //メッセージ
    message:'',
  },
  //ライフサイクルハック
  created:function(){
    //jsonを返すAPI
    var url = './vue.body4_column.php';
    //非同期通信でJSONPを読み込む
    $.ajax({
      url:url,
      type:'GET',
      dataType:'json'
    })
    .done(function(data,textStatus,jqXHR){
      this.products = data;
    }.bind(this))
    .fail(function(jqXHR,textStatus,errorThrown){
      this.isError = true;
      this.message = '商品リストの読み込みに失敗しました。';
    }.bind(this));
  },
  computed:{
    //絞り込み後のリストを返す
    filteredList:function(){
      //格納用
      var newList = [];
      for (var i=0; i<this.products.length; i++){
        //表示対象かどうかを判断する
        var isShow = true;
        //i番目の商品が表示対象化どうかを判定する
        if( this.showSaleItem && !this.products[i].isSale ){
          //セール対象にチェックがあるが、セール対象でない商品
          isShow = false;//表示しない
        }
        if (this.showDelvFree && this.products[i].delv > 0 ){
          //送料無料チェックありだが、送料が必要な商品
          isShow = false;
        }
        //表示対象の商品だけを新しい配列に追加する
        if(isShow){
          newList.push(this.products[i]);
        }
      }
      //新しい配列を並び替える
      if (this.sortOrder==1){
        //デフォルトなので、処理なし
      }
      else if(this.sortOrder == 2) {
        //価格の低い順に並び替える
        newList.sort(function(a,b){
          return a.price - b.price;
        });
      }
      else if(this.sortOrder == 3){
        //価格の高い順に並び替える
        newList.sort(function(a,b){
          return b.price - a.price;
        });
      }

      //絞り込み後のリストを返す
      return newList;
    },
    count: function(){
      return this.filteredList.length;
    }
  },
  watch:{
    //セール対象チェックボックス監視
    showSaleItem: function(newVal,oldVal){
      //productの配列を書き換える
      console.log('showSaleItem!');
    },
    //送料無料チェックボックス監視
    showDelvFree: function(newVal,oldVal){
      //productの配列を書き換える
      console.log('showDelvFree!');
    }
  }
});
