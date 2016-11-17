<?php

    define('PAGE_WIDTH', 612);
    define('PAGE_HEIGHT', 792);

    $pdf = pdf_new();
    pdf_begin_document($pdf, "", "");
    pdf_begin_page($pdf, PAGE_WIDTH, PAGE_HEIGHT);

    $font = pdf_findfont($pdf, "Helvetica", "auto", false);
    pdf_setfont($pdf, $font, 30);
    pdf_show_xy($pdf, "PHP Unleashed", 10, PAGE_HEIGHT-40);
    pdf_setfont($pdf, $font, 12);
    pdf_show_xy($pdf, "Hello, World!", 10,PAGE_HEIGHT-55);

    pdf_end_page($pdf);
    pdf_end_document($pdf, "");

    $data = pdf_get_buffer($pdf);
    header('Content-type: application/pdf');
    header("Content-disposition: inline; filename=mypdf.pdf");
    header("Content-length: " . strlen($data));
    echo $data;

?>