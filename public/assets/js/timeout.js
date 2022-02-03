//this js is dependent on timeout variable that gets its value from laravel
// target container id is = #timeout_container

var a = serverTime.split(':'); // split it at the colons

var inputArray = [0, a[2], a[1], a[0], 0];

var timer = new easytimer.Timer();

timer.start({ countdown: true, startValues: inputArray });

$('#timeout_container').html(timer.getTimeValues().toString());

timer.addEventListener('secondsUpdated', function(e) {
    $('#timeout_container').html(timer.getTimeValues().toString());
});

timer.addEventListener('targetAchieved', function(e) {
    document.getElementById('logout_form').submit();
});