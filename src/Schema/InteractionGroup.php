<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

final readonly class InteractionGroup
{
    public const SCHEMA_JSON = '{"enum":["existing_users","contributors_only","collaborators_only"],"type":"string","description":"The type of GitHub user that can comment, open issues, or create pull requests while the interaction limit is in effect.","examples":["collaborators_only"]}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The type of GitHub user that can comment, open issues, or create pull requests while the interaction limit is in effect.';
    public function __construct()
    {
    }
}
