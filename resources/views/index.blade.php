<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>PDF Formatter</title>

  <!-- CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/hack.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!-- navigation bar -->
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <a class="navbar-brand"><i class="glyphicon glyphicon-book"></i> PDF Formatter</a>
    </div>
  </nav>

  <!-- main body of our application -->
  <div class="container" id="pdf-transform">

    <!-- upload a pdf -->
    <div class="col-sm-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3>Upload a pdf</h3>
        </div>
        <div class="panel-body">
          <div v-if="!pdf-file">
            <input type="file" @change="onFileChange">
          </div>
          <div v-else>
            Preview
            <button @click="removePdf">Remove PDF</button>
          </div>
        </div>

      </div>
    </div>

    <!-- preview the pdf -->
    <div class="col-sm-6">
      <div class="list-group">

      </div>
    </div>
  </div>

  <!-- JS -->
  <script src="js/vue.js"></script>
  <script src="js/vue-resource.js"></script>
  <script src="js/app.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
