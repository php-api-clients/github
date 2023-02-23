<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\Codespaces\SetCodespacesBillingUsers\Request;

final readonly class Applicationjson
{
    public const SCHEMA_JSON = '{"required":["selected_usernames"],"type":"object","properties":{"selected_usernames":{"maxItems":100,"type":"array","items":{"type":"string"},"description":"The usernames of the organization members whose codespaces be billed to the organization."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The usernames of the organization members whose codespaces be billed to the organization.
     */
    public ?array $selected_usernames;
    public function __construct(array $selected_usernames)
    {
        $this->selected_usernames = $selected_usernames;
    }
}
