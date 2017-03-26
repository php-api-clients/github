<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async;

use ApiClients\Client\Github\Resource\CodeOfCondyct as BaseCodeOfCondyct;

class CodeOfCondyct extends BaseCodeOfCondyct
{
    public function refresh() : CodeOfCondyct
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
