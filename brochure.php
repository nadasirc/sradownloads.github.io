<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Brochure</title>
  <meta name="description" content="brochure">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="files/css/style.css">
  <link rel="shortcut icon" type="image/x-icon" href="SRA.ico" />
</head>
<body>
  <header>
  
    <nav>
      <div class="logo">
        <a href="index.html"><img src="files/logo/logos.png" alt="Logo"></a>
      </div>
      <ul class="menu">
        <li><a href="index.html">HOME</a></li>
        <li><a href="job-order.php">JOB ORDER</a></li>
        <li><a href="brochure.php">BROCHURE</a></li>
        <li><a href="videos.php">VIDEOS</a></li>
        <li><a href="pictures.php">PICTURES</a></li>
      </ul>
    </nav>
  </header>

  <style>
        body {
          background-image: url('files/bg.png');
        }
        </style>

  <div class="container">
    <div class="dropdown-container">
      <label for="brochure-file-select">Choose:</label>
      <select id="brochure-file-select">
        <!-- Options for brochure files -->
        <!-- <option value="(NEW) KINGGATES DYNAMOS XL (SLIDING,TELESCOPIC,TURNING GATE) 2500KG">(NEW) KINGGATES DYNAMOS XL (SLIDING,TELESCOPIC,TURNING GATE) 2500KG</option>
        <option value="(NEW) KINGGATES DYNAMOS (SLIDING,TELESCOPIC,TURNING GATE) 1000KG">(NEW) KINGGATES DYNAMOS (SLIDING,TELESCOPIC,TURNING GATE) 1000KG</option>
        <option value="(NEW) KINGGATES JET (SWING,BIFOLD) 600KG">(NEW) KINGGATES JET (SWING,BOFOLD) 600KG</option>
        <option value="(NEW) KINGGATES COUPER 24 (SWING,BIFOLD) 400KG">(NEW) KINGGATES COUPER 24 (SWING,BIFOLD) 400KG</option> -->
        
        <option value="(NEW) DYNAMOS XL">(NEW) KINGgates DYNAMOS XL</option>
        <option value="(NEW) DYNAMOS">(NEW) KINGgates DYNAMOS</option>
        <option value="(NEW) COUPER 24">(NEW) KINGgates COUPER 24</option>
        <option value="(NEW) JET XL">(NEW) KINGgates JET XL</option>
        <option value="(NEW) JET">(NEW) KINGgates JET</option>
        <option value="KING GATES">KING GATES PRODUCTS</option>
        <option value="KINGGATES COMPONENTS">KINGGATES COMPONENTS</option>
        <option value="foscam">FOSCAM</option>
        <option value="remootio">REMOOTIO</option>
        <option value="garagedoor motor (MATIC 1200N)">GARAGE DOOR MOTOR (MATIC 1200N)</option>
        <option value="TURNSTILE FLAP">TURNSTILE FLAP</option>
        <option value="Sliding Frameless Door">SLIDING FRAMELESS DOOR</option>
        <option value="Automatic windows">AUTOMATICS WINDOWS</option>
      </select>
    </div>
    <br>
    <div class="download-link">
      <a href="#" id="brochure-download-link">Download File</a>
    </div>
  </div>
<BR>
<br>
<br>
  <div class="container">
    <div class="dropdown-container">
        
      <label for="ojt-file-select">From OJT:</label>
      <select id="ojt-file-select">
        <!-- Options for ojt files -->
        <option value="Bi-Fold Gate">BI-FOLD GATE</option>
        <option value="Boom Barrier">BOOM BARRIER</option>
        <option value="Electric Fence">ELECTRIC FENCE</option>
        <option value="Presentation of Fabrication of Gates">Presentation of Fabrication of Gates</option>
        <option value="Rapid Roll Up">RAPID ROLL-UP</option>
        <option value="Sectional Garage Door">SECTIONAL GARAGE DOOR</option>
        <option value="Sliding Gate">SLIDING GATE</option>
        <option value="SRA AUTOMATED GARAGE DOOR">SRA AUTOMATED GARAGE DOOR</option>
        <option value="SRA BOOM BARRIER">SRA BOOM BARRIER</option>
        <option value="Swing Gate">SWING GATE</option>
        <option value="Telescopic Gate">TELESCOPIC GATE</option>
        <option value="Turning Gate">TURNING GATE</option>
        <option value="SRA MOTORS _ ACCESSORIES">SRA MOTORS _ ACCESSORIES</option>
      </select>
    </div>
    <br>
    <div class="download-link">
      <a href="#" id="ojt-download-link">Download File</a>
    </div>
  </div>

  <script>
    // Get the brochure download link and file select element
    var brochureDownloadLink = document.getElementById('brochure-download-link');
    var brochureFileSelect = document.getElementById('brochure-file-select');

    // Handle the brochure download link click event
    brochureDownloadLink.addEventListener('click', function() {
      // Get the selected file from the brochure file select element
      var selectedFile = brochureFileSelect.value;

      // Generate the download URL for the selected file
      var downloadUrl = 'download.php?file=' + encodeURIComponent(selectedFile);

      // Set the href attribute of the brochure download link to the generated URL
      brochureDownloadLink.href = downloadUrl;
    });

    // Get the ojt download link and file selectelement
    var ojtDownloadLink = document.getElementById('ojt-download-link');
    var ojtFileSelect = document.getElementById('ojt-file-select');

    // Handle the ojt download link click event
    ojtDownloadLink.addEventListener('click', function() {
      // Get the selected file from the ojt file select element
      var selectedFile = ojtFileSelect.value;

      // Generate the download URL for the selected file
      var downloadUrl = 'download.php?file=' + encodeURIComponent(selectedFile);

      // Set the href attribute of the ojt download link to the generated URL
      ojtDownloadLink.href = downloadUrl;
    });
  </script>
</body>
</html>
