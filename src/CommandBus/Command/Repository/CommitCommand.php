<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command\Repository;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\Repository\CommitHandler")
 */
final class CommitCommand
{
    /** @var string */
    private $repository;

    /** @var string */
    private $message;

    /** @var string */
    private $tree;

    /** @var string[]|null */
    private $commit;

    /**
     * @param string        $repository
     * @param string        $message
     * @param string        $tree
     * @param string[]|null $commit
     */
    public function __construct(string $repository, string $message, string $tree, ?string ...$commit)
    {
        $this->repository = $repository;
        $this->message = $message;
        $this->tree = $tree;
        $this->commit = $commit;
    }

    /**
     * @return string
     */
    public function getRepository(): string
    {
        return $this->repository;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @return string
     */
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
