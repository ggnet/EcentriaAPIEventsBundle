<?php
/*
 * This file is part of the ecentria group, inc. software.
 *
 * (c) 2016, ecentria group, inc.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Ecentria\Libraries\EcentriaAPIEventsBundle\Exception;

use OldSound\RabbitMqBundle\RabbitMq\ConsumerInterface;

/**
 * Ack Flow Exception
 * Forces a consumer to send acknowledgement to RabbitMQ
 *
 * @copyright   2016 OpticsPlanet, Inc
 * @author      Eugene Boiarynov <ievgen.boiarynov@opticsplanet.com>
 */
class AckException extends ConsumerException
{
    /**
     * Get flag
     *
     * @return int
     */
    public function getFlag()
    {
        return ConsumerInterface::MSG_ACK;
    }
}