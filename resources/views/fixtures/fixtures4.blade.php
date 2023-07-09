@extends('layouts.plantilla')

@section('title','Teams fixtures4')

@section('content')

<table >
    <tr>
      <th>Team</th>
      <th>Id</th>
      <th>Category</th>
    </tr>
    <tr>
      <td>{{ $team1->name }}</td>
      <td>{{ $team1->id }}</td>
      <td>{{ $team1->category }}</td>
    </tr>
    <tr>
      <td>{{ $team2->name }}</td>
      <td>{{ $team2->id }}</td>
      <td>{{ $team2->category }}</td>
    </tr>
  </table>

  <div class="container">
    <h1>Chronometer</h1>
    <h2><span id="hours">00</span>:<span id="minutes">00</span>:<span id="seconds">00</span></h2>
    <button id="start-btn">Start</button>
    <button id="pause-btn">Pause</button>
</div>
  

<script>
    let seconds = 0;
    let minutes = 0;
    let hours = 0;
    let timerId;

    function updateTime() {
        seconds++;
        if (seconds >= 60) {
            seconds = 0;
            minutes++;
            if (minutes >= 60) {
                minutes = 0;
                hours++;
            }
        }

        document.getElementById('hours').innerHTML = padTime(hours);
        document.getElementById('minutes').innerHTML = padTime(minutes);
        document.getElementById('seconds').innerHTML = padTime(seconds);
    }

    function padTime(time) {
        return (time < 10 ? "0" : "") + time;
    }

    document.getElementById('start-btn').addEventListener('click', function () {
        timerId = setInterval(updateTime, 1000);
    });

    document.getElementById('pause-btn').addEventListener('click', function () {
        clearInterval(timerId);
    });
</script>
<style>
    #cronometro {
      font-size: 3em;
      text-align: center;
    }
    span {
      display: inline-block;
      padding: 0.2em;
      border-radius: 0.2em;
      background-color: #eee;
    }
</style>
    

@endsection