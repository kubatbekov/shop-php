/*price range*/

 $('#sl2').slider();

	var RGBChange = function() {
	  $('#RGB').css('background', 'rgb('+r.getValue()+','+g.getValue()+','+b.getValue()+')')
	};	
		
/*scroll to top*/

$(document).ready(function(){
	$(function () {
		$.scrollUp({
	        scrollName: 'scrollUp', // Element ID
	        scrollDistance: 300, // Distance from top/bottom before showing element (px)
	        scrollFrom: 'top', // 'top' or 'bottom'
	        scrollSpeed: 300, // Speed back to top (ms)
	        easingType: 'linear', // Scroll to top easing (see http://easings.net/)
	        animation: 'fade', // Fade, slide, none
	        animationSpeed: 200, // Animation in speed (ms)
	        scrollTrigger: false, // Set a custom triggering element. Can be an HTML string or jQuery object
					//scrollTarget: false, // Set a custom target element for scrolling to the top
	        scrollText: '<i class="fa fa-angle-up"></i>', // Text for element, can contain HTML
	        scrollTitle: false, // Set a custom <a> title if required.
	        scrollImg: false, // Set true to use image
	        activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
	        zIndex: 2147483647 // Z-Index for the overlay
		});
	});
});

function delProduct(){
    if(confirm("Вы уверены что хотите удалить?")){
        return true;
    }
    else{
        return false;
    }
}
// Выбираем под категорию
$(document).ready(function () {
    $("#Selectcategory").bind("change", function () {
        // отправляем ajax запрос к action
        var Selectvalue=$("#Selectcategory").val();
        $.ajax({
            url: "/admin/product/subcategory",
            method: 'POST',
            data:({value:Selectvalue}),
            success:function(response){
                $("#subcategory").html(response);
            },
            error:function () {
                alert('error ajax');
            }
        });
    });
});

// Добавляем товар в корзину
$(document).ready(function () {
    $(".add-to-cart").bind("click", function () {
        // Получаем id товара
        var id=$(this).attr('data-id');
        // отправляем ajax запрос к action
        $.ajax({
            url: "/cart/addAjax/"+id,
            method: 'POST',
            success:function(response){
                $("#cartCount").html(response);
            },
            error:function () {
                alert('error ajax');
            }
        });
    });
});
