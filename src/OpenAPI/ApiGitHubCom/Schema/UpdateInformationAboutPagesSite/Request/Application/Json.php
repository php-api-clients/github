<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\UpdateInformationAboutPagesSite\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"type":"object","anyOf":[{"required":["build_type"]},{"required":["source"]},{"required":["cname"]},{"required":["public"]},{"required":["https_enforced"]}],"properties":{"cname":{"type":["string","null"],"description":"Specify a custom domain for the repository. Sending a `null` value will remove the custom domain. For more about custom domains, see \\"[Using a custom domain with GitHub Pages](https:\\/\\/docs.github.com\\/articles\\/using-a-custom-domain-with-github-pages\\/).\\""},"https_enforced":{"type":"boolean","description":"Specify whether HTTPS should be enforced for the repository."},"build_type":{"enum":["legacy","workflow"],"type":"string","description":"The process by which the GitHub Pages site will be built. `workflow` means that the site is built by a custom GitHub Actions workflow. `legacy` means that the site is built by GitHub when changes are pushed to a specific branch."},"source":{"anyOf":[{"enum":["gh-pages","master","master \\/docs"],"type":"string","description":"Update the source for the repository. Must include the branch name, and may optionally specify the subdirectory `\\/docs`. Possible values are `\\"gh-pages\\"`, `\\"master\\"`, and `\\"master \\/docs\\"`."},{"required":["branch","path"],"type":"object","properties":{"branch":{"type":"string","description":"The repository branch used to publish your site\'s source files."},"path":{"enum":["\\/","\\/docs"],"type":"string","description":"The repository directory that includes the source files for the Pages site. Allowed paths are `\\/` or `\\/docs`."}},"description":"Update the source for the repository. Must include the branch name and path."}]}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'UpdateInformationAboutPagesSite\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Specify a custom domain for the repository. Sending a `null` value will remove the custom domain. For more about custom domains, see "[Using a custom domain with GitHub Pages](https://docs.github.com/articles/using-a-custom-domain-with-github-pages/)."
     */
    public readonly ?string $cname;
    /**
     * Specify whether HTTPS should be enforced for the repository.
     */
    public readonly bool $https_enforced;
    /**
     * The process by which the GitHub Pages site will be built. `workflow` means that the site is built by a custom GitHub Actions workflow. `legacy` means that the site is built by GitHub when changes are pushed to a specific branch.
     */
    public readonly string $build_type;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Source $source;
    public function __construct(string $cname, bool $https_enforced, string $build_type, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\Source $source)
    {
        $this->cname = $cname;
        $this->https_enforced = $https_enforced;
        $this->build_type = $build_type;
        $this->source = $source;
    }
}
