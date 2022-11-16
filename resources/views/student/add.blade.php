<div class="modal fade" id="modal-add">
    <div class="modal-dialog">
        <div class="modal-content">

            <form action="" data-url="{{ route('student.store') }}" id="form-add" method="POST" role="form">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Add Student</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="hoten" id="hoten-add" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="">Sex</label>
                        <select name="gioitinh" id="gioitinh-add" class="form-control">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Date</label>
                        <input type="date" class="form-control" name="ngaysinh" id="ngaysinh-add" value="" title="">
                    </div>
                    <div class="form-group">
                        <label for="">Phone Number</label>
                        <input type="number" class="form-control" name="sdt" id="sdt-add" placeholder="Enter Phone Number">
                    </div>
                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" class="form-control" name="diachi" id="diachi-add" value="" placeholder="Enter Address">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
