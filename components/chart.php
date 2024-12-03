<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NBA Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <canvas id="scoreChart"></canvas>

    <script>
        fetch('./components/fetch_data.php') // Replace this with the actual path to your PHP script
            .then(response => response.json())
            .then(data => {
                const playerNames = data.map(item => item.usr_email.split('@')[0]);
                const scores = data.map(item => item.kilos);

                const ctx = document.getElementById('scoreChart').getContext('2d');
                const scoreChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: playerNames,
                        datasets: [{
                            label: 'Kilos reciclados',
                            data: scores,
                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        indexAxis: 'y', // Makes the bar chart horizontal
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            })
            .catch(error => console.error('Error fetching data:', error));

    </script>
</body>

</html>