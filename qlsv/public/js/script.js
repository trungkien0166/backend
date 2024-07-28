$('button.destroy').click(function (e) {
	e.preventDefault();
	var dataUrl = $(this).attr('data-href');
	$('#exampleModal a').attr('href', dataUrl);
});

// use jquery validation
$(".form-student-create").validate({
    rules: {
      // simple rule, converted to {required:true}
      name:{
             required : true,
              maxlength :50,
              regex: /^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+$/i

      },
      birthday :{
        required :true,
              },
      gender:{
             required:true,
              },

    },
    messages : {
      name: {
         required :'Vui lòng nhập nhập username ',
         maxlength :'vui lòng không nhập user dưới 10 kí tự ',
         regex : 'vui lòng nhập đúng định dạng họ và tên '
    },
    birthday:{
      required : 'vui lòng  chọn ngày sinh',
    },
    gender:{
required:'vui lòng chọn giới tính',

    },
      
}
  });

  $.validator.addMethod(
    "regex",
    function(value, element, regexp) {
      var re = new RegExp(regexp);
      return this.optional(element) || re.test(value);
    },
    "Please check your input."
  );