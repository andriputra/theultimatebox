<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
/* Default comment here */ 

var path = anime.path('#circuit path'),
	results = ['10000', '12000', '13000'],
	lapCounts = [0, 0, 0],
	durations = [5000, 8000, 10000];

function startCarAnimation(target, index, duration) {
	anime({
		targets: target,
		translateX: path('x'),
		translateY: path('y'),
		rotate: path('angle'),
		easing: 'linear',
		duration: duration,
		complete: function(anim) {
			lapCounts[index]++;
			console.log('Lap count for car-' + (index + 1) + ': ' + lapCounts[index]);
                    startCarAnimation(target, index, duration); // Restart the animation for the car
                }
            });
        }

        var cars = document.querySelectorAll('.car');
        for (var i = 0; i < cars.length; i++) {
            startCarAnimation(cars[i], i, durations[i]);
        }
        // Save lap counts to local storage
        localStorage.setItem('lapCounts', JSON.stringify(lapCounts));

        // Retrieve lap counts from local storage
        var storedLapCounts = localStorage.getItem('lapCounts');
        if (storedLapCounts) {
            lapCounts = JSON.parse(storedLapCounts);
            for (var i = 0; i < cars.length; i++) {
                console.log('Lap count for car-' + (i + 1) + ': ' + lapCounts[i]);
            }
        }

</script>
<!-- end Simple Custom CSS and JS -->
