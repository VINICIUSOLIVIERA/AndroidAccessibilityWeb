
var loading_loop = null;

function centerBoxLoading(){
	var w = $('#alert').width();
	var h = $('#alert').height();

	var wl = $('#alert .box-loading').width();
	var hl = $('#alert .box-loading').height();

	var wc = ((w/2) - (wl/2)) - 30;
	var hc = ((h/2) - (hl/2)) - 70;

	 $('#alert .box-loading').css({
	 	'margin-top'  : hc,
	 	'margin-left' : wc
	 });

}

function loading(message){
	// var color = Math.random(100)*100;
	var color     = "#fa364d";
	$('#alert .box-loading .content-text').text(message);
	$('#alert .box-loading .icon').css({
		color : color,
		transition : 'all 1s'
	});

	$('#alert .box-loading .loading-content .move-down').css({background : color}).animate({
		width : '100%'
	}, 1000, function(){
		$('#alert .box-loading .loading-content .move-up').animate({
			width : '100%'
		}, 1000, function(){
			$('.move').css({
				width : '0'
			});
		})
	});
}

// Loading
// Create structure loading
function createLoading(){
	$("#alert").html('<div class="box-loading">'+
							'<span class="icon icon-demo icon-attention-circled"></span>'+
							'<span class="title-loading">Carregando...</span>'+
							'<div class="loading-content">'+
								'<div class="move move-up"></div>'+
								'<div class="move move-down"></div>'+
							'</div>'+
							'<span class="content-text"></span>'+
						'</div>'
						);
}


// Loading
// Inicialize loading
function inicializeLoading(message){
	$.when($("#alert").fadeIn(200), createLoading(), centerBoxLoading(), loading(message));
	// Set interval repeat animation
	loading_loop = setInterval(function(){
		loading();
	}, 2200);
}

// Change Ammount
function changeAmmount(){
	$("#alert .box-loading .content-text").html("Lendo o arquivo...200");
}

// Loading
// Stop loading
function destroyLoading(){
	clearInterval(loading_loop);
}

// ----------------------------------------
// MODAL REFERENCE
// -----------------------------------------

// Modal
// Center Box Modal
function centerBoxModal(){
	var w = $('#alert').width();
	var h = $('#alert').height();

	var wl = $('#alert .box-modal').width();
	var hl = $('#alert .box-modal').height();

	var wc = ((w/2) - (wl/2));
	var hc = ((h/2) - (hl/2)) - 25;

	 $('#alert .box-modal').css({
	 	'margin-top'  : hc,
	 	'margin-left' : wc
	 });
}

// Modal
// Create structure modal
function createModal(title, message, type){
	var icon_cross   = '<img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjY0cHgiIGhlaWdodD0iNjRweCIgdmlld0JveD0iMCAwIDMwNS4wMDIgMzA1LjAwMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMzA1LjAwMiAzMDUuMDAyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTE1Mi41MDIsMC4wMDFDNjguNDEyLDAuMDAxLDAsNjguNDEyLDAsMTUyLjUwMXM2OC40MTIsMTUyLjUsMTUyLjUwMiwxNTIuNWM4NC4wODksMCwxNTIuNS02OC40MTEsMTUyLjUtMTUyLjUgICAgUzIzNi41OTEsMC4wMDEsMTUyLjUwMiwwLjAwMXogTTE1Mi41MDIsMjgwLjAwMUM4Mi4xOTcsMjgwLjAwMSwyNSwyMjIuODA2LDI1LDE1Mi41MDFjMC03MC4zMDQsNTcuMTk3LTEyNy41LDEyNy41MDItMTI3LjUgICAgYzcwLjMwNCwwLDEyNy41LDU3LjE5NiwxMjcuNSwxMjcuNUMyODAuMDAyLDIyMi44MDYsMjIyLjgwNiwyODAuMDAxLDE1Mi41MDIsMjgwLjAwMXoiIGZpbGw9IiNGRkZGRkYiLz4KCQk8cGF0aCBkPSJNMTcwLjE4LDE1Mi41bDQzLjEzLTQzLjEyOWM0Ljg4Mi00Ljg4Miw0Ljg4Mi0xMi43OTYsMC0xNy42NzhjLTQuODgxLTQuODgyLTEyLjc5Ni00Ljg4MS0xNy42NzgsMGwtNDMuMTMsNDMuMTMgICAgbC00My4xMzEtNDMuMTMxYy00Ljg4Mi00Ljg4MS0xMi43OTYtNC44ODEtMTcuNjc4LDBjLTQuODgxLDQuODgyLTQuODgxLDEyLjc5NiwwLDE3LjY3OGw0My4xMyw0My4xM2wtNDMuMTMxLDQzLjEzMSAgICBjLTQuODgxLDQuODgyLTQuODgxLDEyLjc5NiwwLDE3LjY3OWMyLjQ0MSwyLjQ0LDUuNjQsMy42Niw4LjgzOSwzLjY2YzMuMTk5LDAsNi4zOTgtMS4yMjEsOC44MzktMy42Nmw0My4xMzEtNDMuMTMyICAgIGw0My4xMzEsNDMuMTMyYzIuNDQxLDIuNDM5LDUuNjQsMy42Niw4LjgzOSwzLjY2czYuMzk4LTEuMjIxLDguODM5LTMuNjZjNC44ODItNC44ODMsNC44ODItMTIuNzk3LDAtMTcuNjc5TDE3MC4xOCwxNTIuNXoiIGZpbGw9IiNGRkZGRkYiLz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" />';
	var icon_check   = '<img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTYuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjY0cHgiIGhlaWdodD0iNjRweCIgdmlld0JveD0iMCAwIDMwNS4wMDIgMzA1LjAwMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMzA1LjAwMiAzMDUuMDAyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTE1Mi41MDIsMC4wMDFDNjguNDEyLDAuMDAxLDAsNjguNDEyLDAsMTUyLjUwMXM2OC40MTIsMTUyLjUsMTUyLjUwMiwxNTIuNWM4NC4wODksMCwxNTIuNS02OC40MTEsMTUyLjUtMTUyLjUgICAgUzIzNi41OTEsMC4wMDEsMTUyLjUwMiwwLjAwMXogTTE1Mi41MDIsMjgwLjAwMUM4Mi4xOTcsMjgwLjAwMSwyNSwyMjIuODA2LDI1LDE1Mi41MDFjMC03MC4zMDQsNTcuMTk3LTEyNy41LDEyNy41MDItMTI3LjUgICAgYzcwLjMwNCwwLDEyNy41LDU3LjE5NiwxMjcuNSwxMjcuNUMyODAuMDAyLDIyMi44MDYsMjIyLjgwNiwyODAuMDAxLDE1Mi41MDIsMjgwLjAwMXoiIGZpbGw9IiNGRkZGRkYiLz4KCQk8cGF0aCBkPSJNMjE4LjQ3Myw5My45N2wtOTAuNTQ2LDkwLjU0N2wtNDEuMzk4LTQxLjM5OGMtNC44ODItNC44ODEtMTIuNzk2LTQuODgxLTE3LjY3OCwwYy00Ljg4MSw0Ljg4Mi00Ljg4MSwxMi43OTYsMCwxNy42NzggICAgbDUwLjIzNyw1MC4yMzdjMi40NDEsMi40NCw1LjY0LDMuNjYxLDguODM5LDMuNjYxYzMuMTk5LDAsNi4zOTgtMS4yMjEsOC44MzktMy42NjFsOTkuMzg1LTk5LjM4NSAgICBjNC44ODEtNC44ODIsNC44ODEtMTIuNzk2LDAtMTcuNjc4QzIzMS4yNjksODkuMDg5LDIyMy4zNTQsODkuMDg5LDIxOC40NzMsOTMuOTd6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8L2c+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />';
	var icon_warning = '<img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUxMi4wMDEgNTEyLjAwMSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyLjAwMSA1MTIuMDAxOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjY0cHgiIGhlaWdodD0iNjRweCI+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTUwMy44MzksMzk1LjM3OWwtMTk1LjctMzM4Ljk2MkMyOTcuMjU3LDM3LjU2OSwyNzcuNzY2LDI2LjMxNSwyNTYsMjYuMzE1Yy0yMS43NjUsMC00MS4yNTcsMTEuMjU0LTUyLjEzOSwzMC4xMDIgICAgTDguMTYyLDM5NS4zNzhjLTEwLjg4MywxOC44NS0xMC44ODMsNDEuMzU2LDAsNjAuMjA1YzEwLjg4MywxOC44NDksMzAuMzczLDMwLjEwMiw1Mi4xMzksMzAuMTAyaDM5MS4zOTggICAgYzIxLjc2NSwwLDQxLjI1Ni0xMS4yNTQsNTIuMTQtMzAuMTAxQzUxNC43MjIsNDM2LjczNCw1MTQuNzIyLDQxNC4yMjgsNTAzLjgzOSwzOTUuMzc5eiBNNDc3Ljg2MSw0NDAuNTg2ICAgIGMtNS40NjEsOS40NTgtMTUuMjQxLDE1LjEwNC0yNi4xNjIsMTUuMTA0SDYwLjMwMWMtMTAuOTIyLDAtMjAuNzAyLTUuNjQ2LTI2LjE2Mi0xNS4xMDRjLTUuNDYtOS40NTgtNS40Ni0yMC43NSwwLTMwLjIwOCAgICBMMjI5Ljg0LDcxLjQxNmM1LjQ2LTkuNDU4LDE1LjI0LTE1LjEwNCwyNi4xNjEtMTUuMTA0YzEwLjkyLDAsMjAuNzAxLDUuNjQ2LDI2LjE2MSwxNS4xMDRsMTk1LjcsMzM4Ljk2MiAgICBDNDgzLjMyMSw0MTkuODM2LDQ4My4zMjEsNDMxLjEyOCw0NzcuODYxLDQ0MC41ODZ6IiBmaWxsPSIjRkZGRkZGIi8+Cgk8L2c+CjwvZz4KPGc+Cgk8Zz4KCQk8cmVjdCB4PSIyNDEuMDAxIiB5PSIxNzYuMDEiIHdpZHRoPSIyOS45OTYiIGhlaWdodD0iMTQ5Ljk4MiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgoJPGc+CgkJPHBhdGggZD0iTTI1NiwzNTUuOTljLTExLjAyNywwLTE5Ljk5OCw4Ljk3MS0xOS45OTgsMTkuOTk4czguOTcxLDE5Ljk5OCwxOS45OTgsMTkuOTk4YzExLjAyNiwwLDE5Ljk5OC04Ljk3MSwxOS45OTgtMTkuOTk4ICAgIFMyNjcuMDI3LDM1NS45OSwyNTYsMzU1Ljk5eiIgZmlsbD0iI0ZGRkZGRiIvPgoJPC9nPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=" />';

	$("#alert").html('<div class="box-modal box-modal-'+type+'">'+
						'<span class="icon-close icon-demo icon-cancel" title="Fechar" onclick="closeAlert();"></span>'+
						'<div class="type-response type-response-'+type+'">'+(type == "success" ? icon_check : (type == "danger" ? icon_cross : (type == "warning" ? icon_warning : '')))+'</div>'+
						'<span class="modal-title">'+title+'</span>'+
						'<div class="content-modal">'+
							'<p>'+message+'</p>'+
						'</div>'+
					'</div>'
					);
}

// Modal
// Inicialize Modal
function inicializeModal(title, message, type){
	$("#alert").fadeIn(200);
	createModal(title, message, type);
	centerBoxModal();
}

// Alert
// Change loading for modal
function changeLoadingForModal(title, message, type){
    $('#alert .box-loading').animate({ 
    	rotate : 90
    },{
        step: function(now, fx){
            $('#alert .box-loading').css("transform","rotateY("+now+"deg)");
        }, duration : 200
    }, 'linear');

    var remove_loading_add_modal = setTimeout(function(){
    	destroyLoading();
    	$('#alert .box-loading').remove();
    	createModal(title, message, type);
    	centerBoxModal();
    	$('#alert .box-modal').css({
        	transform : "rotateY(-90deg)"
        });

        $('#alert .box-modal').animate({ 
        	rotate : 90
        },{
            step: function(now, fx){
                $('#alert .box-modal').css("transform","rotateY("+(90 - now)+"deg)");
            }, duration : 200
        }, 'linear');
    	
    }, 200);
    clearInterval(loading_loop);
}

// Alert
// Close alert
function closeAlert(){
	clearInterval(loading_loop);
	$("#alert").fadeOut(200);
	$("#alert").html("");
}

// Alert
// Close alert redirect
function closeAlertRedirect(url){
	clearInterval(loading_loop);
	window.location.href = url;
}