<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
use setasign\Fpdi\Fpdi;
use setasign\Fpdi\PdfReader;
class Page extends CI_Controller
{
    // path
    private $image_path;
    private $root_uploads_path;
    private $merge_uploads_path;
    private $watermark_uploads_path;
    private $file_image;



    function __construct ()
    {
        parent::__construct();
        $this->load->library('session');

        $this->image_path = __DIR__ . '/../../images/';
        $this->root_uploads_path = __DIR__ . '/../../upload/';
        $this->merge_uploads_path = $this->root_uploads_path . 'merge/';
        $this->watermark_uploads_path = $this->root_uploads_path . 'watermark/';

        $this->file_image = 'Test.png';
    }


    function index(){



    $pdf = new \Clegginabox\PDFMerger\PDFMerger;
    $file1 = $_SERVER['DOCUMENT_ROOT']  . "/Marge/upload/dummy.pdf";
    $file2 = $_SERVER['DOCUMENT_ROOT']  . "/Marge/upload/Dummy2.pdf";

    $pdf->addPDF($file1,'all');

    $pdf->addPDF($file2, 'all');

    $pdf->merge('file', $_SERVER['DOCUMENT_ROOT']  . "/Marge/upload/Ouput.pdf", 'F');

}
}
/*
 * Try another watermarkpdf class
 */
