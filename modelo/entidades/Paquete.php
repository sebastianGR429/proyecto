<?php
class Paquete{

   private $cod_paquete;
   private $nom_paquete;
   private $certificacion;
   private $iso;
   private $almacenamiento;
   private $bd;
   private $correos;
   private $sitios_web;
   private $costo_paquete;

  public function __construct($cod_paquete,$nom_paquete,$certificacion,$iso,
  $almacenamiento,$bd,$correos,$sitios_web,$costo_paquete)
  {
        $this->cod_paquete = $cod_paquete;
        $this->nom_paquete=$nom_paquete;
        $this->certificacion = $certificacion;
        $this->iso=$iso;
        $this->almacenamiento = $almacenamiento;
        $this->bd=$bd;
        $this->correos = $correos;
        $this->sitios_web=$sitios_web;
        $this->costo_paquete=$costo_paquete;
        

   }

   

   /**
    * Get the value of cod_paquete
    */ 
   public function getCod_paquete()
   {
      return $this->cod_paquete;
   }

   /**
    * Set the value of cod_paquete
    *
    * @return  self
    */ 
   public function setCod_paquete($cod_paquete)
   {
      $this->cod_paquete = $cod_paquete;

      return $this;
   }

   /**
    * Get the value of nom_paquete
    */ 
   public function getNom_paquete()
   {
      return $this->nom_paquete;
   }

   /**
    * Set the value of nom_paquete
    *
    * @return  self
    */ 
   public function setNom_paquete($nom_paquete)
   {
      $this->nom_paquete = $nom_paquete;

      return $this;
   }

   /**
    * Get the value of certificacion
    */ 
   public function getCertificacion()
   {
      return $this->certificacion;
   }

   /**
    * Set the value of certificacion
    *
    * @return  self
    */ 
   public function setCertificacion($certificacion)
   {
      $this->certificacion = $certificacion;

      return $this;
   }

   /**
    * Get the value of iso
    */ 
   public function getIso()
   {
      return $this->iso;
   }

   /**
    * Set the value of iso
    *
    * @return  self
    */ 
   public function setIso($iso)
   {
      $this->iso = $iso;

      return $this;
   }

   /**
    * Get the value of almacenamiento
    */ 
   public function getAlmacenamiento()
   {
      return $this->almacenamiento;
   }

   /**
    * Set the value of almacenamiento
    *
    * @return  self
    */ 
   public function setAlmacenamiento($almacenamiento)
   {
      $this->almacenamiento = $almacenamiento;

      return $this;
   }

   /**
    * Get the value of bd
    */ 
   public function getBd()
   {
      return $this->bd;
   }

   /**
    * Set the value of bd
    *
    * @return  self
    */ 
   public function setBd($bd)
   {
      $this->bd = $bd;

      return $this;
   }

   /**
    * Get the value of correos
    */ 
   public function getCorreos()
   {
      return $this->correos;
   }

   /**
    * Set the value of correos
    *
    * @return  self
    */ 
   public function setCorreos($correos)
   {
      $this->correos = $correos;

      return $this;
   }

   /**
    * Get the value of sitios_web
    */ 
   public function getSitios_web()
   {
      return $this->sitios_web;
   }

   /**
    * Set the value of sitios_web
    *
    * @return  self
    */ 
   public function setSitios_web($sitios_web)
   {
      $this->sitios_web = $sitios_web;

      return $this;
   }

   /**
    * Get the value of costo_paquete
    */ 
   public function getCosto_paquete()
   {
      return $this->costo_paquete;
   }

   /**
    * Set the value of costo_paquete
    *
    * @return  self
    */ 
   public function setCosto_paquete($costo_paquete)
   {
      $this->costo_paquete = $costo_paquete;

      return $this;
   }
}

?>