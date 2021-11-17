$("#form_insert_user").validate({
  rules: {
    username: {
      required: true,
      minlength: 6,
      maxlength: 20,
      remote: "check_user.php?form_insert",
    },
    fullname: {
      required: true,
      minlength: 8,
      maxlength: 50,
    },
    email: {
      required: false,
      email: true,
      remote: "check_user.php?form_insert",
    },
    phoneNumber: {
      required: true,
      minlength: 9,
      maxlength: 10,
    },
    address: {
      required: false,
      maxlength: 225,
    },
    password: {
      required: true,
      minlength: 8,
    },
    repassword: {
      required: true,
      equalTo: "#password",
      minlength: 8,
    },

  },
  messages: {
    username: {
      required: "Vui lòng điền tên đăng nhập",
      minlength: "Hãy nhập tối thiểu 6 ký tự",
      maxlength: "Tên đăng nhập không quá 20 ký tự",
      remote: "Tên đăng nhập đã tồn tại",
    },
    fullname: {
      required: "Vui lòng điền tên đăng nhập",
      minlength: "Hãy nhập tối thiểu 6 ký tự",
      maxlength: "Tên đăng nhập không quá 50 ký tự",
    },
    email: {
      required: "Vui lòng điền email",
      email: "Email không hợp lệ ",
      remote: "Email đã tồn tại",
    },
    phoneNumber: {
      required: "Vui lòng điền số điện thoại",
      minlength: "Số điện thoại không hợp lệ",
      maxlength: "Số điện thoại không hợp lệ",
    },
    address: {
      required: false,
      maxlength: "Không quá 225 kí tự",
    },
    password: {
      required: "Vui lòng điền mật khẩu",
      minlength: "Hãy nhập ít nhất 8 ký tự",
    },
    repassword: {
      required: "Vui lòng điền mật khẩu",
      equalTo: "Mật khẩu không trùng nhau",
      minlength: "Hãy nhập ít nhất 8 ký tự",
    },

  },
});
var user_id = $("input[name='user_id']").val();
$("#form_edit_user").validate({
  rules: {
    fullname: {
      required: true,
      minlength: 8,
      maxlength: 50,
    },
    email: {
      required: false,
      email: true,
      remote: "check_user.php?form_edit&id=" + user_id,
    },
    phoneNumber: {
      required: true,
      minlength: 9,
      maxlength: 10,
    },
    address: {
      required: false,
      maxlength: 225,
    },
    password: {
      required: true,
      minlength: 8,
    },
    repassword: {
      required: true,
      equalTo: "#password",
      minlength: 8,
    },
 
  },
  messages: {
    username: {
      required: "Vui lòng điền tên đăng nhập",
      minlength: "Hãy nhập tối thiểu 6 ký tự",
      maxlength: "Tên đăng nhập không quá 20 ký tự",
      remote: "Tên đăng nhập đã tồn tại",
    },
    fullname: {
      required: "Vui lòng điền tên đăng nhập",
      minlength: "Hãy nhập tối thiểu 6 ký tự",
      maxlength: "Tên đăng nhập không quá 50 ký tự",
    },
    email: {
      required: "Vui lòng điền email",
      email: "Email không hợp lệ ",
      remote: "Email đã tồn tại",
    },
    phoneNumber: {
      required: "Vui lòng điền số điện thoại",
      minlength: "Số điện thoại không hợp lệ",
      maxlength: "Số điện thoại không hợp lệ",
    },
    address: {
      required: false,
      maxlength: "Không quá 225 kí tự",
    },
    password: {
      required: "Vui lòng điền mật khẩu",
      minlength: "Hãy nhập ít nhất 8 ký tự",
    },
    repassword: {
      required: "Vui lòng điền mật khẩu",
      equalTo: "Mật khẩu không trùng nhau",
      minlength: "Hãy nhập ít nhất 8 ký tự",
    },
  },
});
$("#form_insert_product").validate({
  rules: {
    product_name: {
      required: true,
      minlength: 3,
    },
    option_name: {
      required: true,
      minlength: 3,
    },
    option_price: {
      required: true,
      minlength: 10,
    },
    image: {
      required: true,
      extension: "jpg|jpeg|png|ico|bmp",
    },
  },
  messages: {
    product_name: {
      required: "Vui lòng điền tên món",
      minlength: "Hãy nhập ít nhất 3 ký tự",
    },
    option_name: {
      required: "Vui lòng option",
      minlength: "Hãy nhập ít nhất 3 ký tự",
    },
    option_price: {
      required: "Vui lòng điền thông tin",
      minlength: "Giá phải hơn 10.000đ",
    },
    image: {
      required: "Hãy chọn ảnh",
      extension: "Vui lòng chọn đúng định dạng",
    },
  },
});