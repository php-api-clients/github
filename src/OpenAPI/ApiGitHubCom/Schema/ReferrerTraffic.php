<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ReferrerTraffic
{
    public const SCHEMA_TITLE = 'Referrer Traffic';
    public const SPL_HASH = '00000000252f4b6a0000000029de5079';
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
