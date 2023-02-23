<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookRepositoryRenamed;

final readonly class Changes
{
    public const SCHEMA_JSON = '{"required":["repository"],"type":"object","properties":{"repository":{"required":["name"],"type":"object","properties":{"name":{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?\ApiClients\Client\Github\Schema\WebhookRepositoryRenamed\Changes\Repository $repository;
    public function __construct(\ApiClients\Client\Github\Schema\WebhookRepositoryRenamed\Changes\Repository $repository)
    {
        $this->repository = $repository;
    }
}
