<?php

Class Kota {

  public function __construct() {
		$this->curl = curl_init();
		$this->api_key = "6613d96dda5b79ed55b6e163bbd1c953";
	}
  
  //ambil provinsi
  public function Ambil_provinsi(){
    curl_setopt_array($this->curl, array(
      //   CURLOPT_URL => "https://api.rajaongkir.com/starter/province?id=12",
        CURLOPT_URL => "https://api.rajaongkir.com/starter/province",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
          "key: $this->api_key"
        ),
      ));
      
      $response = curl_exec($this->curl);
      $err = curl_error($this->curl);
      
      curl_close($this->curl);
      
      if ($err) {
        return "cURL Error #:" . $err;
      } else {
        $decode_provinsi = json_decode($response, true);
        return $decode_provinsi;
      }
  }

  // ambil kota
  public function Ambil_kota(){
    curl_setopt_array($this->curl, array(
      // CURLOPT_URL => "https://api.rajaongkir.com/starter/city?id=39&province=5",
      CURLOPT_URL => "https://api.rajaongkir.com/starter/city",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "key: $this->api_key"
      ),
    ));

    $response = curl_exec($this->curl);
    $err = curl_error($this->curl);
    
    curl_close($this->curl);
    
    if ($err) {
      return "cURL Error #:" . $err;
    } else {
      // print_r($response);
      $decode_kota = json_decode($response, true);
      // print_r($decode_kota);
      return $decode_kota;
    }
  }
  public function ambil_cost(){
    curl_setopt_array($this->curl, array(
      CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => "origin=501&destination=114&weight=1700&courier=jne",
      CURLOPT_HTTPHEADER => array(
        "content-type: application/x-www-form-urlencoded",
        "key: 6613d96dda5b79ed55b6e163bbd1c953"
      ),
    ));
    
    $response = curl_exec($this->curl);
    // var_dump($response);
    $err = curl_error($this->curl);
    
    curl_close($this->curl);
    
    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
        // print_r($response);
        $decode_cost = json_decode($response, true);
        // print_r($decode_cost);
        return $decode_cost;
    }
  }
}

$laptop_kota = new Kota();
// print_r($laptop_kota->ambil_kota());
?>