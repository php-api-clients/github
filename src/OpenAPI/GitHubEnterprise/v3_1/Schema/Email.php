<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class Email
{
    public const SCHEMA_TITLE       = 'Email';
    public const SCHEMA_DESCRIPTION = 'Email';
    private string $email;
    private bool $primary;
    private bool $verified;
    private string $visibility;

    public function email(): string
    {
        return $this->email;
    }

    public function primary(): bool
    {
        return $this->primary;
    }

    public function verified(): bool
    {
        return $this->verified;
    }

    public function visibility(): string
    {
        return $this->visibility;
    }
}