<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command\Repository;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\Repository\ContentsHandler")
 */
final class ContentsCommand
{
    private string $fullname;

    private string $path;

    public function __construct(string $fullname, string $path)
    {
        $this->fullname = $fullname;
        $this->path     = $path;
    }

    public function getFullname(): string
    {
        return $this->fullname;
    }

    public function getPath(): string
    {
        return $this->path;
    }
}
