<?php
class Model_latihan1 extends CI_Model
{
    //membuat variable untuk menampung nilai
    public $n1, $n2, $hasil;
    //method penjumlahan
    public function jumlah($n1 = null, $n2 = null)
    {
        $this->n1 = $n1;
        $this->n2 = $n2;
        $this->hasil = $this->n1 + $this->n2;
        return $this->hasil;
    }
}