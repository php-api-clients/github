<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ReferrerTraffic
{
    public const SCHEMA_TITLE = 'Referrer Traffic';
    public const SPL_HASH = '000000000cd535160000000040effa88';
    public const SCHEMA_DESCRIPTION = 'Referrer Traffic';
    private ?string $referrer = null;
    private ?int $count = null;
    private ?int $uniques = null;
    public function referrer() : ?string
    {
        return $this->referrer;
    }
    public function count() : ?int
    {
        return $this->count;
    }
    public function uniques() : ?int
    {
        return $this->uniques;
    }
}
