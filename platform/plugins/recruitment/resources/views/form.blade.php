<form action="{{route('public.send.recruitment')}}" enctype="multipart/form-data" method="post">

    <div class="poup--title font-helve-light font18">
        <p>Bạn đang ứng tuyển vào vị trí: </p>
        <h2 class=" font-helve font20">
            Chuyên Viên Kỹ Thuật Cấp Cao ERP
        </h2>
    </div>

    <div class="poup--form font-helve  ">
        <p class=" font-helve-light font16">
            Vui lòng bổ sung các thông tin cá nhân của bạn để ứng tuyển
        </p>
        <input type="text" name="name" class="form-control" placeholder="Họ Tên" />
        <input type="text" name="email" class="form-control" placeholder="Email" />
        <input type="text" name="phone" class="form-control" placeholder="Số Điện Thoại " />
        <input type="text" name="address" class="form-control" placeholder="Địa chỉ " />

        <label class=" cv-upload" for="cv_upload">
            <span class="btn btn-primary Recruitment--cv">Đính kèm CV ứng
                tuyển</span>
        </label>
        <span id="file_path"></span>
        <input type="file" name="cv" required id="cv_upload"
            class="form-control-file d-none">
    </div>

    <div class=" Recruitment--buttom font-helve font18" for="cv_upload">
        {{-- <div class="form-group"> --}}
        
        {{-- </div> --}}
        <div class="font-helve font18">
            <button type="submit" value="Submit" class="btn btn-submint Recruitment--profession">ĐĂNG KÝ</button>
        </div>
    </div>

</form>