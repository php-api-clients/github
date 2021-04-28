<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler\Repository;

use ApiClients\Client\Github\CommandBus\Command\Repository\TravisCommand;
use ApiClients\Client\Travis\AsyncClientInterface;
use React\Promise\PromiseInterface;

final class TravisHandler
{
    /**
     * @var AsyncClientInterface
     */
    private $travis;

    /**
     * @param AsyncClientInterface $travis
     */
    public function __construct(AsyncClientInterface $travis)
    {
        $this->travis = $travis;
    }

    /**
     * @param  TravisCommand    $command
     * @return PromiseInterface
     */
    public function handle(TravisCommand $command): PromiseInterface
    {
        return $this->travis->repository($command->getRepository());
    }
}
