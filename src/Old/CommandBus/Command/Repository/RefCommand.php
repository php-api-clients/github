<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command\Repository;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\Repository\RefHandler")
 */
final class RefCommand
{
    /** @var string */
    private $repository;

    /** @var string */
    private $ref;

    /** @var string */
    private $commit;

    /**
     * @param string $repository
     * @param string $ref
     * @param string $commit
     */
    public function __construct(string $repository, string $ref, string $commit)
    {
        $this->repository = $repository;
        $this->ref = $ref;
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
    public function getRef(): string
    {
        return $this->ref;
    }

    /**
     * @return string
     */
    public function getCommit(): string
    {
        return $this->commit;
    }
}
