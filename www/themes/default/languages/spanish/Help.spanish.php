<?php
// Version: 1.1; Help

global $helptxt;

$txt['close_window'] = 'Cerrar ventana';

$helptxt['manage_boards'] = '
	<strong>Edit Boards</strong><br />
	In this menu you can create/reorder/remove boards, and the categories
	above them. For example, if you had a wide-ranging
	site that offered information on &quot;Sports&quot; and &quot;Cars&quot; and &quot;Music&quot;, these
	would be the top-level Categories you\'d create. Under each of these
	categories you\'d likely want to create hierarchical &quot;sub-categories&quot;,
	or &quot;Boards&quot; for topics within each. It\'s a simple hierarchy, with this structure: <br />
	<ul class="normallist">
		<li>
			<strong>Sports</strong>
			&nbsp;- A &quot;category&quot;
			<ul class="normallist">
				<li>
					<strong>Baseball</strong>
					&nbsp;- A board under the category of &quot;Sports&quot;
					<ul class="normallist">
						<li>
							<strong>Stats</strong>
							&nbsp;- A sub-board under the board of &quot;Baseball&quot;
						</li>
					</ul>
				</li>
				<li><strong>Football</strong>
				&nbsp;- A board under the category of &quot;Sports&quot;</li>
			</ul>
		</li>
	</ul>
	Categories allow you to break down the board into broad topics (&quot;Cars,
	&quot;Sports&quot;), and the &quot;Boards&quot; under them are the actual topics under which
	members can post. A user interested in Pintos
	would post a message under &quot;Cars&rarr;Pinto&quot;. Categories allow people to
	quickly find what their interests are: Instead of a &quot;Store&quot; you have
	&quot;Hardware&quot; and &quot;Clothing&quot; stores you can go to. This simplifies your
	search for &quot;pipe joint compound&quot; because you can go to the Hardware
	Store &quot;category&quot; instead of the Clothing Store (where you\'re unlikely
	to find pipe joint compound).<br />
	As noted above, a Board is a key topic underneath a broad category.
	If you want to discuss &quot;Pintos&quot; you\'d go to the &quot;Auto&quot; category and
	jump into the &quot;Pinto&quot; board to post your thoughts in that board.<br />
	Administrative functions for this menu item are to create new boards
	under each category, to reorder them (put &quot;Pinto&quot; behind &quot;Chevy&quot;), or
	to delete the board entirely.';

$helptxt['edit_news'] = '	<ul class="normallist">
		<li>
			<strong>Editar Noticias del foro</strong><br />
			Esto te permite especificar el texto para los elementos de las noticias mostradas en la página índice del foro.
			Agrega cualquier elemento que desees (ej., &quot;Nueva versión del portal http://HablaJapones.org&quot;). Cada elemento de las noticias se separa por un <enter>
		</li>
		<li>
			<strong>Boletines</strong><br />
			Esta sección te permite enviar boletines a los miembros del foro vía mensaje personal o email. Primero selecciona los grupos que quieres que reciban el boletín, y los que nos quieres que lo reciban. Si quieres, puedes añadir miembros y direcciones de email adicionales que recibirán el boletín. Por último, introduce el mensaje que quieres enviar y selecciona si quieres que sea enviado a los usuarios como un mensaje personal o como un email.
		</li>
		<li>
			<strong>Configuración</strong><br />
				Esta sección contiene algunas opciones de configuración relativas a a las noticias y boletines, incluyendo la selección de qué grupos pueden editar las noticias del foro o enviar boletines. También hay una opción para configurar si quieres que los feeds de noticias estén activados en el foro, así como una opción para configurar su longitud (cuántos caracteres serán mostrados) para cada noticia en el feed.
		</li>
	</ul>';

$helptxt['view_members'] = '
	<ul class="normallist">
		<li>
			<strong>View all Members</strong><br />
			View all members in the board. You are presented with a hyperlinked list of member names. You may click
			on any of the names to find details of the members (homepage, age, etc.), and as Administrator
			you are able to modify these parameters. You have complete control over members, including the
			ability to delete them from the forum.<br /><br />
		</li>
		<li>
			<strong>Awaiting Approval</strong><br />
			This section is only shown if you have enabled admin approval of all new registrations. Anyone who registers to join your
			forum will only become a full member once they have been approved by an admin. The section lists all those members who
			are still awaiting approval, along with their email and IP address. You can choose to either accept or reject (delete)
			any member on the list by checking the box next to the member and choosing the action from the drop-down box at the bottom
			of the screen. When rejecting a member you can choose to delete the member either with or without notifying them of your decision.<br /><br />
		</li>
		<li>
			<strong>Awaiting Activation</strong><br />
			This section will only be visible if you have activation of member accounts enabled on the forum. This section will list all
			members who have still not activated their new accounts. From this screen you can choose to either accept, reject or remind
			members with outstanding activations. As above you can also choose to email the member to inform them of the
			action you have taken.<br /><br />
		</li>
	</ul>';

$helptxt['ban_members'] = '<strong>Ban Members</strong><br />
	This provides the ability to &quot;ban&quot; users, to prevent people who have violated the trust of the board
	by spamming, trolling, etc. from continuing. This allows you to ban those users who are detrimental to your forum. As an admin,
	when you view messages, you can see each user\'s IP address used to post at that time. In the ban list,
	you simply type that IP address in, save, and they can no longer post from that location.<br />
	You can also ban people through their email address.';

$helptxt['featuresettings'] = '<strong>Editar características y opciones</strong><br />
	Hay numerosas características en esta sección que pueden ser cambiadas según tus preferencias.';

$helptxt['securitysettings'] = '<strong>Seguridad y moderación</strong><br />
	Esta sección contiene opciones relativas a la seguridad y moderación de tu foro.';

$helptxt['addonsettings'] = '<strong>Add-On Settings</strong><br />
	This section should contain any settings added by add-ons installed on your forum.';

$helptxt['time_format'] = '<strong>Time Format</strong><br />
	You have the power to adjust how the time and date look for yourself. There are a lot of little letters, but it\'s quite simple.
	The conventions follow PHP\'s strftime function and are described as below (more details can be found at <a href="http://www.php.net/manual/function.strftime.php" target="_blank" class="new_win">php.net</a>).<br />
	<br />
	The following characters are recognized in the format string:<br />
	<span class="smalltext">
	&nbsp;&nbsp;%a - abbreviated weekday name<br />
	&nbsp;&nbsp;%A - full weekday name<br />
	&nbsp;&nbsp;%b - abbreviated month name<br />
	&nbsp;&nbsp;%B - full month name<br />
	&nbsp;&nbsp;%d - day of the month (01 to 31) <br />
	&nbsp;&nbsp;%D<strong>*</strong> - same as %m/%d/%y <br />
	&nbsp;&nbsp;%e<strong>*</strong> - day of the month (1 to 31) <br />
	&nbsp;&nbsp;%H - hour using a 24-hour clock (range 00 to 23) <br />
	&nbsp;&nbsp;%I - hour using a 12-hour clock (range 01 to 12) <br />
	&nbsp;&nbsp;%m - month as a number (01 to 12) <br />
	&nbsp;&nbsp;%M - minute as a number <br />
	&nbsp;&nbsp;%p - either &quot;am&quot; or &quot;pm&quot; according to the given time<br />
	&nbsp;&nbsp;%R<strong>*</strong> - time in 24 hour notation <br />
	&nbsp;&nbsp;%S - second as a decimal number <br />
	&nbsp;&nbsp;%T<strong>*</strong> - current time, equal to %H:%M:%S <br />
	&nbsp;&nbsp;%y - 2 digit year (00 to 99) <br />
	&nbsp;&nbsp;%Y - 4 digit year<br />
	&nbsp;&nbsp;%% - a literal \'%\' character <br />
	<br />
	<em>* Does not work on Windows-based servers.</em></span>';

$helptxt['deleteAccount_posts'] = 'Replies Only: This will remove just the posts this member made in reply to other posts.<br />
	Topics and Replies: This will do the same as above, and additionally will remove all topic threads started by this member.';

$helptxt['live_news'] = '<strong>Live announcements</strong><br />
	This box shows recently updated announcements from <a href="https://www.elkarte.net/" target="_blank" class="new_win">www.elkarte.net/</a>.
	You should check here every now and then for updates, new releases, and important information from ElkArte.';

$helptxt['registrations'] = '<strong>Registration Management</strong><br />
	This section contains all the functions that could be necessary to manage new registrations on the forum. It contains up to four
	sections which are visible depending on your forum settings. These are:<br /><br />
	<ul class="normallist">
		<li>
			<strong>Register new member</strong><br />
			From this screen you can choose to register accounts for new members on their behalf. This can be useful in forums where registration is closed
			to new members, or in cases where the admin wishes to create a test account. If the option to require activation of the account
			is selected the member will be emailed a activation link which must be clicked before they can use the account. Similarly you can
			select to email the users new password to the stated email address.<br /><br />
		</li>
		<li>
			<strong>Edit Registration Agreement</strong><br />
			This allows you to set the text for the registration agreement displayed when members sign up for your forum.
			You can add or remove anything from the default registration agreement, which is included with ElkArte.<br /><br />
		</li>
		<li>
			<strong>Set Reserved Names</strong><br />
			Using this interface you can specify names which may not be used by your users.<br /><br />
		</li>
		<li>
			<strong>Settings</strong><br />
			This section will only be visible if you have permission to administrate the forum. From this screen you can decide on the registration method
			for use on your forum, as well as other registration related settings.
		</li>
	</ul>';

$helptxt['modlog'] = '<strong>Log de Moderación</strong><br />
	Esta sección le permite a los administradores mantenerse al tanto de todas las acciones de moderación que los moderadores del foro han realizado. Para asegurar que
	los moderadores no puedan eliminar las referencias a las acciones que ellos han realizado, las entradas no pueden eliminarse hasta 24 horas después de que la acción tuviera lugar.';
$helptxt['adminlog'] = '<strong>Registro de administración</strong><br />
	Esta sección permite a los miembros del equipo de administración seguir algunas de las acciones administrativas que han tenido lugar en el foro. Para asegurar que
	los admins no pueden eliminar referencias a las acciones que han llevado a cabo, las entradas no podrán ser borradas hasta transcurridas 24 horas desde que la acción tuvo lugar.';
$helptxt['badbehaviorlog'] = '<strong>Bad Behavior Log</strong><br />
	This section allows members of the admin team to view some of the bad behavior actions that have occurred on the forum. This log is automatically pruned by the bad behavior function so it will only contain the last week of activity.';
$helptxt['warning_enable'] = '<strong>User Warning System</strong><br />
	This feature enables members of the admin and moderation team to issue warnings to members - and to use a members warning level to determine the
	actions available to them on the forum. Upon enabling this feature a permission will be available within the permissions section to define
	which groups may assign warnings to members. Warning levels can be adjusted from a members profile. The following additional options are available:';
$helptxt['watch_enable'] = '<strong>Warning Level for Member Watch</strong><br />This setting defines the percentage warning level a member must reach to automatically assign a &quot;watch&quot; to the member. Any member who is being &quot;watched&quot; will appear in the relevant area of the moderation center.';
$helptxt['moderate_enable'] = '<strong>Warning Level for Post Moderation</strong><br />Any member passing the value of this setting will find all their posts require moderator approval before they appear to the forum	community. This will override any local board permissions which may exist related to post moderation.';
$helptxt['mute_enable'] = '<strong>Warning Level for Member Muting</strong><br />If this warning level is passed by a member they will find themselves under a post ban. The member will lose all posting rights.';
$helptxt['perday_limit'] = '<strong>Maximum Member Warning Points per Day</strong><br />This setting limits the amount of points a moderator may add/remove to any particular member in a twenty four hour period. This can be used to limit what a moderator can do in a small period of time. This setting can be disabled by setting to a value of zero. Note that any member with administrator permissions are not affected by this value.';
$helptxt['error_log'] = '<strong>Error Log</strong><br />
	The error log tracks every serious error encountered by users using your forum. It lists all of these errors by date which can be sorted
	by clicking the black arrow next to each date. Additionally you can filter the errors by clicking the picture next to each error statistic. This
	allows you to filter, for example, by member. When a filter is active the only results that will be displayed will be those that match that filter.';
$helptxt['theme_settings'] = '<strong>Configuración del Tema</strong><br />
	La pantalla de configuración te permite cambiar las configuración específica de un tema. Esta configuración incluye opciones tales como el directorio de los temas e información de URLs pero también
	opciones que afectan al diseño de un tema en tu foro. La mayoría de los temas tendrán una variedad de opciones configurables por el usuario, permitiéndote adaptar un tema
	para satisfacer las necesidades individuales de tu foro.';
$helptxt['smileys'] = '<strong>Smiley Center</strong><br />
	Here you can add and remove smileys and smiley sets.  Note importantly that if a smiley is in one set, it\'s in all sets - otherwise, it might
	get confusing for your users using different sets.<br /><br />

	You are also able to edit message icons from here, if you have them enabled on the settings page.';

$helptxt['calendar'] = '<strong>Administrar Calendario</strong><br />
	Aquí puedes modificar la configuración del calendario actual, así como agregar y eliminar los días festivos que aparecen en él.';
$helptxt['calendar_settings'] = 'The calendar can be used for showing birthdays or for showing important moments happening in your community.<br /><br />Remember that usage of the calendar (posting events, viewing events, etc.) is controlled by permissions set on the permissions screen.';
$helptxt['cal_days_for_index'] = 'Max days in advance on board index:<br />If this is set to 7, the next week\'s worth of events will be shown.';
$helptxt['cal_showevents'] = 'Enables the highlighting of events on the Mini Calendars, Main Calendar, both places, or disable event highlighting.';
$helptxt['cal_showholidays'] = 'This setting allows you to highlight holidays on the Mini Calendars, Main Calendar, both places, or disable event highlighting.';
$helptxt['cal_showbdays'] = 'This setting allows you to highlight birthdays on the Mini Calendars, Main Calendar, both places, or disable event highlighting.';
$helptxt['cal_export'] = 'Exports a text file in the iCal format for importing into other calendar applications.';
$helptxt['cal_daysaslink'] = 'Show days as link to \'Post Event\':<br />This will allow members to post events for that day when they click on that date.';
$helptxt['cal_allow_unlinked'] = 'Allow events not linked to posts:<br />Allow members to post events without requiring it to be linked with a post in a board.';
$helptxt['cal_defaultboard'] = 'Default Board to Post In:<br />Enter the default board to post events in.';
$helptxt['cal_showInTopic'] = 'Show linked events in topic display:<br />Check to show a link to the event at the top of topic view.';
$helptxt['cal_allowspan'] = 'Allow events to span multiple days:<br />Check to allow events to span multiple days.';
$helptxt['cal_maxspan'] = 'Max number of days an event can span:<br />Enter the maximum number of days that a single event can span.';
$helptxt['cal_minyear'] = 'Minimum year:<br />Select the &quot;first&quot; year on the calendar list.';
$helptxt['cal_maxyear'] = 'Maximum year:<br />Select the &quot;last&quot; year on the calendar list<br />';

$helptxt['serversettings'] = '<strong>Server Settings</strong><br />
	Here you can perform the core configuration for your forum. This section includes the database and URL settings as well as other
	important configuration items such as mail settings and caching. Think carefully whenever editing these settings as an error may
	render the forum inaccessible';
$helptxt['manage_files'] = '
	<ul class="normallist">
		<li>
			<strong>Browse Files</strong><br />
			Browse through all the attachments, avatars and thumbnails stored by the system.<br /><br />
		</li><li>
			<strong>Attachment Settings</strong><br />
			Configure where attachments are stored and set restrictions on the types of attachments.<br /><br />
		</li><li>
			<strong>Avatar Settings</strong><br />
			Configure where avatars are stored and manage resizing of avatars.<br /><br />
		</li><li>
			<strong>File Maintenance</strong><br />
			Check and repair any error in the attachment directory and delete selected attachments.<br /><br />
		</li>
	</ul>';

$helptxt['topicSummaryPosts'] = 'Esto te permite especificar el número de mensajes anteriores mostrados en el sumario de temas, en la pantalla de responder.';
$helptxt['enableAllMessages'] = 'Establece esto al número <em>máximo</em> de mensajes que un tema puede tener para mostrar el enlace <i>todos</i>.  Si estableces este valor menor al de &quot;Máximo número de mensajes a mostrar en una página de Tema&quot; lo unico que conseguirás es que nunca se muestre, y si lo estableces muy alto, puede alentar tu foro.';
$helptxt['allow_guestAccess'] = 'El desseleccionar esta opción limitará a los visitantes a hacer solamente las funciones mas básicas - ingresar, registrarse, recordar contraseña, etc - en tu foro.  Esto NO es lo mismo que deshabilitar el acceso de los visitantes a los foros.';
$helptxt['userLanguage'] = 'Turning this option on will allow users to select which language file they use. It will not affect the default selection.';
$helptxt['trackStats'] = 'Stats:<br />This will allow users to see the latest posts and the most popular topics on your forum.
		It will also show several statistics like the most members online, new members and new topics.<hr />
		Page views:<br />Adds another column to the stats page with the number of page views on your forum.';
$helptxt['enable_unwatch'] = 'Enabling this option will allow users to selectively turn off new reply notifications for topics in which they had previously posted.';
$helptxt['titlesEnable'] = 'Switching Custom Titles on will allow members with the relevant permission to create a special title for themselves.
		This will be shown underneath the name.<br /><em>Example:</em><br />Jeff<br />Cool Guy';
$helptxt['onlineEnable'] = 'Esto mostrará una imagen indicando si el usuario está conectado o no.';
$helptxt['todayMod'] = 'This will format &quot;Today&quot; or &quot;Yesterday&quot; in a variety of formats instead of the full date.<br /><br />
		<strong>Examples:</strong><br /><br />
		<dl class="settings">
			<dt>Disabled</dt>
			<dd>October 3, 2009 at 12:59:18 am</dd>
			<dt>Relative</dt>
			<dd>2 Hours Ago</dd>
			<dt>Only Today</dt>
			<dd>Today at 12:59:18 am</dd>
			<dt>Today &amp; Yesterday</dt>
			<dd>Yesterday at 09:36:55 pm</dd>
		</dl>';
$helptxt['disableCustomPerPage'] = 'Marca esta opción para impedir a los usuarios que personalicen el número de mensajes e hilos que pueden mostrar por página en el Indice de Mensajes y en la página de Mensaje respectivamente.';
$helptxt['enablePreviousNext'] = 'Esto mostrará un enlace al tema anterior y al siguiente.';
$helptxt['pollMode'] = 'This selects whether polls are enabled or not. If polls are disabled, the regular topic without their polls are shown.
<br /><br />To choose who can post polls, view polls, and similar, you can allow and disallow those permissions. Remember this if polls don\'t seem to be working.';
$helptxt['enableVBStyleLogin'] = 'Esto mostrará un cuadro para ingresar tu usuario/contraseña en la parte inferior del foro de mensajes.';
$helptxt['enableCompressedOutput'] = 'This option will compress output to lower bandwidth consumption, but it requires zlib to be installed.';
$helptxt['databaseSession_enable'] = 'Esta opción hace uso de la base de datos para guardar información de sesiones - es mejor para servidores con la carga balanceada, pero ayuda con todos los problemas de timeout y puede hacer más rápido al foro.  No funciona si session.auto_start está activado.';
$helptxt['databaseSession_loose'] = 'Activando esta opción disminuirá el ancho de banda que consume tu foro, y hace que al hacer <i>clic</i> en atrás no recargue la página - lo malo de esto es que los (nuevos) iconos no se actualizarán, entre otras cosas. (a menos que hagas <i>clic</i> en esa página en vez de regresar a ella.)';
$helptxt['databaseSession_lifetime'] = 'Este es el número de segundos que durarán las sesiones después que no hayan sido accesadas.  Si una sesión no es accesada por mucho tiempo, se dice que ha &quot;expirado&quot;.  Se recomienda cualquier valor arriba de 2400.';
$helptxt['cache_enable'] = 'ElkArte performs caching at a variety of levels. The higher the level of caching enabled the more CPU time will be spent retrieving cached information. If caching is available on your machine it is recommended that you try caching at level 1 first.';
$helptxt['cache_memcached'] = 'If you are using memcached you need to provide the server details. This should be entered as a comma separated list as shown in the example below:<br /><br/>&quot;server1,server2,server3:port,server4&quot;<br /><br />Note that if no port is specified the software will use port 11211, set this to 0 when using UNIX domain sockets.';
$helptxt['cache_cachedir'] = 'This setting is only for the filesystem based cache system. It specifies the path to the cache directory.  It is recommended that you place this in /tmp/ if you are going to use this, although it will work in any directory';
$helptxt['cache_uid'] = 'Some cache systems, for example Xcache, require a user ID and password to allow ElkArte access to clear the cache.';
$helptxt['cache_password'] = 'Some cache systems, for example Xcache, require a user ID and password to allow ElkArte access to clear the cache.';
$helptxt['enableErrorLogging'] = 'Esto registrará (log) cualquier error, como un ingreso de usuario inválido, para que puedas ver que salió mal.';
$helptxt['enableErrorQueryLogging'] = 'Esto incluirá la consulta completa enviada a la base de datos en el log de errores.  Requiere que el registro de errores esté activado.<br /><br /><strong>Nota:  Esto afectará a la capacidad de filtrar el registro de errores por mensaje de error.</strong>';
$helptxt['allow_disableAnnounce'] = 'Permite a los usuarios desactivar la notificación de temas que anuncies marcando &quot;anunciar tema&quot; al publicar.';
$helptxt['metadata_enabled'] = 'This will create OG (Open Graph) and Schema.org microdata suitable for HTML embedding (requires theme support).  It allows search engines to better understand the information on your site pages, and provides for a better link sharing experience on social sites.  When enabled, metadata will made available for the board listing, topic listing and topic display areas of your site.';
$helptxt['disallow_sendBody'] = 'This option removes the possibility to receive the text of replies, posts and personal messages in notification emails.<br /><br />Often, members will reply to the notification email, which in most cases means the webmaster receives the reply.';
$helptxt['enable_contactform'] = 'This option adds a contact us button to the registration screen';
$helptxt['jquery_source'] = 'This will determine the source used to load the jQuery Library.  Auto will use the CDN first and if not available fall back to the local source.  Local will only use the local source, CDN will only load it from Google\'s Content Delivery Network';
$helptxt['jquery_default'] = 'If you want to use a version of jQuery different than the one that came with ElkArte, select this box and enter the version numer X.XX.X The local file must follow the naming conventing of jquery-X.XX.X.min.js for it to be loaded.';
$helptxt['jqueryui_default'] = 'If you want to use a version of jQueryUI different than the one that came with ElkArte, select this box and enter the version numer X.XX.X The local file must follow the naming conventing of jquery-ui-X.XX.X.min.js for it to be loaded.';
$helptxt['minify_css_js'] = 'This will combine multiple CSS or JavaScript files per page as needed.  It will also remove unnecessary whitespace and comments from the files to reduce their size.  The combined and minimized files are saved so further requests can instantly serve those files.<br />Note that the first time a compilation is needed/created, there will be a slight delay on that page load in order to create the file (this will also happen after the cache is cleared)';
$helptxt['compactTopicPagesEnable'] = 'This will show the supplied number of surrounding pages.<br /><em>Example:</em>
		&quot;3&quot; to display: 1 ... 4 [5] 6 ... 9 <br />
		&quot;5&quot; to display: 1 ... 3 4 [5] 6 7 ... 9';
$helptxt['timeLoadPageEnable'] = 'This will show the time in seconds taken to create that page at the bottom of the board.';
$helptxt['removeNestedQuotes'] = 'This will remove, or limit the number of, nested quotes in a reply when citing the post via the quote link.';
$helptxt['heightBeforeShowMore'] = 'This will limit the height of a quote block.  Quotes exceeding this size will have a "read more" option applied to allow seeing the full quote.';
$helptxt['search_dropdown'] = 'This will show a search selection dropdown next to the quick search box.  From this you can choose to search the current site, current board (if in a board), current topic (if in a topic) or search for members.';
$helptxt['max_image_width'] = 'This allows you to set a maximum size for posted pictures. Pictures smaller than the maximum will not be affected. This also determines how attached images are displayed when a thumbnail is clicked on.';
$helptxt['mail_type'] = 'This setting allows you to choose either PHP\'s default settings, or to override those settings with SMTP.  PHP doesn\'t support using authentication with SMTP (which many hosts require now) so if you want that you should select SMTP.  Please note that SMTP can be slower, and some servers will not take user names and passwords.<br /><br />You don\'t need to fill in the SMTP settings if this is set to PHP\'s default.';
$helptxt['mail_batch_size'] = 'This setting determines how many emails will be sent per page load and can not be set greater than the maximum allowed per minute.<br />Leaving this as 0, the system will automatically determine a batch size to evenly spread the load and fill the quota.<br />If you want to set your own values, setting this to the same value as your limit is a good option for low per minute limits, or 1/6 of the limit for higher per minute limits.';
$helptxt['smtp_client'] = 'Used to identify this client to the SMTP server.<br />The field should contain the fully-qualified domain name (FQDN) of the SMTP client. In situations in which the client system does not have a meaningful domain name you can instead use an address literal formatted as [ipv4] or [IPv6:ipv6 address].<br />If left blank the system will attempt to detect this value for you.';

$helptxt['attachmentEnable'] = 'Enable/Disable the attachment system or disable only new attachments leaving old one available.';
$helptxt['automanage_attachments'] = 'This will create a directory structure based on the selected option.  This can be post date (subdividing attachments by year, or by year and month or by year, month and day) or simply adding a new directory when the space limit is reached.  Each directory created will have the same file count and total size restrictions.  This will help prevent directories from reaching a file or size limit.';
$helptxt['use_sub-directories_for_attachments'] = 'This will create all new directories as sub-directories under the main attachment directory.';
$helptxt['attachmentDirSizeLimit'] = ' Set how large the attachment folder can be.';
$helptxt['attachmentDirFileLimit'] = 'Set the max. number of files an individual attachment directory may contain';
$helptxt['attachmentPostLimit'] = 'Specify how large a single post\'s total upload size can be (in KiB), this is the cumulative size of all attachments made in a post.';
$helptxt['attachmentSizeLimit'] = 'Specify the largest size a single attachment in a post can have.';
$helptxt['attachmentNumPerPostLimit'] = 'Select the number of attachments a member can add per post.';
$helptxt['attachmentCheckExtensions'] = 'Check this box to enable attachment filtering, which will only allow files to be uploaded with the file extensions that you have defined.';
$helptxt['attachmentExtensions'] = 'Specify what attachment types are allowed, for example: jpg,png,gif  Remember to be careful in what you allow as some file extensions can cause a security risk to your website.';
$helptxt['attachment_image_paranoid'] = 'Selecting this option will enable very strict security checks on image attachments. Warning! These extensive checks can fail on valid images too. It is strongly recommended to only use this option together with image re-encoding, in order to have ElkArte try to resample the images which fail the security checks: if successful, they will be sanitized and uploaded. Otherwise, if image re-encoding is not enabled, all attachments failing checks will be rejected.';
$helptxt['attachment_autorotate'] = 'Selecting this option will allow the system to detect rotated images, typical of phone cameras, and automatically adjust the orientation such that the image top is oriented up. Requires either ImageMagick or both GD and Exif modules to be available.';
$helptxt['attachmentShowImages'] = 'If the uploaded file is a picture, this will automatically display it underneath the post.';
$helptxt['attachmentThumbnails'] = 'Enable this to show post images as a smaller thumbnail image, which when selected will expand to the full sized image.';
$helptxt['attachment_webp_enable'] = 'Enabling this will allow the system to create/save thumbnails and avatars in WebP format.';
$helptxt['attachmentThumbWidth'] = 'Only used with the &quot;Resize images when showing under posts&quot; option, the maximum width to resize attachments down from.  They will be resized proportionally.';
$helptxt['attachmentThumbHeight'] = 'Only used with the &quot;Resize images when showing under posts&quot; option, the maximum height to resize attachments down from.  They will be resized proportionally.';
$helptxt['attachment_image_reencode'] = 'Selecting this option will enable trying to re-encode the uploaded image attachments. Image re-encoding offers better security. Note however that image re-encoding also renders all animated images static.<br />This feature is only possible if the GD module is installed on your server.';
$helptxt['attachment_thumb_memory'] = 'The larger the source image (size & width x height), the higher the memory requirements are for the system to successfully create a thumbnail image.<br />With this option checked, the system will estimate the required memory and will then request that amount.  If successful, only then will it attempt to create the thumbnail.<br />This will result in fewer white screen errors but may result in fewer thumbnails being created.  If you leave this option unchecked, the system will always try to create the thumbnail (with a fixed amount of memory).  This may result in more white screen errors.';
$helptxt['max_image_height'] = 'The maximum displayed height of an attached image.';
$helptxt['max_image_width'] = 'This allows you to set a maximum size for posted pictures. Pictures smaller than the maximum will not be affected. This also determines how attached images are displayed when a thumbnail is clicked on.';
$helptxt['attachmentUploadDir'] = 'Select where you want the files uploaded to be stored on your server. This can be located outside your public html directory for additional security.';
$helptxt['attachment_transfer_empty'] = 'Enabling this will move all the files from the source directory to the new location, otherwise only the maximum allowed number of files according to the per-directory setting will be moved.';
$helptxt['avatar_paranoid'] = 'Selecting this option will enable very strict security checks on avatars. Warning! These extensive checks can fail on valid images too. It is strongly recommended to only use this option together with avatars re-encoding, in order to have ElkArte try to resample the images which fail the security checks: if successful, they will be sanitized and uploaded. Otherwise, if re-encoding of avatars is not enabled, all avatars failing checks will be rejected.';
$helptxt['avatar_reencode'] = 'Seleccionar esta opción hará que se traten de recodificar los avatares subidas. La recodificación de imágenes ofrece mejor seguridad. Sin embargo, ten en cuenta que la recodificación de imágenes también hace que todas las imágenes animadas sean convertidas en estáticas. <br /> Esta funcionalidad sólo es posible si el módulo GD está activado en tu servidor.';
$helptxt['karmaMode'] = 'Karma es una función que muestra la popularidad de un usuario Los usuarios, si tienen el permiso correspondiente, pueden
		\'aplaudir\' or \'castigar\' a otros usuarios, que es como su popularidad es calculada. Puedes cambiar el
		número de mensajes necesarios para tener &quot;karma&quot;, el tiempo entre castigos o aplausos, y si los administradores
		tienen que esperar este tiempo también.<br /><br />El que grupos de usuarios puedan castigar a otros se contola a través
		de un permiso. Si tienes problemas al tratar de hacer funcionar esta opción para todo mundo, deberías revisar nuevamente tus permisos.';
$helptxt['localCookies'] = 'The system uses cookies to store login information on the client computer.
	Cookies can be stored globally (myserver.com) or locally (myserver.com/path/to/forum).<br />
	Check this option if you\'re experiencing problems with users getting logged out automatically.<hr />
	Globally stored cookies are less secure when used on a shared webserver (like Tripod).<hr />
	Local cookies don\'t work outside the forum directory so, if your forum is stored at www.myserver.com/forum, pages like www.myserver.com/index.php cannot access the account information.
	Especially when using SSI.php, global cookies are recommended.';
$helptxt['enableBBC'] = 'El seleccionar esta opción le permitirá a tus usuarios el poder utilizar Bulletin Board Code (BBC) en el foro, permitiendoles darle formato a sus mensajes con imágenes, estilos de texto, y más.';
$helptxt['time_offset'] = 'No todos los administradores de los foros necesitan que el foro use la misma zona horaria que el servidor en el que está hospedado. Usa esta opción para especificar una diferencia horaria (en horas) en la que el foro debe operar, comparada con la hora del servidor. Son permitidos valores negativos y decimales.';
$helptxt['default_timezone'] = 'The server timezone tells PHP where your server is located. You should ensure this is set correctly, preferably to the country/city in which the server is located. You can find out more information on the <a href="http://www.php.net/manual/en/timezones.php" target="_blank">PHP Site</a>.';
$helptxt['spamWaitTime'] = 'Aquí puedes seleccionar el tiempo de debe transcurrir entre publicación de mensajes. Esto puede utilizarse para evitar que las personas hagan spam en tu foro, al limitarles qué tan seguido pueden publicar mensajes.';

$helptxt['enablePostHTML'] = 'This will allow the posting of some basic HTML tags:
	<ul class="normallist enablePostHTML">
		<li>&lt;b&gt;, &lt;u&gt;, &lt;i&gt;, &lt;s&gt;, &lt;em&gt;, &lt;ins&gt;, &lt;del&gt;</li>
		<li>&lt;a href=&quot;&quot;&gt;</li>
		<li>&lt;img src=&quot;&quot; alt=&quot;&quot; /&gt;</li>
		<li>&lt;br /&gt;, &lt;hr /&gt;</li>
		<li>&lt;pre&gt;, &lt;blockquote&gt;</li>
	</ul>';

// Initial theme settings - Manage and Install
$helptxt['themes'] = 'Here you can select whether the default theme can be chosen, what theme guests will use, as well as other options. Click on a theme to the right to change the settings for it.';
$helptxt['theme_install'] = 'This section permits you to install new themes. You do this by uploading an archived file for the theme from your personal computer, installing from a theme directory on the host server or by copying the default theme and renaming that copied file.<br /><br />Please remember this: the archived file or directory must have a <span class="alert">theme_info.xml</span> definition file as a part of the archive or the directory.';
$helptxt['theme_forum_theme'] = 'Changing the overall forum default does not affect members that have selected another available theme. You must also \'Reset\' all members to force them to the new forum default. You can also set a forum default theme that is seen by guests and then reset members to a different theme. <br /><br />Remember that when permitted to select their own themes, members can overide the theme set by you.';

// Theme Management and Options - Theme settings
$helptxt['themeadmin_list_reset'] = 'On rare occasions the path to the theme will be lost and your forum will not display properly. This may be due to a mistake by an Admin, database errors, failed software updates, mod installations or some other event. Resetting the themes URLs and directories will usually fix this problem.';
$helptxt['themeadmin_delete_help'] = 'The default theme cannot be deleted as doing so would break your forum and would break other themes. However, you can delete any theme that has the red \'X\' next to it by clicking on that \'X\'. <br /><br /> Remember this: Deleting a theme does not remove it from the server, it only removes the themes availability to be used on the forum. You will need to FTP into your server or use the host provided panel to remove the custom theme from the server. Do not ever delete the theme named \'default\'.';

$helptxt['enableVideoEmbeding'] = 'This allows automatic conversion of standard URLs into an embedded video when the post is viewed.  Currently only supports YouTube, Vimeo, TikTok and Dailymotion video links';
$helptxt['enableCodePrettify'] = 'This will load the Prettify script which will color highlight code used in code tags.  It adds styles to code snippets so that tokens stand out and your users can more easily read the code.';
// @todo Add more information about how to use them here.
$helptxt['xmlnews_enable'] = 'Allows people to link to <a href="%1$s?action=.xml;sa=news" target="_blank" class="new_win">Recent news</a>
	and similar data.  It is also recommended that you limit the number of recent posts/news because, when RSS data
	is displayed in some clients, like Trillian, it is expected to be truncated.';
$helptxt['hotTopicPosts'] = 'Change the number of posts for a topic to reach the state of a &quot;hot&quot; or
	&quot;very hot&quot; topic.  Select the likes option to base this state on the number of likes instead of the number of posts';
$helptxt['globalCookies'] = 'Makes login cookies available across subdomains.  For example, if...<br />
	Your site is at http://www.myserver.com/,<br />
	And your forum is at http://forum.myserver.com/,<br />
	Using this option will allow you to access the forum\'s cookie on your site.  Do not enable this if there are other subdomains (like hacker.elkarte.net) not controlled by you.<br />
	This option does not function when local cookies are enabled.';
$helptxt['globalCookiesDomain'] = 'Define the main domain to be used when login cookies are available across subdomains';
$helptxt['httponlyCookies'] = 'With this setting on, cookies will not be accessible by scripting languages, such as JavaScript. This setting can help to reduce identity theft through XSS attacks. This may cause issues with some third party scripts but is recommended to be on when possible.';
$helptxt['secureCookies'] = 'Activar esta opción forzará a las cookies creadas por los usuarios en tu foro a ser marcadas como seguras. Activa esta opción sólo si estás usando HTTPS a través de tu sitio, ya que romperá el manejo de cookies de otra manera';
$helptxt['admin_session_lifetime'] = 'This controls the length of time an admin session can remain active. Once this timer expires the session will end, requiring you to enter your admin credentials to continue accessing the admin area. The minimum value is 5 minutes, the maximum allowed value is 14400 minutes (equals a day). It is strongly recommended to use a value less than 60 minutes for security reasons.';
$helptxt['auto_admin_session'] = 'This controls whether an administrative session is activated during logon or not.';
$helptxt['securityDisable'] = 'Esto <em>desactiva</em> la revisión adicional de contraseña para acceder a la sección de administración. ¡NO es recomendable!';
$helptxt['securityDisable_why'] = 'Esta es tu contraseña actual. (la misma que usas para ingresar.)<br /><br />El que tengas que escribirla ayuda a asegurarnos que realmente desees realizar la tarea administrativa que estés realizando, y que eres <strong>tú</strong> el que la realiza.';
$helptxt['securityDisable_moderate'] = 'This <em>disables</em> the additional password check for the moderation section. This is not recommended!';
$helptxt['securityDisable_moderate_why'] = 'This is your current password. (the same one you use to login.)<br /><br />Having to type this helps ensure that you want to do whatever moderation you are doing, and that it is <strong>you</strong> doing it.';
$helptxt['enableOTP'] = 'Enabling this feature allows another layer of security for a member\'s account. Two-factor authentication, or 2FA, is a way of logging into websites that requires more than just a password. Using a password to log into a website is susceptible to security threats, because it represents a single piece of information a malicious person needs to acquire. The added security that 2FA provides is requiring additional information to sign in.<br /><br />A Time-based One-Time Password (TOTP) application such as Google Authenticator or Authy automatically generates an authentication code that changes after a certain period of time.';
$helptxt['emailmembers'] = 'In this message you can use a few &quot;variables&quot;.  These are:<br />
	{$board_url} - The URL to your forum.<br />
	{$current_time} - The current time.<br />
	{$member.email} - The current member\'s email.<br />
	{$member.link} - The current member\'s link.<br />
	{$member.id} - The current member\'s ID.<br />
	{$member.name} - The current member\'s name.  (for personalization.)<br />
	{$latest_member.link} - The most recently registered member\'s link.<br />
	{$latest_member.id} - The most recently registered member\'s ID.<br />
	{$latest_member.name} - The most recently registered member\'s name.';
$helptxt['attachmentEncryptFilenames'] = 'Encrypting attachment file names allows you to have more than one attachment of the same name and heightens security.  It, however, could make it more difficult to rebuild your database if something drastic happened.';

$helptxt['failed_login_threshold'] = 'Especifica el número de intentos fallidos de ingreso, antes de redireccionarlos a la pantalla de recordatorio de contraseñas.';
$helptxt['loginHistoryDays'] = 'The number of days to keep login history under user profile history. Default is 30 days.';
$helptxt['oldTopicDays'] = 'Si esta opción está activada se le mostrará al usuario una advertencia cuando intente responder a un tema que no ha tenido nuevas respuestas por el tiempo especificado, en días, en esta opción. Pon 0 para desactivar esta función.';
$helptxt['edit_wait_time'] = 'Número de segundos que deben transcurrir después de la publicación de un mensaje, para que se registre la fecha de la última modificación.';
$helptxt['edit_disable_time'] = 'Número de minutos transcurridos permitidos antes de que un usuario no pueda continuar editando un mensaje que ha publicado. Pon 0 para desactivarlo. <br /><br /><em>Nota: Esto no tendrá efecto en los usuarios que tengan el permiso para editar los mensajes de otros usuarios.</em>';
$helptxt['preview_characters'] = 'This option sets the number of available characters for the first and last message of the topic preview.  <strong>Note</strong> this only makes the information available to the theme, the theme must support the &quot;Show post previews on the message index&quot; setting';
$helptxt['posts_require_captcha'] = 'Esta opción obligará a los usuarios a introducir un código mostrado en una imagen de verificación cada vez que creen un mensaje en el foro. Sólo usuarios con un número de mensajes menor que el valor establecido necesitarán introducir el código (debería ayudar a combatir scripts automáticos de spam).';
$helptxt['enableSpellChecking'] = 'Enable spell checking. You MUST have the pspell library installed on your server and your PHP configuration set up to use the pspell library. Your server ' . (function_exists('pspell_new') ? 'DOES' : 'DOES NOT') . ' appear to have this set up.';
$helptxt['lastActive'] = 'Set the number of minutes since their last activity to display people as active on the board index. Default is 15 minutes.';

$helptxt['customoptions'] = 'Esta sección define las opciones que un usuario puede elegir de un cuadro desplegable. Hay varios puntos claves a tener en cuenta en esta sección:
	<ul class="normallist">
		<li><strong>Opción por defecto:</strong> Aquella opción que tenga un &quot;radio button&quot; seleccionado será la selección por defecto para el usuario cuando éste introduzca su perfil.</li>
		<li><strong>Eliminar Opciones:</strong> Para eliminar una opción simplemente limpia el cuadro de texto de esa opción (todos los usuarios que la seleccionaron tendrán su opción eliminada.</li>
		<li><strong>Reordenar Opciones:</strong> Puedes reordenar opciones moviendo texto entre los cuadros de texto. Sin embargo (importante), debes asegurarte de <strong>no</strong> cambiar el texto al reordenar opciones o bien los datos del usuario se perderán.</li>
	</ul>';

$helptxt['autoOptDatabase'] = 'Esta opción optimiza automaticamente la base de datos cada X días.  Especifica 1 para realizar una optimización diaria.  Asimismo, puedes especificar un máximo número de usuarios en línea, para que no sobrecargues tu servidor o incomodes a muchos usuarios.';
$helptxt['autoFixDatabase'] = 'Esto arreglará automáticamente tablas en la base de datos con problemas, y continuará como si nada hubiera sucedido.  Esto puede ser útil, ya que la única manera de arreglar este tipo de problemas, es REPARANDO la tabla, y tu foro no estará caído hasta que te des cuenta.  Se te enviará un email cuando esto suceda.';

$helptxt['enableParticipation'] = 'Esto muestra un pequeño icono en los temas en que el usuario ha publicado mensajes.';
$helptxt['enableFollowup'] = 'This allows members to start new topics quoting the text of any message.';

$helptxt['db_persist'] = 'Mantiene la conexión activa para incrementar el rendimiento.  Si tu NO estás en un servidor dedicado, esto puede causarte problemas con tu proveedor de hospedaje.';
$helptxt['ssi_db_user'] = 'Opcionalmente se puede utilizar un usuario y contraseña diferentes para la base de datos al utilizar SSI.php.';

$helptxt['queryless_urls'] = 'This changes the format of URLs a little so search engines will like them better.  They will look like index.php/topic,1.0.html.';
$helptxt['countChildPosts'] = 'Checking this option will mean that posts and topics in a board\'s sub-board will count toward its totals on the index page.<br /><br />This will make things notably slower, but means that a parent with no posts in it won\'t show \'0\'.';
$helptxt['allow_ignore_boards'] = 'Al marcar esta opción permitiras a los usuarios seleccionar foros que quieran ignorar.';
$helptxt['deny_boards_access'] = 'Checking this option will allow you to deny access to certain boards based on membergroup access';

$helptxt['who_enabled'] = 'Esta opción te permite activar o desactivar la posibilidad de que los usuarios vean quién está en linea navegando el foro, así como lo que están haciendo.';

$helptxt['recycle_enable'] = '&quot;Recicla&quot; temas y mensajes eliminados al foro especificado.';

$helptxt['enableReportPM'] = 'Esta opción permite a tus usuarios informar a los administradores sobre mensajes privados que hayan recibido. Puede ser útil para controlar cualquier abuso de los mensajes privados.';
$helptxt['max_pm_recipients'] = 'Esta opción te permite establecer el número máximo de destinatarios permitidos en un mensaje privado enviado por un usuario del foro. Puede utilizarse para facilitar el bloqueo de abuso de spam en el sistema de Mensajes Privados. Observa que los usuarios con permiso para enviar boletines de noticias están exentos de esta restricción. Introduce cero para ilimitado.';
$helptxt['pm_posts_verification'] = 'Esta opción obligará a los usuarios a introducir un código mostrado en una imagen de verificación cada vez que manden un mensaje privado. Solamente usuarios con un número de mensajes inferior al establecido necesitarán introducir el código - esto deberia ayudar contra los scripts automatizados de spam.';
$helptxt['pm_posts_per_hour'] = 'Esto limitará el número de mensajes privados, los cuales hayan sido enviados por un usuario en el perido de una hora. Esto no afecta a los administradores o moderadores.';

$helptxt['default_personal_text'] = 'Sets the default text a new user will have as their &quot;personal text.&quot; This option is not available when personal text is disabled, or when users can set their personal text on registration for themselves.';

$helptxt['modlog_enabled'] = 'Guardar logs de todas las acciones de los moderadores.';

$helptxt['registration_method'] = 'This option determines what method of registration is used for people wishing to join your forum. You can select from:<br /><br />
	<ul class="normallist">
		<li>
			<strong>Registration Disabled</strong><br />
				Disables the registration process, which means that no new members can register to join your forum.<br />
		</li><li>
			<strong>Immediate Registration</strong><br />
				New members can login and post immediately after registering on your forum.<br />
		</li><li>
			<strong>Email Activation</strong><br />
				When this option is enabled any members registering with the forum will have an activation link emailed to them which they must click before they can become full members.<br />
		</li><li>
			<strong>Admin Approval</strong><br />
				This option will make it so that all new members registering with the forum will need to be approved by an admin before they become full members.
		</li>
	</ul>';
$helptxt['register_openid'] = '<strong>Authenticate with OpenID</strong><br />
	OpenID allows you to use the same user credentials across different websites to simplify your online experience. To use OpenID you first need to create an OpenID account - a list of providers can be found on the <a href="http://openid.net/" target="_blank">OpenID Official Site</a><br /><br />
	Once you have an OpenID account simply enter your unique identification URL into the OpenID input box and submit. You will then be taken to your provider\'s site to verify your identity before being passed back to this site.<br /><br />
	On your first visit to this site you will be asked to supply a couple of details before you will be recognized, after which you can login to this site and change your profile settings using just your OpenID.<br /><br />
	For more information please visit the <a href="http://openid.net/" target="_blank">OpenID Official Site</a>';

$helptxt['send_validation_onChange'] = 'When this option is checked all members who change their email address in their profile will have to reactivate their account from an email sent to the new address';
$helptxt['send_welcomeEmail'] = 'Cuando esta opción está seleccionada a todos los nuevos usuarios se les enviará un email de bienvenida a tu foro';
$helptxt['password_strength'] = 'This setting determines the strength required for passwords selected by your forum users. The stronger the password, the harder it should be to compromise the member\'s account.
	Its possible options are:
	<ul class="normallist">
		<li><strong>Low:</strong> The password must be at least four characters long.</li>
		<li><strong>Medium:</strong> The password must be at least eight characters long, and can not be part of a user name or email address.</li>
		<li><strong>High:</strong> As for medium, except the password must also contain a mixture of upper and lower case letters, and at least one digit.</li>
	</ul>';
$helptxt['enable_password_conversion'] = 'By enabling this setting, ElkArte will attempt to detect passwords stored in other formats and convert them for use in this software.  Typically this is used for converted forums, but may have other uses as well.  Disabling this prevents a user from logging in using their password after a conversion and would need to reset their password.';

$helptxt['coppaAge'] = 'El valor especificado en este cuadro determinará la edad mínima que los nuevos usuarios deben tener para que se les conceda acceso inmediato a los foros.
	Durante el proceso de registro se les pedirá que confirmen si son mayores a esa edad, y de no serlo, puede o negársele su solicitud, o suspendarla esperando por la aprobación de los padres - dependiendo del tipo de restricción escogida.
	Si se pone 0 en este valor, entonces todas las restricciones de edad se ignorarán.';
$helptxt['coppaType'] = 'Si las restricciones de edad están activas, entonces este valor determinará qué pasará cuando un usuario más joven de la edad mínima intenta registrarse en tu foro. Hay dos posibilidades:
	<ul class="normallist">
		<li>
			<strong>Rechazar su solicitud de registro:</strong><br />
				A cualquier nuevo usuario que no cumpla con la edad mínima se le rechazará su solicitud de registro inmediatamente.<br />
		</li><li>
			<strong>Requerir aprobación del Padre o Tutor</strong><br />
				La cuenta de cualquier nuevo usuario que no cumpla con la edad mínima marcará como pendiente de autorización, y se le mostrará un formulario en la que sus padres o tutores deben dar el permiso expreso para que se convierta en un usuario del foro.
				También se les mostrarán los datos de contacto que se especificaron en la pantalla de configuración, para que puedan enviar el formulario al administrador por correo o fax.
		</li>
	</ul>';
$helptxt['coppaPost'] = 'The contact boxes are required so that forms granting permission for underage registration can be sent to the forum administrator. These details will be shown to all new minors, they are required for parent/guardian approval. At the very least a postal address or fax number must be provided.';

$helptxt['allow_hideOnline'] = 'With this option enabled all members will be able to hide their online status from other users (except administrators). If disabled only users who can moderate the forum can hide their presence. Note that disabling this option will not change any member\'s current status - it just stops them from hiding themselves in the future.';

$helptxt['latest_support'] = 'This panel shows you some of the most common problems and questions on your server configuration. Don\'t worry, this information isn\'t logged or anything.<br /><br />If this stays as &quot;Retrieving support information...&quot;, your computer probably cannot connect to the website.';
$helptxt['latest_packages'] = 'Here you can see some of the most popular and some random packages, with quick and easy installations.<br /><br />If this section doesn\'t show up, your computer probably cannot connect to <a href="https://www.elkarte.net/" target="_blank" class="new_win">www.elkarte.net/</a>.';
$helptxt['latest_themes'] = 'This area shows a few of the latest and most popular themes from <a href="https://www.elkarte.net/" target="_blank" class="new_win">www.elkarte.net/</a>.  It may not show up properly if your computer can\'t find <a href="https://www.elkarte.net/" target="_blank" class="new_win">www.elkarte.net/</a>, though.';

$helptxt['secret_why_blank'] = 'For your security, your password and the answer to your secret question are encrypted so that ElkArte will never tell you, or anyone else, what they are.';
$helptxt['moderator_why_missing'] = 'Since moderation is done on a board-by-board basis, you have to make members moderators from the <a href="%1$s?action=admin;area=manageboards" target="_blank" class="new_win">board management interface</a>.';

$helptxt['permissions'] = 'A través de los permisos les permites o impides a los grupos hacer cosas específicas.<br /><br />Puedes modificar varios foros al mismo tiempo usando las casillas, o busca en los permisos por un grupo específico al hacer clic en \'Modificar.\'';
$helptxt['permissions_board'] = 'Si un foro se especifica como \'Global,\' significa que el foro no tendrá permisos especiales.  \'Local\' significa que tendrá sus propios permisos - separados de los globales.  Esto te permite tener un foro que tiene más (o menos) permisos que otro, sin que sea necesario que los especifiques para cada uno de los foros.';
$helptxt['permissions_quickgroups'] = 'Estos te permiten usar la configuración &quot;default&quot; de permisos - estándar significa \'nada especial\', restrictivo significa \'como visitante\', moderador significa \'que un moderador tiene\', y por último \'mantenimiento\' significa permisos muy cercanos a los de un administrador.';
$helptxt['permission_enable_deny'] = 'Denegar permisos puede ser útil cuando quieres quitar permisos de algunos usuarios. Puedes añadir un grupo con permiso \'denegado\' a los miembros que deseas denegar un permiso.<br /><br />Utilízalos con cuidado, un permiso denegado prevalece, no importa a que otros grupos pertenezca el usuario.';
$helptxt['permission_enable_postgroups'] = 'Al activar permisos para grupos basados en el número de mensajes podrás asignar permisos a usuarios que han publicado una cierta cantidad de mensajes. Los permisos de grupos basados en el número de mensajes se <em>añden</em> a los permisos de los grupos convencionales.';
$helptxt['membergroup_guests'] = 'El grupo de invitados son todos los usuarios que no están conectados.';
$helptxt['membergroup_regular_members'] = 'Los usuarios regulares son todos aquellos que están conectados, pero que no tienen asignado un grupo primario.';
$helptxt['membergroup_administrator'] = 'The administrator can, per definition, do anything and see any board. Thus, there are no permission settings for the administrator.';
$helptxt['membergroup_moderator'] = 'The Moderator member group is a special member group. Permissions and settings assigned to this group apply to moderators but only <em>on the boards they moderate</em>. Outside these boards they\'re just like any other member.';
$helptxt['membergroups'] = 'There are two types of groups that your members can be part of. These are:
	<ul class="normallist">
		<li><strong>Regular Groups:</strong> A regular group is a group to which members are not automatically put into. To assign a member to be in a group simply go to their profile and click &quot;Account Settings&quot;. From here you can assign them any number of regular groups to which they will be part.</li>
		<li><strong>Post Groups:</strong> Unlike regular groups post based groups cannot be assigned. Instead, members are automatically assigned to a post based group when they reach the minimum number of posts required to be in that group.</li>
	</ul>';

$helptxt['calendar_how_edit'] = 'Puedes editar esos eventos haciendo clic en el asterisco rojo (*) al lado de sus nombres.';

$helptxt['maintenance_backup'] = 'Esta área te permite guardar una copia de todos los mensajes, configuraciones, usuarios, y otra información de tu foro en un archivo muy grande.<br /><br />Es recomendado hacerlo a menudo, probablemente semanalmete, por seguridad.';
$helptxt['maintenance_rot'] = 'Esto te permite <strong>completa</strong> e <strong>irrevocablemente</strong> borrar temas viejos. Es recomendable que intentes hacer un respaldo primero, en caso que accidentalmente borres algo que no deseabas.<br /><br />Usa esta opción con cuidado.';
$helptxt['maintenance_members'] = 'Te permite <strong>completa</strong> e <strong>irrevocablemente</strong> eliminar cuentas de usuario de tu foro. Se recomienda <strong>encarecidamente</strong> que se realice una copia de seguridad antes, para casos en los que puedas eliminar algo que realmente no querías.<br /><br />Utiliza esta opción con cuidado.';

$helptxt['avatar_default'] = 'With this option enabled, a default avatar is shown for all users without their own avatar. The file named \'default_avatar.png\' is located in the images folder inside the themes directory.';
$helptxt['avatar_server_stored'] = 'This allows your members to pick an avatar from a number of avatars stored on your server themselves.  They are, generally, in the same place as the forum under the avatars directory.<br />As a tip, if you create directories in that folder, you can make &quot;categories&quot; of avatars.';
$helptxt['avatar_external'] = 'Al activarlo, los usuarios pueden teclear una URL que enlace con su propio avatar. El inconveniente es que, en algunos casos, pueden utilizar avatares que son muy grandes o retratos que no quieres en tu foro.';
$helptxt['avatar_download_external'] = 'Con esta opción activada, se descargará el avatar del URL especificado por el usuario. Si el proceso fue realizado con éxito, el avatar se tratará como un avatar subido por el usuario.';
$helptxt['avatar_upload'] = 'Esta opción es similar a &quot;Permitir a los usuarios seleccionar un avatar externo&quot;, excepto que tienes un mejor control sobre los avatares, una mejor manera de redimensionarlos y los usuarios no tienen que tener un sitio donde poner sus avatares.<br /><br />Sin embargo, el inconveniente es que puede utilizar mucho espacio de tu servidor.';
$helptxt['avatar_resize_options'] = 'This set of options apply to any avatar loaded to the server by users, either uploaded or retrieved from an external URL.';
$helptxt['avatar_download_png'] = 'Los PNG son más grandes, pero ofrecen una mejor calidad de compresión. De no estar seleccionado, se usaráa en su lugar JPEG - que generalmente es de menor tamaño, pero con menor calidad.';
$helptxt['gravatar'] = 'Gravatar (globally recognized avatar) is a service for providing globally unique avatars. For more details please visit the Gravatar <a href="http://www.gravatar.com" target="_blank"><strong>website</strong>.</a>';
$helptxt['gravatar_rating'] = 'Gravatar allows users to self-rate their images so that they can indicate if an image is appropriate for a certain audience. By default, only \'G\' rated images are displayed unless you indicate that you would like to see higher ratings. <br /><br /><ul><li><strong>g:</strong> suitable for display on all websites with any audience type.</li><li><strong>pg:</strong> may contain rude gestures, provocatively dressed individuals, the lesser swear words, or mild violence.</li><li><strong>r:</strong> may contain such things as harsh profanity, intense violence, nudity, or hard drug use.</li><li><strong>x:</strong> may contain hardcore sexual imagery or extremely disturbing violence.</li></ul>';
$helptxt['custom_avatar_enabled'] = 'It is recommended that you enable this for best performance as it will reduce both the processor load, and database load when viewing pages with avatars.<br />You must enter both a publicly accessible directory to save avatars in and the publicly accessible URL for that directory.  For example a directory of /home/yourforumname/public_html/NewAvatarDirectory and an URL of http://www.yourforumname.com/NewAvatarDirectory';
$helptxt['disableHostnameLookup'] = 'Esto desactiva la búsqueda de nombres de servidores, que en algunos servidores es muy lento.  Es importante mencionar que ésto hará la restricción de accesos menos eficaz.';

$helptxt['search_weight_commonheader'] = 'Weight factors are used to determine the relevancy of a search result. Change these weight factors to match the things that are specifically important for your forum. For instance, a forum of a news site might want a relatively high value for \'age of last matching message\'. All values are relative in relation to each other and should be positive integers.';
$helptxt['search_weight_frequency'] = 'This factor counts the amount of matching messages and divides them by the total number of messages within a topic.';
$helptxt['search_weight_age'] = 'This factor rates the age of the last matching message within a topic. The more recent this message is, the higher the score.';
$helptxt['search_weight_length'] = 'This factor is based on the topic size. The more messages are within the topic, the higher the score.';
$helptxt['search_weight_subject'] = 'This factor looks whether a search term can be found within the subject of a topic.';
$helptxt['search_weight_first_message'] = 'This factor looks whether a match can be found in the first message of a topic.';
$helptxt['search_weight_sticky'] = 'This factor looks whether a topic is pinned and increases the relevancy score if it is.';
$helptxt['search_weight_likes'] = 'This factor looks whether a topic has likes and increases the relevancy score based on the number.';
$helptxt['search'] = 'Aquí puedes ajustar la configuración de la función de búsqueda. Es importante mencionar que aquí no puedes especificar quien tiene acceso a la función de búsqueda. Usa la pantalla de \'manejar permisos\' en el panel administrativo para eso.';
$helptxt['search_why_use_index'] = 'A search index can greatly improve the performance of searches on your forum. Especially when the number of messages on a forum grows bigger, searching without an index can take a long time and increase the pressure on your database. If your forum is bigger than 50,000 messages, you should consider creating a search index to assure peak performance of your forum.<br /><br />Note that a search index can take up quite some space. A fulltext index is a built-in index of the database. It\'s relatively compact (approximately the same size as the message table), but a lot of common words aren\'t indexed and it can, in some wildcard queries, turn out to be slow. The custom index is bigger (depending on your configuration it can be up to 3 times the size of the messages table) but its performance is often better than fulltext and indexes most words.';

$helptxt['see_admin_ip'] = 'A los administradores y moderadores se les muestran las IPs para facilitar la moderación y para hacer más fácil el rastreo de personas indeseables. Recuerda que las direcciones IP no siempre son identificatorias, y que las IPs cambian periódicamente.<br /><br />También se les permite a los usuarios ver su propia IP.';
$helptxt['see_member_ip'] = 'Tu dirección IP es mostrada solamente a tí y a los moderadores. Recuerda que esta información no es identificatoria y muchas IPs cambian periódicamente.<br /><br />No puedes ver las IPs de otros usuarios y ellos no pueden ver la tuya.';
$helptxt['whytwoip'] = 'Various methods are used to detect user IP addresses. Usually these two methods result in the same address but in some cases more than one address may be detected. In this case both addresses will be logged, and both will be used for ban checks (etc). You can click on either address to track that IP and ban if necessary.';

$helptxt['ban_cannot_post'] = 'La restricción \'no puede publicar\' establece el modo sólo-lectura para el usuario restringido. El usuario no puede crear nuevos temas, ni responder a temas ya existentes, ni enviar mensajes privados ni votar en encuestas. Los usuarios restringidos, sin embargo, pueden leer mensajes privados y temas.<br /><br />Se muestra un mensaje de advertencia a usuarios que tiene restringido el acceso de esta manera.';

$helptxt['posts_and_topics'] = '
	<ul class="normallist">
		<li>
			<strong>Post Settings</strong><br />
			Modify the settings related to the posting of messages and the way messages are shown. You can also enable the spell check here.
		</li><li>
			<strong>Bulletin Board Code</strong><br />
			Enable the code that allows to format forum messages. Also adjust which BBCodes are allowed and which aren\'t.
		</li><li>
			<strong>Censored Words</strong>
			In order to keep the language on your forum under control, you can censor certain words. This function allows you to convert forbidden words into innocent versions.
		</li><li>
			<strong>Topic Settings</strong>
			Modify the settings related to topics. The number of topics per page, whether pinned topics are enabled or not, the number of messages needed for a topic to be hot, etc.
		</li>
	</ul>';
$helptxt['allow_no_censored'] = 'When checked, this global setting allows members to disable word censoring in their User Profile through the Look and Layout settings. The members\' ablility to disable word censoring is still limited by their permission profile.';
$helptxt['spider_mode'] = 'Sets the logging level.<br />
Standard - Logs minimal spider activity.<br />
Moderate - Provides more accurate statistics.<br />
Aggressive - As for &quot;Moderate&quot; but logs data about each page visited.';

$helptxt['spider_group'] = 'Seleccionando un grupo restrictivo, cuando un invitado es detectado como un rastreador de búsquedas (search crawler) le será automáticamente asignado cualquier permiso de &quot;denegar&quot; de este grupo, además de los permisos normales de los invitados. Puedes usar esto para proporcionar menor acceso a un motor de búsqueda que el que le proporcionarías a un invitado normal. Puedes por ejemplo querar crear un nuevo grupo llamado &quot;Arañas&quot; y seleccionar esto aquí. Entonces podrías denegarle a ese grupo el permiso para ver los perfiles, para evitar que las arañas indexen los perfiles de tus usuarios.<br />Nota: La detección de arañas no es perfecta y puede ser simulada por usuarios, así que esta característica no garantiza que se restringirá el contenido sólo a aquellos motores de búsqueda que hayas añadido.';
$helptxt['show_spider_online'] = 'Esta opción te permite seleccionar si las arañas deberán ser listadas en la lista de usuarios en línea en el índice del foro y en la página &quot;Quién está en línea&quot; page. Las opciones son:
	<ul class="normallist">
		<li>
			<strong>No, en absoluto</strong><br />
			Las arañas simplemente aparecerán como invitados para todos los usuarios.
		</li><li>
			<strong>Mostrar la cantidad de arañas</strong><br />
			El índice del foro mostrará el número de arañas que están visitando el foro en ese momento.
		</li><li>
			<strong>Mostrar los nombres de las arañas</strong><br />
			Será mostrado el nombre de cada araña, de manera que los usuarios podrán ver cuántas arañas de cada tipo están visitando el foro en ese momento - esto tiene efecto tanto en el índice del foro como en la página de quién está en línea.
		</li><li>
			<strong>Mostrar los nombres de las arañas - Sólo admins</strong><br />
			Como arriba, excepto que sólo los administradores pueden ver el estado de las arañas - para el resto de usuarios las arañas aparecen como invitados.
		</li>
	</ul>';

$helptxt['birthday_email'] = 'Elegir el índice del email de cumpleaños que se usará.  Una vista previa será mostrada en los campos Asunto del email y Cuerpo del email.<br /><strong>Nota:</strong> Establecer esta opción no activa automáticamente los emails de cumpleaños.  Para activarlos usa la página de <a href="%1$s?action=admin;area=scheduledtasks;%3$s=%2$s" target="_blank" class="new_win">Tareas Programadas</a> y activa la tarea de email de cumpleaños.';
$helptxt['pm_bcc'] = 'Al enviar un mensaje personal puedes elegir añadir un receptor como BCC o &quot;Blind Carbon Copy&quot; (remitente oculto). La identidad de los receptores BCC no es revelada al resto de receptores del mensaje.';

$helptxt['move_topics_maintenance'] = 'Esto permitirá mover todos los posts de un foro a otro.';
$helptxt['maintain_reattribute_posts'] = 'Puedes usar esta función para atribuir posts de invitado de tu foro a un usuario registrado. Esto es útil si, por ejemplo, un usuario borró su cuenta y cambió de idea después, decidiendo volver a registrarse; con esta función se le podrían reasignar sus posts antiguos a la nueva cuenta.';
$helptxt['chmod_flags'] = 'You can manually set the permissions you wish to set the selected files to. To do this enter the chmod value as a numeric (octet) value. Note that these flags will have no effect on Microsoft Windows operating systems.';

$helptxt['postmod'] = 'Esta sección permite a los miembros del equipo de moderación (aquellos con los permisos suficientes) aprobar cualquier mensaje o tema antes de que sea mostrado.';

$helptxt['field_show_enclosed'] = 'Encloses the user input between some text or HTML code.  This will allow you to add more instant message providers, images or an embed, etc. For example:<br /><br />
		&lt;a href="http://website.com/{INPUT}"&gt;&lt;img src="{DEFAULT_IMAGES_URL}/icon.png" alt="{INPUT}" /&gt;&lt;/a&gt;<br /><br />
		You can use the following variables:<br />
		<ul class="normallist">
			<li>{INPUT} - The input specified by the user.</li>
			<li>{KEY} - The key specified for a certain value of select box or radio buttons in the admin panel. Usually to use in case of localization or use in CSS of Javascript elements (e.g. as class name).</li>
			<li>{SCRIPTURL} - Web address of forum.</li>
			<li>{IMAGES_URL} - URI of the images directory of the user\'s current theme.</li>
			<li>{DEFAULT_IMAGES_URL} - URI of the images directory of the default theme.</li>
		</ul>';

$helptxt['custom_mask'] = 'The input mask is important for your forum\'s security. Validating the input from a user can help to ensure that data is not used in a way you do not expect. We have provided some simple regular expressions as hints.<br /><br />
	<div class="smalltext custom_mask">
		&quot;~[A-Za-z]+~&quot; - Match all upper and lower case alphabet characters.<br />
		&quot;~[0-9]+~&quot; - Match all numeric characters.<br />
		&quot;~[A-Za-z0-9]{7}~&quot; - Match all upper and lower case alphabet and numeric characters seven times.<br />
		&quot;~[^0-9]?~&quot; - Forbid any number from being matched.<br />
		&quot;~^([A-Fa-f0-9]{3}|[A-Fa-f0-9]{6})$~&quot; - Only allow 3 or 6 character hexcodes.<br />
	</div><br /><br />
	Additionally, special metacharacters ?+*^$ and {xx} can be defined.
	<div class="smalltext custom_mask">
		? - None or one match of previous expression.<br />
		+ - One or more of previous expression.<br />
		* - None or more of previous expression.<br />
		{xx} - An exact number of the previous expression.<br />
		{xx,} - An exact number or more of the previous expression.<br />
		{,xx} - An exact number or less of the previous expression.<br />
		{xx,yy} - An exact match between the two numbers from previous expression.<br />
		^ - Start of string.<br />
		$ - End of string.<br />
		\ - Escapes the next character.<br />
	</div><br /><br />
	More information and advanced techniques may be found on the internet.';

$helptxt['badbehavior_reverse_proxy_addresses'] = 'In some server farm configurations, Bad Behavior may be unable to determine whether a remote request originated from your reverse proxy/load balancer or arrived directly. In this case you should add all of the internal IP addresses for your reverse proxy/load balancer servers as seen from the origin server. These can usually be omitted; however if you have a configuration where some requests can bypass the reverse proxy/load balancer and connect to the origin server directly, then you should use this option. You should also use this option when incoming requests pass through two or more reverse proxies before reaching the origin server.<br /><br />Enter each IP address or CIDR netblocks separated by a | (1.2.3.4|5.4.3.2/27)';
$helptxt['badbehavior_reverse_proxy_header'] = 'When a reverse proxy is in use, Bad Behavior looks at this HTTP header to determine the actual source IP address for each web request. Your reverse proxy or load balancer must add an HTTP header containing the remote IP address where the connection originated. Most do this by default; check the configuration for your reverse proxy or load balancer to ensure that this header is sent.<br /><br />If you use the CloudFlare service, you should change this option to CF-Connecting-IP.';
$helptxt['badbehavior_reverse_proxy'] = 'When enabled, Bad Behavior will assume it is receiving a connection from a reverse proxy, when a specific HTTP header is received.';
$helptxt['badbehavior_httpbl_maxage'] = 'This is the number of days since suspicious activity was last observed from an IP address by Project Honey Pot. Bad Behavior will block requests with a maximum age equal to or less than this setting.';
$helptxt['badbehavior_httpbl_threat'] = 'This number provides a measure of how suspicious an IP address is, based on activity observed at Project Honey Pot. Bad Behavior will block requests with a threat level equal or higher to this setting. Project Honey Pot has <a href="http://www.projecthoneypot.org/threat_info.php" target="_blank">more information on this parameter</a>.';
$helptxt['badbehavior_httpbl_key'] = 'Bad Behavior is capable of using data from the <a href="http://www.projecthoneypot.org/faq.php#g" target="_blank">http:BL</a> service provided by <a href="http://www.projecthoneypot.org/" target="_blank">Project Honey Pot</a> to screen requests.<br /><br />This is purely optional; however if you wish to use it, you must <a href="http://www.projecthoneypot.org/httpbl_configure.php" target="_blank">sign up for the service</a> and obtain an API key. To disable http:BL use, remove the API key from your settings.';
$helptxt['badbehavior_verbose'] = 'Enabling verbose mode causes all HTTP requests to be logged. When verbose mode is off, only blocked requests and suspicious requests are logged.<br /><br />Verbose mode is off by default. Using verbose mode is not recommended as it can significantly slow down your site; it exists to capture data from live spammers which are not being blocked.';
$helptxt['badbehavior_logging'] = 'Should Bad Behavior keep a log of requests? On by default, and it is not recommended to disable it, since it will cause additional spam to get through.';
$helptxt['badbehavior_strict'] = 'Bad Behavior operates in two blocking modes: normal and strict.<br />When strict mode is enabled, additional checks for (old) software which have been spam sources are enabled, but occasional legitimate users using the same software may be blocked as well.';
$helptxt['badbehavior_offsite_forms'] = 'Bad Behavior normally prevents your site from receiving data posted from forms on other websites. This prevents spammers from, e.g., using a Google cached version of your website to send you spam. However, some web applications such as OpenID require that your site be able to receive form data in this way. If you are running OpenID, enable this option.';
$helptxt['badbehavior_postcount_wl'] = 'This allows you to bypass bad behavior checks for users over a certain post count.<br />-1 will bypass all registered users, including those with no posts<br />0 will disable bypassing and scan everyone regardless of post count<br />Any number greater than zero sets the post count under which users will be checked.';
$helptxt['badbehavior_ip_wl'] = 'IP address ranges use the CIDR format.  To remove an address just leave it blank and then save';
$helptxt['badbehavior_useragent_wl'] = 'User agents are matched by exact match only.';
$helptxt['badbehavior_url_wl'] = 'URLs are matched from the first / after the server name up to, but not including, the ? (if any). The URL to be whitelisted is a URL on YOUR site. A partial URL match is permitted, so URL whitelist entries should be as specific as possible, but no more specific than necessary.<br />For instance, /example would match /example.php and /example/address';

$helptxt['filter_to'] = 'Replace the found text with this, leave blank to replace with found text with nothing (i.e. remove it)';
$helptxt['filter_from'] = 'Enter the text you want to find/replace.  If type is set to regex then this must be a valid regular expression, including delimiters.  If not regex it will do a simple text match and replace it with the replacement text';
$helptxt['filter_type'] = 'Standard will find the exact phrase and replace it with the text in the replace field.  Regular Expression is a wildcard option, but it must be in a valid regex format.';
$helptxt['pbe_post_enabled'] = 'Enable this to allow users to respond to email notifications and have them post as a reply.  They are still required to have posting permissions.';
$helptxt['pbe_pm_enabled'] = 'Enable this to allow users to reply by email to PM notifications.  They are still required to have PM permissions, this setting only allows them to receive and reply to notifications';
$helptxt['maillist_group_mode'] = 'If enabled outbound post/topic emails will come from the poster\'s display name, otherwise it will come from the site name.  This is simply a envelope, affecting only how the "From name" appears in the receiving mailbox, the actual from email address is unchanged.';
$helptxt['maillist_newtopic_change'] = 'This will allow a user to change the subject of a email notification and have it post as a new topic.  The new topic will be started on the same board as the reply was going to.';
$helptxt['maillist_sitename_address'] = 'This must be the address that is piped to the emailpost.php file or the address of the IMAP mailbox';
$helptxt['maillist_help_short'] = 'This feature allows users of your forum to reply to the site\'s email notifications and have those replies post on the forum.  Please visit the Wiki for full instructions';

$helptxt['frame_security'] = 'The X-Frame-Options HTTP response header can be used to indicate whether or not a browser should be allowed to render a page in a frame or an iframe. You can use this additional security restriction on your site against attempts at clickjacking attacks, by ensuring that the content of your site is not embedded into other sites.
	<br />
	More information about this header may be found on the internet.';

$helptxt['attachment_inline_title'] = '<b>Add an inline attachment</b><br />
		Example:
		<br /><b>[attach align=left width=400]123[/attach]</b>
		<br />This will show a left-aligned image resized to 400 pixels wide with the post text flowing around it. Except for the attachment tag and the attachment id all other parameters are optional
		<br /><b>[attach]123[/attach]</b>
		<br />This will show the attachment as a thumbnail if available, if no thumbnail is available it will use a full sized image. The image will be in line with the text of your post.
		<br /><br />
		<br /><b>Options:</b>
		<br />where x is the attachment id
		<br />align=left, center, right
		<br />width=### (where # is number in pixels)
		<br />height=### (where # is number in pixels)
		<br />
		<h3>Modes available</h3>
		<p>
			You can choose the inline mode you want for your attachment:
			<ul>
				<li>Thumbnail [attach]x[/attach] : Your image will be shown as a thumbnail</li>
				<li>Text Link [attachurl]x[/attachurl] : Only a link is show with size and view details. By clicking on it, the image is displayed.</li>
			</ul>
		</p><br />
		<p>
			You can choose how to align the inline image:
			<ul>
				<li>align=left : The image is aligned to the left and the text will flow around it</li>
				<li>align=right : The image is aligned to the right and the text will flow around it</li>
				<li>align=center : The image is centered and the text will be below it</li>
			</ul>
		</p><br />
		<p>
			You can choose how wide to show the image:
			<ul>
				<li>width=123 : The image is displayed 123 pixels wide</li>
				<li>If the width specified is larger than the image or larger than the forum allows the largest allowable width will be used</li>
				<li>Can be used to shrink a thumbnail as well [attach width=50]x[/attach] will display a 50px wide thumbnail</li>
			</ul>
		</p><br />
		<p>
			You can choose how tall to show the image:
			<ul>
				<li>height=123 : The image is displayed 123 pixels tall</li>
				<li>If the height specified is bigger than the image or bigger than the forum allows the biggest allowable width will be used</li>
				<li>Can be used to shrink a thumbnail as well [attach height=50]x[/attach] will display a 50px tall thumbnail</li>
			</ul>
		</p>';