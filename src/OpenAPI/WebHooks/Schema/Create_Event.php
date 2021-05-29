<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Create_Event
{
    public const SCHEMA_TITLE = 'create event';
    public const SCHEMA_DESCRIPTION = 'A Git branch or tag is created.';
    /**
     * The [`git ref`](https://docs.github.com/en/rest/reference/git#get-a-reference) resource.
     */
    private ?string $ref = null;
    /**
     * The type of Git ref object created in the repository. Can be either `branch` or `tag`.
     */
    private ?string $ref_type = null;
    /**
     * The name of the repository's default branch (usually `main`).
     */
    private ?string $master_branch = null;
    /**
     * The repository's current description.
     */
    private $description;
    /**
     * The pusher type for the event. Can be either `user` or a deploy key.
     */
    private ?string $pusher_type = null;
    /**
     * A git repository
     */
    private array $repository = array();
    private array $sender = array();
    /**
     * Installation
     */
    private array $installation = array();
    private array $organization = array();
    public function ref() : ?string
    {
        return $this->ref;
    }
    public function ref_type() : ?string
    {
        return $this->ref_type;
    }
    public function master_branch() : ?string
    {
        return $this->master_branch;
    }
    public function description()
    {
        return $this->description;
    }
    public function pusher_type() : ?string
    {
        return $this->pusher_type;
    }
    public function repository() : array
    {
        return $this->repository;
    }
    public function sender() : array
    {
        return $this->sender;
    }
    public function installation() : array
    {
        return $this->installation;
    }
    public function organization() : array
    {
        return $this->organization;
    }
}
