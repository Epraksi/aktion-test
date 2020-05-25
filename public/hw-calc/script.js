$(document).ready(function() {
	
	$('.select_main select').each(function(){
		$(this).siblings('p').text( $(this).children('option:selected').text() );
	});
	$('.select_main select').change(function(){
		$(this).siblings('p').text( $(this).children('option:selected').text() );
	});		

	var voltChecked = ( function () {
		
		var h = $(".screed-h option:selected").text();
		var hval = $(".screed-h option:selected").val();
		var w = $(".screed-w option:selected").val();
		var l = $(".length").val();
		
		if (l >= 200){			
			$(".length").val(200);	
		}
		if (l < 0){			
			$(".length").val(0);	
		}		
		
		if (w <= 25){
			udl = 0;	
		}else if (w <= 40 && w > 25){
			udl = 1;
		}else if (w <= 55 && w > 40){
			udl = 2;			
		}else{
			udl = 3;	
		}		
		
		if (h == '30 см.' && w <= 40){
			x = Math.ceil(4.2 * l);		
			$("#e1-img i").text(hval);
			$("#e1-img").addClass('nohidden');
			$("#e2-img, #e3-img, #e4-img").removeClass('nohidden');	
		}
		if (h == '30 см.' && w >= 42.5){
			x = Math.ceil(5 * l);		
			$("#e3-img i").text(hval);
			$("#e3-img").addClass('nohidden');
			$("#e2-img, #e1-img, #e4-img").removeClass('nohidden');	
		}
		if (h == '40 см.' && w <= 25){
			x = Math.ceil(4.2 * l);			
			$("#e1-img i").text(hval);
			$("#e1-img").addClass('nohidden');
			$("#e2-img, #e3-img, #e4-img").removeClass('nohidden');	
		}
		if ((h == '40 см.' && w >= 30) || (h == '50 см.') || (h == '60 см.' && w <= 20)){
			x = Math.ceil(5 * l);		
			$("#e3-img i").text(hval);
			$("#e3-img").addClass('nohidden');
			$("#e2-img, #e1-img, #e4-img").removeClass('nohidden');	
		}
		if ((h == '60 см.' && w >= 22.5) || (h == '70 см.') || (h == '80 см.' && w <= 25)){
			x = Math.ceil(6.7 * l);		
			$("#e4-img i").text(hval);
			$("#e4-img").addClass('nohidden');
			$("#e1-img, #e2-img, #e3-img").removeClass('nohidden');	
		}
		if ((h == '80 см.' && w >= 30) || (h == '90 см.' && w <= 25) || (h == '100 см.' && w <= 20)){
			x = Math.ceil(7.5 * l);		
			$("#e2-img i").text(hval);
			$("#e2-img").addClass('nohidden');
			$("#e1-img, #e3-img, #e4-img").removeClass('nohidden');	
		}
		if ((h == '90 см.' && w >= 30) || (h == '100 см.' && w >= 22.5) || (h == '110 см.') || (h == '120 см.' && w <= 25)){
			x = Math.ceil(9.2 * l);		
			$("#e4-img i").text(hval);
			$("#e4-img").addClass('nohidden');
			$("#e1-img, #e2-img, #e3-img").removeClass('nohidden');	
		}
		if ((h == '120 см.' && w >= 30) || (h == '130 см.') || (h == '140 см.' && w <= 20)){
			x = Math.ceil(10 * l);		
			$("#e2-img i").text(hval);
			$("#e2-img").addClass('nohidden');
			$("#e1-img, #e3-img, #e4-img").removeClass('nohidden');	
		}
		if ((h == '140 см.' && w >= 22.5) || (h == '150 см.') || (h == '160 см.' && w <= 25)){
			x = Math.ceil(11.7 * l);		
			$("#e4-img i").text(hval);
			$("#e4-img").addClass('nohidden');
			$("#e1-img, #e2-img, #e3-img").removeClass('nohidden');	
		}
		if ((h == '160 см.' && w >= 30) || (h == '170 см.') || (h == '180 см.' && w <= 20)){
			x = Math.ceil(12.5 * l);		
			$("#e2-img i").text(hval);
			$("#e2-img").addClass('nohidden');
			$("#e1-img, #e3-img, #e4-img").removeClass('nohidden');	
		}
		if ((h == '180 см.' && w >= 22.5) || (h == '190 см.') || (h == '200 см.' && w <= 25)){
			x = Math.ceil(14.2 * l);		
			$("#e4-img i").text(hval);
			$("#e4-img").addClass('nohidden');
			$("#e1-img, #e2-img, #e3-img").removeClass('nohidden');	
		}	
		if ((h == '200 см.' && w >= 30) || (h == '210 см.') || (h == '220 см.' && w <= 20)){
			x = Math.ceil(15 * l);		
			$("#e2-img i").text(hval);
			$("#e2-img").addClass('nohidden');
			$("#e1-img, #e3-img, #e4-img").removeClass('nohidden');	
		}
		if ((h == '220 см.' && w >= 22.5) || (h == '230 см.') || (h == '240 см.' && w <= 25)){
			x = Math.ceil(16.7 * l);		
			$("#e4-img i").text(hval);
			$("#e4-img").addClass('nohidden');
			$("#e1-img, #e2-img, #e3-img").removeClass('nohidden');	
		}
		if ((h == '240 см.' && w >= 30) || (h == '250 см.') || (h == '260 см.' && w <= 20)){
			x = Math.ceil(17.5 * l);		
			$("#e2-img i").text(hval);
			$("#e2-img").addClass('nohidden');
			$("#e1-img, #e3-img, #e4-img").removeClass('nohidden');	
		}
		if ((h == '260 см.' && w >= 22.5) || (h == '270 см.') || (h == '280 см.' && w <= 25)){
			x = Math.ceil(19.2 * l);		
			$("#e4-img i").text(hval);
			$("#e4-img").addClass('nohidden');
			$("#e1-img, #e2-img, #e3-img").removeClass('nohidden');	
		}
		if ((h == '280 см.' && w >= 30) || (h == '290 см.') || (h == '300 см.' && w <= 20)){
			x = Math.ceil(20 * l);		
			$("#e2-img i").text(hval);
			$("#e2-img").addClass('nohidden');
			$("#e1-img, #e3-img, #e4-img").removeClass('nohidden');	
		}
		if ((h == '300 см.' && w >= 22.5) || (h == '310 см.') || (h == '320 см.' && w <= 25)){
			x = Math.ceil(21.7 * l);		
			$("#e4-img i").text(hval);
			$("#e4-img").addClass('nohidden');
			$("#e1-img, #e2-img, #e3-img").removeClass('nohidden');	
		}
		if ((h == '320 см.' && w >= 30) || (h == '330 см.') || (h == '340 см.' && w <= 20)){
			x = Math.ceil(22.5 * l);		
			$("#e2-img i").text(hval);
			$("#e2-img").addClass('nohidden');
			$("#e1-img, #e3-img, #e4-img").removeClass('nohidden');	
		}
		if ((h == '340 см.' && w >= 22.5) || (h == '350 см.') || (h == '360 см.' && w <= 25)){
			x = Math.ceil(24.2 * l);		
			$("#e4-img i").text(hval);
			$("#e4-img").addClass('nohidden');
			$("#e1-img, #e2-img, #e3-img").removeClass('nohidden');	
		}
		if ((h == '360 см.' && w >= 30) || (h == '370 см.') || (h == '380 см.' && w <= 25)){
			x = Math.ceil(25 * l);		
			$("#e2-img i").text(hval);
			$("#e2-img").addClass('nohidden');
			$("#e1-img, #e3-img, #e4-img").removeClass('nohidden');	
		}
		if ((h == '380 см.' && w >= 27.5) || (h == '390 см.') || (h == '400 см.' && w <= 25)){
			x = Math.ceil(26.7 * l);		
			$("#e4-img i").text(hval);
			$("#e4-img").addClass('nohidden');
			$("#e1-img, #e2-img, #e3-img").removeClass('nohidden');	
		}
		if ((h == '400 см.' && w >= 30) || (h == '410 см.') || (h == '420 см.' && w <= 20)){
			x = Math.ceil(27.5 * l);		
			$("#e2-img i").text(hval);
			$("#e2-img").addClass('nohidden');
			$("#e1-img, #e3-img, #e4-img").removeClass('nohidden');	
		}
		if ((h == '420 см.' && w >= 22.5) || (h == '430 см.') || (h == '440 см.' && w <= 25)){
			x = Math.ceil(29.2 * l);		
			$("#e4-img i").text(hval);
			$("#e4-img").addClass('nohidden');
			$("#e1-img, #e2-img, #e3-img").removeClass('nohidden');	
		}
		if ((h == '440 см.' && w >= 30) || (h == '450 см.') || (h == '460 см.' && w <= 20)){
			x = Math.ceil(30 * l);		
			$("#e2-img i").text(hval);
			$("#e2-img").addClass('nohidden');
			$("#e1-img, #e3-img, #e4-img").removeClass('nohidden');	
		}
		if ((h == '460 см.' && w >= 22.5) || (h == '470 см.') || (h == '480 см.' && w <= 25)){
			x = Math.ceil(31.7 * l);		
			$("#e4-img i").text(hval);
			$("#e4-img").addClass('nohidden');
			$("#e1-img, #e2-img, #e3-img").removeClass('nohidden');	
		}
		if ((h == '480 см.' && w >= 30) || (h == '490 см.') || (h == '500 см.' && w <= 20)){
			x = Math.ceil(32.5 * l);		
			$("#e2-img i").text(hval);
			$("#e2-img").addClass('nohidden');
			$("#e1-img, #e3-img, #e4-img").removeClass('nohidden');	
		}
		if ((h == '500 см.' && w >= 22.5) || (h == '510 см.') || (h == '520 см.' && w <= 25)){
			x = Math.ceil(34.2 * l);		
			$("#e4-img i").text(hval);
			$("#e4-img").addClass('nohidden');
			$("#e1-img, #e2-img, #e3-img").removeClass('nohidden');	
		}
		if ((h == '520 см.' && w >= 30) || (h == '530 см.') || (h == '540 см.' && w <= 20)){
			x = Math.ceil(35 * l);		
			$("#e2-img i").text(hval);
			$("#e2-img").addClass('nohidden');
			$("#e1-img, #e3-img, #e4-img").removeClass('nohidden');	
		}
		if ((h == '540 см.' && w >= 22.5) || (h == '550 см.') || (h == '560 см.' && w <= 25)){
			x = Math.ceil(36.7 * l);		
			$("#e4-img i").text(hval);
			$("#e4-img").addClass('nohidden');
			$("#e1-img, #e2-img, #e3-img").removeClass('nohidden');	
		}
		if ((h == '560 см.' && w >= 30) || (h == '570 см.') || (h == '580 см.' && w <= 20)){
			x = Math.ceil(37.5 * l);		
			$("#e2-img i").text(hval);
			$("#e2-img").addClass('nohidden');
			$("#e1-img, #e3-img, #e4-img").removeClass('nohidden');	
		}
		if ((h == '580 см.' && w >= 22.5) || (h == '590 см.') || (h == '600 см.' && w <= 25)){
			x = Math.ceil(39.2 * l);		
			$("#e4-img i").text(hval);
			$("#e4-img").addClass('nohidden');
			$("#e1-img, #e2-img, #e3-img").removeClass('nohidden');	
		}
		if ((h == '600 см.' && w >= 30) || (h == '610 см.')){
			x = Math.ceil(40 * l);			
			$("#e2-img i").text(hval);
			$("#e2-img").addClass('nohidden');
			$("#e1-img, #e3-img, #e4-img").removeClass('nohidden');	
		}
		
		var res1 = Math.ceil(x / 50);
	
			$("#res1").text(x);	
			$("#res2").text(res1 * 50);
			$("#res3").text(x * udl);
			$("#res4").text(res1 * 50 * udl);
		
	});
	$('.length, .screed-h, .screed-w, option').keyup(voltChecked).click(voltChecked).change(voltChecked);

	var screwChecked = ( function () {
		var sw = $('.screw-w option:selected').val();
		var sh = $('.screw-h option:selected').val();
		var scr = $('input[name="scr"]:checked').val();		
		y = Math.ceil(scr * sh * sw);
		var res2 = Math.ceil(y / 50);
		
			$("#res5").text(y);	
			$("#res6").text(res2 * 50);		
		
	});
	$('input[name="scr"], .screw-h, .screw-w, option').keyup(screwChecked).click(screwChecked).change(screwChecked);	
		
});