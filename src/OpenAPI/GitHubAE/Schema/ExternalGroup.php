<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class ExternalGroup
{
    public const SCHEMA_JSON = '{"title":"ExternalGroup","required":["group_id","group_name","teams","members"],"type":"object","properties":{"group_id":{"type":"integer","description":"The internal ID of the group","examples":[1]},"group_name":{"type":"string","description":"The display name for the group","examples":["group-azuread-test"]},"updated_at":{"type":"string","description":"The date when the group was last updated_at","examples":["2021-01-03 22:27:15:000 -700"]},"teams":{"type":"array","items":{"required":["team_id","team_name"],"type":"object","properties":{"team_id":{"type":"integer","description":"The id for a team","examples":[1]},"team_name":{"type":"string","description":"The name of the team","examples":["team-test"]}}},"description":"An array of teams linked to this group","examples":[{"team_id":1,"team_name":"team-test"},{"team_id":2,"team_name":"team-test2"}]},"members":{"type":"array","items":{"required":["member_id","member_login","member_name","member_email"],"type":"object","properties":{"member_id":{"type":"integer","description":"The internal user ID of the identity","examples":[1]},"member_login":{"type":"string","description":"The handle\\/login for the user","examples":["mona-lisa_eocsaxrs"]},"member_name":{"type":"string","description":"The user display name\\/profile name","examples":["Mona Lisa"]},"member_email":{"type":"string","description":"An email attached to a user","examples":["mona_lisa@github.com"]}}},"description":"An array of external members linked to this group","examples":[{"member_id":1,"member_login":"mona-lisa_eocsaxrs","member_name":"Mona Lisa","member_email":"mona_lisa@github.com"},{"member_id":2,"member_login":"octo-lisa_eocsaxrs","member_name":"Octo Lisa","member_email":"octo_lisa@github.com"}]}},"description":"Information about an external group\'s usage and its members"}';
    public const SCHEMA_TITLE = 'ExternalGroup';
    public const SCHEMA_DESCRIPTION = 'Information about an external group\'s usage and its members';
    /**
     * The internal ID of the group
     */
    private int $group_id;
    /**
     * The display name for the group
     */
    private string $group_name;
    /**
     * The date when the group was last updated_at
     */
    private ?string $updated_at = null;
    /**
     * An array of teams linked to this group
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CEa0Ac2B71A431158B928B09F2Edd1C36>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CEa0Ac2B71A431158B928B09F2Edd1C36::class)
     */
    private array $teams = array();
    /**
     * An array of external members linked to this group
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C0B2D1Df77E9Ca174B45112A0521A9Df5>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C0B2D1Df77E9Ca174B45112A0521A9Df5::class)
     */
    private array $members = array();
    /**
     * The internal ID of the group
     */
    public function group_id() : int
    {
        return $this->group_id;
    }
    /**
     * The display name for the group
     */
    public function group_name() : string
    {
        return $this->group_name;
    }
    /**
     * The date when the group was last updated_at
     */
    public function updated_at() : ?string
    {
        return $this->updated_at;
    }
    /**
     * An array of teams linked to this group
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CEa0Ac2B71A431158B928B09F2Edd1C36>
     */
    public function teams() : array
    {
        return $this->teams;
    }
    /**
     * An array of external members linked to this group
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C0B2D1Df77E9Ca174B45112A0521A9Df5>
     */
    public function members() : array
    {
        return $this->members;
    }
}
