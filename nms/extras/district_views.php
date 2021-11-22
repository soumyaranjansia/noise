<div class="container">
    <h1 class="text-center">Top 5 Districts</h1>
    <table class="table text-center">
        <tr>
            <td>
                <div class="chartCase" style="width: 500px; height: 300px;">
                    <canvas id="myChart2"></canvas>
                </div>
            </td>
            <td>
                <h4>Ganjam</h4>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga dolorum asperiores, nostrum est illum officia consequatur quos quibusdam dolores vel enim impedit blanditiis nesciunt, debitis velit molestiae, architecto accusantium obcaecati ratione. Libero ad veniam eveniet praesentium, aut voluptatum. Obcaecati magni inventore ullam odio aliquam rerum ut quod beatae eos nobis?
            </td>
        </tr>
        <tr>
            <td>
                <h4>Puri</h4>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum quidem dolorem perspiciatis dicta, atque possimus accusamus animi at? Molestiae nobis quisquam sapiente ipsum, voluptatum possimus saepe mollitia assumenda labore modi eveniet nostrum? Voluptatibus, dolorem! Dolores, eligendi iure! Quaerat ut doloribus at blanditiis, fugiat ea sit perspiciatis. Hic consequatur ipsam quam!
            </td>

            <td>
                <div class="chartCase" style="width: 500px; height:300px;">
                    <canvas id="myChart3"></canvas>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="chartCase" style="width: 500px; height: 300px;">
                    <canvas id="myChart4"></canvas>
                </div>
            </td>
            <td>
                <h4>Cuttack</h4>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga dolorum asperiores, nostrum est illum officia consequatur quos quibusdam dolores vel enim impedit blanditiis nesciunt, debitis velit molestiae, architecto accusantium obcaecati ratione. Libero ad veniam eveniet praesentium, aut voluptatum. Obcaecati magni inventore ullam odio aliquam rerum ut quod beatae eos nobis?
            </td>
        </tr>
        <tr>
            <td>
                <h4>Khordha</h4>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum quidem dolorem perspiciatis dicta, atque possimus accusamus animi at? Molestiae nobis quisquam sapiente ipsum, voluptatum possimus saepe mollitia assumenda labore modi eveniet nostrum? Voluptatibus, dolorem! Dolores, eligendi iure! Quaerat ut doloribus at blanditiis, fugiat ea sit perspiciatis. Hic consequatur ipsam quam!
            </td>

            <td>
                <div class="chartCase" style="width: 500px; height:300px;">
                    <canvas id="myChart5"></canvas>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="chartCase" style="width: 500px; height: 300px;">
                    <canvas id="myChart6"></canvas>
                </div>
            </td>
            <td>
                <h4>Kendrapara</h4>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga dolorum asperiores, nostrum est illum officia consequatur quos quibusdam dolores vel enim impedit blanditiis nesciunt, debitis velit molestiae, architecto accusantium obcaecati ratione. Libero ad veniam eveniet praesentium, aut voluptatum. Obcaecati magni inventore ullam odio aliquam rerum ut quod beatae eos nobis?
            </td>
        </tr>

    </table>
</div>

<script>
    //  for ganjam value

    const ctx2 = document.getElementById('myChart2').getContext('2d');
    const myChart2 = new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($district_name_array); ?>,
            datasets: [{
                    label: 'Day Time',
                    data: <?php echo json_encode($dist_avg_avg_values); ?>,
                    backgroundColor: 'rgba(255, 159, 64, 0.2)',
                    borderColor: 'rgba(255, 159, 64, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Night Time',
                    data: <?php echo json_encode($dist_avg_avg_values); ?>,
                    backgroundColor: 'rgba(255, 159, 64, 0.2)',
                    borderColor: 'rgba(255, 159, 64, 1)',
                    borderWidth: 1
                }
            ]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    //  for puri value

    const ctx3 = document.getElementById('myChart3').getContext('2d');
    const myChart3 = new Chart(ctx3, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($district_name_array); ?>,
            datasets: [{
                    label: 'Day Time',
                    data: <?php echo json_encode($dist_avg_avg_values); ?>,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Night Time',
                    data: <?php echo json_encode($dist_avg_avg_values); ?>,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }
            ]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    //  for cuttack value

    const ctx4 = document.getElementById('myChart4').getContext('2d');
    const myChart4 = new Chart(ctx4, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($district_name_array); ?>,
            datasets: [{
                    label: 'Day Time',
                    data: <?php echo json_encode($dist_avg_avg_values); ?>,
                    backgroundColor: 'rgba(255, 159, 64, 0.2)',
                    borderColor: 'rgba(255, 159, 64, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Night Time',
                    data: <?php echo json_encode($dist_avg_avg_values); ?>,
                    backgroundColor: 'rgba(255, 159, 64, 0.2)',
                    borderColor: 'rgba(255, 159, 64, 1)',
                    borderWidth: 1
                }
            ]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    //  for khordha value

    const ctx5 = document.getElementById('myChart5').getContext('2d');
    const myChart5 = new Chart(ctx5, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($district_name_array); ?>,
            datasets: [{
                    label: 'Day Time',
                    data: <?php echo json_encode($dist_avg_avg_values); ?>,
                    backgroundColor: 'rgba(153, 102, 255, 0.2)',
                    borderColor: 'rgba(153, 102, 255, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Night Time',
                    data: <?php echo json_encode($dist_avg_avg_values); ?>,
                    backgroundColor: 'rgba(153, 102, 255, 0.2)',
                    borderColor: 'rgba(153, 102, 255, 1)',
                    borderWidth: 1
                }
            ]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    //  for kendrapara value

    const ctx6 = document.getElementById('myChart6').getContext('2d');
    const myChart6 = new Chart(ctx6, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($district_name_array); ?>,
            datasets: [{
                    label: 'Day Time',
                    data: <?php echo json_encode($dist_avg_avg_values); ?>,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',

                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Night Time',
                    data: <?php echo json_encode($dist_avg_avg_values); ?>,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }
            ]
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