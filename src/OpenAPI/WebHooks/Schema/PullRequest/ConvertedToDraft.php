<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema\PullRequest;

final class ConvertedToDraft
{
    public const SCHEMA_TITLE = 'pull_request converted_to_draft event';
    public const SCHEMA_DESCRIPTION = '';
    private string $action;
    /**
     * The pull request number.
     */
    private int $number;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\PullRequest::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\PullRequest $pull_request;
    /**
     * A git repository
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository $repository;
    /**
     * Installation
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(?\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationLite::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationLite $installation = null;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(?\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization $organization = null;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User $sender;
    public function action() : string
    {
        return $this->action;
    }
    /**
     * The pull request number.
     */
    public function number() : int
    {
        return $this->number;
    }
    public function pull_request() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\PullRequest
    {
        return $this->pull_request;
    }
    /**
     * A git repository
     */
    public function repository() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Repository
    {
        return $this->repository;
    }
    /**
     * Installation
     */
    public function installation() : ?\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationLite
    {
        return $this->installation;
    }
    public function organization() : ?\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Organization
    {
        return $this->organization;
    }
    public function sender() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User
    {
        return $this->sender;
    }
}
