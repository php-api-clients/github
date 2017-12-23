<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler\Repository;

use ApiClients\Client\AppVeyor\AsyncClient;
use ApiClients\Client\AppVeyor\Resource\ProjectInterface;
use ApiClients\Client\Github\CommandBus\Command\Repository\AppVeyorCommand;
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
     * @param  AppVeyorCommand  $command
     * @return PromiseInterface
     */
    public function handle(AppVeyorCommand $command): PromiseInterface
    {
        return new Promise(function ($resolve, $reject) use ($command) {
            $repo = false;
            $this->appveyor->projects()->filter(function (ProjectInterface $project) use ($command) {
                return strtolower($project->repositoryType()) === 'github' &&
                    strtolower($project->repositoryName()) === strtolower($command->getRepository());
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
