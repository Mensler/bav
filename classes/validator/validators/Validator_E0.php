<?php

namespace malkusch\bav;

/**
 * Implements E0
 *
 * Copyright (C) 2013 Heiko Hilbert <heiko.hilbert@trivago.com>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @author hhilbert 2013-03-12 added
 */
class Validator_E0 extends Validator_00
{

    protected function validate()
    {
        parent::validate();
        $this->accumulator += 7;
    }
}
