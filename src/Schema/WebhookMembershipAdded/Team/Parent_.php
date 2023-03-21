<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookMembershipAdded\Team;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Parent_
{
    public const SCHEMA_JSON = '{"required":["name","id","node_id","slug","description","privacy","url","html_url","members_url","repositories_url","permission"],"type":["object","null"],"properties":{"description":{"type":["string","null"],"description":"Description of the team"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer","description":"Unique identifier of the team"},"members_url":{"type":"string","format":"uri-template"},"name":{"type":"string","description":"Name of the team"},"node_id":{"type":"string"},"permission":{"type":"string","description":"Permission that the team will have for its repositories"},"privacy":{"enum":["open","closed","secret"],"type":"string"},"repositories_url":{"type":"string","format":"uri"},"slug":{"type":"string"},"url":{"type":"string","description":"URL for the team","format":"uri"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"description":"generated_description_null","html_url":"https:\\/\\/example.com\\/","id":13,"members_url":"generated_members_url_uri-template","name":"generated_name_null","node_id":"generated_node_id_null","permission":"generated_permission_null","privacy":"open","repositories_url":"https:\\/\\/example.com\\/","slug":"generated_slug_null","url":"https:\\/\\/example.com\\/"}';
    /**
     * description: Description of the team
     * id: Unique identifier of the team
     * name: Name of the team
     * permission: Permission that the team will have for its repositories
     * url: URL for the team
     */
    public function __construct(public ?string $description, public string $html_url, public int $id, public string $members_url, public string $name, public string $node_id, public string $permission, public string $privacy, public string $repositories_url, public string $slug, public string $url)
    {
    }
}
