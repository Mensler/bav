<?php

namespace malkusch\bav;

/**
 * Copyright (C) 2006  Markus Malkusch <markus@malkusch.de>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 *
 * @package classes
 * @subpackage validator
 * @author Markus Malkusch <markus@malkusch.de>
 * @copyright Copyright (C) 2006 Markus Malkusch
 */
abstract class ValidatorIteration_Weighted extends ValidatorIteration
{

    /**
     * @var int
     */
    protected $divisor = 0;

    /**
     * @var Array an array of rotating weights
     */
    private $weights = array();

    /**
     */
    public function setWeights(Array $weights)
    {
        $this->weights = $weights;
    }

    /**
     * @param int $divisor
     */
    public function setDivisor($divisor)
    {
        $this->divisor = $divisor;
    }

    /**
     * @return int
     */
    protected function getWeight()
    {
        return $this->weights[$this->i % count($this->weights)];
    }
}