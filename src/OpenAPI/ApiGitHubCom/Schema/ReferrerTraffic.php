<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ReferrerTraffic
{
    public const SCHEMA_TITLE = 'Referrer Traffic';
    public const SPL_HASH = '000000002070149e0000000042193899';
    public const SCHEMA_DESCRIPTION = 'Referrer Traffic';
    private string $referrer;
    private int $count;
    private int $uniques;
    public function referrer() : string
    {
        return $this->referrer;
    }
    public function count() : int
    {
        return $this->count;
    }
    public function uniques() : int
    {
        return $this->uniques;
    }
}
