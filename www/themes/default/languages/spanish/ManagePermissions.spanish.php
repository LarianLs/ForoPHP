<?php
// Version: 1.1; ManagePermissions

$txt['permissions_title'] = 'Establecer Permisos';
$txt['permissions_modify'] = 'Modificar';
$txt['permissions_view'] = 'Ver';
$txt['permissions_allowed'] = 'Permitido';
$txt['permissions_denied'] = 'Denegado';
$txt['permission_cannot_edit'] = '<strong>Note:</strong> You cannot edit this permission profile as it is a predefined profile included within the forum software by default. If you wish to change the permissions of this profile you must first create a duplicate profile. You can <a href="%1$s">carry out this task by clicking here</a>.';

$txt['permissions_for_profile'] = 'Permisos para el perfil';
$txt['permissions_boards_desc'] = 'La lista a continuación muestra qué conjunto de permisos ha sido asignado a cada foro. Puedes editar el perfil de permisos asignado bien haciendo clic en el nombre del foro o bien seleciconando &quot;editar todo&quot; en la parte inferior de la página. Para editar el propio perfil simplemente haz clic en el nombre del perfil.';
$txt['permissions_board_all'] = 'Editar Todo';
$txt['permission_profile'] = 'Perfil de permisos';
$txt['permission_profile_desc'] = 'Which <a target="_blank" href="%1$s">permission set</a> the board should use.';
$txt['permission_profile_inherit'] = 'Heredar del foro padre';

$txt['permissions_profile'] = 'Perfil';
$txt['permissions_profiles_desc'] = 'Los perfiles de permisos son asignados a foros individuales para permitirle gestionar fácilmente su configuración de seguridad. Desde este área usted puede crear, editar y borrar perfiles de permisos.';
$txt['permissions_profiles_change_for_board'] = 'Editar Permisos por Perfil de: &quot;%1$s&quot;';
$txt['permissions_profile_default'] = 'Por defecto';
$txt['permissions_profile_no_polls'] = 'Sin Encuestas';
$txt['permissions_profile_reply_only'] = 'Sólo Respuestas';
$txt['permissions_profile_read_only'] = 'Sólo Lectura';

$txt['permissions_profile_rename'] = 'Rename all';
$txt['permissions_profile_edit'] = 'Editar perfiles';
$txt['permissions_profile_new'] = 'Nuevo Perfil';
$txt['permissions_profile_new_create'] = 'Crear';
$txt['permissions_profile_name'] = 'Nombre del Perfil';
$txt['permissions_profile_used_by'] = 'Usado por';
$txt['permissions_profile_used_by_one'] = 'Un foro';
$txt['permissions_profile_used_by_many'] = '%1$d foros';
$txt['permissions_profile_used_by_none'] = 'Ningún foro';
$txt['permissions_profile_do_edit'] = 'Editar';
$txt['permissions_profile_do_delete'] = 'Borrar';
$txt['permissions_profile_copy_from'] = 'Copiar Permisos de';

$txt['permissions_includes_inherited'] = 'Grupos Heredados';
$txt['permissions_includes_inherited_from'] = 'Inherited from: ';

$txt['permissions_all'] = 'todo';
$txt['permissions_none'] = 'ninguno';
$txt['permissions_set_permissions'] = 'Establecer permisos';

$txt['permissions_advanced_options'] = 'Opciones avanzadas';
$txt['permissions_with_selection'] = 'Con selección';
$txt['permissions_apply_pre_defined'] = 'Aplicar el perfil predefinido de permisos';
$txt['permissions_select_pre_defined'] = 'Seleccionar un perfil predeterminado';
$txt['permissions_copy_from_board'] = 'Copiar permisos de este Foro';
$txt['permissions_select_board'] = 'Seleccionar el foro';
$txt['permissions_like_group'] = 'Establecer los permisos como los de este grupo';
$txt['permissions_select_membergroup'] = 'Select a member group';
$txt['permissions_add'] = 'Agregar Permiso';
$txt['permissions_remove'] = 'Limpiar Permiso';
$txt['permissions_deny'] = 'Denegar Permiso';
$txt['permissions_select_permission'] = 'Seleccionar un permiso';

// All of the following block of strings should not use entities, instead use \\" for &quot; etc.
$txt['permissions_only_one_option'] = 'Puedes seleccionar solamente una acción para modificar los permisos';
$txt['permissions_no_action'] = 'No se seleccionó ninguna acción';
$txt['permissions_deny_dangerous'] = 'Estás a punto de negar uno o más permisos.\\nEsto puede ser peligroso y causar resultados inesperados si \\"accidentalmente\\" dejaste a alguien en los grupos a los que les negarás permisos.\\n\\n¿Estás seguro que deseas continuar?';

$txt['permissions_modify_group'] = 'Modificar Grupo';
$txt['permissions_general'] = 'Permisos por Grupo';
$txt['permissions_board'] = 'Permisos Globales del Foro';
$txt['permissions_board_desc'] = '<strong>Aviso</strong>: cambiar estos permisos del foro afectará a todos los foros que actualmente están asignados el perfil de permisos &quot;Por defecto (Default)&quot;. Los foros que no usen el perfil &quot;Por defecto (Default)&quot; no se verán afectados por cambios en esta página.';
$txt['permissions_commit'] = 'Guardar cambios';
$txt['permissions_on'] = 'en el foro';
$txt['permissions_local_for'] = 'Permisos Locales por grupo';
$txt['permissions_option_on'] = 'P';
$txt['permissions_option_off'] = 'X';
$txt['permissions_option_deny'] = 'N';
$txt['permissions_option_desc'] = 'For each permission you can pick either \'Allow\' (A), \'Disallow\' (X), or <span class="alert">\'Deny\' (D)</span>.<br /><br />Remember that if you deny a permission, any member - whether moderator or otherwise - that is in that group will be denied that as well.<br />For this reason, you should use deny carefully, only when <strong>necessary</strong>. Disallow, on the other hand, denies unless otherwise granted.';

$txt['permissiongroup_general'] = 'General';
$txt['permissionname_view_stats'] = 'Ver las estadísticas del foro';
$txt['permissionhelp_view_stats'] = 'Las estadísticas del foro es una página resumiendo todas las estadísticas del foro, tales como el número de usuarios, número diario de mensajes, y varias estadísticas de los 10 mejores. Activar este permiso agrega un enlace en la parte inferior del índice del foro (\'[Más estadísticas]\').';
$txt['permissionname_view_mlist'] = 'View the member list and groups';
$txt['permissionhelp_view_mlist'] = 'The member list shows all members that have registered on your forum. The list can be sorted and searched. The member list is linked from both the board index and the stats page, by clicking on the number of members. It also applies to the groups page which is a mini memberlist of people in that group.';
$txt['permissionname_who_view'] = 'Ver Quién está en línea';
$txt['permissionhelp_who_view'] = 'Quién está en línea muestra a todos los usuarios que están conectados, así como lo que están haciendo. Este permiso funcionará solamente si tienes activado también en \'Config. y Opciones\'. Puedes accesar la pantalla de \'Quién está en línea\' haciendo clic en el enlace de la sección de \'Usuarios en línea\' en el índice del foro.';
$txt['permissionname_search_posts'] = 'Buscar por mensajes y temas';
$txt['permissionhelp_search_posts'] = 'El permiso para búsqueda le permite al usuario buscar en todos los foros a los que tiene acceso. Cuando el permiso de búsqueda está activado, el botón de \'Buscar\' será agregado a la barra de botones del foro.';
$txt['permissionname_karma_edit'] = 'Cambiar el karma de otras personas';
$txt['permissionhelp_karma_edit'] = 'Karma is a feature that shows the popularity of a member. In order to use this feature, you need to have it enabled in \'Features and Options\'. This permission will allow a member group to cast a vote. This permission has no effect on guests.';
$txt['permissionname_like_posts'] = 'Like other users\' posts';
$txt['permissionhelp_like_posts'] = 'Likes is a feature that shows the popularity of a post. In order to use this feature, you need to have it enabled in \'Features and Options\'. This permission will allow a member group to like a post or unlike one they previously liked.  This permission has no effect on guests.';
$txt['permissionname_like_posts_stats'] = 'See like posts stats';
$txt['permissionhelp_like_posts_stats'] = 'This will allow users to see stats of posts liking';
$txt['permissionname_disable_censor'] = 'Disable word censor';
$txt['permissionhelp_disable_censor'] = 'Allows members the option to disable the word censor.';

$txt['permissiongroup_pm'] = 'Mensajería Personal';
$txt['permissionname_pm_read'] = 'Leer mensajes personales';
$txt['permissionhelp_pm_read'] = 'Este permiso le permite a los usuarios acceder a la sección de Mensajes Personales para leer sus mensajes. Si este permiso, un usuario no puede enviar mensajes personales.';
$txt['permissionname_pm_send'] = 'Enviar mensajes personales';
$txt['permissionhelp_pm_send'] = 'Envía mensajes personales a otros usuarios registrados. Necesita del permiso Requires the \'Leer mensajes personales\'.';
$txt['permissionname_send_email_to_members'] = 'Send emails';
$txt['permissionhelp_send_email_to_members'] = 'Send emails to other registered members.';

$txt['permissiongroup_calendar'] = 'Calendario';
$txt['permissionname_calendar_view'] = 'Ver el calendario';
$txt['permissionhelp_calendar_view'] = 'El calendario muestra para cada mes, los cumpleaños, eventos y días festivos. Este permiso permite el acceso al calendario. Cuando este permiso está activo, un botón será agregado a la barra de botones del foro y se mostrará una lista en la parte inferior del índice del foro con los cumpleaños, eventos y días festivos próximos. El calendario necesita ser activado en desde \'Config. y Opciones\'.';
$txt['permissionname_calendar_post'] = 'Crear eventos en el calendario';
$txt['permissionhelp_calendar_post'] = 'Un evento es un tema enlazado a cierta fecha, o rango de fechas. Se puede hacer la creación de eventos desde el calendario. Un evento puede crearse solamente si el usuario que crea el evento puede crear nuevos temas.';
$txt['permissionname_calendar_edit'] = 'Editar eventos en el calendario';
$txt['permissionhelp_calendar_edit'] = 'Un evento es un tema enlazado a cierta fecha, o rango de fechas. Los eventos pueden ser editados al hacer clic en el asterisco rojo (*) que hay junto a ellos, en la vista del calendario. Para poder modificar un evento, el usuario debe tener los permisos necesarios para editar el primer mensaje del tema que está enlazado a dicho evento.';
$txt['permissionname_calendar_edit_own'] = 'Eventos propios';
$txt['permissionname_calendar_edit_any'] = 'Cualquier evento';

$txt['permissiongroup_maintenance'] = 'Administración del Foro';
$txt['permissionname_admin_forum'] = 'Administrar el foro y la base de datos';
$txt['permissionhelp_admin_forum'] = 'Este permiso le permite a un usuario:<ul class="normallist"><li>cambiar la configuración del foro, de la BD y de los temas</li><li>manejar paquetes</li><li>usar las herramientas de mantenimiento del foro y la base de datos</li><li>ver los registros de error y de moderación</li></ul>Usa este permiso con precaución, ya que es muy poderoso.';
$txt['permissionname_manage_boards'] = 'Administrar foros y categorías';
$txt['permissionhelp_manage_boards'] = 'Este permiso permite la creación, edición y eliminación de foros y categorías.';
$txt['permissionname_manage_attachments'] = 'Administrar archivos adjuntos y avatares';
$txt['permissionhelp_manage_attachments'] = 'Este permiso permite el acceso al centro de archivos adjuntos, donde están listados todos los archivos adjuntos y avatares del foro, y de donde pueden ser eliminados.';
$txt['permissionname_manage_smileys'] = 'Administrar smileys e iconos de mensajes';
$txt['permissionhelp_manage_smileys'] = 'Este permite accesar al centro de smileys. En el centro de smileys puedes añadir, editar y emilinar smileys y conjuntos de smileys.';
$txt['permissionname_edit_news'] = 'Editar Noticias';
$txt['permissionhelp_edit_news'] = 'The news function allows a random news line to appear on each screen. In order to use the news function, enable it in the forum settings.';
$txt['permissionname_access_mod_center'] = 'Acceder al centro de moderación';
$txt['permissionhelp_access_mod_center'] = 'Con este permiso cualquier usuario de este grupo puede acceder al centro de moderación desde el que tendrá acceso a opciones para moderar. No garantiza en si mismo privilegios de moderación.';

$txt['permissiongroup_member_admin'] = 'Administración de usuarios';
$txt['permissionname_moderate_forum'] = 'Moderar usuarios del foro';
$txt['permissionhelp_moderate_forum'] = 'Este permiso incluye todas las funciones importantes de moderación de usuarios:<ul class="normallist"><li>acceso a la gestión de registros</li><li>acceso a la pantalla de ver/borrar usuarios</li><li>extensa información del perfil, incluyendo el seguimiento de IP/usuario y estado (oculto) online</li><li>activar cuentas</li><li>recibir notificaciones de aprobación y aprobar cuentas</li><li>inmune a la ignoración de MP</li><li>muchas otras cosas menores</li></ul>';
$txt['permissionname_manage_membergroups'] = 'Administrar y asignar grupos de usuarios';
$txt['permissionhelp_manage_membergroups'] = 'Este permiso le permite un usuario editar los grupos de usuarios y asignarle grupos de usuarios a otros usuarios.';
$txt['permissionname_manage_permissions'] = 'Administrar permisos';
$txt['permissionhelp_manage_permissions'] = 'Este permiso le permite a un usuario editar todos los permisos de un grupo de usuarios, en foros individuales o globalmente.';
$txt['permissionname_manage_bans'] = 'Administrar la lista de accesos prohibidos';
$txt['permissionhelp_manage_bans'] = 'This permission allows a user to add or remove user names, IP addresses, hostnames and email addresses to or from a list of banned users. It also allows a user to view and remove log entries of banned users that attempted to login.';
$txt['permissionname_send_mail'] = 'Broadcast to multiple members';
$txt['permissionhelp_send_mail'] = 'Mass mail all forum members or just a few member groups by email or personal message (the latter requires the \'Send Personal Message\' permission).';
$txt['permissionname_issue_warning'] = 'Emitir Advertencias a usuarios';
$txt['permissionhelp_issue_warning'] = 'Emitir una advertenvia a usuarios del forum y cambiar el nivel de advertencia de los usuarios. Requiere que esté activo el sistema de advertencias.';

$txt['permissiongroup_profile'] = 'Perfiles de Usuarios';
$txt['permissionname_profile_view'] = 'Ver resumen del perfil y estadísticas';
$txt['permissionhelp_profile_view'] = 'This permission allows users clicking on a user name to see a summary of profile settings, some statistics and all posts of the user.';
$txt['permissionname_profile_view_own'] = 'Perfil propio';
$txt['permissionname_profile_view_any'] = 'Cualquier perfil';
$txt['permissionname_profile_identity'] = 'Editar la config. de la cuenta';
$txt['permissionhelp_profile_identity'] = 'Account settings are the basic settings of a profile, like password, email address, member group and preferred language.';
$txt['permissionname_profile_identity_own'] = 'Perfil propio';
$txt['permissionname_profile_identity_any'] = 'Cualquier perfil';
$txt['permissionname_profile_extra'] = 'Editar la config. adicional del perfil';
$txt['permissionhelp_profile_extra'] = 'La config. adicional del perfil incluye datos del avatar, preferencias del tema, notificaciones, y mensajes personales.';
$txt['permissionname_profile_extra_own'] = 'Perfil propio';
$txt['permissionname_profile_extra_any'] = 'Cualquier perfil';
$txt['permissionname_profile_title'] = 'Editar título personalizado';
$txt['permissionhelp_profile_title'] = 'El título personalizado se muestra en la página donde se muestran temas, y debajo del perfil de cada usuario que tiene un título personalizado.';
$txt['permissionname_profile_title_own'] = 'Perfil propio';
$txt['permissionname_profile_title_any'] = 'Cualquier perfil';
$txt['permissionname_profile_remove'] = 'Borrar cuenta';
$txt['permissionhelp_profile_remove'] = 'Este permiso le permite a un usuario borrar su propia cuenta, cuando teiene el valor de \'Cuenta propia\'.';
$txt['permissionname_profile_remove_own'] = 'Cuenta propia';
$txt['permissionname_profile_remove_any'] = 'Cualquier cuenta';
$txt['permissionname_profile_set_avatar'] = 'Seleccionar un Avatar';
$txt['permissionhelp_profile_set_avatar'] = 'If enabled this will allow a user to select an avatar.';

$txt['permissiongroup_general_board'] = 'General';
$txt['permissionname_moderate_board'] = 'Moderar foro';
$txt['permissionhelp_moderate_board'] = 'El permiso para moderar el foro agrega algunos pocos permisos que le permitan a un moderador ser un moderador real. Los permisos incluyen responder a temas bloqueados, cambiar la expiración de una encuesta, y ver los resultados de éstas';

$txt['permissiongroup_topic'] = 'Temas';
$txt['permissionname_post_new'] = 'Publicar nuevos temas';
$txt['permissionhelp_post_new'] = 'Este permiso le permite a los usuarios publicar nuevos temas. No permite publicar respuestas a temas.';
$txt['permissionname_merge_any'] = 'Combinar cualquier tema';
$txt['permissionhelp_merge_any'] = 'Merge two or more topics into one. The order of messages within the merged topic will be based on the time the messages were created. A user can only merge topics on those boards a user is allowed to merge. In order to merge multiple topics at once, a user has to enable quick moderation in their profile settings.';
$txt['permissionname_split_any'] = 'Dividir cualquier tema';
$txt['permissionhelp_split_any'] = 'Dividir un tema en dos temas separados.';
$txt['permissionname_send_topic'] = 'Enviar temas a amigos';
$txt['permissionhelp_send_topic'] = 'Este permiso le permite a un usuario enviar un tema por email a un amigo, al introducir su dirección de email, permite asimismo agregar un mensaje.';
$txt['permissionname_make_sticky'] = 'Temas fijados';
$txt['permissionhelp_make_sticky'] = 'Pinned topics are topics that always remain on top of a board. They can be useful for announcements or other important messages.';
$txt['permissionname_move'] = 'Move topics';
$txt['permissionhelp_move'] = 'Mover un tema de un foro a otro. Los usuarios pueden seleccionar solamente foros destinos a los que tengan acceso.';
$txt['permissionname_move_own'] = 'Temas Propios';
$txt['permissionname_move_any'] = 'Cualquier tema';
$txt['permissionname_lock'] = 'Bloquear temas';
$txt['permissionhelp_lock'] = 'This permission allows a user to lock a topic. This can be done in order to make sure no one can reply to a topic. Only users with a \'Moderate board\' permission can still post in locked topics.';
$txt['permissionname_lock_own'] = 'Temas Propios';
$txt['permissionname_lock_any'] = 'Cualquier tema';
$txt['permissionname_remove'] = 'Borrar temas';
$txt['permissionhelp_remove'] = 'Borrar temas completos. ¡Este permiso no le permite borrar mensajes específicos dentro del tema!';
$txt['permissionname_remove_own'] = 'Temas Propios';
$txt['permissionname_remove_any'] = 'Cualquier tema';
$txt['permissionname_post_reply'] = 'Publicar respuestas a temas';
$txt['permissionhelp_post_reply'] = 'Este permiso permite el responder a temas.';
$txt['permissionname_post_reply_own'] = 'Temas Propios';
$txt['permissionname_post_reply_any'] = 'Cualquier tema';
$txt['permissionname_modify_replies'] = 'Modificar respuestas a los temas propios';
$txt['permissionhelp_modify_replies'] = 'Este permiso le permite a un usuario que inició un tema, el modificar todas las respuestas en su tema.';
$txt['permissionname_delete_replies'] = 'Borrar respuestas en sus temas propios';
$txt['permissionhelp_delete_replies'] = 'Este permiso le permite a un usuario que inició un tema eliminar todas las respuestas en su tema.';
$txt['permissionname_announce_topic'] = 'Tema de anuncios';
$txt['permissionhelp_announce_topic'] = 'This allows a user to send an announcement email about a topic to all members or to a few member groups.';

$txt['permissionname_approve_emails'] = 'Moderate Post by Email Failures';
$txt['permissionhelp_approve_emails'] = 'Allow moderators to access the Post by Email failure log to perform actions including approve, delete, view and bounce.  Note, since the system may not always know what board a post goes to, this permission should be only be given to members with full board access';
$txt['permissionname_postby_email'] = 'Post by Email';
$txt['permissionhelp_postby_email'] = 'This permission allows users to start new topics as well as reply to topic and PM notifications by email.';

$txt['permissiongroup_post'] = 'Mensajes';
$txt['permissionname_delete'] = 'Borrar mensajes';
$txt['permissionhelp_delete'] = 'Borrar mensajes. Esto no le permite a un usuario borrar el primer mensaje de un tema.';
$txt['permissionname_delete_own'] = 'Mensajes propios';
$txt['permissionname_delete_any'] = 'Cualquier mensaje';
$txt['permissionname_modify'] = 'Modificar mensajes';
$txt['permissionhelp_modify'] = 'Editar mensajes';
$txt['permissionname_modify_own'] = 'Mensajes propios';
$txt['permissionname_modify_any'] = 'Cualquier mensaje';
$txt['permissionname_report_any'] = 'Reportar mensajes a los moderadores';
$txt['permissionhelp_report_any'] = 'Este permiso agrega un enlace a cada mensaje, permitiendole a un usuario reportar el mensaje al moderador. Al reportarlo, todos los moderadores de ese foro recibirán un email con un enlace al mensaje reportado y una descripción del problema (proporcionado por el usuario que lo reportó).';

$txt['permissiongroup_poll'] = 'Encuestas';
$txt['permissionname_poll_view'] = 'Ver encuestas';
$txt['permissionhelp_poll_view'] = 'Este permiso le permite a un usuario ver una encuesta. Sin este permiso, el usuario verá solamente el tema.';
$txt['permissionname_poll_vote'] = 'Votar en encuestas';
$txt['permissionhelp_poll_vote'] = 'Este permiso le permite a un usuario emitir un voto. Esto no aplica a invitados.';
$txt['permissionname_poll_post'] = 'Publicar encuestas';
$txt['permissionhelp_poll_post'] = 'Este permiso le permite a un usuario publicar una nueva encuesta. El usuario necesita tener el permiso "Crear nuevos temas".';
$txt['permissionname_poll_add'] = 'Agregar encuestas a temas';
$txt['permissionhelp_poll_add'] = 'Agregar encuestas a temas le permite a un usuario agregar una encuesta después de haber creado el tema. Este permiso necesita permisos suficientes para editar el primer mensaje de un tema.';
$txt['permissionname_poll_add_own'] = 'Temas propios';
$txt['permissionname_poll_add_any'] = 'Cualquier tema';
$txt['permissionname_poll_edit'] = 'Editar encuestas';
$txt['permissionhelp_poll_edit'] = 'Este permiso permite editar las opciones de una encuesta así como reiniciar la encuesta. Para editar el máximo número de votos y la fecha de expiración, el usuario necesita tener el permiso de \'Moderar foro\'.';
$txt['permissionname_poll_edit_own'] = 'Encuesta propia';
$txt['permissionname_poll_edit_any'] = 'Cualquier encuesta';
$txt['permissionname_poll_lock'] = 'Bloquear encuestas';
$txt['permissionhelp_poll_lock'] = 'El bloqueo de encuestas impide que la encuesta acepte más votos.';
$txt['permissionname_poll_lock_own'] = 'Encuesta propia';
$txt['permissionname_poll_lock_any'] = 'Cualquier encuesta';
$txt['permissionname_poll_remove'] = 'Eliminar encuestas';
$txt['permissionhelp_poll_remove'] = 'Este permiso permite la eliminación de encuestas.';
$txt['permissionname_poll_remove_own'] = 'Encuesta propia';
$txt['permissionname_poll_remove_any'] = 'Cualquier encuesta';

// translator note: so many duplicates here? you might want to remove some...:
$txt['permissionname_post_draft'] = 'Save drafts of new posts';
$txt['permissionname_simple_post_draft'] = 'Save drafts of new posts';
$txt['permissionhelp_post_draft'] = 'This permission allows users to save drafts of their posts so they can complete them later.';
$txt['permissionhelp_simple_post_draft'] = 'This permission allows users to save drafts of their posts so they can complete them later.';
$txt['permissionname_post_autosave_draft'] = 'Automatically save drafts of new posts';
$txt['permissionname_simple_post_autosave_draft'] = 'Automatically save drafts of new posts';
$txt['permissionhelp_post_autosave_draft'] = 'This permission allows users to have their posts autosaved as drafts so they can avoid loosing their work in the event of a timeout, disconnection or other error.  The autosave schedule is defined in the admin panel';
$txt['permissionhelp_simple_post_autosave_draft'] = 'This permission allows users to have their posts autosaved as drafts so they can avoid loosing their work in the event of a timeout, disconnection or other error.  The autosave schedule is defined in the admin panel';
$txt['permissionname_pm_autosave_draft'] = 'Automatically save drafts of new PMs';
$txt['permissionname_simple_pm_autosave_draft'] = 'Automatically save drafts of new PMs';
$txt['permissionhelp_pm_autosave_draft'] = 'This permission allows users to have their posts autosaved as drafts so they can avoid losing their work in the event of a timeout, disconnection or other error.  The autosave schedule is defined in the admin panel';
$txt['permissionhelp_simple_post_autosave_draft'] = 'This permission allows users to have their posts autosaved as drafts so they can avoid loosing their work in the event of a timeout, disconnection or other error.  The autosave schedule is defined in the admin panel';
$txt['permissionname_pm_draft'] = 'Save drafts of personal messages';
$txt['permissionname_simple_pm_draft'] = 'Save drafts of personal messages';
$txt['permissionhelp_pm_draft'] = 'This permission allows users to save drafts of their personal messages so they can complete them later.';
$txt['permissionhelp_simple_pm_draft'] = 'This permission allows users to save drafts of their personal messages so they can complete them later.';

$txt['permissiongroup_approval'] = 'Moderación de mensajes';
$txt['permissionname_approve_posts'] = 'Aprobar elementos esperando moderación';
$txt['permissionhelp_approve_posts'] = 'Este permiso permite al usuario aprobar todos los elementos aún no aprobados del foro.';
$txt['permissionname_post_unapproved_replies'] = 'Responder a mensajes no aprobados';
$txt['permissionhelp_post_unapproved_replies'] = 'Este permiso permite a un usuario publicar respuestas a un tema. Las respuestas no serán mostrados hasta que sean aprobados por un moderador.';
$txt['permissionname_post_unapproved_replies_own'] = 'Temas Propios';
$txt['permissionname_post_unapproved_replies_any'] = 'Cualquier tema';
$txt['permissionname_post_unapproved_topics'] = 'Publicar temas no aprobados';
$txt['permissionhelp_post_unapproved_topics'] = 'Este permiso permite al usuario publicar un nuevo tema que requerirá aprobación antes de ser mostrado.';
$txt['permissionname_post_unapproved_attachments'] = 'Publicar adjuntos no aprobados';
$txt['permissionhelp_post_unapproved_attachments'] = 'Este permiso permite al usuario adjuntar archivos a sus mensajes. Dichos archivos requerirán aprobación antes de que sean mostrados a otros usuarios.';

$txt['permissiongroup_notification'] = 'Notificaciones';
$txt['permissionname_mark_any_notify'] = 'Solicitar notificación en respuestas';
$txt['permissionhelp_mark_any_notify'] = 'Este permiso le permite a los usuarios recibir notificaciones cada que alguien responda en un tema al que estén suscritos.';
$txt['permissionname_mark_notify'] = 'Solicitar notificación en temas nuevos';
$txt['permissionhelp_mark_notify'] = 'Este permise le permite a un usuario el recibir un email cada que se cree un nuevo tema en el foro en el que estén suscritos.';

$txt['permissiongroup_attachment'] = 'Archivos adjuntos';
$txt['permissionname_view_attachments'] = 'Ver archivos adjuntos';
$txt['permissionhelp_view_attachments'] = 'Los archivos adjuntos son archivos que están unidos a mensajes publicados. Esta opción puede ser activada y configurada en \'Adjuntos y avatares\'. Debido a que los archivos adjuntos no son accedidos directamente, puedes evitar que sean descargados por usuarios que no tengan este permiso.';
$txt['permissionname_post_attachment'] = 'Publicar adjuntos';
$txt['permissionhelp_post_attachment'] = 'Los archivos adjuntos son archivos que están adjuntos a mensajes publicados. Un mensaje puede tener varios archivos adjuntos.';

$txt['permissionicon'] = '';

$txt['permission_settings_title'] = 'Configuración de Permisos';
$txt['groups_manage_permissions'] = 'Member groups allowed to manage permissions';
$txt['permission_enable_deny'] = 'Activar la opción para denegar permisos';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_deny_warning'] = 'Al desactivar esta opción se actualizará \\\'Denegar\\\' permisos a \\\'No permitir\\\'.';
$txt['permission_by_board_desc'] = 'Here you can set which permission profile a board uses. You can create new permission profiles from the &quot;Edit Profiles&quot; menu.';
$txt['permission_settings_desc'] = 'Puedes establecer quién tiene permisos para cambiar los permisos, así como cuan sofisticados deberían ser los permisos del sistema.';
$txt['permission_enable_postgroups'] = 'Activar permisos para grupos basados en el número de mensajes';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_postgroups_warning'] = 'Al desactivar esta opción se eliminarán los permisos actualmente establecidos a grupos basados en el número de mensajes.';

$txt['permissions_post_moderation_desc'] = 'From this page you can easily change which groups have their posts moderated for a particular permission profile.';
$txt['permissions_post_moderation_deny_note'] = 'Ten en cuenta que mientras tengas los permisos avanzados activados no podrás aplicar el permiso &quot;denegar&quot; desde esta página. Por favor, edita los permisos directamente si quieres aplicar un permiso de denegación.';
$txt['permissions_post_moderation_select'] = 'Seleccionar perfil';
$txt['permissions_post_moderation_new_topics'] = 'Nuevos temas';
$txt['permissions_post_moderation_replies_own'] = 'Respuestas propias';
$txt['permissions_post_moderation_replies_any'] = 'Cualquier respuesta';
$txt['permissions_post_moderation_attachments'] = 'Archivos adjuntos';
$txt['permissions_post_moderation_legend'] = 'Leyenda';
$txt['permissions_post_moderation_allow'] = 'Puede crear';
$txt['permissions_post_moderation_moderate'] = 'Puede crear pero requiere aprobación';
$txt['permissions_post_moderation_disallow'] = 'No puede crear';
$txt['permissions_post_moderation_group'] = 'Grupo';

$txt['auto_approve_topics'] = 'Post new topics without requiring approval';
$txt['auto_approve_replies'] = 'Post replies to topics without requiring approval';
$txt['auto_approve_attachments'] = 'Post attachments without requiring approval';
