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
    public const SCHEMA_EXAMPLE_DATA = '{"description":"generated_description_null","htmlUrl":"https:\\/\\/example.com\\/","id":13,"membersUrl":"generated_members_url_uri-template","name":"generated_name_null","nodeId":"generated_node_id_null","permission":"generated_permission_null","privacy":"open","repositoriesUrl":"https:\\/\\/example.com\\/","slug":"generated_slug_null","url":"https:\\/\\/example.com\\/"}';
    /**
     * description: Description of the team
     * id: Unique identifier of the team
     * name: Name of the team
     * permission: Permission that the team will have for its repositories
     * url: URL for the team
     */
    public function __construct(public ?string $description, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public string $htmlUrl, public int $id, #[\EventSauce\ObjectHydrator\MapFrom('members_url')] public string $membersUrl, public string $name, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId, public string $permission, public string $privacy, #[\EventSauce\ObjectHydrator\MapFrom('repositories_url')] public string $repositoriesUrl, public string $slug, public string $url)
    {
    }
}
