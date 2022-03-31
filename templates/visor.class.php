<?php

    class Visor {
        public function retornarVisor($visor) {
            echo '
               <input style="width: 109px;" type="text" name="valores" readonly value="'.$visor.'" />
            ';
        }
    }