<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\RepositoryAdvisory;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Credits
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"login":{"type":"string","description":"The username of the user credited."},"type":{"enum":["analyst","finder","reporter","coordinator","remediation_developer","remediation_reviewer","remediation_verifier","tool","sponsor","other"],"type":"string","description":"The type of credit the user is receiving."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"login":"generated_login_null","type":"analyst"}';
    /**
     * login: The username of the user credited.
     * type: The type of credit the user is receiving.
     */
    public function __construct(public ?string $login, public ?string $type)
    {
    }
}
