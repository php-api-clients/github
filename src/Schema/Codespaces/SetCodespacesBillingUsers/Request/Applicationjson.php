<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Codespaces\SetCodespacesBillingUsers\Request;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["selected_usernames"],"type":"object","properties":{"selected_usernames":{"maxItems":100,"type":"array","items":{"type":"string"},"description":"The usernames of the organization members whose codespaces be billed to the organization."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"selected_usernames":["generated_selected_usernames_null"]}';
    /**
     * selectedUsernames: The usernames of the organization members whose codespaces be billed to the organization.
     * @param array<string> $selectedUsernames
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('selected_usernames')] public array $selectedUsernames)
    {
    }
}
