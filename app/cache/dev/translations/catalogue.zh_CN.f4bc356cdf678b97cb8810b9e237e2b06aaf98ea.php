<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('zh_CN', array (
  'validators' => 
  array (
    'This value should be false.' => '该变量的值应为 false 。',
    'This value should be true.' => '该变量的值应为 true 。',
    'This value should be of type {{ type }}.' => '该变量的类型应为 {{ type }} 。',
    'This value should be blank.' => '该变量值应为空。',
    'The value you selected is not a valid choice.' => '选定变量的值不是有效的选项。',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => '您至少要选择 {{ limit }} 个选项。',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => '您最多能选择 {{ limit }} 个选项。',
    'One or more of the given values is invalid.' => '一个或者多个给定的值无效。',
    'This field was not expected.' => '此字段是多余的。',
    'This field is missing.' => '此字段缺失。',
    'This value is not a valid date.' => '该值不是一个有效的日期（date）。',
    'This value is not a valid datetime.' => '该值不是一个有效的日期时间（datetime）。',
    'This value is not a valid email address.' => '该值不是一个有效的邮件地址。',
    'The file could not be found.' => '文件未找到。',
    'The file is not readable.' => '文件不可读。',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => '文件太大 ({{ size }} {{ suffix }})。文件大小不可以超过 {{ limit }} {{ suffix }} 。',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => '无效的文件类型 ({{ type }}) 。允许的文件类型有 {{ types }} 。',
    'This value should be {{ limit }} or less.' => '这个变量的值应该小于或等于 {{ limit }}。',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => '字符串太长，长度不可超过 {{ limit }} 个字符。',
    'This value should be {{ limit }} or more.' => '该变量的值应该大于或等于 {{ limit }}。',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => '字符串太短，长度不可少于 {{ limit }} 个字符。',
    'This value should not be blank.' => '该变量不应为空。',
    'This value should not be null.' => '该变量不应为 null 。',
    'This value should be null.' => '该变量应为空 null 。',
    'This value is not valid.' => '该变量值无效 。',
    'This value is not a valid time.' => '该值不是一个有效的时间。',
    'This value is not a valid URL.' => '该值不是一个有效的 URL 。',
    'The two values should be equal.' => '这两个变量的值应该相等。',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => '文件太大，文件大小不可以超过 {{ limit }} {{ suffix }}。 ',
    'The file is too large.' => '文件太大。',
    'The file could not be uploaded.' => '无法上传此文件。',
    'This value should be a valid number.' => '该值应该为有效的数字。',
    'This value is not a valid country.' => '该值不是有效的国家名。',
    'This file is not a valid image.' => '该文件不是有效的图片。',
    'This is not a valid IP address.' => '该值不是有效的IP地址。',
    'This value is not a valid language.' => '该值不是有效的语言名。',
    'This value is not a valid locale.' => '该值不是有效的区域值（locale）。',
    'This value is already used.' => '该值已经被使用。',
    'The size of the image could not be detected.' => '不能解析图片大小。',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => '图片太宽 ({{ width }}px)，最大宽度为 {{ max_width }}px 。',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => '图片宽度不够 ({{ width }}px)，最小宽度为 {{ min_width }}px 。',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => '图片太高 ({{ height }}px)，最大高度为 {{ max_height }}px 。',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => '图片高度不够 ({{ height }}px)，最小高度为 {{ min_height }}px 。',
    'This value should be the user\'s current password.' => '该变量的值应为用户当前的密码。',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => '该变量应为 {{ limit }} 个字符。',
    'The file was only partially uploaded.' => '该文件的上传不完整。',
    'No file was uploaded.' => '没有上传任何文件。',
    'No temporary folder was configured in php.ini.' => 'php.ini 里没有配置临时文件目录。',
    'Cannot write temporary file to disk.' => '临时文件写入磁盘失败。',
    'A PHP extension caused the upload to fail.' => '某个 PHP 扩展造成上传失败。',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => '该集合最少应包含 {{ limit }} 个元素。',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => '该集合最多包含 {{ limit }} 个元素。',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => '该集合应包含 {{ limit }} 个元素 element 。',
    'Invalid card number.' => '无效的信用卡号。',
    'Unsupported card type or invalid card number.' => '不支持的信用卡类型或无效的信用卡号。',
    'This is not a valid International Bank Account Number (IBAN).' => '该值不是有效的国际银行帐号（IBAN）。',
    'This value is not a valid ISBN-10.' => '该值不是有效的10位国际标准书号（ISBN-10）。',
    'This value is not a valid ISBN-13.' => '该值不是有效的13位国际标准书号（ISBN-13）。',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => '该值不是有效的国际标准书号（ISBN-10 或 ISBN-13）。',
    'This value is not a valid ISSN.' => '该值不是有效的国际标准期刊号（ISSN）。',
    'This value is not a valid currency.' => '该值不是有效的货币名（currency）。',
    'This value should be equal to {{ compared_value }}.' => '该值应等于 {{ compared_value }} 。',
    'This value should be greater than {{ compared_value }}.' => '该值应大于 {{ compared_value }} 。',
    'This value should be greater than or equal to {{ compared_value }}.' => '该值应大于或等于 {{ compared_value }} 。',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => '该值应与 {{ compared_value_type }} {{ compared_value }} 相同。',
    'This value should be less than {{ compared_value }}.' => '该值应小于 {{ compared_value }} 。',
    'This value should be less than or equal to {{ compared_value }}.' => '该值应小于或等于 {{ compared_value }} 。',
    'This value should not be equal to {{ compared_value }}.' => '该值不应先等于 {{ compared_value }} 。',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => '该值不应与 {{ compared_value_type }} {{ compared_value }} 相同。',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => '图片宽高比太大 ({{ ratio }})。允许的最大宽高比为 {{ max_ratio }}。',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => '图片宽高比太小 ({{ ratio }})。允许的最大宽高比为 {{ min_ratio }}。',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => '图片是方形的 ({{ width }}x{{ height }}px)。不允许使用方形的图片。',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => '图片是横向的 ({{ width }}x{{ height }}px)。不允许使用横向的图片。',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => '图片是纵向的 ({{ width }}x{{ height }}px)。不允许使用纵向的图片。',
    'An empty file is not allowed.' => '不允许使用空文件。',
    'The host could not be resolved.' => '主机名无法解析。',
    'This value does not match the expected {{ charset }} charset.' => '该值不符合 {{ charset }} 编码。',
    'This form should not contain extra fields.' => '该表单中不可有额外字段.',
    'The uploaded file was too large. Please try to upload a smaller file.' => '上传文件太大， 请重新尝试上传一个较小的文件.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF 验证符无效， 请重新提交.',
    'fos_user.username.already_used' => '用户名已存在',
    'fos_user.username.blank' => '请输入用户名',
    'fos_user.username.short' => '用户名字数不够',
    'fos_user.username.long' => '用户名字数超出限制',
    'fos_user.email.already_used' => '邮箱已被使用',
    'fos_user.email.blank' => '请输入邮箱',
    'fos_user.email.short' => '邮箱字数不够',
    'fos_user.email.long' => '邮箱字数超出限制',
    'fos_user.email.invalid' => '邮箱格式不正确',
    'fos_user.password.blank' => '请输入密码',
    'fos_user.password.short' => '密码字数不够',
    'fos_user.password.mismatch' => '两次输入密码不一致',
    'fos_user.new_password.blank' => '请输入新密码',
    'fos_user.new_password.short' => '新密码字数不够',
    'fos_user.current_password.invalid' => '密码格式不正确',
    'fos_user.group.blank' => '请输入小组名称',
    'fos_user.group.short' => '小组名称字数不够',
    'fos_user.group.long' => '小组名称字数超出限制',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => '身份验证发生异常。',
    'Authentication credentials could not be found.' => '没有找到身份验证的凭证。',
    'Authentication request could not be processed due to a system problem.' => '由于系统故障，身份验证的请求无法被处理。',
    'Invalid credentials.' => '无效的凭证。',
    'Cookie has already been used by someone else.' => 'Cookie 已经被其他人使用。',
    'Not privileged to request the resource.' => '没有权限请求此资源。',
    'Invalid CSRF token.' => '无效的 CSRF token 。',
    'Digest nonce has expired.' => '摘要随机串（digest nonce）已过期。',
    'No authentication provider found to support the authentication token.' => '没有找到支持此 token 的身份验证服务提供方。',
    'No session available, it either timed out or cookies are not enabled.' => 'Session 不可用。会话超时或没有启用 cookies 。',
    'No token could be found.' => '找不到 token 。',
    'Username could not be found.' => '找不到用户名。',
    'Account has expired.' => '帐号已过期。',
    'Credentials have expired.' => '凭证已过期。',
    'Account is disabled.' => '帐号已被禁用。',
    'Account is locked.' => '帐号已被锁定。',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => '更新小组',
    'group.show.name' => '小组名称',
    'group.new.submit' => '创建小组',
    'group.flash.updated' => '小组已被更新',
    'group.flash.created' => '小组已创建',
    'group.flash.deleted' => '小组已被删除',
    'security.login.username' => '用户名',
    'security.login.password' => '密码',
    'security.login.remember_me' => '自动登录',
    'security.login.submit' => '登录',
    'profile.show.username' => '用户名',
    'profile.show.email' => '电子邮箱',
    'profile.edit.submit' => '更新',
    'profile.flash.updated' => '用户信息已更新',
    'change_password.submit' => '修改密码',
    'change_password.flash.success' => '密码已成功修改',
    'registration.check_email' => '系统向%email%发送了一封包含激活链接的邮件，请访问该链接以启用你的帐户。',
    'registration.confirmed' => '%username%，恭喜你，你的帐户已启用！',
    'registration.back' => '返回前一页面',
    'registration.submit' => '注册',
    'registration.flash.user_created' => '用户已创建',
    'registration.email.subject' => '%username%，欢迎你',
    'registration.email.message' => '%username%，你好！

要启用你的用户帐号，请访问：%confirmationUrl%

祝好
网站团队
',
    'resetting.password_already_requested' => '该用户在过去的24小时内，已经请求过一次找回密码了。',
    'resetting.check_email' => '系统向%email%发送了一封包含密码重置链接的邮件，请查收。',
    'resetting.request.invalid_username' => '用户名“%username%”不存在',
    'resetting.request.username' => '用户名或邮箱',
    'resetting.request.submit' => '重置密码',
    'resetting.reset.submit' => '修改密码',
    'resetting.flash.success' => '密码已重置。',
    'resetting.email.subject' => '重置密码',
    'resetting.email.message' => '%username%，你好！

请访问 %confirmationUrl% 以重置你的帐户密码。

祝好
网站团队
',
    'layout.logout' => '退出',
    'layout.login' => '登录',
    'layout.register' => '注册',
    'layout.logged_in_as' => '已登录为：%username%',
    'form.group_name' => '小组名称',
    'form.username' => '用户名',
    'form.email' => '电子邮箱',
    'form.current_password' => '当前密码',
    'form.password' => '密码',
    'form.password_confirmation' => '确认密码',
    'form.new_password' => '新密码',
    'form.new_password_confirmation' => '确认新密码',
  ),
));

$catalogueZh = new MessageCatalogue('zh', array (
));
$catalogue->addFallbackCatalogue($catalogueZh);
$cataloguePl = new MessageCatalogue('pl', array (
  'validators' => 
  array (
    'This value should be false.' => 'Ta wartość powinna być fałszem.',
    'This value should be true.' => 'Ta wartość powinna być prawdą.',
    'This value should be of type {{ type }}.' => 'Ta wartość powinna być typu {{ type }}.',
    'This value should be blank.' => 'Ta wartość powinna być pusta.',
    'The value you selected is not a valid choice.' => 'Ta wartość powinna być jedną z podanych opcji.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Powinieneś wybrać co najmniej {{ limit }} opcję.|Powinieneś wybrać co najmniej {{ limit }} opcje.|Powinieneś wybrać co najmniej {{ limit }} opcji.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Powinieneś wybrać maksymalnie {{ limit }} opcję.|Powinieneś wybrać maksymalnie {{ limit }} opcje.|Powinieneś wybrać maksymalnie {{ limit }} opcji.',
    'One or more of the given values is invalid.' => 'Jedna lub więcej z podanych wartości jest nieprawidłowa.',
    'This field was not expected.' => 'To pole nie spodziewano.',
    'This field is missing.' => 'To pole jest chybianie.',
    'This value is not a valid date.' => 'Ta wartość nie jest prawidłową datą.',
    'This value is not a valid datetime.' => 'Ta wartość nie jest prawidłową datą i czasem.',
    'This value is not a valid email address.' => 'Ta wartość nie jest prawidłowym adresem email.',
    'The file could not be found.' => 'Plik nie mógł zostać odnaleziony.',
    'The file is not readable.' => 'Nie można odczytać pliku.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Plik jest za duży ({{ size }} {{ suffix }}). Maksymalny dozwolony rozmiar to {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Nieprawidłowy typ mime pliku ({{ type }}). Dozwolone typy mime to {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Ta wartość powinna wynosić {{ limit }} lub mniej.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Ta wartość jest zbyt długa. Powinna mieć {{ limit }} lub mniej znaków.|Ta wartość jest zbyt długa. Powinna mieć {{ limit }} lub mniej znaków.|Ta wartość jest zbyt długa. Powinna mieć {{ limit }} lub mniej znaków.',
    'This value should be {{ limit }} or more.' => 'Ta wartość powinna wynosić {{ limit }} lub więcej.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Ta wartość jest zbyt krótka. Powinna mieć {{ limit }} lub więcej znaków.|Ta wartość jest zbyt krótka. Powinna mieć {{ limit }} lub więcej znaków.|Ta wartość jest zbyt krótka. Powinna mieć {{ limit }} lub więcej znaków.',
    'This value should not be blank.' => 'Ta wartość nie powinna być pusta.',
    'This value should not be null.' => 'Ta wartość nie powinna być nullem.',
    'This value should be null.' => 'Ta wartość powinna być nullem.',
    'This value is not valid.' => 'Ta wartość jest nieprawidłowa.',
    'This value is not a valid time.' => 'Ta wartość nie jest prawidłowym czasem.',
    'This value is not a valid URL.' => 'Ta wartość nie jest prawidłowym adresem URL.',
    'The two values should be equal.' => 'Obie wartości powinny być równe.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Plik jest za duży. Maksymalny dozwolony rozmiar to {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Plik jest za duży.',
    'The file could not be uploaded.' => 'Plik nie mógł być wgrany.',
    'This value should be a valid number.' => 'Ta wartość powinna być prawidłową liczbą.',
    'This file is not a valid image.' => 'Ten plik nie jest obrazem.',
    'This is not a valid IP address.' => 'To nie jest prawidłowy adres IP.',
    'This value is not a valid language.' => 'Ta wartość nie jest prawidłowym językiem.',
    'This value is not a valid locale.' => 'Ta wartość nie jest prawidłową lokalizacją.',
    'This value is not a valid country.' => 'Ta wartość nie jest prawidłową nazwą kraju.',
    'This value is already used.' => 'Ta wartość jest już wykorzystywana.',
    'The size of the image could not be detected.' => 'Nie można wykryć rozmiaru obrazka.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Szerokość obrazka jest zbyt duża ({{ width }}px). Maksymalna dopuszczalna szerokość to {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Szerokość obrazka jest zbyt mała ({{ width }}px). Oczekiwana minimalna szerokość to {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Wysokość obrazka jest zbyt duża ({{ height }}px). Maksymalna dopuszczalna wysokość to {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Wysokość obrazka jest zbyt mała ({{ height }}px). Oczekiwana minimalna wysokość to {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Ta wartość powinna być aktualnym hasłem użytkownika.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Ta wartość powinna mieć dokładnie {{ limit }} znak.|Ta wartość powinna mieć dokładnie {{ limit }} znaki.|Ta wartość powinna mieć dokładnie {{ limit }} znaków.',
    'The file was only partially uploaded.' => 'Plik został wgrany tylko częściowo.',
    'No file was uploaded.' => 'Żaden plik nie został wgrany.',
    'No temporary folder was configured in php.ini.' => 'Nie skonfigurowano folderu tymczasowego w php.ini.',
    'Cannot write temporary file to disk.' => 'Nie można zapisać pliku tymczasowego na dysku.',
    'A PHP extension caused the upload to fail.' => 'Rozszerzenie PHP spowodowało błąd podczas wgrywania.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Ten zbiór powinien zawierać {{ limit }} lub więcej elementów.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Ten zbiór powinien zawierać {{ limit }} lub mniej elementów.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Ten zbiór powinien zawierać dokładnie {{ limit }} element.|Ten zbiór powinien zawierać dokładnie {{ limit }} elementy.|Ten zbiór powinien zawierać dokładnie {{ limit }} elementów.',
    'Invalid card number.' => 'Nieprawidłowy numer karty.',
    'Unsupported card type or invalid card number.' => 'Nieobsługiwany rodzaj karty lub nieprawidłowy numer karty.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Nieprawidłowy międzynarodowy numer rachunku bankowego (IBAN).',
    'This value is not a valid ISBN-10.' => 'Ta wartość nie jest prawidłowym numerem ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Ta wartość nie jest prawidłowym numerem ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Ta wartość nie jest prawidłowym numerem ISBN-10 ani ISBN-13.',
    'This value is not a valid ISSN.' => 'Ta wartość nie jest prawidłowym numerem ISSN.',
    'This value is not a valid currency.' => 'Ta wartość nie jest prawidłową walutą.',
    'This value should be equal to {{ compared_value }}.' => 'Ta wartość powinna być równa {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Ta wartość powinna być większa niż {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Ta wartość powinna być większa bądź równa {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ta wartość powinna być identycznego typu {{ compared_value_type }} oraz wartości {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Ta wartość powinna być mniejsza niż {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Ta wartość powinna być mniejsza bądź równa {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Ta wartość nie powinna być równa {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ta wartość nie powinna być identycznego typu {{ compared_value_type }} oraz wartości {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Proporcje obrazu są zbyt duże ({{ ratio }}). Maksymalne proporcje to {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Proporcje obrazu są zbyt małe ({{ ratio }}). Minimalne proporcje to {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Obraz jest kwadratem ({{ width }}x{{ height }}px). Kwadratowe obrazy nie są akceptowane.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Obraz jest panoramiczny ({{ width }}x{{ height }}px). Panoramiczne zdjęcia nie są akceptowane.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Obraz jest portretowy ({{ width }}x{{ height }}px). Portretowe zdjęcia nie są akceptowane.',
    'An empty file is not allowed.' => 'Plik nie może być pusty.',
    'The host could not be resolved.' => 'Nazwa hosta nie została rozpoznana.',
    'This value does not match the expected {{ charset }} charset.' => 'Ta wartość nie pasuje do oczekiwanego zestawu znaków {{ charset }}.',
    'This form should not contain extra fields.' => 'Ten formularz nie powinien zawierać dodatkowych pól.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Wgrany plik był za duży. Proszę spróbować wgrać mniejszy plik.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Token CSRF jest nieprawidłowy. Proszę spróbować wysłać formularz ponownie.',
    'fos_user.username.already_used' => 'Ta nazwa użytkownika jest już zajęta',
    'fos_user.username.blank' => 'Proszę podać nazwę użytkownika',
    'fos_user.username.short' => 'Nazwa użytkownika jest za krótka',
    'fos_user.username.long' => 'Nazwa użytkownika jest za długa',
    'fos_user.email.already_used' => 'Podany email jest zajęty',
    'fos_user.email.blank' => 'Proszę podać adres email',
    'fos_user.email.short' => 'Podany email jest za krótki',
    'fos_user.email.long' => 'Podany email jest za długi',
    'fos_user.email.invalid' => 'Podany adres email jest nieprawidłowy',
    'fos_user.password.blank' => 'Proszę podać hasło',
    'fos_user.password.short' => 'Podane hasło jest za krótkie',
    'fos_user.password.mismatch' => 'Hasła nie pasują do siebie',
    'fos_user.new_password.blank' => 'Proszę podać nowe hasło',
    'fos_user.new_password.short' => 'Podane nowe hasło jest za krótkie',
    'fos_user.current_password.invalid' => 'Podane hasło jest nieprawidłowe',
    'fos_user.group.blank' => 'Proszę podać nazwę',
    'fos_user.group.short' => 'Podana nazwa jest za krótka',
    'fos_user.group.long' => 'Podana nazwa jest za długa',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Wystąpił błąd uwierzytelniania.',
    'Authentication credentials could not be found.' => 'Dane uwierzytelniania nie zostały znalezione.',
    'Authentication request could not be processed due to a system problem.' => 'Żądanie uwierzytelniania nie mogło zostać pomyślnie zakończone z powodu problemu z systemem.',
    'Invalid credentials.' => 'Nieprawidłowe dane.',
    'Cookie has already been used by someone else.' => 'To ciasteczko jest używane przez kogoś innego.',
    'Not privileged to request the resource.' => 'Brak uprawnień dla żądania wskazanego zasobu.',
    'Invalid CSRF token.' => 'Nieprawidłowy token CSRF.',
    'Digest nonce has expired.' => 'Kod dostępu wygasł.',
    'No authentication provider found to support the authentication token.' => 'Nie znaleziono mechanizmu uwierzytelniania zdolnego do obsługi przesłanego tokenu.',
    'No session available, it either timed out or cookies are not enabled.' => 'Brak danych sesji, sesja wygasła lub ciasteczka nie są włączone.',
    'No token could be found.' => 'Nie znaleziono tokenu.',
    'Username could not be found.' => 'Użytkownik o podanej nazwie nie istnieje.',
    'Account has expired.' => 'Konto wygasło.',
    'Credentials have expired.' => 'Dane uwierzytelniania wygasły.',
    'Account is disabled.' => 'Konto jest wyłączone.',
    'Account is locked.' => 'Konto jest zablokowane.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Edytuj grupę',
    'group.show.name' => 'Nazwa grupy',
    'group.new.submit' => 'Utwórz grupę',
    'group.flash.updated' => 'Grupa została zaktualizowana',
    'group.flash.created' => 'Grupa została utworzona',
    'group.flash.deleted' => 'Grupa została usunięta',
    'security.login.username' => 'Nazwa użytkownika',
    'security.login.password' => 'Hasło',
    'security.login.remember_me' => 'Nie wylogowuj mnie',
    'security.login.submit' => 'Zaloguj',
    'profile.show.username' => 'Nazwa użytkownika',
    'profile.show.email' => 'E-mail',
    'profile.edit.submit' => 'Edytuj użytkownika',
    'profile.flash.updated' => 'Zapisano zmiany w profilu',
    'change_password.submit' => 'Zmień hasło',
    'change_password.flash.success' => 'Hasło zostało zmienione',
    'registration.check_email' => 'Na adres %email% wysłano wiadomość e-mail. Zawiera ona link, na który należy kliknąć, aby aktywować konto.',
    'registration.confirmed' => 'Gratulacje %username%, potwierdziłeś konto.',
    'registration.back' => 'Powrót do poprzedniej strony.',
    'registration.submit' => 'Zarejestruj',
    'registration.flash.user_created' => 'Stworzono użytkownika',
    'registration.email.subject' => 'Witaj %username%!',
    'registration.email.message' => 'Cześć %username%!

Aby potwierdzić swoje konto - proszę przejść do %confirmationUrl%

Pozdrawiamy,
Zespół.
',
    'resetting.password_already_requested' => 'W przeciągu ostatnich 24 godzin nastąpiła już próba odzyskania hasła.',
    'resetting.check_email' => 'Na adres %email% wysłano wiadomość e-mail. Zawiera ona link, w którego należy kliknąć, aby zresetować hasło.',
    'resetting.request.invalid_username' => 'Nazwa użytkownika lub e-mail "%username%" nie istnieje.',
    'resetting.request.username' => 'Nazwa użytkownika lub e-mail',
    'resetting.request.submit' => 'Resetuj hasło',
    'resetting.reset.submit' => 'Zmień hasło',
    'resetting.flash.success' => 'Hasło zostało zresetowane',
    'resetting.email.subject' => 'Resetowanie hasła',
    'resetting.email.message' => 'Cześć %username%!

Aby zresetować hasło - proszę przejść do %confirmationUrl%

Pozdrawiamy,
Zespół.
',
    'layout.logout' => 'Wyloguj',
    'layout.login' => 'Zaloguj',
    'layout.register' => 'Zarejestruj',
    'layout.logged_in_as' => 'Zalogowano jako %username%',
    'form.group_name' => 'Nazwa grupy',
    'form.username' => 'Nazwa użytkownika',
    'form.email' => 'E-mail',
    'form.current_password' => 'Obecne hasło',
    'form.password' => 'Hasło',
    'form.password_confirmation' => 'Powtórz hasło',
    'form.new_password' => 'Nowe hasło',
    'form.new_password_confirmation' => 'Powtórz hasło',
  ),
));
$catalogueZh->addFallbackCatalogue($cataloguePl);

return $catalogue;
