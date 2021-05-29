<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ReferrerTraffic
{
    public const SCHEMA_TITLE       = 'Referrer Traffic';
    public const SCHEMA_DESCRIPTION = 'Referrer Traffic';
    private string $referrer;
    private int $count;
    private int $uniques;

    public function referrer(): string
    {
        return $this->referrer;
    }

    public function count(): int
    {
        return $this->count;
    }

    public function uniques(): int
    {
        return $this->uniques;
    }
}
