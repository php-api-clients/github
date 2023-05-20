<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Repos\UpdateInformationAboutPagesSite\Request;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{"type":"object","anyOf":[{"required":["build_type"]},{"required":["source"]},{"required":["cname"]},{"required":["public"]},{"required":["https_enforced"]}],"properties":{"cname":{"type":["string","null"],"description":"Specify a custom domain for the repository. Sending a `null` value will remove the custom domain. For more about custom domains, see \\"[Using a custom domain with GitHub Pages](https:\\/\\/docs.github.com\\/articles\\/using-a-custom-domain-with-github-pages\\/).\\""},"https_enforced":{"type":"boolean","description":"Specify whether HTTPS should be enforced for the repository."},"build_type":{"enum":["legacy","workflow"],"type":"string","description":"The process by which the GitHub Pages site will be built. `workflow` means that the site is built by a custom GitHub Actions workflow. `legacy` means that the site is built by GitHub when changes are pushed to a specific branch."},"source":{"anyOf":[{"enum":["gh-pages","master","master \\/docs"],"type":"string","description":"Update the source for the repository. Must include the branch name, and may optionally specify the subdirectory `\\/docs`. Possible values are `\\"gh-pages\\"`, `\\"master\\"`, and `\\"master \\/docs\\"`."},{"required":["branch","path"],"type":"object","properties":{"branch":{"type":"string","description":"The repository branch used to publish your site\'s source files."},"path":{"enum":["\\/","\\/docs"],"type":"string","description":"The repository directory that includes the source files for the Pages site. Allowed paths are `\\/` or `\\/docs`."}},"description":"Update the source for the repository. Must include the branch name and path."}]}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"cname":"generated","https_enforced":false,"build_type":"workflow","source":null}';

    /**
     * cname: Specify a custom domain for the repository. Sending a `null` value will remove the custom domain. For more about custom domains, see "[Using a custom domain with GitHub Pages](https://docs.github.com/articles/using-a-custom-domain-with-github-pages/)."
     * httpsEnforced: Specify whether HTTPS should be enforced for the repository.
     * buildType: The process by which the GitHub Pages site will be built. `workflow` means that the site is built by a custom GitHub Actions workflow. `legacy` means that the site is built by GitHub when changes are pushed to a specific branch.
     */
    public function __construct(public ?string $cname, #[MapFrom('https_enforced')] public ?bool $httpsEnforced, #[MapFrom('build_type')] public ?string $buildType, public null|string|Schema\Repos\UpdateInformationAboutPagesSite\Request\ApplicationJson\Source\One $source)
    {
    }
}
