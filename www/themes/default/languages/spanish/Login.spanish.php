<?php
// Version: 1.1; Login

// Registration agreement page.
$txt['registration_agreement'] = 'Carta de Aceptación';
$txt['registration_privacy_policy'] = 'Privacy Policy';
$txt['agreement_agree'] = 'Acepto los términos del acuerdo.';
$txt['agreement_no_agree'] = 'I do not accept the terms of the agreement.';
$txt['policy_agree'] = 'I accept the terms of the privacy policy.';
$txt['policy_no_agree'] = 'I do not accept the terms of the privacy policy.';
$txt['agreement_agree_coppa_above'] = 'Acepto los términos del acuerdo y soy mayor de %1$d años.';
$txt['agreement_agree_coppa_below'] = 'Acepto los términos del acuerdo y soy menor de %1$d años.';
$txt['agree_coppa_above'] = 'Tengo al menos %1$d años.';
$txt['agree_coppa_below'] = 'Soy menor de %1$d años.';

// Registration form.
$txt['registration_form'] = 'Formulario de Registro';
$txt['error_too_quickly'] = 'Has ido por el proceso de registro demasiado rápido, más rápido de lo que normalmente es posible. Por favor, espera un momento e inténtalo de nuevo.';
$txt['error_token_verification'] = 'Fallo en el tóken de verificación. Por favor, inténtalo de nuevo.';
$txt['need_username'] = 'Debes escribir un nombre de usuario';
$txt['no_password'] = 'No proporcionaste tu contraseña.';
$txt['improper_password'] = 'La contraseña suministrada es demasiado larga';
$txt['incorrect_password'] = 'Contraseña incorrecta';
$txt['openid_not_found'] = 'El identificador de OpenID suministrado no se encontró.';
$txt['maintain_mode'] = 'Modo de Mantenimiento';
$txt['registration_successful'] = 'Registro Exitoso';
$txt['valid_email_needed'] = 'Por favor introduce una dirección de email válida, %1$s.';
$txt['required_info'] = 'Información Requerida';
$txt['additional_information'] = 'Información Adicional';
$txt['warning'] = '¡Advertencia!';
$txt['only_members_can_access'] = 'Solamente usuarios registrados tienen acceso a esta sección.';
$txt['login_below'] = 'Por favor inicia sesión a continuación.';
$txt['login_below_or_register'] = 'Por favor inicia sesión a continuación o <a href="%1$s">registra una cuenta</a> con %2$s';
$txt['checkbox_agreement'] = 'Acepto el acuerdo de registro';
$txt['checkbox_privacypol'] = 'I accept the privacy policy';
$txt['confirm_request_accept_agreement'] = 'Are you sure you want to force all members to accept the agreement?';
$txt['confirm_request_accept_privacy_policy'] = 'Are you sure you want to force all members to accept the privacy policy?';

$txt['login_hash_error'] = 'La seguridad de la contraseña se ha mejorado.<br />Por favor, introduce tu contraseña de nuevo.';

$txt['ban_register_prohibited'] = 'Lo sentimos, no estás autorizado para registrarte en este foro.';
$txt['under_age_registration_prohibited'] = 'Lo sentimos, pero no se permite el registro en este foro de personas menores de %1$d años.';

$txt['activate_account'] = 'Activación de la cuenta';
$txt['activate_success'] = 'Tu cuenta ha sido activada satisfactoriamente. Ahora puedes proceder a ingresar al foro.';
$txt['activate_not_completed1'] = 'Tu cuenta de email necesita ser validada antes de que puedas ingresar.';
$txt['activate_not_completed2'] = '¿Necesitas otro email de activación?';
$txt['activate_after_registration'] = 'Gracias por registrarte. Recibirás en breve un email con un enlace para activar tu cuenta.  Si no recibes un email en unos 30 minutos, comprueba tu carpeta de correo no deseado en tu gestor de correo.';
$txt['invalid_userid'] = 'El usuario no existe';
$txt['invalid_activation_code'] = 'Código de activación inválido';
$txt['invalid_activation_username'] = 'Nombre de usuario o email';
$txt['invalid_activation_new'] = 'Si te registraste con una dirección de email incorrecta, escribe aquí una nueva junto con tu contraseña.';
$txt['invalid_activation_new_email'] = 'Nueva dirección de email';
$txt['invalid_activation_password'] = 'Contraseña anterior';
$txt['invalid_activation_resend'] = 'Reenviar código de activación';
$txt['invalid_activation_known'] = 'Si ya conoces tu código de activación, escríbelo aquí.';
$txt['invalid_activation_retry'] = 'Código de activación';
$txt['invalid_activation_submit'] = 'Activar';

$txt['coppa_no_concent'] = 'El administrador no ha recibido aún el consentimiento de tus padres/tutor para tu cuenta.';
$txt['coppa_need_more_details'] = '¿Necesitas más detalles?';

$txt['awaiting_delete_account'] = '¡Tu cuenta ha sido marcada para borrarse!<br />Si deseas restaurar tu cuenta, por favor selecciona la casilla &quot;Reactivar mi cuenta&quot;, e ingresa nuevamente.';
$txt['undelete_account'] = 'Reactivar mi cuenta';

$txt['in_maintain_mode'] = 'Este foro está en modo de mantenimiento.';

// These two are used as a javascript alert; please use international characters directly, not as entities.
$txt['register_agree'] = 'Por favor, lee/acepta los términos para poder enviar el formulario.';
$txt['register_passwords_differ_js'] = '¡No coinciden las contraseñas!';
$txt['register_did_you'] = 'Did you mean';

$txt['approval_after_registration'] = 'Gracias por registrarte. El administrador debe aprobar tu registro antes de que puedas empezar a usar tu cuenta, recibirás un email a la brevedad posible notificándote de la decisión del administrador.';

$txt['admin_settings_desc'] = 'Aquí puedes cambiar varios parámetros relacionados con el registro de nuevos usuarios.';

$txt['setting_enableOpenID'] = 'Permitir a los usuarios registrarse usando OpenID';

$txt['setting_registration_method'] = 'Método de registro empleado para nuevos miembros';
$txt['setting_registration_disabled'] = 'Registro Deshabilitado';
$txt['setting_registration_standard'] = 'Registro Inmediato';
$txt['setting_registration_activate'] = 'Activación por Email';
$txt['setting_registration_approval'] = 'Aprobación del Administrador';
$txt['setting_notify_new_registration'] = 'Notificar a los administradores cuando se une un nuevo miembro';
$txt['setting_force_accept_agreement'] = 'Force members to accept the registration agreement when changed';
$txt['force_accept_privacy_policy'] = 'Force members to accept the privacy policy when changed';
$txt['setting_send_welcomeEmail'] = 'Enviar mensaje de bienvenida a los nuevos miembros';
$txt['setting_show_DisplayNameOnRegistration'] = 'Allow users to enter their screen name';

$txt['setting_coppaAge'] = 'Edad por debajo de la cual aplicar restricciones de registro';
$txt['setting_coppaAge_desc'] = '(Escribe 0 para deshabilitar)';
$txt['setting_coppaType'] = 'Acción a realizar cuando un usuario por debajo de la edad mínima se registra';
$txt['setting_coppaType_reject'] = 'Rechazar su registro';
$txt['setting_coppaType_approval'] = 'Requerir aprobación del padre/tutor';
$txt['setting_coppaPost'] = 'Dirección postal a la que deben ser enviados los formularios de aprobación';
$txt['setting_coppaPost_desc'] = 'Sólo se aplica si se lleva a cabo la restricción de edad';
$txt['setting_coppaFax'] = 'Número de fax al que enviar los formularios de aprobación';
$txt['setting_coppaPhone'] = 'Número de contacto en el que los padres podrán realizar consultas de restricción de edad';

$txt['admin_register'] = 'Registro de un nuevo usuario';
$txt['admin_register_desc'] = 'Desde aquí puedes registrar en el foro nuevos usuarios y, de así desearlo, enviarles sus detalles por email.';
$txt['admin_register_username'] = 'Nuevo Nombre de usuario';
$txt['admin_register_email'] = 'Dirección Email';
$txt['admin_register_password'] = 'Contraseña';
$txt['admin_register_username_desc'] = 'Nombre de usuario para el nuevo usuario';
$txt['admin_register_email_desc'] = 'Dirección de email del usuario';
$txt['admin_register_password_desc'] = 'Nueva contraseña para el usuario';
$txt['admin_register_email_detail'] = 'Enviar por email la nueva contraseña al usuario';
$txt['admin_register_email_detail_desc'] = 'Es necesaria la dirección email, aún si no está seleccionado';
$txt['admin_register_email_activate'] = 'Pedirle al usuario que active la cuenta';
$txt['admin_register_group'] = 'Grupo primario';
$txt['admin_register_group_desc'] = 'Grupo de usuario primario al que el nuevo usuario pertenecerá';
$txt['admin_register_group_none'] = '(sin grupo primario)';
$txt['admin_register_done'] = '¡El usuario %1$s se ha registrado correctamente!';

$txt['coppa_title'] = 'Foro con restricción de edad';
$txt['coppa_after_registration'] = 'Gracias por registrarte en {forum_name_html_safe}.<br /><br />Ya que eres menor de {MINIMUM_AGE} años de edad, es un requisito legal obtener un permiso de tus padres o tutor legal antes de que puedas usar tu cuenta. Para obtener la activación de tu cuenta, por favor imprime el siguiente formulario:';
$txt['coppa_form_link_popup'] = 'Cargar la forma en una ventana nueva';
$txt['coppa_form_link_download'] = 'Descargar forma';
$txt['coppa_send_to_one_option'] = 'Entonces solicítale a tus padres/tutor que envien la forma propiamente llenada por:';
$txt['coppa_send_to_two_options'] = 'Entonces solicítale a tus padres/tutor que envien la forma propiamente llenada por cualquiera de estas dos opciones:';
$txt['coppa_send_by_post'] = 'Correo, a la siguiente dirección:';
$txt['coppa_send_by_fax'] = 'Fax, al siguiente número:';
$txt['coppa_send_by_phone'] = 'Alternativamente, haz que le hablen al administrador al número {PHONE_NUMBER}.';

$txt['coppa_form_title'] = 'Formulario de permisos para el registro en {forum_name_html_safe}';
$txt['coppa_form_address'] = 'Dirección';
$txt['coppa_form_date'] = 'Fecha';
$txt['coppa_form_body'] = 'Yo {PARENT_NAME},<br /><br />doy permiso a {CHILD_NAME} (child name) para convertirse en un miembro registrado del foro: {forum_name_html_safe}, con el nombre de usuario: {USER_NAME}.<br /><br />Comprendo que cierta información personal introducida por {USER_NAME} pueda ser mostrada a otros usuarios del foro.<br /><br />Firmado:<br />{PARENT_NAME} (Padre/Madre/Tutor). ';

$txt['visual_verification_sound_again'] = 'Volver a escuchar';
$txt['visual_verification_sound_close'] = 'Cerrar ventana';
$txt['visual_verification_sound_direct'] = '¿Tiene problemas para oírlo?  Pruebe un enlace directo al mismo.';

// Use numeric entities in the below.
$txt['registration_username_available'] = 'El usuario está disponible';
$txt['registration_username_unavailable'] = 'El usuario no está disponible';
$txt['registration_username_check'] = 'Comprobar disponibilidad del usuario';
$txt['registration_password_short'] = 'Contraseña demasiado corta';
$txt['registration_password_reserved'] = 'La contraseña contiene tu usuario/email';
$txt['registration_password_numbercase'] = 'La contraseña debe contener mayúsculas, minúsculas y números';
$txt['registration_password_no_match'] = 'Las contraseñas no coinciden';
$txt['registration_password_valid'] = 'Contraseña válida';

$txt['registration_errors_occurred'] = 'Se detectaron los siguientes errores en tu registro. Por favor corrígelos para continuar:';

$txt['authenticate_label'] = 'Método de Autenticación';
$txt['authenticate_password'] = 'Contraseña';
$txt['authenticate_openid'] = 'OpenID';
$txt['authenticate_openid_url'] = 'URL de Autenticación OpenID';
$txt['otp_required'] = 'A Time-based One-time Password is required in order to log in!';
$txt['disable_otp'] = 'Disable two factor authentication.';

// Contact form
$txt['admin_contact_form'] = 'Contacta los Administradores';
$txt['contact_your_message'] = 'Tu mensaje';
$txt['errors_contact_form'] = 'Ocurrieron los siguientes errores mientras se procesaba tu solicitud de contacto';
$txt['contact_subject'] = 'Un invitado te ha enviado un mensaje';
$txt['contact_thankyou'] = 'Thank you for your message. Someone will contact you as soon as possible.';
