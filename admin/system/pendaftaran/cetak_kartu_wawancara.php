<?php
    ob_start();
    include(dirname(__FILE__).'\kartu_wawancara.php');
    $content = ob_get_clean();
    require_once('../../asset/html2pdf/html2pdf.class.php');
    try
    {
        $html2pdf = new HTML2PDF('P', 'A4', 'fr');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $html2pdf->Output('kartu_wawancara.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
