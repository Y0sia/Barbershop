$(document).ready(function() {

	var id_barber = 0;

	$("select.main__form-barber").change(function() {
		option_value = $(this).find("option:selected").val();
		let id_barber = $(this).find("option:selected").text();
		showMessage(option_value, id_barber);
	});

	$(".main__events__list li").click(function() {
		let time_id = $(this).data('id');
	});

	function showMessage(value, name) {
		var message = $(".main__message h3");
		if(value == 0) message.text("Не выбран парикмахер");
		else message.text(name);
	}

	function showShedule(value)
    {
        $('.main__events').css('display', 'none');
        if(value != 0) {
            console.log($('#id-' + value +''));
            $('.main__events__id-' + value +'').css('display', 'flex');
        }
    }

    $('.main__form-barber').on('change', function() {
        id_barber = $(this).find("option:selected").val();
        let option_name = $(this).find("option:selected").text();
        showMessage(id_barber, option_name);
        showShedule(id_barber);
    });
});
