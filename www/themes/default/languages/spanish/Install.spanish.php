<?php
// Version: 1.1; Install

// These should be the same as those in index.language.php.
$txt['lang_character_set'] = 'UTF-8';
$txt['lang_rtl'] = false;

$txt['install_step_welcome'] = 'Bienvenido';
$txt['install_step_exist'] = 'Existance Check';
$txt['install_step_writable'] = 'Chequeo de escritura';
$txt['install_step_forum'] = 'Configuración básica';
$txt['install_step_databaseset'] = 'Configuración de la base de datos';
$txt['install_step_databasechange'] = 'Poblar base de datos';
$txt['install_step_admin'] = 'Cuenta de Administrador';
$txt['install_step_delete'] = 'Finalizar Instalación';

$txt['installer'] = 'Instalador de ElkArte';
$txt['installer_language'] = 'Idioma';
$txt['installer_language_set'] = 'Establecer';
$txt['congratulations'] = '¡Felicidades!, el proceso de instalación se ha completado';
$txt['congratulations_help'] = 'If at any time you need support, or the forum fails to work properly, please remember that <a href="https://www.elkarte.net/index.php" target="_blank" class="new_win">help is available</a> if you need it.';
$txt['still_writable'] = 'Todavía se puede escribir en tu directorio de instalación. Se recomienda que uses chmod para que no sea escribible por razones de seguridad.';
$txt['delete_installer'] = 'Click here to try to delete the install directory now.';
$txt['delete_installer_maybe'] = '<em>(no funciona en todos los servidores.)</em>';
$txt['go_to_your_forum'] = 'Ahora puedes ver <a href="%1$s">tu foro recién instalado</a> y comenzar a usarlo. Primero debes asegurarte de ingresar con tu usuario, para posteriormente acceder al área de administración.';
$txt['good_luck'] = '¡Gracias por instalar ElkArte!';
$txt['try_again'] = 'Click here to try again.';

$txt['install_welcome'] = 'Bienvenido';
$txt['install_welcome_desc'] = 'Bienvenido a ElkArte. Este script te guiará a través del proceso de instalación %1$s. Recopilaremos algunos detalles sobre tu foro en los siguientes pasos, y después de unos minutos tu foro estará listo para ser usado.';
$txt['install_all_lovely'] = 'Hemos completado algunas pruebas iniciales en tu servidor y todo parece estar en orden. Simplemente haz click en el botón de "Continuar" para empezar.';

$txt['user_refresh_install'] = 'Foro Actualizado';
$txt['user_refresh_install_desc'] = 'Mientras se instalaba, el instalador encontró que (con los detalles que proporcionaste) una o más de las tablas que debían crearse ya existían.<br />Cualquier tabla faltante en tu instalación ha sido recreada con los datos de default, pero no se borró ninguna información de las tablas existentes.';

$txt['default_topic_subject'] = '¡Bienvenido a ElkArte!';
$txt['default_topic_message'] = 'Welcome to ElkArte!<br /><br />We hope you enjoy using this software and building your community.&nbsp; If you have any problems, please feel free to [url=https://www.elkarte.net/index.php]ask us for assistance[/url].<br /><br />Thanks!<br />The ElkArte Community.';
$txt['default_board_name'] = 'Discusión General';
$txt['default_board_description'] = 'Siéntete libre de hablar de cualquier cosa en este foro.';
$txt['default_category_name'] = 'Categoría General';
$txt['default_time_format'] = '%d de %B de %Y, %I:%M:%S %p';
$txt['default_news'] = 'ElkArte - ¡Recién Instalado!';
$txt['default_karmaLabel'] = 'Karma:';
$txt['default_karmaSmiteLabel'] = '[smite]';
$txt['default_karmaApplaudLabel'] = '[applaud]';
$txt['default_reserved_names'] = 'Admin\\nWebmaster\\nGuest\\nroot';
$txt['default_smileyset_name'] = 'Set de Fugue';
$txt['default_theme_name'] = 'Tema por defecto de ElkArte';

$txt['default_administrator_group'] = 'Administrador';
$txt['default_global_moderator_group'] = 'Moderador Global';
$txt['default_moderator_group'] = 'Moderador';
$txt['default_newbie_group'] = 'Novato';
$txt['default_junior_group'] = 'Usuario Jr';
$txt['default_full_group'] = 'Usuario Completo';
$txt['default_senior_group'] = 'Usuario Sr.';
$txt['default_hero_group'] = 'Usuario Héroe';

$txt['default_smiley_smiley'] = 'Sonrisa';
$txt['default_wink_smiley'] = 'Guiñar';
$txt['default_cheesy_smiley'] = 'Cheesy';
$txt['default_grin_smiley'] = 'Sonreir';
$txt['default_angry_smiley'] = 'Enojado';
$txt['default_sad_smiley'] = 'Triste';
$txt['default_shocked_smiley'] = 'Impresionado';
$txt['default_cool_smiley'] = 'Cool';
$txt['default_huh_smiley'] = 'Huh?';
$txt['default_roll_eyes_smiley'] = 'Girar ojos';
$txt['default_tongue_smiley'] = 'Lengua';
$txt['default_embarrassed_smiley'] = 'Avergonzado';
$txt['default_lips_sealed_smiley'] = 'Labios sellados';
$txt['default_undecided_smiley'] = 'Indeciso';
$txt['default_kiss_smiley'] = 'Beso';
$txt['default_cry_smiley'] = 'Llorar';
$txt['default_evil_smiley'] = 'Malvado';
$txt['default_azn_smiley'] = 'Azn';
$txt['default_afro_smiley'] = 'Afro';
$txt['default_laugh_smiley'] = 'Risa';
$txt['default_police_smiley'] = 'Police';
$txt['default_angel_smiley'] = 'Ángel';

$txt['error_message_click'] = 'Haz <i>clic</i> aquí';
$txt['error_message_try_again'] = 'para intentar este paso nuevamente.';
$txt['error_message_bad_try_again'] = 'para intentar instalar de todos modos, pero ten en cuenta que esto está <em>altamente</em> desaconsejado.';

$txt['install_settings'] = 'Configuración básica';
$txt['install_settings_info'] = 'Esta página requiere que definas unos ajustes primordiales para tu foro. ElkArte ha detectado automáticamente estos ajustes por ti.';
$txt['install_settings_name'] = 'Nombre del foro';
$txt['install_settings_name_info'] = 'Este es el nombre de tu foro, e.g. &quot;Foro de Pruebas&quot;.';
$txt['install_settings_name_default'] = 'Mi Comunidad';
$txt['install_settings_url'] = 'URL del Foro';
$txt['install_settings_url_info'] = 'Esta es la URL de tu foro <strong>sin la \'/\' del final</strong>.<br />En la mayoría de las ocasiones, puedes dejar el valor por defecto de este cuadro de texto - por lo general tiene el valor correcto.';
$txt['install_settings_compress'] = 'Salida Gzip';
$txt['install_settings_compress_title'] = 'Comprimir salida para ahorrar ancho de banda.';
// In this string, you can translate the word "PASS" to change what it says when the test passes.
$txt['install_settings_compress_info'] = 'Esta función no funciona correctamente en todos los servidores, pero puede ahorrarte mucho ancho de banda.<br /><a href="install.php?obgz=1&amp;pass_string=PASS" onclick="return reqWin(this.href, 200, 60);" target="_blank">Pulsa aquí para problarla</a>. (solo debería decir "PASS".)';
$txt['install_settings_dbsession'] = 'Sesiones de la Base de Datos';
$txt['install_settings_dbsession_title'] = 'Usar la base de datos para las sesiones en lugar de usar archivos.';
$txt['install_settings_dbsession_info1'] = 'Esta opción casi siempre es recomendable seleccionarla, ya que hace las sesiones más fiables.';
$txt['install_settings_dbsession_info2'] = 'No parece que esta opción vaya a funcionar en tu servidor, pero puedes intentarlo.';
$txt['install_settings_proceed'] = 'Continuar';

$txt['db_settings'] = 'Configuración Servidor de Base de datos';
$txt['db_settings_info'] = 'Configuración para utilizar en tu servidor de base de datos. Si no conoces los valores, deberías preguntar cuales son a tu proveedor de servicios.';
$txt['db_settings_type'] = 'Tipo de Base de datos';
$txt['db_settings_type_info'] = 'Se detectaron múltiples tipos de bases de datos compatibles, ¿cuál de ellos quieres usar?';
$txt['db_settings_server'] = 'Nombre del Servidor';
$txt['db_settings_server_info'] = 'Casi siempre es localhost, así que si no lo sabes prueba localhost.';
$txt['db_settings_port'] = 'Puerto';
$txt['db_settings_port_info'] = 'Deja en blanco si tu servidor está usando el puerto por defecto, o no estás seguro de qué puerto poner.';
$txt['db_settings_username'] = 'Nombre de Usuario';
$txt['db_settings_username_info'] = 'Rellena el nombre de usuario que necesitas para conectarte a la base de datos.<br />Si no sabes cuál es, prueba con el nombre de usuario de tu cuenta FTP, en la mayoría de los casos es el mismo.';
$txt['db_settings_password'] = 'Contraseña';
$txt['db_settings_password_info'] = 'Aquí deberías poner la contraseña para conectar con la base de datos.<br />Si no sabes cuál es, deberías probar la contraseña de tu cuenta de FTP.';
$txt['db_settings_database'] = 'Nombre de la Base de datos';
$txt['db_settings_database_info'] = 'Rellena el nombre de la base de datos que quieres usar para que ElkArte almacene sus datos.';
$txt['db_settings_database_info_note'] = 'Si esta base de datos no existe, el instalador intentará crearla.';
$txt['db_settings_database_file'] = 'Nombre del archivo de la Base de Datos';
$txt['db_settings_database_file_info'] = 'Este es el nombre del archivo en el que se guardarán los datos de ElkArte. Te recomendamos que uses el nombre generado al azar y que establezcas la ruta a este archivo fuera del área pública de tu servidor web.';
$txt['db_settings_prefix'] = 'Prefijo de Tablas';
$txt['db_settings_prefix_info'] = 'El prefijo para cada tabla de la base de datos.  <strong>¡No instales dos foros con el mismo prefijo!</strong><br />Este valor permite tener múltiples instalaciones en una sola base de datos.';
$txt['db_populate'] = 'Base de datos poblada';
$txt['db_populate_info'] = 'Su configuración ha sido guardada y la base de datos ha sido poblada con todos los datos requeridos para que su foro funcione. Resumen de la población:';
$txt['db_populate_info2'] = 'Haga clic en &quot;Continuar&quot; para pasar a la página de creación de cuenta de administrador.';
$txt['db_populate_inserts'] = 'Insertadas %1$d filas.';
$txt['db_populate_tables'] = 'Creadas %1$d tablas.';
$txt['db_populate_insert_dups'] = 'Ignoradas %1$d inserciones duplicadas.';
$txt['db_populate_table_dups'] = 'Ignoredas %1$d tablas duplicadas.';

$txt['user_settings'] = 'Crea tu cuenta';
$txt['user_settings_info'] = 'Ahora el instalador creará una nueva cuenta de administrador para tí.';
$txt['user_settings_username'] = 'Tu nombre de usuario';
$txt['user_settings_username_info'] = 'Elige el nombre de usuario con el que quieres iniciar sesión';
$txt['user_settings_password'] = 'Contraseña';
$txt['user_settings_password_info'] = 'Especifica tu contraseña aquí, ¡y recuérdala bien!';
$txt['user_settings_again'] = 'Contraseña';
$txt['user_settings_again_info'] = '(Para verificarla.)';
$txt['user_settings_email'] = 'Dirección Email';
$txt['user_settings_email_info'] = 'Introduce tu dirección de email.  <strong>Debe ser una dirección válida.</strong>';
$txt['user_settings_database'] = 'Contraseña de la base de datos';
$txt['user_settings_database_info'] = 'El instalador necesita que le proporciones la contraseña de la base de datos para crear una cuenta de administrador, por razones de seguridad.';
$txt['user_settings_skip'] = 'Saltar';
$txt['user_settings_skip_sure'] = '¿Está seguro de que quiere saltarse la creación de la cuenta de administrador?';
$txt['user_settings_proceed'] = 'Finalizar';

$txt['ftp_checking_writable'] = 'Comprobando si los archivos son escribibles';
$txt['ftp_setup'] = 'Información de la conexión FTP';
$txt['ftp_setup_info'] = 'Este instalador puede conectarse vía FTP para arreglar los archivos que necesitan tener permisos de escritura y no los poseen. Si esto no funciona para ti deberás acceder manualmente y modificar los permisos de escritura. Toma nota que que esto no soporta SSL por el momento.';
$txt['ftp_server'] = 'Servidor';
$txt['ftp_server_info'] = 'Esta debería ser la dirección del servidor y el puerto de tu servidor FTP';
$txt['ftp_port'] = 'Puerto';
$txt['ftp_username'] = 'Nombre de Usuario';
$txt['ftp_username_info'] = 'El nombre de usuario con el que iniciar sesión. <em>Esto no se guardará en ningún sitio.</em>';
$txt['ftp_password'] = 'Contraseña';
$txt['ftp_password_info'] = 'La contraseña para poder ingresar. <em>Esta información no será guardada en ningún lado.</em>';
$txt['ftp_path'] = 'Ruta de la instalación';
$txt['ftp_path_info'] = 'Esta es la ruta <em>relativa</em> que se usará en tu servidor FTP.';
$txt['ftp_path_found_info'] = 'La ruta en el cuadro superior fue detectado automáticamente.';
$txt['ftp_connect'] = 'Conectarse';
$txt['ftp_setup_why'] = '¿Para que sirve este paso?';
$txt['ftp_setup_why_info'] = 'Algunos archivos necesitan ser escribibles para que ElkArte funcione correctamente. Este paso permite al instalador hacerlos escribibles por ti. Sin embargo, en algunos casos no funciona. Si es ese tu caso, por favor da los permisos 777 (escribible, 755 en algunos hosts) en los siguientes archivos:';
$txt['ftp_setup_again'] = 'para comprobar si estos archivos son escribibles nuevamente.';

$txt['error_php_too_low'] = 'Warning!  You do not appear to have a version of PHP installed on your webserver that meets ElkArte\'s <strong>minimum installations requirements</strong>.<br />If you are not the host, you will need to ask your host to upgrade, or use a different host - otherwise, please upgrade PHP to a recent version.<br /><br />If you know for a fact that your PHP version is high enough you may continue, although this is strongly discouraged.';
$txt['error_missing_files'] = '¡Imposible encontrar archivos imprescindibles para la instalación en el directorio de este script!<br /><br />Comprueba que hayas subido el paquete completo de instalación, incluído el archivo sql, e intenta nuevamente.';
$txt['error_session_save_path'] = '¡Por favor informa a tu proveedor de alojamiento que el valor de <strong>session.save_path especificado en php.ini</strong> no es válido! Necesita ser cambiado  a un directorio que <strong>exista</strong>, y que sea <strong>escribible</strong> por el usuario bajo el cual se está ejecutando PHP.<br />';
$txt['error_windows_chmod'] = 'You\'re on a windows server, and some crucial files are not writable.  Please ask your host to give <strong>write permissions</strong> to the user PHP is running under for the files in your ElkArte installation.  The following files or directories need to be writable:';
$txt['settings_error'] = 'Your settings could not be saved to Settings.php, the file is not writable.';
$txt['error_ftp_no_connect'] = 'Imposible conectarse al servidor FTP con esta combinación de valores.';
$txt['error_db_file'] = '¡No se puede encontrar el script fuente de la base de datos! Por favor, comprueba si el archivo %1$s está en el directorio raíz de tu foro.';
$txt['error_db_connect'] = 'No se puede conectar al servidor de base de datos con los datos proporcionados.<br /><br />Si no estás seguro de lo que hay que teclear, contacta con tu proveedor de servicios.';
$txt['error_db_too_low'] = 'The version of your database server is very old and does not meet ElkArte\'s minimum requirements.<br /><br />Please ask your host to either upgrade it or supply a new one, and if they won\'t, please try a different host.';
$txt['error_db_database'] = 'The installer was unable to access the &quot;<em>%1$s</em>&quot; database.  With some hosts, you have to create the database in your administration panel before ElkArte can use it.  Some also add prefixes - like your username - to your database names.';
$txt['error_db_queries'] = 'Algunas de las consultas no se ejecutaron correctamente. Puede haber sido causado por una versión no soportada (en desarrollo o muy antigua) de tu software de base de datos.<br /><br />Información Técnica sobre las consultas:';
$txt['error_db_queries_line'] = 'Línea nº ';
$txt['error_db_missing'] = 'The installer was unable to detect database support in PHP that ElkArte can utilize.  Please ask your host to ensure that PHP was compiled with the desired database, or that the proper php extension is being loaded.  Currently ElkArte supports the:  &quot;%1$s&quot; extensions';
$txt['error_db_script_missing'] = 'El instalador no pudo encontrar ningún archivo de script de instalación para las bases de datos detectadas. Por favor compruebe que ha subido los archivos de script de instalación necesarios al directorio de su foro, por ejemplo &quot;%1$s&quot;';
$txt['error_session_missing'] = 'El instalador no detecto soporte para sesiones en la instalación de PHP en tu servidor.  Pídele por favor a tu proveedor de hospedaje que se asegure que PHP haya sido compilado con soporte para sesiones (De hecho, lo debieron haber compilado explícitamente in dicho soporte.)'; // note: is this actually true? I see a contradiction here...!
$txt['error_user_settings_again_match'] = '¡Has escrito dos contraseñas completamente diferentes.!';
$txt['error_user_settings_no_password'] = 'Tu contraseña debe contener un mínimo de cuatro caracteres.';
$txt['error_user_settings_taken'] = 'Sorry, a member is already registered with that user name and/or email address.<br /><br />A new account has not been created.';
$txt['error_user_settings_query'] = 'Ha ocurrido un error en la base de datos cuando se trataba de crear un administrador.  El error ha sido:';
$txt['error_subs_missing'] = 'Unable to find the sources/Subs.php file.  Please make sure it was uploaded properly, and then try again.';
$txt['error_db_alter_priv'] = 'The database account you specified does not have permission to ALTER, CREATE, and/or DROP tables in the database; this is necessary for ElkArte to function properly.';
$txt['error_versions_do_not_match'] = 'The installer has detected another version of ElkArte already installed with the specified information.  If you are trying to upgrade, you should use the upgrader, not the installer.<br /><br />Otherwise, you may wish to use different information, or create a backup and then delete the data currently in the database.';
$txt['error_mod_security'] = 'The installer has detected the mod_security module is installed on your web server. Mod_security will block submitted forms even before ElkArte gets a say in anything. ElkArte has a built-in security scanner that will work more effectively than mod_security and that won\'t block submitted forms.<br /><br /><a href="https://www.elkarte.net/redirect/mod_security" target="_blank" class="new_win">More information about disabling mod_security</a>';
$txt['error_mod_security_no_write'] = 'The installer has detected the mod_security module is installed on your web server. Mod_security will block submitted forms even before ElkArte gets a say in anything. ElkArte has a built-in security scanner that will work more effectively than mod_security and that won\'t block submitted forms.<br /><br /><a href="https://www.elkarte.net/redirect/mod_security" target="_blank" class="new_win">More information about disabling mod_security</a><br /><br />Alternatively, you may wish to use your FTP client to chmod .htaccess in the forum directory to be writable (777), and then refresh this page.';
$txt['error_utf8_version'] = 'The current version of your database doesn\'t support the use of the UTF-8 character set. You can not install ElkArte';
$txt['error_valid_email_needed'] = 'No has introducido una dirección de email correcta.';
$txt['error_already_installed'] = 'The installer has detected that you already have ElkArte installed. It is strongly advised that you do <strong>not</strong> try to overwrite an existing installation - continuing with installation <strong>may result in the loss or corruption of existing data</strong>.<ul><li>If you have just finished installing your forum, please delete the install directory from your server. {try_delete}</li><li>If you wish to upgrade please use the <a href="./upgrade.php"><strong>upgrade script</strong></a>.</li><li>If you wish to overwrite your existing installation, including all data, it\'s recommended that you delete the existing database tables and replace Settings.php and try again.</li></ul>';
$txt['error_no_settings'] = 'It looks like Settings.php and/or Settings_bak.php are missing from the default directory of your forum, ElkArte will try to rename the sample files provided with the installation. If this operation fails, please rename Settings.sample.php and Settings_bak.sample.php respectively to Settings.php and Setting_bak.php before running this script.';
$txt['error_settings_do_not_exist'] = 'Elkarte is not able to find and create the file/s <strong>%1$s</strong>. Please use ftp to go to the directory of your forum and rename the sample files provided with the installation package as follows before running again this script: <ul>%2$s</ul> If any of the files do not exist, create an empty file with the same name.';
$txt['error_warning_notice'] = '¡Advertencia!';
$txt['error_script_outdated'] = 'This install script is out of date! The current version of ElkArte is %1$s but this install script is for %2$s.<br />
	It is recommended that you visit the <a href="https://www.elkarte.net/" target="_blank" class="new_win">ElkArte</a> website to ensure you are installing the latest version.';
$txt['error_db_filename'] = 'Debes introducir un nombre para el archivo de base de datos para SQLite.';
$txt['error_db_prefix_numeric'] = 'El tipo de base de datos seleccionado no soporta el uso de prefijos numéricos.';
$txt['error_invalid_characters_username'] = 'Invalid character used in user name.';
$txt['error_username_too_long'] = 'User name must be less than 25 characters long.';
$txt['error_username_left_empty'] = 'User name field was left empty.';
$txt['error_db_filename_exists'] = 'La base de datos que estás intentando crear existe. Por favor elimínala o introduce otro nombre.';
$txt['error_db_prefix_reserved'] = 'El prefijo que has introducido está reservado. Por favor introduce otro prefijo.';

$txt['upgrade_upgrade_utility'] = 'ElkArte Upgrade Utility';
$txt['upgrade_warning'] = '¡Advertencia!';
$txt['upgrade_critical_error'] = '¡Error crítico!';
$txt['upgrade_continue'] = 'Continuar';
$txt['upgrade_retry'] = 'Retry';
$txt['upgrade_skip'] = 'Saltar';
$txt['upgrade_note'] = '¡Nota!';
$txt['upgrade_step'] = 'Paso';
$txt['upgrade_steps'] = 'Pasos';
$txt['upgrade_progress'] = 'Progreso';
$txt['upgrade_overall_progress'] = 'Progreso General';
$txt['upgrade_step_progress'] = 'Progreso del paso';
$txt['upgrade_time_elapsed'] = 'Tiempo transcurrido';
$txt['upgrade_time_mins'] = 'minutos';
$txt['upgrade_time_secs'] = 'segundos';

$txt['upgrade_incomplete'] = 'Incompleto';
$txt['upgrade_not_quite_done'] = 'Aún no hemos acabado!';
$txt['upgrade_paused_overload'] = 'Esta actualización ha sido puesta en pausa para evitar sobrecargar su servidor.  No se preocupe, no hay ningún problema - simplemente haga clic en el <label for="contbutt">botón de continuar</label> a continuación para continuar.';

$txt['upgrade_ready_proceed'] = 'Thank you for choosing to upgrade to ElkArte %1$s. All files appear to be in place, and we\'re ready to proceed.';

$txt['upgrade_error_script_js'] = 'The upgrade script cannot find script.js or it is out of date. Make sure your theme paths are correct. You can download a settings check and repair script from <a href="https://github.com/elkarte/tools/downloads" target="_blank" class="new_win">ElkArte tools</a>.';

$txt['upgrade_warning_lots_data'] = 'Este script de actualización ha detectado que su foro contiene muchos datos que necesitan ser actualizados. Este proceso puede llevar algo de tiempo dependiendo de su servidor y del tamaño del foro, y para foros muy grandes (~300,000 mensajes) puede requerir varias horas para ser completado.';
$txt['upgrade_warning_out_of_date'] = 'This upgrade script is out of date! The current version of ElkArte is <em id="elkVersion">??</em> but this upgrade script is for <em id="installedVersion">%1$s</em>.<br /><br />It is recommended that you visit the <a href="https://www.elkarte.net/" target="_blank" class="new_win">ElkArte Community</a> website to ensure you are upgrading to the latest version.';
$txt['upgrade_warning_already_done'] = 'You are already running <em>ElkArte %1$s</em> no upgrade is available!  You must <strong>delete</strong> the install directory and then proceed to <a href="%2$s">your forum</a>';