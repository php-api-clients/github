<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Handler\Repository;

use ApiClients\Client\AppVeyor\AsyncClientInterface;
use ApiClients\Client\AppVeyor\Resource\ProjectInterface;
use ApiClients\Client\Github\CommandBus\Command\Repository\AppVeyorCommand;
use React\Promise\Promise;
use React\Promise\PromiseInterface;

use function strtolower;

final class AppVeyorHandler
{
    private AsyncClientInterface $appveyor;

    public function __construct(AsyncClientInterface $appveyor)
    {
        $this->appveyor = $appveyor;
    }

    public function handle(AppVeyorCommand $command): PromiseInterface
    {
        return new Promise(function ($resolve, $reject) use ($command): void {
            $repo = false;
            $this->appveyor->projects()->filter(static function (ProjectInterface $project) use ($command) {
                return strtolower($project->repositoryType()) === 'github' &&
                    strtolower($project->repositoryName()) === strtolower($command->getRepository());
            })->take(1)->subscribe(static function ($repository) use (&$repo): void {
                $repo = $repository;
            }, static function ($error) use ($reject): void {
                $reject($error);
            }, static function () use (&$repo, $resolve): void {
                $resolve($repo);
            });
        });
    }
}
