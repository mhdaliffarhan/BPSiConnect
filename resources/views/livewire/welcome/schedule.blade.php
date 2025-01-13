<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script>
<script src="https://cdn.jsdelivr.net/npm/@fullcalendar/bootstrap5@6.1.15/index.global.min.js"></script>
<script>    

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        views: {
            dayGridMonth: { buttonText: 'Bulan' },
            timeGridWeek: { buttonText: 'Minggu' },
            timeGridDay: { buttonText: 'Hari' },
            listMonth: { buttonText: 'Daftar' },
        },
        initialView: 'dayGridMonth',
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
        },
      themeSystem: 'bootstrap5',
      events: {!! $eventsJson !!},
    });
    calendar.render();
  });

</script>

<div class="card" id="jadwal-kepala">
    <div class="card-header">
        <h5 class="card-title">Jadwal Kepala</h5>
    </div>
    <div class="card-body">
        <div id="calendar"></div>
    </div>
</div>