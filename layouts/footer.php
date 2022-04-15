<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="./assets/plugins/ckeditor/ckeditor.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"> </script>
<script>
      CKEDITOR.replace("announcementTextEditor");
      const ctx = document.getElementById('montlySales').getContext('2d');
      const montlySalesChart = new Chart(ctx, {
            type: 'line',
            data: {
                  labels: ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUNE', 'JULY', 'AUGUST', 'SEP', 'OCT', 'NOV', 'DEC'],
                  datasets: [{
                        label: 'Monthly Sales',
                        data: [50000, 20000, 30000, 40000, 80000, 50000, 50000, 50000, 60000, 80000, 90000, 120000],
                        backgroundColor: [
                              'rgba(255, 99, 132, 0.2)',
                              'rgba(54, 162, 235, 0.2)',
                              'rgba(255, 206, 86, 0.2)',
                              'rgba(75, 192, 192, 0.2)',
                              'rgba(153, 102, 255, 0.2)',
                              'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                              'rgba(255, 99, 132, 1)',
                              'rgba(54, 162, 235, 1)',
                              'rgba(255, 206, 86, 1)',
                              'rgba(75, 192, 192, 1)',
                              'rgba(153, 102, 255, 1)',
                              'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 2,
                        fill: {
                              target: 'origin',
                              above: 'rgba(255,0,0,0.1)', // Area will be red above the origin
                              below: 'rgb(0, 0, 255)' // And blue below the origin
                        }
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

      const receivablesCTX = document.getElementById('receivables').getContext('2d');
      const receivablesChart = new Chart(receivablesCTX, {
            type: 'bar',
            data: {
                  labels: ['3 Days', '60 Days', '90 Days'],
                  datasets: [{
                        label: 'Receivables',
                        data: [12000000, 10000000, 18000000],
                        backgroundColor: [
                              'rgba(255, 99, 132, 0.2)',
                              'rgba(54, 162, 235, 0.2)',
                              'rgba(255, 206, 86, 0.2)',
                              'rgba(75, 192, 192, 0.2)',
                              'rgba(153, 102, 255, 0.2)',
                              'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                              'rgba(255, 99, 132, 1)',
                              'rgba(54, 162, 235, 1)',
                              'rgba(255, 206, 86, 1)',
                              'rgba(75, 192, 192, 1)',
                              'rgba(153, 102, 255, 1)',
                              'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 2,
                        fill: {
                              target: 'origin',
                              above: 'rgba(255,0,0,0.1)', // Area will be red above the origin
                              below: 'rgb(0, 0, 255)' // And blue below the origin
                        }
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
</script>
</script>
</body>

</html>