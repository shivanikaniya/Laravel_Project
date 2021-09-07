@extends('admin.master');
@section('content')
<h1 style="text-align:center;">Show banners</h1>
<div class="container" style="margin-left:300px">
    <button class="btn btn-success mb-3" onclick="window.location='{{ url("/banner")}}'">Add banner</button>
    <table class="table table-striped">
        <tr>
           <th>ID</th>
            <th>Banner_name</th>
            
            <th>url</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        <tr>
        @foreach($banner as $banner)
            <tr>
                <td>{{$banner['id']}}</td>
                <td>{{$banner['banner_name']}}</td>
                <td>{{$banner['url']}}</td>
            <td><img src='http://localhost/MyImages/{{$banner->banner_image}}' style='width:100px;height:100px' />
               
            </td>
           
            <td><button class="btn btn-danger"><a onclick="return myFunction();" href={{"small_delete/".$banner['id']}} style=" text-decoration:none;color:white;">Delete</a></button>
                <button class="btn btn-warning"> <a href={{"small_edit/".$banner['id']}} style=" text-decoration:none;color:white;">Edit</a></button>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection