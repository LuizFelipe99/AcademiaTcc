<?php

abstract class MeuCalendario
{

   private $ano;
   private $mes;
   private $diasDoMes;
   private $diasDoMesAnterior;
   private $diasDoMesSeguinte;
   private $siglasDiasSemana = array("Dom", "Seg", "Ter", "Qua", "Qui", "Sex", "Sáb");
   private $nomesMesesAno = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");

   public function __construct($mes, $ano)
   {
       $this->mes = $mes;
       $this->ano = $ano;
   }

   public abstract function getCalendario();
}

?>