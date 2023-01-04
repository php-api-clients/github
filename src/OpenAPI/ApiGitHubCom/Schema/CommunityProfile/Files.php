<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CommunityProfile;

final class Files
{
    public const SCHEMA_JSON = '{"required":["code_of_conduct","code_of_conduct_file","license","contributing","readme","issue_template","pull_request_template"],"type":"object","properties":{"code_of_conduct":{"anyOf":[{"type":"null"},{"title":"Code Of Conduct Simple","required":["url","key","name","html_url"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/github\\/docs\\/community\\/code_of_conduct"]},"key":{"type":"string","examples":["citizen_code_of_conduct"]},"name":{"type":"string","examples":["Citizen Code of Conduct"]},"html_url":{"type":["string","null"],"format":"uri","examples":["https:\\/\\/github.com\\/github\\/docs\\/blob\\/main\\/CODE_OF_CONDUCT.md"]}},"description":"Code of Conduct Simple"}]},"code_of_conduct_file":{"anyOf":[{"type":"null"},{"title":"Community Health File","required":["url","html_url"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"}}}]},"license":{"anyOf":[{"type":"null"},{"title":"License Simple","required":["key","name","url","spdx_id","node_id"],"type":"object","properties":{"key":{"type":"string","examples":["mit"]},"name":{"type":"string","examples":["MIT License"]},"url":{"type":["string","null"],"format":"uri","examples":["https:\\/\\/api.github.com\\/licenses\\/mit"]},"spdx_id":{"type":["string","null"],"examples":["MIT"]},"node_id":{"type":"string","examples":["MDc6TGljZW5zZW1pdA=="]},"html_url":{"type":"string","format":"uri"}},"description":"License Simple"}]},"contributing":{"anyOf":[{"type":"null"},{"title":"Community Health File","required":["url","html_url"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"}}}]},"readme":{"anyOf":[{"type":"null"},{"title":"Community Health File","required":["url","html_url"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"}}}]},"issue_template":{"anyOf":[{"type":"null"},{"title":"Community Health File","required":["url","html_url"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"}}}]},"pull_request_template":{"anyOf":[{"type":"null"},{"title":"Community Health File","required":["url","html_url"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"}}}]}}}';
    public const SCHEMA_TITLE = 'CommunityProfile\\Files';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Files\CodeOfConduct::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Files\CodeOfConduct $code_of_conduct;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Files\CodeOfConductFile::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Files\CodeOfConductFile $code_of_conduct_file;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Files\License::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Files\License $license;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Files\Contributing::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Files\Contributing $contributing;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Files\Readme::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Files\Readme $readme;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Files\IssueTemplate::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Files\IssueTemplate $issue_template;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Files\PullRequestTemplate::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Files\PullRequestTemplate $pull_request_template;
    public function code_of_conduct() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Files\CodeOfConduct
    {
        return $this->code_of_conduct;
    }
    public function code_of_conduct_file() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Files\CodeOfConductFile
    {
        return $this->code_of_conduct_file;
    }
    public function license() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Files\License
    {
        return $this->license;
    }
    public function contributing() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Files\Contributing
    {
        return $this->contributing;
    }
    public function readme() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Files\Readme
    {
        return $this->readme;
    }
    public function issue_template() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Files\IssueTemplate
    {
        return $this->issue_template;
    }
    public function pull_request_template() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Files\PullRequestTemplate
    {
        return $this->pull_request_template;
    }
}
