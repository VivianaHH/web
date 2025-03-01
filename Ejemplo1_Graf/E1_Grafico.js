// Verifica que Google Charts se haya cargado correctamente
google.charts.load('current', { packages: ['corechart'] });

// Espera a que Google Charts se cargue antes de ejecutar drawChart
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    // Asegurar que la biblioteca de Google Charts está disponible
    if (typeof google.visualization === 'undefined') {
        console.error("Error: Google Charts no se ha cargado correctamente.");
        return;
    }

    // Definir los datos del gráfico
    var data = google.visualization.arrayToDataTable([
        ['Language', 'Rating'],
        ['PHP', 79],
        ['JavaScript', 71],
        ['Swift', 68],
        ['SQL', 56],
        ['Java', 45],
        ['Perl', 45],
        ['Ruby', 35],
        ['Python', 30],
        ['AngularJS', 29],
        ['Node.js', 28],
        ['Objective-C', 19],
        ['C#', 17],
        ['C++', 15],
        ['C', 14]
    ]);

    // Configurar opciones del gráfico
    var options = {
        title: 'Most Popular Programming Languages',
        width: '100%',
        height: 500,
        backgroundColor: 'transparent',
        pieHole: 0.4, // Para estilo de gráfico de dona (opcional)
        chartArea: { width: '80%', height: '80%' }
    };

    // Dibujar el gráfico en el div con id="piechart"
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    chart.draw(data, options);
}
