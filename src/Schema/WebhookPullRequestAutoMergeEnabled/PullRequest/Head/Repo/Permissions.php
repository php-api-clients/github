<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookPullRequestAutoMergeEnabled\PullRequest\Head\Repo;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Permissions
{
    public const SCHEMA_JSON = '{"required":["pull","push","admin"],"type":"object","properties":{"admin":{"type":"boolean"},"maintain":{"type":"boolean"},"pull":{"type":"boolean"},"push":{"type":"boolean"},"triage":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"admin":false,"maintain":false,"pull":false,"push":false,"triage":false}';
    public function __construct(public bool $admin, public ?bool $maintain, public bool $pull, public bool $push, public ?bool $triage)
    {
    }
}
