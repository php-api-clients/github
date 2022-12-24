<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class CF016D49Da9639De8A698178Dfec769Bb
{
    public const SCHEMA_JSON = '{"required":["title","body"],"type":"object","properties":{"title":{"maxLength":1024,"type":"string","description":"The title of the attachment","examples":["Title of the attachment"]},"body":{"maxLength":262144,"type":"string","description":"The body of the attachment","examples":["Body of the attachment"]}}}';
    public const SCHEMA_TITLE = 'c_f016d49da9639de8a698178dfec769bb';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The title of the attachment
     */
    private string $title;
    /**
     * The body of the attachment
     */
    private string $body;
    /**
     * The title of the attachment
     */
    public function title() : string
    {
        return $this->title;
    }
    /**
     * The body of the attachment
     */
    public function body() : string
    {
        return $this->body;
    }
}
