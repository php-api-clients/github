<?php declare(strict_types=1);

namespace ApiClients\Client\Github;

use React\Promise\PromiseInterface;
use Rx\Observable;

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
