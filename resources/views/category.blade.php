@extends('layouts.master')
@section('title', 'Dashboard')
@section('css')
<!-- DATA TABLES -->
<link href="plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
@endsection
@section('sidebar')
@parent
@endsection
@section('content')
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Category</h3>
                    <!-- Trigger the modal with a button -->
                    <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#category"> Add Category</button>

                    <!-- Modal Category -->
                    <div class="modal fade" id="category" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title center">Add Category</h4>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="{{action('CategoryController@addCategory')}}">
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" name="name" class="form-control"/>
                                            </div>
                                            <div class="form-group">
                                                <label>Slug</label>
                                                <input class="form-control" name="slug"/>
                                            </div>
                                            <input type="hidden" name="_token" value="<?= csrf_token(); ?>"/>
                                            <button type="reset" class="btn btn-warning">Reset</button>
                                            <button type="submit" class="btn btn-success pull-right" name="submit">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($category as $row) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row->name; ?></td>
                                        <td><?php echo $row->slug; ?></td>
                                        <td><button type="submit" class="btn btn-warning fa fa-edit edit" data-id="{{$row->category_id}}"></button></td>
                                        <td><a href="<?php echo 'delete_category/'.$row->category_id;?>"><button type="submit" class="btn btn-danger fa fa-eraser"></button></a></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
</section><!-- /.content -->
<!-- Modal Category -->
                    <div class="modal fade" id="edit-category" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title center">Edit Category</h4>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="{{action('CategoryController@updateCategory')}}">
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" name="name" class="form-control" id="edit-name"/>
                                            </div>
                                            <div class="form-group">
                                                <label>Slug</label>
                                                <input class="form-control" name="slug" id="edit-slug"/>
                                            </div>
                                            <input type="hidden" name="_token" value="<?= csrf_token(); ?>"/>
                                            <input type="hidden" name="id" id="edit-id"/>
                                            <button type="reset" class="btn btn-warning">Reset</button>
                                            <button type="submit" class="btn btn-success pull-right" name="submit">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
@endsection
@section ('js')
<!-- DATA TABES SCRIPT -->
<script src="plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>

<!-- page script -->
<script type="text/javascript">
$(function() {
    //Datatables
    $("#example1").DataTable();
    $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false
    });
});

$(document).on('click','.edit',function(){
    $('#edit-category').modal();
    console.log($(this).parent().parent().children());
    var target = $(this).parent().parent().children(); 
    $('#edit-name').val(target[0].textContent);
    $('#edit-slug').val(target[1].textContent);
    $('#edit-id').val($(this).data('id'));

});
</script>
@endsection
</body>
</html>
