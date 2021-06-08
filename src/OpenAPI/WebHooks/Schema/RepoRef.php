<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class RepoRef
{
    public const SCHEMA_TITLE       = 'Repo Ref';
    public const SCHEMA_DESCRIPTION = '';
    private int $id;
    private string $url;
    private string $name;

    public function id(): int
    {
        return $this->id;
    }

    public function url(): string
    {
        return $this->url;
    }

    public function name(): string
    {
        return $this->name;
    }
}
