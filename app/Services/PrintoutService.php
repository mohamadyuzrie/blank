<?php

namespace App\Services;

use PDF;

class Printout
{
    public static function generate($view, $data,
        $header = null, $footer = null, $options = [],
        $paper_size = 'a4', $orientation = 'portrait',
        $header_height = '50mm', $footer_height = '50mm', $default_spacing = '4')
    {
        $pdf = PDF::loadView($view, $data)->setPaper($paper_size)->setOrientation($orientation);

        // header
        if (isset($header)) {
            $header = view()->make($header, $data)->render();
            $pdf->setOption('header-spacing', $default_spacing);
            $pdf->setOption('header-html', $header);
            $pdf->setOption('margin-top', $header_height);
        }

        // footer
        if (isset($footer)) {
            $footer = view()->make($footer, $data)->render();
            $pdf->setOption('footer-html', $footer);
            $pdf->setOption('margin-bottom', $footer_height);
        }

        return $pdf;
    }

    public static function standardFooter($print_date, $footer_height = '15mm')
    {
        return [
            'footer-left' => "Print Date {$print_date}",
            'footer-line' => true,
            'footer-font-size' => 8,
            'footer-font-name' => 'sans-serif',
            'footer-right' => "Page [page] from [topage]",
            'margin-bottom' => $footer_height,
        ];
    }
}
