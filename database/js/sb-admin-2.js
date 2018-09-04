/*!
 * Start Bootstrap - SB Admin 2 v3.3.7+1 (http://startbootstrap.com/template-overviews/sb-admin-2)
 * Copyright 2013-2016 Start Bootstrap
 * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap/blob/gh-pages/LICENSE)
 */
$(function() {
    $('#side-menu').metisMenu();
});

//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
// Sets the min-height of #page-wrapper to window size
$(function() {
    $(window).bind("load resize", function() {
        var topOffset = 50;
        var width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.navbar-collapse').addClass('collapse');
            topOffset = 100; // 2-row-menu
        } else {
            $('div.navbar-collapse').removeClass('collapse');
        }

        var height = ((this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height) - 1;
        height = height - topOffset;
        if (height < 1) height = 1;
        if (height > topOffset) {
            $("#page-wrapper").css("min-height", (height) + "px");
        }
    });

    var url = window.location;
    // var element = $('ul.nav a').filter(function() {
    //     return this.href == url;
    // }).addClass('active').parent().parent().addClass('in').parent();
    var element = $('ul.nav a').filter(function() {
        return this.href == url;
    }).addClass('active').parent();

    while (true) {
        if (element.is('li')) {
            element = element.parent().addClass('in').parent();
        } else {
            break;
        }
    }
});

$(function(){

    $.fn.editable.defaults.mode = 'inline';
 
   $('#btn-1').editable({
        type: 'text',
		pk:1,
		placement: 'top',
		url: baseurl+'clienthome/changebtnlbl',
		title: 'Enter Button label',		
		 });
    $('#btn-1').off('click');
	
	$('#btn-2').editable({
        type: 'text',
		pk:2,
		placement: 'top',
		url: baseurl+'clienthome/changebtnlbl',
		title: 'Enter Button label',
    });
    $('#btn-2').off('click');
	
	$('#btn-3').editable({
        type: 'text',
		pk:3,
		placement: 'top',
		url: baseurl+'clienthome/changebtnlbl',
		title: 'Enter Button label',
    });
    $('#btn-3').off('click');
	
	$('#btn-4').editable({
        type: 'text',
		pk:4,
		placement: 'top',
		url: baseurl+'clienthome/changebtnlbl',
		title: 'Enter Button label',
    });
    $('#btn-4').off('click');
	
	$('#btn-5').editable({
        type: 'text',
		pk:5,
		placement: 'top',
		url: baseurl+'clienthome/changebtnlbl',
		title: 'Enter Button label',
    });
    $('#btn-5').off('click');
	
	$('#btn-6').editable({
        type: 'text',
		pk:6,
		placement: 'top',
		url: baseurl+'clienthome/changebtnlbl',
		title: 'Enter Button label',
    });
    $('#btn-6').off('click');
	
	$('#btn-7').editable({
        type: 'text',
		pk:7,
		placement: 'top',
		url: baseurl+'clienthome/changebtnlbl',
		title: 'Enter Button label',
    });
    $('#btn-7').off('click');
	
	$('#btn-8').editable({
        type: 'text',
		pk:8,
		placement: 'top',
		url: baseurl+'clienthome/changebtnlbl',
		title: 'Enter Button label',
    });
    $('#btn-8').off('click');
    
	$('#usrbtn-1').editable({
        type: 'text',
		pk:1,
		placement: 'top',
		url: baseurl+'userhome/changebtnlbl',
		title: 'Enter Button label',
		validate:function(value){
		//alert(valib.String.length.gt(value, 3));
		var v=valib.String.length.gt(value, 3); 
		if(v==false) return 'Button name must be greater than 3 char length.';
		var v=valib.String.length.lte(value, 8);        
		if(v==false) return 'Button name must be less than or equal to 8 char length.';
		},
		 });
    $('#usrbtn-1').off('click');
	
	$('#usrbtn-2').editable({
        type: 'text',
		pk:2,
		placement: 'top',
		url: baseurl+'userhome/changebtnlbl',
		title: 'Enter Button label',
		validate:function(value){
		//alert(valib.String.length.gt(value, 3));
		var v=valib.String.length.gt(value, 3); 
		if(v==false) return 'Button name must be greater than 3 char length.';
		var v=valib.String.length.lte(value, 8);        
		if(v==false) return 'Button name must be less than or equal to 8 char length.';
		},
    });
    $('#usrbtn-2').off('click');
	
	$('#usrbtn-3').editable({
        type: 'text',
		pk:3,
		placement: 'top',
		url: baseurl+'userhome/changebtnlbl',
		title: 'Enter Button label',
		validate:function(value){
		//alert(valib.String.length.gt(value, 3));
		var v=valib.String.length.gt(value, 3); 
		if(v==false) return 'Button name must be greater than 3 char length.';
		var v=valib.String.length.lte(value, 8);        
		if(v==false) return 'Button name must be less than or equal to 8 char length.';
		},
    });
    $('#usrbtn-3').off('click');
	
	$('#usrbtn-4').editable({
        type: 'text',
		pk:4,
		placement: 'top',
		url: baseurl+'userhome/changebtnlbl',
		title: 'Enter Button label',
		validate:function(value){
		//alert(valib.String.length.gt(value, 3));
		var v=valib.String.length.gt(value, 3); 
		if(v==false) return 'Button name must be greater than 3 char length.';
		var v=valib.String.length.lte(value, 8);        
		if(v==false) return 'Button name must be less than or equal to 8 char length.';
		},
    });
    $('#usrbtn-4').off('click');
	
	$('#usrbtn-5').editable({
        type: 'text',
		pk:5,
		placement: 'top',
		url: baseurl+'userhome/changebtnlbl',
		title: 'Enter Button label',
		validate:function(value){
		//alert(valib.String.length.gt(value, 3));
		var v=valib.String.length.gt(value, 3); 
		if(v==false) return 'Button name must be greater than 3 char length.';
		var v=valib.String.length.lte(value, 8);        
		if(v==false) return 'Button name must be less than or equal to 8 char length.';
		},
    });
    $('#usrbtn-5').off('click');
	
	$('#usrbtn-6').editable({
        type: 'text',
		pk:6,
		placement: 'top',
		url: baseurl+'userhome/changebtnlbl',
		title: 'Enter Button label',
		validate:function(value){
		//alert(valib.String.length.gt(value, 3));
		var v=valib.String.length.gt(value, 3); 
		if(v==false) return 'Button name must be greater than 3 char length.';
		var v=valib.String.length.lte(value, 8);        
		if(v==false) return 'Button name must be less than or equal to 8 char length.';
		},
    });
    $('#usrbtn-6').off('click');
	
	$('#usrbtn-7').editable({
        type: 'text',
		pk:7,
		placement: 'top',
		url: baseurl+'userhome/changebtnlbl',
		title: 'Enter Button label',
		validate:function(value){
		//alert(valib.String.length.gt(value, 3));
		var v=valib.String.length.gt(value, 3); 
		if(v==false) return 'Button name must be greater than 3 char length.';
		var v=valib.String.length.lte(value, 8);        
		if(v==false) return 'Button name must be less than or equal to 8 char length.';
		},
    });
    $('#usrbtn-7').off('click');
	
	$('#usrbtn-8').editable({
        type: 'text',
		pk:8,
		placement: 'top',
		url: baseurl+'userhome/changebtnlbl',
		title: 'Enter Button label',
		validate:function(value){
		//alert(valib.String.length.gt(value, 3));
		var v=valib.String.length.gt(value, 3); 
		if(v==false) return 'Button name must be greater than 3 char length.';
		var v=valib.String.length.lte(value, 8);        
		if(v==false) return 'Button name must be less than or equal to 8 char length.';
		},
    });
    $('#usrbtn-8').off('click');

    $('.edit').on('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
		var btnid = $(this).prev().attr('id');
        //$textarea = $(this).closest('.panel-body').find('.editable');
        $('#'+btnid).editable('toggle');        
    });
	
	$('.singleedit').on('mouseover', function(e){
	  $(this).editable();
	});
	
   $('.li-var-name > a').on('click', function(e){
      var varble=$(this).text();
	  $.ajax({
            
            type: "POST",
            url: baseurl+'iotcontroller/singlevargraph',
            data:{variable:varble},
            success: function(data){
                $('#morris-area-chart').html('');			
                //console.log('Test result message of ajax')
				/*Morris.Line({
					element: 'morris-area-chart',
					data:data.dataarr,
					xLabelAngle: 90,
					xkey: 'period',
					ykeys: data.ykeys,
					labels:data.labels,
					pointSize: 2,
					hideHover: 'auto',
					resize: true,
						});*/
                //alert(data.user); 						
				Morris.Line({
				element: 'morris-area-chart',
				data: data.dataarr,
				xkey: 'period',
				ykeys: data.ykeys,
				labels: data.labels,
					});		
            }
        });
	});
     
   
});

$(document).ready(function() {
    $('#dataTables').DataTable( {
        responsive: true,
    } );
	$('#dataTable1').DataTable( {
        responsive: true,
    } );
} );

