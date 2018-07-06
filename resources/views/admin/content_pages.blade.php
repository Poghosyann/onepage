<div class="container">

    <div class="add_new">
        {!! Html::link(route('pagesAdd'),'Create a new page') !!}
    </div>

    @if($pages)

        <table class="table table-hover table-striped table-bordered">
            <thead>
            <tr>
                <th>№</th>
                <th>Image</th>
                <th>Name</th>
                <th>Alias</th>
                <th>Description</th>
                <th>Created</th>

                <th>Delete</th>
            </tr>
            </thead>
            <tbody>

            @foreach($pages as $k => $page)

                <tr>

                    <td>{{ $page->id }}</td>
                    <td>{!! Html::image('assets/images/'.$page->images) !!}</td>
                    <td class="add_new_table">{!! Html::link(route('pagesEdit',['page'=>$page->id]),$page->name,['alt'=>$page->name]) !!}</td>
                    <td>{{ $page->alias }}</td>
                    <td>{{ $page->text }}</td>
                    <td>{{ $page->created_at }}</td>

                    <td>
                        {!! Form::open(['url'=>route('pagesEdit',['page'=>$page->id]), 'class'=>'form-horizontal','method' => 'POST']) !!}

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