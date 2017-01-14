<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async;

use ApiClients\Client\Github\Resource\Label as BaseLabel;

class Label extends BaseLabel
{
    public function refresh() : Label
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
