<?
Header( "HTTP/1.1 301 Moved Permanently" ); //không có dòng này thì sẽ là dạng Redirect 302 (chuyển tạm thời, người dùng và robot được chuyển hướng, nhưng không truyền giá trị cho trang mới).
Header( "Location: http://dongthapseo.com" );
?>