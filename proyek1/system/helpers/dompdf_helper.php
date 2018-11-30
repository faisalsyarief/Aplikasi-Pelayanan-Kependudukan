<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
function generate_pdf($object, $filename='', $direct_download=TRUE) 
{
    require_once("dompdf/autoload.inc.php");
 
    $dompdf = new DOMPDF();
    $dompdf->load_html($object);
    $dompdf->render();
    if ($direct_download == TRUE)
        $dompdf->stream($filename);
    else
        return $dompdf->output();
    
}
?>