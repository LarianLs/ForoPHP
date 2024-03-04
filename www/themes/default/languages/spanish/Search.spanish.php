<?php
// Version: 1.1; Search

$txt['set_parameters'] = 'Establezca los parámetros de la búsqueda. ';
$txt['choose_board'] = 'Escoge un foro en el que se buscará, o buscar en todos';
$txt['all_words'] = 'Coincidir todas las palabras';
$txt['any_words'] = 'Coincidir con cualquier palabra';
$txt['by_user'] = 'Por el usuario';

$txt['search_post_age'] = 'Antigüedad';
$txt['search_between'] = 'entre';
$txt['search_and'] = 'y';
$txt['search_options'] = 'Opciones';
$txt['search_show_complete_messages'] = 'Mostrar los resultados como mensajes';
$txt['search_subject_only'] = 'Asuntos de temas solamente';
$txt['search_relevance'] = 'Relevancia';
$txt['search_date_posted'] = 'Fecha en que se publicó';
$txt['search_order'] = 'Ordenar resultados por';
$txt['search_orderby_relevant_first'] = 'Resultados más importantes primero';
$txt['search_orderby_large_first'] = 'Temas más largos primero';
$txt['search_orderby_small_first'] = 'Temas más pequeños primero';
$txt['search_orderby_recent_first'] = 'Temas más recientes primero';
$txt['search_orderby_old_first'] = 'Temas más antiguos primero';
$txt['search_visual_verification_label'] = 'Verificación';
$txt['search_visual_verification_desc'] = 'Por favor, introduzca el código que aparece en la imagen de arriba para usar la búsqueda.';

$txt['search_specific_topic'] = 'Buscando solamente mensajes en el tema';

$txt['groups_search_posts'] = 'Grupos con acceso a las búsquedas';
$txt['search_dropdown'] = 'Enable the Quick Search dropdown';
$txt['search_results_per_page'] = 'Número de resultados de la búsqueda por página';
$txt['search_weight_frequency'] = 'Peso relativo de la búsqueda para el número de mensajes encontrados dentro de un tema';
$txt['search_weight_age'] = 'Peso relativo de la búsqueda para la edad del último mensaje encontrado';
$txt['search_weight_length'] = 'Peso relativo de la búsqueda para el tamaño del tema';
$txt['search_weight_subject'] = 'Peso relativo de la búsqueda para los resultados que se encuentren en el asunto';
$txt['search_weight_first_message'] = 'Peso relativo de la búsqueda para cuando el resultado se encuente en el primer mensaje';
$txt['search_weight_sticky'] = 'Relative search weight for a pinned topic';
$txt['search_weight_likes'] = 'Relative search weight for topic likes';

$txt['search_settings_desc'] = 'Here you can change the basic settings of the search function.';
$txt['search_settings_title'] = 'Search Settings';

$txt['search_weights_desc'] = 'Here you can change the individual components of the relevance rating.';
$txt['search_weights_sphinx'] = 'To update weight factors with Sphinx, you must generate and install a new sphinx.conf file.';
$txt['search_weights_title'] = 'Búsqueda - pesos';
$txt['search_weights_total'] = 'Total';
$txt['search_weights_save'] = 'Guardar';

$txt['search_method_desc'] = 'Aquí puedes establecer el método en que la búsqueda es realizada.';
$txt['search_method_title'] = 'Búsqueda - método';
$txt['search_method_save'] = 'Guardar';
$txt['search_method_messages_table_space'] = 'Espacio usado por los mensajes del foro en la base de datos';
$txt['search_method_messages_index_space'] = 'Espacio usado para indexar los mensajes en la base de datos';
$txt['search_method_kilobytes'] = 'KB';
$txt['search_method_fulltext_index'] = 'índice Fulltext';
$txt['search_method_no_index_exists'] = 'no existe actualmente';
$txt['search_method_fulltext_create'] = 'Create a fulltext index';
$txt['search_method_fulltext_cannot_create'] = 'no se puede crear porque el tamaño máximo del mensaje es 65.535';
$txt['search_method_index_already_exists'] = 'ya está creado';
$txt['search_method_fulltext_remove'] = 'eliminar índice fulltext';
$txt['search_method_index_partial'] = 'parcialmente creado';
$txt['search_index_custom_resume'] = 'reanudar';

// These strings are used in a javascript confirmation popup; don't use entities.
$txt['search_method_fulltext_warning'] = 'In order to be able to use fulltext search, you\\\'ll have to create a fulltext index first.';
$txt['search_index_custom_warning'] = 'Para que sea posible usar un índice de búsqueda personalizado, primero tendrás que crear un índice personalizado';

$txt['search_index'] = 'Índice de búsqueda';
$txt['search_index_none'] = 'No hay índice';
$txt['search_index_custom'] = 'Índice personalizado';
$txt['search_index_label'] = 'Índice';
$txt['search_index_size'] = 'Tamaño';
$txt['search_index_create_custom'] = 'Create custom index';
$txt['search_index_custom_remove'] = 'Remove custom index';

$txt['search_index_sphinx'] = 'Sphinx';
$txt['search_index_sphinx_desc'] = 'To adjust Sphinx settings, use <a class="linkbutton" href="{managesearch_url}">Configure Sphinx</a>';
$txt['search_index_sphinxql'] = 'SphinxQL';
$txt['search_index_sphinxql_desc'] = 'To adjust SphinxQL settings, use <a class="linkbutton" href="{managesearch_url}">Configure Sphinx</a>';

$txt['search_force_index'] = 'Forzar el uso de un índice de búsqueda';
$txt['search_match_words'] = 'Sólo coincidencia de palabras completas';
$txt['search_max_results'] = 'Número máximo de resultados a mostrar';
$txt['search_max_results_disable'] = '(0: ilimitados)';
$txt['search_floodcontrol_time'] = 'Tiempo requerido entre búsquedas del mismo usuario';
$txt['search_floodcontrol_time_desc'] = '(tiempo en segundos, y 0 para desactivar)';

$txt['additional_search_engines'] = 'Additional search engines';
$txt['setup_search_engine_add_more'] = 'Add another search engine';

$txt['search_create_index'] = 'Crear índice';
$txt['search_create_index_why'] = '¿Por qué crear un índice de búsqueda?';
$txt['search_create_index_start'] = 'Crear';
$txt['search_predefined'] = 'Perfil predefinido';
$txt['search_predefined_small'] = 'Índice pequeño';
$txt['search_predefined_moderate'] = 'Índice moderado';
$txt['search_predefined_large'] = 'Índice grande';
$txt['search_create_index_continue'] = 'Continuar';
$txt['search_create_index_not_ready'] = 'ElkArte is currently creating a search index of your messages. To avoid overloading your server, the process has been temporarily paused. It should automatically continue in a few seconds. If it doesn\'t, please click continue below.';
$txt['search_create_index_progress'] = 'Progreso';
$txt['search_create_index_done'] = 'Custom search index successfully created.';
$txt['search_create_index_done_link'] = 'Continuar';
$txt['search_double_index'] = 'Actualmente tienes creados dos índices en la tabla de mensajes. Para un mejor rendimiento es recomendable que elimines uno de ellos.';

$txt['search_error_indexed_chars'] = 'Número incorrecto de caracteres indexados. Son necesarios al menos 3 caracteres para un índice útil.';
$txt['search_error_max_percentage'] = 'Porcentaje incorrecto de palabras a ser saltadas. Usa un valor de al menor el 5%.';
$txt['error_string_too_long'] = 'La cadena de búsqueda debe tener menos de %1$d caracteres de longitud.';

$txt['search_warning_ignored_word'] = 'The following term has been ignored in your search';
$txt['search_warning_ignored_words'] = 'The following terms have been ignored in your search';

$txt['search_adjust_query'] = 'Ajustar parámetros de búsqueda';
$txt['search_adjust_submit'] = 'Por favor, revise la búsqueda';
$txt['search_did_you_mean'] = 'Puede que hayas intentado buscar por';

$txt['search_example'] = '<em>p.e.</em> "Rebelión en la Granja" de Orwell -película';

$txt['search_engines_description'] = 'Desde esta sección pudes decidir en qué detalle quieres seguir los motores de búsqueda a medida que indexan tu foro, así como revisar los registros del motor de búsqueda.';
$txt['spider_mode'] = 'Search Engine Tracking Level';
$txt['spider_mode_note'] = 'Note higher level tracking increases server resource requirement.';
$txt['spider_mode_off'] = 'Desactivado';
$txt['spider_mode_standard'] = 'Estándar';
$txt['spider_mode_high'] = 'Moderar';
$txt['spider_mode_vhigh'] = 'Aggressive';
$txt['spider_settings_desc'] = 'You can change settings for spider tracking from this page. Note, if you wish to <a href="%1$s">enable automatic pruning of the hit logs you can set this up here</a>';

$txt['spider_group'] = 'Apply restrictive permissions from group';
$txt['spider_group_note'] = 'To enable you to stop spiders indexing some pages.';
$txt['spider_group_none'] = 'Desactivado';

$txt['show_spider_online'] = 'Mostrar arañas en la lísta de gente en línea';
$txt['show_spider_online_no'] = 'No, en absoluto';
$txt['show_spider_online_summary'] = 'Mostrar la cantidad de arañas';
$txt['show_spider_online_detail'] = 'Mostrar detalles de las arañas';
$txt['show_spider_online_detail_admin'] = 'Mostrar detalles de las arañas - sólo a admins';

$txt['spider_name'] = 'Nombre de la araña';
$txt['spider_last_seen'] = 'Última vez vista';
$txt['spider_last_never'] = 'Nunca';
$txt['spider_agent'] = 'Agente de usuario';
$txt['spider_ip_info'] = 'Direcciones IP';
$txt['spiders_add'] = 'Añadir una nueva araña';
$txt['spiders_edit'] = 'Editar araña';
$txt['spiders_remove_selected'] = 'Borrar Seleccionados';
$txt['spider_remove_selected_confirm'] = 'Are you sure you want to remove these spiders?\\n\\nAll associated statistics will also be deleted!';
$txt['spiders_no_entries'] = 'No hay arañas configuradas actualmente.';

$txt['add_spider_desc'] = 'Desde esta página puedes editar los parámetros por los que una araña es categorizada. Si el agente de usuario de un invitado o su dirección IP coincide con las introducidas a continuación será detectado como una araña de motor de búsqueda y seguida de acuerdo a las preferencias del foro.';
$txt['spider_name_desc'] = 'Nombre por el que la araña será referenciada.';
$txt['spider_agent_desc'] = 'Agente de usuario asociado con esta araña.';
$txt['spider_ip_info_desc'] = 'Lista separada por comas de las direcciones IP asociadas con esta araña.';

$txt['spider_time'] = 'Hora';
$txt['spider_viewing'] = 'Viendo';
$txt['spider_logs_empty'] = 'No hay registros de arañas actualmente.';
$txt['spider_logs_info'] = 'Ten en cuenta que registrar cada acción de las arañas sólo ocurrirá si el seguimiento se establece como &quot;alto&quot; o &quot;muy alto&quot;. El detalle de todas las acciones de las arañas sólo es registrado si el seguimiento se establece como &quot;muy alto&quot;.';
$txt['spider_disabled'] = 'Desactivado';
$txt['spider_log_empty_log'] = 'Clear Log';
$txt['spider_log_empty_log_confirm'] = 'Are you sure you want to completely clear the log';

$txt['spider_logs_delete'] = 'Eliminar entradas';
$txt['spider_logs_delete_older'] = 'Delete all entries older than %1$s days.';
$txt['spider_logs_delete_submit'] = 'Borrar';

$txt['spider_stats_delete_older'] = 'Delete all spider statistics from spiders not seen in %1$s days.';

// Don't use entities in the below string.
$txt['spider_logs_delete_confirm'] = '¿Estás seguro de que quieres eliminar todas las entradas del registro?';

$txt['spider_stats_select_month'] = 'Saltar al mes';
$txt['spider_stats_page_hits'] = 'Hits de página';
$txt['spider_stats_no_entries'] = 'No hay estadísticas de arañas disponibles actualmente.';

// strings for setting up sphinx search
$txt['sphinx_test_not_selected'] = 'You have not yet selected to use Sphinx or SphinxQL as your Search Method';
$txt['sphinx_test_passed'] = 'All tests were successful, the system was able to connect to the sphinx search daemon using the Sphinx API.';
$txt['sphinxql_test_passed'] = 'All tests were successful, the system was able to connect to the sphinx search daemon using SphinxQL commands.';
$txt['sphinx_test_connect_failed'] = 'Unable to connect to the Sphinx daemon. Make sure it is running and configured properly. Sphinx search will not work until you fix the problem.';
$txt['sphinxql_test_connect_failed'] = 'Unable to access SphinxQL. Make sure your sphinx.conf has a separate listen directive for the SphinxQL port. SphinxQL search will not work until you fix the problem';
$txt['sphinx_test_api_missing'] = 'The sphinxapi.php file is missing in your &quot;sources&quot; directory. You need to copy this file from the Sphinx distribution. Sphinx search will not work until you fix the problem.';
$txt['sphinx_description'] = 'Use this interface to supply the access details to your Sphinx search daemon. <strong>These settings are only used to create</strong> an initial sphinx.conf configuration file which you will need to save in your Sphinx configuration directory (typically /usr/local/etc or /etc/sphinxsearch). Generally the options below can be left untouched, however they assume that the Sphinx software was installed in /usr/local and use /var/sphinx for the search index data storage. In order to keep Sphinx up to date, you must use a cron job to update the indexes, otherwise new or deleted content will not be reflected in  the search results. The configuration file defines two indexes:<br /><br/><strong>elkarte_delta_index</strong>, an index that only stores recent changes and can be called frequently. <strong>elkarte_base_index</strong>, an index that stores the full database and should be called less frequently. Example:<br /><span class="tt">10 3 * * * /usr/local/bin/indexer --config /usr/local/etc/sphinx.conf --rotate elkarte_base_index<br />0 * * * * /usr/local/bin/indexer --config /usr/local/etc/sphinx.conf --rotate elkarte_delta_index</span>';
$txt['sphinx_index_prefix'] = 'Index prefix:';
$txt['sphinx_index_prefix_desc'] = 'This is the prefix for the base and delta indexes.<br />By default it uses elkarte and the two indexes will be elkarte_base_index and elkarte_delta_index. Sphinx will connect to elkarte_index (prefix_index).  If you change this be sure to use the correct prefix in your cron task.';
$txt['sphinx_index_data_path'] = 'Index data path:';
$txt['sphinx_index_data_path_desc'] = 'This is the path that contains the search index files used by Sphinx.<br />It <strong>must</strong> exist and be accessible for reading and writing by the Sphinx indexer and search daemon.';
$txt['sphinx_log_file_path'] = 'Log file path:';
$txt['sphinx_log_file_path_desc'] = 'Server path that will contain the log files created by Sphinx.<br />This directory must exist on your server and must be writable by the sphinx search daemon and indexer.';
$txt['sphinx_stop_word_path'] = 'Stopword path:';
$txt['sphinx_stop_word_path_desc'] = 'The server path to the stopword list (leave empty for no stopword list).';
$txt['sphinx_memory_limit'] = 'Sphinx indexer memory limit:';
$txt['sphinx_memory_limit_desc'] = 'The maximum amount of (RAM) memory the indexer is allowed to use.';
$txt['sphinx_searchd_server'] = 'Search daemon server:';
$txt['sphinx_searchd_server_desc'] = 'Address of the server running the search daemon. This must be a valid host name or IP address.<br />If not set, localhost will be used.';
$txt['sphinx_searchd_port'] = 'Search daemon port:';
$txt['sphinx_searchd_port_desc'] = 'Port on which the search daemon will listen.';
$txt['sphinx_searchd_qlport'] = 'Sphinx QL daemon port:';
$txt['sphinx_searchd_qlport_desc'] = 'Port on which the search daemon will listen for SphinxQL queries.';
$txt['sphinx_max_matches'] = 'Maximum # matches:';
$txt['sphinx_max_matches_desc'] = 'Maximum amount of matches the search daemon will return.';
$txt['sphinx_create_config'] = 'Create Sphinx config';
$txt['sphinx_test_connection'] = 'Test connection to Sphinx daemon';