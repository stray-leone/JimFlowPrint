<?php
namespace Jimdo\JimkanbanBundle\Lib\Printer;
use \Jimdo\JimkanbanBundle\Entity\Printer;

interface PrinterInterface
{
    public function doPrint($printer, array $file);
}