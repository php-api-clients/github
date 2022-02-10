<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async;

use ApiClients\Client\Github\Resource\CodeOfConduct as BaseCodeOfConduct;
use Exception;

class CodeOfConduct extends BaseCodeOfConduct
{
    public function refresh(): CodeOfConduct
    {
        throw new Exception('TODO: create refresh method!');
    }
}
