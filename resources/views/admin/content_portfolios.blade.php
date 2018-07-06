<div class="container">

    @if($portfolios)

        <div class="add_new">
            {!! Html::link(route('portfolioAdd'),'Create a new portfolio') !!}
        </div>

        <table class="table table-hover table-striped table-bordered">

            <thead>
            <tr>
                <th>№</th>
                <th>Name</th>
                <th>Filter</th>
                <th>Image</th>
                <th>Created at</th>

                <th>Delete</th>
            </tr>
            </thead>
            <tbody>

            @foreach($portfolios as $k => $portfolio)

                <tr>

                    <td>{{ $portfolio->id }}</td>
                    <td class="add_new_table">{!! Html::link(route('portfolioEdit',['page'=>$portfolio->id]),$portfolio->name,['alt'=>$portfolio->name]) !!}</td>
                    <td>{{ $portfolio->filter }}</td>
                    <td class="table_img">{!! Html::image('assets/images/portfolio/'.$portfolio->images) !!}</td>
                    <td>{{ $portfolio->created_at }}</td>

                    <td>
                        {!! Form::open(['url'=>route('portfolioEdit',['page'=>$portfolio->id]), 'class'=>'form-horizontal','method' => 'POST']) !!}

                        {{ method_field('DELETE') }}
                        {!! Form::button('Удалить',['class'=>'btn btn-danger','type'=>'submit']) !!}

                        {!! Form::close() !!}
                    </td>
                </tr>

            @endforeach


            </tbody>
        </table>

    @endif

</div>