<?php
namespace Eudovic\Linx;

use Eudovic\Linx\Helpers\ApiRequests;



class Linx{
	private $user;
	private $pass;
	private $keyEncode;
	private $domain;
	
	public function __construct($user,$pass,$domain){
		$this->user=$user;
		$this->pass=$pass;
		$this->keyEncode="Basic ".base64_encode($this->user.":".$this->pass);
		$this->domain=$domain;
		
	}
	
		public function request($endpoint,$parametros,$type){
			$apiRequest=new ApiRequests(
				[
				"Authorization: ".$this->keyEncode,
				'Content-Type: application/json',
				'Accept: application/json'
				],$this->domain);
			return $apiRequest->{$type}($endpoint,$parametros);
		}

}

?>