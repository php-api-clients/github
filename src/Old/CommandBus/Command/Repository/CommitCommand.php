<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command\Repository;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\Repository\CommitHandler")
 */
final class CommitCommand
{
    private string $repository;

    private string $message;

    private string $tree;

    /** @var string[]|null */
    private ?array $commit = null;

    /**
     * @param string[]|null $commit
     */
    public function __construct(string $repository, string $message, string $tree, ?string ...$commit)
    {
        $this->repository = $repository;
        $this->message    = $message;
        $this->tree       = $tree;
        $this->commit     = $commit;
    }

    public function getRepository(): string
    {
        return $this->repository;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function getTree(): string
    {
        return $this->tree;
    }

    /**
     * @return string[]|null
     */
    public function getCommit(): ?array
    {
        return $this->commit;
    }
}
