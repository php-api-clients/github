<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Contents;

use ApiClients\Foundation\Resource\ResourceInterface;

interface FileOperationInterface extends ResourceInterface
{
    public const HYDRATE_CLASS = 'Contents\\FileOperation';

    public function content(): Contents\File;

    public function commit(): Git\Commit;
}
