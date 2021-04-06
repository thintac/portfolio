var btnLoad = document.querySelector('#load');

btnLoad.addEventListener('click', function(event){

  //手順1：XMLHttpRequestオブジェクトのインスタンスを生成
  var xmlHttpRequest = new XMLHttpRequest();

  //手順2：通信状態の変化を監視するイベントハンドラを設定
  xmlHttpRequest.onreadystatechange = function(){
    //レスポンス受信が正常に完了したとき
    if(this.readyState==4 && this.status==200){
      //受信したJSONを変数に格納する。
      var products = this.response;
      //商品リストの子ノードをすべて削除する
      var result = document.querySelector('#result');
      result.textContent = '';
      //商品の子ノードをDOMに挿入する
      for( var i = 0; i<products.length; i++ ){
        var text = '商品ID:' + products[i].id;
        text += '商品名:' + products[i].name;
        text += '料金:' + products[i].price;
        text += '画像パス:' + products[i].images;
        text += '送料:' + products[i].delv;
        text += 'セール対象:' + products[i].isSale;
        var div = document.createElement('div');
        div.textContent = text;
        result.appendChild(div);
      }
    }
  };
  //手順3：レスポンスの形式を指定する
  xmlHttpRequest.responseType = 'json';

  //手順4：リクエストメソッドと読み込むファイルパスを指定する
  xmlHttpRequest.open('GET','products.json');

  //手順5：リクエストを送信する
  xmlHttpRequest.send();
});

//jQuery
$('#load').on('click',function(event){
  $.ajax({
    url: 'products.json',
    type: 'GET',
    dataType: 'json'
  })
  .done(function(data,textStatus,jqXHR){
    updateScreen(data);
  })
  .fail(function(jqXHR,textStatus,errorThrow){
    console.log(errorThrow);
  });
})

//商品一覧の描画を更新する
function updateScreen(products){
  //商品リストの子ノードをすべて削除
  $('#result').empty();
  //商品の子ノードをDOMに挿入する
  var list = '';
  for (var i=0; i<products.length; i++){
    list += '<div>';
    list += '商品ID：'+products[i].id;
    list += '商品名：'+products[i].name;
    list += '料金：'+products[i].price;
    list += '画像パス：'+products[i].images;
    list += '送料：'+products[i].delv;
    list += 'セール対象：'+products[i].isSale;
    list += '</div>';
  }
  $('#result').append(list);
}

//jsonpのurl
var url = './products.js';
//非同期通信でJSONPを読み込む
$.ajax({
  url:url,
  type:'GET',
  dataType:'jsonp',
  jsonp:'callback',
  jsonpCallback:'products'
})
.done(function(data,textStatus,jqVHR){
  console.log(data);
})
.fail(function(jqXHR,textStatus,errorThrown){
  console.log('通信が失敗しました');
});
