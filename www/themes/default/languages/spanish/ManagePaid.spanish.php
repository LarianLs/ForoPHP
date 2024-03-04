<?php
// Version: 1.1; ManagePaid

// Symbols.
$txt['usd_symbol'] = '$%1.2f';
$txt['eur_symbol'] = '&euro;%1.2f';
$txt['gbp_symbol'] = '&pound;%1.2f';

$txt['usd'] = 'USD ($)';
$txt['eur'] = 'EURO (&euro;)';
$txt['gbp'] = 'GBP (&pound;)';
$txt['other'] = 'Otra';

$txt['paid_username'] = 'Usuario';

$txt['paid_subscriptions_desc'] = 'Desde esta sección se pueden añadir, quitar y modificar los métodos de pago por suscripción a tu foro.';
$txt['paid_subs_settings'] = 'Configuración';
$txt['paid_subs_settings_desc'] = 'Desde aquí puedes modificar los métodos de pago disponibles para tus usuarios.';
$txt['paid_subs_view'] = 'Ver Suscripciones';
$txt['paid_subs_view_desc'] = 'Desde esta sección puedes ver todas las suscripciones que tienes disponibles.';

// Setting type strings.
$txt['paid_enabled'] = 'Activar suscripciones de pago';
$txt['paid_enabled_desc'] = 'Esto debe estar marcado para habilitar las suscripciones de pago en el foro.';
$txt['paid_email'] = 'Enviar emails de notificación';
$txt['paid_email_desc'] = 'Informar al administrador cuando una suscripción cambie automáticamente.';
$txt['paid_email_to'] = 'Destinatarios email notificaciones';
$txt['paid_email_to_desc'] = 'Lista separada por comas de direcciones de email adicionales a las que enviar notificaciones además de a los administradores del foro.';
$txt['paidsubs_test'] = 'Habilitar modo de prueba';
$txt['paidsubs_test_desc'] = 'This puts the paid subscriptions mod into &quot;test&quot; mode, which will, whereever possible, use sandbox payment methods in paypal etc. Do not enable unless you know what you are doing!';
$txt['paidsubs_test_confirm'] = '¿Estás seguro de que quieres activar el modo de prueba?';
$txt['paid_email_no'] = 'No enviar ninguna notificación';
$txt['paid_email_error'] = 'Informar cuando la suscripción falle';
$txt['paid_email_all'] = 'Informar sobre todos los cambios de suscripción automáticos';
$txt['paid_currency'] = 'Selecciona Moneda';
$txt['paid_currency_code'] = 'Código de moneda';
$txt['paid_currency_code_desc'] = 'Código usado por las pasarelas de pago';
$txt['paid_currency_symbol'] = 'Símbolo usado por el método de pago';
$txt['paid_currency_symbol_desc'] = 'Usa \'%1.2f\' para especificar dónde va el número, por ejemplo $%1.2f, %1.2fDM etc ';

$txt['paypal_email'] = 'Dirección de email de Paypal';
$txt['paypal_email_desc'] = 'Déjalo en blanco si no quieres usar Paypal';

$txt['authorize_id'] = 'ID de instalación de Authorize.net';
$txt['authorize_id_desc'] = 'La ID de instalación generada por Authorize.net. Déjala en blanco si no vas a usar Authorize.net';
$txt['authorize_transid'] = 'ID de transacción de Authorize.net';

$txt['2co_id'] = 'ID de Instalación de 2checkout.com';
$txt['2co_id_desc'] = 'La ID de instalación generada por 2co.com. Déjalo en blanco si no vas a usar 2co.com';
$txt['2co_password'] = 'Palabra Secreta de 2checkout.com';
$txt['2co_password_desc'] = 'Tu palabra secreta de 2checkout.';
$txt['2co_password_wrong'] = 'Tu palabra secreta de 2checkout no fue aceptada';

$txt['paid_settings_save'] = 'Guardar';

$txt['paid_note'] = '<strong class="alert">Nota:</strong><br />Para que las suscripciones se actualicen atuomáticamente para los usuarios,
	deberás establecer una URL de retorno para cada uno de tus métodos de pago. Para todos los métodos de pago, esta URL se debe establecer como:<br /><br />
	&nbsp;&nbsp;&bull;&nbsp;&nbsp;<strong>{board_url}/subscriptions.php</strong><br /><br />
	Puedes editar en enlace de PayPal pulsando directamente <a href="https://www.paypal.com/us/cgi-bin/webscr?cmd=_profile-ipn-notify" target="_blank">aquí</a>.<br />
	Para otras entradas (en caso de que haya), puedes normalmente encontrarlas en tu panel de cliente, normalmente bajo el término &quot;Return URL&quot; or &quot;Callback URL&quot;.';

// View subscription strings.
$txt['paid_name'] = 'Nombre';
$txt['paid_status'] = 'Estado';
$txt['paid_cost'] = 'Coste';
$txt['paid_duration'] = 'Duración';
$txt['paid_active'] = 'Activa';
$txt['paid_pending'] = 'Pago Pendiente';
$txt['paid_finished'] = 'Finalizada';
$txt['paid_total'] = 'Total';
$txt['paid_is_active'] = 'Activado';
$txt['paid_none_yet'] = 'No has configurado ninguna suscripción.';
$txt['paid_none_ordered'] = 'No tienes ninguna suscripción.';
$txt['paid_payments_pending'] = 'Pendientes de Pago';
$txt['paid_order'] = 'Orden';

$txt['yes'] = 'Sí';
$txt['no'] = 'No';

// Add/Edit/Delete subscription.
$txt['paid_add_subscription'] = 'Añadir Suscripción';
$txt['paid_edit_subscription'] = 'Modificar Suscripción';
$txt['paid_delete_subscription'] = 'Eliminar Suscripción';

$txt['paid_mod_name'] = 'Nombre de la Suscripción';
$txt['paid_mod_desc'] = 'Descripción';
$txt['paid_mod_reminder'] = 'Enviar email de recordatorio';
$txt['paid_mod_reminder_desc'] = 'Días antes de la finalización de la suscripción para mandar un recordatorio (en días, 0 para deshabilitar).';
$txt['paid_mod_email'] = 'Email a enviar al finalizar';
$txt['paid_mod_email_desc'] = 'Donde {NAME} es el nombre del usuario; {FORUM} es el nombre de la comunidad. El asunto del email debería estar en la primera línea. En blanco si no se quiere notificación por email.';
$txt['paid_mod_cost_usd'] = 'Coste (USD)';
$txt['paid_mod_cost_eur'] = 'Coste (EUR)';
$txt['paid_mod_cost_gbp'] = 'Coste (GBP)';
$txt['paid_mod_cost_blank'] = 'Deja esto en blanco si no quieres ofrecer esta moneda.';
$txt['paid_mod_span'] = 'Duración de la suscripción';
$txt['paid_mod_span_days'] = 'Días';
$txt['paid_mod_span_weeks'] = 'Semanas';
$txt['paid_mod_span_months'] = 'Meses';
$txt['paid_mod_span_years'] = 'Años';
$txt['paid_mod_active'] = 'Activa';
$txt['paid_mod_active_desc'] = 'Una suscripción debe estar activa para que los nuevos miembros puedan unirse.';
$txt['paid_mod_prim_group'] = 'Grupo primario al suscribirse';
$txt['paid_mod_prim_group_desc'] = 'Grupo primario en el que colocar a los usuarios cuando se suscriben.';
$txt['paid_mod_add_groups'] = 'Grupos adicionales al suscribirse';
$txt['paid_mod_add_groups_desc'] = 'Grupos adicionales a los que añadir a los usuarios tras su suscripción.';
$txt['paid_mod_no_group'] = 'No cambiar';
$txt['paid_mod_edit_note'] = 'Tenga en cuenta que dado que este grupo ya tiene suscriptores los ajustes de dicho grupo no pueden ser cambiados.';
$txt['paid_mod_delete_warning'] = '<strong>AVISO</strong><br /><br />Si borras esta suscripción todos los usuarios actualmente suscritos perderán cualquier permiso de acceso concedido por dicha suscripción. A menos que estés seguro de que quieres hacer esto se recomienda que simplemente desactives la suscripción, en vez de borrarla.<br />';
$txt['paid_mod_repeatable'] = 'Permitir a los usuario auto-renovar esta suscripción.';
$txt['paid_mod_allow_partial'] = 'Permitir suscripción parcial';
$txt['paid_mod_allow_partial_desc'] = 'Si esta opción está activada, en el caso en el que un usuario pague menos de lo requerido se le concederá una suscripción por la fracción de tiempo por la que ha pagado.';
$txt['paid_mod_fixed_price'] = 'Suscripción por un precio y periodo fijos';
$txt['paid_mod_flexible_price'] = 'El precio de la suscripción varía según la duración';
$txt['paid_mod_price_breakdown'] = 'Desglose de precios flexibles';
$txt['paid_mod_price_breakdown_desc'] = 'Define aquí cuánto debería costar la suscripción en función del periodo contratado. Por ejemplo, podría costar 12EUR suscribirse por un mes, pero solo 100EUR por un año. Si no quieres definir un precio para un periodo concreto, déjalo en blanco.';
$txt['flexible'] = 'Flexible';

$txt['paid_per_day'] = 'Precio por día';
$txt['paid_per_week'] = 'Precio por semana';
$txt['paid_per_month'] = 'Precio por mes';
$txt['paid_per_year'] = 'Precio por año';
$txt['day'] = 'Día';
$txt['week'] = 'Semana';
$txt['month'] = 'Mes';
$txt['year'] = 'Año';

// View subscribed users.
$txt['viewing_users_subscribed'] = 'Viendo usuarios';
$txt['view_users_subscribed'] = 'Viendo usuarios suscritos a: &quot;%1$s&quot; ';
$txt['no_subscribers'] = 'No hay suscriptores en esta suscripción';
$txt['add_subscriber'] = 'Añadir nuevo suscriptor';
$txt['edit_subscriber'] = 'Editar suscriptor';
$txt['delete_selected'] = 'Borrar seleccionados';
$txt['complete_selected'] = 'Completar seleccionados';

// @todo These strings are used in conjunction with JavaScript.  Use numeric entities.
$txt['delete_are_sure'] = 'Are you sure you want to delete all record of the selected subscriptions?';
$txt['complete_are_sure'] = '¿Estás seguro de que quieres borrar por completo las suscripciones seleccionadas?';

$txt['start_date'] = 'Fecha de Inicio';
$txt['end_date'] = 'Fecha de Finalización';
$txt['start_date_and_time'] = 'Fecha y hora de inicio';
$txt['end_date_and_time'] = 'Fecha y hora de finalización';
$txt['one_username'] = 'Por favor, introduzca un único nombre de usuario.';
$txt['minute'] = 'Minuto';
$txt['error_member_not_found'] = 'El usuario introducido no pudo ser encontrado';
$txt['member_already_subscribed'] = 'Este usuario ya está suscrito a este plan. Por favor, edite su suscripción.';
$txt['search_sub'] = 'Encontrar usuario';

// Make payment.
$txt['paid_confirm_payment'] = 'Confirmar Pago';
$txt['paid_confirm_desc'] = 'Para continuar el proceso de pago por favor comprueba los detalles abajo y pulsa &quot;Ordenar&quot;';
$txt['paypal'] = 'PayPal';
$txt['paid_confirm_paypal'] = 'Para pagar mediante <a href="http://www.paypal.com">PayPal</a> por favor haz clic en el botón de abajo. Serás dirigido al sitio de PayPal para el pago. ';
$txt['paid_paypal_order'] = 'Ordenar con PayPal';
$txt['authorize'] = 'Authorize.Net';
$txt['paid_confirm_authorize'] = 'Para pagar usando <a href="http://www.authorize.net">Authorize.Net</a> haga clic en el botón de abajo, por favor. Debería ser redirigido al sitio de pago de Authorize.Net.';
$txt['paid_authorize_order'] = 'Hacer pedido con Authorize.net';
$txt['2co'] = '2checkout';
$txt['paid_confirm_2co'] = 'Para pagar usando <a href="http://www.2co.com">2co.com</a> haga clic en el botón de abajo, por favor. Debería ser redirigido al sitio de pago de 2co.com.';
$txt['paid_2co_order'] = 'Hacer pedido con 2co.com';
$txt['paid_done'] = 'Pago Completado';
$txt['paid_done_desc'] = 'Gracias por tu pago. En cuanto la transacción se haya verificado se activará la suscripción.';
$txt['paid_sub_return'] = 'Volver a Suscripciones';
$txt['paid_current_desc'] = 'Debajo hay una lista de todas tus suscripciones actuales y previas. Para extender una suscripción existente simplemente selecciónala de la lista de arriba.';
$txt['paid_admin_add'] = 'Añadir esta Suscripción';

$txt['paid_not_set_currency'] = 'You have not setup your currency yet. Please do so from the settings menu before continuing';
$txt['paid_no_cost_value'] = 'Debe introducir un coste y un periodo de suscripción.';
$txt['paid_all_freq_blank'] = 'Debe introducir un coste para al menos uno de los cuatro periodos.';

// Some error strings.
$txt['paid_no_data'] = 'Se enviaron datos incorrectos al script';

$txt['paypal_could_not_connect'] = 'No se pudo conectar al servidor de PayPal';
$txt['paypal_currency_unkown'] = 'El código de moneda de PayPal (%1$s) no coincide con el código de tus ajustes (%2$s)';
$txt['paid_sub_not_active'] = 'Esa suscripción no acepta nuevos usuarios.';
$txt['paid_disabled'] = 'Las suscripciones de pago están actualmente deshabilitadas.';
$txt['paid_unknown_transaction_type'] = 'Tipo de transacción de suscripción de pago desconocido.';
$txt['paid_empty_member'] = 'El manejador de suscripción de pago no pudo recuperar la ID de usuario.';
$txt['paid_could_not_find_member'] = 'El manejador de suscripción de pago no pudo encontrar al usuario con ID: %1$d';
$txt['paid_count_not_find_subscription'] = 'El manejador de suscripción de pago no pudo encontrar suscripción para la ID de usuario: %1$s, ID de suscripción: %2$s ';
$txt['paid_count_not_find_subscription_log'] = 'El manejador de suscripción de pago no pudo encontrar entrada en el registro de suscripción para la ID de usuario: %1$s, ID de suscripción: %2$s ';
$txt['paid_count_not_find_outstanding_payment'] = 'Coud not find outstanding payment entry for member ID: %1$s, subscription ID: %2$s so ignoring';
$txt['paid_admin_not_setup_gateway'] = 'Lo sentimos, el administrador aún no ha terminado de configurar las suscripciones de pago. Por favor, vuelva a intentarlo más tarde.';
$txt['paid_make_recurring'] = 'Hacer un pago periódico';

$txt['subscriptions'] = 'Suscripciones';
$txt['subscription'] = 'Suscripción';
$txt['subscribers'] = 'Suscriptores';
$txt['paid_subs_desc'] = 'A continuación hay una lista de todas las suscripciones disponibles en este sitio.';
$txt['paid_subs_none'] = 'No hay suscripciones de pagos disponibles actualmente';

$txt['paid_current'] = 'Suscripciones Existentes';
$txt['pending_payments'] = 'Pagos Pendientes';
$txt['pending_payments_desc'] = 'Este usuario ha intentado hacer los siguientes pagos para esta suscripción, pero la confirmación no ha sido recibida por el foro. Si estás seguro de que el pago ha sido recibido haz clic en &quot;aceptar&quot; para activar la suscripción. Alternativamente puedes hacer clic en &quot;Eliminar&quot; para eliminar cualquier referencia al pago.';
$txt['pending_payments_value'] = 'Valor';
$txt['pending_payments_accept'] = 'Aceptar';
$txt['pending_payments_remove'] = 'Eliminar';