<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C00Cade1C6A827A24567A3Cebba3Ae226
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"description":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the description if the action was `edited`."}}},"name":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the name if the action was `edited`."}}},"privacy":{"required":["from"],"type":"object","properties":{"from":{"type":"string","description":"The previous version of the team\'s privacy if the action was `edited`."}}},"repository":{"required":["permissions"],"type":"object","properties":{"permissions":{"required":["from"],"type":"object","properties":{"from":{"type":"object","properties":{"admin":{"type":"boolean","description":"The previous version of the team member\'s `admin` permission on a repository, if the action was `edited`."},"pull":{"type":"boolean","description":"The previous version of the team member\'s `pull` permission on a repository, if the action was `edited`."},"push":{"type":"boolean","description":"The previous version of the team member\'s `push` permission on a repository, if the action was `edited`."}}}}}}}},"description":"The changes to the team if the action was `edited`."}';
    public const SCHEMA_TITLE = 'c_00cade1c6a827a24567a3cebba3ae226';
    public const SCHEMA_DESCRIPTION = 'The changes to the team if the action was `edited`.';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C90B64Badf15E2Fa04430Bd5A9Ee541Ed::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C90B64Badf15E2Fa04430Bd5A9Ee541Ed $description;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CDef8F9E083B43907F4880Aa2Bfc1F161::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CDef8F9E083B43907F4880Aa2Bfc1F161 $name;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C15599D0868864738613F82A34D7B9493::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C15599D0868864738613F82A34D7B9493 $privacy;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C4F4Ab6B003Aec8B0E13Dfd7D5A6B6A26::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C4F4Ab6B003Aec8B0E13Dfd7D5A6B6A26 $repository;
    public function description() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C90B64Badf15E2Fa04430Bd5A9Ee541Ed
    {
        return $this->description;
    }
    public function name() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CDef8F9E083B43907F4880Aa2Bfc1F161
    {
        return $this->name;
    }
    public function privacy() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C15599D0868864738613F82A34D7B9493
    {
        return $this->privacy;
    }
    public function repository() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C4F4Ab6B003Aec8B0E13Dfd7D5A6B6A26
    {
        return $this->repository;
    }
}
