<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class CAff5002D054256C87E77B86C095806Ed
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"old_permission":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous permissions of the collaborator if the action was edited."}}},"permission":{"type":"object","properties":{"from":{"type":["string","null"]},"to":{"type":["string","null"]}}}},"description":"The changes to the collaborator permissions"}';
    public const SCHEMA_TITLE = 'c_aff5002d054256c87e77b86c095806ed';
    public const SCHEMA_DESCRIPTION = 'The changes to the collaborator permissions';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C9Bafb24512Ed2D7719Bb0362C0Fef0F8::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C9Bafb24512Ed2D7719Bb0362C0Fef0F8 $old_permission;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CCfbdb8Cefc8Cf1C6D96B7C73987450B9::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CCfbdb8Cefc8Cf1C6D96B7C73987450B9 $permission;
    public function old_permission() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C9Bafb24512Ed2D7719Bb0362C0Fef0F8
    {
        return $this->old_permission;
    }
    public function permission() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CCfbdb8Cefc8Cf1C6D96B7C73987450B9
    {
        return $this->permission;
    }
}
