<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>VIDEOS</title>
  <meta name="description" content="videos">
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

<style>
  /* Styles for container */
.container {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: end;
  height: auto;
  max-width: fit-content;
  margin: auto;
  margin-top: 20px;
  padding: initial;
  background-color: #c3c3c3;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

/* Styles for video section */
.video-section {
  text-align: center;
}

.video-player {
  width: 40%; /* Set the desired width */
  height: auto; /* Allow the height to adjust proportionally */
}

/* Styles for video dropdowns */
.video-dropdown {
  display: inline-block;
  margin: 10px;
}

.video-dropdown select {
  width: 200px;
  padding: 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid #ccc;
}

/* Styles for download buttons */
.download-btn {
  display: inline-block;
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  margin-top: 10px;
}

h2 {
  font-size: 15px; /* Adjust the font size as desired */
  font-family: Arial, sans-serif; /* Specify the desired font family */
}

.download-btn:hover {
  background-color: #45a049;
}

/* Media queries for responsiveness */
@media screen and (max-width: 600px) {
  .video-player {
    width: 100%; /* Set the desired width */
    height: auto; /* Allow the height to adjust proportionally */
  }

  /* Adjust other styles for better mobile viewing */
  .container {
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 20px;
  }

  .video-dropdown select {
    width: 100%;
  }
}


</style>

<script>
function changeVideo(element) {
  var selectedVideo = element.value;
  var videoPlayer = document.getElementById('video-player');
  var downloadLink = document.getElementById('download-link');

  videoPlayer.src = selectedVideo;
  downloadLink.href = selectedVideo;
}

function playVideo() {
  var videoPlayer = document.getElementById('video-player');
  videoPlayer.play();
}
</script>


<br>
<div class="video-section">
  <video id="video-player" autoplay class="video-player" controls poster="files/logo/thumbnail.jpg">
    <source src="" type="video/mp4">
    <!-- Add more source elements for different video formats if necessary -->
    Your browser does not support the video tag.
  </video>
</div>

<!----------SLIDING GATE------------>
<div class="container">
  <div class="video-section">
    <h2>SLIDING GATES</h2>
    <div class="video-dropdown">
      <select onchange="changeVideo(this)">
        <option value="">--select-video--</option>
        <option value="files/videos/SLIDING GATES/PHILIP GAOVARI - SLIDING GATE (BLACK).mp4">PHILIP GAOVARI - SLIDING GATE</option>
        <option value="files/videos/SLIDING GATES/SLIDING GATE WITH MOBILE MODULE (BLACK).mp4">SLIDING GATE with MOBILE MODULE</option>
        <option value="files/videos/SLIDING GATES/DUAL INDUSTRIAL SLIDING GATE AUTOMATION ONLY (RED).mp4">DUAL INDUSTRIAL SLIDING GATE AUTOMATION (RED)</option>
        <option value="files/videos/SLIDING GATES/SLIDING GATE AUTOMATION ONLY(GRAY).mp4">SLIDING GATE AUTOMATION ONLY(GRAY)</option>
        <option value="files/videos/SLIDING GATES/BIG BEN-INDUSTRIAL SLIDING GATE (RFID).mp4">BIG BEN-INDUSTRIAL SLIDING GATE (RFID)</option>
        <option value="files/videos/SLIDING GATES/STAINLESS STEEL - SLIDING GATE.mp4">STAINLESS STEEL - SLIDING GATE</option>
        <option value="files/videos/SLIDING GATES/INDUSTRIAL SLIDING GATE (CYPRESS GATE1).mp4">INDUSTRIAL SLIDING GATE (CYPRESS GATE1)</option>
        <option value="files/videos/SLIDING GATES/INDUSTRIAL SLIDING GATE (CYPRESS GATE2).mp4">INDUSTRIAL SLIDING GATE (CYPRESS GATE2)</option>
        <option value="files/videos/SLIDING GATES/SLIDING GATE with SERVICE GATE.mp4">SLIDING GATE with SERVICE GATE</option>
        <option value="files/videos/SLIDING GATES/RHODORA - DUAL SLIDING GATE.mp4">RHODORA - DUAL SLIDING GATE</option>
        <option value="files/videos/SLIDING GATES/CATHERINE YOUNG - SLIDING GATE.mp4">CATHERINE YOUNG - SLIDING GATE</option>
        <option value="files/videos/SLIDING GATES/SLIDING GATE - TINTED POLYGLASS.mp4">SLIDING GATE - TINTED POLYGLASS</option>
        <option value="files/videos/SLIDING GATES/BARAKITOK-SLIDING GATE.mp4">BARAKITOK-SLIDING GATE</option>
        <option value="files/videos/SLIDING GATES/SLIDING GATE (GRAY).mp4">SLIDING GATE (GRAY)</option>
        <option value="files/videos/SLIDING GATES/VINCE IMPERIAL - SLIDING GATE (BLACK).mp4">VINCE IMPERIAL - SLIDING GATE (BLACK)</option>

        <!-- Add more video options as needed -->
      </select>
    </div>
    </div>
<!----------BIFOLD GATE------------>
  <div class="video-section">
    <h2>BIFOLD GATE</h2>
    <div class="video-dropdown">
      <select onchange="changeVideo(this)">
        <option value="">--select-video--</option>
        <option value="files/videos/BI-FOLDING GATES/ANGELI MONSALE - BIFOLD GATE (BLACK).mp4">ANGELI MONSALE - BIFOLD GATE (BLACK)</option>
        <option value="files/videos/BI-FOLDING GATES/BIFOLD AUTOMATION ONLY (GRAY).mp4">BIFOLD AUTOMATION ONLY (GRAY)</option>
        <option value="files/videos/BI-FOLDING GATES/BIFOLD AUTOMATION ONLY (GREEN).mp4">BIFOLD AUTOMATION ONLY (GREEN)</option>
        <option value="files/videos/BI-FOLDING GATES/VIV MEDINA - BIFOLD AUTOMATION.mp4">VIV MEDINA - BIFOLD AUTOMATION</option>
        <option value="files/videos/BI-FOLDING GATES/LOBO - BIFOLD AUTOMATION ONLY .mp4">LOBO - BIFOLD AUTOMATION ONLY</option>
        <option value="files/videos/BI-FOLDING GATES/FAB AND AUTOMATION BIFOLD GATE (GRAY).mp4">FAB AND AUTOMATION BIFOLD GATE (GRAY)</option>
        <option value="files/videos/BI-FOLDING GATES/MARIO ADAN - FAB AND AUTOMATION BI-FOLD GATE.mp4">MARIO ADAN - FAB AND AUTOMATION BI-FOLD GATE</option>
        <option value="files/videos/BI-FOLDING GATES/KIKO BLANCO BIFOLD AND SWING GATE.mp4">KIKO BLANCO BIFOLD AND SWING GATE</option>
        <option value="files/videos/BI-FOLDING GATES/DOROTHY-BIFOLD AUTOMATION ONLY.mp4">DOROTHY-BIFOLD AUTOMATION ONLY</option>
        <option value="files/videos/BI-FOLDING GATES/JIMMY CALINISAN - FAB AND AUTOMATION BIFOLD GATE.mp4">JIMMY CALINISAN - FAB AND AUTOMATION BIFOLD GATE</option>
        <option value="files/videos/BI-FOLDING GATES/BIFOLD GATE STAINLESS FRAMEandGIPSON BOARD (AUTOMATION ONLY) .mp4">BIFOLD GATE STAINLESS FRAMEandGIPSON BOARD (AUTOMATION ONLY)</option>
        <option value="files/videos/BI-FOLDING GATES/DERICK NARVACAN FAB AND AUTOMATION BIFOLD GATE (BLACK).mp4">DERICK NARVACAN FAB AND AUTOMATION BIFOLD GATE (BLACK)</option>
        <option value="files/videos/BI-FOLDING GATES/BIFOLD GATE AUTOMATION ONLY (YELLOW).mp4">BIFOLD GATE AUTOMATION ONLY (YELLOW)</option>
        <option value="files/videos/BI-FOLDING GATES/HENRY UY - BIFOLD AUTOMATION ONLY (BLACK).mp4">HENRY UY - BIFOLD AUTOMATION ONLY (BLACK)</option>
        <option value="files/videos/BI-FOLDING GATES/REIGN NOVILLOS - FAB AND AUTOMATION BIFOLD (Novcon) Bamboo.mp4">REIGN NOVILLOS - FAB AND AUTOMATION BIFOLD (Novcon) Bamboo</option>
        <option value="files/videos/BI-FOLDING GATES/BIFOLD AUTOMATION ONLY.mp4">BIFOLD AUTOMATION ONLY</option>
        <option value="files/videos/BI-FOLDING GATES/JEFF DELUTE - AUTOMATION OF BIFOLD GATE(KINGGATES).mp4">JEFF DELUTE - AUTOMATION OF BIFOLD GATE(KINGGATES)</option>
        <option value="files/videos/BI-FOLDING GATES/WILLARD RANJO - BI-FOLD GATE.mp4">WILLARD RANJO - BI-FOLD GATE</option>
        <option value="files/videos/BI-FOLDING GATES/BIFOLDING GATE (BLACK AND GOLD).mp4">BIFOLDING GATE (BLACK AND GOLD)</option>
        <option value="files/videos/BI-FOLDING GATES/BEN PASCO - BIFOLD AND SWING (BLACK).mp4">BEN PASCO - BIFOLD AND SWING (BLACK)</option>
        <option value="files/videos/BI-FOLDING GATES/SWING AND BIFOLD AUTOMATION ONLY.mp4">SWING AND BIFOLD AUTOMATION ONLY</option>
        <option value="files/videos/BI-FOLDING GATES/MELODY CHUNG - BIFOLD AND SWING.mp4">MELODY CHUNG - BIFOLD AND SWING</option>
        <option value="files/videos/BI-FOLDING GATES/SANJU - BIFOLDING GATE.mp4">SANJU - BIFOLDING GATE</option>
        <option value="files/videos/BI-FOLDING GATES/ALVIN TAN - BIFOLDING GATE (WPC).mp4">ALVIN TAN - BIFOLDING GATE (WPC)</option>
        <option value="files/videos/BI-FOLDING GATES/BENG BAOBAO - BIFOLDING GATE (BROWN).mp4">BENG BAOBAO - BIFOLDING GATE (BROWN)</option>
        
        
        <!-- Add more video options as needed -->
      </select>
    </div>
    </div>
<!----------SWING GATE------------>
    <div class="video-section">
    <h2>SWING GATE</h2>
    <div class="video-dropdown">
      <select onchange="changeVideo(this)">
        <option value="">--select-video--</option>
        <option value="files/videos/SWING GATES/SOLENN HEUSSAFF - FRONT SWING GATE (BLACK) .mp4">SOLENN HEUSSAFF - FRONT SWING GATE (BLACK)</option>
        <option value="files/videos/SWING GATES/ALLAN RACELIS - SWING GATE (BLACK).mp4">ALLAN RACELIS - SWING GATE (BLACK)</option>
        <option value="files/videos/SWING GATES/BOY OZEATA-MALARAYAT FAB AND AUTOMATION OF SWING GATE (BLACK AND BROWN).mp4">BOY OZEATA-MALARAYAT FAB AND AUTOMATION OF SWING GATE (BLACK AND BROWN)</option>
        <option value="files/videos/SWING GATES/DANTE AUSTRIA - SWING GATE AUTOMATION.mp4">DANTE AUSTRIA - SWING GATE AUTOMATION</option>
        <option value="files/videos/SWING GATES/DCI PIMENTEL - FAB AND AUTOMATION SWING GATE (BLACK).mp4">DCI PIMENTEL - FAB AND AUTOMATION SWING GATE (BLACK)</option>
        <option value="files/videos/SWING GATES/LESTER VILLIARICA - SWING GATE AUTOMATION ONLY with WIFI MODULE.mp4">LESTER VILLIARICA - SWING GATE AUTOMATION ONLY with WIFI MODULE</option>
        <option value="files/videos/SWING GATES/LIPA - SWING GATE FAB AND AUTOMATION (BLACK).mp4">LIPA - SWING GATE FAB AND AUTOMATION (BLACK)</option>
        <option value="files/videos/SWING GATES/SWING GATE AUTOMATION (BLACK).mp4">SWING GATE AUTOMATION (BLACK)</option>
        <option value="files/videos/SWING GATES/SWING GATE AUTOMATION ONLY (BLACK).mp4">SWING GATE AUTOMATION ONLY (BLACK)</option>
        <option value="files/videos/SWING GATES/SWING GATE AUTOMATION ONLY (with MOBILE MODULE).mp4">SWING GATE AUTOMATION ONLY (with MOBILE MODULE)</option>
        <option value="files/videos/SWING GATES/SWING GATE AUTOMATION ONLY (WOOD).mp4">SWING GATE AUTOMATION ONLY (WOOD)</option>
        <option value="files/videos/SWING GATES/SWING GATE AUTOMATION ONLY(BROWN).mp4">SWING GATE AUTOMATION ONLY(BROWN)</option>
        <option value="files/videos/SWING GATES/SWING GATE AUTOMATION ONLY.mp4">SWING GATE AUTOMATION ONLY</option>
        <option value="files/videos/SWING GATES/TIM OSWELL - BORACAY FAB AND AUTOMATION SWING GATE.mp4">TIM OSWELL - BORACAY FAB AND AUTOMATION SWING GATE</option>
        <option value="files/videos/SWING GATES/WILLIAM DAYRIT GATE AUTOMATION SWING.mp4">WILLIAM DAYRIT GATE AUTOMATION SWING</option>
        


        <!-- Add more video options as needed -->
      </select>
    </div>
    </div>

<!----------TELESCOPIC GATE------------>
    <div class="video-section">
    <h2>TELESCOPIC GATE</h2>
    <div class="video-dropdown">
      <select onchange="changeVideo(this)">
        <option value="">--select-video--</option>
        <option value="files/videos/TELESCOPIC GATES/BEN DAVIOWITS - TELESCOPIC AND SLIDING.mp4">BEN DAVIOWITS - TELESCOPIC AND SLIDING</option>
        <option value="files/videos/TELESCOPIC GATES/CAMILLE-TELESCOPIC GATE.mp4">CAMILLE-TELESCOPIC GATE</option>
        <option value="files/videos/TELESCOPIC GATES/CHRISTINE JACOB - TELESCOPIC GATE.mp4">CHRISTINE JACOB - TELESCOPIC GATE</option>
        <option value="files/videos/TELESCOPIC GATES/FERMIN SOLIS STO. TOMAS - TELESCOPIC GATE (GRAY ABD BROWN).mp4">FERMIN SOLIS STO. TOMAS - TELESCOPIC GATE (GRAY ABD BROWN)</option>
        <option value="files/videos/TELESCOPIC GATES/FRANCHESCA - TELESCOPIC GATE (BLACK).mp4">FRANCHESCA - TELESCOPIC GATE (BLACK)</option>
        <option value="files/videos/TELESCOPIC GATES/GENSON-INDUSTRIAL TELESCOPIC GATE.mp4">GENSON-INDUSTRIAL TELESCOPIC GATE</option>
        <option value="files/videos/TELESCOPIC GATES/JONATHAN MINA - TELESCOPIC GATE (STAINLESS POWDER COATED WHITE).mp4">JONATHAN MINA - TELESCOPIC GATE (STAINLESS POWDER COATED WHITE)</option>
        <option value="files/videos/TELESCOPIC GATES/JOY AUSTRIA - AUTOMATION OF TELESCOPIC GATE(BLACK).mp4">JOY AUSTRIA - AUTOMATION OF TELESCOPIC GATE(BLACK)</option>
        <option value="files/videos/TELESCOPIC GATES/NELSON - TELESCOPIC GATE (WHITE).mp4">NELSON - TELESCOPIC GATE (WHITE)</option>
        <option value="files/videos/TELESCOPIC GATES/PHILIP GAOVARI -TELESCOPIC GATE.mp4">PHILIP GAOVARI -TELESCOPIC GATE</option>
        <option value="files/videos/TELESCOPIC GATES/RACELIS - DUAL TELESCOPIC GATE (BLACK).mp4">RACELIS - DUAL TELESCOPIC GATE (BLACK)</option>
 <!-- Add more video options as needed -->
      </select>
    </div>
    </div>

<!----------GARAGE DOOR------------>
<div class="video-section">
  <h2>GARAGE DOOR</h2>
  <div class="video-dropdown">
    <select onchange="changeVideo(this)">
      <option value="">--select-video--</option>
      <option value="files/videos/GARAGE DOOR/DOC. MICHELLE BERBERABE - GARAGE DOOR.mp4">DOC. MICHELLE BERBERABE - GARAGE DOOR</option>
      <option value="files/videos/GARAGE DOOR/ESCALMA-GARAGE DOOR POLYGLASS 1.mp4">ESCALMA-GARAGE DOOR POLYGLASS 1</option>
      <option value="files/videos/GARAGE DOOR/ESCALMA-GARAGE DOOR POLYGLASS 2.mp4">ESCALMA-GARAGE DOOR POLYGLASS 2</option>
      <option value="files/videos/GARAGE DOOR/UMALI-GARAGE DOOR (BROWN).mp4">UMALI-GARAGE DOOR (BROWN)</option>
      <option value="files/videos/GARAGE DOOR/CELLIS-GARAGE DOOR (GRAY).mp4">CELLIS-GARAGE DOOR (GRAY)</option>
      <option value="files/videos/GARAGE DOOR/WAYCON-GARAGE DOOR POLY URETHANE(GRAY FRONT,WHITE BACK).mp4">WAYCON-GARAGE DOOR POLY URETHANE(GRAY FRONT,WHITE BACK)</option>
      <option value="files/videos/GARAGE DOOR/GRILLED TYPE GARAGE DOOR-STAINLESS.mp4">GRILLED TYPE GARAGE DOOR-STAINLESS</option>
      <option value="files/videos/GARAGE DOOR/DR DIZON PAMPANGA - POLY GLASS GARAGE DOOR.mp4">DR DIZON PAMPANGA - POLY GLASS GARAGE DOOR</option>
      <option value="files/videos/GARAGE DOOR/POLYURETHANE GARAGE DOOR WHITE1.mp4">POLYURETHANE GARAGE DOOR WHITE1</option>
      <option value="files/videos/GARAGE DOOR/POLYURETHANE GARAGE DOOR WHITE2.mp4">POLYURETHANE GARAGE DOOR WHITE2</option>
      <option value="files/videos/GARAGE DOOR/JACQUILINE - GARAGE DOOR POLYGLASS.mp4">JACQUILINE - GARAGE DOOR POLYGLASS</option>
      <option value="files/videos/GARAGE DOOR/SECTIONAL GARAGE DOOR WHITE.mp4">SECTIONAL GARAGE DOOR WHITE</option>
      <option value="files/videos/GARAGE DOOR/LESTER VILLIARICA -US TYPE GARAGE DOOR.mp4">LESTER VILLIARICA -US TYPE GARAGE DOOR</option>
      <option value="files/videos/GARAGE DOOR/RACSAG - GARAGE DOOR (GRAY).mp4">RACSAG - GARAGE DOOR (GRAY)</option>
      <option value="files/videos/GARAGE DOOR/NICOLE PAMPANGA-GARAGE DOOR (POLYGLASS).mp4">NICOLE PAMPANGA-GARAGE DOOR (POLYGLASS)</option>
      <option value="files/videos/GARAGE DOOR/TOM VAN STEEG - FROST TYPE POLY GLASS.mp4">TOM VAN STEEG - FROST TYPE POLY GLASS</option>
      <option value="files/videos/GARAGE DOOR/RACSAG - GARAGE DOOR (GRAY).mp4">RACSAG - GARAGE DOOR (GRAY)</option>
      <option value="files/videos/GARAGE DOOR/JAY-AR HALASAN-GARAGE DOOR (BROWN).mp4">JAY-AR HALASAN-GARAGE DOOR (BROWN)</option>
      <option value="files/videos/GARAGE DOOR/RACSAG - GARAGE DOOR (GRAY).mp4">RACSAG - GARAGE DOOR (GRAY)</option>
      <option value="files/videos/GARAGE DOOR/JAMES HOLDEN - GARAGE DOOR (AUTOMATION AND CHANGE POLY GLASS).mp4">JAMES HOLDEN - GARAGE DOOR (AUTOMATION AND CHANGE POLY GLASS)</option>
      <!-- Add more video options as needed -->
    </select>
  </div>
</div>

<!----------SLIDING DOOR----------->
<div class="video-section">
    <h2>SLIDING DOOR</h2>
    <div class="video-dropdown">
      <select onchange="changeVideo(this)">
        <option value="">--select-video--</option>
        <option value="files/videos/SLIDING GATES/BARAKITOK-SLIDING GATE.mp4">BARAKITOK-SLIDING GATE</option>
        <option value="files/videos/SLIDING GATES/BIG BEN-INDUSTRIAL SLIDING GATE (RFID).mp4">BIG BEN-INDUSTRIAL SLIDING GATE (RFID)</option>
        <option value="files/videos/SLIDING GATES/CATHERINE YOUNG - SLIDING GATE.mp4">CATHERINE YOUNG - SLIDING GATE</option>
        <option value="files/videos/SLIDING GATES/DUAL INDUSTRIAL SLIDING GATE AUTOMATION ONLY (RED).mp4">DUAL INDUSTRIAL SLIDING GATE AUTOMATION ONLY (RED)</option>
        <option value="files/videos/SLIDING GATES/INDUSTRIAL SLIDING GATE (CYPRESS GATE1).mp4">INDUSTRIAL SLIDING GATE (CYPRESS GATE1)</option>
        <option value="files/videos/SLIDING GATES/INDUSTRIAL SLIDING GATE (CYPRESS GATE2).mp4">INDUSTRIAL SLIDING GATE (CYPRESS GATE2)</option>
        <option value="files/videos/SLIDING GATES/PHILIP GAOVARI - SLIDING GATE (BLACK).mp4">PHILIP GAOVARI - SLIDING GATE (BLACK)</option>
        <option value="files/videos/SLIDING GATES/RHODORA - DUAL SLIDING GATE.mp4">RHODORA - DUAL SLIDING GATE</option>
        <option value="files/videos/SLIDING GATES/SLIDING GATE - TINTED POLYGLASS.mp4">SLIDING GATE - TINTED POLYGLASS</option>
        <option value="files/videos/SLIDING GATES/SLIDING GATE (GRAY).mp4">SLIDING GATE (GRAY)</option>
        <option value="files/videos/SLIDING GATES/SLIDING GATE AUTOMATION ONLY(GRAY).mp4">SLIDING GATE AUTOMATION ONLY(GRAY)</option>
        <option value="files/videos/SLIDING GATES/SLIDING GATE WITH MOBILE MODULE (BLACK).mp4">SLIDING GATE WITH MOBILE MODULE (BLACK)</option>
        <option value="files/videos/SLIDING GATES/SLIDING GATE with SERVICE GATE.mp4">SLIDING GATE with SERVICE GATE</option>
        <option value="files/videos/SLIDING GATES/STAINLESS STEEL - SLIDING GATE.mp4">STAINLESS STEEL - SLIDING GATE</option>
        <option value="files/videos/SLIDING GATES/VINCE IMPERIAL - SLIDING GATE (BLACK).mp4">VINCE IMPERIAL - SLIDING GATE (BLACK)</option>

        

        <!-- Add more video options as needed -->
      </select>
    </div>
    </div>



    <!----------TURNING GATE----------->
<div class="video-section">
    <h2>TURNING GATE</h2>
    <div class="video-dropdown">
      <select onchange="changeVideo(this)">
        <option value="">--select-video--</option>
        <option value="files/videos/TURNING GATES/TOM VAN STEEG - TURNING GATE.mp4">TOM VAN STEEG - TURNING GATE</option>
        <option value="files/videos/TURNING GATES/ARESSA MARIE - TURNING GATE (BLACK).mp4">ARESSA MARIE - TURNING GATE (BLACK)</option>
        <option value="files/videos/TURNING GATES/ARIEL VILLANUEVA-TURNING GATE (BLACK FRAME, BROWN CONWOOD).mp4">ARIEL VILLANUEVA-TURNING GATE (BLACK FRAME, BROWN CONWOOD)</option>
        <option value="files/videos/TURNING GATES/DERICK LEE TURNING GATE (GRAY).mp4">DERICK LEE TURNING GATE (GRAY)</option>
        <option value="files/videos/TURNING GATES/DUAL TURNING GATE (BROWN).mp4">DUAL TURNING GATE (BROWN)</option>
        <option value="files/videos/TURNING GATES/FELIX - AUTOMATION ONLY TURNING GATE .mp4">FELIX - AUTOMATION ONLY TURNING GATE</option>
        <option value="files/videos/TURNING GATES/KIM RAMIRES - TURNING GATE CONWOOD.mp4">KIM RAMIRES - TURNING GATE CONWOOD</option>
        <option value="files/videos/TURNING GATES/TURNING GATE (BLACK).mp4">TURNING GATE (BLACK)</option>
        <option value="files/videos/TURNING GATES/TURNING GATE (WPC).mp4">TURNING GATE (WPC)</option>
        

        <!-- Add more video options as needed -->
      </select>
    </div>
    </div>

</div>

<!----------BOOM BARRIER------------>
<div class="container">
  <div class="video-section">
    <h2>BOOM BARRIER</h2>
    <div class="video-dropdown">
      <select onchange="changeVideo(this)">
        <option value="">--select-video--</option>
        <option value="files/videos/BOOM BARRIER/DPWH - BOOM BARRIER.mp4">DPWH - BOOM BARRIER</option>
        <option value="files/videos/BOOM BARRIER/JTI - BOOM BARRIER TAP CARD AND LOOP DETECTOR.mp4">JTI - BOOM BARRIER TAP CARD AND LOOP DETECTOR</option>
        <option value="files/videos/BOOM BARRIER/BAUAN - TICKETING BOOM BARRIER.mp4">BAUAN - TICKETING BOOM BARRIER</option>
        <!-- Add more video options as needed -->
      </select>
    </div>
    </div>
<!----------SLIDING DOOR------------>
  <div class="video-section">
    <h2>SLIDING DOOR</h2>
    <div class="video-dropdown">
      <select onchange="changeVideo(this)">
        <option value="">--select-video--</option>
        <option value="files/videos/SLIDING DOORS/ITCPH - FRAMELESS SLIDING DOOR 1.mp4">ITCPH - FRAMELESS SLIDING DOOR 1</option>
        <option value="files/videos/SLIDING DOORS/ITCPH - FRAMELESS SLIDING DOOR 2.mp4">ITCPH - FRAMELESS SLIDING DOOR 2</option>
        <option value="files/videos/SLIDING DOORS/NICOLE - FRAMELESS SLIDING DOOR.mp4">NICOLE - FRAMELESS SLIDING DOOR</option>
        <option value="files/videos/SLIDING DOORS/ROLEX - AUTOMATED SLIDING STAINLESS DOOR.mp4">ROLEX - AUTOMATED SLIDING STAINLESS DOOR</option>
        
        
        
        <!-- Add more video options as needed -->
      </select>
    </div>
    </div>

    <!----------RAPID ROLL-UP------------>
  <div class="video-section">
    <h2>RAPID ROLL-UP</h2>
    <div class="video-dropdown">
      <select onchange="changeVideo(this)">
        <option value="">--select-video--</option>
        <option value="files/videos/RAPID ROLL UP/PARID ROLL UP (RED).mp4">PARID ROLL UP (RED)</option>
        <option value="files/videos/RAPID ROLL UP/RAPID ROLL UP (YELLOW).mp4">RAPID ROLL UP (YELLOW)</option>
        
        
        
        <!-- Add more video options as needed -->
      </select>
    </div>
    </div>
<!----------GALVALIUM / ROLL-UP------------>
    <div class="video-section">
    <h2>GALVALIUM / ROLL-UP</h2>
    <div class="video-dropdown">
      <select onchange="changeVideo(this)">
        <option value="">--select-video--</option>
        <option value="files/videos/ROLL UP/ROLL UP (WHITE).mp4">ROLL UP (WHITE)</option>

        


        <!-- Add more video options as needed -->
      </select>
    </div>
    </div>

<!----------EFENCE----------->
    <div class="video-section">
    <h2>E-FENCE ADS</h2>
    <div class="video-dropdown">
      <select onchange="changeVideo(this)">
        <option value="">--select-video--</option>
        <option value="files/videos/E-FENCE/EFENCE.mp4">EFENCE</option>

 <!-- Add more video options as needed -->
      </select>
    </div>
    </div>

<!----------FOSCAM AND REMOOTIO------------>
<div class="video-section">
  <h2>FOSCAM AND REMOOTIO ADS</h2>
  <div class="video-dropdown">
    <select onchange="changeVideo(this)">
      <option value="">--select-video--</option>
      <option value="files/videos/FOSCAM AND REMOOTIO/Remootio with Foscam.mp4">FOSCAM AND REMOOTIO</option>
      <!-- Add more video options as needed -->
    </select>
  </div>
</div>

<!----------OTHERS----------->
<div class="video-section">
    <h2>OTHERS</h2>
    <div class="video-dropdown">
      <select onchange="changeVideo(this)">
        <option value="">--select-video--</option>
        <option value="files/videos/OTHERS/AGA MUHLACH.mp4">AGA MUHLACH</option>
        <option value="files/videos/OTHERS/SMART RYE AUTOMATICS CNN INTERVIEW.mp4">SMART RYE AUTOMATICS CNN INTERVIEW</option>
        <option value="files/videos/OTHERS/SMART RYE AUTOMATICS.mp4">SMART RYE AUTOMATICS</option>

        <!-- Add more video options as needed -->
      </select>
    </div>
    </div>
    </div>
 
    <!----------BOOM BARRIER------------>
<div class="container">
  <div class="video-section">
    <h2>GARAGE DOOR PHILIPPINES</h2>
    <div class="video-dropdown">
      <select onchange="changeVideo(this)">
        <option value="">--select-video--</option>
        <option value="files/videos/GARAGE DOOR PHILIPPINES/CELLIS-GARAGE DOOR (GRAY).mp4">CELLIS-GARAGE DOOR (GRAY)</option>
        <option value="files/videos/GARAGE DOOR PHILIPPINES/DOC. MICHELLE BERBERABE - GARAGE DOOR.mp4">DOC. MICHELLE BERBERABE - GARAGE DOOR</option>
        <option value="files/videos/GARAGE DOOR PHILIPPINES/ESCALMA (INSIDE)- GARAGE DOOR.mp4">ESCALMA (INSIDE)- GARAGE DOOR</option>
        <option value="files/videos/GARAGE DOOR PHILIPPINES/ESCALMA (OUTSIDE)- GARAGE DOOR.mp4">ESCALMA (OUTSIDE)- GARAGE DOOR</option>
        <option value="files/videos/GARAGE DOOR PHILIPPINES/JAMES HOLDEN - GARAGE DOOR.mp4">JAMES HOLDEN - GARAGE DOOR</option>
        <option value="files/videos/GARAGE DOOR PHILIPPINES/JAY-AR HALASAN-GARAGE DOOR (BROWN).mp4">JAY-AR HALASAN-GARAGE DOOR (BROWN)</option>
        <option value="files/videos/GARAGE DOOR PHILIPPINES/POLYURETHANE GARAGE DOOR- GDP.mp4">POLYURETHANE GARAGE DOOR- GDP</option>
        <option value="files/videos/GARAGE DOOR PHILIPPINES/TOM VAN STEEG - GARAGE DOOR.mp4">TOM VAN STEEG - GARAGE DOOR</option>


        <!-- Add more video options as needed -->
      </select>
    </div>
    </div>
<!-------------PORTRAIT VIDEO---------->

    <div class="video-section">
    <h2>FB/IG/TIKTOK</h2>
    <div class="video-dropdown">
      <select onchange="changeVideo(this)">
        <option value="">--select-video--</option>
        <option value="files/videos/PORTRAIT/DR. DIZON.mp4">DR. DIZON</option>
        <option value="files/videos/PORTRAIT/ESCALMA 1.mp4">ESCALMA 1</option>
        <option value="files/videos/PORTRAIT/ESCALMA 2.mp4">ESCALMA 2</option>
        <option value="files/videos/PORTRAIT/GARAGE DOOR DARK GRAY.mp4">GARAGE DOOR DARK GRAY</option>
        <option value="files/videos/PORTRAIT/GARAGE DOOR GRAY.mp4">GARAGE DOOR GRAY</option>
        <option value="files/videos/PORTRAIT/JAY AR HALASAN - BROWN.mp4">JAY AR HALASAN - BROWN</option>
        <option value="files/videos/PORTRAIT/NICOLE - POLYGLASS.mp4">NICOLE - POLYGLASS</option>
        <option value="files/videos/PORTRAIT/POLYURETHANE - GARAGE DOOR.mp4">POLYURETHANE - GARAGE DOOR</option>
        <option value="files/videos/PORTRAIT/TOM VAN STEEG - POLY GLASS.mp4">TOM VAN STEEG - POLY GLASS</option>
        <option value="files/videos/PORTRAIT/RACSAG - GARAGE DOOR.mp4">RACSAG - GARAGE DOOR</option>
        
        <!-- Add more video options as needed -->
      </select>
    </div>




</body>
</html>
