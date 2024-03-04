<?php
// Version: 1.1; index

global $forum_copyright;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'es_ES.utf8';
$txt['lang_dictionary'] = 'es';
$txt['lang_spelling'] = 'spanish';

// Ensure you remember to use uppercase for character set strings.
$txt['lang_character_set'] = 'UTF-8';
// Character set and right to left?
$txt['lang_rtl'] = false;
// Capitalize day and month names?
$txt['lang_capitalize_dates'] = true;
// Number format.
$txt['number_format'] = '1,234.00';

$txt['sunday'] = 'Domingo';
$txt['monday'] = 'Lunes';
$txt['tuesday'] = 'Martes';
$txt['wednesday'] = 'Miércoles';
$txt['thursday'] = 'Jueves';
$txt['friday'] = 'Viernes';
$txt['saturday'] = 'Sábado';

$txt['sunday_short'] = 'Dom';
$txt['monday_short'] = 'Lun';
$txt['tuesday_short'] = 'Mar';
$txt['wednesday_short'] = 'Mie';
$txt['thursday_short'] = 'Jue';
$txt['friday_short'] = 'Vie';
$txt['saturday_short'] = 'Sab';

$txt['january'] = 'Enero';
$txt['february'] = 'Febrero';
$txt['march'] = 'Marzo';
$txt['april'] = 'Abril';
$txt['may'] = 'May';
$txt['june'] = 'Junio';
$txt['july'] = 'Julio';
$txt['august'] = 'Agosto';
$txt['september'] = 'Septiembre';
$txt['october'] = 'Octubre';
$txt['november'] = 'Noviembre';
$txt['december'] = 'Diciembre';

$txt['january_titles'] = 'Enero';
$txt['february_titles'] = 'Febrero';
$txt['march_titles'] = 'Marzo';
$txt['april_titles'] = 'Abril';
$txt['may_titles'] = 'May';
$txt['june_titles'] = 'Junio';
$txt['july_titles'] = 'Julio';
$txt['august_titles'] = 'Agosto';
$txt['september_titles'] = 'Septiembre';
$txt['october_titles'] = 'Octubre';
$txt['november_titles'] = 'Noviembre';
$txt['december_titles'] = 'Diciembre';

$txt['january_short'] = 'Ene';
$txt['february_short'] = 'Feb';
$txt['march_short'] = 'Mar';
$txt['april_short'] = 'Abr';
$txt['may_short'] = 'May';
$txt['june_short'] = 'Jun';
$txt['july_short'] = 'Jul';
$txt['august_short'] = 'Ago';
$txt['september_short'] = 'Sep';
$txt['october_short'] = 'Oct';
$txt['november_short'] = 'Nov';
$txt['december_short'] = 'Dic';

$txt['time_am'] = 'am';
$txt['time_pm'] = 'pm';

// Let's get all the main menu strings in one place.
$txt['home'] = 'Inicio';
$txt['community'] = 'Comunidad';
// Sub menu labels
$txt['help'] = 'Ayuda';
$txt['search'] = 'Buscar';
$txt['calendar'] = 'Calendario';
$txt['members'] = 'Controles de los Usuarios';
$txt['recent_posts'] = 'Mensajes recientes';
$txt['recent_topics'] = 'Temas Recientes';

$txt['admin'] = 'Administración';
// Sub menu labels
$txt['errlog'] = 'Log de Errores';
$txt['package'] = 'Gestor de paquetes';
$txt['edit_permissions'] = 'Permisos';
$txt['modSettings_title'] = 'Características y Opciones';

$txt['moderate'] = 'Moderar';
// Sub menu labels
$txt['modlog_view'] = 'Registro de moderación';
$txt['mc_emailerror'] = 'Emails no Aprobados';
$txt['mc_reported_posts'] = 'Mensajes Informados';
$txt['mc_reported_pms'] = 'Reported Personal Messages';
$txt['mc_unapproved_attachments'] = 'Adjuntos no aprobados';
$txt['mc_unapproved_poststopics'] = 'Mensajes y Temas no aprobados';

$txt['pm_short'] = 'Mis mensajes';
// Sub menu labels
$txt['pm_menu_read'] = 'Leer tus mensajes';
$txt['pm_menu_send'] = 'Enviar un mensaje';

$txt['account_short'] = 'Mi Cuenta';
// Sub menu labels
$txt['profile'] = 'Perfil';
$txt['mydrafts'] = 'My Drafts';
$txt['summary'] = 'Resumen';
$txt['theme'] = 'Configuración de Apariencia y Diseño';
$txt['account'] = 'Configuración de Cuenta';
$txt['forumprofile'] = 'Perfil del Foro';

$txt['view_unread_category'] = 'Nuevos Mensajes';
$txt['view_replies_category'] = 'Nuevas Respuestas';

$txt['login'] = 'Iniciar Sesión';
$txt['register'] = 'Registrarse';
$txt['logout'] = 'Cerrar Sesión';
// End main menu strings.

$txt['save'] = 'Guardar';

$txt['modify'] = 'Modificar';
$txt['forum_index'] = '%1$s - Índice';
$txt['board_name'] = 'Nombre del foro';
$txt['posts'] = 'Mensajes';

$txt['member_postcount'] = 'Mensajes';
$txt['no_subject'] = '(Sin asunto)';
$txt['view_profile'] = 'Ver Perfil';
$txt['guest_title'] = 'Visitante';
$txt['author'] = 'Autor';
$txt['on'] = 'en';
$txt['remove'] = 'Eliminar';
$txt['start_new_topic'] = 'Crear nuevo tema';

// Use numeric entities in the below string.
$txt['username'] = 'Usuario';
$txt['password'] = 'Contraseña';

$txt['username_no_exist'] = 'Nombre de usuario no existente.';
$txt['no_user_with_email'] = 'No hay usuarios asociados a este email.';

$txt['board_moderator'] = 'Moderador del Foro';
$txt['remove_topic'] = 'Eliminar';
$txt['topics'] = 'Temas';
$txt['modify_msg'] = 'Modificar mensaje';
$txt['name'] = 'Nombre';
$txt['email'] = 'Email';
$txt['user_email_address'] = 'Dirección Email';
$txt['subject'] = 'Asunto';
$txt['message'] = 'Mensaje';
$txt['redirects'] = 'Redirecciones';

$txt['choose_pass'] = 'Escoge contraseña';
$txt['verify_pass'] = 'Verifica contraseña';
$txt['position'] = 'Grupo';
$txt['notify_announcements'] = 'Sign up to receive important site news by email';

$txt['profile_of'] = 'Ver perfil de';
$txt['total'] = 'Total';
$txt['posts_made'] = 'Mensajes';
$txt['topics_made'] = 'Temas';
$txt['website'] = 'Web';
$txt['contact'] = 'Contacto';
$txt['warning_status'] = 'Estado de Advertencia';
$txt['user_warn_watch'] = 'El usuario está en la lista de vigilados';
$txt['user_warn_moderate'] = 'Cola de aprobación de mensajes de usuarios';
$txt['user_warn_mute'] = 'El usuario tiene restringida la publicación de mensajes';
$txt['warn_watch'] = 'Vigilado';
$txt['warn_moderate'] = 'Moderado';
$txt['warn_mute'] = 'Enmudecido';
$txt['warning_issue'] = 'Advertir';

$txt['message_index'] = 'Índice de Mensajes';
$txt['news'] = 'Noticias';
$txt['page'] = 'Página';
$txt['prev'] = 'anterior';
$txt['next'] = 'siguiente';

$txt['post'] = 'Publicar';
$txt['error_occurred'] = 'Ha Ocurrido un Error';
$txt['send_error_occurred'] = 'Ha ocurrido un error, <a href="{href}">por favor pulse aquí para intentarlo de nuevo</a>.';
$txt['require_field'] = 'Este campo es obligatorio.';
$txt['started_by'] = 'Empezado por autor';
$txt['topic_started_by'] = 'Empezado por %1$s';
$txt['topic_started_by_in'] = 'Empezado por %1$s en %2$s';
$txt['replies'] = 'Respuestas';
$txt['last_post'] = 'Último mensaje';
$txt['first_post'] = 'Primer mensaje';
$txt['last_poster'] = 'Autor del último mensaje';

// @todo - Clean this up a bit. See notes in template.
// Just moved a space, so the output looks better when things break to an extra line.
$txt['last_post_message'] = '<span class="lastpost_link">%2$s</span><span class="board_lastposter">por %1$s</span><span class="board_lasttime"><strong>Último mensaje: </strong>%3$s</span>';
$txt['boardindex_total_posts'] = '%1$s Mensajes en %2$s Temas por %3$s Miembros';
$txt['show'] = 'Mostrar';
$txt['hide'] = 'Ocultar';
$txt['sort_by'] = 'Ordenar por';
$txt['sort_asc'] = 'Orden ascendente';
$txt['sort_desc'] = 'Orden descendente';

$txt['admin_login'] = 'Inicio de Sesión en la Administración';
// Use numeric entities in the below string.
$txt['topic'] = 'Tema';
$txt['help'] = 'Ayuda';
$txt['notify'] = 'Notificar';
$txt['unnotify'] = 'Cancelar Notificación';
$txt['notify_request'] = '¿Deseas una notificación por email si alguien responde a este tema?';
// Use numeric entities in the below string.
$txt['regards_team'] = "Saludos,\nEl Equipo de {forum_name_html_unsafe}.";
$txt['notify_replies'] = 'Notificar respuestas';
$txt['move_topic'] = 'Mover';
$txt['move_to'] = 'Mover a';
$txt['pages'] = 'Páginas';
$txt['users_active'] = 'Activos en los últimos %1$d minutos';
$txt['personal_messages'] = 'Mensajes Privados';
$txt['reply_quote'] = 'Responder con cita';
$txt['reply'] = 'Respuesta';
$txt['reply_number'] = 'Respuesta #%1$s';
$txt['approve'] = 'Aprobar';
$txt['unapprove'] = 'Desaprobar';
$txt['approve_all'] = 'aprobar todo';
$txt['awaiting_approval'] = 'Esperando Aprobación';
$txt['attach_awaiting_approve'] = 'Adjuntos esperando aprobación';
$txt['post_awaiting_approval'] = 'Nota: Este mensaje está esperando la aprobación de un moderador.';
$txt['there_are_unapproved_topics'] = 'Hay %1$s temas y %2$s mensajes esperando aprobación en este foro. <a href="%3$s">Pulsa aquí para verlos</a>.';
$txt['send_message'] = 'Enviar mensaje';

$txt['msg_alert_no_messages'] = 'No tienes ningún mensaje';
$txt['msg_alert_one_message'] = 'Tienes <a href="%1$s">1 mensaje</a>';
$txt['msg_alert_many_message'] = 'Tienes <a href="%1$s">%2$d mensajes</a>';
$txt['msg_alert_one_new'] = '1 es nuevo';
$txt['msg_alert_many_new'] = '%1$d son nuevos';
$txt['remove_message'] = 'Eliminar este mensaje';

$txt['topic_alert_none'] = 'No tienes mensajes...';
$txt['pm_alert_none'] = 'No tienes mensajes...';

$txt['online_users'] = 'Usuarios en Línea'; //Deprecated
$txt['online_now'] = 'En línea ahora';
$txt['personal_message'] = 'Mensaje Privado';
$txt['jump_to'] = 'Ir a';
$txt['go'] = 'Ir';
$txt['are_sure_remove_topic'] = '¿Estás seguro de borrar este tema?';
$txt['yes'] = 'Sí';
$txt['no'] = 'No';

// @todo this string seems a good candidate for deprecation
$txt['search_on'] = 'en';

$txt['search'] = 'Buscar';
$txt['all'] = 'Todos';
$txt['search_entireforum'] = 'Foro Entero';
$txt['search_thisbrd'] = 'Este Foro';
$txt['search_thistopic'] = 'Este Tema';
$txt['search_members'] = 'Controles de los Usuarios';

$txt['back'] = 'Atrás';
$txt['continue'] = 'Continuar';
$txt['password_reminder'] = 'Contraseña recordatorio';
$txt['topic_started'] = 'Mensaje iniciado por';
$txt['title'] = 'Título';
$txt['post_by'] = 'Publicado por';
$txt['welcome_newest_member'] = 'Dad la bienvenida a %1$s, nuestro miembro más reciente.';
$txt['admin_center'] = 'Centro de Administración SMF';
$txt['admin_session_active'] = 'Tienes una sesión de administrador en curso. Te recomendamos <strong><a class="strong" href="%1$s">finalizar esta sesión</a></strong> cuando hayas terminado tus labores administrativas.';
$txt['admin_maintenance_active'] = 'Your forum is currently in maintenance mode, only admins can log in.  Remember to <strong><a class="strong" href="%1$s">exit maintenance</a></strong> once you have finished your administrative tasks.';
$txt['query_command_denied'] = 'The following MySQL errors are occurring, please verify your setup:';
$txt['query_command_denied_guests'] = 'It seems something has gone sour on the forum with the database. This problem should only be temporary, so please come back later and try again.  If you continue to see this message, please report the following message to the administrator:';
$txt['query_command_denied_guests_msg'] = 'the command %1$s is denied on the database';
$txt['last_edit_by'] = '<span class="lastedit">Last Edit</span>: %1$s by %2$s';
$txt['notify_deactivate'] = '¿Deseas desactivar la notificación en este tema?';

$txt['date_registered'] = 'Fecha de registro';
$txt['date_joined'] = 'Joined';
$txt['date_joined_format'] = '%b %d, %Y';

$txt['recent_view'] = 'View all recent posts.';
$txt['is_recent_updated'] = '%1$s is the most recently updated topic';

$txt['male'] = 'Masculino';
$txt['female'] = 'Femenino';

$txt['error_invalid_characters_username'] = 'Invalid character used in user name.';

$txt['welcome_guest'] = 'Welcome, <strong>Guest</strong>. Please <a href="{login_url}" rel="nofollow">login</a>.';
$txt['welcome_guest_register'] = 'Welcome to <strong>{forum_name}</strong>. Please <a href="{login_url}" rel="nofollow">login</a> or <a href="{register_url}" rel="nofollow">register</a>.';
$txt['welcome_guest_activate'] = '<br />Did you miss your <a href="{activate_url}" rel="nofollow">activation email</a>?';

// @todo the following to sprintf
$txt['hello_member'] = 'Hola,';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'Bienvenido(a),';
$txt['select_destination'] = 'Por favor selecciona un destino';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['posted_by'] = 'Publicado por';

$txt['icon_smiley'] = 'Sonrisa';
$txt['icon_angry'] = 'Enojado';
$txt['icon_cheesy'] = 'Cheesy';
$txt['icon_laugh'] = 'Risa';
$txt['icon_sad'] = 'Triste';
$txt['icon_wink'] = 'Guiñar';
$txt['icon_grin'] = 'Sonreir';
$txt['icon_shocked'] = 'Impresionado';
$txt['icon_cool'] = 'Cool';
$txt['icon_huh'] = 'Huh';
$txt['icon_rolleyes'] = 'Girar ojos';
$txt['icon_tongue'] = 'Lengua';
$txt['icon_embarrassed'] = 'Avergonzado';
$txt['icon_lips'] = 'Labios sellados';
$txt['icon_undecided'] = 'Indeciso';
$txt['icon_kiss'] = 'Beso';
$txt['icon_cry'] = 'Llorar';
$txt['icon_angel'] = 'Innocent';

$txt['moderator'] = 'Moderador';
$txt['moderators'] = 'Moderadores';

$txt['views'] = 'Vistas';
$txt['new'] = 'Nuevo';
$txt['no_redir'] = 'Redirected from %1$s';

$txt['view_all_members'] = 'Ver todos los usuarios';
$txt['view'] = 'Ver';

$txt['viewing_members'] = 'Viendo usuarios de %1$s a %2$s';
$txt['of_total_members'] = 'de %1$s usuarios totales';

$txt['forgot_your_password'] = '¿Olvidaste tu contraseña?';

$txt['date'] = 'Fecha';
// Use numeric entities in the below string.
$txt['from'] = 'De';
$txt['to'] = 'Para';

$txt['board_topics'] = 'Temas';
$txt['members_title'] = 'Controles de los Usuarios';
$txt['members_list'] = 'Lista de usuarios';
$txt['new_posts'] = 'Nuevos Mensajes';
$txt['old_posts'] = 'No hay nuevos Mensajes';
$txt['redirect_board'] = 'Foro Redirigido';
$txt['redirect_board_to'] = 'Redirecting to %1$s';

$txt['sendtopic_send'] = 'Enviar';
$txt['report_sent'] = 'Tu informe fue enviado con éxito.';
$txt['topic_sent'] = 'Your email has been sent successfully.';

$txt['time_offset'] = 'Diferencia Horaria';
$txt['or'] = 'o';

$txt['mention'] = 'Notificaciones';
$txt['notifications'] = 'Notificaciones';
$txt['unread_notifications'] = 'You have %1$s unread notifications since your last visit.';
$txt['new_from_last_notifications'] = 'You have %1$s new notifications.';
$txt['forum_notification'] = 'Notifications from %1$s.';

$txt['your_ban'] = 'Lo siento %1$s, tienes el acceso denegado a este foro!';
$txt['your_ban_expires'] = 'Tu bloqueo de acceso expira %1$s.';
$txt['your_ban_expires_never'] = 'Tu bloqueo de acceso es permanente.';
$txt['ban_continue_browse'] = 'Puedes continuar navegando por el foro como invitado.';

$txt['mark_as_read'] = 'Marcar TODOS los mensajes como leídos';
$txt['mark_as_read_confirm'] = 'Are you sure you want to mark ALL messages as read?';
$txt['mark_these_as_read'] = 'Mark THESE messages as read';
$txt['mark_these_as_read_confirm'] = 'Are you sure you want to mark THESE messages as read?';

$txt['locked_topic'] = 'Tema bloqueado';
$txt['normal_topic'] = 'Tema normal';
$txt['participation_caption'] = 'Temas en los que has publicado';

$txt['print'] = 'Imprimir';
$txt['topic_summary'] = 'Sumario de Temas';
$txt['not_applicable'] = 'N/D';
$txt['name_in_use'] = 'The name %1$s is already in use by another member.';

$txt['total_members'] = 'Total de Usuarios';
$txt['total_posts'] = 'Total de Mensajes';
$txt['total_topics'] = 'Total de Temas';

$txt['mins_logged_in'] = 'Duración de la sesión en minutos';

$txt['preview'] = 'Previsualizar';
$txt['always_logged_in'] = 'Recordar siempre Usuario/Contraseña';

$txt['logged'] = 'En línea';
// Use numeric entities in the below string.
$txt['ip'] = 'IP';

$txt['www'] = 'WWW';
$txt['link'] = 'Link';

$txt['by'] = 'por'; //Deprecated

$txt['hours'] = 'horas';
$txt['minutes'] = 'minutos';
$txt['seconds'] = 'segundos';

// Used upper case in Paid subscriptions management
$txt['hour'] = 'Hora';
$txt['days_word'] = 'días';

$txt['newest_member'] = ', nuestro usuario más reciente.'; //Deprecated

$txt['search_for'] = 'Buscar por';
$txt['search_match'] = 'Match';

$txt['maintain_mode_on'] = 'Recuerda, este foro está en \'Modo de Mantenimiento\'.';

$txt['read'] = 'Leído'; //Deprecated
$txt['times'] = 'veces'; //Deprecated
$txt['read_one_time'] = 'Read 1 time';
$txt['read_many_times'] = 'Read %1$d times';

$txt['forum_stats'] = 'Estadísticas SMF';
$txt['latest_member'] = 'Último usuario';
$txt['total_cats'] = 'Total de Categorías';
$txt['latest_post'] = 'Último mensaje';

$txt['here'] = 'aquí';
$txt['you_have_no_msg'] = 'You don\'t have any message...';
$txt['you_have_one_msg'] = 'You\'ve 1 message...<a href="%1$s">Click here to view it</a>';
$txt['you_have_many_msgs'] = 'You\'ve %2$d messages...<a href="%1$s">Click here to view them</a>';

$txt['total_boards'] = 'Total de Foros';

$txt['print_page'] = 'Imprimir Página';
$txt['print_page_text'] = 'Text only';
$txt['print_page_images'] = 'Text with Images';

$txt['valid_email'] = 'Debe ser una dirección válida de email.';

$txt['info_center_title'] = '%1$s - Centro de Información';

$txt['send_topic'] = 'Share';
$txt['unwatch'] = 'Unwatch';
$txt['watch'] = 'Watch';

$txt['sendtopic_title'] = 'Enviar tema &quot;%1$s&quot; a un amigo.';
$txt['sendtopic_sender_name'] = 'Tu nombre';
$txt['sendtopic_sender_email'] = 'Tu dirección de email';
$txt['sendtopic_receiver_name'] = 'Nombre del destinatario';
$txt['sendtopic_receiver_email'] = 'Dirección email del destinatario';
$txt['sendtopic_comment'] = 'Agregar un comentario';

$txt['allow_user_email'] = 'Permitir a los usuarios enviarme emails';

$txt['check_all'] = 'Seleccionar todo';

// Use numeric entities in the below string.
$txt['database_error'] = 'Error en la Base de Datos';
$txt['try_again'] = 'Por favor intenta nuevamente.  Si esta pantalla aparece nuevamente, notifica del error a un administrador.';
$txt['file'] = 'Archivo';
$txt['line'] = 'Línea';

// Use numeric entities in the below string.
$txt['tried_to_repair'] = 'ElkArte has detected and automatically tried to repair an error in your database.  If you continue to have problems, or continue to receive these emails, please contact your host.';
$txt['database_error_versions'] = '<strong>Note:</strong> Your database version is %1$s.';
$txt['template_parse_error'] = '¡Error al analizar la Plantilla!';
$txt['template_parse_error_message'] = 'Parece que algo se ha estropeado en el foro con el sistema de temas.  Este problema puede que solamente sea temporal, por favor, regresa en unos momentos e intentalo nuevamente.  Si continuas viendo este mensaje, por favor contacta al administrador.<br /><br />Puedes intentar <a href="javascript:location.reload();">actualizar esta página</a>.';
$txt['template_parse_error_details'] = 'There was a problem loading the <span class="tt"><strong>%1$s</strong></span> template or language file.  Please check the syntax and try again - remember, single quotes (<span class="tt">\'</span>) often have to be escaped with a backslash (<span class="tt">\\</span>).  To see more specific error information from PHP, try <a href="%2$s%1$s">accessing the file directly</a>.<br /><br />You may want to try to <a href="javascript:location.reload();">refresh this page</a> or <a href="%3$s">use the default theme</a>.';
$txt['template_parse_undefined'] = 'An undefined error occurred during the parsing of this template';

$txt['today'] = 'Today at %1$s';
$txt['yesterday'] = 'Yesterday at %1$s';

// Relative times
$txt['rt_now'] = 'just now';
$txt['rt_minute'] = 'A minute ago';
$txt['rt_minutes'] = '%s minutes ago';
$txt['rt_hour'] = 'An hour ago';
$txt['rt_hours'] = '%s hours ago';
$txt['rt_day'] = 'A day ago';
$txt['rt_days'] = '%s days ago';
$txt['rt_week'] = 'A week ago';
$txt['rt_weeks'] = '%s weeks ago';
$txt['rt_month'] = 'A month ago';
$txt['rt_months'] = '%s months ago';
$txt['rt_year'] = 'A year ago';
$txt['rt_years'] = '%s years ago';

$txt['new_poll'] = 'Nueva encuesta';
$txt['poll_question'] = 'Pregunta';
$txt['poll_question_options'] = 'Question and Options';
$txt['poll_vote'] = 'Enviar voto';
$txt['poll_total_voters'] = 'Total de votos';
$txt['draft_saved_on'] = 'Draft last saved';
$txt['poll_results'] = 'Ver resultados';
$txt['poll_lock'] = 'Bloquear Encuesta';
$txt['poll_unlock'] = 'Desbloquear Encuesta';
$txt['poll_edit'] = 'Editar Encuesta';
$txt['poll'] = 'Encuesta';
$txt['one_day'] = '1 Día';
$txt['one_week'] = '1 Semana';
$txt['two_weeks'] = '2 Weeks';
$txt['one_month'] = '1 Mes';
$txt['two_months'] = '2 Months';
$txt['forever'] = 'Siempre';
$txt['quick_login_dec'] = 'Ingresar con nombre de usuario, contraseña y duración de la sesión';
$txt['one_hour'] = '1 Hora';
$txt['moved'] = 'MOVIDO';
$txt['moved_why'] = 'Por favor introduce una breve descripción de<br />por qué este tema se está moviendo.';
$txt['board'] = 'Foro';
$txt['in'] = 'en';
$txt['sticky_topic'] = 'Pinned Topic';
$txt['split'] = 'SPLIT';

$txt['delete'] = 'Borrar';

$txt['byte'] = 'B';
$txt['kilobyte'] = 'KB';
$txt['megabyte'] = 'MB';
$txt['gigabyte'] = 'MB';

$txt['more_stats'] = '[Más Estadísticas]';

// Use numeric entities in the below three strings.
$txt['code'] = 'Código';
$txt['code_select'] = '[Seleccionar]';
$txt['quote_from'] = 'Cita de';
$txt['quote'] = 'Citar';
$txt['quick_quote'] = 'Quote Selected';
$txt['quote_new'] = 'New topic';
$txt['follow_ups'] = 'Follow-ups';
$txt['topic_derived_from'] = 'Topic derived from %1$s';
$txt['edit'] = 'Editar';
$txt['quick_edit'] = 'Quick Edit';
$txt['post_options'] = 'More...';

$txt['set_sticky'] = 'Pin';
$txt['set_nonsticky'] = 'Unpin';
$txt['set_lock'] = 'Bloquear';
$txt['set_unlock'] = 'Desbloquear';

$txt['search_advanced'] = 'Show advanced options';
$txt['search_simple'] = 'Hide advanced options';

$txt['security_risk'] = 'RIESGO MAYOR DE SEGURIDAD:';
$txt['not_removed'] = 'You have not removed %1$s';
$txt['not_removed_extra'] = '%1$s is a backup of %2$s that was not generated by ElkArte. It can be accessed directly and used to gain unauthorised access to your forum. You should delete it immediately.';
$txt['generic_warning'] = 'Warning';
$txt['agreement_missing'] = 'You are requiring new users to accept a registration agreement, however the file (agreement.txt) doesn\'t exist.';
$txt['agreement_accepted'] = 'You have just accepted the agreement.';
$txt['privacypolicy_accepted'] = 'You have just accepted the forum privacy policy.';

$txt['new_version_updates'] = 'You have just updated!';
$txt['new_version_updates_text'] = '<a href="{admin_url};area=credits#latest_updates">Click here to see what\'s new in this version of ElkArte!</a>!';

$txt['cache_writable'] = 'No se puede escribir en el directorio caché - afectará negativamente al rendimiento de tu foro.';

$txt['page_created_full'] = 'Page created in %1$.3f seconds with %2$d queries.';

$txt['report_to_mod_func'] = 'Usa esta función para informar a los moderadores y administradores de un mensaje abusivo, o publicado incorrectamente.<br /><em>Es importante mencionar que tu dirección de email será revelada a los moderadores si usas esta función.</em>';

$txt['online'] = 'Conectado';
$txt['member_is_online'] = '%1$s is online';
$txt['offline'] = 'Desconectado';
$txt['member_is_offline'] = '%1$s is offline';
$txt['pm_online'] = 'Mensaje Privado (Conectado)';
$txt['pm_offline'] = 'Mensaje Privado (Desconectado)';
$txt['status'] = 'Estado';

$txt['skip_nav'] = 'Skip to main content';
$txt['go_up'] = 'Ir Arriba';
$txt['go_down'] = 'Ir Abajo';

$forum_copyright = '<a href="https://www.elkarte.net" title="ElkArte Forum" target="_blank" class="new_win">Powered by %1$s</a> | <a href="{credits_url}" title="Credits" target="_blank" class="new_win" rel="nofollow">Credits</a>';

$txt['birthdays'] = 'Cumpleaños:';
$txt['events'] = 'Eventos:';
$txt['birthdays_upcoming'] = 'Cumpleaños próximos:';
$txt['events_upcoming'] = 'Eventos próximos:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar_prompt'] = 'Holidays:';
$txt['calendar_month'] = 'Mes:';
$txt['calendar_year'] = 'Año:';
$txt['calendar_day'] = 'Día:';
$txt['calendar_event_title'] = 'Título del Evento';
$txt['calendar_event_options'] = 'Opciones de Eventos';
$txt['calendar_post_in'] = 'Publicar en:';
$txt['calendar_edit'] = 'Editar evento';
$txt['event_delete_confirm'] = '¿Borrar este evento?';
$txt['event_delete'] = 'Borrar evento';
$txt['calendar_post_event'] = 'Publicar evento';
$txt['calendar'] = 'Calendario';
$txt['calendar_link'] = 'Enlazar al calendario';
$txt['calendar_upcoming'] = 'Calendario de eventos próximos';
$txt['calendar_today'] = 'Calendario de Hoy';
$txt['calendar_week'] = 'Semana';
$txt['calendar_week_title'] = 'Semana %1$d de %2$d ';
$txt['calendar_numb_days'] = 'Número de Días:';
$txt['calendar_how_edit'] = '¿cómo editas esos eventos?';
$txt['calendar_link_event'] = 'Enlazar evento';
$txt['calendar_confirm_delete'] = '¿Estás seguro que deseas borrar este evento?';
$txt['calendar_linked_events'] = 'Eventos Vinculados';
$txt['calendar_click_all'] = 'Pulsa para verlos todos %1$s';

$txt['moveTopic1'] = 'Publicar un tema de redireccionamiento';
$txt['moveTopic2'] = 'Cambiar el título del tema';
$txt['moveTopic3'] = 'Nuevo asunto';
$txt['moveTopic4'] = 'Cambiar el asunto de cada mensaje';
$txt['move_topic_unapproved_js'] = '¡Advertencia! Este tema aún no ha sido aprobado.\\n\\nNo se recomienda que crees un tema de redirección a menos que tengas la intención de aprobar el mensaje inmediatamente después de moverlo.';
$txt['movetopic_auto_board'] = '[FORO]';
$txt['movetopic_auto_topic'] = '[URL DEL TEMA]';
$txt['movetopic_default'] = 'This topic has been moved to [BOARD] - [TOPIC LINK]';
$txt['movetopic_redirect'] = 'Redirect to the moved topic';
$txt['movetopic_expires'] = 'Automatically remove the redirection topic';

$txt['merge_to_topic_id'] = 'ID del tema de destino';
$txt['split_topic'] = 'Split';
$txt['merge'] = 'Merge';
$txt['subject_new_topic'] = 'Asunto para el nuevo tema';
$txt['split_this_post'] = 'Sólo dividir este mensaje.';
$txt['split_after_and_this_post'] = 'Dividir tema a partir de este mensaje (incluyéndolo).';
$txt['select_split_posts'] = 'Selecciona los mensajes a dividir.';

$txt['splittopic_notification'] = 'Post a message when the topic is split';
$txt['splittopic_default'] = 'One or more of the messages of this topic have been moved to [BOARD] - [TOPIC LINK]';
$txt['splittopic_move'] = 'Move the new topic to another board';

$txt['new_topic'] = 'Nuevo Tema';
$txt['split_successful'] = 'El tema se ha dividido satisfactoriamente en dos temas.';
$txt['origin_topic'] = 'Tema de Origen';
$txt['please_select_split'] = 'Por favor selecciona qué mensajes deseas dividir.';
$txt['merge_successful'] = 'Los temas han sido satisfactoriamente combinados.';
$txt['new_merged_topic'] = 'Nuevo Tema Combinado';
$txt['topic_to_merge'] = 'Tema a ser combinado';
$txt['target_board'] = 'Foro destino';
$txt['target_topic'] = 'Tema destino';
$txt['merge_confirm'] = '¿Estás seguro que deseas combinar';
$txt['with'] = 'con';
$txt['merge_desc'] = 'Esta función combinará los mensajes de dos temas en un tema. Los mensajes serán ordenados de acuerdo con la fecha en que se publicaron. Por lo tanto, el mensaje publicado más recientemente será el primer mensaje del tema combinado.';

$txt['theme_template_error'] = 'No se pudo cargar la plantilla \'%1$s\'.';
$txt['theme_language_error'] = 'No se pudo cargar el archivo de idioma \'%1$s\'.';

$txt['parent_boards'] = 'Sub-boards';

$txt['smtp_no_connect'] = 'No fue posible conectarse al servidor SMTP';
$txt['smtp_port_ssl'] = 'Puerto SMTP configurado incorrectamente; debería ser 465 en servidores SSL.';
$txt['smtp_bad_response'] = 'No se pudieron obterer los codigos de respuesta del servidor de mail';
$txt['smtp_error'] = 'Hubo problemas al enviar el mail. Error: ';
$txt['mail_send_unable'] = 'No se pudo enviar el email a la dirección \'%1$s\'';

$txt['mlist_search'] = 'Buscar usuarios por';
$txt['mlist_search_again'] = 'Buscar de nuevo'; // @deprecated since 1.0.4
$txt['mlist_search_email'] = 'Buscar por dirección de email';
$txt['mlist_search_group'] = 'Buscar por grupo';
$txt['mlist_search_name'] = 'Buscar por nombre';
$txt['mlist_search_website'] = 'Buscar por sitio Web';
$txt['mlist_search_results'] = 'Buscar resultados por';
$txt['mlist_search_by'] = 'Buscar %1$s';

$txt['attach_downloaded'] = 'downloaded %1$d times';
$txt['attach_viewed'] = 'viewed %1$d times';

$txt['settings'] = 'Configuración';
$txt['never'] = 'Nunca';
$txt['more'] = 'más';

$txt['hostname'] = 'Nombre del servidor';
$txt['you_are_post_banned'] = 'Lo sentimos %1$s, tienes restringido el poder publicar mensajes o enviar mensajes privados en el foro.';
$txt['ban_reason'] = 'Razón';

$txt['add_poll'] = 'Agregar encuesta';
$txt['poll_options6'] = 'Solo puedes seleccionar hasta %1$s opciones.';
$txt['poll_remove'] = 'Eliminar encuesta';
$txt['poll_remove_warn'] = '¿Estás seguro que deseas eliminar esta encuesta del tema?';
$txt['poll_results_expire'] = 'Los resultados se mostrarán una vez que la encuesta se haya cerrado';
$txt['poll_expires_on'] = 'La votación se cierra';
$txt['poll_expired_on'] = 'Votación cerrada';
$txt['poll_change_vote'] = 'Eliminar Voto';
$txt['poll_return_vote'] = 'Opciones de votación';
$txt['poll_cannot_see'] = 'No puedes ver los resultados de la encuesta en este momento';

$txt['quick_mod_approve'] = 'Aprobar los seleccionados';
$txt['quick_mod_remove'] = 'Eliminar seleccionados';
$txt['quick_mod_lock'] = 'Bloquear/desbloquear seleccionado(s)';
$txt['quick_mod_sticky'] = 'Pin/Unpin selected';
$txt['quick_mod_move'] = 'Mover seleccionado(s) a';
$txt['quick_mod_merge'] = 'Combinar seleccionado(s)';
$txt['quick_mod_markread'] = 'Marcar seleccionados como leídos';
$txt['quick_mod_go'] = 'Ir';
$txt['quickmod_confirm'] = '¿Estás seguro que deseas hacer esto?';

$txt['spell_check'] = 'Revisar Ortografía';

$txt['quick_reply'] = 'Respuesta rápida';
$txt['quick_reply_warning'] = 'Warning! This topic is currently locked, only admins and moderators can reply.';
$txt['quick_reply_verification'] = 'Tras enviar tu post serás dirigido a la página de posts normal para verificar tu post %1$s.';
$txt['quick_reply_verification_guests'] = '(requerido para todos los invitados)';
$txt['quick_reply_verification_posts'] = '(requerido para todos los usuarios con menos de %1$d posts)';
$txt['wait_for_approval'] = 'Nota: este mensaje no se mostrará hasta que sea aprobado por un moderador.';

$txt['notification_enable_board'] = '¿Estás seguro que deseas activar la notificación de nuevos temas para este foro?';
$txt['notification_disable_board'] = '¿Estás seguro que deseas desactivar la notificación de nuevos temas para este foro?';
$txt['notification_enable_topic'] = '¿Estás seguro que deseas activar la notificación de nuevas respuestas para este tema?';
$txt['notification_disable_topic'] = '¿Estás seguro que deseas desactivar la notificación de nuevas respuestas para este tema?';

$txt['report_to_mod'] = 'Report Post';
$txt['issue_warning_post'] = 'Emitir un aviso debido a este mensaje';

$txt['like_post'] = 'Like';
$txt['unlike_post'] = 'Unlike';
$txt['likes'] = 'Likes';
$txt['liked_by'] = 'Liked by:';
$txt['liked_you'] = 'You';
$txt['liked_more'] = 'más';
$txt['likemsg_are_you_sure'] = 'You already liked this message, are you sure you want to remove your like?';

$txt['unread_topics_visit'] = 'Nuevos temas no leídos';
$txt['unread_topics_visit_none'] = 'No unread topics found since your last visit. <a href="{unread_all_url}" class="linkbutton">Click here to try all unread topics</a>';
$txt['unread_topics_all'] = 'Todos los temas no leídos';
$txt['unread_replies'] = 'Temas actualizados';

$txt['who_title'] = 'Quién está en línea';
$txt['who_and'] = ' y ';
$txt['who_viewing_topic'] = ' están viendo este tema.';
$txt['who_viewing_board'] = ' están viendo este foro.';
$txt['who_member'] = 'Usuario';

// Current footer strings
$txt['valid_html'] = 'Valid HTML 5';
$txt['rss'] = 'RSS';
$txt['atom'] = 'Atom';
$txt['html'] = 'HTML';

$txt['guest'] = 'Visitante';
$txt['guests'] = 'Visitantes';
$txt['user'] = 'Usuario';
$txt['users'] = 'Usuarios';
$txt['hidden'] = 'Oculto(s)';
// Plural form of hidden for languages other than English
$txt['hidden_s'] = 'Oculto(s)';
$txt['buddy'] = 'Amigo';
$txt['buddies'] = 'Amigos';
$txt['most_online_ever'] = 'Máximo en linea siempre';
$txt['most_online_today'] = 'Máximo en linea hoy';

$txt['merge_select_target_board'] = 'Selecciona el foro destino del tema combinado';
$txt['merge_select_poll'] = 'Selecciona cual encuesta tendrá el tema combinado';
$txt['merge_topic_list'] = 'Selecciona los temas a combinar';
$txt['merge_select_subject'] = 'Selecciona el título del tema combinado';
$txt['merge_custom_subject'] = 'Título personalizado';
$txt['merge_enforce_subject'] = 'Cambiar el título de todos los mensajes';
$txt['merge_include_notifications'] = '¿Incluir notificaciones?';
$txt['merge_check'] = '¿Combinar?';
$txt['merge_no_poll'] = 'Sin encuesta';

$txt['response_prefix'] = 'Re:';
$txt['current_icon'] = 'Current icon';
$txt['message_icon'] = 'Icono del mensaje';

$txt['smileys_current'] = 'Conjunto actual de Smileys';
$txt['smileys_none'] = 'Sin Smileys';
$txt['smileys_forum_board_default'] = 'Las que el foro esté utilizando por defecto';

$txt['search_results'] = 'Resultados de la Búsqueda';
$txt['search_no_results'] = 'No se encontraron coincidencias';

$txt['totalTimeLogged2'] = ' días, ';
$txt['totalTimeLogged3'] = ' horas y ';
$txt['totalTimeLogged4'] = ' minutos.';
$txt['totalTimeLogged5'] = 'd';
$txt['totalTimeLogged6'] = 'h';
$txt['totalTimeLogged7'] = 'm';

$txt['approve_thereis'] = 'Hay'; //Deprecated
$txt['approve_thereare'] = 'Hay'; //Deprecated
$txt['approve_member'] = 'un usuario'; //Deprecated
$txt['approve_members'] = 'usuarios'; //Deprecated
$txt['approve_members_waiting'] = 'esperando aprobación.'; //Deprecated
$txt['approve_one_member_waiting'] = 'There is <a href="%1$s">one member</a> awaiting approval.';
$txt['approve_many_members_waiting'] = 'There are <a href="%1$s">%2$d members</a> awaiting approval.';

$txt['notifyboard_turnon'] = '¿Deseas una notificación por email cuando alguien publique un nuevo tema en este foro?';
$txt['notifyboard_turnoff'] = '¿Estás seguro que NO deseas recibir notificaciones de temas nuevos en este foro?';

$txt['notify_board_unsubscribed'] = 'The email, %2$s, has been successfully unsubscribed and will no longer be sent notifications from the "%1$s" board.';
$txt['notify_topic_unsubscribed'] = 'The email, %2$s, has been successfully unsubscribed and will no longer be sent notifications on the "%1$s" topic.';
$txt['notify_mention_unsubscribed'] = 'The email, %2$s, has been successfully unsubscribed and will no longer be sent "%1$s" notifications.';
$txt['notify_default_unsubscribed'] = 'Your request has been successfully processed.';

$txt['find_members'] = 'Buscar usuarios';
$txt['find_username'] = 'Nombre, nombre de usuario, o dirección de email';
$txt['find_buddies'] = '¿Mostrar amigos solamente?';
$txt['find_wildcards'] = 'Comodines permitidos: *, ?';
$txt['find_no_results'] = 'No se encontraron resultados';
$txt['find_results'] = 'Resultados';
$txt['find_close'] = 'Cerrar';

$txt['quickmod_delete_selected'] = 'Borrar Seleccionados';
$txt['quickmod_split_selected'] = 'Split Selected';

$txt['show_personal_messages_heading'] = 'New messages';
$txt['show_personal_messages'] = 'You have <strong>%1$s</strong> unread personal messages in your inbox.<br /><br /><a href="%2$s">Go to your inbox</a>';

$txt['help_popup'] = 'A little lost? Let me explain:';

$txt['previous_next_back'] = 'previous topic';
$txt['previous_next_forward'] = 'next topic';

$txt['upshrink_description'] = 'Encoger o expandir encabezado.';

$txt['mark_unread'] = 'Marcar como no leídos';

$txt['ssi_not_direct'] = 'Por favor no accedas a SSI.php usando directamente la URL; mejor utiliza la ruta (%1$s) o agrega ?ssi_function=algun_valor.';
$txt['ssi_session_broken'] = '¡SSI.php no pudo cargar una sesión!  Esto puede causar problemas con algunas funciones, tales como ingresar o salir - ¡Por favor, asegúrate de que SSI.php esté incluído siempre al principio *antes de cualquier otro código* en todos tus scripts!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'Previsualizar mensaje';
$txt['preview_fetch'] = 'Obteniendo la previsualización...';
$txt['pm_error_while_submitting'] = 'The following error or errors occurred while sending this personal message:';
$txt['warning_while_submitting'] = 'Something happened, review it here:';
$txt['error_while_submitting'] = 'The message has the following error or errors that must be corrected before continuing:';
$txt['error_old_topic'] = 'Advertencia: No se ha publicado ninguna respuesta a este tema desde hace %1$d días como mínimo.<br />A menos que estés seguro de que quieres responder, por favor, considera el empezar un nuevo tema.';

$txt['split_selected_posts'] = 'Mensajes seleccionados';
$txt['split_selected_posts_desc'] = 'Los mensajes mostrados a continuación formarán un nuevo tema una vez divididos.';
$txt['split_reset_selection'] = 'reinicializar selección';

$txt['modify_cancel'] = 'Cancelar';
$txt['mark_read_short'] = 'Marcar como leido';

$txt['hello_member_ndt'] = 'Hola';

$txt['unapproved_posts'] = 'Mensajes no aprobados (Temas: %1$d, Mensajes: %2$d)';

$txt['ajax_in_progress'] = 'Cargando...';
$txt['ajax_bad_response'] = 'Invalid response.';

$txt['mod_reports_waiting'] = 'Actualmente hay %1$d informes de moderador abiertos.';
$txt['pm_reports_waiting'] = 'There are currently %1$d personal message reports open.';

$txt['new_posts_in_category'] = 'Click to see the new posts in %1$s';
$txt['verification'] = 'Verificación';
$txt['visual_verification_hidden'] = 'Please leave this box empty';
$txt['visual_verification_description'] = 'Escribe las letras mostradas en la imagen';
$txt['visual_verification_sound'] = 'Escuchar el texto';
$txt['visual_verification_request_new'] = 'Solicitar otra imagen';

// @todo Send email strings - should move?
$txt['send_email'] = 'Send email';
$txt['send_email_disclosed'] = 'Ten en cuenta que será visible por el destinatario.';
$txt['send_email_subject'] = 'Asunto del Email';

$txt['ignoring_user'] = 'Estás ignorando a este usuario.';
$txt['show_ignore_user_post'] = '<em>[Show me the post.]</em>';

$txt['spider'] = 'Araña';
$txt['spiders'] = 'Arañas';
$txt['openid'] = 'OpenID';

$txt['downloads'] = 'Descargas';
$txt['filesize'] = 'File size';
$txt['subscribe_webslice'] = 'Suscribirse a Webslice'; // @deprecated since 1.1

// Restore topic
$txt['restore_topic'] = 'Restaurar Tema';
$txt['restore_message'] = 'Restaurar Mensaje';
$txt['quick_mod_restore'] = 'Restaurar Seleccionado';

// Editor prompt.
$txt['prompt_text_email'] = 'Por favor introduce la dirección de email.';
$txt['prompt_text_ftp'] = 'Please enter the FTP address.';
$txt['prompt_text_url'] = 'Por favor, introduce la URL a la que quieres enlazar';
$txt['prompt_text_img'] = 'Introduce la dirección de la imagen';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['autosuggest_delete_item'] = 'Borrar elemento';

// Bad Behavior
$txt['badbehavior_blocked'] = '<a href="http://www.bad-behavior.ioerror.us/">Bad Behavior</a> has blocked %1$s access attempts in the last 7 days.';

// Debug related - when $db_show_debug is true.
$txt['debug_templates'] = 'Plantillas:';
$txt['debug_subtemplates'] = 'Sub plantillas:'; // @deprecated since 1.1
$txt['debug_sub_templates'] = 'Sub plantillas:';
$txt['debug_language_files'] = 'Archivos de idioma:';
$txt['debug_sheets'] = 'Hojas de estilo:';
$txt['debug_javascript'] = 'Scripts: ';
$txt['debug_files_included'] = 'Archivos incluídos:';
$txt['debug_kb'] = 'KB.';
$txt['debug_show'] = 'mostrar';
$txt['debug_cache_hits'] = 'Caché de resultados:';
$txt['debug_cache_seconds_bytes'] = '%1$ss - %2$s bytes';
$txt['debug_cache_seconds_bytes_total'] = '%1$ss para %2$s bytes';
$txt['debug_queries_used'] = 'Consultas utilizadas: %1$d. ';
$txt['debug_queries_used_and_warnings'] = 'Consultas utilizadas: %1$d, %2$d advertencias.';
$txt['debug_query_in_line'] = 'en <em>%1$s</em> linea <em>%2$s</em>,';
$txt['debug_query_which_took'] = 'se demoró %1$s segundos.';
$txt['debug_query_which_took_at'] = 'se demoró %1$s segundos en realizar %2$s peticiones.';
$txt['debug_show_queries'] = '[Mostrar Consultas]';
$txt['debug_hide_queries'] = '[Ocultar Consultas]';
$txt['debug_tokens'] = 'Tokens: ';
$txt['debug_browser'] = 'Browser ID: ';
$txt['debug_hooks'] = 'Hooks called: ';
$txt['debug_system_type'] = 'System: ';
$txt['debug_server_load'] = 'Server Load: ';
$txt['debug_script_mem_load'] = 'Script Memory Usage: ';
$txt['debug_script_cpu_load'] = 'Script CPU Time (user/system): ';

// Video embedding
$txt['preview_image'] = 'Video Preview Image';
$txt['ctp_video'] = 'Click to play video';
$txt['hide_video'] = 'Show/Hide video';
$txt['youtube'] = 'YouTube video:';
$txt['vimeo'] = 'Vimeo video:';
$txt['tiktok'] = 'TikTok video:';
$txt['dailymotion'] = 'Dailymotion video:';

// Spoiler BBC
$txt['spoiler'] = 'Spoiler (click to show/hide)';

$txt['ok_uppercase'] = 'OK';

// Title of box for warnings that admins should see
$txt['admin_warning_title'] = 'Warning';

$txt['via'] = 'via';

$txt['like_post_stats'] = 'Like stats';

$txt['otp_token'] = 'Time-based One-time Password';
$txt['otp_enabled'] = 'Enable two factor authentication';
$txt['invalid_otptoken'] = 'Time-based One-time Password is invalid';
$txt['otp_used'] = 'Time-based One-time Password already used.<br /> Please wait a moment and use the next code.';
$txt['otp_generate'] = 'Generate';
$txt['otp_show_qr'] = 'Show QR-Code';
