<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class Topic
{
    public const SCHEMA_TITLE       = 'Topic';
    public const SCHEMA_DESCRIPTION = 'A topic aggregates entities that are related to a subject.';
    private array $names            = [];

    public function names(): array
    {
        return $this->names;
    }
}
