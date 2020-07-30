<?php

namespace application\models;

use application\core\Model;

class Banner extends Model
{
    public function getList()
    {
        return $this->db->row('SELECT * FROM banners ORDER BY position DESC');
    }
}
