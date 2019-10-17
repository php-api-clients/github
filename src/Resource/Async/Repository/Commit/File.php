<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async\Repository\Commit;

use ApiClients\Client\Github\Resource\Repository\Commit\File as BaseFile;

class File extends BaseFile
{
    public function refresh(): File
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
