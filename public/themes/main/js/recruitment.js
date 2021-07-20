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
                },
                messages: {
                    name: "Vui lòng nhập họ tên",
                    address: "Vui lòng chọn nhập địa chỉ",
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
        $("#cv_upload").change(function () {
            if ($(this)[0].files[0].size > 2097152) {
                alert("Chỉ cho phép upload file dưới 2MB!");
                this.value = "";
            } else {
                $("#file_path").append(
                    $("#cv_upload")
                        .val()
                        .replace(/C:\\fakepath\\/i, "")
                );
            }
        });
    },
};

$(document).ready(function () {
    recruitment.uploadCV();
    recruitment.submitForm();
});
