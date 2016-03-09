<?php

namespace Controller;

class Index extends \Fuel\Core\Controller_Rest {
    public function action_index() {
        return $this->response(array("test"));
    }
}