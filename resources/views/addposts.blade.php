<form action="{{action('PostsArticlesController@addPostsArticles')}}" method="post" enctype="multipart/form-data">
    <div class="box-body">
        <div class="form-group">
            <label>Minimal</label>
            <select class="form-control" name="category">
                <?php
                foreach ($addposts as $row){
                    
                }
                ?>
                <option value="1">Alabama</option>
                <option value="2">Alaska</option>
                <option value="3">California</option>
                <option value="4">Delaware</option>
                <option value="5">Tennessee</option>
                <option value="6">Texas</option>
                <option value="7">Washington</option>
            </select>
        </div><!-- /.form-group -->
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control"/>
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
        <div class="form-group">
            <label>Image</label>
            <input type="file" name="image" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Thumbnail</label>
            <input type="file" name="thumbnail" class="form-control"/>
        </div>
        <input type="hidden" name="_token" value="<?= csrf_token(); ?>"/>
        <button type="reset" class="btn btn-warning" data-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-success pull-right" data-dismiss="modal">Save</button>
    </div>
</form>