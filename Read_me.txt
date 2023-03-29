
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
	Setup cơ sở dữ liệu

	Mở thự mục File_SQL. Tiếp sau đó chúng ta cần import file CSDL vao phpmyadmin để chạy được web.

+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
Các chức năng hỗ trơ của trang web Shoes Shop
++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

1.	Chức năng login
	Ngùi dùng cần đăng nhập với username và password đã được tạo trước. 
	Tài khoản: khoa4123 , password: khoaABC123@ với quyền sở hữu là admin.

-----------------------------------------------------------------------------------------------------------------------

2.	Chức năng logout
	Nguời dùng bấm logout sẽ trở về trang home.
-----------------------------------------------------------------------------------------------------------------------

3.	Chức năng  register
	Người dùng sẽ đăng ký với username, passwod, confirm password, email. 
	Thông tin sẽ được gửi về hệ thống. Khi người dùng mới sẽ được cấp quyền là User.
-----------------------------------------------------------------------------------------------------------------------

4.	Chức nang search trên header
	Người dùng sẽ tìm kiếm sản phẩm mình muốn tìm trên thanh header. Sao khi bấm tìm
	sẽ hiển thị ra sản phẩm mà bạn muốn tìm.

-----------------------------------------------------------------------------------------------------------------------

5.	Chức năng account	
	Hiển thị thông tin profile. Nếu người dùng chưa có profile thì sẽ nhập full name, số 
	điện thoại, địa chỉ và ảnh làm đại diện. Khi đã có thông tin profile thì lần vào sao sẽ
	hiển thị ra các thông tin đó

-----------------------------------------------------------------------------------------------------------------------

6.	Chức năng change password
	Người dùng muốn đổi mật khẩu thì cần phải nhập mật khẩu cũ, mật khẩu mới và confirm pasword. 
	Nếu mật khẩu cũ chính xác thì cho phép đổi, nếu không thì sẽ hiện lỗi ra màn hình.

-----------------------------------------------------------------------------------------------------------------------

7.	Chức năng forget password
	Nếu người dùng quên mật khẩu thì cần nhập username, email, mật khẩu mới và confirm password. 
	Nếu người dùng nhập các thông tin username và email sai thì sẽ báo lỗi không tìm được và băt
	nhập lại username và email.

-----------------------------------------------------------------------------------------------------------------------

8.	Chức năng thêm product
	Admin muốn thêm sản phẩm thì cần nhập tên sản phẩm, giá, khuyến mãi, nhãn hiệu và 2 tấm hình để hiển thị ra home. 
	Lúc này thông tin sản phẩm sẽ được lưu trên cơ sơ dữ liệu. Sau thì thêm thành công thì sẽ có cờ báo thành công. 
	Lúc này sản phẩm sẽ hiển thị ở trang home.

-----------------------------------------------------------------------------------------------------------------------

9.	Chức năng thêm product list
	Admin muốn xem danh sách sản phẩm đã được lưu trên cơ sở dữ liệu sẽ vào đây để xem. Chỉ có admin mới có quyền
	dô trang này. Nếu admin muốn xóa sản phẩm thì ngoài trang home sẽ không hiển thị nữa.
