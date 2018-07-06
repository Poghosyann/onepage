<div class="container">

    <div class="add_new">
        {!! Html::link(route('servicesAdd'),'Create a new Service') !!}
    </div>
    @if($services)
        <table class="table table-hover table-striped table-bordered">
            <thead>
            <tr>
                <th>№</th>
                <th>Name</th>
                <th>Description</th>
                <th>Icon</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($services as $k => $service)
                <tr>
                    <td>{{$service->id}}</td>
                    <td class="add_new_table">  {!! Html::link(route('servicesEdit',['service'=>$service->id]),$service->name,['alt'=>$service->name]) !!}  </td>
                    <td>{{$service->text}}</td>
                    <td>{{ $service->icon }}</td>
                    <td>

                        {!! Form::open(['url' => route('servicesEdit',['service'=>$service->id]),'class'=>'form-horizontal','method'=>'POST']) !!}
                        {{ method_field('DELETE') }}
                        {!! Form::button('Delete', ['class' => 'btn btn-danger','type'=>'submit']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    @endif

</div>