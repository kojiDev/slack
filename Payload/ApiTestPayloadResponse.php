<?php

/*
 * This file is part of the CLSlackBundle.
 *
 * (c) Cas Leentfaar <info@casleentfaar.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CL\Slack\Payload;

use JMS\Serializer\Annotation as Serializer;

/**
 * @author Cas Leentfaar <info@casleentfaar.com>
 */
class ApiTestPayloadResponse extends AbstractPayloadResponse
{
    /**
     * @var array
     *
     * @Serializer\Type("array")
     */
    protected $args = [];

    /**
     * @return array
     */
    public function getArguments()
    {
        return $this->args;
    }
}
