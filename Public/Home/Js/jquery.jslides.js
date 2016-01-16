/**
 * jQuery jslides 1.1.0
 *
 * http://www.cactussoft.cn
 *
 * Copyright (c) 2009 - 2013 Jerry
 *
 * Dual licensed under the MIT and GPL licenses:
 *   http://www.opensource.org/licenses/mit-license.php
 *   http://www.gnu.org/licenses/gpl.html
 */
$(function(){
	var numpic = $('#m-slides li').size()-1;
	var nownow = 0;
	var inout = 0;
	var TT = 0;
	var SPEED = 5000;


	$('#m-slides li').eq(0).siblings('li').css({'display':'none'});


	var ulstart = '<ul id="pagination">',
		ulcontent = '',
		ulend = '</ul>';
	ADDLI();
	var pagination = $('#pagination li');
	var paginationwidth = $('#pagination').width();
	$('#pagination').css('margin-left',(60-paginationwidth))
	
	pagination.eq(0).addClass('current')
		
	function ADDLI(){
		//var lilicount = numpic + 1;
		for(var i = 0; i <= numpic; i++){
			ulcontent += '<li>' + '<a href="javascript:void(0);">' + (i+1) + '</a>' + '</li>';
		}
		
		$('#m-slides').after(ulstart + ulcontent + ulend);	
	}

	pagination.on('click',DOTCHANGE)
	
	function DOTCHANGE(){
		
		var changenow = $(this).index();
		
		$('#m-slides li').eq(nownow).css('z-index','9');
		$('#m-slides li').eq(changenow).css({'z-index':'8'}).show();
		pagination.eq(changenow).addClass('current').siblings('li').removeClass('current');
		$('#m-slides li').eq(nownow).fadeOut(400,function(){$('#m-slides li').eq(changenow).fadeIn(500);});
		nownow = changenow;
	}
	
	pagination.mouseenter(function(){
		inout = 1;
	})
	
	pagination.mouseleave(function(){
		inout = 0;
	})
	
	function GOGO(){
		
		var NN = nownow+1;
		
		if( inout == 1 ){
			} else {
			if(nownow < numpic){
			$('#m-slides li').eq(nownow).css('z-index','9');
			$('#m-slides li').eq(NN).css({'z-index':'8'}).show();
			pagination.eq(NN).addClass('current').siblings('li').removeClass('current');
			$('#m-slides li').eq(nownow).fadeOut(400,function(){$('#m-slides li').eq(NN).fadeIn(500);});
			nownow += 1;

		}else{
			NN = 0;
			$('#m-slides li').eq(nownow).css('z-index','9');
			$('#m-slides li').eq(NN).stop(true,true).css({'z-index':'8'}).show();
			$('#m-slides li').eq(nownow).fadeOut(400,function(){$('#m-slides li').eq(0).fadeIn(500);});
			pagination.eq(NN).addClass('current').siblings('li').removeClass('current');

			nownow=0;

			}
		}
		TT = setTimeout(GOGO, SPEED);
	}
	
	TT = setTimeout(GOGO, SPEED); 

})