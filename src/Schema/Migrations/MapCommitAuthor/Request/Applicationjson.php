<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Migrations\MapCommitAuthor\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"email":{"type":"string","description":"The new Git author email."},"name":{"type":"string","description":"The new Git author name."}},"additionalProperties":false}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"email":"generated_email_null","name":"generated_name_null"}';
    /**
     * email: The new Git author email.
     * name: The new Git author name.
     */
    public function __construct(public ?string $email, public ?string $name)
    {
    }
}
