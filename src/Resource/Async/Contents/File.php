<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async\Contents;

use ApiClients\Client\Github\Resource\Contents\File as BaseFile;

class File extends BaseFile
{
    public function refresh() : File
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
