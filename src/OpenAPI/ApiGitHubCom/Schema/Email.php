<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class Email
{
    public const SCHEMA_JSON        = '{"title":"Email","required":["email","primary","verified","visibility"],"type":"object","properties":{"email":{"type":"string","format":"email","examples":["octocat@github.com"]},"primary":{"type":"boolean","examples":[true]},"verified":{"type":"boolean","examples":[true]},"visibility":{"type":["string","null"],"examples":["public"]}},"description":"Email"}';
    public const SCHEMA_TITLE       = 'Email';
    public const SCHEMA_DESCRIPTION = 'Email';
    public ?string $email;
    public ?bool $primary;
    public ?bool $verified;
    public ?string $visibility;

    public function __construct(string $email, bool $primary, bool $verified, string $visibility)
    {
        $this->email      = $email;
        $this->primary    = $primary;
        $this->verified   = $verified;
        $this->visibility = $visibility;
    }
}
