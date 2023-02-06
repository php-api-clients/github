<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CommunityProfile;

final class Files
{
    public const SCHEMA_JSON = '{"required":["code_of_conduct","code_of_conduct_file","license","contributing","readme","issue_template","pull_request_template"],"type":"object","properties":{"code_of_conduct":{"anyOf":[{"type":"null"},{"title":"Code Of Conduct Simple","required":["url","key","name","html_url"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/github\\/docs\\/community\\/code_of_conduct"]},"key":{"type":"string","examples":["citizen_code_of_conduct"]},"name":{"type":"string","examples":["Citizen Code of Conduct"]},"html_url":{"type":["string","null"],"format":"uri","examples":["https:\\/\\/github.com\\/github\\/docs\\/blob\\/main\\/CODE_OF_CONDUCT.md"]}},"description":"Code of Conduct Simple"}]},"code_of_conduct_file":{"anyOf":[{"type":"null"},{"title":"Community Health File","required":["url","html_url"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"}}}]},"license":{"anyOf":[{"type":"null"},{"title":"License Simple","required":["key","name","url","spdx_id","node_id"],"type":"object","properties":{"key":{"type":"string","examples":["mit"]},"name":{"type":"string","examples":["MIT License"]},"url":{"type":["string","null"],"format":"uri","examples":["https:\\/\\/api.github.com\\/licenses\\/mit"]},"spdx_id":{"type":["string","null"],"examples":["MIT"]},"node_id":{"type":"string","examples":["MDc6TGljZW5zZW1pdA=="]},"html_url":{"type":"string","format":"uri"}},"description":"License Simple"}]},"contributing":{"anyOf":[{"type":"null"},{"title":"Community Health File","required":["url","html_url"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"}}}]},"readme":{"anyOf":[{"type":"null"},{"title":"Community Health File","required":["url","html_url"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"}}}]},"issue_template":{"anyOf":[{"type":"null"},{"title":"Community Health File","required":["url","html_url"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"}}}]},"pull_request_template":{"anyOf":[{"type":"null"},{"title":"Community Health File","required":["url","html_url"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"}}}]}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'CommunityProfile\\Files';
    public const SCHEMA_DESCRIPTION = '';
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Files\CodeOfConduct $code_of_conduct;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Files\CodeOfConductFile $code_of_conduct_file;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Files\License $license;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Files\Contributing $contributing;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Files\Readme $readme;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Files\IssueTemplate $issue_template;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Files\PullRequestTemplate $pull_request_template;
    public function __construct(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Files\CodeOfConduct $code_of_conduct, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Files\CodeOfConductFile $code_of_conduct_file, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Files\License $license, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Files\Contributing $contributing, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Files\Readme $readme, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Files\IssueTemplate $issue_template, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Files\PullRequestTemplate $pull_request_template)
    {
        $this->code_of_conduct = $code_of_conduct;
        $this->code_of_conduct_file = $code_of_conduct_file;
        $this->license = $license;
        $this->contributing = $contributing;
        $this->readme = $readme;
        $this->issue_template = $issue_template;
        $this->pull_request_template = $pull_request_template;
    }
}
