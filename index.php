<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Soil yield performance calculator</title>
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <link rel="stylesheet" href="css\font-awesome-4.7.0\css\font-awesome.min.css">
    <link rel="stylesheet" href="css\mainstyle.css">
  </head>
  <body>


        <section class="form-area my-5 py-5">
          <div class="container bg-primary px-2 py-5">
            <center>
              <img src="images/sayemlogo1.png" alt="" class="img-rounded center-block">
            </center>
            <h1 class="text-center text-white mb-5">CROP YIELD PREDICTER </h1>
              <form class="my-form" id="soiltest" action="process.php" method="POST">
                <div class="row">
                <!-- first column, round one -->
                <div class="col-md-6">
                  <div class="form-group row my-5">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Soil Fertility</label>
                    <div class="col-sm-6">
                      <input type="number" id="fertility" name="fertility" class="form-control form-control-sm" id="colFormLabelSm" placeholder="soil Fertility level">
                    </div>
                    <div class="col-sm-2">
                      <input type="text" id="indicatorf" class="form-control form-control-sm" id="colFormLabelSm" placeholder="level" readonly>
                    </div>
                  </div>

                  <div class="form-group row my-5">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Soil PH</label>
                    <div class="col-sm-6">
                      <input type="number" id="ph" name="ph" class="form-control form-control-sm" id="colFormLabelSm" placeholder="soil PH level">
                    </div>
                    <div class="col-sm-2">
                      <input type="text" id="indicatorp" class="form-control form-control-sm" id="colFormLabelSm" placeholder="level" readonly>
                    </div>
                  </div>

                  <div class="form-group row my-5">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Soil MOISTURE</label>
                    <div class="col-sm-6">
                      <input type="number" id="moisture" name="moisture" class="form-control form-control-sm" id="colFormLabelSm" placeholder="soil moisture level">
                    </div>
                    <div class="col-sm-2">
                      <input type="text" id="indicatorm" class="form-control form-control-sm" id="colFormLabelSm" placeholder="level" readonly>
                    </div>
                  </div>

                  <div class="form-group row my-5">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Rainfall</label>
                    <div class="col-sm-6">
                      <input type="number" id="rain" name="rain" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Amount of rainfall">
                    </div>
                    <div class="col-sm-2">
                      <input type="text" id="indicatorr" class="form-control form-control-sm" id="colFormLabelSm" placeholder="level" readonly>
                    </div>
                  </div>

                  <div class="form-group row my-5">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Electric Conductivity</label>
                    <div class="col-sm-6">
                      <input type="number" id="electric" name="electric" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Value of Electric Conductivity">
                    </div>
                    <div class="col-sm-2">
                      <input type="text" id="indicatorel" class="form-control form-control-sm" id="colFormLabelSm" placeholder="level" readonly>
                    </div>
                  </div>
                </div>
                <!-- second column, round two -->
                <div class="col-md-6">
                  <div class="form-group row my-5">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Organic Matter</label>
                    <div class="col-sm-6">
                      <input type="number" id="organic" name="organic" class="form-control form-control-sm" id="colFormLabelSm" placeholder="soil Organic Matter">
                    </div>
                    <div class="col-sm-2">
                      <input type="text" id="indicatorog" class="form-control form-control-sm" id="colFormLabelSm" placeholder="level" readonly>
                    </div>
                  </div>

                  <div class="form-group row my-5">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Temperature</label>
                    <div class="col-sm-6">
                      <input type="number" id="temperature" name="temperature" class="form-control form-control-sm" id="colFormLabelSm" placeholder="soil Temperature">
                    </div>
                    <div class="col-sm-2">
                      <input type="text" id="indicatortemp" class="form-control form-control-sm" id="colFormLabelSm" placeholder="level" readonly>
                    </div>
                  </div>

                  <div class="form-group row my-5">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Bulk Density</label>
                    <div class="col-sm-6">
                      <input type="number" id="density" name="density" class="form-control form-control-sm" id="colFormLabelSm" placeholder="soil Bulk Density">
                    </div>
                    <div class="col-sm-2">
                      <input type="text" id="indicatorden" class="form-control form-control-sm" id="colFormLabelSm" placeholder="level" readonly>
                    </div>
                  </div>

                  <div class="form-group row my-5">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Humidity</label>
                    <div class="col-sm-6">
                      <input type="number" id="humidity" name="humidity" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Amount of Humidity">
                    </div>
                    <div class="col-sm-2">
                      <input type="text" id="indicatorhum" class="form-control form-control-sm" id="colFormLabelSm" placeholder="level" readonly>
                    </div>
                  </div>

                  <div class="form-group row my-5">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Crop Pest(%)</label>
                    <div class="col-sm-6">
                      <input type="number" id="pest" name="pest" class="form-control form-control-sm" data-min="32" data-max="62" id="colFormLabelSm" placeholder="Value of Electric Conductivity">
                    </div>
                    <div class="col-sm-2">
                      <input type="text" id="indicatorpest" class="form-control form-control-sm" id="colFormLabelSm" placeholder="level" readonly>
                    </div>
                  </div>
                </div>

                <div class="col-md-2"></div>
                <div class="col-md-4">
                  <input type="submit" class="form-control btn btn-primary" name="cropform-submit" value="Predict Crop Yield">
                </div>
                <div class="col-md-4">
                  <input type="reset" class="form-control btn btn-danger" id="cropform-reset" name="cropform-reset" value="Clear Values">
                </div>
                </div>
              </form>

              <div class="row my-4">
                <div class="col-md-7">
                  <h1 class="text-center">Analysis</h1>
                  <div class="showtext" id="analysis">
                  </div>
                </div>

                <div class="col-md-5">
                  <h1 class="text-center">Verdict</h1>
                  <div class="showverdict">

                  </div>
                </div>
              </div>
          </div>
        </section>







    <script src="js\jquery313.js"></script>
    <script src="js\pooper.js"></script>
    <script src="js\bootstrap.min.js"></script>
    <script src="js\script.js"></script>
  </body>
</html>
