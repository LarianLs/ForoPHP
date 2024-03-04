<?php
// Version: 1.1; ManageScheduledTasks

$txt['scheduled_tasks_title'] = 'Tareas Programadas';
$txt['scheduled_tasks_header'] = 'Todas las tareas programadas';
$txt['scheduled_tasks_name'] = 'Nombre de la tarea';
$txt['scheduled_tasks_next_time'] = 'Próxima vez';
$txt['scheduled_tasks_regularity'] = 'Regularidad';
$txt['scheduled_tasks_enabled'] = 'Activada';
$txt['scheduled_tasks_run_now'] = 'Ejecutar tarea ahora';
$txt['scheduled_tasks_save_changes'] = 'Guardar cambios';
$txt['scheduled_tasks_time_offset'] = '<strong>Note:</strong> All times given below are <em>server time</em> and do not take any time offsets setup within the admin panel into account.';
$txt['scheduled_tasks_were_run'] = 'Todas las tareas seleccionadas fueron completadas';
$txt['scheduled_tasks_were_run_errors'] = 'The following errors occurred while running the scheduled tasks:';

$txt['scheduled_tasks_na'] = 'N/D';
$txt['scheduled_task_approval_notification'] = 'Notificaciones de aprobación';
$txt['scheduled_task_desc_approval_notification'] = 'Enviar emails a todos los moderadores con un sumario de los posts que esperan a ser aprobados.';
$txt['scheduled_task_auto_optimize'] = 'Optimizar base de datos';
$txt['scheduled_task_desc_auto_optimize'] = 'Optimizar la base de datos para resolver problemas de fragmentación.';
$txt['scheduled_task_daily_maintenance'] = 'Mantenimiento diario';
$txt['scheduled_task_desc_daily_maintenance'] = 'Lleva a cabo un mantenimiento diario esencial en el foro - no debería ser desactivada.';
$txt['scheduled_task_daily_digest'] = 'Sumario de notificaciones diarias';
$txt['scheduled_task_desc_daily_digest'] = 'Envía un resumen diario para los suscriptores de notificaciones.';
$txt['scheduled_task_weekly_digest'] = 'Sumario de notificaciones semanal';
$txt['scheduled_task_desc_weekly_digest'] = 'Envía un resumen semanal para los suscriptores de notificaciones.';
$txt['scheduled_task_birthdayemails'] = 'Enviar emails de cumpleaños';
$txt['scheduled_task_desc_birthdayemails'] = 'Envía emails deseando a los usuarios un feliz cumpleaños.';
$txt['scheduled_task_weekly_maintenance'] = 'Mantenimiento semanal';
$txt['scheduled_task_desc_weekly_maintenance'] = 'Lleva a cabo un mantenimiento semanal esencial en el foro - no debería ser desactivada.';
$txt['scheduled_task_paid_subscriptions'] = 'Comprobaciones de suscripciones de pago';
$txt['scheduled_task_desc_paid_subscriptions'] = 'Envía los recordatorios de suscripciones de pago necesarios y elimina las suscripciones caducadas de los usuarios.';
$txt['scheduled_task_remove_topic_redirect'] = 'Remove MOVED: Redirection Topics';
$txt['scheduled_task_desc_remove_topic_redirect'] = 'Deletes "MOVED:" topic notifications as specified when the moved notice was created.';
$txt['scheduled_task_remove_temp_attachments'] = 'Remove Temporary Attachment Files';
$txt['scheduled_task_desc_remove_temp_attachments'] = 'Deletes temporary files created while attaching a file to a post that for any reason weren\'t renamed or deleted before.';
$txt['scheduled_task_remove_old_drafts'] = 'Remove Old Drafts';
$txt['scheduled_task_desc_remove_old_drafts'] = 'Deletes drafts older than the number of days defined in the draft settings in the admin panel.';
$txt['scheduled_task_remove_old_followups'] = 'Remove Old Follow-ups';
$txt['scheduled_task_desc_remove_old_followups'] = 'Deletes follow-up entries still present in the database, but pointing to non-existent topics.';
$txt['scheduled_task_maillist_fetch_IMAP'] = 'Fetch Emails from IMAP';
$txt['scheduled_task_desc_maillist_fetch_IMAP'] = 'Fetches emails for the mailing list feature from an IMAP box and processes them.';
$txt['scheduled_task_user_access_mentions'] = 'Users Mentions Access';
$txt['scheduled_task_desc_user_access_mentions'] = 'Verify users access to each board and set accessibility to related mentions accordingly.';

$txt['scheduled_task_reg_starting'] = 'Iniciada a las %1$s';
$txt['scheduled_task_reg_repeating'] = 'repetida cada %1$d %2$s';
$txt['scheduled_task_reg_unit_m'] = 'minuto(s)';
$txt['scheduled_task_reg_unit_h'] = 'hora(s)';
$txt['scheduled_task_reg_unit_d'] = 'día(s)';
$txt['scheduled_task_reg_unit_w'] = 'semana(s)';

$txt['scheduled_task_edit'] = 'Editar tarea programada';
$txt['scheduled_task_edit_repeat'] = 'Repetir tarea cada';
$txt['scheduled_task_edit_pick_unit'] = 'Elegir unidad';
$txt['scheduled_task_edit_interval'] = 'Intervalo';
$txt['scheduled_task_edit_start_time'] = 'Hora de inicio';
$txt['scheduled_task_edit_start_time_desc'] = 'Hora a la que la primera instancia del día debería comenzar (horas:minutos)';
$txt['scheduled_task_time_offset'] = 'Tenga en cuenta que la hora de inicio debería ser el offset respecto al tiempo de servidor actual, que es: %1$s';

$txt['scheduled_view_log'] = 'Ver Log';
$txt['scheduled_log_empty'] = 'Actualmente no hay registros en el log de tareas.';
$txt['scheduled_log_time_run'] = 'Hora de ejecución';
$txt['scheduled_log_time_taken'] = 'Tiempo empleado';
$txt['scheduled_log_time_taken_seconds'] = '%1$d segundos';
$txt['scheduled_log_completed'] = 'Task completed';
$txt['scheduled_log_empty_log'] = 'Clear Log';
$txt['scheduled_log_empty_log_confirm'] = 'Are you sure you want to completely clear the log?';