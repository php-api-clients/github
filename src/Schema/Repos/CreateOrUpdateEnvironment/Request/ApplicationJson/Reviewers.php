<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Repos\CreateOrUpdateEnvironment\Request\ApplicationJson;

final readonly class Reviewers
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"type":{"enum":["User","Team"],"type":"string","description":"The type of reviewer.","examples":["User"]},"id":{"type":"integer","description":"The id of the user or team who can review the deployment","examples":[4532992]}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"type":"User","id":4532992}';

    /**
     * type: The type of reviewer.
     * id: The id of the user or team who can review the deployment
     */
    public function __construct(public ?string $type, public ?int $id)
    {
    }
}
