@extends('layouts.admin')
@section('title')
    <title>Trang chủ</title>
@endsection
@section('content')
    <div class="content-wrapper">
     @include('partials.content-header'
    //  , ['$name' => 'category', 'key' => 'add']
     )

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <form>
                            <div class="form-group">
                                <label>Tên Danh Mục</label>
                                <input type="email" class="form-control" placeholder="nhập tên danh mục">

                            </div>
                            <div class="form-group">
                                <label>chọn danh mục cha</label><br>
                                <select class="form-control">
                                    <option value="0">chọn danh mục cha</option>
                                    <option >One</option>
                                    <option>Two</option>
                                    <option >Three</option>
                                </select><br>

                                <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>


                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
