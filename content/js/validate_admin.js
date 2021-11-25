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
    discount:{
      required: true,
      min:0,
      max:90,
    }
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
    discount:{
      required: "Vui lòng điền ̀%",
      min:" % không được bé hơn 0",
      max:"không được quá 90%",
    }
  },
});
$("#form_insert_category").validate({
  rules: {
    category_name: {
      required: true,
      minlength: 3,
    },
  },
  messages: {
    category_name: {
      required: "Vui lòng điền tên loại",
      minlength: "Hãy nhập ít nhất 3 ký tự",
    },
  },
});
$("#form_edit_category").validate({
  rules: {
    category_name: {
      required: true,
      minlength: 3,
    },
  },
  messages: {
    category_name: {
      required: "Vui lòng điền tên loại",
      minlength: "Hãy nhập ít nhất 3 ký tự",
    },
  },
});
$("#form_insert_slider").validate({
  rules: {
    slide_image: {
      required: true,
      extension: "jpg|jpeg|png|ico|bmp",
    },
  },
  messages: {
    slide_image: {
      required: "Hãy chọn ảnh",
      extension: "Vui lòng chọn đúng định dạng",
    },
  },
});
$("#form_insert_logor").validate({
  rules: {
    logo_image: {
      required: true,
      extension: "jpg|jpeg|png|ico|bmp",
    },
  },
  messages: {
    logo_image: {
      required: "Hãy chọn ảnh",
      extension: "Vui lòng chọn đúng định dạng",
    },
  },
});
$("#form_insert_extra").validate({
  rules: {
    extra_name: {
      required: true,
      minlength: 3,
    },
    extra_price: {
      required: true,
      minlength: 3,
    },
    category_name: {
      required: true,
      minlength: 1,
    },
  },
  messages: {
    extra_name: {
      required: "Vui lòng điền tên topping",
      minlength: "Hãy nhập ít nhất 3 ký tự",
    },
    extra_price: {
      required: "Vui lòng điền thông tin",
      minlength: "Giá phải hơn 1.000đ",
    },
    category_name:{
      required: "Vui lòng chọn loại",
      minlength: "Vui lòng chọn loại",
    },
  },
});$("#form_edit_extra").validate({
  rules: {
    extra_name: {
      required: true,
      minlength: 3,
    },
    extra_price: {
      required: true,
      minlength: 3,
    },
    category_name: {
      required: true,
      minlength: 1,
    },
  },
  messages: {
    extra_name: {
      required: "Vui lòng điền tên topping",
      minlength: "Hãy nhập ít nhất 3 ký tự",
    },
    extra_price: {
      required: "Vui lòng điền thông tin",
      minlength: "Giá phải hơn 1.000đ",
    },
    category_name:{
      required: "Vui lòng chọn loại",
      minlength: "Vui lòng chọn loại",
    },
  },
});
$("#form_insert_contact").validate({
  rules: {
    contact_name: {
      required: true,
      minlength: 3,
    },
    contact_phone: {
      required: true,
      minlength: 9,
      maxlength: 10,
    },
    contact_email: {
      required: true,
      email:true,
      minlength: 3,
    },
    contact_address: {
      required: true,
      minlength: 3,
    },
  },
  messages: {
    contact_name: {
      required: "Vui lòng điền tên",
      minlength: "Hãy nhập ít nhất 3 ký tự",
    },
    contact_phone: {
      required: "Vui lòng điền số điện thoại",
      minlength: "Số điện thoại không hợp lệ",
      maxlength: "Số điện thoại không hợp lệ",
    },
    contact_email: {
      required: "Vui lòng điền email",
      email:"Vui lòng điền đúng email",
      minlength: "Hãy nhập ít nhất 3 ký tự",
    },
    contact_address: {
      required: "Vui lòng điền địa chỉ",
      minlength: "Hãy nhập ít nhất 3 ký tự",
    },   
  },
});
$("#form_edit_contact").validate({
  rules: {
    contact_name: {
      required: true,
      minlength: 3,
    },
    contact_phone: {
      required: true,
      minlength: 9,
      maxlength: 10,
    },
    contact_email: {
      required: true,
      email:true,
      minlength: 3,
    },
    contact_address: {
      required: true,
      minlength: 3,
    },
  },
  messages: {
    contact_name: {
      required: "Vui lòng điền tên",
      minlength: "Hãy nhập ít nhất 3 ký tự",
    },
    contact_phone: {
      required: "Vui lòng điền số điện thoại",
      minlength: "Số điện thoại không hợp lệ",
      maxlength: "Số điện thoại không hợp lệ",
    },
    contact_email: {
      required: "Vui lòng điền email",
      email:"Vui lòng điền đúng email",
      minlength: "Hãy nhập ít nhất 3 ký tự",
    },
    contact_address: {
      required: "Vui lòng điền địa chỉ",
      minlength: "Hãy nhập ít nhất 3 ký tự",
    },   
  },
});


