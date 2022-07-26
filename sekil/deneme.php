<?php


class sekil{
	
public $yukseklik;
public $kenar;
public $kisaKenar;
function __construct($kenar,$kisaKenar=null,$yukseklik=null){


$this->yukseklik=$yukseklik;
$this->kenar=$kenar;
$this->kisaKenar=$kisaKenar;

}

}
	class dikdortgen extends sekil{

		

			public function alanHesapla(){


			return pow($this->kenar, 2)*pow($this->kenar, 2);
			}
			public function cevreHesapla(){

				
				return $this->kenar*$this->kisaKenar;
			}

			}

			class ucgen extends sekil{

				public function alanHesapla(){

			   return $this->kenar*$this->yukseklik;
				}
					public function cevreHesapla(){


						return $this->kenar+$this->kisaKenar+$this->yukseklik;			
					}
			}
			class kare extends sekil{

					public function alanHesapla(){


						return  pow($this->kenar, 2);
					}
					public function cevreHesapla(){

				
						return  $this->kenar*4;
						}

			}

$kare=new kare(4);
$dikdortgen=new dikdortgen(4,3);
$ucgen=new ucgen(4,3,1);

echo "Karenin Çevresi: ".$kare->cevreHesapla().'</br>';
echo "Dikdörtgenin Çevresi: ".$dikdortgen->cevreHesapla().'</br>';
echo "Üçgenin Çevresi: ".$ucgen->cevreHesapla().'</br>';











 ?>