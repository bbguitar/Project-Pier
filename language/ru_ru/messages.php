<?php

  /**
  * Array of messages file (error, success message, status...)
  *
  * @version 1.0
  * @http://www.projectpier.org/
  */

  return array(

    // Empty, dnx etc
    'project dnx' => 'Запрошенный проект отсутсвует в базе данных',
    'message dnx' => 'Запрошенное сообщение не существует',
    'no comments in message' => 'Нет комментариев на это сообщение',
    'no comments associated with object' => 'К объекту нет комментариев',
    'no messages in project' => 'В проекте нет сообщений',
    'no subscribers' => 'Нет пользователей подписанных на это сообщение',
    'no activities in project' => 'В этом проекте нет событий',
    'comment dnx' => 'Запрошенный комментарий не существует',
    'milestone dnx' => 'Запрошенный этап не существует',
    'task list dnx' => 'Запрошенный список заданий не существует',
    'task dnx' => 'Запрошенное задание не существует',
    'no milestones in project' => 'В этом проекте нет этапов',
    'no active milestones in project' => 'В этом проекте нет активных этапов',
    'empty milestone' => 'Этот этап пуст. Вы можете добавить <a href="%s">message</a> или <a href="%s">task list</a> в него в любое время',
    'no logs for project' => 'Нет логов, касающихся этого проекта',
    'no recent activities' => 'Нет текущей активности, отражённой в базе данных',
    'no open task lists in project' => 'Нет открытого списка заданий для этого проекта',
    'no completed task lists in project' => 'Нет завершённых списков заданий в этом проекте',
    'no open task in task list' => 'Нет заданий в этом списке',
    'no projects in db' => 'В базе данных нет назначенных проектов',
    'no projects owned by company' => 'Проектов, относящихся к этой компании не существует',
    'no projects started' => 'Начатых проектов нет',
    'no active projects in db' => 'Активных проектов нет',
    'no new objects in project since last visit' => 'С вашего прошлого визита в этом проекте новых объектов не появилось',
    'no clients in company' => 'Ваша компания не имеет зарегистрированных клиентов',
    'no users in company' => 'В этой компании нет пользователей',
    'client dnx' => 'Запрошенная клиентская компания не существует',
    'company dnx' => 'Запрошенная компания не существует',
    'user dnx' => 'Запрошенный пользователь не представлен в базе данных',
    'avatar dnx' => 'Фотография не существует',
    'no current avatar' => 'Фотография не загружена',
    'no current logo' => 'Логотип не загружен',
    'user not on project' => 'Выбранный пользователь не участвует в текущем проекте',
    'company not on project' => 'Выбранная компания не участвует в текущем проекте',
    'user cant be removed from project' => 'Выбранный пользователь не может быть удалён из проекта',
    'tag dnx' => 'Такой метки не существует',
    'no tags used on projects' => 'В этом проекте метки не задействованы',
    'no forms in project' => 'В этом проекте нет форм',
    'project form dnx' => 'Запрошенная проектная форма отсутствует в базе',
    'related project form object dnx' => 'Относящиеся к проекту форма отсутствует в базе',
    'no my tasks' => 'Для вас нет заданий',
    'no search result for' => 'Нет объектов соответствующих условию "<strong>%s</strong>"',
    'no files on the page' => 'На этой странице нет файлов',
    'folder dnx' => 'Запрошенная папка отсутствует в базе',
    'define project folders' => 'В этом проекте нет папок. Пожалуйста, определите папки, чтобы продолжить',
    'file dnx' => 'Запрошенный файл отсутствует в базе',
    'file revision dnx' => 'Запрошенная версия отсутствует в базе',
    'no file revisions in file' => 'Ошибочный файл - нет версий, относящихся к этому файлу',
    'cant delete only revision' => 'Невозможно удалить эту версию. Каждый файл должен иметь как минимум одну опубликованную версию',
    'config category dnx' => 'Запрошенный раздел конфигурации не существует',
    'config category is empty' => 'Запрошенный раздел конфигурации пуст',
    'email address not in use' => '%s не используется',
    'no attached files' => 'Нет файлов, связанных с этим объектом',
    'file not attached to object' => 'Выбранный файл не связан с выбранным объектом',
    'no files to attach' => 'Пожалуйста, выберите файлы для присоединения',
    'no administration tools' => 'Не зарегистрировано инструментов администрирования а базе данных',
    'administration tool dnx' => 'Инструмент управления "%s" не существует',
    'about to delete' => 'Вы собираетесь удалить',

    // Success
    'success add project' => 'Проект %s успешно добавлен',
    'success edit project' => 'Проект %s обновлён',
    'success delete project' => 'Проект %s удалён',
    'success complete project' => 'Проект %s завершён',
    'success open project' => 'Проет %s открыт заново',

    'success add milestone' => 'Этап \'%s\' добавлен',
    'success edit milestone' => 'Этап \'%s\' обновлён',
    'success deleted milestone' => 'Этап \'%s\' удалён',

    'success add message' => 'Сообщение %s добавлено',
    'success edit message' => 'Сообщение %s обновлено',
    'success deleted message' => 'Сообщение \'%s\' со всеми комментариями удалено',

    'success add comment' => 'Комментарий опубликован',
    'success edit comment' => 'Комментарий обновлён',
    'success delete comment' => 'Комментарий удалён',

    'success add task list' => 'Список заданий \'%s\' добавлен',
    'success edit task list' => 'Список заданий \'%s\' обновлен',
    'success delete task list' => 'Список заданий \'%s\' удален',

    'success add task' => 'Выбранное задание добавлено',
    'success edit task' => 'Выбранное задание обновлено',
    'success delete task' => 'Выбранное задание удалено',
    'success complete task' => 'Выбранное задание завершено',
    'success open task' => 'Выбранное задание открыто заново',
    'success n tasks updated' => 'Обновлено заданий - %s',

    'success add client' => 'Компания-клиент %s добавлена',
    'success edit client' => 'Компания-клиент %s обновлена',
    'success delete client' => 'Компания-клиент %s удалена',

    'success edit company' => 'Данные компания обновлены',
    'success edit company logo' => 'Логотип компании обновлен',
    'success delete company logo' => 'Логотип компании удален',

    'success add user' => 'Пользователь %s добавлен',
    'success edit user' => 'Пользователь %s обновлен',
    'success delete user' => 'Пользователь %s удален',

    'success update project permissions' => 'Права доступа обновлены',
    'success remove user from project' => 'Пользователь удален из проекта',
    'success remove company from project' => 'Компания удалена из проекта',

    'success update profile' => 'Профиль обновлён',
    'success edit avatar' => 'Фотография обновлёна',
    'success delete avatar' => 'Фотография удалена',

    'success hide welcome info' => 'Блок с информацией приветствия успешно скрыт',

    'success complete milestone' => 'Этап \'%s\' завершён',
    'success open milestone' => 'Этап \'%s\' открыт заново',

    'success subscribe to message' => 'Вы подписались на это сообщение',
    'success unsubscribe to message' => 'Вы отказались от подписки на это сообщение',

    'success add project form' => 'Форма \'%s\' добавлена',
    'success edit project form' => 'Форма \'%s\' обновлена',
    'success delete project form' => 'Форма \'%s\' удалена',

    'success add folder' => 'Папка \'%s\' добавлена',
    'success edit folder' => 'Папка \'%s\' обновлена',
    'success delete folder' => 'Папка \'%s\' удалена',

    'success add file' => 'Файл \'%s\' добавлен',
    'success edit file' => 'Файл \'%s\' обновлен',
    'success delete file' => 'Файл \'%s\' удален',

    'success edit file revision' => 'Версия файла обновлена',
    'success delete file revision' => 'Версия файла удалена',

    'success attach files' => 'Прикреплено файлов: %s',
    'success detach file' => 'Файл(ы) отсоединен(ы) успешно',

    'success update config category' => 'значение конфигурации %s обновлено',
    'success forgot password' => 'Ваш пароль отослан на email',

    'success test mail settings' => 'Пробное сообщение отправлено',
    'success massmail' => 'Email отправлен',

    'success update company permissions' => 'Права доступа компании обновлены. Изменено записей: %s',
    'success user permissions updated' => 'Права доступа пользователя обновлены',

    // Failures
    'error form validation' => 'Не удалось сохранить объект из-за несоответствия некоторых его свойств требуемым',
    'error delete owner company' => 'Компания-владелец не может быть удалена',
    'error delete message' => 'Не удалось удалить выбранное сообщение',
    'error update message options' => 'Не удалось обновить опции сообщения',
    'error delete comment' => 'Не удалось удалить выбранный комментарий',
    'error delete milestone' => 'Не удалось удалить выбранный этап',
    'error complete task' => 'Не удалось завершить выбранное заданий',
    'error open task' => 'Не удалось открыть заново выбранние задание',
    'error upload file' => 'Не удалось загрузить файл',
    'error delete project' => 'Не удалось удалить выбранный проект',
    'error complete project' => 'Не удалось завершить выбранный проект',
    'error open project' => 'Не удалось открыть заново выбранный проект',
    'error delete client' => 'Не удалось удалить выбранную компанию-клиент',
    'error delete user' => 'Не удалось удалить выбранного пользователя',
    'error update project permissions' => 'Не удалось изменить права доступа выбранного проекта',
    'error remove user from project' => 'Не удалось пользователя из этого проекта',
    'error remove company from project' => 'Не удалось удалить компанию из проекта',
    'error edit avatar' => 'Не удалось изменить фотографию',
    'error delete avatar' => 'Не удалось удалить фотографию',
    'error hide welcome info' => 'Не удалось скрыть вводное сообщение',
    'error complete milestone' => 'Не удалось завершить выбранный этап',
    'error open milestone' => 'Не удалось открыть заново выбранный этап',
    'error file download' => 'Не удалось загрузить указанный файл',
    'error attach file' => 'Не удалось присоединить файл',
    'error edit company logo' => 'Не удалось обновить logo компании',
    'error delete company logo' => 'Не удалось удалить logo компании',
    'error subscribe to message' => 'Не удалось подписаться на выбранное сообщение',
    'error unsubscribe to message' => 'Не удалось аннулировать подписку на выбранное сообщение',
    'error add project form' => 'Не удалось добавить проектную форму',
    'error submit project form' => 'Не удалось отослать проектную форму',
    'error delete folder' => 'Не удалось удалить выбранный фолдер',
    'error delete file' => 'Не удалось удалить выбранный файл',
    'error delete file revision' => 'Не удалось удалить версию файла',
    'error delete task list' => 'Не удалось удалить выбранный список заданий',
    'error delete task' => 'Не удалось удалить выбранное задание',
    'error check for upgrade' => 'Не удалось проверить новую версию',
    'error attach file' => 'Не удалось присоединить файл(ы)',
    'error detach file' => 'Не удалось отсоединить файл(ы)',
    'error attach files max controls' => 'Вы не можете присоединить ещё файлы. Ограничение %s',
    'error test mail settings' => 'Не удалось послать тестовое сообщение',
    'error massmail' => 'Не удалось отправить email',
    'error owner company has all permissions' => 'У компании-владельца есть все права',

    // Access or data errors
    'no access permissions' => 'Недостаточные права доступа для выполнения запроса',
    'invalid request' => 'Неправильный запрос!',

    // Confirmation
    'confirm delete message' => 'Уверены, что хотите удалить это сообщение?',
    'confirm delete milestone' => 'Уверены, что хотите удалить этот этап?',
    'confirm delete task list' => 'Уверены, что хотите удалить этот список заданий вместе со всеми заданиями?',
    'confirm delete task' => 'Уверены, что хотите удалить это задание?',
    'confirm delete comment' => 'Уверены, что хотите удалить этот comment?',
    'confirm delete project' => 'Уверены, что хотите удалить этот проект и все его данные (сообщения, задания, этапы, файлы...)?',
    'confirm complete project' => 'Уверены, что хотите отметить этот проект как завершённый? Все действия с проектом будут заморожены',
    'confirm open project' => 'Уверены, что хотите отметить этот проект как открытый? Будет открыт доступ к изменениям проекта',
    'confirm delete client' => 'Уверены, что хотите удалить компанию-клиент со всеми её пользователями?',
    'confirm delete user' => 'Уверены, что хотите удалить эту учетную запись?',
    'confirm reset people form' => 'Уверены, что хотите сбросить эту форму? Все сделанные изменения будут потеряны!',
    'confirm remove user from project' => 'Уверены, что хотите удалить этого юзера из проекта?',
    'confirm remove company from project' => 'Уверены, что хотите убрать эту компанию из проекта?',
    'confirm logout' => 'Уверены, что хотите выйти?',
    'confirm delete current avatar' => 'Уверены, что хотите удалить этот avatar?',
    'confirm detach file' => 'Уверены, что хотите отсоединить этот файл?',
    'confirm delete company logo' => 'Уверены, что хотите удалить это logo?',
    'confirm subscribe' => 'Уверены, что хотите подписаться на это сообщение? Вы будете получать email когда кто-нибудь (кроме вас) опубликует comment на это сообщение?',
    'confirm unsubscribe' => 'Уверены, что хотите отказаться от подписки?',
    'confirm delete project form' => 'Уверены, что хотите удалить эту форму?',
    'confirm delete folder' => 'Уверены, что хотите удалить этот folder?',
    'confirm delete file' => 'Уверены, что хотите удалить этот файл?',
    'confirm delete revision' => 'Уверены, что хотите удалить эту версию?',
    'confirm reset form' => 'Уверены, что хотите сбросить эту форму?',

    // Errors...
    'system error message' => 'Сожалеем, но фатальная ошибка помешала выполнить ваш запрос. Сообщение об ошибке отправлено администратору.',
    'execute action error message' => 'Сожалеем, но ProjectPier сейчас не в состоянии выполнить ваш запрос. Сообщение об ошибке отправлено администратору.',

    // Log
    'log add projectmessages' => '\'%s\' добавлено',
    'log edit projectmessages' => '\'%s\' обновлено',
    'log delete projectmessages' => '\'%s\' удалено',

    'log add comments' => '%s добавлен',
    'log edit comments' => '%s обновлён',
    'log delete comments' => '%s удалён',

    'log add projectmilestones' => '\'%s\' добавлен',
    'log edit projectmilestones' => '\'%s\' обновлён',
    'log delete projectmilestones' => '\'%s\' удалён',
    'log close projectmilestones' => '\'%s\' завершён',
    'log open projectmilestones' => '\'%s\' открыт заново',

    'log add projecttasklists' => '\'%s\' добавлен',
    'log edit projecttasklists' => '\'%s\' обновлён',
    'log delete projecttasklists' => '\'%s\' удалён',
    'log close projecttasklists' => '\'%s\' закрыт',
    'log open projecttasklists' => '\'%s\' открыт',

    'log add projecttasks' => '\'%s\' добавлена',
    'log edit projecttasks' => '\'%s\' обновлена',
    'log delete projecttasks' => '\'%s\' удалена',
    'log close projecttasks' => '\'%s\' закрыта',
    'log open projecttasks' => '\'%s\' открыта',

    'log add projectforms' => '\'%s\' добавлена',
    'log edit projectforms' => '\'%s\' обновлёна',
    'log delete projectforms' => '\'%s\' удалена',

    'log add projectfolders' => '\'%s\' добавлена',
    'log edit projectfolders' => '\'%s\' обновлена',
    'log delete projectfolders' => '\'%s\' удалена',

    'log add projectfiles' => '\'%s\' загружен',
    'log edit projectfiles' => '\'%s\' обновлён',
    'log delete projectfiles' => '\'%s\' удалён',

    'log edit projectfilerevisions' => '%s обновлён',
    'log delete projectfilerevisions' => '%s удалён',

  ); // array

?>