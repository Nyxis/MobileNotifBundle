<?php

/*
 * This file is part of the MobileNotifBundle package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LinkValue\MobileNotifBundle\Profiler;

use Symfony\Component\Stopwatch\StopwatchEvent;

/**
 * ClientProfilerInterface.
 *
 * @package MobileNotifBundle
 * @author Oliver Thebault <oliver.thebault@gmail.com>
 */
interface ClientProfilerInterface
{
    /**
     * Start profiling a client call.
     *
     * @param $message
     *
     * @return StopwatchEvent
     */
    public function startProfiling($message);

    /**
     * Stop profiling a client call.
     *
     * @param StopwatchEvent $event
     * @param $result
     */
    public function stopProfiling(StopwatchEvent $event, $result);

    /**
     * Get profiling data of client calls.
     *
     * @return array
     */
    public function getCalls();
}
