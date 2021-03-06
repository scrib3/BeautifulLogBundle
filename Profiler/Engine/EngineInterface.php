<?php
/*
 * This file is part of the SofHad package.
 *
 * (c) Sofiane HADDAG <sofiane.haddag@yahoo.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace So\BeautyLogBundle\Profiler\Engine;

use Symfony\Component\HttpKernel\Profiler\Profile;

interface EngineInterface
{

    /**
     * Load profiles
     *
     * @param \Symfony\Component\HttpKernel\Profiler\Profile $profile  The Profile
     *
     * @return Array
     */
    public function loadProfiles(Profile $profile = null);

    /**
     * Heap up the data
     *
     * @return void
     */
    public function heapUp();

}
