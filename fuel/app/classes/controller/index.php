<?php

class Controller_Index extends \Fuel\Core\Controller_Rest {
    public function action_index() {
        return $this->response(array("test"));
    }


}