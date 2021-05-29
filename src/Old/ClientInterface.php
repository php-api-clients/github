<?php

declare(strict_types=1);

namespace ApiClients\Client\Github;

use ApiClients\Client\Github\Resource\UserInterface;
use ApiClients\Foundation\Resource\ResourceInterface;

interface ClientInterface
{
    /**
     * Take a string create by the extract method and hydrate it back to a resource.
     */
    public function hydrate(string $resource): ResourceInterface;

    /**
     * Extract a resource into a string for storage.
     */
    public function extract(ResourceInterface $resource): string;

    public function user(string $user): UserInterface;

    public function getRateLimitState(): RateLimitState;
}
