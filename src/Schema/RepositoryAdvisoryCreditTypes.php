<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class RepositoryAdvisoryCreditTypes
{
    public const SCHEMA_JSON = '{"enum":["analyst","finder","reporter","coordinator","remediation_developer","remediation_reviewer","remediation_verifier","tool","sponsor","other"],"type":"string","description":"The type of credit the user is receiving."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The type of credit the user is receiving.';
    public const SCHEMA_EXAMPLE_DATA = '[]';
    public function __construct()
    {
    }
}
