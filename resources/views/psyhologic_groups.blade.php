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
            <h3>Виявлення відмінностей на рівні досліджуванної ознаки </h3>
            Чи можна стверджувати, що одна з груп перевершує іншу за рівнем одного з тестів?
        </div>
        <div class="card justify-content-center align-items-stretch mt-3">
        
        <h3 class="m-auto">Критерій Розенбаума</h3>
        <br>
        
        
            Гіпотези:<br>
        
                1.Перша група не переважає другу групу за обраним тестом - "Шкала оцінки потреби у досягненні"
                <br>
                2.Перша група переважає другу групу за обраним тестом - "Шкала оцінки потреби у досягненні"
                <br>
        
            <div class="row justify-content-center">
                <div class="col-md-8 mb-5"> <canvas id="myChart" style="width: 100%; height:500px;"></canvas></div>
                <div class="col-md-6 mb-5">S1={{$results['Економісти'][1]}}-{{$results['IT'][1]}}={{abs($results['Економісти'][1]-$results['IT'][1])}}; S2={{$results['Економісти'][0]}}-{{$results['IT'][0]}}={{abs($results['Економісти'][0]-$results['IT'][0])}}
                    <br>
                    Qемп=S1+S2={{abs($results['Економісти'][1]-$results['IT'][1])+abs($results['Економісти'][0]-$results['IT'][0])}}
                    <br>
                    n1={{$results['IT'][2]}},n2={{$results['Економісти'][2]}}
                </div>
                <div class="col-md-6 mb-5">
                    Qкр=7 при (p<=0.05)
                    Qкр=9 при (p<=0.01)
                    <br>
                    При Qемп >= Qкр перша гіпотеза відхиляється, при Qемп <= Qкр приймається перша гіпотеза.<br>
                    <b>Висновок: Студенти групи IT перевершують групу Економістів</b>
                </div>
                <div class="col-md-8"><canvas id="myChart2" style="width: 100%; height:500px;"></canvas></div>
                <div class="col-md-6 mb-5">S1={{$results['Економісти'][1]}}-{{$results['Фізики'][1]}}={{abs($results['Економісти'][1]-$results['Фізики'][1])}}; S2={{$results['Економісти'][0]}}-{{$results['Фізики'][0]}}={{abs($results['Економісти'][0]-$results['Фізики'][0])}}
                    <br>
                    Qемп=S1+S2={{abs($results['Економісти'][1]-$results['Фізики'][1])+abs($results['Економісти'][0]-$results['Фізики'][0])}}
                    <br>
                    n1={{$results['Фізики'][2]}},n2={{$results['Економісти'][2]}}
                </div>
                <div class="col-md-6 mb-5">
                    Qкр=6 при (p<=0.05)
                    Qкр=9 при (p<=0.01)
                    <br>
                    При Qемп >= Qкр перша гіпотеза відхиляється, при Qемп <= Qкр приймається перша гіпотеза.<br>
                    <b>Висновок: Студенти групи Фізиків перевершують групу Економістів</b>
                </div>
            </div>
        </div>
        <div class="card justify-content-center align-items-stretch mt-3">
        <div class="row col-md-10 justify-content-center">
            <h3 class="m-auto ">Розрахунок критерія U Манна-Уітні </h3>
            <br>
            Критерій потрібен для оцінки відмінностей між двома вибірками за рівнем якої-небудь ознаки, кількісно виміряного
            <br>
            тест "Опитувальник генералізованого тривожного розладу"
            <br>
        </div>
            
            <table class="table table-bordered justify-content-center col-md-8">
                <th colspan="2">IT</th><th colspan="2">Фізики</th>
                <tr><td>Оцінка тесту</td><td>Ранг</td><td>Оцінка тесту</td><td>Ранг</td></tr>
                <tr></tr>
            @for($i=1;$i<=count($mark)-1;$i++)
            <?php $user=DB::table('Users')->where('id','=',$userId[$i])->first()?>
@if ($user->group=='IT')
            <tr>
            <td>{{$mark[$i]}}</td>
<td> {{$rang[$i]}} </td>
<td></td>
<td></td>
</tr>
@elseif($user->group=='Фізики')
<tr>

<td></td>
<td></td>
<td>{{$mark[$i]}}</td>
<td> {{$rang[$i]}} </td>
</tr>
@endif
@endfor
            </table>
            
            
            <table class="table table-bordered justify-content-center col-md-8">
<tr><td></td><td>Оцінка тесту</td><td>Ранг</td><td>Оцінка тесту</td><td>Ранг</td><td>Квадрат різниці</td></tr>
<tr><td>Сума:</td><td>{{$sumMarkIT}}</td><td>{{$sumRangIT}}</td><td>{{$sumMarkPhysic}}</td><td>{{$sumRangPhysic}}</td></tr>
<tr><td>Cереднє</td><td>{{$sumMarkIT/$countIT}}</td><td></td><td>{{$sumMarkPhysic/$countPhysic}}</td><td></td></tr>
            </table>
    
            <br>
            <p>Загальна сума рангів: {{$sumRangIT+$sumRangPhysic}}<br>
            Гіпотези:
            <br>
            1. Група Фізиків не перевершує групу ІТ.<br>
            2. Група Фізиків перевершує групу ІТ.
            <br>
            Емперична величина Uемп=({{$countIT}}*{{$countPhysic}})+({{$countPhysic}}*({{$countPhysic}}+1))/2-{{$sumRangPhysic}}={{($countIT*$countPhysic)+(($countPhysic*($countPhysic+1))/2)-$sumRangPhysic}}<br>
            Емперична величина Uемп=({{$countIT}}*{{$countPhysic}})+({{$countIT}}*({{$countIT}}+1))/2-{{$sumRangIT}}={{($countIT*$countPhysic)+(($countIT*($countIT+1))/2)-$sumRangIT}}<br>
            Uкр=95 при p<=0.05, 76 при (p<=0.01)
            <br>
            <b> Висновок: Гіпотеза 1 приймається, група фізиків не перевершує групу ІТ.</b>
        </p>
        </div>

        <div class="card justify-content-center align-items-stretch mt-3">
            <h3 class="m-auto">Рангова кореляція</h3>
            <br>
            <div class="row">
           Кореляція між двума показниками, тесту "Рівень реактивної тривоги" та "Особистісна тривога"
           <br>
            Гіпотези:
            <br>
            1. Кореляція між показниками двух тестів не відрізняється від 0.<br>
            2. Кореляція між показниками двух тестів відрізняється від 0
            </div>
            
            <table class="table table-bordered justify-content-center col-md-8">
                <th colspan="2">Рівень реактивної тривоги</th><th colspan="2">Особистісна тривога</th>
                <tr><td>Оцінка тесту</td><td>Ранг</td><td>Оцінка тесту</td><td>Ранг</td><td>Різниця</td><td>Квадрат різниці</td></tr>
                <tr></tr>
                <?php $sum=0 ?>
            @for($i=1;$i<=count($markCor)-1;$i++)
            <?php $user=DB::table('Users')->where('id','=',$userCorId[$i])->first()?>
            <tr>
            
            <td>{{$markCor[$i]}}</td>
<td> {{$rangCor[$i]}} </td>
<td>{{$markCor2[$i]}}</td>
<td> {{$rangCor2[$i]}} </td>
<td>{{$rangCor[$i]-$rangCor2[$i]}}</td>
<td>{{($rangCor[$i]-$rangCor2[$i])*($rangCor[$i]-$rangCor2[$i])}}</td>
<?php $sum=$sum+($rangCor[$i]-$rangCor2[$i])*($rangCor[$i]-$rangCor2[$i]) ?>
</tr>
@endfor
            </table>   
        <div class="row">
            <table class="table table-bordered justify-content-center col-md-8">
<tr><td></td><td>Оцінка тесту</td><td>Ранг</td><td>Оцінка тесту</td><td>Ранг</td><td>Квадрат різниці</td></tr>
<tr><td>Сума:</td><td></td><td>{{array_sum($rangCor)}}</td><td></td><td>{{array_sum($rangCor2)}}</td><td>{{$sum}}</td></tr>

            </table>
        </div>
            <br>
            <p>Коефіцієнт рангової кореляції: <br>
            r емп.=1-(6*{{$sum}})/({{count($rangCor)}}*({{count($rangCor)}}^2-1))={{1-(6*$sum)/(count($rangCor)*(count($rangCor)^2-1))}}
            <br>
            r кр.=0.36 при (p<=0.05) та 0.47 при (p<=0.01)
              <br>
           
            <b> Висновок: Гіпотеза 1 не приймається, кореляція між показниками двух тестів значима і є додатньою, відрізняється від 0 </b>
        </p>
        </div>
    </div>
    <div class="card justify-content-center align-items-stretch mt-3">
            <h3>Оцінка здвигу значень досліджуванного показника</h3>
            Чи можна стверджувати, що одна з груп перевершує іншу за рівнем одного з тестів?
        </div>
        <div class="card justify-content-center align-items-stretch mt-3">
        <div class="row">
            <div class="col-md-12">
        <h3 class="m-auto">Критерій Вілкоксона</h3>
        <br>
        </div>
        </div>
            <div class="row">
            <div class="col-md-12">
           Порівняння показників групи ІТ, перед і після проходження психологічного курсу - тест "Шкала оцінки мотивації схвалення"
           <br>
            Гіпотези:
            <br>
            1. Інтенисивність сдвигів в бік зменшення показників не перевершує інтенсивність сдвигів в бік збельшення показників.<br>
            2. Інтенисивність сдвигів в бік зменшення показників перевершує інтенсивність сдвигів в бік збельшення показників.
            <br>    
        </div>
       
            </div>
        <table class="table table-bordered justify-content-center col-md-8">
            <tr><td>Клієнт</td><td>Перший результат тесту</td><td>Останній результат тесту</td><td>Різниця результатів</td><td>Абсолютне значення різниці результатів</td><td>Ранг різниці</td></tr>
            @for($i=0;$i<count($user11);$i++)
            <tr> <td>{{$user11[$i]}}</td>
            <td>{{$mark1[$i]}}</td>
            <td>{{$mark2[$i]}}</td>
            <td>{{$mark2[$i]-$mark1[$i]}}</td>
            <td>{{$markdiff[$i]}}</td>
            <td>{{$rangDD[$i]}}</td></tr>
            @endfor
            <tr><td>Сума</td><td></td><td></td><td></td><td></td><td>{{array_sum($rangDD)}}</td></tr>
        </table>
        <br>Оберемо ті різниці, які є нетиповими - в данному випадку менше додатніх чисел.
        <br>Tемп=4.5+4.5+6=15
        <br>Tкр=10 при (р<=0.05) та 5(при р<=0.01)
        <br><b>Висновок: Темп<Ткр(0.05). Гіпотеза 1 відхилюється. Інтенсивність від'ємного здвигу показників перевершує інтенсивність додатнього здвигу</b>
        </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var ctx2 = document.getElementById('myChart2').getContext('2d');
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
                label: values[0],
                data: [{
                    x: 'IT',
                    y: {{$results['IT'][0]}}
                }, {
                    x: 'IT',
                    y: {{$results['IT'][1]}}
                }],
                fill: false,
                backgroundColor: 'rgba(10,10,10,1)',
                borderColor: 'rgba(10,10,10,1)',
            }, {
                type: 'line',
                label: values[1],
                data: [{
                    x: 'Економісти',
                    y: {{$results['Економісти'][0]}}
                }, {
                    x: 'Економісти',
                    y: {{$results['Економісти'][1]}}
                }],
                fill: false,
                backgroundColor: 'rgba(60,179,113,1)',
                borderColor: 'rgba(60,179,113,1)',
            }, {
                type: 'line',
                label: 'S1',
                data: [{
                    x: 'S',
                    y: {{$results['Економісти'][1]}}
                }, {
                    x: 'S',
                    y: {{$results['IT'][1]}}
                }],
                fill: false,
                backgroundColor: 'rgba(255,0,0,1)',
                borderColor: 'rgba(255,0,0,1)',
                pointStyle: 'triangle'
            }, {
                type: 'line',
                label: 'S2',
                data: [{
                    x: 'S',
                    y: {{$results['IT'][0]}}
                }, {
                    x: 'S',
                    y: {{$results['Економісти'][0]}}
                }],
                fill: false,
                backgroundColor: 'rgba(0,0,255,1)',
                borderColor: 'rgba(0,0,255,1)',
                pointStyle: 'triangle'
            },
                {
                    type: 'line',
                    label: 'допоміжні лінії',
                    data: [{
                        x: 'IT',
                        y: {{$results['IT'][0]}}
                    }, {
                        x: 'S',
                        y: {{$results['IT'][0]}}
                    }],
                    fill: false,
                    backgroundColor: 'grey',
                    borderColor: 'grey',
                    borderDash:([5, 15])
                    // Changes this dataset to become a line

                },
                {
                    type: 'line',
                    label: 'допоміжні лінії',
                    data: [{
                        x: 'Економісти',
                        y: {{$results['Економісти'][0]}}
                    }, {
                        x: 'S',
                        y: {{$results['Економісти'][0]}}
                    }],
                    fill: false,
                    backgroundColor: 'grey',
                    borderColor: 'grey',
                    borderDash:([5, 15])
                    // Changes this dataset to become a line

                },
                {
                    type: 'line',
                    label: 'допоміжні лінії',
                    data: [{
                        x: 'IT',
                        y: {{$results['IT'][1]}}
                    }, {
                        x: 'S',
                        y: {{$results['IT'][1]}}
                    }],
                    fill: false,
                    backgroundColor: 'grey',
                    borderColor: 'grey',
                    borderDash:([5, 15])
                    // Changes this dataset to become a line

                },
                {
                    type: 'line',
                    label: 'допоміжні лінії',
                    data: [{
                        x: 'Економісти',
                        y: {{$results['Економісти'][1]}}
                    }, {
                        x: 'S',
                        y: {{$results['Економісти'][1]}}
                    }],
                    fill: false,
                    backgroundColor: 'grey',
                    borderColor: 'grey',
                    borderDash:([5, 15]),
                    // Changes this dataset to become a line

                },
                {
                    type: 'line',
                    label: 'допоміжні лінії',
                    data: [{
                        x: 'IT',
                        y: {{$results['IT'][0]}}
                    }, {
                        x: 'S',
                        y: {{$results['IT'][0]}}
                    }],
                    fill: false,
                    backgroundColor: 'grey',
                    borderColor: 'grey',
                    borderDash:([5, 15])
                    // Changes this dataset to become a line

                },
                {
                    type: 'line',
                    label: 'допоміжні лінії',
                    data: [{
                        x: 'Економісти',
                        y: {{$results['Економісти'][0]}}
                    }, {
                        x: 'S',
                        y: {{$results['Економісти'][0]}}
                    }],
                    fill: false,
                    backgroundColor: 'grey',
                    borderColor: 'grey',
                    borderDash:([5, 15])
                    // Changes this dataset to become a line

                },
                {
                    type: 'line',
                    label: 'допоміжні лінії',
                    data: [{
                        x: 'IT',
                        y: {{$results['IT'][1]}}
                    }, {
                        x: 'S',
                        y: {{$results['IT'][1]}}
                    }],
                    fill: false,
                    backgroundColor: 'grey',
                    borderColor: 'grey',
                    borderDash:([5, 15])
                    // Changes this dataset to become a line

                },
                {
                    type: 'line',
                    label: 'допоміжні лінії',
                    data: [{
                        x: 'Економісти',
                        y: {{$results['Економісти'][1]}}
                    }, {
                        x: 'S',
                        y: {{$results['Економісти'][1]}}
                    }],
                    fill: false,
                    backgroundColor: 'grey',
                    borderColor: 'grey',
                    borderDash:([5, 15]),
                    // Changes this dataset to become a line

                }],
            labels: ['IT', 'Економісти', 'S']
        },

        // Configuration options go here
        options: {
            legend: {
                labels: {
                filter: function(item, chart) {
                    // Logic to remove a particular legend item goes here
                    return !item.text.includes('допоміжні лінії');
                }
            },
                position: 'top',
            },
            title: {
                display: true,
                text: 'Відношення рядів значень в виборках ІТ та Економісти'
            }
        }
    });

 

    var chart2 = new Chart(ctx2, {
        // The type of chart we want to create
        type: 'line',
        data: {
            datasets: [{
                    type: 'line',
                    label: values[2],
                    data: [{
                        x: 'Фізики',
                        y: {{$results['Фізики'][0]}}
                    }, {
                        x: 'Фізики',
                        y: {{$results['Фізики'][1]}}
                    }],
                    fill: false,
                    backgroundColor: 'rgba(106,90,205,1)',
                    borderColor: 'rgba(106,90,205,1)',

                    // Changes this dataset to become a line

                }, {
                    type: 'line',
                    label: values[1],
                    data: [{
                        x: 'Економісти',
                        y: {{$results['Економісти'][0]}}
                    }, {
                        x: 'Економісти',
                        y: {{$results['Економісти'][1]}}
                    }],
                    fill: false,
                    backgroundColor: 'rgba(60,179,113,1)',
                    borderColor: 'rgba(60,179,113,1)',
                },
                {
                    type: 'line',
                    label: 'S1',
                    data: [{
                        x: 'S',
                        y: {{$results['Економісти'][1]}}
                    }, {
                        x: 'S',
                        y: {{$results['Фізики'][1]}}
                    }],
                    fill: false,
                    backgroundColor: 'rgba(255,0,0,1)',
                    borderColor: 'rgba(255,0,0,1)',
                    pointStyle: 'triangle'
                }, {
                    type: 'line',
                    label: 'S2',
                    data: [{
                        x: 'S',
                        y: {{$results['Фізики'][0]}}
                    }, {
                        x: 'S',
                        y: {{$results['Економісти'][0]}}
                    }],
                    fill: false,
                    backgroundColor: 'rgba(0,0,255,1)',
                    borderColor: 'rgba(0,0,255,1)',
                    pointStyle: 'triangle'
                },
                {
                    type: 'line',
                    label: 'допоміжні лінії',
                    data: [{
                        x: 'Економісти',
                        y: {{$results['Економісти'][0]}}
                    }, {
                        x: 'S',
                        y: {{$results['Економісти'][0]}}
                    }],
                    fill: false,
                    backgroundColor: 'grey',
                    borderColor: 'grey',
                    borderDash:([5, 15])
                    // Changes this dataset to become a line

                },
                {
                    type: 'line',
                    label: 'допоміжні лінії',
                    data: [{
                        x: 'Фізики',
                        y: {{$results['Фізики'][0]}}
                    }, {
                        x: 'S',
                        y: {{$results['Фізики'][0]}}
                    }],
                    fill: false,
                    backgroundColor: 'grey',
                    borderColor: 'grey',
                    borderDash:([5, 15])
                    // Changes this dataset to become a line

                },
                {
                    type: 'line',
                    label: 'допоміжні лінії',
                    data: [{
                        x: 'Економісти',
                        y: {{$results['Економісти'][1]}}
                    }, {
                        x: 'S',
                        y: {{$results['Економісти'][1]}}
                    }],
                    fill: false,
                    backgroundColor: 'grey',
                    borderColor: 'grey',
                    borderDash:([5, 15])
                    // Changes this dataset to become a line

                },
                {
                    type: 'line',
                    label: 'допоміжні лінії',
                    data: [{
                        x: 'Фізики',
                        y: {{$results['Фізики'][1]}}
                    }, {
                        x: 'S',
                        y: {{$results['Фізики'][1]}}
                    }],
                    fill: false,
                    backgroundColor: 'grey',
                    borderColor: 'grey',
                    borderDash:([5, 15]),
                    // Changes this dataset to become a line

                }
            ],
            labels: [ 'Фізики', 'Економісти', 'S']
        },

        // Configuration options go here
        options: {
            legend: {
                labels: {
                filter: function(item, chart) {
                    // Logic to remove a particular legend item goes here
                    return !item.text.includes('допоміжні лінії');
                }
            },
                position: 'top',
            },
            title: {
                display: true,
                text: 'Відношення рядів значень в виборках Фізики та Економісти'
            }
        }
    });
</script>
@endsection