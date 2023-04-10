<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Repos\DeleteFile\Request\Applicationjson;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Committer
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"name":{"type":"string","description":"The name of the author (or committer) of the commit"},"email":{"type":"string","description":"The email of the author (or committer) of the commit"}},"description":"object containing information about the committer."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'object containing information about the committer.';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name_null","email":"generated_email_null"}';
    /**
     * name: The name of the author (or committer) of the commit
     * email: The email of the author (or committer) of the commit
     */
    public function __construct(public ?string $name, public ?string $email)
    {
    }
}
