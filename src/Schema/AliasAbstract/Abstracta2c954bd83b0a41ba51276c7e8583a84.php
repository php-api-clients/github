<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\AliasAbstract;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
abstract readonly class Abstracta2c954bd83b0a41ba51276c7e8583a84
{
    public const SCHEMA_JSON = '{"required":["context"],"type":"object","properties":{"context":{"type":"string","description":"The name of the required check"},"app_id":{"type":"integer","description":"The ID of the GitHub App that must provide this check. Omit this field to automatically select the GitHub App that has recently provided this check, or any app if it was not set by a GitHub App. Pass -1 to explicitly allow any app to set the status."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"context":"generated_context_null","app_id":13}';
    /**
     * context: The name of the required check
     * appId: The ID of the GitHub App that must provide this check. Omit this field to automatically select the GitHub App that has recently provided this check, or any app if it was not set by a GitHub App. Pass -1 to explicitly allow any app to set the status.
     */
    public function __construct(public string $context, #[\EventSauce\ObjectHydrator\MapFrom('app_id')] public ?int $appId)
    {
    }
}
