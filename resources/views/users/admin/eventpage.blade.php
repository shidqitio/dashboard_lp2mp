<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kalender Operasional</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/webui-popover/1.2.18/jquery.webui-popover.css" />
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">

  <!-- Custom CSS for the 'Full' Template -->
  <link href="css/full.css" rel="stylesheet">
  <link href="css/eventcalendar.css" rel="stylesheet">
</head>

<body>
  <div class="jumbotron text-center">
    <h1>Kalender Operasional</h1>
  </div>
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      @if ($message = Session::get('success'))
      <div class="alert alert-success alert-block">
        <p> {{ \session::get('success')}} </p>
      </div>
      @endif
      <button class="btn btn-primary" onclick="goBack('/kalender')">Kembali Menu Utama</button>
      <input href="#" class="btn btn-primary" onclick="window.print()" target="_blank" value="Cetak Kalender">
    </div>
  </div>
  <br>

  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-body">
          {!! $calendar->calendar() !!}

        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
  <script src="{{asset('fullcalendar/fullcalendar.min.js')}}"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var calendarEl = document.getElementById('calendar');

      var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        initialDate: '2021-03-12',

        eventDidMount: function (info) {
          var tooltip = new Tooltip(info.el, {
            title: info.event.extendedProps.description,
            placement: 'top',
            trigger: 'hover',
            container: 'body'
          });
        },

      });

      calendar.render();
    });
  </script>

  <script>
    function goBack() {
      window.history.back();
    }
  </script>
  {!! $calendar->script() !!}

  <script>
    $(document).ready(function () {
      $('[data-toggle="popover"]').popover();
    });
  </script>
</body>

</html>