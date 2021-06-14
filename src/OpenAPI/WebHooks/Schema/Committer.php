<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Committer
{
    public const SCHEMA_TITLE = 'Committer';
    public const SCHEMA_DESCRIPTION = 'Metaproperties for Git author/committer information.';
    /**
     * The git author's name.
     */
    private string $name;
    /**
     * The git author's email address.
     */
    private $email;
    private ?string $date = null;
    private ?string $username = null;
    /**
     * The git author's name.
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * The git author's email address.
     */
    public function email()
    {
        return $this->email;
    }
    public function date() : ?string
    {
        return $this->date;
    }
    public function username() : ?string
    {
        return $this->username;
    }
}
