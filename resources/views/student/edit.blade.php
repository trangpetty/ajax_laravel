<div class="modal fade" id="modal-edit">
    <div class="modal-dialog">
        <div class="modal-content">

            <form action="" id="form-edit" method="post" role="form">
                <div class="modal-header">
                    <h4 class="modal-title">Update</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" id="hoten-edit" placeholder="Nhập vào họ tên">
                    </div>

                    <div class="form-group">
                        <label for="">Sex</label>
                        <select name="gender" id="gioitinh-edit" class="form-control" required="required">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Date</label>
                        <input type="date" name="" id="ngaysinh-edit" class="form-control" value="" required="required" title="">
                    </div>

                    <div class="form-group">
                        <label for="">Phone Number</label>
                        <input type="number" class="form-control" id="sdt-edit" placeholder="Nhập vào số điện thoại">
                    </div>

                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" class="form-control" id="diachi-edit" placeholder="Nhập vào địa chỉ">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Edit</button>

                </div>
            </form>
        </div>
    </div>
</div>
