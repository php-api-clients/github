<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\AliasAbstract;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
abstract readonly class Abstract826d39048b9e90a609260a6c25135a2f
{
    public const SCHEMA_JSON = '{"title":"Committer","required":["email","name"],"type":"object","properties":{"date":{"type":"string","format":"date-time"},"email":{"type":["string","null"],"format":"email"},"name":{"type":"string","description":"The git author\'s name."},"username":{"type":"string"}},"description":"Metaproperties for Git author\\/committer information."}';
    public const SCHEMA_TITLE = 'Committer';
    public const SCHEMA_DESCRIPTION = 'Metaproperties for Git author/committer information.';
    public const SCHEMA_EXAMPLE_DATA = '{"date":"1970-01-01T00:00:00+00:00","email":"generated_email_email","name":"generated_name_null","username":"generated_username_null"}';
    /**
     * name: The git author's name.
     */
    public function __construct(public ?string $date, public ?string $email, public string $name, public ?string $username)
    {
    }
}
