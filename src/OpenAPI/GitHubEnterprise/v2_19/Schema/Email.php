<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class Email
{
    public const SCHEMA_TITLE = 'Email';
    public const SPL_HASH = '000000005b3e215f000000001bb9a56a';
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
