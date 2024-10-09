<?php

namespace Classes;

class Paginacion {

   public $paginaActual;
   public $registroXPagina;
   public $totalRegistros;

   public function __construct($paginaActual = 1, $registroXPagina = 10, $totalRegistros = 0) {
      $this->paginaActual = (int) $paginaActual;
      $this->registroXPagina = (int) $registroXPagina;
      $this->totalRegistros = (int) $totalRegistros;
   }

   public function offet() {
      return $this->registroXPagina * ($this->paginaActual - 1);
   }

   public function totalPaginas() {
      return ceil( $this->totalRegistros / $this->registroXPagina);
   }

   public function paginaAnterior() {
      $anterior = $this->paginaActual - 1;
      return ( $anterior > 0 ) ? $anterior : false;
   }

   public function paginaSiguiente() {
      $siguiente = $this->paginaActual + 1;
      return ( $siguiente <= $this->totalPaginas() ) ? $siguiente : false;
   }

   public function enlaceAnterior() {
      $html = '';
      if($this->paginaAnterior()) {
         $html .= "<a class=\"paginacion__enlace paginacion__enlace--texto\" href=\"?page={$this->paginaAnterior()}\">&laquo; Anterior</a>";
      }
      return $html;
   }

   public function enlaceSiguiente() {
      $html = '';
      if($this->paginaSiguiente()) {
         $html .= "<a class=\"paginacion__enlace paginacion__enlace--texto\" href=\"?page={$this->paginaSiguiente()}\">Siguiente &raquo;</a>";
      }
      return $html;
   }

   public function numerosPaginas() {
      $html = '';
      $totalPaginas = $this->totalPaginas();
      $actual = $this->paginaActual;

      if($totalPaginas <= 10) {
         for ($i = 1; $i <= $totalPaginas; $i++) { 
            $html .= $this->generarEnlace($i);
         }
      } else {
         $html .= $this->generarEnlace(1);
         
         if($actual > 3) {
            $html .= "<span class=\"paginacion__enlace paginacion__enlace--ellipsis\">...</span>";
         }

         $inicio = max(2, $actual - 1);
         $fin = min($totalPaginas - 1, $actual + 1);

         for ($i = $inicio; $i <= $fin; $i++) { 
            $html .= $this->generarEnlace($i);
         }

         if($actual < $totalPaginas - 2) {
            $html .= "<span class=\"paginacion__enlace paginacion__enlace--ellipsis\">...</span>";
         }

         $html .= $this->generarEnlace($totalPaginas);
      }
      return $html;
   }

   public function generarEnlace($pagina) {
      if($pagina === $this->paginaActual) {
         return "<span class=\"paginacion__enlace paginacion__enlace--actual\">{$pagina}</span>";
      } else {
         return "<a class=\"paginacion__enlace paginacion__enlace--numero\" href=\"?page={$pagina}\">{$pagina}</a>";
      }
   }

   public function paginacion() {
      $html = '';
      if($this->totalRegistros > 1) {
         $html .= '<div class="paginacion">';
         $html .= $this->enlaceAnterior();
         $html .= $this->numerosPaginas();
         $html .= $this->enlaceSiguiente();
         $html .= '</div>';
      }
      return $html;
   }

}