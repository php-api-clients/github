<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final readonly class TeamSimple
{
    public const SCHEMA_JSON = '{"title":"Team Simple","required":["id","node_id","url","members_url","name","description","permission","html_url","repositories_url","slug"],"type":"object","properties":{"id":{"type":"integer","description":"Unique identifier of the team","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VGVhbTE="]},"url":{"type":"string","description":"URL for the team","format":"uri","examples":["https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/1"]},"members_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/1\\/members{\\/member}"]},"name":{"type":"string","description":"Name of the team","examples":["Justice League"]},"description":{"type":["string","null"],"description":"Description of the team","examples":["A great team."]},"permission":{"type":"string","description":"Permission that the team will have for its repositories","examples":["admin"]},"privacy":{"type":"string","description":"The level of privacy this team should have","examples":["closed"]},"notification_setting":{"type":"string","description":"The notification setting the team has set","examples":["notifications_enabled"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/orgs\\/rails\\/teams\\/core"]},"repositories_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/1\\/repos"]},"slug":{"type":"string","examples":["justice-league"]},"ldap_dn":{"type":"string","description":"Distinguished Name (DN) that team maps to within LDAP environment","examples":["uid=example,ou=users,dc=github,dc=com"]}},"description":"Groups of organization members that gives permissions on specified repositories."}';
    public const SCHEMA_TITLE = 'Team Simple';
    public const SCHEMA_DESCRIPTION = 'Groups of organization members that gives permissions on specified repositories.';
    public const SCHEMA_EXAMPLE_DATA = '{"id":1,"node_id":"MDQ6VGVhbTE=","url":"https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/1","members_url":"https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/1\\/members{\\/member}","name":"Justice League","description":"A great team.","permission":"admin","privacy":"closed","notification_setting":"notifications_enabled","html_url":"https:\\/\\/github.com\\/orgs\\/rails\\/teams\\/core","repositories_url":"https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/1\\/repos","slug":"justice-league","ldap_dn":"uid=example,ou=users,dc=github,dc=com"}';
    /**
     * id: Unique identifier of the team
     * url: URL for the team
     * name: Name of the team
     * description: Description of the team
     * permission: Permission that the team will have for its repositories
     * privacy: The level of privacy this team should have
     * notificationSetting: The notification setting the team has set
     * ldapDn: Distinguished Name (DN) that team maps to within LDAP environment
     */
    public function __construct(public int $id, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId, public string $url, #[\EventSauce\ObjectHydrator\MapFrom('members_url')] public string $membersUrl, public string $name, public ?string $description, public string $permission, public ?string $privacy, #[\EventSauce\ObjectHydrator\MapFrom('notification_setting')] public ?string $notificationSetting, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public string $htmlUrl, #[\EventSauce\ObjectHydrator\MapFrom('repositories_url')] public string $repositoriesUrl, public string $slug, #[\EventSauce\ObjectHydrator\MapFrom('ldap_dn')] public ?string $ldapDn)
    {
    }
}
