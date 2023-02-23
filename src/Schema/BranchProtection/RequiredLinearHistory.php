<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\BranchProtection;

final readonly class RequiredLinearHistory
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"enabled":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?bool $enabled;
    public function __construct(bool $enabled)
    {
        $this->enabled = $enabled;
    }
}
