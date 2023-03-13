<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Codespaces\DeleteCodespacesBillingUsers\Request;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["selected_usernames"],"type":"object","properties":{"selected_usernames":{"maxItems":100,"type":"array","items":{"type":"string"},"description":"The usernames of the organization members whose codespaces should not be billed to the organization."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"selected_usernames":["generated_selected_usernames"]}';
    /**
     * selected_usernames: The usernames of the organization members whose codespaces should not be billed to the organization.
     * @param array<string> $selected_usernames
     */
    public function __construct(public array $selected_usernames)
    {
    }
}
