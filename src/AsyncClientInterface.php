<?php declare(strict_types=1);

namespace ApiClients\Client\Github;

use ApiClients\Client\Github\CommandBus\Command;
use React\EventLoop\LoopInterface;
use React\Promise\PromiseInterface;
use Rx\Observable;
use function ApiClients\Tools\Rx\unwrapObservableFromPromise;
use function React\Promise\resolve;

interface AsyncClientInterface
{
    public function user(string $user): PromiseInterface;

    public function whoami(): PromiseInterface;

    public function myOrganizations(): Observable;

    public function getRateLimitState(): RateLimitState;
}
