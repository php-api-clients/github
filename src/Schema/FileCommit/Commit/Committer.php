<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\FileCommit\Commit;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Committer
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"date":{"type":"string"},"name":{"type":"string"},"email":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"date":"generated_date_null","name":"generated_name_null","email":"generated_email_null"}';
    public function __construct(public ?string $date, public ?string $name, public ?string $email)
    {
    }
}
