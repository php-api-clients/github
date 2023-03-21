<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Teams
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":"integer"},"node_id":{"type":"string"},"url":{"type":"string"},"html_url":{"type":"string"},"name":{"type":"string"},"slug":{"type":"string"},"description":{"type":["string","null"]},"privacy":{"type":"string"},"permission":{"type":"string"},"members_url":{"type":"string"},"repositories_url":{"type":"string"},"parent":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"node_id":"generated_node_id_null","url":"generated_url_null","html_url":"generated_html_url_null","name":"generated_name_null","slug":"generated_slug_null","description":"generated_description_null","privacy":"generated_privacy_null","permission":"generated_permission_null","members_url":"generated_members_url_null","repositories_url":"generated_repositories_url_null","parent":"generated_parent_null"}';
    public function __construct(public ?int $id, public ?string $node_id, public ?string $url, public ?string $html_url, public ?string $name, public ?string $slug, public ?string $description, public ?string $privacy, public ?string $permission, public ?string $members_url, public ?string $repositories_url, public ?string $parent)
    {
    }
}
