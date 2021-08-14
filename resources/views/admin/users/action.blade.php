<div class="d-inline-flex">
    <a  href="{{route('admin.users.edit',$id)}}"><button class="btn btn-warning">Edit</button></a>
    <a onclick=" $('#delete-form-{{$id}}').submit();" ><div class="btn btn-danger">Delete</div></a>
    {!! Form::open(['route'=>['admin.users.destroy',$id],'method'=>'DELETE','id'=>'delete-form-'.$id]) !!}
    {!! Form::close() !!}
</div>
