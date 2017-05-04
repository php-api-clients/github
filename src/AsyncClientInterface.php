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
    public function meta(): PromiseInterface;

    public function user(string $user): PromiseInterface;

    public function whoami(): PromiseInterface;

    public function emojis(): Observable;

    public function myOrganizations(): Observable;

    public function licenses(): Observable;

    public function getRateLimitState(): RateLimitState;

    public function rateLimit(): PromiseInterface;
}
