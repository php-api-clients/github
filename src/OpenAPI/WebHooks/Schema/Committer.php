<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Committer
{
    public const SCHEMA_TITLE       = 'Committer';
    public const SCHEMA_DESCRIPTION = 'Metaproperties for Git author/committer information.';
    /**
     * The git author's name.
     */
    private ?string $name = null;
    /**
     * The git author's email address.
     */
    private $email;
    private ?string $date     = null;
    private ?string $username = null;

    public function name(): ?string
    {
        return $this->name;
    }

    public function email()
    {
        return $this->email;
    }

    public function date(): ?string
    {
        return $this->date;
    }

    public function username(): ?string
    {
        return $this->username;
    }
}
