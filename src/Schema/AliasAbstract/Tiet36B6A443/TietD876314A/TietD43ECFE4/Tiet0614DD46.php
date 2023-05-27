<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet36B6A443\TietD876314A\TietD43ECFE4;

abstract readonly class Tiet0614DD46
{
    public const SCHEMA_JSON         = '{"required":["ecosystem"],"type":"object","properties":{"ecosystem":{"enum":["rubygems","npm","pip","maven","nuget","composer","go","rust","erlang","actions","pub","other"],"type":"string","description":"The package\'s language or package management ecosystem."},"name":{"type":["string","null"],"description":"The unique package name within its ecosystem."}},"description":"The name of the package affected by the vulnerability."}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The name of the package affected by the vulnerability.';
    public const SCHEMA_EXAMPLE_DATA = '{"ecosystem":"rubygems","name":"generated"}';

    /**
     * ecosystem: The package's language or package management ecosystem.
     * name: The unique package name within its ecosystem.
     */
    public function __construct(public string $ecosystem, public ?string $name)
    {
    }
}
