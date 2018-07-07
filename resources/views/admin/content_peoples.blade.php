<div class="container">

    @if($peoples)

        <div class="add_new">
            {!! Html::link(route('peopleAdd'),'Create a new people') !!}
        </div>

        <table class="table table-hover table-striped table-bordered">

            <thead>
            <tr>
                <th>№</th>
                <th>Name</th>
                <th>Position</th>
                <th>Image</th>
                <th>Created at</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>

            @foreach($peoples as $k => $people)

                <tr>

                    <td>{{ $people->id }}</td>
                    <td class="add_new_table">{!! Html::link(route('peopleEdit',['page'=>$people->id]),$people->name,['alt'=>$people->name]) !!}</td>
                    <td>{{ $people->position }}</td>
                    <td class="table_img">{!! Html::image('assets/images/team/'.$people->images) !!}</td>
                    <td>{{ $people->created_at }}</td>

                    <td>
                        {!! Form::open(['url'=>route('peopleEdit',['page'=>$people->id]), 'class'=>'form-horizontal','method' => 'POST']) !!}

                        {{ method_field('DELETE') }}
                        {!! Form::button('Delete',['class'=>'btn btn-danger','type'=>'submit']) !!}

                        {!! Form::close() !!}
                    </td>
                </tr>

            @endforeach


            </tbody>
        </table>

    @endif

</div>