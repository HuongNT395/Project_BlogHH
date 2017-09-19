@include('until/logged/head')
<div class="container-fluid" style="margin-top: 20px">
    <form  method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
        <span style="font-size: 20px; font-weight: 600">Select a topic:</span>
        <select name="category_id" style="border: none">
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
        <input type="submit" name="btn_submit" value="Thêm bài viết" style="float: right; font-size: 16px; margin-right: 150px; color: blue; border: none; background: none">
        <table>
            <tr>
                <td nowrap="nowrap"></td>
                <td><h3>Title</h3></td>
            </tr>
            <tr>
                <td nowrap="nowrap"></td>
                <td><input type="text" id="title" name="title" placeholder="add a title"></td>
            </tr>
            <tr>
                <td nowrap="nowrap"></td>
                <td><h3>Summary</h3></td>
            </tr>
            <tr>
                <td nowrap="nowrap"></td>
                <td><input type="text" id="summary" name="summary" placeholder="add summary" ></td>
            </tr>
            <tr>
                <td nowrap="nowrap"></td>
                <td><h3></h3></td>
            </tr>
            <tr>
                <td nowrap="nowrap"></td>
                <td><input type="file" name="image" id="image"></td>
            </tr>
            <tr>
                <td nowrap="nowrap"></td>
                <td><h3>Content</h3></td>
            </tr>
            <tr>
                <td nowrap="nowrap"></td>
                <td><textarea name="post_content" id="post_content" rows="10" cols="200"></textarea></td>
            </tr>
        </table>
    </form>
</div>
<script>
    // Thay thế <textarea id="post_content"> với CKEditor
    CKEDITOR.replace( 'post_content' );// tham số là biến name của textarea
</script>