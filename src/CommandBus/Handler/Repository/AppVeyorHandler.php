<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler\Repository;

use ApiClients\Client\AppVeyor\AsyncClient;
use ApiClients\Client\AppVeyor\Resource\ProjectInterface;
use ApiClients\Client\Github\CommandBus\Command\Repository\AppVeyorCommand;
use ApiClients\Client\Github\CommandBus\Command\Repository\TravisCommand;
use React\Promise\Promise;
use React\Promise\PromiseInterface;

final class AppVeyorHandler
{
    /**
     * @var AsyncClient
     */
    private $appveyor;

    /**
     * @param AsyncClient $appveyor
     */
    public function __construct(AsyncClient $appveyor)
    {
        $this->appveyor = $appveyor;
    }

    /**
     * @param  TravisCommand    $command
     * @return PromiseInterface
     */
    public function handle(AppVeyorCommand $command): PromiseInterface
    {
        return new Promise(function ($resolve, $reject) use ($command) {
            $repo = false;
            $this->appveyor->projects()->filter(function (ProjectInterface $project) use ($command) {
                return $project->repositoryType() === 'github' && $project->repositoryName() === $command->getRepository();
            })->take(1)->subscribe(function ($repository) use (&$repo) {
                $repo = $repository;
            }, function ($error) use ($reject) {
                $reject($error);
            }, function () use (&$repo, $resolve) {
                $resolve($repo);
            });
        });
    }
}
