@extends('layouts.master')
@section('title', 'Dashboard')
@section('css')
<!-- DATA TABLES -->
<link href="{{URL::asset('plugins/datatables/dataTables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
<!-- Select2 -->
<link href="{{URL::asset('plugins/select2/select2.min.css" rel="stylesheet')}}" type="text/css" />
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
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
                    <h3 class="box-title">Posts / Article</h3>
                    <!-- Trigger the modal with a button -->
                    <button type="button" class="btn btn-info pull-right" data-toggle="modal" data-target="#posts"> Add Posts / Articles</button>

                    <!-- Modal Posts/Articles -->
                    <div class="modal fade" id="posts" role="dialog">
                        <div class="modal-dialog modal-lg">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Add Posts / Articles</h4>
                                </div>
                                <div class="modal-body">
                                    <form action="{{action('PostsArticlesController@addPostsArticles')}}" method="post" enctype="multipart/form-data">
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label>Category</label>
                                                <select class="form-control" name="category" id="list-category">
                                                </select>
                                            </div><!-- /.form-group -->
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" name="title" class="form-control"/>
                                            </div>
                                            <div class="form-group">
                                                <label>Post Date</label>
                                                <input type="text" class="form-control" name="post_date" id="datepicker"/>
                                            </div>
                                            <div class="form-group">
                                                <label>Slug</label>
                                                <input type="text" name="slug" class="form-control"/>
                                            </div>
                                            <div class="form-group">
                                                <label>Short Description</label>
                                                <textarea class="form-control" name="short_description"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Content</label>
                                                <textarea class="form-control" name="content"></textarea>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Image</label>
                                                        <input type="file" id="file" class="form-control"/>
                                                    </div>
                                                    <p>Max size 1600pixel</p>
                                                    <img class="img-blog img-responsive" id="view-large">
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Thumbnail</label>
                                                        <input type="file" id="thumbnail" class="form-control"/>
                                                    </div>
                                                    <p>Max size 1600pixel</p>
                                                    <img class="img-thumbnail img-responsive" id="view">
                                                </div>
                                            </div>
                                            <input type="hidden" name="_token" value="<?= csrf_token(); ?>"/>
                                            <input type="hidden" name="image" id="thumb"/>
                                            <input type="hidden" name="image-large" id="large"/>
                                            <button type="reset" class="btn btn-warning">Reset</button>
                                            <button type="submit" class="btn btn-success pull-right">Save</button>
                                        </div>
                                    </form>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Category</th>
                                <th>Title</th>
                                <th>Post Date</th>
                                <th>Slug</th>
                                <th>Short Description</th>
                                <th>Content</th>
                                <th>Thumbnail</th>
                                <th>Image</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($dashboard as $row) {
                                ?>
                                <tr>
                                    <td><?php echo $row->name; ?></td>
                                    <td><?php echo $row->title; ?></td>
                                    <td><?php echo $row->post_date; ?></td>
                                    <td><?php echo $row->slug; ?></td>
                                    <td><?php echo $row->short_description; ?></td>
                                    <td><?php echo $row->content; ?></td>
                                    <td><img class="img-thumbnail img-responsive" src="<?php echo $row->thumbnail; ?>"></td>
                                    <td><img class="img-blog img-responsive" src="<?php echo $row->image; ?>"></td>
                                    <td><button class="btn btn-warning fa fa-edit edit" data-id="{{$row->id}}"></button></td>
                                    <td><a href="<?php echo 'delete/' . $row->id; ?>"><button type="submit" class="btn btn-danger fa fa-eraser"></button></a></td>
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

<!-- Modal Posts/Articles -->
                    <div class="modal fade" id="edit-modal" role="dialog">
                        <div class="modal-dialog modal-lg">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Edit Posts / Articles</h4>
                                </div>
                                <div class="modal-body">
                                    <form action="{{action('PostsArticlesController@updatePosts')}}" method="post" enctype="multipart/form-data">
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label>Category</label>
                                                <select class="form-control" name="category" id="edit-category">
                                                </select>
                                            </div><!-- /.form-group -->
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" name="title" class="form-control" id="edit-title"/>
                                            </div>
                                            <div class="form-group">
                                                <label>Post Date</label>
                                                <input type="text" class="form-control" name="post_date" id="edit-datepicker" value="2016/12/07"/>
                                            </div>
                                            <div class="form-group">
                                                <label>Slug</label>
                                                <input type="text" name="slug" class="form-control" id="edit-slug"/>
                                            </div>
                                            <div class="form-group">
                                                <label>Short Description</label>
                                                <textarea class="form-control" name="short_description" id="edit-short_description"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Content</label>
                                                <textarea class="form-control" name="content" id="edit-content"></textarea>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Image</label>
                                                        <input type="file" id="edit-file" class="form-control"/>
                                                    </div>
                                                    <p>Max size 1600pixel</p>
                                                    <img class="img-blog img-responsive" id="edit-large">
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Thumbnail</label>
                                                        <input type="file" id="edit-thumbnail" class="form-control"/>
                                                    </div>
                                                    <p>Max size 1600pixel</p>
                                                    <img class="img-thumbnail img-responsive" id="edit-thumb">
                                                </div>
                                            </div>
                                            <input type="hidden" name="_token" value="<?= csrf_token(); ?>"/>
                                            <input type="text" name="image" id="update-thumb"/>
                                            <input type="text" name="image-large" id="update-large"/>
                                            <input type="hidden" name="id" id="edit-id"/>
                                            <button type="reset" class="btn btn-warning">Reset</button>
                                            <button type="submit" class="btn btn-success pull-right">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection
@section ('js')
<!-- DATA TABES SCRIPT -->
<script src="{{URL::asset('plugins/datatables/jquery.dataTables.min.js')}}" type="text/javascript"></script>
<!-- Select2 -->
<script src="{{URL::asset('plugins/select2/select2.full.min.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('plugins/jQueryUI/jquery-ui.js')}}" type="text/javascript"></script>
<!-- page script -->
<script type="text/javascript">
$(function() {
//Initialize Select2 Elements
    $(".select2").select2();
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

    $("#datepicker").datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: "yy-mm-dd"});
    // var date = $("#datepicker").datepicker({dateFormat: 'yy/mm/dd'}).val();
});

function AL(id) {
            return document.getElementById(id);
        } // Get el by ID helper function

          function readFile(view, event) {
            if (event.target.files && event.target.files[0]) {
                var FR = new FileReader();
                FR.onload = function(e) {
                    AL(view).src = e.target.result;
                };
                FR.readAsDataURL(event.target.files[0]);
            }
        }
        AL("file").addEventListener("change", readFile.bind(null, 'view-large'), false);
        AL("thumbnail").addEventListener("change", readFile.bind(null, 'view'), false);

        File.prototype.convertToBase64 = function(callback){
            var reader = new FileReader();
            reader.onload = function(e) {
                 callback(e.target.result)
            };
            reader.onerror = function(e) {
                 callback(null);
            };        
            reader.readAsDataURL(this);
    };
        $("#thumbnail").on('change', function() {
            var selectedFile = this.files[0];
            selectedFile.convertToBase64(function(base64) {
                // disini, kita udah mendapatkan value base64
                // tinggal kita assign ke element yang diinginkan
                $('#thumb').val(base64);
            });
        });
        
        $("#file").on('change', function() {
            var selectedFile = this.files[0];
            selectedFile.convertToBase64(function(base64) {
                $('#large').val(base64);
            });
        });
        
        $("#edit-thumbnail").on('change', function() {
            var selectedFile = this.files[0];
            selectedFile.convertToBase64(function(base64) {
                $('#update-thumb').val(base64);
                $('#edit-thumb').attr('src', base64);
            });
        });
        $("#edit-file").on('change', function() {
            var selectedFile = this.files[0];
            selectedFile.convertToBase64(function(base64) {
                $('#update-large').val(base64);
                $('#edit-large').attr('src', base64);
            });
        });
        
        $(document).on('click','.edit',function(){
            $('#edit-modal').modal();
            console.log($(this).parent().parent().children());
            var target = $(this).parent().parent().children(); 
            // $('#edit-category').val(target[0].textContent);
            console.log($('#edit-category').children());
            var categories = $('#edit-category').children();
            var selectedCategory = target[0].textContent;
            var foundCategory;
            for(var i in categories) {
                if(categories[i].text === selectedCategory) {
                    foundCategory = categories[i].value;
                }
            }
            $('#edit-category').val(foundCategory);
            $('#edit-title').val(target[1].textContent);
            $('#edit-datepicker').val(target[2].textContent);
            $("#edit-datepicker").datepicker({
                changeMonth: true,
                changeYear: true,
                dateFormat: "yy-mm-dd"});
            $('#edit-slug').val(target[3].textContent);
            $('#edit-short_description').val(target[4].textContent);
            $('#edit-content').val(target[5].textContent);
            var thumb = $(target[6]).children();
            $('#update-thumb').val(thumb[0].src);
            $('#edit-thumb').attr('src', thumb[0].src);
            var image = $(target[7]).children();
            $('#update-large').val(image[0].src);
            $('#edit-large').attr('src', image[0].src);
            $('#edit-id').val($(this).data('id'));
        });

        $.ajax({
            url: 'http://localhost:8000/api/dashboard',
            type: 'GET',
            success: function(data){
                for(var i in data.result) {
                    $('#list-category').append('<option value="'+ data.result[i].category_id +'">'+ data.result[i].name +'</option>');
                    $('#edit-category').append('<option value="'+ data.result[i].category_id +'">'+ data.result[i].name +'</option>');
                }
            }
        });
        
</script>
@endsection
</body>
</html>
