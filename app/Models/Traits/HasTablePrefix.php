<?php

namespace App\Models\Traits;

trait HasTablePrefix
{
    public function getTable()
    {
        if ($this->table === null) {
            $this->setTable($this->prefix.parent::getTable());
        }

        return $this->table;
    }
}
