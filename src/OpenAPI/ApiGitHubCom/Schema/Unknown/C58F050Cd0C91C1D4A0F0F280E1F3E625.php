<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C58F050Cd0C91C1D4A0F0F280E1F3E625
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"sha":{"type":"string"},"node_id":{"type":"string"},"url":{"type":"string"},"html_url":{"type":"string"},"author":{"type":"object","properties":{"date":{"type":"string"},"name":{"type":"string"},"email":{"type":"string"}}},"committer":{"type":"object","properties":{"date":{"type":"string"},"name":{"type":"string"},"email":{"type":"string"}}},"message":{"type":"string"},"tree":{"type":"object","properties":{"url":{"type":"string"},"sha":{"type":"string"}}},"parents":{"type":"array","items":{"type":"object","properties":{"url":{"type":"string"},"html_url":{"type":"string"},"sha":{"type":"string"}}}},"verification":{"type":"object","properties":{"verified":{"type":"boolean"},"reason":{"type":"string"},"signature":{"type":["string","null"]},"payload":{"type":["string","null"]}}}}}';
    public const SCHEMA_TITLE = 'c_58f050cd0c91c1d4a0f0f280e1f3e625';
    public const SCHEMA_DESCRIPTION = '';
    private string $sha;
    private string $node_id;
    private string $url;
    private string $html_url;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C291Bd1Cbf6B97Ac136E0Cd052426F5B8::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C291Bd1Cbf6B97Ac136E0Cd052426F5B8 $author;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C291Bd1Cbf6B97Ac136E0Cd052426F5B8::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C291Bd1Cbf6B97Ac136E0Cd052426F5B8 $committer;
    private string $message;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C960E2Bb491Afcfa2Fe68Bc8Fc4023671::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C960E2Bb491Afcfa2Fe68Bc8Fc4023671 $tree;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C8249B116F3B5B0976B3D07C41D00D525>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C8249B116F3B5B0976B3D07C41D00D525::class)
     */
    private array $parents = array();
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD3Ab4308E3E653Eb6588B3B12F6458Dc::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD3Ab4308E3E653Eb6588B3B12F6458Dc $verification;
    public function sha() : string
    {
        return $this->sha;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function author() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C291Bd1Cbf6B97Ac136E0Cd052426F5B8
    {
        return $this->author;
    }
    public function committer() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C291Bd1Cbf6B97Ac136E0Cd052426F5B8
    {
        return $this->committer;
    }
    public function message() : string
    {
        return $this->message;
    }
    public function tree() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C960E2Bb491Afcfa2Fe68Bc8Fc4023671
    {
        return $this->tree;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C8249B116F3B5B0976B3D07C41D00D525>
     */
    public function parents() : array
    {
        return $this->parents;
    }
    public function verification() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CD3Ab4308E3E653Eb6588B3B12F6458Dc
    {
        return $this->verification;
    }
}
