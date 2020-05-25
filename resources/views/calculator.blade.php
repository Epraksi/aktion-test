@extends('layouts.main')
@section('inner')
<div class="breadcrumbs">
   <div class="container">
      <div class="row">
         <div class="breadcrumbs__title">
            <h5 class="page-title">Калькулятор</h5>
         </div>
         <div class="breadcrumbs__items">
            <div class="breadcrumbs__content">
               <div class="breadcrumbs__browse">Вы здесь:</div>
               <div class="breadcrumbs__wrap">
                  <div class="breadcrumbs__item">
                     <a href="/" class="breadcrumbs__item-link is-home" rel="home" title="Home">Главная</a> 
                  </div>
                  <div class="breadcrumbs__item">
                     <div class="breadcrumbs__item-sep">/</div>
                  </div>
                  <div class="breadcrumbs__item"><span class="breadcrumbs__item-target">Калькулятор</span></div>
               </div>
            </div> 
         </div>
      </div>
   </div>
</div>

<div id="workarea">
	<h2 class="red-title">Расчёт количества универсальных стяжек опалубки</h2>
	<div class="screed">
		<h3 class="params-title">ПАРАМЕРЫ ОПАЛУБКИ</h3>
		<div class="params-box">
			<div class="params">
				<h3>ВЫСОТА</h3>
				<div class="select_main">
					<p></p>
					<select class="screed-h">
						<option value="0" selected disabled>0</option>
						<option value="15">30 см.</option>
						<option value="25">40 см.</option>
						<option value="35">50 см.</option>
						<option value="40">60 см.</option> 
						<option value="27">70 см.</option>
						<option value="32">80 см.</option>
						<option value="37">90 см.</option>
						<option value="42">100 см.</option>
						<option value="31">110 см.</option> 
						<option value="35">120 см.</option>
						<option value="38">130 см.</option>	
						<option value="42">140 см.</option> 
						<option value="33">150 см.</option>
						<option value="36">160 см.</option>	
						<option value="38">170 см.</option> 
						<option value="41">180 см.</option>
						<option value="35">190 см.</option>	
						<option value="37">200 см.</option> 
						<option value="39">210 см.</option>
						<option value="41">220 см.</option>
						<option value="37">230 см.</option>
						<option value="37">240 см.</option>
						<option value="39">250 см.</option>
						<option value="40">260 см.</option> 
						<option value="36">270 см.</option>
						<option value="37">280 см.</option>
						<option value="39">290 см.</option>
						<option value="40">300 см.</option>
						<option value="37">310 см.</option> 
						<option value="38">320 см.</option>
						<option value="39">330 см.</option>	
						<option value="40">340 см.</option> 
						<option value="37">350 см.</option>
						<option value="38">360 см.</option>	
						<option value="39">370 см.</option> 
						<option value="40">380 см.</option>
						<option value="37">390 см.</option>	
						<option value="38">400 см.</option> 
						<option value="39">410 см.</option>
						<option value="40">420 см.</option>
						<option value="37">430 см.</option>	
						<option value="38">440 см.</option> 
						<option value="39">450 см.</option>
						<option value="40">460 см.</option>	
						<option value="37">470 см.</option> 
						<option value="38">480 см.</option>
						<option value="39">490 см.</option>	
						<option value="40">500 см.</option> 
						<option value="37">510 см.</option>
						<option value="38">520 см.</option>
						<option value="39">530 см.</option>
						<option value="40">540 см.</option>
						<option value="37">550 см.</option>
						<option value="38">560 см.</option> 
						<option value="39">570 см.</option>
						<option value="40">580 см.</option>
						<option value="37">590 см.</option>
						<option value="38">600 см.</option>
						<option value="39">610 см.</option>			
					</select>
				</div>
			</div>	
			<div class="params">	
				<h3>ШИРИНА</h3>
				<div class="select_main">
					<p></p>				
					<select class="screed-w">
						<option value="0" selected disabled>0</option>
						<option value="15">15 см.</option>
						<option value="17.5">17,5 см.</option>
						<option value="20">20 см.</option>
						<option value="22.5">22,5 см.</option> 
						<option value="25">25 см.</option>
						<option value="30">30 см.</option>
						<option value="32.5">32,5 см.</option>
						<option value="35">35 см.</option>
						<option value="37.5">37,5 см.</option> 
						<option value="40">40 см.</option>
						<option value="42.5">42,5 см.</option>	
						<option value="45">45 см.</option> 
						<option value="47.5">47,5 см.</option>
						<option value="50">50 см.</option>	
						<option value="52.5">52,5 см.</option> 
						<option value="55">55 см.</option>			
					</select>
				</div>					
			</div>
			<div class="params">	
				<h3>ДЛИНА (м)</h3>
				<input class="length" type="tel" placeholder="0"/>
			</div>
		</div>	
		<div class="result">
			<p class="result_lab">Количество стяжек:</p>
			<p class="res"><span id="res1">0</span> шт./<span id="res2">0</span> шт. в упак.</p>
			<div class="zero"></div>
			<p class="result_lab">Количество удлинителей:</p>
			<p class="res"><span id="res3">0</span> шт./<span id="res4">0</span> шт. в упак.</p>				
		</div>		
		<div class="edit">
			<h3>СХЕМА МОНТАЖА</h3>
			<div class="edit-img nohidden" id="e1-img">
				<img src="hw-calc/img/scheme1.png" alt="">
				<span class="edit-center"><i></i></span>
			</div>	
			<div class="edit-img" id="e2-img">
				<img src="hw-calc/img/scheme2.png" alt="">
				<span class="edit-top"><i></i></span>
				<span class="edit-bottom"><i></i></span>
			</div>
			<div class="edit-img" id="e3-img">
				<img src="hw-calc/img/scheme3.png" alt="">
				<span class="edit-center"><i></i></span>
			</div>
			<div class="edit-img"  id="e4-img">
				<img src="hw-calc/img/scheme4.png" alt="">
				<span class="edit-top"><i></i></span>
				<span class="edit-bottom"><i></i></span>
			</div>			
		</div>		
	</div>
	
	
	<h2 class="red-title">Расчёт количества Анкер Шурупа L170</h2>
	<div class="screw">
		<div class="params-box">
			<div class="params angle">
				<h3>КОЛИЧЕСТВО УГЛОВ</h3>
				<div class="select_main">
					<p></p>
					<select class="screw-w">
						<option value="0" selected disabled>0</option>
						<option value="1">1 шт.</option>
						<option value="2">2 шт.</option>
						<option value="3">3 шт.</option>
						<option value="4">4 шт.</option> 
						<option value="5">5 шт.</option>
						<option value="6">6 шт.</option>
						<option value="7">7 шт.</option>
						<option value="8">8 шт.</option>
						<option value="9">9 шт.</option> 
						<option value="10">10 шт.</option>
						<option value="11">11 шт.</option>	
						<option value="12">12 шт.</option> 
						<option value="13">13 шт.</option>
						<option value="14">14 шт.</option>	
						<option value="15">15 шт.</option> 
						<option value="16">16 шт.</option>
						<option value="17">17 шт.</option>
						<option value="18">18 шт.</option>	
						<option value="19">19 шт.</option> 
						<option value="20">20 шт.</option>
						<option value="21">21 шт.</option>	
						<option value="22">22 шт.</option> 
						<option value="23">23 шт.</option>
						<option value="24">24 шт.</option>						
					</select>
				</div>
			</div>	
			<div class="params angle">	
				<h3>ВЫСОТА УГЛА</h3>
				<div class="select_main">
					<p></p>	
					<select class="screw-h">
						<option value="0" selected disabled>0</option>
						<option value="0.1">10 см.</option>
						<option value="0.2">20 см.</option>						
						<option value="0.3">30 см.</option>
						<option value="0.4">40 см.</option>
						<option value="0.5">50 см.</option>
						<option value="0.6">60 см.</option> 
						<option value="0.7">70 см.</option>
						<option value="0.8">80 см.</option>
						<option value="0.9">90 см.</option>
						<option value="1">100 см.</option>
						<option value="1.1">110 см.</option> 
						<option value="1.2">120 см.</option>
						<option value="1.3">130 см.</option>	
						<option value="1.4">140 см.</option> 
						<option value="1.5">150 см.</option>
						<option value="1.6">160 см.</option>	
						<option value="1.7">170 см.</option> 
						<option value="1.8">180 см.</option>
						<option value="1.9">190 см.</option>	
						<option value="2">200 см.</option> 
						<option value="2.1">210 см.</option>
						<option value="2.2">220 см.</option>
						<option value="2.3">230 см.</option>
						<option value="2.4">240 см.</option>
						<option value="2.5">250 см.</option>
						<option value="2.6">260 см.</option> 
						<option value="2.7">270 см.</option>
						<option value="2.8">280 см.</option>
						<option value="2.9">290 см.</option>
						<option value="3">300 см.</option>
						<option value="3.1">310 см.</option> 
						<option value="3.2">320 см.</option>
						<option value="3.3">330 см.</option>	
						<option value="3.4">340 см.</option> 
						<option value="3.5">350 см.</option>
						<option value="3.6">360 см.</option>	
						<option value="3.7">370 см.</option> 
						<option value="3.8">380 см.</option>
						<option value="3.9">390 см.</option>	
						<option value="4">400 см.</option> 
						<option value="4.1">410 см.</option>
						<option value="4.2">420 см.</option>
						<option value="4.3">430 см.</option>	
						<option value="4.4">440 см.</option> 
						<option value="4.5">450 см.</option>
						<option value="4.6">460 см.</option>	
						<option value="4.7">470 см.</option> 
						<option value="4.8">480 см.</option>
						<option value="4.9">490 см.</option>	
						<option value="5">500 см.</option> 
						<option value="5.1">510 см.</option>
						<option value="5.2">520 см.</option>
						<option value="5.3">530 см.</option>
						<option value="5.4">540 см.</option>
						<option value="5.5">550 см.</option>
						<option value="5.6">560 см.</option> 
						<option value="5.7">570 см.</option>
						<option value="5.8">580 см.</option>
						<option value="5.9">590 см.</option>
						<option value="6">600 см.</option>		
					</select>					
				</div>					
			</div>
		</div>			
		<div class="type">
			<h3>ВЫБОР ТИПА МОНТАЖА УГЛА</h3>
			<div class="type-box">						
					<input id="radio1" name="scr" type="radio" value="5" checked="checked" />
					<label for="radio1" class="type-label"><img src="hw-calc/img/variant-1.png" alt=""></label>
				<input id="radio2" name="scr" type="radio" value="10"/>						
					<label for="radio2" class="type-label"><img src="hw-calc/img/variant-2.png" alt=""></label>						
					<input id="radio3" name="scr" type="radio" value="15"/>
					<label for="radio3" class="type-label"><img src="hw-calc/img/variant-3.png" alt=""></label>						
					<input id="radio4" name="scr" type="radio" value="20"/>
					<label for="radio4" class="type-label"><img src="hw-calc/img/variant-4.png" alt=""></label>
					<input id="radio5" name="scr" type="radio" value="10"/>
					<label for="radio5" class="type-label"><img src="hw-calc/img/variant-5.png" alt=""></label>
					<input id="radio6" name="scr" type="radio" value="20"/>
					<label for="radio6" class="type-label"><img src="hw-calc/img/variant-6.png" alt=""></label>
			</div>
		</div>
		<div class="result">
			<p class="result_lab">Количество шурупов: </p>
			<p class="res"><span id="res5">0</span> шт./<span id="res6">0</span> шт. в упак.</p>			
		</div>		
	</div>	
</div>	
@endsection