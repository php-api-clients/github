<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;

interface OrganizationInterface extends ResourceInterface
{
    public const HYDRATE_CLASS = 'Organization';

    public function id(): int;

    public function login(): string;

    public function url(): string;

    public function reposUrl(): string;

    public function eventsUrl(): string;

    public function hooksUrl(): string;

    public function issuesUrl(): string;

    public function membersUrl(): string;

    public function publicMembersUrl(): string;

    public function avatarUrl(): string;

    public function description(): string;
}
