  <?php include "_head.php"; ?>




  <!-- ======= Counts Section ======= -->
  <section id="counts" class="counts section-bg mt-5">
      <div class="container ">

          <div class="row counters">
              <h1> Update Covid-19</h1>
              <div class="col-lg-3 col-6 text-center">
                  <span data-purecounter-start="0" data-purecounter-end="457" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Positif</p>
              </div>

              <div class="col-lg-3 col-6 text-center">
                  <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Dalam Perawatan</p>
              </div>

              <div class="col-lg-3 col-6 text-center">
                  <span data-purecounter-start="0" data-purecounter-end="430" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Sembuh</p>
              </div>

              <div class="col-lg-3 col-6 text-center">
                  <span data-purecounter-start="0" data-purecounter-end="23" data-purecounter-duration="1" class="purecounter"></span>
                  <p>Meninggal</p>
              </div>

          </div>

      </div>
  </section><!-- End Counts Section -->

  <!-- Pie Chart -->
  <canvas id="pieChart" style="max-height: 400px;"></canvas>
  <script>
      document.addEventListener("DOMContentLoaded", () => {
          new Chart(document.querySelector('#pieChart'), {
              type: 'pie',
              data: {
                  labels: [
                      'Positif',
                      'Dalam Perawatan',
                      'Sembuh',
                      'Meninggal'
                  ],
                  datasets: [{
                      label: 'My First Dataset',
                      data: [457, 3, 430, 23],
                      backgroundColor: [
                          'rgb(255, 99, 132)',
                          'rgb(54, 162, 235)',
                          'rgb(152,251,152)',
                          'rgb(255, 205, 86)'
                      ],
                      hoverOffset: 4
                  }]
              }
          });
      });
  </script>
  <!-- End Pie CHart -->