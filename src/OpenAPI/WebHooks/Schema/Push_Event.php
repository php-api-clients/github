<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Push_Event
{
    public const SCHEMA_TITLE = 'push event';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The full git ref that was pushed. Example: `refs/heads/main`.
     */
    private ?string $ref = null;
    /**
     * The SHA of the most recent commit on `ref` before the push.
     */
    private ?string $before = null;
    /**
     * The SHA of the most recent commit on `ref` after the push.
     */
    private ?string $after = null;
    private ?bool $created = null;
    private ?bool $deleted = null;
    private ?bool $forced = null;
    private $base_ref;
    private ?string $compare = null;
    /**
     * An array of commit objects describing the pushed commits.
     * @var array<\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Commit>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\Commit::class)
     */
    private array $commits = array();
    private $head_commit;
    /**
     * A git repository
     */
    private array $repository = array();
    /**
     * Metaproperties for Git author/committer information.
     */
    private array $pusher = array();
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
    public function before() : ?string
    {
        return $this->before;
    }
    public function after() : ?string
    {
        return $this->after;
    }
    public function created() : ?bool
    {
        return $this->created;
    }
    public function deleted() : ?bool
    {
        return $this->deleted;
    }
    public function forced() : ?bool
    {
        return $this->forced;
    }
    public function base_ref()
    {
        return $this->base_ref;
    }
    public function compare() : ?string
    {
        return $this->compare;
    }
    public function commits() : array
    {
        return $this->commits;
    }
    public function head_commit()
    {
        return $this->head_commit;
    }
    public function repository() : array
    {
        return $this->repository;
    }
    public function pusher() : array
    {
        return $this->pusher;
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
