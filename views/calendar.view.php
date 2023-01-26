<!DOCTYPE html>
<html>
<head>
<!-- CSS for full calender -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" rel="stylesheet" />

<!-- JS for jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- JS for full calender -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
<!-- bootstrap css and js -->

<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.0.3/index.global.min.js'></script>
<link rel="stylesheet" href="style.css">

    <script>
        document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');

  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    height: 380,
    events: 'display_event.php',
    eventBackgroundColor: '#93bf85',
    eventBorderColor: '#93bf85',
    selectable: false,

  
    })

  calendar.setOption('locale', 'fr');
  calendar.render();
});
    

    </script>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div id="calendar" style="width: 60%;"></div>
		</div>
	</div>
</div>


</body>

</html> 