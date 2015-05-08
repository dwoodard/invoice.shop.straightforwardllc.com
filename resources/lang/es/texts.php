<?php

return array(

   // client
      'organization' => 'Empresa',
   'name' => 'Nombre', //Razon social-Colombia,
   'website' => 'Sitio Web',
   'work_phone' => 'Teléfono',
   'address' => 'Dirección',
   'address1' => 'Calle',
   'address2' => 'Bloq/Pta',
   'city' => 'Ciudad',
   'state' => 'Región/Provincia', //Departamento-Colombia, Comarca-Panama
   'postal_code' => 'Código Postal',
   'country_id' => 'País',
   'contacts' => 'Contactos',
   'first_name' => 'Nombres',
   'last_name' => 'Apellidos',
   'phone' => 'Teléfono',
   'email' => 'Email',
   'additional_info' => 'Información adicional',
   'payment_terms' => 'Plazos de pago', //
   'currency_id' => 'Divisa',
   'size_id' => 'Tamaño',
   'industry_id' => 'Industria',
   'private_notes' => 'Notas Privadas',

   // invoice
   'invoice' => 'Factura de venta', //Factura de Venta-Colombia
   'client' => 'Cliente',
   'invoice_date' => 'Fecha de factura',
   'due_date' => 'Fecha de pago',
   'invoice_number' => 'Número de Factura',
   'invoice_number_short' => 'Factura #',
   'po_number' => 'Apartado de correo',
   'po_number_short' => 'Apdo.',
   'frequency_id' => 'Frecuencia',
   'discount' => 'Descuento',
   'taxes' => 'Impuestos',
   'tax' => 'Impuesto', //IVA for almost all latinamerica, ISV-Honduras, ITBMS-Panama, IV-Costa Rica, ITBIS- Republica Dominicana, IVU-Puerto Rico
   'item' => 'Concepto',
   'description' => 'Descripción',
   'unit_cost' => 'Coste unitario',
   'quantity' => 'Cantidad',
   'line_total' => 'Total',
   'subtotal' => 'Subtotal',
   'paid_to_date' => 'Pagado',
   'balance_due' => 'Pendiente',
   'invoice_design_id' => 'Diseño',
   'terms' => 'Términos',
   'your_invoice' => 'Tu factura',
   'remove_contact' => 'Eliminar contacto',
   'add_contact' => 'Añadir contacto',
   'create_new_client' => 'Crear nuevo cliente',
   'edit_client_details' => 'Editar detalles del cliente',
   'enable' => 'Activar',
   'learn_more' => 'Aprender más',
   'manage_rates' => 'Gestionar tarifas',
   'note_to_client' => 'Nota para el cliente',
   'invoice_terms' => 'Términos de facturación',
   'save_as_default_terms' => 'Guardar como términos por defecto',
   'download_pdf' => 'Descargar PDF',
   'pay_now' => 'Pagar ahora',
   'save_invoice' => 'Guardar factura',
   'clone_invoice' => 'Clonar factura',
   'archive_invoice' => 'Archivar factura',
   'delete_invoice' => 'Eliminar factura',
   'email_invoice' => 'Enviar factura por correo',
   'enter_payment' => 'Agregar pago',
   'tax_rates' => 'Tasas de impuesto',
   'rate' => 'Tasas',
   'settings' => 'Configuración',
   'enable_invoice_tax' => 'Activar impuesto <b>para la factura</b>',
   'enable_line_item_tax' => 'Activar impuesto <b>por concepto</b>',

   // navigation
   'dashboard' => 'Inicio',
   'clients' => 'Clientes',
   'invoices' => 'Facturas',
   'payments' => 'Pagos',
   'credits' => 'Créditos',
   'history' => 'Historial',
   'search' => 'Búsqueda',
   'sign_up' => 'registrate',
   'guest' => 'invitado',
   'company_details' => 'Detalles de la empresa',
   'online_payments' => 'Pagos en linea',
   'notifications' => 'Notificaciones',
   'import_export' => 'Importar/Exportar',
   'done' => 'Hecho',
   'save' => 'Guardar',
   'create' => 'Crear',
   'upload' => 'Subir',
   'import' => 'Importar',
   'download' => 'Descargar',
   'cancel' => 'Cancelar',
   'close' => 'Cerrar',
   'provide_email' => 'Por favor facilita una dirección de correo válida.',
   'powered_by' => 'Plataforma por ',
   'no_items' => 'No hay data',

   // recurring invoices
   'recurring_invoices' => 'Facturas recurrentes',
   'recurring_help' => '<p>Enviar facturas automáticamente a clientes semanalmente, bi-mensualmente, mensualmente, trimestral o anualmente. </p>
   <p>Uso :MONTH, :QUARTER or :YEAR para fechas dinámicas. Matemáticas básicas también funcionan bien. Por ejemplo: :MONTH-1.</p>
   <p>Ejemplos de variables dinámicas de factura:</p>
   <ul>
      <li>"Afiliación de gimnasio para el mes de:MONTH" => Afiliación de gimnasio para el mes de julio"</li>
      <li>":YEAR+1 suscripción anual" => "2015 suscripción anual"</li>
      <li>"Retainer payment for :QUARTER+1" => "Pago anticipo de pagos para T2"</li>
   </ul>',

   // dashboard
   'in_total_revenue' => 'ingreso total',
   'billed_client' => 'cliente facturado',
   'billed_clients' => 'clientes facturados',
   'active_client' => 'cliente activo',
   'active_clients' => 'clientes activos', 
   'invoices_past_due' => 'Facturas vencidas',
   'upcoming_invoices' => 'Próximas facturas',
   'average_invoice' => 'Promedio de facturación',

   // list pages
   'archive' => 'Archivar',
   'delete' => 'Eliminar',
   'archive_client' => 'Archivar cliente',
   'delete_client' => 'Eliminar cliente',
   'archive_payment' => 'Archivar pago',
   'delete_payment' => 'Eliminar pago',
   'archive_credit' => 'Archivar crédito',
   'delete_credit' => 'Eliminar crédito',
   'show_archived_deleted' => 'Mostrar archivados/eliminados',
   'filter' => 'Filtrar',
   'new_client' => 'Nuevo cliente',
   'new_invoice' => 'Nueva factura',
   'new_payment' => 'Nuevo pago',
   'new_credit' => 'Nuevo crédito',
   'contact' => 'Contacto',
   'date_created' => 'Fecha de creación',
   'last_login' => 'Último acceso',
   'balance' => 'Balance',
   'action' => 'Acción',
   'status' => 'Estado',
   'invoice_total' => 'Total facturado',
   'frequency' => 'Frequencia',
   'start_date' => 'Fecha de inicio',
   'end_date' => 'Fecha de finalización',
   'transaction_reference' => 'Referencia de transacción',
   'method' => 'Método',
   'payment_amount' => 'Valor del pago',
   'payment_date' => 'Fecha de Pago',
   'credit_amount' => 'Cantidad de Crédito',
   'credit_balance' => 'Balance de Crédito',
   'credit_date' => 'Fecha de Crédito',
   'empty_table' => 'Tabla vacía',
   'select' => 'Seleccionar',
   'edit_client' => 'Editar Cliente',
   'edit_invoice' => 'Editar Factura',

   // client view page
   'create_invoice' => 'Crear Factura',
   'enter_credit' => 'Agregar Crédito',
   'last_logged_in' => 'Último inicio de sesión',
   'details' => 'Detalles',
   'standing' => 'Standing', //What is this for, context of it's use
   'credit' => 'Crédito',
   'activity' => 'Actividad',
   'date' => 'Fecha',
   'message' => 'Mensaje',
   'adjustment' => 'Ajustes',
   'are_you_sure' => '¿Estás seguro?',

   // payment pages
   'payment_type_id' => 'Tipo de pago',
   'amount' => 'Cantidad',

   // account/company pages
   'work_email' => 'Correo electrónico de la empresa',
   'language_id' => 'Idioma',
   'timezone_id' => 'Zona horaria',
   'date_format_id' => 'Formato de fecha',
   'datetime_format_id' => 'Format de fecha/hora',
   'users' => 'Usuarios',
   'localization' => 'Localización',
   'remove_logo' => 'Eliminar logo',
   'logo_help' => 'Formatos aceptados: JPEG, GIF y PNG. Altura recomendada: 120px',
   'payment_gateway' => 'Pasarela de pago',
   'gateway_id' => 'Proveedor',
   'email_notifications' => 'Notificaciones de email',
   'email_sent' => 'Avísame por email cuando una factura <b>se envía</b>',
   'email_viewed' => 'Avísame por email cuando una factura <b>se visualiza</b>',
   'email_paid' => 'Avísame por email cuando una factura <b>se paga</b>',
   'site_updates' => 'Actualizaciones del sitio',
   'custom_messages' => 'Mensajes a medida',
   'default_invoice_terms' => 'Configurar términos de factura por defecto',
   'default_email_footer' => 'Configurar firma de email por defecto',
   'import_clients' => 'Importar datos del cliente',
   'csv_file' => 'Seleccionar archivo CSV',
   'export_clients' => 'Exportar datos del cliente',
   'select_file' => 'Seleccionar archivo',
   'first_row_headers' => 'Usar la primera fila como encabezados',
   'column' => 'Columna',
   'sample' => 'Ejemplo',
   'import_to' => 'Importar a',
   'client_will_create' => 'cliente se creará', //What is this for, context of it's use
   'clients_will_create' => 'clientes se crearan', //What is this for, context of it's use
   'email_settings' => 'Email Settings',
   'pdf_email_attachment' => 'Attach PDF to Emails',

   // application messages
   'created_client' => 'cliente creado con éxito',
   'created_clients' => ':count clientes creados con éxito',
   'updated_settings' => 'Configuración actualizada con éxito',
   'removed_logo' => 'Logo eliminado con éxito',
   'sent_message' => 'Mensaje enviado con éxito',
   'invoice_error' => 'Seleccionar cliente y corregir errores.',
   'limit_clients' => 'Lo sentimos, se ha pasado del límite de :count clientes',
   'payment_error' => 'Ha habido un error en el proceso de tu pago. Inténtalo de nuevo más tarde.',
   'registration_required' => 'Inscríbete para enviar una factura',
   'confirmation_required' => 'Por favor confirma tu dirección de correo electrónico',
   'updated_client' => 'Cliente actualizado con éxito',
   'created_client' => 'Cliente creado con éxito',
   'archived_client' => 'Cliente archivado con éxito',
   'archived_clients' => ':count clientes archivados con éxito',
   'deleted_client' => 'Cliente eliminado con éxito',
   'deleted_clients' => ':count clientes eliminados con éxito',
   'updated_invoice' => 'Factura actualizada con éxito',
   'created_invoice' => 'Factura creada con éxito',
   'cloned_invoice' => 'Factura clonada con éxito',
   'emailed_invoice' => 'Factura enviada con éxito',
   'and_created_client' => 'y cliente creado ',
   'archived_invoice' => 'Factura archivada con éxito',
   'archived_invoices' => ':count facturas archivados con éxito',
   'deleted_invoice' => 'Factura eliminada con éxito',
   'deleted_invoices' => ':count facturas eliminadas con éxito',
   'created_payment' => 'Pago creado con éxito',
   'archived_payment' => 'Pago archivado con éxito',
   'archived_payments' => ':count pagos archivados con éxito',
   'deleted_payment' => 'Pago eliminado con éxito',
   'deleted_payments' => ':count pagos eliminados con éxito',
   'applied_payment' => 'Pago aplicado con éxito',
   'created_credit' => 'Crédito creado con éxito',
   'archived_credit' => 'Crédito archivado con éxito',
   'archived_credits' => ':count creditos archivados con éxito',
   'deleted_credit' => 'Créditos eliminados con éxito',
   'deleted_credits' => ':count creditos eliminados con éxito',
   // Emails
   'confirmation_subject' => 'Corfimación de tu cuenta en Invoice Ninja',
   'confirmation_header' => 'Confirmación de Cuenta',
   'confirmation_message' => 'Por favor, haz clic en el enlace abajo para confirmar tu cuenta.',
   'invoice_subject' => 'Nueva factura :invoice de :account',
   'invoice_message' => 'Para visualizar tu factura por el valor de :amount, haz click en el enlace abajo.',
   'payment_subject' => 'Pago recibido',
   'payment_message' => 'Gracias por tu pago por valor de :amount.',
   'email_salutation' => 'Estimado :name,',
   'email_signature' => 'Un saludo cordial,',
   'email_from' => 'El equipo de Invoice Ninja ',
   'user_email_footer' => 'Para ajustar la configuración de las notificaciones de tu email, visita '.SITE_URL.'/company/notifications',
   'invoice_link_message' => 'Para visualizar la factura de cliente, haz clic en el enlace abajo:',
   'notification_invoice_paid_subject' => 'La factura :invoice ha sido pagada por el cliente :client',
   'notification_invoice_sent_subject' => 'La factura :invoice ha sido enviada a el cliente :client',
   'notification_invoice_viewed_subject' => 'La factura :invoice ha sido visualizado por el cliente:client',
   'notification_invoice_paid' => 'Un pago por valor de :amount se ha realizado por el cliente :client a la factura :invoice.',
   'notification_invoice_sent' => 'La factura :invoice por valor de :amount fue enviada al cliente :cliente.',
   'notification_invoice_viewed' => 'La factura :invoice por valor de :amount fue visualizada por el cliente :client.',
   'reset_password' => 'Puedes reconfigurar la contraseña de tu cuenta haciendo clic en el siguiente enlace:',
   'reset_password_footer' => 'Si no has solicitado un cambio de contraseña, por favor contactate con nosostros: ' . CONTACT_EMAIL,

   // Payment page
   'secure_payment' => 'Pago seguro',
   'card_number' => 'Número de tarjeta',
   'expiration_month' => 'Mes de caducidad', 
   'expiration_year' => 'Año de caducidad',
   'cvv' => 'CVV',

   // Security alerts
   'security' => array(
      'too_many_attempts' => 'Demasiados intentos fallidos. Inténtalo de nuevo en un par de minutos.',
      'wrong_credentials' => 'Contraseña o email incorrecto.',
      'confirmation' => '¡Tu cuenta se ha confirmado!',
      'wrong_confirmation' => 'Código de confirmación incorrecto.',
      'password_forgot' => 'La información sobre el cambio de tu contraseña se ha enviado a tu dirección de correo electrónico.',
      'password_reset' => 'Tu contraseña se ha cambiado con éxito.',
      'wrong_password_reset' => 'Contraseña no válida. Inténtalo de nuevo',
      ),

   // Pro Plan
   'pro_plan' => [
   'remove_logo' => ':link haz click para eliminar el logo de Invoice Ninja', //Maybe incorrect for the context
   'remove_logo_link' => 'Haz clic aquí',
   ],
   'logout' => 'Cerrar sesión',   
   'sign_up_to_save' => 'Registrate para guardar tu trabajo', 
   'agree_to_terms' =>'Estoy de acuerdo con los términos de Invoice Ninja :terms',
   'terms_of_service' => 'Términos de servicio',
   'email_taken' => 'Esta dirección de correo electrónico ya se ha registrado',
   'working' => 'Procesando',
   'success' => 'Éxito',
   'success_message' => 'Te has registrado con éxito. Por favor, haz clic en el enlace de el correo de confirmación para verificar tu dirección de correo electrónico.',
   'erase_data' => 'Esta acción eliminará todos tus datos de forma permanente.',
   'password' => 'Contraseña',

   'pro_plan_product' => 'Plan Pro',
   'pro_plan_description' => 'Un año de inscripción en el Plan Pro de Invoice Ninja.',
   'pro_plan_success' => '¡Gracias por unirte a Invoice Ninja! Al realizar el pago de tu factura, se iniciara tu PLAN PRO.',
   'unsaved_changes' => 'Tienes cambios no guardados',
   'custom_fields' => 'Campos a medida',
   'company_fields' => 'Campos de la empresa',
   'client_fields' => 'Campos del cliente',
   'field_label' => 'Etiqueta del campo',
   'field_value' => 'Valor del campo',
   'edit' => 'Editar',
   'view_as_recipient' => 'Ver como destinitario',   

   // product management
   'product_library' => 'Inventario de productos',
   'product' => 'Producto',
   'products' => 'Productos',
   'fill_products' => 'Auto-rellenar productos',
   'fill_products_help' => 'Seleccionar un producto automáticamente <b>configurará la descripción y coste</b>',
   'update_products' => 'Auto-actualizar productos',
   'update_products_help' => 'Actualizar una factura automáticamente <b>actualizará los productos</b>',
   'create_product' => 'Crear Producto',
   'edit_product' => 'Editar Producto',
   'archive_product' => 'Archivar Producto',
   'updated_product' => 'Producto actualizado con éxito',
   'created_product' => 'Producto creado con éxito',
   'archived_product' => 'Producto archivado con éxito',
   'pro_plan_custom_fields' => ':link haz click para para activar campos a medida',
   'advanced_settings' => 'Configuración Avanzada',
   'pro_plan_advanced_settings' => ':link haz click para para activar la configuración avanzada',
   'invoice_design' => 'Diseño de factura',
   'specify_colors' => 'Especificar colores',
   'specify_colors_label' => 'Seleccionar los colores para usar en las facturas',
   'chart_builder' => 'Constructor de graficos',
   'ninja_email_footer' => 'Usa :site para facturar a tus clientes y recibir pagos de forma gratuita!',
   'go_pro' => 'Hazte Pro',

   // Quotes
   'quote' => 'Cotización',
   'quotes' => 'Cotizaciones',
   'quote_number' => 'Numero de cotización',
   'quote_number_short' => 'Cotización #',
   'quote_date' => 'Fecha cotización',
   'quote_total' => 'Total cotizado',
   'your_quote' => 'Tu cotización',
   'total' => 'Total',
   'clone' => 'Clon', //Whats the context for this one
   'new_quote' => 'Nueva cotización',
   'create_quote' => 'Crear Cotización',
   'edit_quote' => 'Editar Cotización',
   'archive_quote' => 'Archivar Cotización',
   'delete_quote' => 'Eliminar Cotización',
   'save_quote' => 'Guardar Cotización',
   'email_quote' => 'Enviar Cotización',
   'clone_quote' => 'Clonar Cotización',
   'convert_to_invoice' => 'Convertir a Factura',
   'view_invoice' => 'Ver Factura',
   'view_quote' => 'Ver Cotización',
   'view_client' => 'Ver Cliente',
   'updated_quote' => 'Cotización actualizada con éxito',
   'created_quote' => 'Cotización creada con éxito',
   'cloned_quote' => 'Cotización clonada con éxito',
   'emailed_quote' => 'Cotización enviada con éxito',
   'archived_quote' => 'Cotización archivada con éxito',
   'archived_quotes' => ':count cotizaciones archivadas con exito',
   'deleted_quote' => 'Cotizaciónes eliminadas con éxito',
   'deleted_quotes' => ':count cotizaciones eliminadas con exito',
   'converted_to_invoice' => 'Cotización convertida a factura con éxito',
   'quote_subject' => 'Nueva cotización de :account',
   'quote_message' => 'Para visualizar la cotización por valor de :amount, haz click en el enlace abajo.',
   'quote_link_message' => 'Para visualizar tu cotización haz click en el enlace abajo:',
   'notification_quote_sent_subject' => 'Cotización :invoice enviada a el cliente :client',
   'notification_quote_viewed_subject' => 'Cotización :invoice visualizada por el cliente :client',
   'notification_quote_sent' => 'La cotización :invoice por un valor de :amount, ha sido enviada al cliente :client.',
   'notification_quote_viewed' => 'La cotizacion :invoice por un valor de :amount ha sido visualizada por el cliente :client.', 
   'session_expired' => 'Tu sesión ha caducado.',
   'invoice_fields' => 'Campos de factura',
   'invoice_options' => 'Opciones de factura',
   'hide_quantity' => 'Ocultar cantidad',
   'hide_quantity_help' => 'Si las cantidades de tus partidas siempre son 1, entonces puedes organizar tus facturas mejor al no mostrar este campo.',
   'hide_paid_to_date' => 'Ocultar valor pagado a la fecha',
   'hide_paid_to_date_help' => 'Solo mostrar la opción “Pagado a la fecha” en tus facturas en cuanto se ha recibido un pago.',
   'charge_taxes' => 'Cargar impuestos',
   'user_management' => 'Gestión de usario',
   'add_user' => 'Añadir usario',
   'send_invite' => 'Enviar invitación', //Context for its use
   'sent_invite' => 'Invitación enviada con éxito',
   'updated_user' => 'Usario actualizado con éxito',
   'invitation_message' => ':invitor te ha invitado a unirte a su cuenta en Invoice Ninja.',
   'register_to_add_user' => 'Regístrate para añadir usarios',
   'user_state' => 'Estado',
   'edit_user' => 'Editar Usario',
   'delete_user' => 'Eliminar Usario',
   'active' => 'Activar',
   'pending' => 'Pendiente',
   'deleted_user' => 'Usario eliminado con éxito',
   'limit_users' => 'Lo sentimos, esta acción excederá el límite de ' . MAX_NUM_USERS . ' usarios',
   'confirm_email_invoice' => '¿Estás seguro que quieres enviar esta factura?',
   'confirm_email_quote' => '¿Estás seguro que quieres enviar esta cotización?',
   'confirm_recurring_email_invoice' => 'Se ha marcado esta factura como recurrente, estás seguro que quieres enviar esta factura?',
   'cancel_account' => 'Cancelar Cuenta',
   'cancel_account_message' => 'AVISO: Esta acción eliminará todos tus datos de forma permanente.',
   'go_back' => 'Atrás',
   'data_visualizations' => 'Visualización de datos',
   'sample_data' => 'Datos de ejemplo',
   'hide' => 'Ocultar',
   'new_version_available' => 'Una nueva versión de :releases_link disponible. Estás utilizando versión :user_version, la última versión es :latest_version',
   'invoice_settings' => 'Configuración de facturas',
   'invoice_number_prefix' => 'Prefijo de facturación',
   'invoice_number_counter' => 'Numeración de facturación',
   'quote_number_prefix' => 'Prejijo de cotizaciones',
   'quote_number_counter' => 'Numeración de cotizaciones',
   'share_invoice_counter' => 'Compartir la numeración para cotización y facturación',
   'invoice_issued_to' => 'Factura emitida a',
   'invalid_counter' => 'Para evitar posibles conflictos, por favor crea un prefijo de facturación y de cotización.',
   'mark_sent' => 'Marcar como enviado',

   'gateway_help_1' => ':link to sign up for Authorize.net.',
   'gateway_help_2' => ':link to sign up for Authorize.net.',
   'gateway_help_17' => ':link to get your PayPal API signature.',
   'gateway_help_23' => 'Note: use your secret API key, not your publishable API key.',
   'gateway_help_27' => ':link to sign up for TwoCheckout.',

   'more_designs' => 'More designs',
   'more_designs_title' => 'Additional Invoice Designs',
   'more_designs_cloud_header' => 'Go Pro for more invoice designs',
   'more_designs_cloud_text' => '',
   'more_designs_self_host_header' => 'Get 6 more invoice designs for just $'.INVOICE_DESIGNS_PRICE,
   'more_designs_self_host_text' => '',
   'buy' => 'Buy',
   'bought_designs' => 'Successfully added additional invoice designs',

   'sent' => 'sent',
   'timesheets' => 'Timesheets',

   'payment_title' => 'Enter Your Billing Address and Credit Card information',
   'payment_cvv' => '*This is the 3-4 digit number onthe back of your card',
   'payment_footer1' => '*Billing address must match address associated with credit card.',
   'payment_footer2' => '*Please click "PAY NOW" only once - transaction may take up to 1 minute to process.',
   'vat_number' => 'Vat Number',

   'id_number' => 'ID Number',
   'white_label_link' => 'White label',
   'white_label_text' => 'Purchase a white label license for $'.WHITE_LABEL_PRICE.' to remove the Invoice Ninja branding from the top of the client pages.',
   'white_label_header' => 'White Label',
   'bought_white_label' => 'Successfully enabled white label license',
   'white_labeled' => 'White labeled',

  'restore' => 'Restore',
  'restore_invoice' => 'Restore Invoice',
  'restore_quote' => 'Restore Quote',
  'restore_client' => 'Restore Client',
  'restore_credit' => 'Restore Credit',
  'restore_payment' => 'Restore Payment',

  'restored_invoice' => 'Successfully restored invoice',
  'restored_quote' => 'Successfully restored quote',
  'restored_client' => 'Successfully restored client',
  'restored_payment' => 'Successfully restored payment',
  'restored_credit' => 'Successfully restored credit',
  
  'reason_for_canceling' => 'Help us improve our site by telling us why you\'re leaving.',
  'discount_percent' => 'Percent',
  'discount_amount' => 'Amount',

  'invoice_history' => 'Invoice History',
  'quote_history' => 'Quote History',
  'current_version' => 'Current version',
  'select_versiony' => 'Select version',
  'view_history' => 'View History',

  'edit_payment' => 'Edit Payment',
  'updated_payment' => 'Successfully updated payment',
  'deleted' => 'Deleted',
  'restore_user' => 'Restore User',
  'restored_user' => 'Successfully restored user',
  'show_deleted_users' => 'Show deleted users',
  'email_templates' => 'Email Templates',
  'invoice_email' => 'Invoice Email',
  'payment_email' => 'Payment Email',
  'quote_email' => 'Quote Email',
  'reset_all' => 'Reset All',
  'approve' => 'Approve',  

  'token_billing_type_id' => 'Token Billing',
  'token_billing_help' => 'Enables you to store credit cards with your gateway, and charge them at a later date.',
  'token_billing_1' => 'Disabled',
  'token_billing_2' => 'Opt-in - checkbox is shown but not selected',
  'token_billing_3' => 'Opt-out - checkbox is shown and selected',
  'token_billing_4' => 'Always',
  'token_billing_checkbox' => 'Store credit card details',
  'view_in_stripe' => 'View in Stripe',
  'use_card_on_file' => 'Use card on file',
  'edit_payment_details' => 'Edit payment details',
  'token_billing' => 'Save card details',
  'token_billing_secure' => 'The data is stored securely by :stripe_link',

  'support' => 'Support',
  'contact_information' => 'Contact information',
  '256_encryption' => '256-Bit Encryption',
  'amount_due' => 'Amount due',
  'billing_address' => 'Billing address',
  'billing_method' => 'Billing method',
  'order_overview' => 'Order overview',
  'match_address' => '*Address must match address associated with credit card.',
  'click_once' => '*Please click "PAY NOW" only once - transaction may take up to 1 minute to process.',

  'default_invoice_footer' => 'Set default invoice footer',
  'invoice_footer' => 'Invoice footer',
  'save_as_default_footer' => 'Save as default footer',

  'token_management' => 'Token Management',
  'tokens' => 'Tokens',
  'add_token' => 'Add Token',
  'show_deleted_tokens' => 'Show deleted tokens',
  'deleted_token' => 'Successfully deleted token',
  'created_token' => 'Successfully created token',
  'updated_token' => 'Successfully updated token',
  'edit_token' => 'Edit Token',
  'delete_token' => 'Delete Token',
  'token' => 'Token',

  'add_gateway' => 'Add Gateway',
  'delete_gateway' => 'Delete Gateway',
  'edit_gateway' => 'Edit Gateway',
  'updated_gateway' => 'Successfully updated gateway',
  'created_gateway' => 'Successfully created gateway',
  'deleted_gateway' => 'Successfully deleted gateway',
  'pay_with_paypal' => 'PayPal',
  'pay_with_card' => 'Credit card',

  'change_password' => 'Change password',
  'current_password' => 'Current password',
  'new_password' => 'New password',
  'confirm_password' => 'Confirm password',
  'password_error_incorrect' => 'The current password is incorrect.',
  'password_error_invalid' => 'The new password is invalid.',
  'updated_password' => 'Successfully updated password',

  'api_tokens' => 'API Tokens',
  'users_and_tokens' => 'Users & Tokens',
  'account_login' => 'Account Login',
  'recover_password' => 'Recover your password',
  'forgot_password' => 'Forgot your password?',
  'email_address' => 'Email address',
  'lets_go' => 'Let’s go',
  'password_recovery' => 'Password Recovery',
  'send_email' => 'Send email',
  'set_password' => 'Set Password',
  'converted' => 'Converted',
  
  'email_approved' => 'Email me when a quote is <b>approved</b>',
  'notification_quote_approved_subject' => 'Quote :invoice was approved by :client',
  'notification_quote_approved' => 'The following client :client approved Quote :invoice for :amount.',
  'resend_confirmation' => 'Resend confirmation email',
  'confirmation_resent' => 'The confirmation email was resent',

  'gateway_help_42' => ':link to sign up for BitPay.<br/>Note: use a Legacy API Key, not an API token.',
  'payment_type_credit_card' => 'Credit card',
  'payment_type_paypal' => 'PayPal',
  'payment_type_bitcoin' => 'Bitcoin',
  'knowledge_base' => 'Knowledge Base',
  'partial' => 'Partial',
  'partial_remaining' => ':partial of :balance',



);