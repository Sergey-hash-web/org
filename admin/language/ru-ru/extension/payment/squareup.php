<?php

// Heading
$_['heading_title']                                     = 'Square';
$_['heading_title_transaction']                         = 'Просмотр транзакции #%s';

// Help
$_['help_total']                                        = 'Общая сумма, которую должен достичь заказ, прежде чем этот метод оплаты станет активным.';
$_['help_local_cron']                                   = 'Вставьте эту команду на вкладке CRON вашего веб-сервера. Настройте его на запуск по крайней мере один раз в день.';
$_['help_remote_cron']                                  = 'Используйте этот URL для настройки задачи CRON через веб-сервис CRON. Настройте его на запуск по крайней мере один раз в день.';
$_['help_recurring_status']                             = 'Включите, чтобы разрешать регулярные платежи. <br> ПРИМЕЧАНИЕ. Также необходимо настроить ежедневную задачу CRON.';
$_['help_cron_email']                                   = 'Резюме повторяющейся задачи будет отправлено на это электронное письмо после завершения.';
$_['help_cron_email_status']                            = 'Включить получение сводки после каждого задания CRON.';
$_['help_notify_recurring_success']                     = 'Уведомлять клиентов об успешных повторяющихся транзакциях.';
$_['help_notify_recurring_fail']                        = 'Уведомлять клиентов о неудачных повторяющихся транзакциях.';

// Tab
$_['tab_setting']                                       = 'Настройки';
$_['tab_transaction']                                   = 'Транзакции';
$_['tab_cron']                                          = 'CRON';
$_['tab_recurring']                                     = 'Регулярные платежи';

// Text
$_['text_access_token_expires_label']                   = 'Срок действия токена истекает';
$_['text_access_token_expires_placeholder']             = 'Не настроен';
$_['text_acknowledge_cron']                             = 'Я подтверждаю, что настроил автоматизированную задачу CRON, используя один из способов выше.';
$_['text_admin_notifications']                          = 'Уведомления администратора';
$_['text_authorize_label']                              = 'Разрешать';
$_['text_canceled_success']                             = 'Успешно: Вы успешно отменили этот платеж!';
$_['text_capture']                                      = 'Получить';
$_['text_client_id_help']                               = 'Получите это на странице управления приложениями на Square';
$_['text_client_id_label']                              = 'Идентификатор приложения Square';
$_['text_client_id_placeholder']                        = 'Идентификатор приложения Square';
$_['text_client_secret_help']                           = 'Получите это на странице управления приложениями на Square';
$_['text_client_secret_label']                          = 'OAuth секрет приложения';
$_['text_client_secret_placeholder']                    = 'OAuth секрет приложения';
$_['text_confirm_action']                               = 'Вы уверены?';
$_['text_confirm_cancel']                               = 'Вы уверены, что хотите отменить регулярные платежи?';
$_['text_confirm_capture']                              = 'Вы собираетесь получить следующую сумму: <strong>%s</strong>. Нажмите OK, чтобы продолжить.';
$_['text_confirm_refund']                               = 'Пожалуйста, укажите причину возврата:';
$_['text_confirm_void']                                 = 'Вы собираетесь аннулировать следующую сумму: <strong>%s</strong>. Нажмите OK, чтобы продолжить.';
$_['text_connected']                                    = 'Соединено';
$_['text_connected_info']                               = "Переподключитесь, если Вы хотите переключить учетные записи или вручную отозвали доступ этого расширения из консоли Square App. Обновите маркер доступа вручную, если он был близок к 45 дням с момента последней продажи или переподключения.";
$_['text_connection_section']                           = 'Square соединение';
$_['text_connection_success']                           = 'Успешно подключен!';
$_['text_cron_email']                                   = 'Отправить резюме задачи на этот адрес электронной почты:';
$_['text_cron_email_status']                            = 'Отправить резюме по электронной почте:';
$_['text_customer_notifications']                       = 'Уведомления клиентов';
$_['text_debug_disabled']                               = 'Отключено';
$_['text_debug_enabled']                                = 'Включено';
$_['text_debug_help']                                   = 'Запросы и ответы API будут регистрироваться в журнале ошибок OpenCart. Используйте это только для целей отладки и разработки.';
$_['text_debug_label']                                  = 'Журнала отладки';
$_['text_delay_capture_help']                           = 'Авторизуйте только транзакции или произведите оплату автоматически';
$_['text_delay_capture_label']                          = 'Тип транзакции';
$_['text_disabled_connect_help_text']                   = 'Идентификатор клиента и секрет обязательны для заполнения.';
$_['text_edit_heading']                                 = 'Редактировать Square';
$_['text_enable_sandbox_help']                          = 'Включить режим песочницы для тестирования транзакций';
$_['text_enable_sandbox_label']                         = 'Включить режим песочницы';
$_['text_executables']                                  = 'Методы выполнения CRON';
$_['text_extension']                                    = 'Расширения';
$_['text_extension_status']                             = 'Статус расширения';
$_['text_extension_status_disabled']                    = 'Отключено';
$_['text_extension_status_enabled']                     = 'Включено';
$_['text_extension_status_help']                        = 'Включить или отключить способ оплаты';
$_['text_insert_amount']                                = 'Пожалуйста, введите сумму возврата. Максимум: %s в %s:';
$_['text_loading']                                      = 'Загрузка данных... Пожалуйста, подождите...';
$_['text_loading_short']                                = 'Пожалуйста, подождите...';
$_['text_local_cron']                                   = 'Метод №1 - Задача CRON:';
$_['text_location_error']                               = 'Произошла ошибка при попытке синхронизировать местоположения и токен: %s';
$_['text_location_help']                                = 'Выберите, какое настроенное квадратное местоположение будет использоваться для транзакций. Должны быть включены возможности обработки карт.';
$_['text_location_label']                               = 'Место нахождения';
$_['text_manage']                                       = 'Транзакция по кредитной карте (Square)';
$_['text_manage_tooltip']                               = 'Смотрите детали / Получение / Аннулирование / Возврат';
$_['text_merchant_info_section_heading']                = 'Информация о продавце';
$_['text_merchant_name_label']                          = 'Имя продавца';
$_['text_merchant_name_placeholder']                    = 'Не настроен';
$_['text_no_appropriate_locations_warning']             = 'В Вашем аккаунте Square нет мест для настройки обработки онлайн-карт.';
$_['text_no_location_selected_warning']                 = 'Там нет выбранного места.';
$_['text_no_locations_label']                           = 'Нет действительных местоположений';
$_['text_no_transactions']                              = 'Транзакции еще не были зарегистрированы.';
$_['text_not_connected']                                = 'Нет соединения';
$_['text_not_connected_info']                           = 'Нажав на эту кнопку, Вы подключите этот модуль к своей учетной записи Square и активируете услугу.';
$_['text_notification_ssl']                             = 'Убедитесь, что у Вас включен протокол SSL на странице оформления заказа. В противном случае расширение не будет работать.';
$_['text_notify_recurring_fail']                        = 'Повторяющаяся транзакция не выполнена:';
$_['text_notify_recurring_success']                     = 'Повторяющаяся транзакция успешна:';
$_['text_ok']                                           = 'ОК';
$_['text_order_history_cancel']                         = 'Администратор отменил Ваши регулярные платежи. Ваша карта больше не будет списана.';
$_['text_payment_method_name_help']                     = 'Название способа оплаты';
$_['text_payment_method_name_label']                    = 'Название способа оплаты';
$_['text_payment_method_name_placeholder']              = 'Кредитная / дебетовая карта';
$_['text_recurring_info']                               = 'Обязательно настройте ежедневную задачу CRON одним из следующих способов. Работа CRON поможет Вам с:<br><br>&bull; Автоматическое обновление Вашего токена доступа API<br>&bull; Обработка регулярных транзакций';
$_['text_recurring_status']                             = 'Статус регулярных платежей:';
$_['text_redirect_uri_help']                            = 'Вставьте эту ссылку в поле URI перенаправления в разделе «Управление приложением/oAuth».';
$_['text_redirect_uri_label']                           = 'Square OAuth URL перенаправления';
$_['text_refresh_access_token_success']                 = 'Успешно обновлено соединение с Вашей учетной записью Square.';
$_['text_refresh_token']                                = 'Повторно создать токен';
$_['text_refund']                                       = 'Вернуть';
$_['text_refund_details']                               = 'Детали возврата';
$_['text_refunded_amount']                              = 'Возвращено: %s. Статус возврата: %s. Причина возврата: %s';
$_['text_refunds']                                      = 'Возвраты (%s)';
$_['text_remote_cron']                                  = 'Метод №2 - Удаленный CRON:';
$_['text_sale_label']                                   = 'Продажа';
$_['text_sandbox_access_token_help']                    = 'Получите это на странице управления приложениями на Square';
$_['text_sandbox_access_token_label']                   = 'Токен доступа к песочнице';
$_['text_sandbox_access_token_placeholder']             = 'Токен доступа к песочнице';
$_['text_sandbox_client_id_help']                       = 'Получите это на странице управления приложениями на Square';
$_['text_sandbox_client_id_label']                      = 'Идентификатор приложения песочницы';
$_['text_sandbox_client_id_placeholder']                = 'Идентификатор приложения песочницы';
$_['text_sandbox_disabled_label']                       = 'Отключен';
$_['text_sandbox_enabled']                              = 'Режим песочницы включен! Транзакции будут проходить, но никакие расходы не будут.';
$_['text_sandbox_enabled_label']                        = 'Включено';
$_['text_sandbox_section_heading']                      = 'Настройки песочницы Square';
$_['text_select_location']                              = 'Выберите место';
$_['text_settings_section_heading']                     = 'Настройки Square';
$_['text_squareup']                                     = '<a target="_BLANK" href="https://squareup.com"><img src="view/image/payment/squareup.png" alt="Square" title="Square" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_success']                                      = 'Успешно: Вы изменили модуль оплаты Square!';
$_['text_success_capture']                              = 'Транзакция успешно получена!';
$_['text_success_refund']                               = 'Транзакция успешно возвращена!';
$_['text_success_void']                                 = 'Транзакция успешно аннулирована!';
$_['text_token_expired']                                = 'Срок действия Вашего токена доступа к Square истек! <a href="%s">Нажмите здесь</a>, чтобы обновить его сейчас.';
$_['text_token_expiry_warning']                         = 'Срок действия Вашего токена доступа к Square %s. <a href="%s">Нажмите здесь</a>, чтобы обновить его сейчас.';
$_['text_token_revoked']                                = 'Ваш токен доступа к Square истек или был аннулирован! <a href="%s">Нажмите здесь</a> повторно авторизовать расширение Square.';
$_['text_transaction_statuses']                         = 'Статусы транзакций';
$_['text_view']                                         = 'Посмотреть ещё';
$_['text_void']                                         = 'Аннулировать';
$_['text_na']                                           = 'Н/Д';
$_['text_no_reason_provided']                           = 'Причина не указана.';

// Statuses
$_['squareup_status_comment_authorized']                = 'Транзакция карты была авторизована, но еще не зафиксирована.';
$_['squareup_status_comment_captured']                  = 'Транзакция карты была авторизована и впоследствии зафиксирована (т.е. завершена).';
$_['squareup_status_comment_voided']                    = 'Транзакция карты была авторизована и впоследствии аннулирована (т.е. отменена).';
$_['squareup_status_comment_failed']                    = 'Сбой транзакции по карте.';

// Entry
$_['entry_total']                                       = 'Всего';
$_['entry_geo_zone']                                    = 'Геозона';
$_['entry_sort_order']                                  = 'Порядок сортировки';
$_['entry_merchant']                                    = 'Идентификатор продавца';
$_['entry_transaction_id']                              = 'Идентификатор транзакции';
$_['entry_order_id']                                    = 'Номер заказа';
$_['entry_partner_solution_id']                         = 'Идентификатор партнерского решения';
$_['entry_type']                                        = 'Тип транзакции';
$_['entry_currency']                                    = 'Валюта';
$_['entry_amount']                                      = 'Количество';
$_['entry_browser']                                     = 'Клиентский агент';
$_['entry_ip']                                          = 'IP-адрес клиента';
$_['entry_date_created']                                = 'Дата создания';
$_['entry_billing_address_company']                     = 'Биллинговая компания';
$_['entry_billing_address_street']                      = 'Биллинговая улица';
$_['entry_billing_address_city']                        = 'Биллинговый город';
$_['entry_billing_address_postcode']                    = 'Биллинговый почтовый индекс';
$_['entry_billing_address_province']                    = 'Биллинговая область';
$_['entry_billing_address_country']                     = 'Биллинговая страна';
$_['entry_status_authorized']                           = 'Авторизованный';
$_['entry_status_captured']                             = 'Полученный';
$_['entry_status_voided']                               = 'Аннулированный';
$_['entry_status_failed']                               = 'Не удалось';
$_['entry_setup_confirmation']                          = 'Подтверждение настройки:';

// Error
$_['error_permission']                                  = '<strong>Предупреждение:</strong> У Вас нет разрешения на изменение оплаты Square!';
$_['error_permission_recurring']                        = '<strong>Предупреждение:</strong> У Вас нет разрешения на изменение регулярных платежей!';
$_['error_transaction_missing']                         = 'Транзакция не найдена!';
$_['error_no_ssl']                                      = '<strong>Предупреждение:</strong> SSL не включен в Вашей панели администратора. Пожалуйста, включите его, чтобы завершить настройку.';
$_['error_user_rejected_connect_attempt']               = 'Попытка подключения была отменена пользователем.';
$_['error_possible_xss']                                = 'Мы обнаружили возможную межсайтовую атаку и прекратили попытку подключения. Пожалуйста, подтвердите свой идентификатор приложения и секрет и попробуйте снова, используя кнопки в панели администратора.';
$_['error_invalid_email']                               = 'Указанный адрес электронной почты недействителен!';
$_['error_cron_acknowledge']                            = 'Пожалуйста, подтвердите, что Вы создали CRON задания.';
$_['error_client_id']                                   = 'Идентификатор клиента приложения является обязательным полем';
$_['error_client_secret']                               = 'Секрет клиента приложения - обязательное поле';
$_['error_sandbox_client_id']                           = 'Идентификатор клиента песочницы является обязательным полем, когда включен режим песочницы';
$_['error_sandbox_token']                               = 'Токен песочницы является обязательным полем, когда включен режим песочницы';
$_['error_no_location_selected']                        = 'Местоположение является обязательным полем';
$_['error_refresh_access_token']                        = "Произошла ошибка при попытке обновить подключение расширения к Вашей учетной записи Square. Пожалуйста, подтвердите свои учетные данные приложения и попробуйте снова.";
$_['error_form']                                        = 'Пожалуйста, проверьте форму на наличие ошибок и попробуйте сохранить снова.';
$_['error_token']                                       = 'При обновлении токена произошла ошибка: %s';
$_['error_no_refund']                                   = 'Возврат не удался.';

// Column
$_['column_transaction_id']                             = 'Идентификатор транзакции';
$_['column_order_id']                                   = 'Номер заказа';
$_['column_customer']                                   = 'Клиент';
$_['column_status']                                     = 'Статус';
$_['column_type']                                       = 'Тип';
$_['column_amount']                                     = 'Количество';
$_['column_ip']                                         = 'IP';
$_['column_date_created']                               = 'Дата создания';
$_['column_action']                                     = 'Действие';
$_['column_refunds']                                    = 'Возвраты';
$_['column_reason']                                     = 'причина';
$_['column_fee']                                        = 'Разовая комиссия';

// Button
$_['button_void']                                       = 'Аннулировать';
$_['button_refund']                                     = 'Вернуть';
$_['button_capture']                                    = 'Получить';
$_['button_connect']                                    = 'Подключить';
$_['button_reconnect']                                  = 'Переподключить';
$_['button_refresh']                                    = 'Обновить токен';
