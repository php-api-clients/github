<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Actions\CreateWorkflowDispatch\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["ref"],"type":"object","properties":{"ref":{"type":"string","description":"The git reference for the workflow. The reference can be a branch or tag name."},"inputs":{"maxProperties":10,"type":"object","description":"Input keys and values configured in the workflow file. The maximum number of properties is 10. Any default properties configured in the workflow file will be used when `inputs` are omitted.","additionalProperties":true}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"ref":"generated_ref_null","inputs":null}';
    /**
     * ref: The git reference for the workflow. The reference can be a branch or tag name.
     * inputs: Input keys and values configured in the workflow file. The maximum number of properties is 10. Any default properties configured in the workflow file will be used when `inputs` are omitted.
     */
    public function __construct(public string $ref, public mixed $inputs)
    {
    }
}
