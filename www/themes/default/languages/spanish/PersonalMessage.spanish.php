<?php
// Version: 1.1; PersonalMessage

$txt['pm_inbox'] = 'Índice de mensajes privados';
$txt['pm_add'] = 'Añadir';
$txt['make_bcc'] = 'Añadir CCO';
$txt['pm_to'] = 'Para';
$txt['pm_bcc'] = 'CCO';
$txt['inbox'] = 'Bandeja de Entrada';
$txt['conversation'] = 'Conversación ';
$txt['messages'] = 'Mensajes';
$txt['sent_items'] = 'Mensajes Enviados';
$txt['new_message'] = 'Mensaje Nuevo';
$txt['delete_message'] = 'Borrar Mensajes';
// Don't translate "PMBOX" in this string.
$txt['delete_all'] = 'Borrar todos los mensajes de tu PMBOX';
$txt['delete_all_confirm'] = '¿Estás seguro que deseas borrar todos los mensajes?';

$txt['delete_selected_confirm'] = '¿Deseas borrar todos los Mensajes Privados seleccionados?';

$txt['sent_to'] = 'Enviado a';
$txt['reply_to_all'] = 'Responder a todos';
$txt['delete_conversation'] = 'Eliminar conversación ';

$txt['pm_capacity'] = 'Capacidad';
$txt['pm_currently_using'] = '%1$s mensajes, %2$s%% lleno.';
$txt['pm_sent'] = 'Tu mensaje ha sido enviado correctamente.';

$txt['pm_error_user_not_found'] = 'No se pudo encontrar al usuario \'%1$s\'. ';
$txt['pm_error_ignored_by_user'] = 'El usuario \'%1$s\' ha bloqueado tu mensaje privado.';
$txt['pm_error_data_limit_reached'] = 'PM could not be sent to \'%1$s\' as their inbox is full.';
$txt['pm_error_user_cannot_read'] = 'El usuario \'%1$s\' no puede recibir mensajes privados.';
$txt['pm_successfully_sent'] = 'El mensaje privado se envió satisfactoriamente a \'%1$s\'.';
$txt['pm_send_report'] = 'Enviar informe';
$txt['pm_undisclosed_recipients'] = 'Destinatario(s) sin revelar';
$txt['pm_too_many_recipients'] = 'No puedes mandar mensajes privados a más de %1$d persona(s) a la vez.';

$txt['pm_read'] = 'Leído';
$txt['pm_replied'] = 'Respondido A';
$txt['pm_mark_unread'] = 'Mark as Unread';

// Message Pruning.
$txt['pm_prune'] = 'Prune messages';
$txt['pm_prune_desc'] = 'Delete all personal messages older than %1$s days.';
$txt['pm_prune_warning'] = '¿Estás seguro que deseas borrar tus mensajes privados?';

// Actions Drop Down.
$txt['pm_actions_title'] = 'Further actions';
$txt['pm_actions_delete_selected'] = 'Borrar seleccionados';
$txt['pm_actions_filter_by_label'] = 'Filter by label';
$txt['pm_actions_go'] = 'Ir';

// Manage Labels Screen.
$txt['pm_apply'] = 'Aplicar';
$txt['pm_manage_labels'] = 'Manage labels';
$txt['pm_labels_delete'] = '¿Estás seguro que deseas borrar las etiquetas seleccionadas?';
$txt['pm_labels_desc'] = 'Aquí puedes agregar, editar y borrar etiquetas utilizadas en el centro de mensajes privados.';
$txt['pm_label_add_new'] = 'Add new label';
$txt['pm_label_name'] = 'Label name';
$txt['pm_labels_no_exist'] = '¡No tienes ninguna etiqueta dada de alta!';

// Labeling Drop Down.
$txt['pm_current_label'] = 'Etiqueta';
$txt['pm_msg_label_title'] = 'Label message';
$txt['pm_msg_label_apply'] = 'Add label';
$txt['pm_msg_label_remove'] = 'Remove label';
$txt['pm_msg_label_inbox'] = 'Bandeja de Entrada';
$txt['pm_sel_label_title'] = 'Label selected';

// Sidebar Headings.
$txt['pm_labels'] = 'Etiquetas';
$txt['pm_messages'] = 'Mensajes';
$txt['pm_actions'] = 'Acciones';
$txt['pm_preferences'] = 'Preferencias';

$txt['pm_is_replied_to'] = 'Has reenviado o respondido a este mensaje.';

// Reporting messages.
$txt['pm_report_to_admin'] = 'Report to admin';
$txt['pm_report_title'] = 'Report personal message';
$txt['pm_report_desc'] = 'Desde esta página puedes informar sobre un mensaje privado a los administradores del foro. Asegúrate de incluir una descripción de la razón por la que quieres informar a los administradores, que se enviará con el contenido del mensaje original.';
$txt['pm_report_admins'] = 'Administrador al quieres informar';
$txt['pm_report_all_admins'] = 'Enviarlo a todos los administradores';
$txt['pm_report_reason'] = 'Razón por la que informas sobre este mensaje';
$txt['pm_report_message'] = 'Mensaje a Informar';

// Important - The following strings should use numeric entities.
$txt['pm_report_pm_subject'] = '[INFORMAR] ';
// In the below string, do not translate "{REPORTER}" or "{SENDER}".
$txt['pm_report_pm_user_sent'] = '{REPORTER} te informa sobre un mensaje privado, enviado por {SENDER}, por la siguiente razón:';
$txt['pm_report_pm_other_recipients'] = 'Otros destinatarios del mensaje:';
$txt['pm_report_pm_hidden'] = '%1$d destinatario(s) oculto(s)';
$txt['pm_report_pm_unedited_below'] = 'Debajo está el contenido original del mensaje privado:';
$txt['pm_report_pm_sent'] = 'Enviado:';

$txt['pm_report_done'] = 'Gracias por enviar este informe. Deberías tener noticias de los admins en breve';
$txt['pm_report_return'] = 'Volver a la Bandeja de Entrada';

$txt['pm_search_title'] = 'Search personal messages';
$txt['pm_search_bar_title'] = 'Search messages';
$txt['pm_search_text'] = 'Buscar por';
$txt['pm_search_go'] = 'Buscar';
$txt['pm_search_advanced'] = 'Show advanced options';
$txt['pm_search_simple'] = 'Hide advanced options';
$txt['pm_search_user'] = 'Por el usuario';
$txt['pm_search_match_all'] = 'Coincidir todas las palabras';
$txt['pm_search_match_any'] = 'Coincidir con cualquier palabra';
$txt['pm_search_options'] = 'Opciones';
$txt['pm_search_post_age'] = 'Antigüedad';
$txt['pm_search_show_complete'] = 'Mostrar los resultados como mensajes.';
$txt['pm_search_subject_only'] = 'Asuntos y autores solamente.';
$txt['pm_search_sent_only'] = 'Search only in sent items.';
$txt['pm_search_between'] = 'entre';
$txt['pm_search_between_and'] = 'y';
$txt['pm_search_between_days'] = 'días';
$txt['pm_search_order'] = 'Ordenar resultados por';
$txt['pm_search_choose_label'] = 'Escoger dónde buscar, o buscar en todos';

$txt['pm_search_results'] = 'Search results';
$txt['pm_search_none_found'] = 'No messages found';

$txt['pm_search_orderby_relevant_first'] = 'Más relevantes primero';
$txt['pm_search_orderby_recent_first'] = 'Más recientes primero';
$txt['pm_search_orderby_old_first'] = 'Más antiguos primero';

$txt['pm_visual_verification_label'] = 'Verificación';
$txt['pm_visual_verification_desc'] = 'Please enter the code in the image above in order to send this PM.';

$txt['pm_settings'] = 'Change settings';
$txt['pm_change_view'] = 'Change view';

$txt['pm_manage_rules'] = 'Manage rules';
$txt['pm_manage_rules_desc'] = 'Las reglas de mensajes te permiten ordenar automáticamente los mensajes recibidos que dependan de una serie de criterios que definas. Arriba están todas las reglas que has configurado. Para editar una regla, simplemente pulsa en el nombre de la regla.';
$txt['pm_rules_none'] = 'No has establecido aún ninguna regla de mensajes.';
$txt['pm_rule_title'] = 'Regla';
$txt['pm_add_rule'] = 'Add new rule';
$txt['pm_apply_rules'] = 'Apply rules now';
// Use entities in the below string.
$txt['pm_js_apply_rules_confirm'] = '¿Estás seguro de que quieres aplicar las reglas actuales a todos los mensajes privados?';
$txt['pm_edit_rule'] = 'Edit rule';
$txt['pm_rule_save'] = 'Save rule';
$txt['pm_delete_selected_rule'] = 'Delete selected rules';
// Use entities in the below string.
$txt['pm_js_delete_rule_confirm'] = '¿Estás seguro de que quieres eliminar las reglas seleccionadas?';
$txt['pm_rule_name'] = 'Nombre';
$txt['pm_rule_name_desc'] = 'Nombre para recordar esta regla por';
$txt['pm_rule_name_default'] = '[NOMBRE]';
$txt['pm_rule_description'] = 'Descripción';
$txt['pm_rule_not_defined'] = 'Añade algunas condiciones para comenzar a crear la descripción de esta regla.';
$txt['pm_rule_js_disabled'] = '<span class="alert"><b>Nota:</b> Parece que tienes javascript deshabilitado. Te recomendamos que lo habilites para usar esta característica.';
$txt['pm_rule_criteria'] = 'Condición';
$txt['pm_rule_criteria_add'] = 'Add criteria';
$txt['pm_rule_criteria_pick'] = 'Choose criteria';
$txt['pm_rule_mid'] = 'Sender name';
$txt['pm_rule_gid'] = 'Sender\'s group';
$txt['pm_rule_sub'] = 'Message subject contains';
$txt['pm_rule_msg'] = 'Message body contains';
$txt['pm_rule_bud'] = 'Sender is buddy';
$txt['pm_rule_sel_group'] = 'Select group';
$txt['pm_rule_logic'] = 'When checking criteria';
$txt['pm_rule_logic_and'] = 'Se deben cumplir todas las condiciones';
$txt['pm_rule_logic_or'] = 'Se puede cumplir alguna de las condiciones';
$txt['pm_rule_actions'] = 'Acciones';
$txt['pm_rule_sel_action'] = 'Select an action';
$txt['pm_rule_add_action'] = 'Add action';
$txt['pm_rule_label'] = 'Etiquetar mensaje con';
$txt['pm_rule_sel_label'] = 'Select label';
$txt['pm_rule_delete'] = 'Delete message';
$txt['pm_rule_no_name'] = 'Olvidaste introducir el nombre de la regla.';
$txt['pm_rule_no_criteria'] = 'Una regla debe tener al menos una condición y una acción.';
$txt['pm_rule_too_complex'] = 'The rule you are creating is too long to save. Try breaking it up into smaller rules.';

$txt['pm_readable_and'] = '<em>y</em>';
$txt['pm_readable_or'] = '<em>o</em>';
$txt['pm_readable_start'] = 'Si ';
$txt['pm_readable_end'] = '.';
$txt['pm_readable_member'] = 'el mensaje es de &quot;{MEMBER}&quot;';
$txt['pm_readable_group'] = 'el remitente es del grupo &quot;{GROUP}&quot;';
$txt['pm_readable_subject'] = 'el asunto contiene &quot;{SUBJECT}&quot;';
$txt['pm_readable_body'] = 'el cuerpo del mensaje contiene &quot;{BODY}&quot;';
$txt['pm_readable_buddy'] = 'el remitente es un amigo';
$txt['pm_readable_label'] = 'aplicar la etiqueta &quot;{LABEL}&quot;';
$txt['pm_readable_delete'] = 'eliminar el mensaje';
$txt['pm_readable_then'] = '<strong>entonces</strong>';