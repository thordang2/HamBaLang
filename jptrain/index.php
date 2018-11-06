<!DOCTYPE html>
<html>
	<head>
		<title>JP Tranining</title>
		<link href="assets/bootstrap.css" rel="stylesheet">
		<style type="text/css">
			.warning {
				border-color: #eea236;
			}
			.line-change{
				color: #910;
			}
		</style>
	</head>
	<body>
		<div class="container well">
	  		<h3 class="text-left">Character Map Training</h3>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-4 text-center well">
					<h3>Hiragana</h3>
					<p><button data="hira" class="chart btn btn-primary">Chart</button></p>
					<p><button data="hira" class="train btn btn-success">Train</button></p>
				</div>
				<div class="col-sm-4 text-center well">
					<h3>Katagana</h3>
					<p><button data="kata" class="chart btn btn-primary">Chart</button></p>
					<p><button data="kata" class="train btn btn-success">Train</button></p>
				</div>
				<div class="col-sm-4 text-center well">
					<h3>Kanji</h3> 
					<p><button class="btn btn-primary">Chart</button></p>
					<p><button class="btn btn-success">Train</button></p>
				</div>
			</div>

			<div id="chart_sec" class="collapse form-control">
				Chart here
			</div>
			<div class="row">
			
			<div id="hira" class="collapse well train_sec">
				<p>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxaa" data="a" value="aa"> あ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxii" data="i" value="ii"> い
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxuu" data="ư" value="uu"> う
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxee" data="ề" value="ee"> え
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckboxoo" data="ô" value="oo"> お
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxka" data="car" value="ka"> か
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxki" data="ki" value="ki"> き
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxku" data="kư" value="ku"> く
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxke" data="kề" value="ke"> け
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckboxko" data="kô" value="ko"> こ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxsa" data="sà" value="sa"> さ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxsi" data="shi" value="si"> し
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxsu" data="sư" value="su"> す
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxse" data="sè" value="se"> せ
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckboxso" data="sô" value="so"> そ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxta" data="thà" value="ta"> た
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxti" data="chi" value="ti"> ち
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxtu" data="chư" value="tu"> つ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxte" data="tề" value="te"> て
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckboxto" data="tô" value="to"> と
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxna" data="na" value="na"> な
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxni" data="ni" value="ni"> に
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxnu" data="nư" value="nu"> ぬ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxne" data="nề" value="ne"> ね
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckboxno" data="nô" value="no"> の
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxha" data="ha" value="ha"> は
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxhi" data="hi-khi" value="hi"> ひ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxhu" data="phư" value="hu"> ふ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxhe" data="hề" value="he"> へ
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckboxho" data="hô" value="ho"> ほ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckbox3" data="ma" value="ma"> ま
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxma" data="mi" value="mi"> み
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxmu" data="mư" value="mu"> む
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxme" data="mề" value="me"> め
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckboxmo" data="mô" value="mo"> も
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxya" data="dà" value="ya"> や
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxyu" data="dư" value="yu"> ゆ
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckboxyo" data="dô" value="yo"> よ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxra" data="là-ra" value="ra"> ら
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxri" data="đi" value="ri"> り
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxru" data="đư" value="ru"> る
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxre" data="đề" value="re"> れ
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckboxro" data="đô" value="ro"> ろ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxwa" data="wa" value="wa"> わ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxwo" data="ô" value="wo"> を
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxnn" data="n" value="nn"> ん
					</label>
					<button data="0" class="all btn">万</button>
				</p>
				<p style="border-top:1px solid #333;">

					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckpartga" data="ca" value="ga"> が
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckpartgi" data="kI" value="gi"> ぎ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckpartgu" data="kU" value="gu"> ぐ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckpartge" data="kề" value="ge"> げ
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckpartgo" data="kô" value="go"> ご
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckpartza" data="za" value="za"> ざ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckpartji" data="ji" value="ji"> じ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckpartzu" data="zư" value="zu"> ず
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckpartze" data="zề" value="ze"> ぜ
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckpartzo" data="zô" value="zo"> ぞ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckpartda" data="đà" value="da"> だ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckpartji2" data="ji" value="ji"> ぢ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckpartzu2" data="zư" value="zu"> づ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckpartde" data="tề" value="de"> で
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckpartdo" data="đô" value="do"> ど
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckpartba" data="ba" value="ba"> ば
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckpartbi" data="bi" value="bi"> び
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckpartbu" data="bư" value="bu"> ぶ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckpartbe" data="bề" value="be"> べ
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckpartbo" data="bô" value="bo"> ぼ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckpartpa" data="pa" value="pa"> ぱ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckpartpi" data="pi" value="pi"> ぴ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckpartpu" data="pư" value="pu"> ぷ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckpartpe" data="pề" value="pe"> ぺ
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckpartpo" data="pô" value="po"> ぽ
					</label>
					<button data="0" class="all btn">万</button>
				</p>
				<p style="border-top:1px solid #333;">

					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckcomkya" data="kà" value="kya"> きゃ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckcomkyu" data="kư" value="kyu"> きゅ
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckcomkyo" data="ki-ô" value="kyo"> きょ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckcomsha" data="shà" value="sha"> しゃ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckcomshu" data="shư" value="shu"> しゅ
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckcomsho" data="shô" value="sho"> しょ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckcomcha" data="chà" value="cha"> ちゃ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckcomchu" data="chư" value="chu"> ちゅ
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckcomcho" data="chô" value="cho"> ちょ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckcomnya" data="ni-a" value="nya"> にゃ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckcomnyu" data="ni-ư" value="nyu"> にゅ
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckcomnyo" data="ni-ô" value="nyo"> にょ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckcomhya" data="khi-a" value="hya"> ひゃ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckcomhyu" data="khi-ư" value="hyu"> ひゅ
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckcomhyo" data="khi-ô" value="hyo"> ひょ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckcommya" data="mì-a" value="mya"> みゃ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckcommyu" data="mi-ư" value="myu"> みゅ
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckcommyo" data="mi-ô" value="myo"> みょ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckcomrya" data="đi-a" value="rya"> りゃ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckcomryu" data="đi-ư" value="ryu"> りゅ
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckcomryo" data="đi-ô" value="ryo"> りょ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckcomgya" data="gà" value="gya"> ぎゃ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckcomgyu" data="gư" value="gyu"> ぎゅ
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckcomgyo" data="gi-ô" value="gyo"> ぎょ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckcomja" data="chà" value="ja"> じゃ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckcomju" data=zư" value="ju"> じゅ
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckcomjo" data="zô" value="jo"> じょ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckcombya" data="bi-a" value="bya"> びゃ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckcombyu" data="bi-ư" value="byu"> びゅ
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckcombyo" data="bi-ô" value="byo"> びょ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckcompya" data="pi-a" value="pya"> ぴゃ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckcompyu" data="pi-ư" value="pyu"> ぴゅ
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckcompyo" data="pi-ô" value="pyo"> ぴょ
					</label>
					<button data="0" class="all btn">万</button>
				</p>
				<p style="border-top:1px solid #333;"></p>
					<p>
					<button class="random btn btn-primary">Random</button>
					<button class="inline btn btn-primary">Inline</button>

					<input type="text" id="timer" value="2000" placeholder="Meo Dc 0">
					<input type="text" id="timer2" value="50" placeholder="Meo Dc 0">
					<span id="eye" style="color:red;font-size: 20px;">ø</span>
					<span id="ear" style="color:red;font-size: 20px;">э</span>
					</p>
					<div style="width: 100%;" class="table-bordered pull-left">
						<div style="width: 200px;height: 100px;font-size: 75px;padding-left: 5px;" class="char_name table-bordered text-center pull-left"></div>
						<div style="width: 120px;height: 80px;font-size: 40px;padding-left: 5px;" class="char_pron table-bordered text-center pull-left"></div>
					</div>
					<button class="play_stop btn btn-primary">Pause/Play</button>
					<button class="hide_char btn btn-primary">Hide/Show</button>
					<button class="mute btn btn-primary">Mute</button>
			</div>


			<div id="kata" class="collapse well train_sec">
				<p>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxaa" data="a" value="aa"> ア
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxii" data="i" value="ii"> イ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxuu" data="ư" value="uu"> ウ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxee" data="ề" value="ee"> エ
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckboxoo" data="ô" value="oo"> オ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxka" data="car" value="ka"> カ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxki" data="ki" value="ki"> キ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxku" data="kư" value="ku"> ク
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxke" data="kề" value="ke"> ケ
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckboxko" data="kô" value="ko"> コ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxsa" data="sà" value="sa"> サ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxsi" data="shi" value="si"> シ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxsu" data="sư" value="su"> ス
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxse" data="sè" value="se"> セ
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckboxso" data="sô" value="so"> ソ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxta" data="thà" value="ta"> タ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxti" data="chi" value="ti"> チ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxtu" data="chư" value="tu"> ツ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxte" data="tề" value="te"> テ
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckboxto" data="tô" value="to"> ト
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxna" data="na" value="na"> ナ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxni" data="ni" value="ni"> ニ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxnu" data="nư" value="nu"> ヌ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxne" data="nề" value="ne"> ネ
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckboxno" data="nô" value="no"> ノ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxha" data="ha" value="ha"> ハ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxhi" data="hi-khi" value="hi"> ヒ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxhu" data="phư" value="hu"> フ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxhe" data="hề" value="he"> ヘ
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckboxho" data="hô" value="ho"> ホ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckbox3" data="ma" value="ma"> マ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxma" data="mi" value="mi"> ミ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxmu" data="mư" value="mu"> ム
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxme" data="mề" value="me"> メ
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckboxmo" data="mô" value="mo"> モ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxya" data="dà" value="ya"> ヤ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxyu" data="dư" value="yu"> ユ
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckboxyo" data="dô" value="yo"> ヨ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxra" data="là-ra" value="ra"> ラ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxri" data="đi" value="ri"> リ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxru" data="đư" value="ru"> ル
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxre" data="đề" value="re"> レ
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckboxro" data="đô" value="ro"> ロ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxwa" data="wa" value="wa"> ワ
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckboxwo" data="ô" value="wo"> ヲ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckboxnn" data="n" value="nn"> ン
					</label>
					<button data="0" class="all btn">万</button>
				</p>
				<p style="border-top:1px solid #333;">

					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckpartga" data="ca" value="ga"> ガ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckpartgi" data="kI" value="gi"> ギ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckpartgu" data="kU" value="gu"> グ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckpartge" data="kề" value="ge"> ゲ
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckpartgo" data="kô" value="go"> ゴ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckpartza" data="za" value="za"> ザ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckpartji" data="ji" value="ji"> ジ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckpartzu" data="zư" value="zu"> ズ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckpartze" data="zề" value="ze"> ゼ
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckpartzo" data="zô" value="zo"> ゾ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckpartda" data="đà" value="da"> ダ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckpartji2" data="ji" value="ji"> ヂ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckpartzu2" data="zư" value="zu"> ヅ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckpartde" data="tề" value="de"> デ
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckpartdo" data="tô" value="do"> ド
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckpartba" data="ba" value="ba"> バ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckpartbi" data="bi" value="bi"> ビ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckpartbu" data="bư" value="bu"> ブ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckpartbe" data="bề" value="be"> ベ
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckpartbo" data="bô" value="bo"> ボ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckpartpa" data="pa" value="pa"> パ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckpartpi" data="pi" value="pi"> ピ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckpartpu" data="pư" value="pu"> プ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckpartpe" data="pề" value="pe"> ペ
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckpartpo" data="pô" value="po"> ポ
					</label>
					<button data="0" class="all btn">万</button>
				</p>
				<p style="border-top:1px solid #333;">

					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckcomkya" data="kà" value="kya"> きゃ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckcomkyu" data="kư" value="kyu"> きゅ
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckcomkyo" data="ki-ô" value="kyo"> きょ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckcomsha" data="shà" value="sha"> しゃ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckcomshu" data="shư" value="shu"> しゅ
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckcomsho" data="shô" value="sho"> しょ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckcomcha" data="chà" value="cha"> ちゃ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckcomchu" data="chư" value="chu"> ちゅ
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckcomcho" data="chô" value="cho"> ちょ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckcomnya" data="ni-a" value="nya"> にゃ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckcomnyu" data="ni-ư" value="nyu"> にゅ
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckcomnyo" data="ni-ô" value="nyo"> にょ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckcomhya" data="khi-a" value="hya"> ひゃ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckcomhyu" data="khi-ư" value="hyu"> ひゅ
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckcomhyo" data="khi-ô" value="hyo"> ひょ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckcommya" data="mì-a" value="mya"> みゃ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckcommyu" data="mi-ư" value="myu"> みゅ
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckcommyo" data="mi-ô" value="myo"> みょ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckcomrya" data="đi-a" value="rya"> りゃ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckcomryu" data="đi-ư" value="ryu"> りゅ
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckcomryo" data="đi-ô" value="ryo"> りょ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckcomgya" data="gà" value="gya"> ぎゃ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckcomgyu" data="gư" value="gyu"> ぎゅ
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckcomgyo" data="gi-ô" value="gyo"> ぎょ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckcomja" data="chà" value="ja"> じゃ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckcomju" data="zư" value="ju"> じゅ
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckcomjo" data="zô" value="jo"> じょ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckcombya" data="bi-a" value="bya"> びゃ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckcombyu" data="bi-ư" value="byu"> びゅ
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckcombyo" data="bi-ô" value="byo"> びょ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckcompya" data="pi-a" value="pya"> ぴゃ
					</label>
					<label class="checkbox-inline">
					  	<input type="checkbox" id="inlineCheckcompyu" data="pi-ư" value="pyu"> ぴゅ
					</label>
					<label class="checkbox-inline line-change">
					  	<input type="checkbox" id="inlineCheckcompyo" data="pi-ô" value="pyo"> ぴょ
					</label>
					<button data="0" class="all btn">万</button>
				</p>
				<p style="border-top:1px solid #333;"></p>
					<p>
					<button class="random btn btn-primary">Random</button>
					<button class="inline btn btn-primary">Inline</button>
					</p>
					<div style="width: 100%;" class="table-bordered pull-left">
						<div style="width: 200px;height: 100px;font-size: 75px;padding-left: 5px;" class="char_name table-bordered text-center pull-left"></div>
						<div style="width: 120px;height: 80px;font-size: 40px;padding-left: 5px;" class="char_pron table-bordered text-center pull-left"></div>
					</div>
					<button class="play_stop btn btn-primary">Pause/Play</button>
					<button class="hide_char btn btn-primary">Hide/Show</button>
					<button class="mute btn btn-primary">Mute</button>
			</div>

			</div>
		</div>



	</body>
	<script src="assets/jquery-1.11.2.js"></script>
	<script src="assets/bootstrap.js"></script>
	<script type="text/javascript">
		//Define
		var chap = "hira";
		var interval = 0;
		var listrand = [];
		var listchar = [];
		var listpron = [];
		var timer = 2000;
		var index = 0;
		var listshuffle = [];
		var play_stop = -1;
		var hide_char = -1;
		var mute 	  = -1;
		//Audio play
		var soundFile = document.createElement("audio");
		soundFile.preload = "auto";
		var src = document.createElement("source");
		soundFile.appendChild(src);
		//---------
		$(document).ready(function(){
			$("#eye").hide();
			$("#ear").hide();
			$('.chart').click(function(e){
				chap = $(this).attr('data');
				$('#chart_sec').collapse('toggle');
				$('#train_sec').removeClass('in');
			})
			$('.train').click(function(e){
				chap = $(this).attr('data');
				$('.train_sec').removeClass('in');
				$('#chart_sec').removeClass('in');
				$('#'+chap).collapse('toggle');
			})
			$('.checkbox-inline input:checkbox').click(function(e){
				playName($(this).val());
				$("#"+chap+" .char_name").text($(this).parent().text());
				$("#"+chap+" .char_pron").text($(this).attr('data'));
			})

			$('.all').click(function(){
				if($(this).attr('data') == "0"){
					$(this).parent().find('input:checkbox').prop('checked', true);
					$(this).attr('data', 1);
				}
				else{
					$(this).parent().find('input:checkbox').prop('checked', false);
					$(this).attr('data', 0);
				}
			})

			$('#timer').change(function(){
				timer = parseInt($(this).val());
			})
			$('.play_stop').click(function(e){
				return;
				play_stop *= -1;
				$("#"+chap+" .char_name").removeClass("warning");
				if(play_stop == 1){
					$("#char_name").addClass("warning");
				}
			})
			$('.hide_char').click(function(e){
				$("#eye").hide();
				hide_char *= -1;
				$("#"+chap+" .char_name").text("");
				$("#"+chap+" .char_pron").text("");
				if(hide_char == 1)
					$("#eye").show();
			})
			$('.mute').click(function(e){
				$("#ear").hide();
				mute *= -1;
				if(mute == 1)
					$("#ear").show();

			})
			$('.random').click(function(e){
				listrand = [];
				listchar = [];
				listpron = [];
				listpos  = [];
				ct  	 = 0;
				$("#"+chap+' .checkbox-inline input:checkbox').each(function(){
					if($(this).prop('checked')) {
						listrand.push($(this).val());
						listchar.push($(this).parent().text());
						listpron.push($(this).attr('data'));
					}
				})

				if(interval != 0){
					clearInterval(interval);
				}

				if(listrand.length == 0)
					return null;

				interval = setInterval(function(){
					if(play_stop == 1)
						return;
					
					if(ct == listrand.length){
						listpos  = [];
						ct  	 = 0;
					}

					do {
					    var rd = _rd(0,listrand.length-1);
					}
					while (listpos[rd] != undefined);

					playName(listrand[rd]);
					if(hide_char == -1){
						$("#"+chap+" .char_name").text(listchar[rd]);
						$("#"+chap+" .char_pron").text('/'+listpron[rd]+'/');
					} else {
						$("#"+chap+" .char_name").text(listchar[rd]);
					}
					listpos[rd] = 1;
					ct++;
					console.log(listpos.length);
				},timer)
			});

			$('.inline').click(function(e){
				listrand = [];
				listchar = [];
				listpron = [];
				index = 0;
				$("#"+chap+' .checkbox-inline input:checkbox').each(function(){
					if($(this).prop('checked')) {
						listrand.push($(this).val());
						listchar.push($(this).parent().text());
						listpron.push($(this).attr('data'));
					}
				})

				if(interval != 0){
					clearInterval(interval);
				}

				for (let i = listrand.length - 1; i > 0; i--) {
			        const j = Math.floor(Math.random() * (i + 1));
			        [listrand[i], listrand[j]] = [listrand[j], listrand[i]];
			        [listchar[i], listchar[j]] = [listchar[j], listchar[i]];
			        [listpron[i], listpron[j]] = [listpron[j], listpron[i]];
			    }

				interval = setInterval(function(){
					if(play_stop == 1)
						return;
					if(listrand[index] == undefined)
						index = 0;
					playName(listrand[index]);
					if(hide_char == -1){
						$("#"+chap+" .char_name").text(listchar[index]);
						$("#"+chap+" .char_pron").text('/'+listpron[index]+'/');
					}
					index++;
				},timer)
			})
		}).keypress(function(e) {
		    if(e.which == 13 || e.which == 32) {
		        play_stop *= -1;
		        $("#"+chap+" .char_name").removeClass("warning");
				if(play_stop == 1){
					$("#"+chap+" .char_name").addClass("warning");
				}
		    }
		}).click(function(){
			/*
			play_stop *= -1;
	        $("#"+chap+" .char_name").removeClass("warning");
			if(play_stop == 1){
				$("#"+chap+" .char_name").addClass("warning");
			}
			*/
		});
		function playName(name){
			src.src = 'resources/hira/' + name + ".mp3";
			soundFile.currentTime = 0.01;
			soundFile.volume = 1;
			soundFile.load();
			setTimeout(function(){ (mute==-1)?soundFile.play():null; }, parseInt( $("#timer2").val() ) );
		}
		function _rd(min, max) {
		  return Math.floor(Math.random() * (max - min + 1)) + min;
		}

	</script>
</html>


