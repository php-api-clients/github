<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Contents;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyFileOperation implements FileOperationInterface, EmptyResourceInterface
{
    public function content(): Contents\File
    {
        return null;
    }

    public function commit(): Git\Commit
    {
        return null;
    }
}
