<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command\Repository\Commit;

use ApiClients\Client\Github\Resource\Repository\CommitInterface;
use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\Repository\Commit\CreateStatusHandler")
 */
final class CreateStatusCommand
{
    /** @var CommitInterface */
    private $commit;

    /** @var string */
    private $state;

    /** @var null|string */
    private $targetUrl;

    /** @var null|string */
    private $description;

    /** @var null|string */
    private $context;

    /**
     * @param CommitInterface $commit
     * @param string          $state
     * @param string|null     $targetUrl
     * @param string|null     $description
     * @param string|null     $context
     */
    public function __construct(CommitInterface $commit, string $state, ?string $targetUrl = null, ?string $description = null, ?string $context = null)
    {
        $this->commit = $commit;
        $this->state = $state;
        $this->targetUrl = $targetUrl;
        $this->description = $description;
        $this->context = $context;
    }

    /**
     * @return CommitInterface
     */
    public function getCommit(): CommitInterface
    {
        return $this->commit;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @return string|null
     */
    public function getTargetUrl(): ?string
    {
        return $this->targetUrl;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @return string|null
     */
    public function getContext(): ?string
    {
        return $this->context;
    }
}
