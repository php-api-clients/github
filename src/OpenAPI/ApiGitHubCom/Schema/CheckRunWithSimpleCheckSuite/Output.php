<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckRunWithSimpleCheckSuite;

final readonly class Output
{
    public const SCHEMA_JSON        = '{"required":["title","summary","text","annotations_count","annotations_url"],"type":"object","properties":{"annotations_count":{"type":"integer"},"annotations_url":{"type":"string","format":"uri"},"summary":{"type":["string","null"]},"text":{"type":["string","null"]},"title":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?int $annotations_count;
    public ?string $annotations_url;
    public ?string $summary;
    public ?string $text;
    public ?string $title;

    public function __construct(int $annotations_count, string $annotations_url, string $summary, string $text, string $title)
    {
        $this->annotations_count = $annotations_count;
        $this->annotations_url   = $annotations_url;
        $this->summary           = $summary;
        $this->text              = $text;
        $this->title             = $title;
    }
}
