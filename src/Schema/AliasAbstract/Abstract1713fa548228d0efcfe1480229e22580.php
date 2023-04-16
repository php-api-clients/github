<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Abstract1713fa548228d0efcfe1480229e22580
{
    public const SCHEMA_JSON         = '{"required":["name","id","node_id","slug","description","privacy","notification_setting","url","html_url","members_url","repositories_url","permission"],"type":["object","null"],"properties":{"description":{"type":["string","null"],"description":"Description of the team"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer","description":"Unique identifier of the team"},"members_url":{"type":"string","format":"uri-template"},"name":{"type":"string","description":"Name of the team"},"node_id":{"type":"string"},"permission":{"type":"string","description":"Permission that the team will have for its repositories"},"privacy":{"enum":["open","closed","secret"],"type":"string"},"notification_setting":{"enum":["notifications_enabled","notifications_disabled"],"type":"string","description":"Whether team members will receive notifications when their team is @mentioned"},"repositories_url":{"type":"string","format":"uri"},"slug":{"type":"string"},"url":{"type":"string","description":"URL for the team","format":"uri"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"description":"generated_description_null","html_url":"https:\\/\\/example.com\\/","id":13,"members_url":"generated_members_url_uri-template","name":"generated_name_null","node_id":"generated_node_id_null","permission":"generated_permission_null","privacy":"open","notification_setting":"notifications_enabled","repositories_url":"https:\\/\\/example.com\\/","slug":"generated_slug_null","url":"https:\\/\\/example.com\\/"}';

    /**
     * description: Description of the team
     * id: Unique identifier of the team
     * name: Name of the team
     * permission: Permission that the team will have for its repositories
     * notificationSetting: Whether team members will receive notifications when their team is @mentioned
     * url: URL for the team
     */
    public function __construct(public ?string $description, #[MapFrom('html_url')] public string $htmlUrl, public int $id, #[MapFrom('members_url')] public string $membersUrl, public string $name, #[MapFrom('node_id')] public string $nodeId, public string $permission, public string $privacy, #[MapFrom('notification_setting')] public string $notificationSetting, #[MapFrom('repositories_url')] public string $repositoriesUrl, public string $slug, public string $url)
    {
    }
}
