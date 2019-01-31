<?php

function order_form_shortcode() {
	return "
		<form action='' method='POST' id='order-form'>
			<div class='row'>
				<div class='col-md-3'>
					<p><input type='checkbox' name='order-services[]' value='Услуги грузчиков' id='loaders'><label for='loaders'>Услуги грузчиков</label></p>
					<p><input type='checkbox' name='order-services[]' value='Квартирный переезд' id='flat_moving'><label for='flat_moving'>Квартирный переезд</label></p>
					<p><input type='checkbox' name='order-services[]' value='Офисный переезд' id='office_moving'><label for='office_moving'>Офисный переезд</label></p>
				</div>
				
				<div class='col-md-3'>
					<p><input type='checkbox' name='order-services[]' value='Грузоперевозки' id='shipping'><label for='shipping'>Грузоперевозки</label></p>
					<p><input type='checkbox' name='order-services[]' value='Такелажные работы' id='rigging_work'><label for='rigging_work'>Такелажные работы</label></p>
					<p><input type='checkbox' name='order-services[]' value='Решения для бизнеса' id='business_decisions'><label for='business_decisions'>Решения для бизнеса</label></p>
				</div>
			</div>

			<div class='row'>
				<div class='col-md-6'>
					<input type='hidden' name='form-type' value='order_form'>
				
					<i class='fa fa-user sign'></i><input type='text' name='order_name' id='order_name' class='form-field' placeholder='Имя *' required>
					<div class='clearfix'></div>

					<i class='fa fa-phone sign'></i><input type='text' name='order_phone' id='order_phone' class='form-field' placeholder='Телефон *' required>
					<div class='clearfix'></div>
					
					<textarea name='order-comment' id='order-comment' placeholder='Комментарий' class='form-field'></textarea>

					<button type='reset' class='btn btn-medium btn-blue'><i class='fa fa-eraser'></i>Очистить</button>
					<button type='submit' id='send_btn' class='btn btn-medium btn-blue'><i class='fa fa-paper-plane'></i>Отправить</button>
					
					<p class='note-default'>Прим.: поля, отмеченные знаком * обязательны для заполнения.</p>
				</div>
			</div>
		</form>
	";
}

?>