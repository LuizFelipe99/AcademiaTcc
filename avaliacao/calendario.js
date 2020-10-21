
document.addEventListener('DOMContentLoaded', function () {
  var calendarEl = document.getElementById('calendar');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    locale: 'pt-br',
    plugins: ['interaction', 'dayGrid'],
    editable: true,
    eventLimit: true,
    events: 'list_eventos.php',
    extraParams: function () {
    return {
      cachebuster: new Date().valueOf()
    };
  }
});
calendar.render();
});