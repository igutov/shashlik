<?php
/**
 * Created by PhpStorm.
 * User: Мария
 * Date: 24.04.2018
 * Time: 20:33
 */
require_once "PHPExcel.php";

class Controller
{
    public $cells = array(
        'A'=>'ID',
        'B'=>'Раздел',
        'C'=>'Название',
        'D'=>'Вес',
        'E'=>'Состав',
        'G'=>'Цена'
    );

    public function object2file($value, $filename)
    {
        $str_value = serialize($value);
        $f = fopen($filename, 'w');
        fwrite($f, $str_value);
        fclose($f);
    }




    public function getPhpExcel() {
        return PHPExcel_IOFactory::load("./goods.xlsx");
    }


    public function xlsToMysql() {

        $this->xls = $this->getPhpExcel();

        $this->xls->setActiveSheetIndex(0);

        $sheet = $this->xls->getActiveSheet();

        $rowIterator = $sheet->getRowIterator();


        $arr = array();
        foreach($rowIterator as $row) {

            if($row->getRowIndex() != 1) {
                $cellIterator = $row->getCellIterator();
                foreach($cellIterator as $cell) {
                    $cellPath = $cell->getColumn();
                    if(isset($this->cells[$cellPath])) {
                        $arr[$row->getRowIndex()][$this->cells[$cellPath]] = $cell->getCalculatedValue();
                    }
                }
            }
        }

       print_r($arr);
        $this->object2file($arr, 'array.txt');

    }

    function object_from_file($filename)
    {
        $file = file_get_contents($filename);
        $value = unserialize($file);
        return $value;
    }



}