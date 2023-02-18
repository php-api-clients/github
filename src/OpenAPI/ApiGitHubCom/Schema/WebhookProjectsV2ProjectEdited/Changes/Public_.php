<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookProjectsV2ProjectEdited\Changes;

final readonly class Public_
{
    public const SCHEMA_JSON        = '{"type":"object","properties":{"from":{"type":"boolean"},"to":{"type":"boolean"}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?bool $from;
    public ?bool $to;

    public function __construct(bool $from, bool $to)
    {
        $this->from = $from;
        $this->to   = $to;
    }
}
