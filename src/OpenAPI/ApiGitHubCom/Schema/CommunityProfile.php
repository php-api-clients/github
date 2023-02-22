<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class CommunityProfile
{
    public const SCHEMA_JSON = '{"title":"Community Profile","required":["health_percentage","description","documentation","files","updated_at"],"type":"object","properties":{"health_percentage":{"type":"integer","examples":[100]},"description":{"type":["string","null"],"examples":["My first repository on GitHub!"]},"documentation":{"type":["string","null"],"examples":["example.com"]},"files":{"required":["code_of_conduct","code_of_conduct_file","license","contributing","readme","issue_template","pull_request_template"],"type":"object","properties":{"code_of_conduct":{"anyOf":[{"type":"null"},{"title":"Code Of Conduct Simple","required":["url","key","name","html_url"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/github\\/docs\\/community\\/code_of_conduct"]},"key":{"type":"string","examples":["citizen_code_of_conduct"]},"name":{"type":"string","examples":["Citizen Code of Conduct"]},"html_url":{"type":["string","null"],"format":"uri","examples":["https:\\/\\/github.com\\/github\\/docs\\/blob\\/main\\/CODE_OF_CONDUCT.md"]}},"description":"Code of Conduct Simple"}]},"code_of_conduct_file":{"anyOf":[{"type":"null"},{"title":"Community Health File","required":["url","html_url"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"}}}]},"license":{"anyOf":[{"type":"null"},{"title":"License Simple","required":["key","name","url","spdx_id","node_id"],"type":"object","properties":{"key":{"type":"string","examples":["mit"]},"name":{"type":"string","examples":["MIT License"]},"url":{"type":["string","null"],"format":"uri","examples":["https:\\/\\/api.github.com\\/licenses\\/mit"]},"spdx_id":{"type":["string","null"],"examples":["MIT"]},"node_id":{"type":"string","examples":["MDc6TGljZW5zZW1pdA=="]},"html_url":{"type":"string","format":"uri"}},"description":"License Simple"}]},"contributing":{"anyOf":[{"type":"null"},{"title":"Community Health File","required":["url","html_url"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"}}}]},"readme":{"anyOf":[{"type":"null"},{"title":"Community Health File","required":["url","html_url"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"}}}]},"issue_template":{"anyOf":[{"type":"null"},{"title":"Community Health File","required":["url","html_url"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"}}}]},"pull_request_template":{"anyOf":[{"type":"null"},{"title":"Community Health File","required":["url","html_url"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"}}}]}}},"updated_at":{"type":["string","null"],"format":"date-time","examples":["2017-02-28T19:09:29Z"]},"content_reports_enabled":{"type":"boolean","examples":[true]}},"description":"Community Profile"}';
    public const SCHEMA_TITLE = 'Community Profile';
    public const SCHEMA_DESCRIPTION = 'Community Profile';
    public ?int $health_percentage;
    public ?string $description;
    public ?string $documentation;
    public ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CommunityProfile\Files $files;
    public ?string $updated_at;
    public bool $content_reports_enabled;
    public function __construct(int $health_percentage, string $description, string $documentation, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CommunityProfile\Files $files, string $updated_at, bool $content_reports_enabled)
    {
        $this->health_percentage = $health_percentage;
        $this->description = $description;
        $this->documentation = $documentation;
        $this->files = $files;
        $this->updated_at = $updated_at;
        $this->content_reports_enabled = $content_reports_enabled;
    }
}
