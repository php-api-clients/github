<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Orgs\ConvertMemberToOutsideCollaborator\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"async":{"type":"boolean","description":"When set to `true`, the request will be performed asynchronously. Returns a 202 status code when the job is successfully queued.","default":false}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"async":false}';
    /**
     * async: When set to `true`, the request will be performed asynchronously. Returns a 202 status code when the job is successfully queued.
     */
    public function __construct(public ?bool $async)
    {
    }
}
