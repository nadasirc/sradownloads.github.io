<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Get the file name from the query string
$file = $_GET['file'];

// Define the download paths for each file
$downloadPaths = [
    // JOB ORDER
    'BOOM BARRIER.xlsx' => 'files/JO/BOOM BARRIER.xlsx',
    'BI-FOLD.xlsx' => 'files/JO/BI-FOLD.xlsx',
    'CCTV.xlsx' => 'files/JO/CCTV.xlsx',
    'EFENCE.xlsx' => 'files/JO/EFENCE.xlsx',
    'SECTIONAL GARAGE DOOR.xlsx' => 'files/JO/SECTIONAL GARAGE DOOR.xlsx',
    'SLIDING GATE.xlsx' => 'files/JO/SLIDING GATE.xlsx',
    'SLIDING GLASS DOOR.xlsx' => 'files/JO/SLIDING GLASS DOOR.xlsx',
    'SWING GATE.xlsx' => 'files/JO/SWING GATE.xlsx',
    'TURNING GATE.xlsx' => 'files/JO/TURNING GATE.xlsx',
    'TELESCOPIC GATE.xlsx' => 'files/JO/TELESCOPIC GATE.xlsx',

    // BROCHURE
    '(NEW) KINGGATES DYNAMOS XL (SLIDING,TELESCOPIC,TURNING GATE) 2500KG' => 'files/brochure/(NEW) KINGGATES DYNAMOS XL (SLIDING,TELESCOPIC,TURNING GATE) 2500KG.zip',
    '(NEW) KINGGATES DYNAMOS (SLIDING,TELESCOPIC,TURNING GATE) 1000KG' => 'files/brochure/(NEW) KINGGATES DYNAMOS (SLIDING,TELESCOPIC,TURNING GATE) 1000KG.zip',
    '(NEW) KINGGATES JET (SWING,BIFOLD) 600KG' => 'files/brochure/(NEW) KINGGATES JET (SWING,BIFOLD) 600KG.zip',
    '(NEW) KINGGATES COUPER 24 (SWING,BIFOLD) 400KG' => 'files/brochure/(NEW) KINGGATES COUPER 24 (SWING,BIFOLD) 400KG.zip',
    
    'KING GATES' => 'files/brochure/KING GATES.zip',
    'KINGGATES COMPONENTS' => 'files/brochure/KINGGATES COMPONENTS.zip',
    'foscam' => 'files/brochure/foscam.png',
    'remootio' => 'files/brochure/Remootio.png',
    'garagedoor motor (MATIC 1200N)' => 'files/brochure/garagedoor motor (MATIC 1200N).png',
    'TURNSTILE FLAP' => 'files/brochure/TURNSTILE FLAP.zip',
    'Sliding Frameless Door' => 'files/brochure/Sliding Frameless Door.zip',
    'Automatic windows' => 'files/brochure/Automatic windows.zip',
    '(NEW) COUPER 24' => 'files/brochure/(NEW) COUPER 24.zip',
    '(NEW) JET XL' => 'files/brochure/(NEW) JET XL.zip',
    '(NEW) JET' => 'files/brochure/(NEW) JET.zip',
    '(NEW) DYNAMOS' => 'files/brochure/(NEW) DYNAMOS.zip',
    '(NEW) DYNAMOS XL' => 'files/brochure/(NEW) DYNAMOS XL.zip',

    // FROM OJT
    'Bi-Fold Gate' => 'files/from ojt/Bi-Fold Gate.pdf',
    'Boom Barrier' => 'files/from ojt/Boom Barrier.pdf',
    'Electric Fence' => 'files/from ojt/Electric Fence.pdf',
    'Final Video Output' => 'files/from ojt/Final Video Output.mp4',
    'Front Pages' => 'files/from ojt/Front Pages.pdf',
    'Presentation of Fabrication of Gates' => 'files/from ojt/Presentation of Fabrication of Gates.pptx',
    'Rapid Roll Up' => 'files/from ojt/Rapid Roll Up.pdf',
    'Sectional Garage Door' => 'files/from ojt/Sectional Garage Door.pdf',
    'Sliding Gate' => 'files/from ojt/Sliding Gate.pdf',
    'SRA AUTOMATED GARAGE DOOR' => 'files/from ojt/SRA AUTOMATED GARAGE DOOR.pdf',
    'SRA BOOM BARRIER' => 'files/from ojt/SRA BOOM BARRIER.pdf',
    'Swing Gate' => 'files/from ojt/Swing Gate.pdf',
    'Telescopic Gate' => 'files/from ojt/Telescopic Gate.pdf',
    'Turning Gate' => 'files/from ojt/Turning Gate.pdf',
    

    'SRA MOTORS _ ACCESSORIES' => 'files/from ojt/SRA Motors _ Accessories.zip',

];

// Check if the file exists in the download paths array
if (isset($downloadPaths[$file])) {
    $downloadFile = $downloadPaths[$file];

    // Set appropriate headers for the file download
    $fileExtension = pathinfo($downloadFile, PATHINFO_EXTENSION);
    $contentType = mime_content_type($downloadFile);

    header('Content-Type: ' . $contentType);
    header('Content-Disposition: attachment; filename="' . basename($downloadFile) . '"');
    header('Content-Length: ' . filesize($downloadFile));

    // Read the file and output it to the browser
    readfile($downloadFile);
} else {
    // File not found, handle the error
    echo 'File not found.';
}
?>
