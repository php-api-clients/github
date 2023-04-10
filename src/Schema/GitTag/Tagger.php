<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\GitTag;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Tagger
{
    public const SCHEMA_JSON = '{"required":["date","email","name"],"type":"object","properties":{"date":{"type":"string"},"email":{"type":"string"},"name":{"type":"string"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"date":"generated_date_null","email":"generated_email_null","name":"generated_name_null"}';
    public function __construct(public string $date, public string $email, public string $name)
    {
    }
}
