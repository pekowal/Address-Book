<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('vi', array (
  'validators' => 
  array (
    'This value should be false.' => 'Giá trị này phải là sai.',
    'This value should be true.' => 'Giá trị này phải là đúng.',
    'This value should be of type {{ type }}.' => 'Giá trị này phải là kiểu  {{ type }}.',
    'This value should be blank.' => 'Giá trị này phải rỗng.',
    'The value you selected is not a valid choice.' => 'Giá trị bạn vừa chọn không hợp lệ.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Bạn phải chọn ít nhất {{ limit }} lựa chọn.|Bạn phải chọn ít nhất {{ limit }} lựa chọn.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Bạn phải chọn nhiều nhất {{ limit }} lựa chọn.|Bạn phải chọn nhiều  nhất {{ limit }} lựa chọn.',
    'One or more of the given values is invalid.' => 'Một hoặc nhiều giá trị được chọn không hợp lệ.',
    'This field was not expected.' => 'Lĩnh vực này không được dự kiến.',
    'This field is missing.' => 'Lĩnh vực này là mất tích.',
    'This value is not a valid date.' => 'Giá trị không phải là ngày hợp lệ.',
    'This value is not a valid datetime.' => 'Giá trị không phải là ngày tháng hợp lệ.',
    'This value is not a valid email address.' => 'Giá trị này không phải là email hợp lệ.',
    'The file could not be found.' => 'Tập tin không tìm thấy.',
    'The file is not readable.' => 'Tập tin không thể đọc được.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Tập tin quá lớn ({{ size }} {{ suffix }}). Kích thước tối đa cho phép {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Kiểu mime của tập tin không hợp lệ ({{ type }}). Kiểu hợp lệ là {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Giá trị phải bằng hoặc nhỏ hơn {{ limit }}.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Giá trị quá dài. Phải bằng hoặc ít hơn {{ limit }} kí tự.|Giá trị quá dài. Phải bằng hoặc ít hơn {{ limit }} kí tự.',
    'This value should be {{ limit }} or more.' => 'Giá trị phải lớn hơn hoặc bằng {{ limit }}.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Giá trị quá ngắn. Phải hơn hoặc bằng {{ limit }} kí tự.|Giá trị quá ngắn. Phải hơn hoặc bằng {{ limit }} kí tự.',
    'This value should not be blank.' => 'Giá trị không được phép để trống.',
    'This value should not be null.' => 'Giá trị không được phép rỗng.',
    'This value should be null.' => 'Giá trị phải rỗng.',
    'This value is not valid.' => 'Giá trị không hợp lệ.',
    'This value is not a valid time.' => 'Giá trị không phải là thời gian hợp lệ.',
    'This value is not a valid URL.' => 'Giá trị không phải là địa chỉ URL hợp lệ.',
    'The two values should be equal.' => 'Hai giá trị phải bằng nhau.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Tập tin quá lớn. Kích thước tối đa cho phép là {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Tập tin quá lớn.',
    'The file could not be uploaded.' => 'Tập tin không thể tải lên.',
    'This value should be a valid number.' => 'Giá trị phải là con số.',
    'This file is not a valid image.' => 'Tập tin không phải là hình ảnh.',
    'This is not a valid IP address.' => 'Địa chỉ IP không hợp lệ.',
    'This value is not a valid language.' => 'Giá trị không phải là ngôn ngữ hợp lệ.',
    'This value is not a valid locale.' => 'Giá trị không phải là một bản địa địa phương hợp lệ.',
    'This value is not a valid country.' => 'Giá trị không phải là nước hợp lệ.',
    'This value is already used.' => 'Giá trị đã được sử dụng.',
    'The size of the image could not be detected.' => 'Kích thước của hình ảnh không thể xác định.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Chiều rộng của hình quá lớn ({{ width }}px). Chiều rộng tối đa phải là {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Chiều rộng của hình quá thấp ({{ width }}px). Chiều rộng tối thiểu phải là {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Chiều cao của hình quá cao ({{ height }}px). Chiều cao tối đa phải là {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Chiều cao của hình quá thấp ({{ height }}px). Chiều cao tối thiểu phải là {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Giá trị này phải là mật khẩu hiện tại của người dùng.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Giá trị phải có chính xác {{ limit }} kí tự.|Giá trị phải có chính xác {{ limit }} kí tự.',
    'The file was only partially uploaded.' => 'Tập tin chỉ được tải lên một phần.',
    'No file was uploaded.' => 'Tập tin không được tải lên.',
    'No temporary folder was configured in php.ini.' => 'Thư mục tạm không được định nghĩa trong php.ini.',
    'Cannot write temporary file to disk.' => 'Không thể ghi tập tin tạm ra đĩa.',
    'A PHP extension caused the upload to fail.' => 'Một PHP extension đã phá hỏng quá trình tải lên của tập tin.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Danh sách phải chứa {{ limit }} hoặc nhiều hơn thành phần.|Danh sách phải chứa {{ limit }} hoặc nhiều hơn thành phần.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Danh sách phải chứa {{ limit }} hoặc ít hơn thành phần.|Danh sách phải chứa {{ limit }} hoặc ít hơn thành phần.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Danh sách phải chứa chính xác {{ limit }} thành phần.|Danh sách phải chứa chính xác {{ limit }} thành phần.',
    'Invalid card number.' => 'Số thẻ không hợp lệ.',
    'Unsupported card type or invalid card number.' => 'Thẻ không được hỗ trợ hoặc số thẻ không hợp lệ.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Giá trị không phải là International Bank Account Number (IBAN) hợp lệ.',
    'This value is not a valid ISBN-10.' => 'Giá trị không phải là ISBN-10 hợp lệ.',
    'This value is not a valid ISBN-13.' => 'Giá trị không phải là ISBN-13 hợp lệ.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Giá trị không phải là ISBN-10 hoặc ISBN-13 hợp lệ.',
    'This value is not a valid ISSN.' => 'Giá trị không là ISSN hợp lệ.',
    'This value is not a valid currency.' => 'Giá trị không phải là đơn vi tiền tệ hợp lệ.',
    'This value should be equal to {{ compared_value }}.' => 'Giá trị phải bằng {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Giá trị phải lớn hơn {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Giá trị phải lớn hơn hoặc bằng {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Giá trị phải giống  {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Giá trị phải bé hơn {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Giá trị không được phép nhỏ hơn hoặc bằng {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Giá trị không được phép bằng {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Giá trị không được phép giống như {{ compared_value_type }} {{ compared_value }}.',
    'fos_user.current_password.invalid' => 'Mật khẩu nhập không hợp lệ',
    'fos_user.email.already_used' => 'Thư điện tử đã được sử dụng',
    'fos_user.email.blank' => 'Vui lòng nhập email',
    'fos_user.email.invalid' => 'Các email không hợp lệ',
    'fos_user.email.long' => '[-Inf, Inf] Email quá dài',
    'fos_user.email.short' => '[-Inf, Inf] Thư điện tử là quá ngắn',
    'fos_user.group.blank' => 'Hãy nhập tên',
    'fos_user.group.long' => '[-Inf, Inf] Tên quá dài',
    'fos_user.group.short' => '[-Inf, Inf] Tên quá ngắn',
    'fos_user.new_password.blank' => 'Hãy nhập mật khẩu mới',
    'fos_user.new_password.short' => '[-Inf, Inf] Mật khẩu mới là quá ngắn',
    'fos_user.password.blank' => 'Vui lòng nhập mật khẩu',
    'fos_user.password.mismatch' => 'Các mật khẩu nhập không khớp',
    'fos_user.password.short' => '[-Inf, Inf] Mật khẩu quá ngắn',
    'fos_user.username.already_used' => 'Tên người dùng đã được sử dụng',
    'fos_user.username.blank' => 'Xin vui lòng nhập tên người dùng',
    'fos_user.username.long' => '[-Inf, Inf] Tên người dùng quá dài',
    'fos_user.username.short' => '[-Inf, Inf] Các tên tài khoản quá ngắn',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Có lỗi trong quá trình xác thực.',
    'Authentication credentials could not be found.' => 'Thông tin dùng để xác thực không tìm thấy.',
    'Authentication request could not be processed due to a system problem.' => 'Yêu cầu xác thực không thể thực hiện do lỗi của hệ thống.',
    'Invalid credentials.' => 'Thông tin dùng để xác thực không hợp lệ.',
    'Cookie has already been used by someone else.' => 'Cookie đã được dùng bởi người dùng khác.',
    'Not privileged to request the resource.' => 'Không được phép yêu cầu tài nguyên.',
    'Invalid CSRF token.' => 'Mã CSRF không hợp lệ.',
    'Digest nonce has expired.' => 'Mã dùng một lần đã hết hạn.',
    'No authentication provider found to support the authentication token.' => 'Không tìm thấy nhà cung cấp dịch vụ xác thực nào cho mã xác thực mà bạn sử dụng.',
    'No session available, it either timed out or cookies are not enabled.' => 'Không tìm thấy phiên làm việc. Phiên làm việc hoặc cookie có thể bị tắt.',
    'No token could be found.' => 'Không tìm thấy mã token.',
    'Username could not be found.' => 'Không tìm thấy tên người dùng username.',
    'Account has expired.' => 'Tài khoản đã hết hạn.',
    'Credentials have expired.' => 'Thông tin xác thực đã hết hạn.',
    'Account is disabled.' => 'Tài khoản bị tạm ngừng.',
    'Account is locked.' => 'Tài khoản bị khóa.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Nhóm cập nhật',
    'group.flash.created' => 'Nhóm đã được khởi tạo',
    'group.flash.deleted' => 'Nhóm này đã bị xóa',
    'group.flash.updated' => 'Nhóm đã được cập nhật',
    'group.new.submit' => 'Tạo nhóm',
    'group.show.name' => 'Tên nhóm',
    'security.login.password' => 'Mật khẩu:',
    'security.login.remember_me' => 'Ghi nhớ thông tin của tôi',
    'security.login.submit' => 'Đăng nhập',
    'security.login.username' => 'Tên đăng nhập:',
    'profile.edit.submit' => 'Cập nhật',
    'profile.flash.updated' => 'Hồ sơ cá nhân đã được cập nhật',
    'profile.show.email' => 'Email',
    'profile.show.username' => 'Tên đăng nhập',
    'change_password.flash.success' => 'Mật khẩu đã được thay đổi',
    'change_password.submit' => 'Thay đổi mật khẩu',
    'registration.back' => 'Quay lại',
    'registration.check_email' => 'Một email đã được gửi đến %email%. Nó có chứa một liên kết kích hoạt bạn phải bấm vào để kích hoạt tài khoản của bạn.',
    'registration.confirmed' => 'Chúc mừng %username%, tài khoản của bạn đã được kích hoạt.',
    'registration.email.message' => 'Xin chào %username%! Để hoàn tất kích hoạt tài khoản của bạn - vui lòng truy cập %confirmationUrl%. Cám ơn.',
    'registration.email.subject' => 'Chào mừng %username%!',
    'registration.flash.user_created' => 'Người sử dụng đã được khởi tạo',
    'registration.submit' => 'Đăng ký',
    'resetting.check_email' => 'Một email đã được gửi đến %email%. Có một liên kết bạn phải bấm vào để thiết lập lại mật khẩu của bạn.',
    'resetting.email.message' => 'Xin chào %username%! Để thiết lập lại mật khẩu của bạn - vui lòng truy cập %confirmationUrl% Kính trọng, mỗi thành viên.',
    'resetting.email.subject' => 'Thiết lập lại mật khẩu',
    'resetting.flash.success' => 'Các mật khẩu đã được thiết lập lại thành công',
    'resetting.password_already_requested' => 'Mật khẩu cho người dùng này đã được yêu cầu trong vòng 24 giờ qua.',
    'resetting.request.invalid_username' => 'Tên người dùng hoặc địa chỉ email "%username%" không tồn tại.',
    'resetting.request.submit' => 'Thiết lập lại mật khẩu',
    'resetting.request.username' => 'Tên đăng nhập hoặc địa chỉ email:',
    'resetting.reset.submit' => 'Thay đổi mật khẩu',
    'layout.logged_in_as' => 'Đăng nhập như %username%',
    'layout.login' => 'Đăng nhập',
    'layout.logout' => 'Đăng xuất',
    'layout.register' => 'Đăng ký',
    'form.current_password' => 'Mật khẩu hiện tại:',
    'form.email' => 'Email:',
    'form.group_name' => 'Tên nhóm:',
    'form.new_password' => 'Mật khẩu mới:',
    'form.new_password_confirmation' => 'Xác minh:',
    'form.password' => 'Mật khẩu:',
    'form.password_confirmation' => 'Xác minh:',
    'form.username' => 'Tên đăng nhập:',
  ),
));

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
$catalogue->addFallbackCatalogue($cataloguePl);

return $catalogue;
