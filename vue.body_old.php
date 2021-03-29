<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.min.js"></script>
<link rel="stylesheet/less" href="./vue.less ">

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css'>

<div id='app'>
	<button v-on:click="show = !show">切り替え</button>
	<transition name="zoom" enter-active-class="animate__animated animate__zoomIn" leave-active-class ="animate__animated animate__zoomOut">
	<p v-if="show">
			わがは<br>
			わがは<br>
			わがは<br>
			わがは<br>
		</p>
		<p v-else>
			わが<br>
			わが<br>
			わが<br>
			わが<br>
		</p>
	</transition>

<!--
	<transition name="slide">
		<p v-if="show">
			わがはい<br>
			わがはい<br>
			わがはい<br>
			わがはい<br>
		</p>
	</transition>

	<fieldset>
		<legend>あなたの好きな色は</legend>
		<input type='color' v-model="color">{{color}} <br>
		赤：<input type='range' v-model.number="red" min="0" max="255">{{red}} <br>
		緑：<input type='range' v-model.number="green" min="0" max="255">{{green}} <br>
		青：<input type='range' v-model.number="blue" min="0" max="255">{{blue}} <br>

	</fieldset>

	<p>ご希望到着日：{{arrival_date}}</p>
	<input type='date' v-model='arrival_date' v-bind:min="min_date">

	<p>利用頻度：{{hind}}</p>
	<select v-model="hind">
		<option disabled value=''>select</option>
		<option value='1st'>1st</option>
		<option value='2nd'>2nd</option>
	</select>

	<p>サービスはどうだった？:{{kotae}}</p>
	<input type='radio' v-model="kotae" value="good" id="good"><label for='good'>good</label>
	<input type='radio' v-model="kotae" value="normal" id="normal"><label for='normal'>normal</label>
	<input type='radio' v-model="kotae" value="bad" id="bad"><label for='bad'>bad</label>

	<p>ケーキは好きかい？:{{answer}}</p>
	<input type='checkbox' id="cake" v-model="answer" true-value="yes" false-value="no">
	<label for='cake'>{{answer}}</label>

	<input type='text' v-on:input="yearInputHandler" v-bind:value="year">
	<p>{{year}}</p>

	<textarea v-model="b_message">{{b_message}}</textarea>
	<pre>入力内容:{{b_message}}</pre>

	<p>マウスカーソルの位置:{{point.x}},{{point.y}}</p>
	width:{{width}}<br>
	height:{{height}}<br>
	調べたい年: <input type='text' v-model.lazy="year"><br>
	{{year}}年は{{isUrudoshi ? 'うるう年！' : 'ちがいます！'}}
	<div v-show="show">
		<p>now1: "{{now1()}}"</p>
		<p>now2: "{{now2}}"</p>
	</div>
	<template v-if="stock >= 1">
		<span class='num'>残り{{stock}}個</span>
		<button class='btn' v-on:click="onDeleteItem">削除</button>
	</template>
	{{message}}

-->


	<!-- <template v-else>在庫切れ</template> -->
</div>


<script src='vue.js'></script>
<script src="//cdn.jsdelivr.net/npm/less@3.13"></script>
