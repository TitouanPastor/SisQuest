<?php

    class Badge{
        private $listeBadges;

        public function __construct(){
            $this->listeBadges = array();
        }
        
        public function addBadges($badge){

            if( !in_array($badge, $this->listeBadges) ){
                array_push($this->listeBadges, $badge);
            }
        }

        public function printBadges(){
            echo '<div class="container-badge">';
            foreach($this->listeBadges as $badge){
                echo '<div class="badge-item"> <img style="width:70px;height:70px;" src="badges/'.$badge.'">'.explode('.', $badge)[0].'</div>';
            }
            echo '</div>';
        }

        
            
        
    }

?>
