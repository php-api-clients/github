<?php declare(strict_types=1);

namespace ApiClients\Client\Github;

use ApiClients\Foundation\Resource\ResourceInterface;
use React\Promise\CancellablePromiseInterface;
use React\Promise\PromiseInterface;
use Rx\Observable;

interface AsyncClientInterface
{
    /**
     * Take a string create by the extract method and hydrate it back to a resource.
     *
     * @param string $resource
     * @return CancellablePromiseInterface
     */
    public function hydrate(string $resource): CancellablePromiseInterface;

    /**
     * Extract a resource into a string for storage.
     *
     * @param ResourceInterface $resource
     * @return CancellablePromiseInterface
     */
    public function extract(ResourceInterface $resource): CancellablePromiseInterface;

    public function meta(): PromiseInterface;

    public function user(string $user): PromiseInterface;

    public function whoami(): PromiseInterface;

    public function emojis(): Observable;

    public function myOrganizations(): Observable;

    public function licenses(): Observable;

    public function getRateLimitState(): RateLimitState;

    public function rateLimit(): PromiseInterface;
}
