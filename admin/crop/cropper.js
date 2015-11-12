(function($){

    $(window).bind('onCropperSubmit');



	$.fn.OpenCropper = function(){
		$(this).click(function(event) {
			event.preventDefault();
        	$.fn.actionOpenCropper();
		});
	}

	$.fn.actionCloseCropper = function(){
		$('#cropper-loader').animate({opacity: 0}, 500,function(){
	          		$('.image-loader-container').animate({opacity: 0}, 500 ,function(){
	        			$('.image-loader-container').css('z-index', '-1000');
	          		})
	          	});
	}

	$.fn.actionOpenCropper = function(){
		$('.image-loader-container').css('z-index', '1000');
        	$('.image-loader-container').animate({opacity: 1}, 1000);
	}

	$.fn.CloseCropper = function(){
		$(this).click(function(event) {
			event.preventDefault();
			$.fn.actionCloseCropper();
		});
	}

	$.fn.sendCropData = function(dataSend,preview,result){
		$.post('crop/post.php', {data: dataSend}, function(data, textStatus, xhr) {
          		preview.attr('src',"../upload/"+data);
	          	result.val(data);
	          	$.fn.actionCloseCropper();
	          	$(window).trigger('onCropperSubmit');
          });

	}


	$.fn.onCropSubmit = function(parameters,callback){
		$(this).submit(function(event) {
			event.preventDefault();


			var options = $.extend(true, {
				preview: $('#preview'),
				result : $('#image-name')
			}, parameters);
			

            var imageData = $('.image-editor').cropit('export');
             $('#cropper-loader').animate({opacity: 1}, 500);

             $.fn.sendCropData(imageData,options.preview,options.result);
            

		});
	};


	$.fn.CropSubmitButtons = function(){
		$(this).click(function(event) {
			event.preventDefault();
			var id = $(this).attr('id');
				id = parseInt(id.replace(/launch-image-loader-/ig,''));

			$(window).on('onCropperSubmit',function(){
				$('#preview').attr('src', '');
				$("#result").val("");
			});

			$('#crop-form').onCropSubmit({
				preview: $('#preview-'+id),
				result: $("#result-"+id)
			});	
			$.fn.actionOpenCropper();


			//console.info('Reporting id :', id);
		});
	}


})(jQuery);