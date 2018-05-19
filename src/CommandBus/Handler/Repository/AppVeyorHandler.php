<?php declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler\Repository;

use ApiClients\Client\AppVeyor\AsyncClientInterface;
use ApiClients\Client\AppVeyor\Resource\ProjectInterface;
use ApiClients\Client\Github\CommandBus\Command\Repository\AppVeyorCommand;
use React\Promise\Promise;
use React\Promise\PromiseInterface;

final class AppVeyorHandler
{
    /**
     * @var AsyncClientInterface
     */
    private $appveyor;

    /**
     * @param AsyncClientInterface $appveyor
     */
    public function __construct(AsyncClientInterface $appveyor)
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
