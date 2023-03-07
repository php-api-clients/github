<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Author
{
    public const SCHEMA_JSON = '{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."}';
    public const SCHEMA_TITLE = 'Committer';
    public const SCHEMA_DESCRIPTION = 'Metaproperties for Git author/committer information.';
    public const SCHEMA_EXAMPLE_DATA = '{"date":"generated_date","email":"generated_email","name":"generated_name","username":"generated_username"}';
    /**
     * name: The git author's name.
     */
    public function __construct(public string $date, public ?string $email, public ?string $name, public string $username)
    {
    }
}
