const recruitment = {
    submitForm: function () {
        console.log("i here");

        try {
            $("#recruitment_form").validate({
                ignore: ".ignore",
                rules: {
                    name: {
                        required: true,
                    },
                    phone: {
                        required: true,
                        number: true,
                        minlength: 10,
                        maxlength: 10,
                    },
                    address: {
                        required: true,
                    },
                    email: {
                        required: true,
                        email: true,
                    },
                    cv: {
                        required: true,
                        // accept: "application/msword, application/pdf",
                    },
                },
                messages: {
                    name: "Vui lòng nhập họ tên",
                    address: "Vui lòng nhập địa chỉ",
                    phone: {
                        required: "Vui lòng nhập số điện thoại",
                        number: "Vui lòng chỉ nhập số",
                        minlength: "Vui lòng nhập số điện thoại",
                        maxlength: "Vui lòng nhập số điện thoại",
                    },
                    email: {
                        required: "Vui lòng nhập email",
                        email: "Email không đúng định dạng",
                    },
                    cv: {
                        required: "Vui lòng tải lên CV",
                        // accept: "CV phải có dạng word hoặc pdf",
                    },
                },
                errorPlacement: function (error, element) {
                    element.parents(".__group").find(".errorTxt").html(error);
                },
                submitHandler: function (form) {
                    // do other things for a valid form
                    form.submit();
                },
            });
        } catch (err) {
            console.log("Error: " + err.message);
        }
    },
    uploadCV: function () {
        $("#cv_upload").change(function (e) {
            const file = $("#cv_upload")[0].files[0] || null;

            if (file && file.name) {
                $("#file_path").text(file.name);
                return false;
            }
            $("#file_path").text("Đính kèm CV ứng tuyển");
        });
    },
};

$(document).ready(function () {
    recruitment.uploadCV();
    recruitment.submitForm();
});
