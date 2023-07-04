<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet826D3904\Tiet8B9E90A6\Tiet09260A6C;

abstract readonly class Tiet25135A2F
{
    public const SCHEMA_JSON         = '{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."}';
    public const SCHEMA_TITLE        = 'Committer';
    public const SCHEMA_DESCRIPTION  = 'Metaproperties for Git author/committer information.';
    public const SCHEMA_EXAMPLE_DATA = '{"date":"1970-01-01T00:00:00+00:00","email":"hi@example.com","name":"generated","username":"generated"}';

    /**
     * name: The git author's name.
     */
    public function __construct(public string|null $date, public string|null $email, public string $name, public string|null $username)
    {
    }
}
