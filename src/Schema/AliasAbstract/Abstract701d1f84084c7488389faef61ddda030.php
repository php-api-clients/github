<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\AliasAbstract;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
abstract readonly class Abstract701d1f84084c7488389faef61ddda030
{
    public const SCHEMA_JSON = '{"title":"Team","required":["name","id"],"type":"object","properties":{"deleted":{"type":"boolean"},"description":{"type":["string","null"],"description":"Description of the team"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer","description":"Unique identifier of the team"},"members_url":{"type":"string","format":"uri-template"},"name":{"type":"string","description":"Name of the team"},"node_id":{"type":"string"},"parent":{"required":["name","id","node_id","slug","description","privacy","notification_setting","url","html_url","members_url","repositories_url","permission"],"type":["object","null"],"properties":{"description":{"type":["string","null"],"description":"Description of the team"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer","description":"Unique identifier of the team"},"members_url":{"type":"string","format":"uri-template"},"name":{"type":"string","description":"Name of the team"},"node_id":{"type":"string"},"permission":{"type":"string","description":"Permission that the team will have for its repositories"},"privacy":{"enum":["open","closed","secret"],"type":"string"},"notification_setting":{"enum":["notifications_enabled","notifications_disabled"],"type":"string","description":"Whether team members will receive notifications when their team is @mentioned"},"repositories_url":{"type":"string","format":"uri"},"slug":{"type":"string"},"url":{"type":"string","description":"URL for the team","format":"uri"}}},"permission":{"type":"string","description":"Permission that the team will have for its repositories"},"privacy":{"enum":["open","closed","secret"],"type":"string"},"notification_setting":{"enum":["notifications_enabled","notifications_disabled"],"type":"string"},"repositories_url":{"type":"string","format":"uri"},"slug":{"type":"string"},"url":{"type":"string","description":"URL for the team","format":"uri"}},"description":"Groups of organization members that gives permissions on specified repositories."}';
    public const SCHEMA_TITLE = 'Team';
    public const SCHEMA_DESCRIPTION = 'Groups of organization members that gives permissions on specified repositories.';
    public const SCHEMA_EXAMPLE_DATA = '{"deleted":false,"description":"generated_description_null","html_url":"https:\\/\\/example.com\\/","id":13,"members_url":"generated_members_url_uri-template","name":"generated_name_null","node_id":"generated_node_id_null","parent":{"description":"generated_description_null","html_url":"https:\\/\\/example.com\\/","id":13,"members_url":"generated_members_url_uri-template","name":"generated_name_null","node_id":"generated_node_id_null","permission":"generated_permission_null","privacy":"open","notification_setting":"notifications_enabled","repositories_url":"https:\\/\\/example.com\\/","slug":"generated_slug_null","url":"https:\\/\\/example.com\\/"},"permission":"generated_permission_null","privacy":"open","notification_setting":"notifications_enabled","repositories_url":"https:\\/\\/example.com\\/","slug":"generated_slug_null","url":"https:\\/\\/example.com\\/"}';
    /**
     * description: Description of the team
     * id: Unique identifier of the team
     * name: Name of the team
     * permission: Permission that the team will have for its repositories
     * url: URL for the team
     */
    public function __construct(public ?bool $deleted, public ?string $description, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public ?string $htmlUrl, public int $id, #[\EventSauce\ObjectHydrator\MapFrom('members_url')] public ?string $membersUrl, public string $name, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public ?string $nodeId, public ?Schema\WebhookMembershipAdded\Team\Parent_ $parent, public ?string $permission, public ?string $privacy, #[\EventSauce\ObjectHydrator\MapFrom('notification_setting')] public ?string $notificationSetting, #[\EventSauce\ObjectHydrator\MapFrom('repositories_url')] public ?string $repositoriesUrl, public ?string $slug, public ?string $url)
    {
    }
}
