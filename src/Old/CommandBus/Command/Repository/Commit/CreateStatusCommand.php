<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command\Repository\Commit;

use ApiClients\Client\Github\Resource\Repository\CommitInterface;
use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\Repository\Commit\CreateStatusHandler")
 */
final class CreateStatusCommand
{
    private CommitInterface $commit;

    private string $state;

    private ?string $targetUrl = null;

    private ?string $description = null;

    private ?string $context = null;

    public function __construct(CommitInterface $commit, string $state, ?string $targetUrl = null, ?string $description = null, ?string $context = null)
    {
        $this->commit      = $commit;
        $this->state       = $state;
        $this->targetUrl   = $targetUrl;
        $this->description = $description;
        $this->context     = $context;
    }

    public function getCommit(): CommitInterface
    {
        return $this->commit;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function getTargetUrl(): ?string
    {
        return $this->targetUrl;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getContext(): ?string
    {
        return $this->context;
    }
}
