<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\View\Engine;

use Admin\Backend\Models\ClinicsMembers;
use Admin\Cabinet\Models\Clinics;

/**
 * Adapter to use PHP itself as templating engine
 * @property Clinics $clinic
 * @property ClinicsMembers $clinicMember
 */
class Php extends \Phalcon\Mvc\View\Engine\AbstractEngine
{

    /**
     * Renders a view using the template engine
     *
     * @param string $path
     * @param mixed $params
     * @param bool $mustClean
     */
    public function render(string $path, $params, bool $mustClean = false)
    {
    }
}
