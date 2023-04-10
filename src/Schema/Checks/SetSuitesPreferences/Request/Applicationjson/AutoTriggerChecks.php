<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Checks\SetSuitesPreferences\Request\Applicationjson;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class AutoTriggerChecks
{
    public const SCHEMA_JSON = '{"required":["app_id","setting"],"type":"object","properties":{"app_id":{"type":"integer","description":"The `id` of the GitHub App."},"setting":{"type":"boolean","description":"Set to `true` to enable automatic creation of CheckSuite events upon pushes to the repository, or `false` to disable them.","default":true}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"app_id":13,"setting":false}';
    /**
     * appId: The `id` of the GitHub App.
     * setting: Set to `true` to enable automatic creation of CheckSuite events upon pushes to the repository, or `false` to disable them.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('app_id')] public int $appId, public bool $setting)
    {
    }
}
