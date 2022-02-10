<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command\Repository\Contents;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\Repository\Contents\FileDeleteHandler")
 */
final class FileDeleteCommand
{
    private string $repository;

    private string $commitMessage;

    private string $url;

    private string $sha;

    private string $branch;

    public function __construct(
        string $repository,
        string $commitMessage,
        string $url,
        string $sha,
        string $branch = ''
    ) {
        $this->repository    = $repository;
        $this->commitMessage = $commitMessage;
        $this->url           = $url;
        $this->sha           = $sha;
        $this->branch        = $branch;
    }

    public function getRepository(): string
    {
        return $this->repository;
    }

    public function getCommitMessage(): string
    {
        return $this->commitMessage;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getSha(): string
    {
        return $this->sha;
    }

    public function getBranch(): string
    {
        return $this->branch;
    }
}
