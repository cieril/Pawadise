const ctx = document.getElementById('barchart').getContext('2d');
const barchart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['DAVAO', 'MANILA', 'CEBU', 'ILOCOS NORTE', 'SAMAR',],
        datasets: [{
            label: 'WEBSITE VISITS', 
            data: [19, 30, 13, 16, 6],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});