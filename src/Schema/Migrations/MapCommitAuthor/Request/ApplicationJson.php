<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Migrations\MapCommitAuthor\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"email":{"type":"string","description":"The new Git author email."},"name":{"type":"string","description":"The new Git author name."}},"additionalProperties":false}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"email":"generated","name":"generated"}';

    /**
     * email: The new Git author email.
     * name: The new Git author name.
     */
    public function __construct(public ?string $email, public ?string $name)
    {
    }
}
