<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async\Contents;

use ApiClients\Client\Github\Resource\Contents\FileOperation as BaseFileOperation;

class FileOperation extends BaseFileOperation
{
    public function refresh(): FileOperation
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
