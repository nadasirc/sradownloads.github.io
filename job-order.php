<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Brochure</title>
        <meta name="description" content="job order">
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

      
    <div class="select.container">
        <div class="dropdown-container">
            <label for="file-select">Choose:</label>
            <select id="file-select">
                
                <option value="BOOM BARRIER.xlsx">BOOM BARRIER</option>
                <option value="BI-FOLD.xlsx">BI-FOLD</option>
                <option value="CCTV.xlsx">CCTV</option>
                <option value="EFENCE.xlsx">EFENCE</option>
                <option value="SECTIONAL GARAGE DOOR.xlsx">SECTIONAL GARAGE DOOR</option>
                <option value="SLIDING GATE.xlsx">SLIDING GATE</option>
                <option value="SLIDING GLASS DOOR.xlsx">SLIDING GLASS DOOR</option>
                <option value="SWING GATE.xlsx">SWING GATE</option>
                <option value="TURNING GATE.xlsx">TURNING GATE</option>
                <option value="TELESCOPIC GATE.xlsx">TELESCOPIC GATE</option>
            </select>
        </div>
        
        <br>
        <div class="download-link">
            <a href="#" id="download-link">Download File</a>
        </div>
    </div>

    <script>



        // Get the download link and file select element
        var downloadLink = document.getElementById('download-link');
        var fileSelect = document.getElementById('file-select');

        // Handle the download link click event
        downloadLink.addEventListener('click', function() {
            // Get the selected file from the file select element
            var selectedFile = fileSelect.value;

            // Generate the download URL for the selected file
            var downloadUrl = 'download.php?file=' + encodeURIComponent(selectedFile);

            // Set the href attribute of the download link to the generated URL
            downloadLink.href = downloadUrl;
        });
    </script> 
<br>
   



</script>
</body>
</html>
