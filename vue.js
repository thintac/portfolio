var app = new Vue(
  {
    el: '#app',
    data: {
      year: ( new Date() ).getFullYear(),
      show: true,
      width:window.innerWidth,
      height:window.innerHeight,
      point:{x:0,y:0},
      message:'',
      stock :10,
      b_message:'これは一方向のバインドです。',
      answer:'select',
      kotae:'select',
      hind:'',
      arrival_date:null,
      min_date:null,
      color: '#000000',
      red:0,
      green:0,
      blue:0,
    },
    computed: {
      isUrudoshi: function() {
        if((this.year % 4 == 0) && (this.year % 100 != 0) || (this.year % 400 == 0)){
          return true;
        } else {
          return false;
        }
      },
      now2: function(){
        return (new Date()).toLocaleString();
      },
      statusMessage: function(){
        if(this.stock==0){
          return '売り切れ';
        }
        return '';
      },
      //カラースライダー
      colorElement: function(){
        return [this.red , this.green , this.blue];
      },

    },
    //イベントハンドラの登録
    created: function(){
      addEventListener('resize', this.resizeHandler);
      addEventListener('mousemove', this.mouseMoveHandler);

      //カレンダー
      var dt = new Date();
      dt.setDate(dt.getDate()+4);
      this.arrival_date = this.formatDate(dt);
      this.min_date = this.arrival_date;
    },
    //イベントハンドラの解除
    beforeDestroy: function(){
      removeEventListener('resize', this.resizeHandler);
      removeEventListener('mousemove', this.mouseMoveHandler);
    },
    methods: {
      now1: function(){
        return(new Date()).toLocaleString();
      },
      onDeleteItem:function(){
        this.stock--;
      },
      resizeHandler: function($event){
        this.width = $event.target.innerWidth;
        this.height = $event.target.innerHeight;
      },
      mouseMoveHandler:function($event){
        this.point.x = $event.clientX;
        this.point.y = $event.clientY;
      },
      yearInputHandler: function($event){
        this.year = $event.target.value;
      },
      formatDate: function(dt){
        var y = dt.getFullYear();
        var m = ('00'+ (dt.getMonth()+1)).slice(-2);
        var d = ('00'+dt.getDate()).slice(-2);
        var result = y + '-' + m + '-' + d;
        return result;
      }
    },
    watch:{
      stock: function(newStock,oldStock){
        if(newStock == 0){
          this.message = '売り切れ';
        }
      },
      statusMessage: function(){
        console.log('商品ステータスが変化しました。');
      },
      colorElement: function( newRGB, oldRGB ){
        var r = ('00' + newRGB[0].toString(16).toUpperCase()).slice(-2);
        var g = ('00' + newRGB[1].toString(16).toUpperCase()).slice(-2);
        var b = ('00' + newRGB[2].toString(16).toUpperCase()).slice(-2);
        this.color = '#' + r + g + b;
      },
      color: function( newColor,oldColor ){
        this.red = parseInt(newColor.substr(1,2),16);
        this.green = parseInt(newColor.substr(3,2),16);
        this.blue = parseInt(newColor.substr(5,2),16);
      }
    },
  }
);
