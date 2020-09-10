<?php

class Mobil {
	private $merk, $tipe, $mesin, $max_speed;

	public function cetakTipe () {
		return $this->tipe;
	}

   function kecepatanMaksimal () {
		return "Kecepatan Maksimal Dari Mobil Ini Adalah ".$this ->max_speed;
	}

	function injekGas() {
		return "mengalirkan bensin ke ruang bakar, rpm naik, roda berputar";
	}
}

class BMW extends Mobil {

}

class Tesla extends Mobil {
	function selfParking () {
		echo "Parkir Sendiri";
	}


	function injekGas() {
		return "mengalirkan listrik ke dinamo, rpm naik, roda berputar";
	}
} 


$bmw = new BMW;
$bmw->merk = "BMW";
$bmw->tipe = "320i";
$bmw->mesin = "2000cc";
$bmw->max_speed = "280km/h";

$tesla = new Tesla;
$tesla->merk = "Tesla";
$tesla->tipe = "Model X";
$tesla->mesin = "Listrik";
$tesla->max_speed = "280km/h";

echo "BMW : ".$bmw->injekGas();
echo "<br>";
echo "<br>";
echo "Tesla : ".$tesla->injekGas();