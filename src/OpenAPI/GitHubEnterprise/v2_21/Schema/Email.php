<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class Email
{
    public const SCHEMA_TITLE = 'Email';
    public const SPL_HASH = '0000000045a095390000000057b08344';
    public const SCHEMA_DESCRIPTION = 'Email';
    private ?string $email = null;
    private ?bool $primary = null;
    private ?bool $verified = null;
    private ?string $visibility = null;
    public function email() : ?string
    {
        return $this->email;
    }
    public function primary() : ?bool
    {
        return $this->primary;
    }
    public function verified() : ?bool
    {
        return $this->verified;
    }
    public function visibility() : ?string
    {
        return $this->visibility;
    }
}
