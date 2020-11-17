@extends('layouts.app')

@section('content')
<div class="container p-2">
    <div class="row justify-content-center">
        <div class="card justify-content-center align-items-stretch">
            <div class="col box">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Створити групу</button>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form method="POST" action="{{route('psychologic.group.create')}}">
                                @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Створення нової групи</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <label>Введіть назву групи</label>
                                    <input type="text" placeholder="IT" class="form-control @error('group') is-invalid @enderror" name="group" value="{{ old('group') }}" required autocomplete="group" autofocus />

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Відмінити</button>
                                    <button type="submit" class="btn btn-primary">Зберегти групу</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @forelse ($groups as $group)

            <a href="{{route('psychologic.clients.group',$group->id)}}">

                <div class="col box">
                    <h4>{{$group->group}}</h4>
                </div>
            </a>
            @empty

            @endforelse
        </div>
        <div class="card justify-content-center align-items-stretch mt-3">
            {{print_r($results)}}
            <h1>Виявлення відмінностей на рівні досліджуванної ознаки </h1>
            <canvas id="myChart" style="width: 100%;"></canvas>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var jsondata = <?php echo $groups; ?>;
    var values = [];

    // Iterate through loop starting at position 1 
    // (position zero has a name, not a value)
    for (var i = 0; i < jsondata.length; i++) {
        values.push(jsondata[i]['group']); // we end up with 12 values
    }

    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',
    data: {
        datasets: [{
            type: 'line',
            label: 'Механіки',
            data: [10, 20, 30, 10],
            fill: false
        }, {
            type: 'line',
            label: 'Психологи',
            data: [50, 40, 50, 30],
            fill: false
        },
        {
            type: 'line',
            label: 'Художники',
            data: [50, 40, 50, 30],
            fill: false

            // Changes this dataset to become a line
            
        }],
        labels: ['January', 'February', 'March', 'April']
    },

        // Configuration options go here
        options: {
             legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'Chart.js Box Plot Chart'
            }
        }
    });
</script>
@endsection