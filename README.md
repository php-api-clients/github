# [READONLY-SUBSPLIT] github


![Continuous Integration](https://github.com/php-api-clients/github/workflows/Continuous%20Integration/badge.svg)
[![Latest Stable Version](https://poser.pugx.org/api-clients/github/v/stable.png)](https://packagist.org/packages/api-clients/github)
[![Total Downloads](https://poser.pugx.org/api-clients/github/downloads.png)](https://packagist.org/packages/api-clients/github)
[![Code Coverage](https://scrutinizer-ci.com/g/php-api-clients/github/badges/coverage.png?b==v0.2.x)](https://scrutinizer-ci.com/g/php-api-clients/github/?branch=v0.2.x)
[![License](https://poser.pugx.org/api-clients/github/license.png)](https://packagist.org/packages/api-clients/github)

Non-Blocking first GitHub client, this is a read only sub split, see [`github-root`](https://github.com/php-api-clients/github-root) for the root package.

## Usage

```php
use React\Http\Browser;
use ApiClients\Client\GitHub\BearerToken;
use ApiClients\Client\GitHub\Client;

use function React\Async\async;

$client = new Client(new BearerToken('YOUR_TOKEN_HERE'), new Browser());

// The client is using react/async internally to provide a non-promise API.
// As such you're expected to use it inside a fiber, the async call here is
// added to demonstrate and documented that requirement. The rest of the
// examples assume you have already wrapped in a fiber 0 or more levels up
// in your code such as a command bus executer or your HTTP server.
async(static function () {
    // Make API calls using the call method
    $client->call('METHOD /path/to/{the}/operation', ['array' => 'with', 'paramters' => 'for', 'the' => 'operation']);
    // Make API calls using the operations objects
    $client->operations()->group()->operation(array: 'with', paramters: 'for', the: 'operation');
})();
```

## Supported operations


### meta/root

GitHub API Root

Using the `call` method:
```php
$client->call('GET /');
```

Operations method:
```php
$client->operations()->meta()->root();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/overview/resources-in-the-rest-api#root-endpoint).


### apps/get-authenticated

Get the authenticated app

Using the `call` method:
```php
$client->call('GET /app');
```

Operations method:
```php
$client->operations()->apps()->getAuthenticated();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/apps#get-the-authenticated-app).


### apps/create-from-manifest

Create a GitHub App from a manifest

Using the `call` method:
```php
$client->call('POST /app-manifests/{code}/conversions', [
        'code' => 'generated',
]);
```

Operations method:
```php
$client->operations()->apps()->createFromManifest(        code: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/apps#create-a-github-app-from-a-manifest).


### apps/get-webhook-config-for-app

Get a webhook configuration for an app

Using the `call` method:
```php
$client->call('GET /app/hook/config');
```

Operations method:
```php
$client->operations()->apps()->getWebhookConfigForApp();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/apps#get-a-webhook-configuration-for-an-app).


### apps/update-webhook-config-for-app

Update a webhook configuration for an app

Using the `call` method:
```php
$client->call('PATCH /app/hook/config');
```

Operations method:
```php
$client->operations()->apps()->updateWebhookConfigForApp();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/apps#update-a-webhook-configuration-for-an-app).


### apps/list-webhook-deliveries

List deliveries for an app webhook

Using the `call` method:
```php
$client->call('GET /app/hook/deliveries', [
        'cursor' => 'generated',
        'redelivery' => ,
        'per_page' => 8,
]);
```

Operations method:
```php
$client->operations()->apps()->listWebhookDeliveries(        cursor: 'generated',
        redelivery: ,
        per_page: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/apps#list-deliveries-for-an-app-webhook).


### apps/get-webhook-delivery

Get a delivery for an app webhook

Using the `call` method:
```php
$client->call('GET /app/hook/deliveries/{delivery_id}', [
        'delivery_id' => 11,
]);
```

Operations method:
```php
$client->operations()->apps()->getWebhookDelivery(        delivery_id: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/apps#get-a-delivery-for-an-app-webhook).


### apps/redeliver-webhook-delivery

Redeliver a delivery for an app webhook

Using the `call` method:
```php
$client->call('POST /app/hook/deliveries/{delivery_id}/attempts', [
        'delivery_id' => 11,
]);
```

Operations method:
```php
$client->operations()->apps()->redeliverWebhookDelivery(        delivery_id: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/apps#redeliver-a-delivery-for-an-app-webhook).


### apps/list-installation-requests-for-authenticated-app

List installation requests for the authenticated app

Using the `call` method:
```php
$client->call('GET /app/installation-requests', [
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->apps()->listInstallationRequestsForAuthenticatedApp(        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/apps#list-installation-requests-for-the-authenticated-app).


### apps/list-installations

List installations for the authenticated app

Using the `call` method:
```php
$client->call('GET /app/installations', [
        'since' => '1970-01-01T00:00:00+00:00',
        'outdated' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->apps()->listInstallations(        since: '1970-01-01T00:00:00+00:00',
        outdated: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/apps#list-installations-for-the-authenticated-app).


### apps/get-installation

Get an installation for the authenticated app

Using the `call` method:
```php
$client->call('GET /app/installations/{installation_id}', [
        'installation_id' => 15,
]);
```

Operations method:
```php
$client->operations()->apps()->getInstallation(        installation_id: 15,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/apps#get-an-installation-for-the-authenticated-app).


### apps/delete-installation

Delete an installation for the authenticated app

Using the `call` method:
```php
$client->call('DELETE /app/installations/{installation_id}', [
        'installation_id' => 15,
]);
```

Operations method:
```php
$client->operations()->apps()->deleteInstallation(        installation_id: 15,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/apps#delete-an-installation-for-the-authenticated-app).


### apps/create-installation-access-token

Create an installation access token for an app

Using the `call` method:
```php
$client->call('POST /app/installations/{installation_id}/access_tokens', [
        'installation_id' => 15,
]);
```

Operations method:
```php
$client->operations()->apps()->createInstallationAccessToken(        installation_id: 15,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/apps/#create-an-installation-access-token-for-an-app).


### apps/suspend-installation

Suspend an app installation

Using the `call` method:
```php
$client->call('PUT /app/installations/{installation_id}/suspended', [
        'installation_id' => 15,
]);
```

Operations method:
```php
$client->operations()->apps()->suspendInstallation(        installation_id: 15,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/apps#suspend-an-app-installation).


### apps/unsuspend-installation

Unsuspend an app installation

Using the `call` method:
```php
$client->call('DELETE /app/installations/{installation_id}/suspended', [
        'installation_id' => 15,
]);
```

Operations method:
```php
$client->operations()->apps()->unsuspendInstallation(        installation_id: 15,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/apps#unsuspend-an-app-installation).


### apps/delete-authorization

Delete an app authorization

Using the `call` method:
```php
$client->call('DELETE /applications/{client_id}/grant', [
        'client_id' => 'generated',
]);
```

Operations method:
```php
$client->operations()->apps()->deleteAuthorization(        client_id: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/apps#delete-an-app-authorization).


### apps/check-token

Check a token

Using the `call` method:
```php
$client->call('POST /applications/{client_id}/token', [
        'client_id' => 'generated',
]);
```

Operations method:
```php
$client->operations()->apps()->checkToken(        client_id: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/apps#check-a-token).


### apps/delete-token

Delete an app token

Using the `call` method:
```php
$client->call('DELETE /applications/{client_id}/token', [
        'client_id' => 'generated',
]);
```

Operations method:
```php
$client->operations()->apps()->deleteToken(        client_id: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/apps#delete-an-app-token).


### apps/reset-token

Reset a token

Using the `call` method:
```php
$client->call('PATCH /applications/{client_id}/token', [
        'client_id' => 'generated',
]);
```

Operations method:
```php
$client->operations()->apps()->resetToken(        client_id: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/apps#reset-a-token).


### apps/scope-token

Create a scoped access token

Using the `call` method:
```php
$client->call('POST /applications/{client_id}/token/scoped', [
        'client_id' => 'generated',
]);
```

Operations method:
```php
$client->operations()->apps()->scopeToken(        client_id: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/apps/apps#create-a-scoped-access-token).


### apps/get-by-slug

Get an app

Using the `call` method:
```php
$client->call('GET /apps/{app_slug}', [
        'app_slug' => 'generated',
]);
```

Operations method:
```php
$client->operations()->apps()->getBySlug(        app_slug: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/apps/#get-an-app).


### codes-of-conduct/get-all-codes-of-conduct

Get all codes of conduct

Using the `call` method:
```php
$client->call('GET /codes_of_conduct');
```

Operations method:
```php
$client->operations()->codesOfConduct()->getAllCodesOfConduct();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/codes-of-conduct#get-all-codes-of-conduct).


### codes-of-conduct/get-conduct-code

Get a code of conduct

Using the `call` method:
```php
$client->call('GET /codes_of_conduct/{key}', [
        'key' => 'generated',
]);
```

Operations method:
```php
$client->operations()->codesOfConduct()->getConductCode(        key: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/codes-of-conduct#get-a-code-of-conduct).


### emojis/get

Get emojis

Using the `call` method:
```php
$client->call('GET /emojis');
```

Operations method:
```php
$client->operations()->emojis()->get();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/emojis#get-emojis).


### dependabot/list-alerts-for-enterprise

List Dependabot alerts for an enterprise

Using the `call` method:
```php
$client->call('GET /enterprises/{enterprise}/dependabot/alerts', [
        'enterprise' => 'generated',
        'state' => 'generated',
        'severity' => 'generated',
        'ecosystem' => 'generated',
        'package' => 'generated',
        'scope' => 'generated',
        'before' => 'generated',
        'after' => 'generated',
        'last' => 4,
        'sort' => 'generated',
        'direction' => 'generated',
        'first' => 5,
        'per_page' => 8,
]);
```

Operations method:
```php
$client->operations()->dependabot()->listAlertsForEnterprise(        enterprise: 'generated',
        state: 'generated',
        severity: 'generated',
        ecosystem: 'generated',
        package: 'generated',
        scope: 'generated',
        before: 'generated',
        after: 'generated',
        last: 4,
        sort: 'generated',
        direction: 'generated',
        first: 5,
        per_page: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/dependabot/alerts#list-dependabot-alerts-for-an-enterprise).


### secret-scanning/list-alerts-for-enterprise

List secret scanning alerts for an enterprise

Using the `call` method:
```php
$client->call('GET /enterprises/{enterprise}/secret-scanning/alerts', [
        'enterprise' => 'generated',
        'state' => 'generated',
        'secret_type' => 'generated',
        'resolution' => 'generated',
        'before' => 'generated',
        'after' => 'generated',
        'sort' => 'generated',
        'direction' => 'generated',
        'per_page' => 8,
]);
```

Operations method:
```php
$client->operations()->secretScanning()->listAlertsForEnterprise(        enterprise: 'generated',
        state: 'generated',
        secret_type: 'generated',
        resolution: 'generated',
        before: 'generated',
        after: 'generated',
        sort: 'generated',
        direction: 'generated',
        per_page: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/secret-scanning#list-secret-scanning-alerts-for-an-enterprise).


### activity/list-public-events

List public events

Using the `call` method:
```php
$client->call('GET /events', [
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->activity()->listPublicEvents(        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/activity#list-public-events).


### activity/get-feeds

Get feeds

Using the `call` method:
```php
$client->call('GET /feeds');
```

Operations method:
```php
$client->operations()->activity()->getFeeds();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/activity#get-feeds).


### gists/list

List gists for the authenticated user

Using the `call` method:
```php
$client->call('GET /gists', [
        'since' => '1970-01-01T00:00:00+00:00',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->gists()->list(        since: '1970-01-01T00:00:00+00:00',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/gists#list-gists-for-the-authenticated-user).


### gists/create

Create a gist

Using the `call` method:
```php
$client->call('POST /gists');
```

Operations method:
```php
$client->operations()->gists()->create();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/gists#create-a-gist).


### gists/list-public

List public gists

Using the `call` method:
```php
$client->call('GET /gists/public', [
        'since' => '1970-01-01T00:00:00+00:00',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->gists()->listPublic(        since: '1970-01-01T00:00:00+00:00',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/gists#list-public-gists).


### gists/list-starred

List starred gists

Using the `call` method:
```php
$client->call('GET /gists/starred', [
        'since' => '1970-01-01T00:00:00+00:00',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->gists()->listStarred(        since: '1970-01-01T00:00:00+00:00',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/gists#list-starred-gists).


### gists/get

Get a gist

Using the `call` method:
```php
$client->call('GET /gists/{gist_id}', [
        'gist_id' => 'generated',
]);
```

Operations method:
```php
$client->operations()->gists()->get(        gist_id: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/gists#get-a-gist).


### gists/delete

Delete a gist

Using the `call` method:
```php
$client->call('DELETE /gists/{gist_id}', [
        'gist_id' => 'generated',
]);
```

Operations method:
```php
$client->operations()->gists()->delete(        gist_id: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/gists#delete-a-gist).


### gists/update

Update a gist

Using the `call` method:
```php
$client->call('PATCH /gists/{gist_id}', [
        'gist_id' => 'generated',
]);
```

Operations method:
```php
$client->operations()->gists()->update(        gist_id: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/gists/#update-a-gist).


### gists/list-comments

List gist comments

Using the `call` method:
```php
$client->call('GET /gists/{gist_id}/comments', [
        'gist_id' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->gists()->listComments(        gist_id: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/gists#list-gist-comments).


### gists/create-comment

Create a gist comment

Using the `call` method:
```php
$client->call('POST /gists/{gist_id}/comments', [
        'gist_id' => 'generated',
]);
```

Operations method:
```php
$client->operations()->gists()->createComment(        gist_id: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/gists#create-a-gist-comment).


### gists/get-comment

Get a gist comment

Using the `call` method:
```php
$client->call('GET /gists/{gist_id}/comments/{comment_id}', [
        'gist_id' => 'generated',
        'comment_id' => 10,
]);
```

Operations method:
```php
$client->operations()->gists()->getComment(        gist_id: 'generated',
        comment_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/gists#get-a-gist-comment).


### gists/delete-comment

Delete a gist comment

Using the `call` method:
```php
$client->call('DELETE /gists/{gist_id}/comments/{comment_id}', [
        'gist_id' => 'generated',
        'comment_id' => 10,
]);
```

Operations method:
```php
$client->operations()->gists()->deleteComment(        gist_id: 'generated',
        comment_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/gists#delete-a-gist-comment).


### gists/update-comment

Update a gist comment

Using the `call` method:
```php
$client->call('PATCH /gists/{gist_id}/comments/{comment_id}', [
        'gist_id' => 'generated',
        'comment_id' => 10,
]);
```

Operations method:
```php
$client->operations()->gists()->updateComment(        gist_id: 'generated',
        comment_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/gists#update-a-gist-comment).


### gists/list-commits

List gist commits

Using the `call` method:
```php
$client->call('GET /gists/{gist_id}/commits', [
        'gist_id' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->gists()->listCommits(        gist_id: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/gists#list-gist-commits).


### gists/list-forks

List gist forks

Using the `call` method:
```php
$client->call('GET /gists/{gist_id}/forks', [
        'gist_id' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->gists()->listForks(        gist_id: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/gists#list-gist-forks).


### gists/fork

Fork a gist

Using the `call` method:
```php
$client->call('POST /gists/{gist_id}/forks', [
        'gist_id' => 'generated',
]);
```

Operations method:
```php
$client->operations()->gists()->fork(        gist_id: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/gists#fork-a-gist).


### gists/check-is-starred

Check if a gist is starred

Using the `call` method:
```php
$client->call('GET /gists/{gist_id}/star', [
        'gist_id' => 'generated',
]);
```

Operations method:
```php
$client->operations()->gists()->checkIsStarred(        gist_id: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/gists#check-if-a-gist-is-starred).


### gists/star

Star a gist

Using the `call` method:
```php
$client->call('PUT /gists/{gist_id}/star', [
        'gist_id' => 'generated',
]);
```

Operations method:
```php
$client->operations()->gists()->star(        gist_id: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/gists#star-a-gist).


### gists/unstar

Unstar a gist

Using the `call` method:
```php
$client->call('DELETE /gists/{gist_id}/star', [
        'gist_id' => 'generated',
]);
```

Operations method:
```php
$client->operations()->gists()->unstar(        gist_id: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/gists#unstar-a-gist).


### gists/get-revision

Get a gist revision

Using the `call` method:
```php
$client->call('GET /gists/{gist_id}/{sha}', [
        'gist_id' => 'generated',
        'sha' => 'generated',
]);
```

Operations method:
```php
$client->operations()->gists()->getRevision(        gist_id: 'generated',
        sha: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/gists#get-a-gist-revision).


### gitignore/get-all-templates

Get all gitignore templates

Using the `call` method:
```php
$client->call('GET /gitignore/templates');
```

Operations method:
```php
$client->operations()->gitignore()->getAllTemplates();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/gitignore#get-all-gitignore-templates).


### gitignore/get-template

Get a gitignore template

Using the `call` method:
```php
$client->call('GET /gitignore/templates/{name}', [
        'name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->gitignore()->getTemplate(        name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/gitignore#get-a-gitignore-template).


### apps/list-repos-accessible-to-installation

List repositories accessible to the app installation

Using the `call` method:
```php
$client->call('GET /installation/repositories', [
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->apps()->listReposAccessibleToInstallation(        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/apps#list-repositories-accessible-to-the-app-installation).


### apps/revoke-installation-access-token

Revoke an installation access token

Using the `call` method:
```php
$client->call('DELETE /installation/token');
```

Operations method:
```php
$client->operations()->apps()->revokeInstallationAccessToken();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/apps#revoke-an-installation-access-token).


### issues/list

List issues assigned to the authenticated user

Using the `call` method:
```php
$client->call('GET /issues', [
        'labels' => 'generated',
        'since' => '1970-01-01T00:00:00+00:00',
        'collab' => ,
        'orgs' => ,
        'owned' => ,
        'pulls' => ,
        'filter' => 'generated',
        'state' => 'generated',
        'sort' => 'generated',
        'direction' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->issues()->list(        labels: 'generated',
        since: '1970-01-01T00:00:00+00:00',
        collab: ,
        orgs: ,
        owned: ,
        pulls: ,
        filter: 'generated',
        state: 'generated',
        sort: 'generated',
        direction: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/issues#list-issues-assigned-to-the-authenticated-user).


### licenses/get-all-commonly-used

Get all commonly used licenses

Using the `call` method:
```php
$client->call('GET /licenses', [
        'featured' => ,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->licenses()->getAllCommonlyUsed(        featured: ,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/licenses#get-all-commonly-used-licenses).


### licenses/get

Get a license

Using the `call` method:
```php
$client->call('GET /licenses/{license}', [
        'license' => 'generated',
]);
```

Operations method:
```php
$client->operations()->licenses()->get(        license: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/licenses#get-a-license).


### markdown/render

Render a Markdown document

Using the `call` method:
```php
$client->call('POST /markdown');
```

Operations method:
```php
$client->operations()->markdown()->render();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/markdown#render-a-markdown-document).


### markdown/render-raw

Render a Markdown document in raw mode

Using the `call` method:
```php
$client->call('POST /markdown/raw');
```

Operations method:
```php
$client->operations()->markdown()->renderRaw();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/markdown#render-a-markdown-document-in-raw-mode).


### apps/get-subscription-plan-for-account

Get a subscription plan for an account

Using the `call` method:
```php
$client->call('GET /marketplace_listing/accounts/{account_id}', [
        'account_id' => 10,
]);
```

Operations method:
```php
$client->operations()->apps()->getSubscriptionPlanForAccount(        account_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/apps#get-a-subscription-plan-for-an-account).


### apps/list-plans

List plans

Using the `call` method:
```php
$client->call('GET /marketplace_listing/plans', [
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->apps()->listPlans(        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/apps#list-plans).


### apps/list-accounts-for-plan

List accounts for a plan

Using the `call` method:
```php
$client->call('GET /marketplace_listing/plans/{plan_id}/accounts', [
        'plan_id' => 7,
        'direction' => 'generated',
        'sort' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->apps()->listAccountsForPlan(        plan_id: 7,
        direction: 'generated',
        sort: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/apps#list-accounts-for-a-plan).


### apps/get-subscription-plan-for-account-stubbed

Get a subscription plan for an account (stubbed)

Using the `call` method:
```php
$client->call('GET /marketplace_listing/stubbed/accounts/{account_id}', [
        'account_id' => 10,
]);
```

Operations method:
```php
$client->operations()->apps()->getSubscriptionPlanForAccountStubbed(        account_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/apps#get-a-subscription-plan-for-an-account-stubbed).


### apps/list-plans-stubbed

List plans (stubbed)

Using the `call` method:
```php
$client->call('GET /marketplace_listing/stubbed/plans', [
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->apps()->listPlansStubbed(        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/apps#list-plans-stubbed).


### apps/list-accounts-for-plan-stubbed

List accounts for a plan (stubbed)

Using the `call` method:
```php
$client->call('GET /marketplace_listing/stubbed/plans/{plan_id}/accounts', [
        'plan_id' => 7,
        'direction' => 'generated',
        'sort' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->apps()->listAccountsForPlanStubbed(        plan_id: 7,
        direction: 'generated',
        sort: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/apps#list-accounts-for-a-plan-stubbed).


### meta/get

Get GitHub meta information

Using the `call` method:
```php
$client->call('GET /meta');
```

Operations method:
```php
$client->operations()->meta()->get();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/meta#get-github-meta-information).


### activity/list-public-events-for-repo-network

List public events for a network of repositories

Using the `call` method:
```php
$client->call('GET /networks/{owner}/{repo}/events', [
        'owner' => 'generated',
        'repo' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->activity()->listPublicEventsForRepoNetwork(        owner: 'generated',
        repo: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/activity#list-public-events-for-a-network-of-repositories).


### activity/list-notifications-for-authenticated-user

List notifications for the authenticated user

Using the `call` method:
```php
$client->call('GET /notifications', [
        'since' => '1970-01-01T00:00:00+00:00',
        'before' => '1970-01-01T00:00:00+00:00',
        'all' => ,
        'participating' => ,
        'page' => 4,
        'per_page' => 8,
]);
```

Operations method:
```php
$client->operations()->activity()->listNotificationsForAuthenticatedUser(        since: '1970-01-01T00:00:00+00:00',
        before: '1970-01-01T00:00:00+00:00',
        all: ,
        participating: ,
        page: 4,
        per_page: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/activity#list-notifications-for-the-authenticated-user).


### activity/mark-notifications-as-read

Mark notifications as read

Using the `call` method:
```php
$client->call('PUT /notifications');
```

Operations method:
```php
$client->operations()->activity()->markNotificationsAsRead();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/activity#mark-notifications-as-read).


### activity/get-thread

Get a thread

Using the `call` method:
```php
$client->call('GET /notifications/threads/{thread_id}', [
        'thread_id' => 9,
]);
```

Operations method:
```php
$client->operations()->activity()->getThread(        thread_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/activity#get-a-thread).


### activity/mark-thread-as-read

Mark a thread as read

Using the `call` method:
```php
$client->call('PATCH /notifications/threads/{thread_id}', [
        'thread_id' => 9,
]);
```

Operations method:
```php
$client->operations()->activity()->markThreadAsRead(        thread_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/activity#mark-a-thread-as-read).


### activity/get-thread-subscription-for-authenticated-user

Get a thread subscription for the authenticated user

Using the `call` method:
```php
$client->call('GET /notifications/threads/{thread_id}/subscription', [
        'thread_id' => 9,
]);
```

Operations method:
```php
$client->operations()->activity()->getThreadSubscriptionForAuthenticatedUser(        thread_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/activity#get-a-thread-subscription-for-the-authenticated-user).


### activity/set-thread-subscription

Set a thread subscription

Using the `call` method:
```php
$client->call('PUT /notifications/threads/{thread_id}/subscription', [
        'thread_id' => 9,
]);
```

Operations method:
```php
$client->operations()->activity()->setThreadSubscription(        thread_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/activity#set-a-thread-subscription).


### activity/delete-thread-subscription

Delete a thread subscription

Using the `call` method:
```php
$client->call('DELETE /notifications/threads/{thread_id}/subscription', [
        'thread_id' => 9,
]);
```

Operations method:
```php
$client->operations()->activity()->deleteThreadSubscription(        thread_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/activity#delete-a-thread-subscription).


### meta/get-octocat

Get Octocat

Using the `call` method:
```php
$client->call('GET /octocat', [
        's' => 'generated',
]);
```

Operations method:
```php
$client->operations()->meta()->getOctocat(        s: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/meta#get-octocat).


### orgs/list

List organizations

Using the `call` method:
```php
$client->call('GET /organizations', [
        'since' => 5,
        'per_page' => 8,
]);
```

Operations method:
```php
$client->operations()->orgs()->list(        since: 5,
        per_page: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/orgs#list-organizations).


### orgs/list-pat-grant-requests

List requests to access organization resources with fine-grained personal access tokens

Using the `call` method:
```php
$client->call('GET /organizations/{org}/personal-access-token-requests', [
        'org' => 'generated',
        'owner' => ,
        'repository' => 'generated',
        'permission' => 'generated',
        'last_used_before' => '1970-01-01T00:00:00+00:00',
        'last_used_after' => '1970-01-01T00:00:00+00:00',
        'per_page' => 8,
        'page' => 4,
        'sort' => 'generated',
        'direction' => 'generated',
]);
```

Operations method:
```php
$client->operations()->orgs()->listPatGrantRequests(        org: 'generated',
        owner: ,
        repository: 'generated',
        permission: 'generated',
        last_used_before: '1970-01-01T00:00:00+00:00',
        last_used_after: '1970-01-01T00:00:00+00:00',
        per_page: 8,
        page: 4,
        sort: 'generated',
        direction: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/orgs/orgs#list-requests-to-access-organization-resources-with-fine-grained-personal-access-tokens).


### orgs/review-pat-grant-requests-in-bulk

Review requests to access organization resources with fine-grained personal access tokens

Using the `call` method:
```php
$client->call('POST /organizations/{org}/personal-access-token-requests', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->orgs()->reviewPatGrantRequestsInBulk(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/orgs/orgs#review-requests-to-access-organization-resources-with-a-fine-grained-personal-access-token).


### orgs/review-pat-grant-request

Review a request to access organization resources with a fine-grained personal access token

Using the `call` method:
```php
$client->call('POST /organizations/{org}/personal-access-token-requests/{pat_request_id}', [
        'org' => 'generated',
        'pat_request_id' => 14,
]);
```

Operations method:
```php
$client->operations()->orgs()->reviewPatGrantRequest(        org: 'generated',
        pat_request_id: 14,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/orgs/orgs#review-a-request-to-access-organization-resources-with-a-fine-grained-personal-access-token).


### orgs/list-pat-grant-request-repositories

List repositories requested to be accessed by a fine-grained personal access token

Using the `call` method:
```php
$client->call('GET /organizations/{org}/personal-access-token-requests/{pat_request_id}/repositories', [
        'org' => 'generated',
        'pat_request_id' => 14,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->orgs()->listPatGrantRequestRepositories(        org: 'generated',
        pat_request_id: 14,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/orgs/orgs#list-repositories-requested-to-be-accessed-by-a-fine-grained-personal-access-token).


### orgs/list-pat-grants

List fine-grained personal access tokens with access to organization resources

Using the `call` method:
```php
$client->call('GET /organizations/{org}/personal-access-tokens', [
        'org' => 'generated',
        'owner' => ,
        'repository' => 'generated',
        'permission' => 'generated',
        'last_used_before' => '1970-01-01T00:00:00+00:00',
        'last_used_after' => '1970-01-01T00:00:00+00:00',
        'per_page' => 8,
        'page' => 4,
        'sort' => 'generated',
        'direction' => 'generated',
]);
```

Operations method:
```php
$client->operations()->orgs()->listPatGrants(        org: 'generated',
        owner: ,
        repository: 'generated',
        permission: 'generated',
        last_used_before: '1970-01-01T00:00:00+00:00',
        last_used_after: '1970-01-01T00:00:00+00:00',
        per_page: 8,
        page: 4,
        sort: 'generated',
        direction: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/orgs/orgs#list-fine-grained-personal-access-tokens-with-access-to-organization-resources).


### orgs/update-pat-accesses

Update the access to organization resources via fine-grained personal access tokens

Using the `call` method:
```php
$client->call('POST /organizations/{org}/personal-access-tokens', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->orgs()->updatePatAccesses(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/orgs/orgs#update-the-access-to-organization-resources-via-fine-grained-personal-access-tokens).


### orgs/update-pat-access

Update the access a fine-grained personal access token has to organization resources

Using the `call` method:
```php
$client->call('POST /organizations/{org}/personal-access-tokens/{pat_id}', [
        'org' => 'generated',
        'pat_id' => 6,
]);
```

Operations method:
```php
$client->operations()->orgs()->updatePatAccess(        org: 'generated',
        pat_id: 6,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/orgs/orgs#update-the-access-a-fine-grained-personal-access-token-has-to-organization-resources).


### orgs/list-pat-grant-repositories

List repositories a fine-grained personal access token has access to

Using the `call` method:
```php
$client->call('GET /organizations/{org}/personal-access-tokens/{pat_id}/repositories', [
        'org' => 'generated',
        'pat_id' => 6,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->orgs()->listPatGrantRepositories(        org: 'generated',
        pat_id: 6,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/orgs/orgs#list-repositories-a-fine-grained-personal-access-token-has-access-to).


### orgs/get

Get an organization

Using the `call` method:
```php
$client->call('GET /orgs/{org}', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->orgs()->get(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/orgs#get-an-organization).


### orgs/delete

Delete an organization

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->orgs()->delete(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/orgs/orgs/#delete-an-organization).


### orgs/update

Update an organization

Using the `call` method:
```php
$client->call('PATCH /orgs/{org}', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->orgs()->update(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/orgs#update-an-organization).


### actions/get-actions-cache-usage-for-org

Get GitHub Actions cache usage for an organization

Using the `call` method:
```php
$client->call('GET /orgs/{org}/actions/cache/usage', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->getActionsCacheUsageForOrg(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#get-github-actions-cache-usage-for-an-organization).


### actions/get-actions-cache-usage-by-repo-for-org

List repositories with GitHub Actions cache usage for an organization

Using the `call` method:
```php
$client->call('GET /orgs/{org}/actions/cache/usage-by-repository', [
        'org' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->actions()->getActionsCacheUsageByRepoForOrg(        org: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#list-repositories-with-github-actions-cache-usage-for-an-organization).


### oidc/get-oidc-custom-sub-template-for-org

Get the customization template for an OIDC subject claim for an organization

Using the `call` method:
```php
$client->call('GET /orgs/{org}/actions/oidc/customization/sub', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->oidc()->getOidcCustomSubTemplateForOrg(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/actions/oidc#get-the-customization-template-for-an-oidc-subject-claim-for-an-organization).


### oidc/update-oidc-custom-sub-template-for-org

Set the customization template for an OIDC subject claim for an organization

Using the `call` method:
```php
$client->call('PUT /orgs/{org}/actions/oidc/customization/sub', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->oidc()->updateOidcCustomSubTemplateForOrg(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/actions/oidc#set-the-customization-template-for-an-oidc-subject-claim-for-an-organization).


### actions/get-github-actions-permissions-organization

Get GitHub Actions permissions for an organization

Using the `call` method:
```php
$client->call('GET /orgs/{org}/actions/permissions', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->getGithubActionsPermissionsOrganization(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#get-github-actions-permissions-for-an-organization).


### actions/set-github-actions-permissions-organization

Set GitHub Actions permissions for an organization

Using the `call` method:
```php
$client->call('PUT /orgs/{org}/actions/permissions', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->setGithubActionsPermissionsOrganization(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#set-github-actions-permissions-for-an-organization).


### actions/list-selected-repositories-enabled-github-actions-organization

List selected repositories enabled for GitHub Actions in an organization

Using the `call` method:
```php
$client->call('GET /orgs/{org}/actions/permissions/repositories', [
        'org' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->actions()->listSelectedRepositoriesEnabledGithubActionsOrganization(        org: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#list-selected-repositories-enabled-for-github-actions-in-an-organization).


### actions/set-selected-repositories-enabled-github-actions-organization

Set selected repositories enabled for GitHub Actions in an organization

Using the `call` method:
```php
$client->call('PUT /orgs/{org}/actions/permissions/repositories', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->setSelectedRepositoriesEnabledGithubActionsOrganization(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#set-selected-repositories-enabled-for-github-actions-in-an-organization).


### actions/enable-selected-repository-github-actions-organization

Enable a selected repository for GitHub Actions in an organization

Using the `call` method:
```php
$client->call('PUT /orgs/{org}/actions/permissions/repositories/{repository_id}', [
        'org' => 'generated',
        'repository_id' => 13,
]);
```

Operations method:
```php
$client->operations()->actions()->enableSelectedRepositoryGithubActionsOrganization(        org: 'generated',
        repository_id: 13,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#enable-a-selected-repository-for-github-actions-in-an-organization).


### actions/disable-selected-repository-github-actions-organization

Disable a selected repository for GitHub Actions in an organization

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/actions/permissions/repositories/{repository_id}', [
        'org' => 'generated',
        'repository_id' => 13,
]);
```

Operations method:
```php
$client->operations()->actions()->disableSelectedRepositoryGithubActionsOrganization(        org: 'generated',
        repository_id: 13,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#disable-a-selected-repository-for-github-actions-in-an-organization).


### actions/get-allowed-actions-organization

Get allowed actions and reusable workflows for an organization

Using the `call` method:
```php
$client->call('GET /orgs/{org}/actions/permissions/selected-actions', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->getAllowedActionsOrganization(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#get-allowed-actions-for-an-organization).


### actions/set-allowed-actions-organization

Set allowed actions and reusable workflows for an organization

Using the `call` method:
```php
$client->call('PUT /orgs/{org}/actions/permissions/selected-actions', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->setAllowedActionsOrganization(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#set-allowed-actions-for-an-organization).


### actions/get-github-actions-default-workflow-permissions-organization

Get default workflow permissions for an organization

Using the `call` method:
```php
$client->call('GET /orgs/{org}/actions/permissions/workflow', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->getGithubActionsDefaultWorkflowPermissionsOrganization(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#get-default-workflow-permissions).


### actions/set-github-actions-default-workflow-permissions-organization

Set default workflow permissions for an organization

Using the `call` method:
```php
$client->call('PUT /orgs/{org}/actions/permissions/workflow', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->setGithubActionsDefaultWorkflowPermissionsOrganization(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#set-default-workflow-permissions).


### actions/list-required-workflows

List required workflows

Using the `call` method:
```php
$client->call('GET /orgs/{org}/actions/required_workflows', [
        'org' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->actions()->listRequiredWorkflows(        org: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#list-required-workflows).


### actions/create-required-workflow

Create a required workflow

Using the `call` method:
```php
$client->call('POST /orgs/{org}/actions/required_workflows', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->createRequiredWorkflow(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#create-a-required-workflow).


### actions/get-required-workflow

Get a required workflow

Using the `call` method:
```php
$client->call('GET /orgs/{org}/actions/required_workflows/{required_workflow_id}', [
        'org' => 'generated',
        'required_workflow_id' => 20,
]);
```

Operations method:
```php
$client->operations()->actions()->getRequiredWorkflow(        org: 'generated',
        required_workflow_id: 20,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#get-a-required-workflow).


### actions/delete-required-workflow

Delete a required workflow

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/actions/required_workflows/{required_workflow_id}', [
        'org' => 'generated',
        'required_workflow_id' => 20,
]);
```

Operations method:
```php
$client->operations()->actions()->deleteRequiredWorkflow(        org: 'generated',
        required_workflow_id: 20,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#delete-a-required-workflow).


### actions/update-required-workflow

Update a required workflow

Using the `call` method:
```php
$client->call('PATCH /orgs/{org}/actions/required_workflows/{required_workflow_id}', [
        'org' => 'generated',
        'required_workflow_id' => 20,
]);
```

Operations method:
```php
$client->operations()->actions()->updateRequiredWorkflow(        org: 'generated',
        required_workflow_id: 20,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#update-a-required-workflow).


### actions/list-selected-repositories-required-workflow

List selected repositories for a required workflow

Using the `call` method:
```php
$client->call('GET /orgs/{org}/actions/required_workflows/{required_workflow_id}/repositories', [
        'org' => 'generated',
        'required_workflow_id' => 20,
]);
```

Operations method:
```php
$client->operations()->actions()->listSelectedRepositoriesRequiredWorkflow(        org: 'generated',
        required_workflow_id: 20,
);
```

You can find more about this operation over at the [API method documentation https://docs.github.com/rest/reference/actions#list-selected-repositories-required-workflows](https://docs.github.com/rest/reference/actions#list-selected-repositories-required-workflows).


### actions/set-selected-repos-to-required-workflow

Sets repositories for a required workflow

Using the `call` method:
```php
$client->call('PUT /orgs/{org}/actions/required_workflows/{required_workflow_id}/repositories', [
        'org' => 'generated',
        'required_workflow_id' => 20,
]);
```

Operations method:
```php
$client->operations()->actions()->setSelectedReposToRequiredWorkflow(        org: 'generated',
        required_workflow_id: 20,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#set-selected-repositories-for-a-required-workflow).


### actions/add-selected-repo-to-required-workflow

Add a repository to a required workflow

Using the `call` method:
```php
$client->call('PUT /orgs/{org}/actions/required_workflows/{required_workflow_id}/repositories/{repository_id}', [
        'org' => 'generated',
        'required_workflow_id' => 20,
        'repository_id' => 13,
]);
```

Operations method:
```php
$client->operations()->actions()->addSelectedRepoToRequiredWorkflow(        org: 'generated',
        required_workflow_id: 20,
        repository_id: 13,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#add-a-repository-to-selected-repositories-list-for-a-required-workflow).


### actions/remove-selected-repo-from-required-workflow

Remove a selected repository from required workflow

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/actions/required_workflows/{required_workflow_id}/repositories/{repository_id}', [
        'org' => 'generated',
        'required_workflow_id' => 20,
        'repository_id' => 13,
]);
```

Operations method:
```php
$client->operations()->actions()->removeSelectedRepoFromRequiredWorkflow(        org: 'generated',
        required_workflow_id: 20,
        repository_id: 13,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#remove-a-repository-from-selected-repositories-list-for-a-required-workflow).


### actions/list-self-hosted-runners-for-org

List self-hosted runners for an organization

Using the `call` method:
```php
$client->call('GET /orgs/{org}/actions/runners', [
        'org' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->actions()->listSelfHostedRunnersForOrg(        org: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#list-self-hosted-runners-for-an-organization).


### actions/list-runner-applications-for-org

List runner applications for an organization

Using the `call` method:
```php
$client->call('GET /orgs/{org}/actions/runners/downloads', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->listRunnerApplicationsForOrg(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#list-runner-applications-for-an-organization).


### actions/create-registration-token-for-org

Create a registration token for an organization

Using the `call` method:
```php
$client->call('POST /orgs/{org}/actions/runners/registration-token', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->createRegistrationTokenForOrg(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#create-a-registration-token-for-an-organization).


### actions/create-remove-token-for-org

Create a remove token for an organization

Using the `call` method:
```php
$client->call('POST /orgs/{org}/actions/runners/remove-token', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->createRemoveTokenForOrg(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#create-a-remove-token-for-an-organization).


### actions/get-self-hosted-runner-for-org

Get a self-hosted runner for an organization

Using the `call` method:
```php
$client->call('GET /orgs/{org}/actions/runners/{runner_id}', [
        'org' => 'generated',
        'runner_id' => 9,
]);
```

Operations method:
```php
$client->operations()->actions()->getSelfHostedRunnerForOrg(        org: 'generated',
        runner_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#get-a-self-hosted-runner-for-an-organization).


### actions/delete-self-hosted-runner-from-org

Delete a self-hosted runner from an organization

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/actions/runners/{runner_id}', [
        'org' => 'generated',
        'runner_id' => 9,
]);
```

Operations method:
```php
$client->operations()->actions()->deleteSelfHostedRunnerFromOrg(        org: 'generated',
        runner_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#delete-a-self-hosted-runner-from-an-organization).


### actions/list-labels-for-self-hosted-runner-for-org

List labels for a self-hosted runner for an organization

Using the `call` method:
```php
$client->call('GET /orgs/{org}/actions/runners/{runner_id}/labels', [
        'org' => 'generated',
        'runner_id' => 9,
]);
```

Operations method:
```php
$client->operations()->actions()->listLabelsForSelfHostedRunnerForOrg(        org: 'generated',
        runner_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#list-labels-for-a-self-hosted-runner-for-an-organization).


### actions/set-custom-labels-for-self-hosted-runner-for-org

Set custom labels for a self-hosted runner for an organization

Using the `call` method:
```php
$client->call('PUT /orgs/{org}/actions/runners/{runner_id}/labels', [
        'org' => 'generated',
        'runner_id' => 9,
]);
```

Operations method:
```php
$client->operations()->actions()->setCustomLabelsForSelfHostedRunnerForOrg(        org: 'generated',
        runner_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#set-custom-labels-for-a-self-hosted-runner-for-an-organization).


### actions/add-custom-labels-to-self-hosted-runner-for-org

Add custom labels to a self-hosted runner for an organization

Using the `call` method:
```php
$client->call('POST /orgs/{org}/actions/runners/{runner_id}/labels', [
        'org' => 'generated',
        'runner_id' => 9,
]);
```

Operations method:
```php
$client->operations()->actions()->addCustomLabelsToSelfHostedRunnerForOrg(        org: 'generated',
        runner_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#add-custom-labels-to-a-self-hosted-runner-for-an-organization).


### actions/remove-all-custom-labels-from-self-hosted-runner-for-org

Remove all custom labels from a self-hosted runner for an organization

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/actions/runners/{runner_id}/labels', [
        'org' => 'generated',
        'runner_id' => 9,
]);
```

Operations method:
```php
$client->operations()->actions()->removeAllCustomLabelsFromSelfHostedRunnerForOrg(        org: 'generated',
        runner_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#remove-all-custom-labels-from-a-self-hosted-runner-for-an-organization).


### actions/remove-custom-label-from-self-hosted-runner-for-org

Remove a custom label from a self-hosted runner for an organization

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/actions/runners/{runner_id}/labels/{name}', [
        'org' => 'generated',
        'runner_id' => 9,
        'name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->removeCustomLabelFromSelfHostedRunnerForOrg(        org: 'generated',
        runner_id: 9,
        name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#remove-a-custom-label-from-a-self-hosted-runner-for-an-organization).


### actions/list-org-secrets

List organization secrets

Using the `call` method:
```php
$client->call('GET /orgs/{org}/actions/secrets', [
        'org' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->actions()->listOrgSecrets(        org: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#list-organization-secrets).


### actions/get-org-public-key

Get an organization public key

Using the `call` method:
```php
$client->call('GET /orgs/{org}/actions/secrets/public-key', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->getOrgPublicKey(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#get-an-organization-public-key).


### actions/get-org-secret

Get an organization secret

Using the `call` method:
```php
$client->call('GET /orgs/{org}/actions/secrets/{secret_name}', [
        'org' => 'generated',
        'secret_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->getOrgSecret(        org: 'generated',
        secret_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#get-an-organization-secret).


### actions/create-or-update-org-secret

Create or update an organization secret

Using the `call` method:
```php
$client->call('PUT /orgs/{org}/actions/secrets/{secret_name}', [
        'org' => 'generated',
        'secret_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->createOrUpdateOrgSecret(        org: 'generated',
        secret_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#create-or-update-an-organization-secret).


### actions/delete-org-secret

Delete an organization secret

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/actions/secrets/{secret_name}', [
        'org' => 'generated',
        'secret_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->deleteOrgSecret(        org: 'generated',
        secret_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#delete-an-organization-secret).


### actions/list-selected-repos-for-org-secret

List selected repositories for an organization secret

Using the `call` method:
```php
$client->call('GET /orgs/{org}/actions/secrets/{secret_name}/repositories', [
        'org' => 'generated',
        'secret_name' => 'generated',
        'page' => 4,
        'per_page' => 8,
]);
```

Operations method:
```php
$client->operations()->actions()->listSelectedReposForOrgSecret(        org: 'generated',
        secret_name: 'generated',
        page: 4,
        per_page: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#list-selected-repositories-for-an-organization-secret).


### actions/set-selected-repos-for-org-secret

Set selected repositories for an organization secret

Using the `call` method:
```php
$client->call('PUT /orgs/{org}/actions/secrets/{secret_name}/repositories', [
        'org' => 'generated',
        'secret_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->setSelectedReposForOrgSecret(        org: 'generated',
        secret_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#set-selected-repositories-for-an-organization-secret).


### actions/add-selected-repo-to-org-secret

Add selected repository to an organization secret

Using the `call` method:
```php
$client->call('PUT /orgs/{org}/actions/secrets/{secret_name}/repositories/{repository_id}', [
        'org' => 'generated',
        'secret_name' => 'generated',
        'repository_id' => 13,
]);
```

Operations method:
```php
$client->operations()->actions()->addSelectedRepoToOrgSecret(        org: 'generated',
        secret_name: 'generated',
        repository_id: 13,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#add-selected-repository-to-an-organization-secret).


### actions/remove-selected-repo-from-org-secret

Remove selected repository from an organization secret

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/actions/secrets/{secret_name}/repositories/{repository_id}', [
        'org' => 'generated',
        'secret_name' => 'generated',
        'repository_id' => 13,
]);
```

Operations method:
```php
$client->operations()->actions()->removeSelectedRepoFromOrgSecret(        org: 'generated',
        secret_name: 'generated',
        repository_id: 13,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#remove-selected-repository-from-an-organization-secret).


### actions/list-org-variables

List organization variables

Using the `call` method:
```php
$client->call('GET /orgs/{org}/actions/variables', [
        'org' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->actions()->listOrgVariables(        org: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/actions/variables#list-organization-variables).


### actions/create-org-variable

Create an organization variable

Using the `call` method:
```php
$client->call('POST /orgs/{org}/actions/variables', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->createOrgVariable(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/actions/variables#create-an-organization-variable).


### actions/get-org-variable

Get an organization variable

Using the `call` method:
```php
$client->call('GET /orgs/{org}/actions/variables/{name}', [
        'org' => 'generated',
        'name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->getOrgVariable(        org: 'generated',
        name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/actions/variables#get-an-organization-variable).


### actions/delete-org-variable

Delete an organization variable

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/actions/variables/{name}', [
        'org' => 'generated',
        'name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->deleteOrgVariable(        org: 'generated',
        name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/actions/variables#delete-an-organization-variable).


### actions/update-org-variable

Update an organization variable

Using the `call` method:
```php
$client->call('PATCH /orgs/{org}/actions/variables/{name}', [
        'org' => 'generated',
        'name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->updateOrgVariable(        org: 'generated',
        name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/actions/variables#update-an-organization-variable).


### actions/list-selected-repos-for-org-variable

List selected repositories for an organization variable

Using the `call` method:
```php
$client->call('GET /orgs/{org}/actions/variables/{name}/repositories', [
        'org' => 'generated',
        'name' => 'generated',
        'page' => 4,
        'per_page' => 8,
]);
```

Operations method:
```php
$client->operations()->actions()->listSelectedReposForOrgVariable(        org: 'generated',
        name: 'generated',
        page: 4,
        per_page: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/actions/variables#list-selected-repositories-for-an-organization-variable).


### actions/set-selected-repos-for-org-variable

Set selected repositories for an organization variable

Using the `call` method:
```php
$client->call('PUT /orgs/{org}/actions/variables/{name}/repositories', [
        'org' => 'generated',
        'name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->setSelectedReposForOrgVariable(        org: 'generated',
        name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/actions/variables#set-selected-repositories-for-an-organization-variable).


### actions/add-selected-repo-to-org-variable

Add selected repository to an organization variable

Using the `call` method:
```php
$client->call('PUT /orgs/{org}/actions/variables/{name}/repositories/{repository_id}', [
        'org' => 'generated',
        'name' => 'generated',
        'repository_id' => 13,
]);
```

Operations method:
```php
$client->operations()->actions()->addSelectedRepoToOrgVariable(        org: 'generated',
        name: 'generated',
        repository_id: 13,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/actions/variables#add-selected-repository-to-an-organization-variable).


### actions/remove-selected-repo-from-org-variable

Remove selected repository from an organization variable

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/actions/variables/{name}/repositories/{repository_id}', [
        'org' => 'generated',
        'name' => 'generated',
        'repository_id' => 13,
]);
```

Operations method:
```php
$client->operations()->actions()->removeSelectedRepoFromOrgVariable(        org: 'generated',
        name: 'generated',
        repository_id: 13,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/actions/variables#remove-selected-repository-from-an-organization-variable).


### orgs/list-blocked-users

List users blocked by an organization

Using the `call` method:
```php
$client->call('GET /orgs/{org}/blocks', [
        'org' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->orgs()->listBlockedUsers(        org: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/orgs#list-users-blocked-by-an-organization).


### orgs/check-blocked-user

Check if a user is blocked by an organization

Using the `call` method:
```php
$client->call('GET /orgs/{org}/blocks/{username}', [
        'org' => 'generated',
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->orgs()->checkBlockedUser(        org: 'generated',
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/orgs#check-if-a-user-is-blocked-by-an-organization).


### orgs/block-user

Block a user from an organization

Using the `call` method:
```php
$client->call('PUT /orgs/{org}/blocks/{username}', [
        'org' => 'generated',
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->orgs()->blockUser(        org: 'generated',
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/orgs#block-a-user-from-an-organization).


### orgs/unblock-user

Unblock a user from an organization

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/blocks/{username}', [
        'org' => 'generated',
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->orgs()->unblockUser(        org: 'generated',
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/orgs#unblock-a-user-from-an-organization).


### code-scanning/list-alerts-for-org

List code scanning alerts for an organization

Using the `call` method:
```php
$client->call('GET /orgs/{org}/code-scanning/alerts', [
        'org' => 'generated',
        'tool_name' => 'generated',
        'tool_guid' => ,
        'before' => 'generated',
        'after' => 'generated',
        'state' => 'generated',
        'severity' => 'generated',
        'page' => 4,
        'per_page' => 8,
        'direction' => 'generated',
        'sort' => 'generated',
]);
```

Operations method:
```php
$client->operations()->codeScanning()->listAlertsForOrg(        org: 'generated',
        tool_name: 'generated',
        tool_guid: ,
        before: 'generated',
        after: 'generated',
        state: 'generated',
        severity: 'generated',
        page: 4,
        per_page: 8,
        direction: 'generated',
        sort: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/code-scanning#list-code-scanning-alerts-for-an-organization).


### codespaces/list-in-organization

List codespaces for the organization

Using the `call` method:
```php
$client->call('GET /orgs/{org}/codespaces', [
        'org' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->codespaces()->listInOrganization(        org: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/codespaces#list-in-organization).


### codespaces/set-codespaces-billing

Manage access control for organization codespaces

Using the `call` method:
```php
$client->call('PUT /orgs/{org}/codespaces/billing', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->codespaces()->setCodespacesBilling(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/codespaces#set-codespaces-billing).


### codespaces/set-codespaces-billing-users

Add users to Codespaces billing for an organization

Using the `call` method:
```php
$client->call('POST /orgs/{org}/codespaces/billing/selected_users', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->codespaces()->setCodespacesBillingUsers(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/codespaces#set-codespaces-billing-users).


### codespaces/delete-codespaces-billing-users

Removes users from Codespaces billing for an organization

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/codespaces/billing/selected_users', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->codespaces()->deleteCodespacesBillingUsers(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/codespaces#delete-codespaces-billing-users).


### codespaces/list-org-secrets

List organization secrets

Using the `call` method:
```php
$client->call('GET /orgs/{org}/codespaces/secrets', [
        'org' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->codespaces()->listOrgSecrets(        org: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/codespaces#list-organization-secrets).


### codespaces/get-org-public-key

Get an organization public key

Using the `call` method:
```php
$client->call('GET /orgs/{org}/codespaces/secrets/public-key', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->codespaces()->getOrgPublicKey(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/codespaces#get-an-organization-public-key).


### codespaces/get-org-secret

Get an organization secret

Using the `call` method:
```php
$client->call('GET /orgs/{org}/codespaces/secrets/{secret_name}', [
        'org' => 'generated',
        'secret_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->codespaces()->getOrgSecret(        org: 'generated',
        secret_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/codespaces#get-an-organization-secret).


### codespaces/create-or-update-org-secret

Create or update an organization secret

Using the `call` method:
```php
$client->call('PUT /orgs/{org}/codespaces/secrets/{secret_name}', [
        'org' => 'generated',
        'secret_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->codespaces()->createOrUpdateOrgSecret(        org: 'generated',
        secret_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/codespaces#create-or-update-an-organization-secret).


### codespaces/delete-org-secret

Delete an organization secret

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/codespaces/secrets/{secret_name}', [
        'org' => 'generated',
        'secret_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->codespaces()->deleteOrgSecret(        org: 'generated',
        secret_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/codespaces#delete-an-organization-secret).


### codespaces/list-selected-repos-for-org-secret

List selected repositories for an organization secret

Using the `call` method:
```php
$client->call('GET /orgs/{org}/codespaces/secrets/{secret_name}/repositories', [
        'org' => 'generated',
        'secret_name' => 'generated',
        'page' => 4,
        'per_page' => 8,
]);
```

Operations method:
```php
$client->operations()->codespaces()->listSelectedReposForOrgSecret(        org: 'generated',
        secret_name: 'generated',
        page: 4,
        per_page: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/codespaces#list-selected-repositories-for-an-organization-secret).


### codespaces/set-selected-repos-for-org-secret

Set selected repositories for an organization secret

Using the `call` method:
```php
$client->call('PUT /orgs/{org}/codespaces/secrets/{secret_name}/repositories', [
        'org' => 'generated',
        'secret_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->codespaces()->setSelectedReposForOrgSecret(        org: 'generated',
        secret_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/codespaces#set-selected-repositories-for-an-organization-secret).


### codespaces/add-selected-repo-to-org-secret

Add selected repository to an organization secret

Using the `call` method:
```php
$client->call('PUT /orgs/{org}/codespaces/secrets/{secret_name}/repositories/{repository_id}', [
        'org' => 'generated',
        'secret_name' => 'generated',
        'repository_id' => 13,
]);
```

Operations method:
```php
$client->operations()->codespaces()->addSelectedRepoToOrgSecret(        org: 'generated',
        secret_name: 'generated',
        repository_id: 13,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/codespaces#add-selected-repository-to-an-organization-secret).


### codespaces/remove-selected-repo-from-org-secret

Remove selected repository from an organization secret

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/codespaces/secrets/{secret_name}/repositories/{repository_id}', [
        'org' => 'generated',
        'secret_name' => 'generated',
        'repository_id' => 13,
]);
```

Operations method:
```php
$client->operations()->codespaces()->removeSelectedRepoFromOrgSecret(        org: 'generated',
        secret_name: 'generated',
        repository_id: 13,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/codespaces#remove-selected-repository-from-an-organization-secret).


### dependabot/list-alerts-for-org

List Dependabot alerts for an organization

Using the `call` method:
```php
$client->call('GET /orgs/{org}/dependabot/alerts', [
        'org' => 'generated',
        'state' => 'generated',
        'severity' => 'generated',
        'ecosystem' => 'generated',
        'package' => 'generated',
        'scope' => 'generated',
        'before' => 'generated',
        'after' => 'generated',
        'last' => 4,
        'sort' => 'generated',
        'direction' => 'generated',
        'first' => 5,
        'per_page' => 8,
]);
```

Operations method:
```php
$client->operations()->dependabot()->listAlertsForOrg(        org: 'generated',
        state: 'generated',
        severity: 'generated',
        ecosystem: 'generated',
        package: 'generated',
        scope: 'generated',
        before: 'generated',
        after: 'generated',
        last: 4,
        sort: 'generated',
        direction: 'generated',
        first: 5,
        per_page: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/dependabot/alerts#list-dependabot-alerts-for-an-organization).


### dependabot/list-org-secrets

List organization secrets

Using the `call` method:
```php
$client->call('GET /orgs/{org}/dependabot/secrets', [
        'org' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->dependabot()->listOrgSecrets(        org: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/dependabot#list-organization-secrets).


### dependabot/get-org-public-key

Get an organization public key

Using the `call` method:
```php
$client->call('GET /orgs/{org}/dependabot/secrets/public-key', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->dependabot()->getOrgPublicKey(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/dependabot#get-an-organization-public-key).


### dependabot/get-org-secret

Get an organization secret

Using the `call` method:
```php
$client->call('GET /orgs/{org}/dependabot/secrets/{secret_name}', [
        'org' => 'generated',
        'secret_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->dependabot()->getOrgSecret(        org: 'generated',
        secret_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/dependabot#get-an-organization-secret).


### dependabot/create-or-update-org-secret

Create or update an organization secret

Using the `call` method:
```php
$client->call('PUT /orgs/{org}/dependabot/secrets/{secret_name}', [
        'org' => 'generated',
        'secret_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->dependabot()->createOrUpdateOrgSecret(        org: 'generated',
        secret_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/dependabot#create-or-update-an-organization-secret).


### dependabot/delete-org-secret

Delete an organization secret

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/dependabot/secrets/{secret_name}', [
        'org' => 'generated',
        'secret_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->dependabot()->deleteOrgSecret(        org: 'generated',
        secret_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/dependabot#delete-an-organization-secret).


### dependabot/list-selected-repos-for-org-secret

List selected repositories for an organization secret

Using the `call` method:
```php
$client->call('GET /orgs/{org}/dependabot/secrets/{secret_name}/repositories', [
        'org' => 'generated',
        'secret_name' => 'generated',
        'page' => 4,
        'per_page' => 8,
]);
```

Operations method:
```php
$client->operations()->dependabot()->listSelectedReposForOrgSecret(        org: 'generated',
        secret_name: 'generated',
        page: 4,
        per_page: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/dependabot#list-selected-repositories-for-an-organization-secret).


### dependabot/set-selected-repos-for-org-secret

Set selected repositories for an organization secret

Using the `call` method:
```php
$client->call('PUT /orgs/{org}/dependabot/secrets/{secret_name}/repositories', [
        'org' => 'generated',
        'secret_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->dependabot()->setSelectedReposForOrgSecret(        org: 'generated',
        secret_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/dependabot#set-selected-repositories-for-an-organization-secret).


### dependabot/add-selected-repo-to-org-secret

Add selected repository to an organization secret

Using the `call` method:
```php
$client->call('PUT /orgs/{org}/dependabot/secrets/{secret_name}/repositories/{repository_id}', [
        'org' => 'generated',
        'secret_name' => 'generated',
        'repository_id' => 13,
]);
```

Operations method:
```php
$client->operations()->dependabot()->addSelectedRepoToOrgSecret(        org: 'generated',
        secret_name: 'generated',
        repository_id: 13,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/dependabot#add-selected-repository-to-an-organization-secret).


### dependabot/remove-selected-repo-from-org-secret

Remove selected repository from an organization secret

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/dependabot/secrets/{secret_name}/repositories/{repository_id}', [
        'org' => 'generated',
        'secret_name' => 'generated',
        'repository_id' => 13,
]);
```

Operations method:
```php
$client->operations()->dependabot()->removeSelectedRepoFromOrgSecret(        org: 'generated',
        secret_name: 'generated',
        repository_id: 13,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/dependabot#remove-selected-repository-from-an-organization-secret).


### packages/list-docker-migration-conflicting-packages-for-organization

Get list of conflicting packages during Docker migration for organization

Using the `call` method:
```php
$client->call('GET /orgs/{org}/docker/conflicts', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->packages()->listDockerMigrationConflictingPackagesForOrganization(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/packages#list-docker-migration-conflicting-packages-for-organization).


### activity/list-public-org-events

List public organization events

Using the `call` method:
```php
$client->call('GET /orgs/{org}/events', [
        'org' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->activity()->listPublicOrgEvents(        org: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/activity#list-public-organization-events).


### orgs/list-failed-invitations

List failed organization invitations

Using the `call` method:
```php
$client->call('GET /orgs/{org}/failed_invitations', [
        'org' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->orgs()->listFailedInvitations(        org: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/orgs#list-failed-organization-invitations).


### orgs/list-webhooks

List organization webhooks

Using the `call` method:
```php
$client->call('GET /orgs/{org}/hooks', [
        'org' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->orgs()->listWebhooks(        org: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/orgs#list-organization-webhooks).


### orgs/create-webhook

Create an organization webhook

Using the `call` method:
```php
$client->call('POST /orgs/{org}/hooks', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->orgs()->createWebhook(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/orgs#create-an-organization-webhook).


### orgs/get-webhook

Get an organization webhook

Using the `call` method:
```php
$client->call('GET /orgs/{org}/hooks/{hook_id}', [
        'org' => 'generated',
        'hook_id' => 7,
]);
```

Operations method:
```php
$client->operations()->orgs()->getWebhook(        org: 'generated',
        hook_id: 7,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/orgs#get-an-organization-webhook).


### orgs/delete-webhook

Delete an organization webhook

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/hooks/{hook_id}', [
        'org' => 'generated',
        'hook_id' => 7,
]);
```

Operations method:
```php
$client->operations()->orgs()->deleteWebhook(        org: 'generated',
        hook_id: 7,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/orgs#delete-an-organization-webhook).


### orgs/update-webhook

Update an organization webhook

Using the `call` method:
```php
$client->call('PATCH /orgs/{org}/hooks/{hook_id}', [
        'org' => 'generated',
        'hook_id' => 7,
]);
```

Operations method:
```php
$client->operations()->orgs()->updateWebhook(        org: 'generated',
        hook_id: 7,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/orgs#update-an-organization-webhook).


### orgs/get-webhook-config-for-org

Get a webhook configuration for an organization

Using the `call` method:
```php
$client->call('GET /orgs/{org}/hooks/{hook_id}/config', [
        'org' => 'generated',
        'hook_id' => 7,
]);
```

Operations method:
```php
$client->operations()->orgs()->getWebhookConfigForOrg(        org: 'generated',
        hook_id: 7,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/orgs#get-a-webhook-configuration-for-an-organization).


### orgs/update-webhook-config-for-org

Update a webhook configuration for an organization

Using the `call` method:
```php
$client->call('PATCH /orgs/{org}/hooks/{hook_id}/config', [
        'org' => 'generated',
        'hook_id' => 7,
]);
```

Operations method:
```php
$client->operations()->orgs()->updateWebhookConfigForOrg(        org: 'generated',
        hook_id: 7,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/orgs#update-a-webhook-configuration-for-an-organization).


### orgs/list-webhook-deliveries

List deliveries for an organization webhook

Using the `call` method:
```php
$client->call('GET /orgs/{org}/hooks/{hook_id}/deliveries', [
        'org' => 'generated',
        'hook_id' => 7,
        'cursor' => 'generated',
        'redelivery' => ,
        'per_page' => 8,
]);
```

Operations method:
```php
$client->operations()->orgs()->listWebhookDeliveries(        org: 'generated',
        hook_id: 7,
        cursor: 'generated',
        redelivery: ,
        per_page: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/orgs#list-deliveries-for-an-organization-webhook).


### orgs/get-webhook-delivery

Get a webhook delivery for an organization webhook

Using the `call` method:
```php
$client->call('GET /orgs/{org}/hooks/{hook_id}/deliveries/{delivery_id}', [
        'org' => 'generated',
        'hook_id' => 7,
        'delivery_id' => 11,
]);
```

Operations method:
```php
$client->operations()->orgs()->getWebhookDelivery(        org: 'generated',
        hook_id: 7,
        delivery_id: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/orgs#get-a-webhook-delivery-for-an-organization-webhook).


### orgs/redeliver-webhook-delivery

Redeliver a delivery for an organization webhook

Using the `call` method:
```php
$client->call('POST /orgs/{org}/hooks/{hook_id}/deliveries/{delivery_id}/attempts', [
        'org' => 'generated',
        'hook_id' => 7,
        'delivery_id' => 11,
]);
```

Operations method:
```php
$client->operations()->orgs()->redeliverWebhookDelivery(        org: 'generated',
        hook_id: 7,
        delivery_id: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/orgs#redeliver-a-delivery-for-an-organization-webhook).


### orgs/ping-webhook

Ping an organization webhook

Using the `call` method:
```php
$client->call('POST /orgs/{org}/hooks/{hook_id}/pings', [
        'org' => 'generated',
        'hook_id' => 7,
]);
```

Operations method:
```php
$client->operations()->orgs()->pingWebhook(        org: 'generated',
        hook_id: 7,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/orgs#ping-an-organization-webhook).


### apps/get-org-installation

Get an organization installation for the authenticated app

Using the `call` method:
```php
$client->call('GET /orgs/{org}/installation', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->apps()->getOrgInstallation(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/apps#get-an-organization-installation-for-the-authenticated-app).


### orgs/list-app-installations

List app installations for an organization

Using the `call` method:
```php
$client->call('GET /orgs/{org}/installations', [
        'org' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->orgs()->listAppInstallations(        org: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/orgs#list-app-installations-for-an-organization).


### interactions/get-restrictions-for-org

Get interaction restrictions for an organization

Using the `call` method:
```php
$client->call('GET /orgs/{org}/interaction-limits', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->interactions()->getRestrictionsForOrg(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/interactions#get-interaction-restrictions-for-an-organization).


### interactions/set-restrictions-for-org

Set interaction restrictions for an organization

Using the `call` method:
```php
$client->call('PUT /orgs/{org}/interaction-limits', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->interactions()->setRestrictionsForOrg(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/interactions#set-interaction-restrictions-for-an-organization).


### interactions/remove-restrictions-for-org

Remove interaction restrictions for an organization

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/interaction-limits', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->interactions()->removeRestrictionsForOrg(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/interactions#remove-interaction-restrictions-for-an-organization).


### orgs/list-pending-invitations

List pending organization invitations

Using the `call` method:
```php
$client->call('GET /orgs/{org}/invitations', [
        'org' => 'generated',
        'per_page' => 8,
        'page' => 4,
        'role' => 'generated',
        'invitation_source' => 'generated',
]);
```

Operations method:
```php
$client->operations()->orgs()->listPendingInvitations(        org: 'generated',
        per_page: 8,
        page: 4,
        role: 'generated',
        invitation_source: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/orgs#list-pending-organization-invitations).


### orgs/create-invitation

Create an organization invitation

Using the `call` method:
```php
$client->call('POST /orgs/{org}/invitations', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->orgs()->createInvitation(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/orgs#create-an-organization-invitation).


### orgs/cancel-invitation

Cancel an organization invitation

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/invitations/{invitation_id}', [
        'org' => 'generated',
        'invitation_id' => 13,
]);
```

Operations method:
```php
$client->operations()->orgs()->cancelInvitation(        org: 'generated',
        invitation_id: 13,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/orgs#cancel-an-organization-invitation).


### orgs/list-invitation-teams

List organization invitation teams

Using the `call` method:
```php
$client->call('GET /orgs/{org}/invitations/{invitation_id}/teams', [
        'org' => 'generated',
        'invitation_id' => 13,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->orgs()->listInvitationTeams(        org: 'generated',
        invitation_id: 13,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/orgs#list-organization-invitation-teams).


### issues/list-for-org

List organization issues assigned to the authenticated user

Using the `call` method:
```php
$client->call('GET /orgs/{org}/issues', [
        'org' => 'generated',
        'labels' => 'generated',
        'since' => '1970-01-01T00:00:00+00:00',
        'filter' => 'generated',
        'state' => 'generated',
        'sort' => 'generated',
        'direction' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->issues()->listForOrg(        org: 'generated',
        labels: 'generated',
        since: '1970-01-01T00:00:00+00:00',
        filter: 'generated',
        state: 'generated',
        sort: 'generated',
        direction: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/issues#list-organization-issues-assigned-to-the-authenticated-user).


### orgs/list-members

List organization members

Using the `call` method:
```php
$client->call('GET /orgs/{org}/members', [
        'org' => 'generated',
        'filter' => 'generated',
        'role' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->orgs()->listMembers(        org: 'generated',
        filter: 'generated',
        role: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/orgs#list-organization-members).


### orgs/check-membership-for-user

Check organization membership for a user

Using the `call` method:
```php
$client->call('GET /orgs/{org}/members/{username}', [
        'org' => 'generated',
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->orgs()->checkMembershipForUser(        org: 'generated',
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/orgs#check-organization-membership-for-a-user).


### orgs/remove-member

Remove an organization member

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/members/{username}', [
        'org' => 'generated',
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->orgs()->removeMember(        org: 'generated',
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/orgs#remove-an-organization-member).


### codespaces/get-codespaces-for-user-in-org

List codespaces for a user in organization

Using the `call` method:
```php
$client->call('GET /orgs/{org}/members/{username}/codespaces', [
        'org' => 'generated',
        'username' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->codespaces()->getCodespacesForUserInOrg(        org: 'generated',
        username: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/codespaces#get-codespaces-for-user-in-org).


### codespaces/delete-from-organization

Delete a codespace from the organization

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/members/{username}/codespaces/{codespace_name}', [
        'org' => 'generated',
        'username' => 'generated',
        'codespace_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->codespaces()->deleteFromOrganization(        org: 'generated',
        username: 'generated',
        codespace_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/codespaces).


### codespaces/stop-in-organization

Stop a codespace for an organization user

Using the `call` method:
```php
$client->call('POST /orgs/{org}/members/{username}/codespaces/{codespace_name}/stop', [
        'org' => 'generated',
        'username' => 'generated',
        'codespace_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->codespaces()->stopInOrganization(        org: 'generated',
        username: 'generated',
        codespace_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/codespaces).


### orgs/get-membership-for-user

Get organization membership for a user

Using the `call` method:
```php
$client->call('GET /orgs/{org}/memberships/{username}', [
        'org' => 'generated',
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->orgs()->getMembershipForUser(        org: 'generated',
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/orgs#get-organization-membership-for-a-user).


### orgs/set-membership-for-user

Set organization membership for a user

Using the `call` method:
```php
$client->call('PUT /orgs/{org}/memberships/{username}', [
        'org' => 'generated',
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->orgs()->setMembershipForUser(        org: 'generated',
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/orgs#set-organization-membership-for-a-user).


### orgs/remove-membership-for-user

Remove organization membership for a user

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/memberships/{username}', [
        'org' => 'generated',
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->orgs()->removeMembershipForUser(        org: 'generated',
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/orgs#remove-organization-membership-for-a-user).


### migrations/list-for-org

List organization migrations

Using the `call` method:
```php
$client->call('GET /orgs/{org}/migrations', [
        'org' => 'generated',
        'exclude' => ,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->migrations()->listForOrg(        org: 'generated',
        exclude: ,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/migrations/orgs#list-organization-migrations).


### migrations/start-for-org

Start an organization migration

Using the `call` method:
```php
$client->call('POST /orgs/{org}/migrations', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->migrations()->startForOrg(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/migrations/orgs#start-an-organization-migration).


### migrations/get-status-for-org

Get an organization migration status

Using the `call` method:
```php
$client->call('GET /orgs/{org}/migrations/{migration_id}', [
        'org' => 'generated',
        'migration_id' => 12,
        'exclude' => ,
]);
```

Operations method:
```php
$client->operations()->migrations()->getStatusForOrg(        org: 'generated',
        migration_id: 12,
        exclude: ,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/migrations/orgs#get-an-organization-migration-status).


### migrations/download-archive-for-org

Download an organization migration archive

Using the `call` method:
```php
$client->call('GET /orgs/{org}/migrations/{migration_id}/archive', [
        'org' => 'generated',
        'migration_id' => 12,
]);
```

Operations method:
```php
$client->operations()->migrations()->downloadArchiveForOrg(        org: 'generated',
        migration_id: 12,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/migrations/orgs#download-an-organization-migration-archive).


### migrations/download-archive-for-org

Download an organization migration archive

Using the `call` method:
```php
$client->call('STREAM /orgs/{org}/migrations/{migration_id}/archive', [
        'org' => 'generated',
        'migration_id' => 12,
]);
```

Operations method:
```php
$client->operations()->migrations()->downloadArchiveForOrgStreaming(        org: 'generated',
        migration_id: 12,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/migrations/orgs#download-an-organization-migration-archive).


### migrations/delete-archive-for-org

Delete an organization migration archive

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/migrations/{migration_id}/archive', [
        'org' => 'generated',
        'migration_id' => 12,
]);
```

Operations method:
```php
$client->operations()->migrations()->deleteArchiveForOrg(        org: 'generated',
        migration_id: 12,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/migrations/orgs#delete-an-organization-migration-archive).


### migrations/unlock-repo-for-org

Unlock an organization repository

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/migrations/{migration_id}/repos/{repo_name}/lock', [
        'org' => 'generated',
        'migration_id' => 12,
        'repo_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->migrations()->unlockRepoForOrg(        org: 'generated',
        migration_id: 12,
        repo_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/migrations/orgs#unlock-an-organization-repository).


### migrations/list-repos-for-org

List repositories in an organization migration

Using the `call` method:
```php
$client->call('GET /orgs/{org}/migrations/{migration_id}/repositories', [
        'org' => 'generated',
        'migration_id' => 12,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->migrations()->listReposForOrg(        org: 'generated',
        migration_id: 12,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/migrations/orgs#list-repositories-in-an-organization-migration).


### orgs/list-outside-collaborators

List outside collaborators for an organization

Using the `call` method:
```php
$client->call('GET /orgs/{org}/outside_collaborators', [
        'org' => 'generated',
        'filter' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->orgs()->listOutsideCollaborators(        org: 'generated',
        filter: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/orgs#list-outside-collaborators-for-an-organization).


### orgs/convert-member-to-outside-collaborator

Convert an organization member to outside collaborator

Using the `call` method:
```php
$client->call('PUT /orgs/{org}/outside_collaborators/{username}', [
        'org' => 'generated',
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->orgs()->convertMemberToOutsideCollaborator(        org: 'generated',
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/orgs#convert-an-organization-member-to-outside-collaborator).


### orgs/remove-outside-collaborator

Remove outside collaborator from an organization

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/outside_collaborators/{username}', [
        'org' => 'generated',
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->orgs()->removeOutsideCollaborator(        org: 'generated',
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/orgs#remove-outside-collaborator-from-an-organization).


### packages/list-packages-for-organization

List packages for an organization

Using the `call` method:
```php
$client->call('GET /orgs/{org}/packages', [
        'package_type' => 'generated',
        'org' => 'generated',
        'visibility' => 'generated',
        'page' => 4,
        'per_page' => 8,
]);
```

Operations method:
```php
$client->operations()->packages()->listPackagesForOrganization(        package_type: 'generated',
        org: 'generated',
        visibility: 'generated',
        page: 4,
        per_page: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/packages#list-packages-for-an-organization).


### packages/get-package-for-organization

Get a package for an organization

Using the `call` method:
```php
$client->call('GET /orgs/{org}/packages/{package_type}/{package_name}', [
        'package_type' => 'generated',
        'package_name' => 'generated',
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->packages()->getPackageForOrganization(        package_type: 'generated',
        package_name: 'generated',
        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/packages#get-a-package-for-an-organization).


### packages/delete-package-for-org

Delete a package for an organization

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/packages/{package_type}/{package_name}', [
        'package_type' => 'generated',
        'package_name' => 'generated',
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->packages()->deletePackageForOrg(        package_type: 'generated',
        package_name: 'generated',
        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/packages#delete-a-package-for-an-organization).


### packages/restore-package-for-org

Restore a package for an organization

Using the `call` method:
```php
$client->call('POST /orgs/{org}/packages/{package_type}/{package_name}/restore', [
        'package_type' => 'generated',
        'package_name' => 'generated',
        'org' => 'generated',
        'token' => 'generated',
]);
```

Operations method:
```php
$client->operations()->packages()->restorePackageForOrg(        package_type: 'generated',
        package_name: 'generated',
        org: 'generated',
        token: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/packages#restore-a-package-for-an-organization).


### packages/get-all-package-versions-for-package-owned-by-org

List package versions for a package owned by an organization

Using the `call` method:
```php
$client->call('GET /orgs/{org}/packages/{package_type}/{package_name}/versions', [
        'package_type' => 'generated',
        'package_name' => 'generated',
        'org' => 'generated',
        'page' => 4,
        'per_page' => 8,
        'state' => 'generated',
]);
```

Operations method:
```php
$client->operations()->packages()->getAllPackageVersionsForPackageOwnedByOrg(        package_type: 'generated',
        package_name: 'generated',
        org: 'generated',
        page: 4,
        per_page: 8,
        state: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/packages#get-all-package-versions-for-a-package-owned-by-an-organization).


### packages/get-package-version-for-organization

Get a package version for an organization

Using the `call` method:
```php
$client->call('GET /orgs/{org}/packages/{package_type}/{package_name}/versions/{package_version_id}', [
        'package_type' => 'generated',
        'package_name' => 'generated',
        'org' => 'generated',
        'package_version_id' => 18,
]);
```

Operations method:
```php
$client->operations()->packages()->getPackageVersionForOrganization(        package_type: 'generated',
        package_name: 'generated',
        org: 'generated',
        package_version_id: 18,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/packages#get-a-package-version-for-an-organization).


### packages/delete-package-version-for-org

Delete package version for an organization

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/packages/{package_type}/{package_name}/versions/{package_version_id}', [
        'package_type' => 'generated',
        'package_name' => 'generated',
        'org' => 'generated',
        'package_version_id' => 18,
]);
```

Operations method:
```php
$client->operations()->packages()->deletePackageVersionForOrg(        package_type: 'generated',
        package_name: 'generated',
        org: 'generated',
        package_version_id: 18,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/packages#delete-a-package-version-for-an-organization).


### packages/restore-package-version-for-org

Restore package version for an organization

Using the `call` method:
```php
$client->call('POST /orgs/{org}/packages/{package_type}/{package_name}/versions/{package_version_id}/restore', [
        'package_type' => 'generated',
        'package_name' => 'generated',
        'org' => 'generated',
        'package_version_id' => 18,
]);
```

Operations method:
```php
$client->operations()->packages()->restorePackageVersionForOrg(        package_type: 'generated',
        package_name: 'generated',
        org: 'generated',
        package_version_id: 18,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/packages#restore-a-package-version-for-an-organization).


### projects/list-for-org

List organization projects

Using the `call` method:
```php
$client->call('GET /orgs/{org}/projects', [
        'org' => 'generated',
        'state' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->projects()->listForOrg(        org: 'generated',
        state: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/projects#list-organization-projects).


### projects/create-for-org

Create an organization project

Using the `call` method:
```php
$client->call('POST /orgs/{org}/projects', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->projects()->createForOrg(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/projects#create-an-organization-project).


### orgs/list-public-members

List public organization members

Using the `call` method:
```php
$client->call('GET /orgs/{org}/public_members', [
        'org' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->orgs()->listPublicMembers(        org: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/orgs#list-public-organization-members).


### orgs/check-public-membership-for-user

Check public organization membership for a user

Using the `call` method:
```php
$client->call('GET /orgs/{org}/public_members/{username}', [
        'org' => 'generated',
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->orgs()->checkPublicMembershipForUser(        org: 'generated',
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/orgs#check-public-organization-membership-for-a-user).


### orgs/set-public-membership-for-authenticated-user

Set public organization membership for the authenticated user

Using the `call` method:
```php
$client->call('PUT /orgs/{org}/public_members/{username}', [
        'org' => 'generated',
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->orgs()->setPublicMembershipForAuthenticatedUser(        org: 'generated',
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/orgs#set-public-organization-membership-for-the-authenticated-user).


### orgs/remove-public-membership-for-authenticated-user

Remove public organization membership for the authenticated user

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/public_members/{username}', [
        'org' => 'generated',
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->orgs()->removePublicMembershipForAuthenticatedUser(        org: 'generated',
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/orgs#remove-public-organization-membership-for-the-authenticated-user).


### repos/list-for-org

List organization repositories

Using the `call` method:
```php
$client->call('GET /orgs/{org}/repos', [
        'org' => 'generated',
        'direction' => 'generated',
        'type' => 'generated',
        'sort' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listForOrg(        org: 'generated',
        direction: 'generated',
        type: 'generated',
        sort: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#list-organization-repositories).


### repos/create-in-org

Create an organization repository

Using the `call` method:
```php
$client->call('POST /orgs/{org}/repos', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->createInOrg(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#create-an-organization-repository).


### repos/get-org-rulesets

Get all organization repository rulesets

Using the `call` method:
```php
$client->call('GET /orgs/{org}/rulesets', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getOrgRulesets(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/repos/rules#get-organization-rulesets).


### repos/create-org-ruleset

Create an organization repository ruleset

Using the `call` method:
```php
$client->call('POST /orgs/{org}/rulesets', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->createOrgRuleset(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/repos/rules#create-organization-repository-ruleset).


### repos/get-org-ruleset

Get an organization repository ruleset

Using the `call` method:
```php
$client->call('GET /orgs/{org}/rulesets/{ruleset_id}', [
        'org' => 'generated',
        'ruleset_id' => 10,
]);
```

Operations method:
```php
$client->operations()->repos()->getOrgRuleset(        org: 'generated',
        ruleset_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/repos/rules#get-organization-ruleset).


### repos/update-org-ruleset

Update an organization repository ruleset

Using the `call` method:
```php
$client->call('PUT /orgs/{org}/rulesets/{ruleset_id}', [
        'org' => 'generated',
        'ruleset_id' => 10,
]);
```

Operations method:
```php
$client->operations()->repos()->updateOrgRuleset(        org: 'generated',
        ruleset_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/repos/rules#update-organization-ruleset).


### repos/delete-org-ruleset

Delete an organization repository ruleset

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/rulesets/{ruleset_id}', [
        'org' => 'generated',
        'ruleset_id' => 10,
]);
```

Operations method:
```php
$client->operations()->repos()->deleteOrgRuleset(        org: 'generated',
        ruleset_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/repos/rules#delete-organization-ruleset).


### secret-scanning/list-alerts-for-org

List secret scanning alerts for an organization

Using the `call` method:
```php
$client->call('GET /orgs/{org}/secret-scanning/alerts', [
        'org' => 'generated',
        'state' => 'generated',
        'secret_type' => 'generated',
        'resolution' => 'generated',
        'before' => 'generated',
        'after' => 'generated',
        'sort' => 'generated',
        'direction' => 'generated',
        'page' => 4,
        'per_page' => 8,
]);
```

Operations method:
```php
$client->operations()->secretScanning()->listAlertsForOrg(        org: 'generated',
        state: 'generated',
        secret_type: 'generated',
        resolution: 'generated',
        before: 'generated',
        after: 'generated',
        sort: 'generated',
        direction: 'generated',
        page: 4,
        per_page: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/secret-scanning#list-secret-scanning-alerts-for-an-organization).


### orgs/list-security-manager-teams

List security manager teams

Using the `call` method:
```php
$client->call('GET /orgs/{org}/security-managers', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->orgs()->listSecurityManagerTeams(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/orgs#list-security-manager-teams).


### orgs/add-security-manager-team

Add a security manager team

Using the `call` method:
```php
$client->call('PUT /orgs/{org}/security-managers/teams/{team_slug}', [
        'org' => 'generated',
        'team_slug' => 'generated',
]);
```

Operations method:
```php
$client->operations()->orgs()->addSecurityManagerTeam(        org: 'generated',
        team_slug: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/orgs#add-a-security-manager-team).


### orgs/remove-security-manager-team

Remove a security manager team

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/security-managers/teams/{team_slug}', [
        'org' => 'generated',
        'team_slug' => 'generated',
]);
```

Operations method:
```php
$client->operations()->orgs()->removeSecurityManagerTeam(        org: 'generated',
        team_slug: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/orgs#remove-a-security-manager-team).


### billing/get-github-actions-billing-org

Get GitHub Actions billing for an organization

Using the `call` method:
```php
$client->call('GET /orgs/{org}/settings/billing/actions', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->billing()->getGithubActionsBillingOrg(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/billing#get-github-actions-billing-for-an-organization).


### billing/get-github-packages-billing-org

Get GitHub Packages billing for an organization

Using the `call` method:
```php
$client->call('GET /orgs/{org}/settings/billing/packages', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->billing()->getGithubPackagesBillingOrg(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/billing#get-github-packages-billing-for-an-organization).


### billing/get-shared-storage-billing-org

Get shared storage billing for an organization

Using the `call` method:
```php
$client->call('GET /orgs/{org}/settings/billing/shared-storage', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->billing()->getSharedStorageBillingOrg(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/billing#get-shared-storage-billing-for-an-organization).


### teams/list

List teams

Using the `call` method:
```php
$client->call('GET /orgs/{org}/teams', [
        'org' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->teams()->list(        org: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams#list-teams).


### teams/create

Create a team

Using the `call` method:
```php
$client->call('POST /orgs/{org}/teams', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->teams()->create(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams#create-a-team).


### teams/get-by-name

Get a team by name

Using the `call` method:
```php
$client->call('GET /orgs/{org}/teams/{team_slug}', [
        'org' => 'generated',
        'team_slug' => 'generated',
]);
```

Operations method:
```php
$client->operations()->teams()->getByName(        org: 'generated',
        team_slug: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams#get-a-team-by-name).


### teams/delete-in-org

Delete a team

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/teams/{team_slug}', [
        'org' => 'generated',
        'team_slug' => 'generated',
]);
```

Operations method:
```php
$client->operations()->teams()->deleteInOrg(        org: 'generated',
        team_slug: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams#delete-a-team).


### teams/update-in-org

Update a team

Using the `call` method:
```php
$client->call('PATCH /orgs/{org}/teams/{team_slug}', [
        'org' => 'generated',
        'team_slug' => 'generated',
]);
```

Operations method:
```php
$client->operations()->teams()->updateInOrg(        org: 'generated',
        team_slug: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams#update-a-team).


### teams/list-discussions-in-org

List discussions

Using the `call` method:
```php
$client->call('GET /orgs/{org}/teams/{team_slug}/discussions', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'pinned' => 'generated',
        'direction' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->teams()->listDiscussionsInOrg(        org: 'generated',
        team_slug: 'generated',
        pinned: 'generated',
        direction: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams#list-discussions).


### teams/create-discussion-in-org

Create a discussion

Using the `call` method:
```php
$client->call('POST /orgs/{org}/teams/{team_slug}/discussions', [
        'org' => 'generated',
        'team_slug' => 'generated',
]);
```

Operations method:
```php
$client->operations()->teams()->createDiscussionInOrg(        org: 'generated',
        team_slug: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams#create-a-discussion).


### teams/get-discussion-in-org

Get a discussion

Using the `call` method:
```php
$client->call('GET /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'discussion_number' => 17,
]);
```

Operations method:
```php
$client->operations()->teams()->getDiscussionInOrg(        org: 'generated',
        team_slug: 'generated',
        discussion_number: 17,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams#get-a-discussion).


### teams/delete-discussion-in-org

Delete a discussion

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'discussion_number' => 17,
]);
```

Operations method:
```php
$client->operations()->teams()->deleteDiscussionInOrg(        org: 'generated',
        team_slug: 'generated',
        discussion_number: 17,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams#delete-a-discussion).


### teams/update-discussion-in-org

Update a discussion

Using the `call` method:
```php
$client->call('PATCH /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'discussion_number' => 17,
]);
```

Operations method:
```php
$client->operations()->teams()->updateDiscussionInOrg(        org: 'generated',
        team_slug: 'generated',
        discussion_number: 17,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams#update-a-discussion).


### teams/list-discussion-comments-in-org

List discussion comments

Using the `call` method:
```php
$client->call('GET /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'discussion_number' => 17,
        'direction' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->teams()->listDiscussionCommentsInOrg(        org: 'generated',
        team_slug: 'generated',
        discussion_number: 17,
        direction: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams#list-discussion-comments).


### teams/create-discussion-comment-in-org

Create a discussion comment

Using the `call` method:
```php
$client->call('POST /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'discussion_number' => 17,
]);
```

Operations method:
```php
$client->operations()->teams()->createDiscussionCommentInOrg(        org: 'generated',
        team_slug: 'generated',
        discussion_number: 17,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams#create-a-discussion-comment).


### teams/get-discussion-comment-in-org

Get a discussion comment

Using the `call` method:
```php
$client->call('GET /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'discussion_number' => 17,
        'comment_number' => 14,
]);
```

Operations method:
```php
$client->operations()->teams()->getDiscussionCommentInOrg(        org: 'generated',
        team_slug: 'generated',
        discussion_number: 17,
        comment_number: 14,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams#get-a-discussion-comment).


### teams/delete-discussion-comment-in-org

Delete a discussion comment

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'discussion_number' => 17,
        'comment_number' => 14,
]);
```

Operations method:
```php
$client->operations()->teams()->deleteDiscussionCommentInOrg(        org: 'generated',
        team_slug: 'generated',
        discussion_number: 17,
        comment_number: 14,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams#delete-a-discussion-comment).


### teams/update-discussion-comment-in-org

Update a discussion comment

Using the `call` method:
```php
$client->call('PATCH /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'discussion_number' => 17,
        'comment_number' => 14,
]);
```

Operations method:
```php
$client->operations()->teams()->updateDiscussionCommentInOrg(        org: 'generated',
        team_slug: 'generated',
        discussion_number: 17,
        comment_number: 14,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams#update-a-discussion-comment).


### reactions/list-for-team-discussion-comment-in-org

List reactions for a team discussion comment

Using the `call` method:
```php
$client->call('GET /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}/reactions', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'discussion_number' => 17,
        'comment_number' => 14,
        'content' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->reactions()->listForTeamDiscussionCommentInOrg(        org: 'generated',
        team_slug: 'generated',
        discussion_number: 17,
        comment_number: 14,
        content: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/reactions#list-reactions-for-a-team-discussion-comment).


### reactions/create-for-team-discussion-comment-in-org

Create reaction for a team discussion comment

Using the `call` method:
```php
$client->call('POST /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}/reactions', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'discussion_number' => 17,
        'comment_number' => 14,
]);
```

Operations method:
```php
$client->operations()->reactions()->createForTeamDiscussionCommentInOrg(        org: 'generated',
        team_slug: 'generated',
        discussion_number: 17,
        comment_number: 14,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/reactions#create-reaction-for-a-team-discussion-comment).


### reactions/delete-for-team-discussion-comment

Delete team discussion comment reaction

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}/reactions/{reaction_id}', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'discussion_number' => 17,
        'comment_number' => 14,
        'reaction_id' => 11,
]);
```

Operations method:
```php
$client->operations()->reactions()->deleteForTeamDiscussionComment(        org: 'generated',
        team_slug: 'generated',
        discussion_number: 17,
        comment_number: 14,
        reaction_id: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/reactions#delete-team-discussion-comment-reaction).


### reactions/list-for-team-discussion-in-org

List reactions for a team discussion

Using the `call` method:
```php
$client->call('GET /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/reactions', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'discussion_number' => 17,
        'content' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->reactions()->listForTeamDiscussionInOrg(        org: 'generated',
        team_slug: 'generated',
        discussion_number: 17,
        content: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/reactions#list-reactions-for-a-team-discussion).


### reactions/create-for-team-discussion-in-org

Create reaction for a team discussion

Using the `call` method:
```php
$client->call('POST /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/reactions', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'discussion_number' => 17,
]);
```

Operations method:
```php
$client->operations()->reactions()->createForTeamDiscussionInOrg(        org: 'generated',
        team_slug: 'generated',
        discussion_number: 17,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/reactions#create-reaction-for-a-team-discussion).


### reactions/delete-for-team-discussion

Delete team discussion reaction

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/reactions/{reaction_id}', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'discussion_number' => 17,
        'reaction_id' => 11,
]);
```

Operations method:
```php
$client->operations()->reactions()->deleteForTeamDiscussion(        org: 'generated',
        team_slug: 'generated',
        discussion_number: 17,
        reaction_id: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/reactions#delete-team-discussion-reaction).


### teams/list-pending-invitations-in-org

List pending team invitations

Using the `call` method:
```php
$client->call('GET /orgs/{org}/teams/{team_slug}/invitations', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->teams()->listPendingInvitationsInOrg(        org: 'generated',
        team_slug: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams#list-pending-team-invitations).


### teams/list-members-in-org

List team members

Using the `call` method:
```php
$client->call('GET /orgs/{org}/teams/{team_slug}/members', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'role' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->teams()->listMembersInOrg(        org: 'generated',
        team_slug: 'generated',
        role: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams#list-team-members).


### teams/get-membership-for-user-in-org

Get team membership for a user

Using the `call` method:
```php
$client->call('GET /orgs/{org}/teams/{team_slug}/memberships/{username}', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->teams()->getMembershipForUserInOrg(        org: 'generated',
        team_slug: 'generated',
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams#get-team-membership-for-a-user).


### teams/add-or-update-membership-for-user-in-org

Add or update team membership for a user

Using the `call` method:
```php
$client->call('PUT /orgs/{org}/teams/{team_slug}/memberships/{username}', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->teams()->addOrUpdateMembershipForUserInOrg(        org: 'generated',
        team_slug: 'generated',
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams#add-or-update-team-membership-for-a-user).


### teams/remove-membership-for-user-in-org

Remove team membership for a user

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/teams/{team_slug}/memberships/{username}', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->teams()->removeMembershipForUserInOrg(        org: 'generated',
        team_slug: 'generated',
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams#remove-team-membership-for-a-user).


### teams/list-projects-in-org

List team projects

Using the `call` method:
```php
$client->call('GET /orgs/{org}/teams/{team_slug}/projects', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->teams()->listProjectsInOrg(        org: 'generated',
        team_slug: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams#list-team-projects).


### teams/check-permissions-for-project-in-org

Check team permissions for a project

Using the `call` method:
```php
$client->call('GET /orgs/{org}/teams/{team_slug}/projects/{project_id}', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'project_id' => 10,
]);
```

Operations method:
```php
$client->operations()->teams()->checkPermissionsForProjectInOrg(        org: 'generated',
        team_slug: 'generated',
        project_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams#check-team-permissions-for-a-project).


### teams/add-or-update-project-permissions-in-org

Add or update team project permissions

Using the `call` method:
```php
$client->call('PUT /orgs/{org}/teams/{team_slug}/projects/{project_id}', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'project_id' => 10,
]);
```

Operations method:
```php
$client->operations()->teams()->addOrUpdateProjectPermissionsInOrg(        org: 'generated',
        team_slug: 'generated',
        project_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams#add-or-update-team-project-permissions).


### teams/remove-project-in-org

Remove a project from a team

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/teams/{team_slug}/projects/{project_id}', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'project_id' => 10,
]);
```

Operations method:
```php
$client->operations()->teams()->removeProjectInOrg(        org: 'generated',
        team_slug: 'generated',
        project_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams#remove-a-project-from-a-team).


### teams/list-repos-in-org

List team repositories

Using the `call` method:
```php
$client->call('GET /orgs/{org}/teams/{team_slug}/repos', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->teams()->listReposInOrg(        org: 'generated',
        team_slug: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams#list-team-repositories).


### teams/check-permissions-for-repo-in-org

Check team permissions for a repository

Using the `call` method:
```php
$client->call('GET /orgs/{org}/teams/{team_slug}/repos/{owner}/{repo}', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->teams()->checkPermissionsForRepoInOrg(        org: 'generated',
        team_slug: 'generated',
        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams/#check-team-permissions-for-a-repository).


### teams/add-or-update-repo-permissions-in-org

Add or update team repository permissions

Using the `call` method:
```php
$client->call('PUT /orgs/{org}/teams/{team_slug}/repos/{owner}/{repo}', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->teams()->addOrUpdateRepoPermissionsInOrg(        org: 'generated',
        team_slug: 'generated',
        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams/#add-or-update-team-repository-permissions).


### teams/remove-repo-in-org

Remove a repository from a team

Using the `call` method:
```php
$client->call('DELETE /orgs/{org}/teams/{team_slug}/repos/{owner}/{repo}', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->teams()->removeRepoInOrg(        org: 'generated',
        team_slug: 'generated',
        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams/#remove-a-repository-from-a-team).


### teams/list-child-in-org

List child teams

Using the `call` method:
```php
$client->call('GET /orgs/{org}/teams/{team_slug}/teams', [
        'org' => 'generated',
        'team_slug' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->teams()->listChildInOrg(        org: 'generated',
        team_slug: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams#list-child-teams).


### orgs/enable-or-disable-security-product-on-all-org-repos

Enable or disable a security feature for an organization

Using the `call` method:
```php
$client->call('POST /orgs/{org}/{security_product}/{enablement}', [
        'org' => 'generated',
        'security_product' => 'generated',
        'enablement' => 'generated',
]);
```

Operations method:
```php
$client->operations()->orgs()->enableOrDisableSecurityProductOnAllOrgRepos(        org: 'generated',
        security_product: 'generated',
        enablement: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/orgs#enable-or-disable-security-product-on-all-org-repos).


### projects/get-card

Get a project card

Using the `call` method:
```php
$client->call('GET /projects/columns/cards/{card_id}', [
        'card_id' => 7,
]);
```

Operations method:
```php
$client->operations()->projects()->getCard(        card_id: 7,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/projects#get-a-project-card).


### projects/delete-card

Delete a project card

Using the `call` method:
```php
$client->call('DELETE /projects/columns/cards/{card_id}', [
        'card_id' => 7,
]);
```

Operations method:
```php
$client->operations()->projects()->deleteCard(        card_id: 7,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/projects#delete-a-project-card).


### projects/update-card

Update an existing project card

Using the `call` method:
```php
$client->call('PATCH /projects/columns/cards/{card_id}', [
        'card_id' => 7,
]);
```

Operations method:
```php
$client->operations()->projects()->updateCard(        card_id: 7,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/projects#update-a-project-card).


### projects/move-card

Move a project card

Using the `call` method:
```php
$client->call('POST /projects/columns/cards/{card_id}/moves', [
        'card_id' => 7,
]);
```

Operations method:
```php
$client->operations()->projects()->moveCard(        card_id: 7,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/projects#move-a-project-card).


### projects/get-column

Get a project column

Using the `call` method:
```php
$client->call('GET /projects/columns/{column_id}', [
        'column_id' => 9,
]);
```

Operations method:
```php
$client->operations()->projects()->getColumn(        column_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/projects#get-a-project-column).


### projects/delete-column

Delete a project column

Using the `call` method:
```php
$client->call('DELETE /projects/columns/{column_id}', [
        'column_id' => 9,
]);
```

Operations method:
```php
$client->operations()->projects()->deleteColumn(        column_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/projects#delete-a-project-column).


### projects/update-column

Update an existing project column

Using the `call` method:
```php
$client->call('PATCH /projects/columns/{column_id}', [
        'column_id' => 9,
]);
```

Operations method:
```php
$client->operations()->projects()->updateColumn(        column_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/projects#update-a-project-column).


### projects/list-cards

List project cards

Using the `call` method:
```php
$client->call('GET /projects/columns/{column_id}/cards', [
        'column_id' => 9,
        'archived_state' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->projects()->listCards(        column_id: 9,
        archived_state: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/projects#list-project-cards).


### projects/create-card

Create a project card

Using the `call` method:
```php
$client->call('POST /projects/columns/{column_id}/cards', [
        'column_id' => 9,
]);
```

Operations method:
```php
$client->operations()->projects()->createCard(        column_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/projects#create-a-project-card).


### projects/move-column

Move a project column

Using the `call` method:
```php
$client->call('POST /projects/columns/{column_id}/moves', [
        'column_id' => 9,
]);
```

Operations method:
```php
$client->operations()->projects()->moveColumn(        column_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/projects#move-a-project-column).


### projects/get

Get a project

Using the `call` method:
```php
$client->call('GET /projects/{project_id}', [
        'project_id' => 10,
]);
```

Operations method:
```php
$client->operations()->projects()->get(        project_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/projects#get-a-project).


### projects/delete

Delete a project

Using the `call` method:
```php
$client->call('DELETE /projects/{project_id}', [
        'project_id' => 10,
]);
```

Operations method:
```php
$client->operations()->projects()->delete(        project_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/projects#delete-a-project).


### projects/update

Update a project

Using the `call` method:
```php
$client->call('PATCH /projects/{project_id}', [
        'project_id' => 10,
]);
```

Operations method:
```php
$client->operations()->projects()->update(        project_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/projects#update-a-project).


### projects/list-collaborators

List project collaborators

Using the `call` method:
```php
$client->call('GET /projects/{project_id}/collaborators', [
        'project_id' => 10,
        'affiliation' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->projects()->listCollaborators(        project_id: 10,
        affiliation: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/projects#list-project-collaborators).


### projects/add-collaborator

Add project collaborator

Using the `call` method:
```php
$client->call('PUT /projects/{project_id}/collaborators/{username}', [
        'project_id' => 10,
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->projects()->addCollaborator(        project_id: 10,
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/projects#add-project-collaborator).


### projects/remove-collaborator

Remove user as a collaborator

Using the `call` method:
```php
$client->call('DELETE /projects/{project_id}/collaborators/{username}', [
        'project_id' => 10,
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->projects()->removeCollaborator(        project_id: 10,
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/projects#remove-project-collaborator).


### projects/get-permission-for-user

Get project permission for a user

Using the `call` method:
```php
$client->call('GET /projects/{project_id}/collaborators/{username}/permission', [
        'project_id' => 10,
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->projects()->getPermissionForUser(        project_id: 10,
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/projects#get-project-permission-for-a-user).


### projects/list-columns

List project columns

Using the `call` method:
```php
$client->call('GET /projects/{project_id}/columns', [
        'project_id' => 10,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->projects()->listColumns(        project_id: 10,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/projects#list-project-columns).


### projects/create-column

Create a project column

Using the `call` method:
```php
$client->call('POST /projects/{project_id}/columns', [
        'project_id' => 10,
]);
```

Operations method:
```php
$client->operations()->projects()->createColumn(        project_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/projects#create-a-project-column).


### rate-limit/get

Get rate limit status for the authenticated user

Using the `call` method:
```php
$client->call('GET /rate_limit');
```

Operations method:
```php
$client->operations()->rateLimit()->get();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/rate-limit#get-rate-limit-status-for-the-authenticated-user).


### actions/list-repo-required-workflows

List repository required workflows

Using the `call` method:
```php
$client->call('GET /repos/{org}/{repo}/actions/required_workflows', [
        'org' => 'generated',
        'repo' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->actions()->listRepoRequiredWorkflows(        org: 'generated',
        repo: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#list-repository-required-workflows).


### actions/get-repo-required-workflow

Get a required workflow entity for a repository

Using the `call` method:
```php
$client->call('GET /repos/{org}/{repo}/actions/required_workflows/{required_workflow_id_for_repo}', [
        'org' => 'generated',
        'repo' => 'generated',
        'required_workflow_id_for_repo' => 29,
]);
```

Operations method:
```php
$client->operations()->actions()->getRepoRequiredWorkflow(        org: 'generated',
        repo: 'generated',
        required_workflow_id_for_repo: 29,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#get-repository-required-workflow).


### actions/get-repo-required-workflow-usage

Get required workflow usage

Using the `call` method:
```php
$client->call('GET /repos/{org}/{repo}/actions/required_workflows/{required_workflow_id_for_repo}/timing', [
        'org' => 'generated',
        'repo' => 'generated',
        'required_workflow_id_for_repo' => 29,
]);
```

Operations method:
```php
$client->operations()->actions()->getRepoRequiredWorkflowUsage(        org: 'generated',
        repo: 'generated',
        required_workflow_id_for_repo: 29,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#get-repository-required-workflow-usage).


### repos/get

Get a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->get(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#get-a-repository).


### repos/delete

Delete a repository

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->delete(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#delete-a-repository).


### repos/update

Update a repository

Using the `call` method:
```php
$client->call('PATCH /repos/{owner}/{repo}', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->update(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/repos/repos#update-a-repository).


### actions/list-artifacts-for-repo

List artifacts for a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/artifacts', [
        'owner' => 'generated',
        'repo' => 'generated',
        'name' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->actions()->listArtifactsForRepo(        owner: 'generated',
        repo: 'generated',
        name: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#list-artifacts-for-a-repository).


### actions/get-artifact

Get an artifact

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/artifacts/{artifact_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'artifact_id' => 11,
]);
```

Operations method:
```php
$client->operations()->actions()->getArtifact(        owner: 'generated',
        repo: 'generated',
        artifact_id: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#get-an-artifact).


### actions/delete-artifact

Delete an artifact

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/actions/artifacts/{artifact_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'artifact_id' => 11,
]);
```

Operations method:
```php
$client->operations()->actions()->deleteArtifact(        owner: 'generated',
        repo: 'generated',
        artifact_id: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#delete-an-artifact).


### actions/download-artifact

Download an artifact

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/artifacts/{artifact_id}/{archive_format}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'artifact_id' => 11,
        'archive_format' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->downloadArtifact(        owner: 'generated',
        repo: 'generated',
        artifact_id: 11,
        archive_format: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#download-an-artifact).


### actions/download-artifact

Download an artifact

Using the `call` method:
```php
$client->call('STREAM /repos/{owner}/{repo}/actions/artifacts/{artifact_id}/{archive_format}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'artifact_id' => 11,
        'archive_format' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->downloadArtifactStreaming(        owner: 'generated',
        repo: 'generated',
        artifact_id: 11,
        archive_format: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#download-an-artifact).


### actions/get-actions-cache-usage

Get GitHub Actions cache usage for a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/cache/usage', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->getActionsCacheUsage(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#get-github-actions-cache-usage-for-a-repository).


### actions/get-actions-cache-list

List GitHub Actions caches for a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/caches', [
        'owner' => 'generated',
        'repo' => 'generated',
        'ref' => 'generated',
        'key' => 'generated',
        'per_page' => 8,
        'page' => 4,
        'sort' => 'generated',
        'direction' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->getActionsCacheList(        owner: 'generated',
        repo: 'generated',
        ref: 'generated',
        key: 'generated',
        per_page: 8,
        page: 4,
        sort: 'generated',
        direction: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/actions/cache#list-github-actions-caches-for-a-repository).


### actions/delete-actions-cache-by-key

Delete GitHub Actions caches for a repository (using a cache key)

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/actions/caches', [
        'owner' => 'generated',
        'repo' => 'generated',
        'key' => 'generated',
        'ref' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->deleteActionsCacheByKey(        owner: 'generated',
        repo: 'generated',
        key: 'generated',
        ref: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/actions/cache#delete-github-actions-caches-for-a-repository-using-a-cache-key).


### actions/delete-actions-cache-by-id

Delete a GitHub Actions cache for a repository (using a cache ID)

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/actions/caches/{cache_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'cache_id' => 8,
]);
```

Operations method:
```php
$client->operations()->actions()->deleteActionsCacheById(        owner: 'generated',
        repo: 'generated',
        cache_id: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/actions/cache#delete-a-github-actions-cache-for-a-repository-using-a-cache-id).


### actions/get-job-for-workflow-run

Get a job for a workflow run

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/jobs/{job_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'job_id' => 6,
]);
```

Operations method:
```php
$client->operations()->actions()->getJobForWorkflowRun(        owner: 'generated',
        repo: 'generated',
        job_id: 6,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#get-a-job-for-a-workflow-run).


### actions/download-job-logs-for-workflow-run

Download job logs for a workflow run

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/jobs/{job_id}/logs', [
        'owner' => 'generated',
        'repo' => 'generated',
        'job_id' => 6,
]);
```

Operations method:
```php
$client->operations()->actions()->downloadJobLogsForWorkflowRun(        owner: 'generated',
        repo: 'generated',
        job_id: 6,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#download-job-logs-for-a-workflow-run).


### actions/download-job-logs-for-workflow-run

Download job logs for a workflow run

Using the `call` method:
```php
$client->call('STREAM /repos/{owner}/{repo}/actions/jobs/{job_id}/logs', [
        'owner' => 'generated',
        'repo' => 'generated',
        'job_id' => 6,
]);
```

Operations method:
```php
$client->operations()->actions()->downloadJobLogsForWorkflowRunStreaming(        owner: 'generated',
        repo: 'generated',
        job_id: 6,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#download-job-logs-for-a-workflow-run).


### actions/re-run-job-for-workflow-run

Re-run a job from a workflow run

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/actions/jobs/{job_id}/rerun', [
        'owner' => 'generated',
        'repo' => 'generated',
        'job_id' => 6,
]);
```

Operations method:
```php
$client->operations()->actions()->reRunJobForWorkflowRun(        owner: 'generated',
        repo: 'generated',
        job_id: 6,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#re-run-job-for-workflow-run).


### actions/get-custom-oidc-sub-claim-for-repo

Get the customization template for an OIDC subject claim for a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/oidc/customization/sub', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->getCustomOidcSubClaimForRepo(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/actions/oidc#get-the-customization-template-for-an-oidc-subject-claim-for-a-repository).


### actions/set-custom-oidc-sub-claim-for-repo

Set the customization template for an OIDC subject claim for a repository

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/actions/oidc/customization/sub', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->setCustomOidcSubClaimForRepo(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/actions/oidc#set-the-customization-template-for-an-oidc-subject-claim-for-a-repository).


### actions/list-repo-organization-secrets

List repository organization secrets

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/organization-secrets', [
        'owner' => 'generated',
        'repo' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->actions()->listRepoOrganizationSecrets(        owner: 'generated',
        repo: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/actions/secrets#list-repository-organization-secrets).


### actions/list-repo-organization-variables

List repository organization variables

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/organization-variables', [
        'owner' => 'generated',
        'repo' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->actions()->listRepoOrganizationVariables(        owner: 'generated',
        repo: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/actions/variables#list-repository-organization-variables).


### actions/get-github-actions-permissions-repository

Get GitHub Actions permissions for a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/permissions', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->getGithubActionsPermissionsRepository(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#get-github-actions-permissions-for-a-repository).


### actions/set-github-actions-permissions-repository

Set GitHub Actions permissions for a repository

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/actions/permissions', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->setGithubActionsPermissionsRepository(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#set-github-actions-permissions-for-a-repository).


### actions/get-workflow-access-to-repository

Get the level of access for workflows outside of the repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/permissions/access', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->getWorkflowAccessToRepository(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#get-workflow-access-level-to-a-repository).


### actions/set-workflow-access-to-repository

Set the level of access for workflows outside of the repository

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/actions/permissions/access', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->setWorkflowAccessToRepository(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#set-workflow-access-to-a-repository).


### actions/get-allowed-actions-repository

Get allowed actions and reusable workflows for a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/permissions/selected-actions', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->getAllowedActionsRepository(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#get-allowed-actions-for-a-repository).


### actions/set-allowed-actions-repository

Set allowed actions and reusable workflows for a repository

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/actions/permissions/selected-actions', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->setAllowedActionsRepository(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#set-allowed-actions-for-a-repository).


### actions/get-github-actions-default-workflow-permissions-repository

Get default workflow permissions for a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/permissions/workflow', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->getGithubActionsDefaultWorkflowPermissionsRepository(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#get-default-workflow-permissions-for-a-repository).


### actions/set-github-actions-default-workflow-permissions-repository

Set default workflow permissions for a repository

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/actions/permissions/workflow', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->setGithubActionsDefaultWorkflowPermissionsRepository(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#set-default-workflow-permissions-for-a-repository).


### actions/list-required-workflow-runs

List workflow runs for a required workflow

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/required_workflows/{required_workflow_id_for_repo}/runs', [
        'owner' => 'generated',
        'repo' => 'generated',
        'required_workflow_id_for_repo' => 29,
        'actor' => 'generated',
        'branch' => 'generated',
        'event' => 'generated',
        'status' => 'generated',
        'created' => '1970-01-01T00:00:00+00:00',
        'check_suite_id' => 14,
        'head_sha' => 'generated',
        'per_page' => 8,
        'page' => 4,
        'exclude_pull_requests' => ,
]);
```

Operations method:
```php
$client->operations()->actions()->listRequiredWorkflowRuns(        owner: 'generated',
        repo: 'generated',
        required_workflow_id_for_repo: 29,
        actor: 'generated',
        branch: 'generated',
        event: 'generated',
        status: 'generated',
        created: '1970-01-01T00:00:00+00:00',
        check_suite_id: 14,
        head_sha: 'generated',
        per_page: 8,
        page: 4,
        exclude_pull_requests: ,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#list-required-workflow-runs).


### actions/list-self-hosted-runners-for-repo

List self-hosted runners for a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/runners', [
        'owner' => 'generated',
        'repo' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->actions()->listSelfHostedRunnersForRepo(        owner: 'generated',
        repo: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#list-self-hosted-runners-for-a-repository).


### actions/list-runner-applications-for-repo

List runner applications for a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/runners/downloads', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->listRunnerApplicationsForRepo(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#list-runner-applications-for-a-repository).


### actions/create-registration-token-for-repo

Create a registration token for a repository

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/actions/runners/registration-token', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->createRegistrationTokenForRepo(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#create-a-registration-token-for-a-repository).


### actions/create-remove-token-for-repo

Create a remove token for a repository

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/actions/runners/remove-token', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->createRemoveTokenForRepo(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#create-a-remove-token-for-a-repository).


### actions/get-self-hosted-runner-for-repo

Get a self-hosted runner for a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/runners/{runner_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'runner_id' => 9,
]);
```

Operations method:
```php
$client->operations()->actions()->getSelfHostedRunnerForRepo(        owner: 'generated',
        repo: 'generated',
        runner_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#get-a-self-hosted-runner-for-a-repository).


### actions/delete-self-hosted-runner-from-repo

Delete a self-hosted runner from a repository

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/actions/runners/{runner_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'runner_id' => 9,
]);
```

Operations method:
```php
$client->operations()->actions()->deleteSelfHostedRunnerFromRepo(        owner: 'generated',
        repo: 'generated',
        runner_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#delete-a-self-hosted-runner-from-a-repository).


### actions/list-labels-for-self-hosted-runner-for-repo

List labels for a self-hosted runner for a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/runners/{runner_id}/labels', [
        'owner' => 'generated',
        'repo' => 'generated',
        'runner_id' => 9,
]);
```

Operations method:
```php
$client->operations()->actions()->listLabelsForSelfHostedRunnerForRepo(        owner: 'generated',
        repo: 'generated',
        runner_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#list-labels-for-a-self-hosted-runner-for-a-repository).


### actions/set-custom-labels-for-self-hosted-runner-for-repo

Set custom labels for a self-hosted runner for a repository

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/actions/runners/{runner_id}/labels', [
        'owner' => 'generated',
        'repo' => 'generated',
        'runner_id' => 9,
]);
```

Operations method:
```php
$client->operations()->actions()->setCustomLabelsForSelfHostedRunnerForRepo(        owner: 'generated',
        repo: 'generated',
        runner_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#set-custom-labels-for-a-self-hosted-runner-for-a-repository).


### actions/add-custom-labels-to-self-hosted-runner-for-repo

Add custom labels to a self-hosted runner for a repository

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/actions/runners/{runner_id}/labels', [
        'owner' => 'generated',
        'repo' => 'generated',
        'runner_id' => 9,
]);
```

Operations method:
```php
$client->operations()->actions()->addCustomLabelsToSelfHostedRunnerForRepo(        owner: 'generated',
        repo: 'generated',
        runner_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#add-custom-labels-to-a-self-hosted-runner-for-a-repository).


### actions/remove-all-custom-labels-from-self-hosted-runner-for-repo

Remove all custom labels from a self-hosted runner for a repository

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/actions/runners/{runner_id}/labels', [
        'owner' => 'generated',
        'repo' => 'generated',
        'runner_id' => 9,
]);
```

Operations method:
```php
$client->operations()->actions()->removeAllCustomLabelsFromSelfHostedRunnerForRepo(        owner: 'generated',
        repo: 'generated',
        runner_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#remove-all-custom-labels-from-a-self-hosted-runner-for-a-repository).


### actions/remove-custom-label-from-self-hosted-runner-for-repo

Remove a custom label from a self-hosted runner for a repository

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/actions/runners/{runner_id}/labels/{name}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'runner_id' => 9,
        'name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->removeCustomLabelFromSelfHostedRunnerForRepo(        owner: 'generated',
        repo: 'generated',
        runner_id: 9,
        name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#remove-a-custom-label-from-a-self-hosted-runner-for-a-repository).


### actions/list-workflow-runs-for-repo

List workflow runs for a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/runs', [
        'owner' => 'generated',
        'repo' => 'generated',
        'actor' => 'generated',
        'branch' => 'generated',
        'event' => 'generated',
        'status' => 'generated',
        'created' => '1970-01-01T00:00:00+00:00',
        'check_suite_id' => 14,
        'head_sha' => 'generated',
        'per_page' => 8,
        'page' => 4,
        'exclude_pull_requests' => ,
]);
```

Operations method:
```php
$client->operations()->actions()->listWorkflowRunsForRepo(        owner: 'generated',
        repo: 'generated',
        actor: 'generated',
        branch: 'generated',
        event: 'generated',
        status: 'generated',
        created: '1970-01-01T00:00:00+00:00',
        check_suite_id: 14,
        head_sha: 'generated',
        per_page: 8,
        page: 4,
        exclude_pull_requests: ,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#list-workflow-runs-for-a-repository).


### actions/get-workflow-run

Get a workflow run

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/runs/{run_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'run_id' => 6,
        'exclude_pull_requests' => ,
]);
```

Operations method:
```php
$client->operations()->actions()->getWorkflowRun(        owner: 'generated',
        repo: 'generated',
        run_id: 6,
        exclude_pull_requests: ,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#get-a-workflow-run).


### actions/delete-workflow-run

Delete a workflow run

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/actions/runs/{run_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'run_id' => 6,
]);
```

Operations method:
```php
$client->operations()->actions()->deleteWorkflowRun(        owner: 'generated',
        repo: 'generated',
        run_id: 6,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#delete-a-workflow-run).


### actions/get-reviews-for-run

Get the review history for a workflow run

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/runs/{run_id}/approvals', [
        'owner' => 'generated',
        'repo' => 'generated',
        'run_id' => 6,
]);
```

Operations method:
```php
$client->operations()->actions()->getReviewsForRun(        owner: 'generated',
        repo: 'generated',
        run_id: 6,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#get-the-review-history-for-a-workflow-run).


### actions/approve-workflow-run

Approve a workflow run for a fork pull request

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/actions/runs/{run_id}/approve', [
        'owner' => 'generated',
        'repo' => 'generated',
        'run_id' => 6,
]);
```

Operations method:
```php
$client->operations()->actions()->approveWorkflowRun(        owner: 'generated',
        repo: 'generated',
        run_id: 6,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#approve-a-workflow-run-for-a-fork-pull-request).


### actions/list-workflow-run-artifacts

List workflow run artifacts

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/runs/{run_id}/artifacts', [
        'owner' => 'generated',
        'repo' => 'generated',
        'run_id' => 6,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->actions()->listWorkflowRunArtifacts(        owner: 'generated',
        repo: 'generated',
        run_id: 6,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#list-workflow-run-artifacts).


### actions/get-workflow-run-attempt

Get a workflow run attempt

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/runs/{run_id}/attempts/{attempt_number}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'run_id' => 6,
        'attempt_number' => 14,
        'exclude_pull_requests' => ,
]);
```

Operations method:
```php
$client->operations()->actions()->getWorkflowRunAttempt(        owner: 'generated',
        repo: 'generated',
        run_id: 6,
        attempt_number: 14,
        exclude_pull_requests: ,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#get-a-workflow-run-attempt).


### actions/list-jobs-for-workflow-run-attempt

List jobs for a workflow run attempt

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/runs/{run_id}/attempts/{attempt_number}/jobs', [
        'owner' => 'generated',
        'repo' => 'generated',
        'run_id' => 6,
        'attempt_number' => 14,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->actions()->listJobsForWorkflowRunAttempt(        owner: 'generated',
        repo: 'generated',
        run_id: 6,
        attempt_number: 14,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#list-jobs-for-a-workflow-run-attempt).


### actions/download-workflow-run-attempt-logs

Download workflow run attempt logs

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/runs/{run_id}/attempts/{attempt_number}/logs', [
        'owner' => 'generated',
        'repo' => 'generated',
        'run_id' => 6,
        'attempt_number' => 14,
]);
```

Operations method:
```php
$client->operations()->actions()->downloadWorkflowRunAttemptLogs(        owner: 'generated',
        repo: 'generated',
        run_id: 6,
        attempt_number: 14,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#download-workflow-run-attempt-logs).


### actions/download-workflow-run-attempt-logs

Download workflow run attempt logs

Using the `call` method:
```php
$client->call('STREAM /repos/{owner}/{repo}/actions/runs/{run_id}/attempts/{attempt_number}/logs', [
        'owner' => 'generated',
        'repo' => 'generated',
        'run_id' => 6,
        'attempt_number' => 14,
]);
```

Operations method:
```php
$client->operations()->actions()->downloadWorkflowRunAttemptLogsStreaming(        owner: 'generated',
        repo: 'generated',
        run_id: 6,
        attempt_number: 14,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#download-workflow-run-attempt-logs).


### actions/cancel-workflow-run

Cancel a workflow run

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/actions/runs/{run_id}/cancel', [
        'owner' => 'generated',
        'repo' => 'generated',
        'run_id' => 6,
]);
```

Operations method:
```php
$client->operations()->actions()->cancelWorkflowRun(        owner: 'generated',
        repo: 'generated',
        run_id: 6,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#cancel-a-workflow-run).


### actions/review-custom-gates-for-run

Review custom deployment protection rules for a workflow run

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/actions/runs/{run_id}/deployment_protection_rule', [
        'owner' => 'generated',
        'repo' => 'generated',
        'run_id' => 6,
]);
```

Operations method:
```php
$client->operations()->actions()->reviewCustomGatesForRun(        owner: 'generated',
        repo: 'generated',
        run_id: 6,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/actions/workflow-runs#review-custom-deployment-protection-rules-for-a-workflow-run).


### actions/list-jobs-for-workflow-run

List jobs for a workflow run

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/runs/{run_id}/jobs', [
        'owner' => 'generated',
        'repo' => 'generated',
        'run_id' => 6,
        'filter' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->actions()->listJobsForWorkflowRun(        owner: 'generated',
        repo: 'generated',
        run_id: 6,
        filter: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#list-jobs-for-a-workflow-run).


### actions/download-workflow-run-logs

Download workflow run logs

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/runs/{run_id}/logs', [
        'owner' => 'generated',
        'repo' => 'generated',
        'run_id' => 6,
]);
```

Operations method:
```php
$client->operations()->actions()->downloadWorkflowRunLogs(        owner: 'generated',
        repo: 'generated',
        run_id: 6,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#download-workflow-run-logs).


### actions/download-workflow-run-logs

Download workflow run logs

Using the `call` method:
```php
$client->call('STREAM /repos/{owner}/{repo}/actions/runs/{run_id}/logs', [
        'owner' => 'generated',
        'repo' => 'generated',
        'run_id' => 6,
]);
```

Operations method:
```php
$client->operations()->actions()->downloadWorkflowRunLogsStreaming(        owner: 'generated',
        repo: 'generated',
        run_id: 6,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#download-workflow-run-logs).


### actions/delete-workflow-run-logs

Delete workflow run logs

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/actions/runs/{run_id}/logs', [
        'owner' => 'generated',
        'repo' => 'generated',
        'run_id' => 6,
]);
```

Operations method:
```php
$client->operations()->actions()->deleteWorkflowRunLogs(        owner: 'generated',
        repo: 'generated',
        run_id: 6,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#delete-workflow-run-logs).


### actions/get-pending-deployments-for-run

Get pending deployments for a workflow run

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/runs/{run_id}/pending_deployments', [
        'owner' => 'generated',
        'repo' => 'generated',
        'run_id' => 6,
]);
```

Operations method:
```php
$client->operations()->actions()->getPendingDeploymentsForRun(        owner: 'generated',
        repo: 'generated',
        run_id: 6,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#get-pending-deployments-for-a-workflow-run).


### actions/review-pending-deployments-for-run

Review pending deployments for a workflow run

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/actions/runs/{run_id}/pending_deployments', [
        'owner' => 'generated',
        'repo' => 'generated',
        'run_id' => 6,
]);
```

Operations method:
```php
$client->operations()->actions()->reviewPendingDeploymentsForRun(        owner: 'generated',
        repo: 'generated',
        run_id: 6,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#review-pending-deployments-for-a-workflow-run).


### actions/re-run-workflow

Re-run a workflow

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/actions/runs/{run_id}/rerun', [
        'owner' => 'generated',
        'repo' => 'generated',
        'run_id' => 6,
]);
```

Operations method:
```php
$client->operations()->actions()->reRunWorkflow(        owner: 'generated',
        repo: 'generated',
        run_id: 6,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#re-run-a-workflow).


### actions/re-run-workflow-failed-jobs

Re-run failed jobs from a workflow run

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/actions/runs/{run_id}/rerun-failed-jobs', [
        'owner' => 'generated',
        'repo' => 'generated',
        'run_id' => 6,
]);
```

Operations method:
```php
$client->operations()->actions()->reRunWorkflowFailedJobs(        owner: 'generated',
        repo: 'generated',
        run_id: 6,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#re-run-workflow-failed-jobs).


### actions/get-workflow-run-usage

Get workflow run usage

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/runs/{run_id}/timing', [
        'owner' => 'generated',
        'repo' => 'generated',
        'run_id' => 6,
]);
```

Operations method:
```php
$client->operations()->actions()->getWorkflowRunUsage(        owner: 'generated',
        repo: 'generated',
        run_id: 6,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#get-workflow-run-usage).


### actions/list-repo-secrets

List repository secrets

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/secrets', [
        'owner' => 'generated',
        'repo' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->actions()->listRepoSecrets(        owner: 'generated',
        repo: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#list-repository-secrets).


### actions/get-repo-public-key

Get a repository public key

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/secrets/public-key', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->getRepoPublicKey(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#get-a-repository-public-key).


### actions/get-repo-secret

Get a repository secret

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/secrets/{secret_name}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'secret_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->getRepoSecret(        owner: 'generated',
        repo: 'generated',
        secret_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#get-a-repository-secret).


### actions/create-or-update-repo-secret

Create or update a repository secret

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/actions/secrets/{secret_name}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'secret_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->createOrUpdateRepoSecret(        owner: 'generated',
        repo: 'generated',
        secret_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#create-or-update-a-repository-secret).


### actions/delete-repo-secret

Delete a repository secret

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/actions/secrets/{secret_name}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'secret_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->deleteRepoSecret(        owner: 'generated',
        repo: 'generated',
        secret_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#delete-a-repository-secret).


### actions/list-repo-variables

List repository variables

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/variables', [
        'owner' => 'generated',
        'repo' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->actions()->listRepoVariables(        owner: 'generated',
        repo: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/actions/variables#list-repository-variables).


### actions/create-repo-variable

Create a repository variable

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/actions/variables', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->createRepoVariable(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/actions/variables#create-a-repository-variable).


### actions/get-repo-variable

Get a repository variable

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/variables/{name}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->getRepoVariable(        owner: 'generated',
        repo: 'generated',
        name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/actions/variables#get-a-repository-variable).


### actions/delete-repo-variable

Delete a repository variable

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/actions/variables/{name}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->deleteRepoVariable(        owner: 'generated',
        repo: 'generated',
        name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/actions/variables#delete-a-repository-variable).


### actions/update-repo-variable

Update a repository variable

Using the `call` method:
```php
$client->call('PATCH /repos/{owner}/{repo}/actions/variables/{name}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->updateRepoVariable(        owner: 'generated',
        repo: 'generated',
        name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/actions/variables#update-a-repository-variable).


### actions/list-repo-workflows

List repository workflows

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/workflows', [
        'owner' => 'generated',
        'repo' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->actions()->listRepoWorkflows(        owner: 'generated',
        repo: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#list-repository-workflows).


### actions/get-workflow

Get a workflow

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/workflows/{workflow_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'workflow_id' => ,
]);
```

Operations method:
```php
$client->operations()->actions()->getWorkflow(        owner: 'generated',
        repo: 'generated',
        workflow_id: ,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#get-a-workflow).


### actions/disable-workflow

Disable a workflow

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/actions/workflows/{workflow_id}/disable', [
        'owner' => 'generated',
        'repo' => 'generated',
        'workflow_id' => ,
]);
```

Operations method:
```php
$client->operations()->actions()->disableWorkflow(        owner: 'generated',
        repo: 'generated',
        workflow_id: ,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#disable-a-workflow).


### actions/create-workflow-dispatch

Create a workflow dispatch event

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/actions/workflows/{workflow_id}/dispatches', [
        'owner' => 'generated',
        'repo' => 'generated',
        'workflow_id' => ,
]);
```

Operations method:
```php
$client->operations()->actions()->createWorkflowDispatch(        owner: 'generated',
        repo: 'generated',
        workflow_id: ,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#create-a-workflow-dispatch-event).


### actions/enable-workflow

Enable a workflow

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/actions/workflows/{workflow_id}/enable', [
        'owner' => 'generated',
        'repo' => 'generated',
        'workflow_id' => ,
]);
```

Operations method:
```php
$client->operations()->actions()->enableWorkflow(        owner: 'generated',
        repo: 'generated',
        workflow_id: ,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#enable-a-workflow).


### actions/list-workflow-runs

List workflow runs for a workflow

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/workflows/{workflow_id}/runs', [
        'owner' => 'generated',
        'repo' => 'generated',
        'workflow_id' => ,
        'actor' => 'generated',
        'branch' => 'generated',
        'event' => 'generated',
        'status' => 'generated',
        'created' => '1970-01-01T00:00:00+00:00',
        'check_suite_id' => 14,
        'head_sha' => 'generated',
        'per_page' => 8,
        'page' => 4,
        'exclude_pull_requests' => ,
]);
```

Operations method:
```php
$client->operations()->actions()->listWorkflowRuns(        owner: 'generated',
        repo: 'generated',
        workflow_id: ,
        actor: 'generated',
        branch: 'generated',
        event: 'generated',
        status: 'generated',
        created: '1970-01-01T00:00:00+00:00',
        check_suite_id: 14,
        head_sha: 'generated',
        per_page: 8,
        page: 4,
        exclude_pull_requests: ,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#list-workflow-runs).


### actions/get-workflow-usage

Get workflow usage

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/actions/workflows/{workflow_id}/timing', [
        'owner' => 'generated',
        'repo' => 'generated',
        'workflow_id' => ,
]);
```

Operations method:
```php
$client->operations()->actions()->getWorkflowUsage(        owner: 'generated',
        repo: 'generated',
        workflow_id: ,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#get-workflow-usage).


### issues/list-assignees

List assignees

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/assignees', [
        'owner' => 'generated',
        'repo' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->issues()->listAssignees(        owner: 'generated',
        repo: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/issues#list-assignees).


### issues/check-user-can-be-assigned

Check if a user can be assigned

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/assignees/{assignee}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'assignee' => 'generated',
]);
```

Operations method:
```php
$client->operations()->issues()->checkUserCanBeAssigned(        owner: 'generated',
        repo: 'generated',
        assignee: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/issues#check-if-a-user-can-be-assigned).


### repos/list-autolinks

List all autolinks of a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/autolinks', [
        'owner' => 'generated',
        'repo' => 'generated',
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listAutolinks(        owner: 'generated',
        repo: 'generated',
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/repos/autolinks#list-all-autolinks-of-a-repository).


### repos/create-autolink

Create an autolink reference for a repository

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/autolinks', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->createAutolink(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/repos/autolinks#create-an-autolink-reference-for-a-repository).


### repos/get-autolink

Get an autolink reference of a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/autolinks/{autolink_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'autolink_id' => 11,
]);
```

Operations method:
```php
$client->operations()->repos()->getAutolink(        owner: 'generated',
        repo: 'generated',
        autolink_id: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/repos/autolinks#get-an-autolink-reference-of-a-repository).


### repos/delete-autolink

Delete an autolink reference from a repository

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/autolinks/{autolink_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'autolink_id' => 11,
]);
```

Operations method:
```php
$client->operations()->repos()->deleteAutolink(        owner: 'generated',
        repo: 'generated',
        autolink_id: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/repos/autolinks#delete-an-autolink-reference-from-a-repository).


### repos/enable-automated-security-fixes

Enable automated security fixes

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/automated-security-fixes', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->enableAutomatedSecurityFixes(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#enable-automated-security-fixes).


### repos/disable-automated-security-fixes

Disable automated security fixes

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/automated-security-fixes', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->disableAutomatedSecurityFixes(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#disable-automated-security-fixes).


### repos/list-branches

List branches

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/branches', [
        'owner' => 'generated',
        'repo' => 'generated',
        'protected' => ,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listBranches(        owner: 'generated',
        repo: 'generated',
        protected: ,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/branches/branches#list-branches).


### repos/get-branch

Get a branch

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/branches/{branch}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getBranch(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/branches/branches#get-a-branch).


### repos/get-branch-protection

Get branch protection

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/branches/{branch}/protection', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getBranchProtection(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/branches/branch-protection#get-branch-protection).


### repos/update-branch-protection

Update branch protection

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/branches/{branch}/protection', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->updateBranchProtection(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/branches/branch-protection#update-branch-protection).


### repos/delete-branch-protection

Delete branch protection

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/branches/{branch}/protection', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->deleteBranchProtection(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/branches/branch-protection#delete-branch-protection).


### repos/get-admin-branch-protection

Get admin branch protection

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/branches/{branch}/protection/enforce_admins', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getAdminBranchProtection(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/branches/branch-protection#get-admin-branch-protection).


### repos/set-admin-branch-protection

Set admin branch protection

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/branches/{branch}/protection/enforce_admins', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->setAdminBranchProtection(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/branches/branch-protection#set-admin-branch-protection).


### repos/delete-admin-branch-protection

Delete admin branch protection

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/branches/{branch}/protection/enforce_admins', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->deleteAdminBranchProtection(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/branches/branch-protection#delete-admin-branch-protection).


### repos/get-pull-request-review-protection

Get pull request review protection

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/branches/{branch}/protection/required_pull_request_reviews', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getPullRequestReviewProtection(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/branches/branch-protection#get-pull-request-review-protection).


### repos/delete-pull-request-review-protection

Delete pull request review protection

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/branches/{branch}/protection/required_pull_request_reviews', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->deletePullRequestReviewProtection(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/branches/branch-protection#delete-pull-request-review-protection).


### repos/update-pull-request-review-protection

Update pull request review protection

Using the `call` method:
```php
$client->call('PATCH /repos/{owner}/{repo}/branches/{branch}/protection/required_pull_request_reviews', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->updatePullRequestReviewProtection(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/branches/branch-protection#update-pull-request-review-protection).


### repos/get-commit-signature-protection

Get commit signature protection

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/branches/{branch}/protection/required_signatures', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getCommitSignatureProtection(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/branches/branch-protection#get-commit-signature-protection).


### repos/create-commit-signature-protection

Create commit signature protection

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/branches/{branch}/protection/required_signatures', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->createCommitSignatureProtection(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/branches/branch-protection#create-commit-signature-protection).


### repos/delete-commit-signature-protection

Delete commit signature protection

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/branches/{branch}/protection/required_signatures', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->deleteCommitSignatureProtection(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/branches/branch-protection#delete-commit-signature-protection).


### repos/get-status-checks-protection

Get status checks protection

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getStatusChecksProtection(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/branches/branch-protection#get-status-checks-protection).


### repos/remove-status-check-protection

Remove status check protection

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->removeStatusCheckProtection(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/branches/branch-protection#remove-status-check-protection).


### repos/update-status-check-protection

Update status check protection

Using the `call` method:
```php
$client->call('PATCH /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->updateStatusCheckProtection(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/branches/branch-protection#update-status-check-protection).


### repos/get-all-status-check-contexts

Get all status check contexts

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks/contexts', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getAllStatusCheckContexts(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/branches/branch-protection#get-all-status-check-contexts).


### repos/set-status-check-contexts

Set status check contexts

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks/contexts', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->setStatusCheckContexts(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/branches/branch-protection#set-status-check-contexts).


### repos/add-status-check-contexts

Add status check contexts

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks/contexts', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->addStatusCheckContexts(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/branches/branch-protection#add-status-check-contexts).


### repos/remove-status-check-contexts

Remove status check contexts

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks/contexts', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->removeStatusCheckContexts(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/branches/branch-protection#remove-status-check-contexts).


### repos/get-access-restrictions

Get access restrictions

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/branches/{branch}/protection/restrictions', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getAccessRestrictions(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/branches/branch-protection#get-access-restrictions).


### repos/delete-access-restrictions

Delete access restrictions

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/branches/{branch}/protection/restrictions', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->deleteAccessRestrictions(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/branches/branch-protection#delete-access-restrictions).


### repos/get-apps-with-access-to-protected-branch

Get apps with access to the protected branch

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/apps', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getAppsWithAccessToProtectedBranch(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/branches/branch-protection#list-apps-with-access-to-the-protected-branch).


### repos/set-app-access-restrictions

Set app access restrictions

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/apps', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->setAppAccessRestrictions(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/branches/branch-protection#set-app-access-restrictions).


### repos/add-app-access-restrictions

Add app access restrictions

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/apps', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->addAppAccessRestrictions(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/branches/branch-protection#add-app-access-restrictions).


### repos/remove-app-access-restrictions

Remove app access restrictions

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/apps', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->removeAppAccessRestrictions(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/branches/branch-protection#remove-app-access-restrictions).


### repos/get-teams-with-access-to-protected-branch

Get teams with access to the protected branch

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/teams', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getTeamsWithAccessToProtectedBranch(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/branches/branch-protection#list-teams-with-access-to-the-protected-branch).


### repos/set-team-access-restrictions

Set team access restrictions

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/teams', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->setTeamAccessRestrictions(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/branches/branch-protection#set-team-access-restrictions).


### repos/add-team-access-restrictions

Add team access restrictions

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/teams', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->addTeamAccessRestrictions(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/branches/branch-protection#add-team-access-restrictions).


### repos/remove-team-access-restrictions

Remove team access restrictions

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/teams', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->removeTeamAccessRestrictions(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/branches/branch-protection#remove-team-access-restrictions).


### repos/get-users-with-access-to-protected-branch

Get users with access to the protected branch

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/users', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getUsersWithAccessToProtectedBranch(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/branches/branch-protection#list-users-with-access-to-the-protected-branch).


### repos/set-user-access-restrictions

Set user access restrictions

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/users', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->setUserAccessRestrictions(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/branches/branch-protection#set-user-access-restrictions).


### repos/add-user-access-restrictions

Add user access restrictions

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/users', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->addUserAccessRestrictions(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/branches/branch-protection#add-user-access-restrictions).


### repos/remove-user-access-restrictions

Remove user access restrictions

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/branches/{branch}/protection/restrictions/users', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->removeUserAccessRestrictions(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/branches/branch-protection#remove-user-access-restrictions).


### repos/rename-branch

Rename a branch

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/branches/{branch}/rename', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->renameBranch(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/branches/branches#rename-a-branch).


### checks/create

Create a check run

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/check-runs', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->checks()->create(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/checks#create-a-check-run).


### checks/get

Get a check run

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/check-runs/{check_run_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'check_run_id' => 12,
]);
```

Operations method:
```php
$client->operations()->checks()->get(        owner: 'generated',
        repo: 'generated',
        check_run_id: 12,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/checks#get-a-check-run).


### checks/update

Update a check run

Using the `call` method:
```php
$client->call('PATCH /repos/{owner}/{repo}/check-runs/{check_run_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'check_run_id' => 12,
]);
```

Operations method:
```php
$client->operations()->checks()->update(        owner: 'generated',
        repo: 'generated',
        check_run_id: 12,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/checks#update-a-check-run).


### checks/list-annotations

List check run annotations

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/check-runs/{check_run_id}/annotations', [
        'owner' => 'generated',
        'repo' => 'generated',
        'check_run_id' => 12,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->checks()->listAnnotations(        owner: 'generated',
        repo: 'generated',
        check_run_id: 12,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/checks#list-check-run-annotations).


### checks/rerequest-run

Rerequest a check run

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/check-runs/{check_run_id}/rerequest', [
        'owner' => 'generated',
        'repo' => 'generated',
        'check_run_id' => 12,
]);
```

Operations method:
```php
$client->operations()->checks()->rerequestRun(        owner: 'generated',
        repo: 'generated',
        check_run_id: 12,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/checks#rerequest-a-check-run).


### checks/create-suite

Create a check suite

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/check-suites', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->checks()->createSuite(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/checks#create-a-check-suite).


### checks/set-suites-preferences

Update repository preferences for check suites

Using the `call` method:
```php
$client->call('PATCH /repos/{owner}/{repo}/check-suites/preferences', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->checks()->setSuitesPreferences(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/checks#update-repository-preferences-for-check-suites).


### checks/get-suite

Get a check suite

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/check-suites/{check_suite_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'check_suite_id' => 14,
]);
```

Operations method:
```php
$client->operations()->checks()->getSuite(        owner: 'generated',
        repo: 'generated',
        check_suite_id: 14,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/checks#get-a-check-suite).


### checks/list-for-suite

List check runs in a check suite

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/check-suites/{check_suite_id}/check-runs', [
        'owner' => 'generated',
        'repo' => 'generated',
        'check_suite_id' => 14,
        'check_name' => 'generated',
        'status' => 'generated',
        'filter' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->checks()->listForSuite(        owner: 'generated',
        repo: 'generated',
        check_suite_id: 14,
        check_name: 'generated',
        status: 'generated',
        filter: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/checks#list-check-runs-in-a-check-suite).


### checks/rerequest-suite

Rerequest a check suite

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/check-suites/{check_suite_id}/rerequest', [
        'owner' => 'generated',
        'repo' => 'generated',
        'check_suite_id' => 14,
]);
```

Operations method:
```php
$client->operations()->checks()->rerequestSuite(        owner: 'generated',
        repo: 'generated',
        check_suite_id: 14,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/checks#rerequest-a-check-suite).


### code-scanning/list-alerts-for-repo

List code scanning alerts for a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/code-scanning/alerts', [
        'owner' => 'generated',
        'repo' => 'generated',
        'tool_name' => 'generated',
        'tool_guid' => ,
        'ref' => 'generated',
        'state' => 'generated',
        'severity' => 'generated',
        'page' => 4,
        'per_page' => 8,
        'direction' => 'generated',
        'sort' => 'generated',
]);
```

Operations method:
```php
$client->operations()->codeScanning()->listAlertsForRepo(        owner: 'generated',
        repo: 'generated',
        tool_name: 'generated',
        tool_guid: ,
        ref: 'generated',
        state: 'generated',
        severity: 'generated',
        page: 4,
        per_page: 8,
        direction: 'generated',
        sort: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/code-scanning#list-code-scanning-alerts-for-a-repository).


### code-scanning/get-alert

Get a code scanning alert

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/code-scanning/alerts/{alert_number}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'alert_number' => 12,
]);
```

Operations method:
```php
$client->operations()->codeScanning()->getAlert(        owner: 'generated',
        repo: 'generated',
        alert_number: 12,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/code-scanning#get-a-code-scanning-alert).


### code-scanning/update-alert

Update a code scanning alert

Using the `call` method:
```php
$client->call('PATCH /repos/{owner}/{repo}/code-scanning/alerts/{alert_number}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'alert_number' => 12,
]);
```

Operations method:
```php
$client->operations()->codeScanning()->updateAlert(        owner: 'generated',
        repo: 'generated',
        alert_number: 12,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/code-scanning#update-a-code-scanning-alert).


### code-scanning/list-alert-instances

List instances of a code scanning alert

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/code-scanning/alerts/{alert_number}/instances', [
        'owner' => 'generated',
        'repo' => 'generated',
        'alert_number' => 12,
        'ref' => 'generated',
        'page' => 4,
        'per_page' => 8,
]);
```

Operations method:
```php
$client->operations()->codeScanning()->listAlertInstances(        owner: 'generated',
        repo: 'generated',
        alert_number: 12,
        ref: 'generated',
        page: 4,
        per_page: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/code-scanning#list-instances-of-a-code-scanning-alert).


### code-scanning/list-recent-analyses

List code scanning analyses for a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/code-scanning/analyses', [
        'owner' => 'generated',
        'repo' => 'generated',
        'tool_name' => 'generated',
        'tool_guid' => ,
        'ref' => 'generated',
        'sarif_id' => 'generated',
        'page' => 4,
        'per_page' => 8,
        'direction' => 'generated',
        'sort' => 'generated',
]);
```

Operations method:
```php
$client->operations()->codeScanning()->listRecentAnalyses(        owner: 'generated',
        repo: 'generated',
        tool_name: 'generated',
        tool_guid: ,
        ref: 'generated',
        sarif_id: 'generated',
        page: 4,
        per_page: 8,
        direction: 'generated',
        sort: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/code-scanning#list-code-scanning-analyses-for-a-repository).


### code-scanning/get-analysis

Get a code scanning analysis for a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/code-scanning/analyses/{analysis_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'analysis_id' => 11,
]);
```

Operations method:
```php
$client->operations()->codeScanning()->getAnalysis(        owner: 'generated',
        repo: 'generated',
        analysis_id: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/code-scanning#get-a-code-scanning-analysis-for-a-repository).


### code-scanning/delete-analysis

Delete a code scanning analysis from a repository

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/code-scanning/analyses/{analysis_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'analysis_id' => 11,
        'confirm_delete' => ,
]);
```

Operations method:
```php
$client->operations()->codeScanning()->deleteAnalysis(        owner: 'generated',
        repo: 'generated',
        analysis_id: 11,
        confirm_delete: ,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/code-scanning#delete-a-code-scanning-analysis-from-a-repository).


### code-scanning/list-codeql-databases

List CodeQL databases for a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/code-scanning/codeql/databases', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->codeScanning()->listCodeqlDatabases(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/code-scanning#list-codeql-databases-for-a-repository).


### code-scanning/get-codeql-database

Get a CodeQL database for a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/code-scanning/codeql/databases/{language}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'language' => 'generated',
]);
```

Operations method:
```php
$client->operations()->codeScanning()->getCodeqlDatabase(        owner: 'generated',
        repo: 'generated',
        language: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/code-scanning#get-a-codeql-database-for-a-repository).


### code-scanning/get-default-setup

Get a code scanning default setup configuration

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/code-scanning/default-setup', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->codeScanning()->getDefaultSetup(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/code-scanning#get-a-code-scanning-default-setup-configuration).


### code-scanning/update-default-setup

Update a code scanning default setup configuration

Using the `call` method:
```php
$client->call('PATCH /repos/{owner}/{repo}/code-scanning/default-setup', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->codeScanning()->updateDefaultSetup(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/code-scanning#update-a-code-scanning-default-setup-configuration).


### code-scanning/upload-sarif

Upload an analysis as SARIF data

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/code-scanning/sarifs', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->codeScanning()->uploadSarif(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/code-scanning#upload-an-analysis-as-sarif-data).


### code-scanning/get-sarif

Get information about a SARIF upload

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/code-scanning/sarifs/{sarif_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'sarif_id' => 'generated',
]);
```

Operations method:
```php
$client->operations()->codeScanning()->getSarif(        owner: 'generated',
        repo: 'generated',
        sarif_id: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/code-scanning#get-information-about-a-sarif-upload).


### repos/codeowners-errors

List CODEOWNERS errors

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/codeowners/errors', [
        'owner' => 'generated',
        'repo' => 'generated',
        'ref' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->codeownersErrors(        owner: 'generated',
        repo: 'generated',
        ref: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#list-codeowners-errors).


### codespaces/list-in-repository-for-authenticated-user

List codespaces in a repository for the authenticated user

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/codespaces', [
        'owner' => 'generated',
        'repo' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->codespaces()->listInRepositoryForAuthenticatedUser(        owner: 'generated',
        repo: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/codespaces#list-codespaces-in-a-repository-for-the-authenticated-user).


### codespaces/create-with-repo-for-authenticated-user

Create a codespace in a repository

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/codespaces', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->codespaces()->createWithRepoForAuthenticatedUser(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/codespaces#create-a-codespace-in-a-repository).


### codespaces/list-devcontainers-in-repository-for-authenticated-user

List devcontainer configurations in a repository for the authenticated user

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/codespaces/devcontainers', [
        'owner' => 'generated',
        'repo' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->codespaces()->listDevcontainersInRepositoryForAuthenticatedUser(        owner: 'generated',
        repo: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/codespaces#list-devcontainers-in-a-repository-for-the-authenticated-user).


### codespaces/repo-machines-for-authenticated-user

List available machine types for a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/codespaces/machines', [
        'owner' => 'generated',
        'repo' => 'generated',
        'location' => 'generated',
        'client_ip' => 'generated',
]);
```

Operations method:
```php
$client->operations()->codespaces()->repoMachinesForAuthenticatedUser(        owner: 'generated',
        repo: 'generated',
        location: 'generated',
        client_ip: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/codespaces#list-available-machine-types-for-a-repository).


### codespaces/pre-flight-with-repo-for-authenticated-user

Get default attributes for a codespace

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/codespaces/new', [
        'owner' => 'generated',
        'repo' => 'generated',
        'ref' => 'generated',
        'client_ip' => 'generated',
]);
```

Operations method:
```php
$client->operations()->codespaces()->preFlightWithRepoForAuthenticatedUser(        owner: 'generated',
        repo: 'generated',
        ref: 'generated',
        client_ip: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/codespaces#preview-attributes-for-a-new-codespace).


### codespaces/list-repo-secrets

List repository secrets

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/codespaces/secrets', [
        'owner' => 'generated',
        'repo' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->codespaces()->listRepoSecrets(        owner: 'generated',
        repo: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/codespaces#list-repository-secrets).


### codespaces/get-repo-public-key

Get a repository public key

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/codespaces/secrets/public-key', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->codespaces()->getRepoPublicKey(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/codespaces#get-a-repository-public-key).


### codespaces/get-repo-secret

Get a repository secret

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/codespaces/secrets/{secret_name}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'secret_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->codespaces()->getRepoSecret(        owner: 'generated',
        repo: 'generated',
        secret_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/codespaces#get-a-repository-secret).


### codespaces/create-or-update-repo-secret

Create or update a repository secret

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/codespaces/secrets/{secret_name}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'secret_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->codespaces()->createOrUpdateRepoSecret(        owner: 'generated',
        repo: 'generated',
        secret_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/codespaces#create-or-update-a-repository-secret).


### codespaces/delete-repo-secret

Delete a repository secret

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/codespaces/secrets/{secret_name}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'secret_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->codespaces()->deleteRepoSecret(        owner: 'generated',
        repo: 'generated',
        secret_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/codespaces#delete-a-repository-secret).


### repos/list-collaborators

List repository collaborators

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/collaborators', [
        'owner' => 'generated',
        'repo' => 'generated',
        'permission' => 'generated',
        'affiliation' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listCollaborators(        owner: 'generated',
        repo: 'generated',
        permission: 'generated',
        affiliation: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/collaborators/collaborators#list-repository-collaborators).


### repos/check-collaborator

Check if a user is a repository collaborator

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/collaborators/{username}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->checkCollaborator(        owner: 'generated',
        repo: 'generated',
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/collaborators/collaborators#check-if-a-user-is-a-repository-collaborator).


### repos/add-collaborator

Add a repository collaborator

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/collaborators/{username}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->addCollaborator(        owner: 'generated',
        repo: 'generated',
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/collaborators/collaborators#add-a-repository-collaborator).


### repos/remove-collaborator

Remove a repository collaborator

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/collaborators/{username}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->removeCollaborator(        owner: 'generated',
        repo: 'generated',
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/collaborators/collaborators#remove-a-repository-collaborator).


### repos/get-collaborator-permission-level

Get repository permissions for a user

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/collaborators/{username}/permission', [
        'owner' => 'generated',
        'repo' => 'generated',
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getCollaboratorPermissionLevel(        owner: 'generated',
        repo: 'generated',
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/collaborators/collaborators#get-repository-permissions-for-a-user).


### repos/list-commit-comments-for-repo

List commit comments for a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/comments', [
        'owner' => 'generated',
        'repo' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listCommitCommentsForRepo(        owner: 'generated',
        repo: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/commits/comments#list-commit-comments-for-a-repository).


### repos/get-commit-comment

Get a commit comment

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/comments/{comment_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'comment_id' => 10,
]);
```

Operations method:
```php
$client->operations()->repos()->getCommitComment(        owner: 'generated',
        repo: 'generated',
        comment_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/commits/comments#get-a-commit-comment).


### repos/delete-commit-comment

Delete a commit comment

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/comments/{comment_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'comment_id' => 10,
]);
```

Operations method:
```php
$client->operations()->repos()->deleteCommitComment(        owner: 'generated',
        repo: 'generated',
        comment_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/commits/comments#delete-a-commit-comment).


### repos/update-commit-comment

Update a commit comment

Using the `call` method:
```php
$client->call('PATCH /repos/{owner}/{repo}/comments/{comment_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'comment_id' => 10,
]);
```

Operations method:
```php
$client->operations()->repos()->updateCommitComment(        owner: 'generated',
        repo: 'generated',
        comment_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/commits/comments#update-a-commit-comment).


### reactions/list-for-commit-comment

List reactions for a commit comment

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/comments/{comment_id}/reactions', [
        'owner' => 'generated',
        'repo' => 'generated',
        'comment_id' => 10,
        'content' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->reactions()->listForCommitComment(        owner: 'generated',
        repo: 'generated',
        comment_id: 10,
        content: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/reactions#list-reactions-for-a-commit-comment).


### reactions/create-for-commit-comment

Create reaction for a commit comment

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/comments/{comment_id}/reactions', [
        'owner' => 'generated',
        'repo' => 'generated',
        'comment_id' => 10,
]);
```

Operations method:
```php
$client->operations()->reactions()->createForCommitComment(        owner: 'generated',
        repo: 'generated',
        comment_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/reactions#create-reaction-for-a-commit-comment).


### reactions/delete-for-commit-comment

Delete a commit comment reaction

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/comments/{comment_id}/reactions/{reaction_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'comment_id' => 10,
        'reaction_id' => 11,
]);
```

Operations method:
```php
$client->operations()->reactions()->deleteForCommitComment(        owner: 'generated',
        repo: 'generated',
        comment_id: 10,
        reaction_id: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/reactions#delete-a-commit-comment-reaction).


### repos/list-commits

List commits

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/commits', [
        'owner' => 'generated',
        'repo' => 'generated',
        'sha' => 'generated',
        'path' => 'generated',
        'author' => 'generated',
        'committer' => 'generated',
        'since' => '1970-01-01T00:00:00+00:00',
        'until' => '1970-01-01T00:00:00+00:00',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listCommits(        owner: 'generated',
        repo: 'generated',
        sha: 'generated',
        path: 'generated',
        author: 'generated',
        committer: 'generated',
        since: '1970-01-01T00:00:00+00:00',
        until: '1970-01-01T00:00:00+00:00',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/commits/commits#list-commits).


### repos/list-branches-for-head-commit

List branches for HEAD commit

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/commits/{commit_sha}/branches-where-head', [
        'owner' => 'generated',
        'repo' => 'generated',
        'commit_sha' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->listBranchesForHeadCommit(        owner: 'generated',
        repo: 'generated',
        commit_sha: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/commits/commits#list-branches-for-head-commit).


### repos/list-comments-for-commit

List commit comments

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/commits/{commit_sha}/comments', [
        'owner' => 'generated',
        'repo' => 'generated',
        'commit_sha' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listCommentsForCommit(        owner: 'generated',
        repo: 'generated',
        commit_sha: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/commits/comments#list-commit-comments).


### repos/create-commit-comment

Create a commit comment

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/commits/{commit_sha}/comments', [
        'owner' => 'generated',
        'repo' => 'generated',
        'commit_sha' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->createCommitComment(        owner: 'generated',
        repo: 'generated',
        commit_sha: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/commits/comments#create-a-commit-comment).


### repos/list-pull-requests-associated-with-commit

List pull requests associated with a commit

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/commits/{commit_sha}/pulls', [
        'owner' => 'generated',
        'repo' => 'generated',
        'commit_sha' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listPullRequestsAssociatedWithCommit(        owner: 'generated',
        repo: 'generated',
        commit_sha: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/commits/commits#list-pull-requests-associated-with-a-commit).


### repos/get-commit

Get a commit

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/commits/{ref}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'ref' => 'generated',
        'page' => 4,
        'per_page' => 8,
]);
```

Operations method:
```php
$client->operations()->repos()->getCommit(        owner: 'generated',
        repo: 'generated',
        ref: 'generated',
        page: 4,
        per_page: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/commits/commits#get-a-commit).


### checks/list-for-ref

List check runs for a Git reference

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/commits/{ref}/check-runs', [
        'owner' => 'generated',
        'repo' => 'generated',
        'ref' => 'generated',
        'check_name' => 'generated',
        'status' => 'generated',
        'app_id' => 6,
        'filter' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->checks()->listForRef(        owner: 'generated',
        repo: 'generated',
        ref: 'generated',
        check_name: 'generated',
        status: 'generated',
        app_id: 6,
        filter: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/checks#list-check-runs-for-a-git-reference).


### checks/list-suites-for-ref

List check suites for a Git reference

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/commits/{ref}/check-suites', [
        'owner' => 'generated',
        'repo' => 'generated',
        'ref' => 'generated',
        'app_id' => 6,
        'check_name' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->checks()->listSuitesForRef(        owner: 'generated',
        repo: 'generated',
        ref: 'generated',
        app_id: 6,
        check_name: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/checks#list-check-suites-for-a-git-reference).


### repos/get-combined-status-for-ref

Get the combined status for a specific reference

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/commits/{ref}/status', [
        'owner' => 'generated',
        'repo' => 'generated',
        'ref' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->getCombinedStatusForRef(        owner: 'generated',
        repo: 'generated',
        ref: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/commits/statuses#get-the-combined-status-for-a-specific-reference).


### repos/list-commit-statuses-for-ref

List commit statuses for a reference

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/commits/{ref}/statuses', [
        'owner' => 'generated',
        'repo' => 'generated',
        'ref' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listCommitStatusesForRef(        owner: 'generated',
        repo: 'generated',
        ref: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/commits/statuses#list-commit-statuses-for-a-reference).


### repos/get-community-profile-metrics

Get community profile metrics

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/community/profile', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getCommunityProfileMetrics(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/metrics/community#get-community-profile-metrics).


### repos/compare-commits

Compare two commits

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/compare/{basehead}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'basehead' => 'generated',
        'page' => 4,
        'per_page' => 8,
]);
```

Operations method:
```php
$client->operations()->repos()->compareCommits(        owner: 'generated',
        repo: 'generated',
        basehead: 'generated',
        page: 4,
        per_page: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/commits/commits#compare-two-commits).


### repos/get-content

Get repository content

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/contents/{path}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'path' => 'generated',
        'ref' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getContent(        owner: 'generated',
        repo: 'generated',
        path: 'generated',
        ref: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#get-repository-content).


### repos/create-or-update-file-contents

Create or update file contents

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/contents/{path}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'path' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->createOrUpdateFileContents(        owner: 'generated',
        repo: 'generated',
        path: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#create-or-update-file-contents).


### repos/delete-file

Delete a file

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/contents/{path}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'path' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->deleteFile(        owner: 'generated',
        repo: 'generated',
        path: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#delete-a-file).


### repos/list-contributors

List repository contributors

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/contributors', [
        'owner' => 'generated',
        'repo' => 'generated',
        'anon' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listContributors(        owner: 'generated',
        repo: 'generated',
        anon: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#list-repository-contributors).


### dependabot/list-alerts-for-repo

List Dependabot alerts for a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/dependabot/alerts', [
        'owner' => 'generated',
        'repo' => 'generated',
        'state' => 'generated',
        'severity' => 'generated',
        'ecosystem' => 'generated',
        'package' => 'generated',
        'manifest' => 'generated',
        'scope' => 'generated',
        'before' => 'generated',
        'after' => 'generated',
        'last' => 4,
        'sort' => 'generated',
        'direction' => 'generated',
        'page' => 4,
        'per_page' => 8,
        'first' => 5,
]);
```

Operations method:
```php
$client->operations()->dependabot()->listAlertsForRepo(        owner: 'generated',
        repo: 'generated',
        state: 'generated',
        severity: 'generated',
        ecosystem: 'generated',
        package: 'generated',
        manifest: 'generated',
        scope: 'generated',
        before: 'generated',
        after: 'generated',
        last: 4,
        sort: 'generated',
        direction: 'generated',
        page: 4,
        per_page: 8,
        first: 5,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/dependabot#list-dependabot-alerts-for-a-repository).


### dependabot/get-alert

Get a Dependabot alert

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/dependabot/alerts/{alert_number}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'alert_number' => 12,
]);
```

Operations method:
```php
$client->operations()->dependabot()->getAlert(        owner: 'generated',
        repo: 'generated',
        alert_number: 12,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/dependabot#get-a-dependabot-alert).


### dependabot/update-alert

Update a Dependabot alert

Using the `call` method:
```php
$client->call('PATCH /repos/{owner}/{repo}/dependabot/alerts/{alert_number}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'alert_number' => 12,
]);
```

Operations method:
```php
$client->operations()->dependabot()->updateAlert(        owner: 'generated',
        repo: 'generated',
        alert_number: 12,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/dependabot#update-a-dependabot-alert).


### dependabot/list-repo-secrets

List repository secrets

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/dependabot/secrets', [
        'owner' => 'generated',
        'repo' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->dependabot()->listRepoSecrets(        owner: 'generated',
        repo: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/dependabot#list-repository-secrets).


### dependabot/get-repo-public-key

Get a repository public key

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/dependabot/secrets/public-key', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->dependabot()->getRepoPublicKey(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/dependabot#get-a-repository-public-key).


### dependabot/get-repo-secret

Get a repository secret

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/dependabot/secrets/{secret_name}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'secret_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->dependabot()->getRepoSecret(        owner: 'generated',
        repo: 'generated',
        secret_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/dependabot#get-a-repository-secret).


### dependabot/create-or-update-repo-secret

Create or update a repository secret

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/dependabot/secrets/{secret_name}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'secret_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->dependabot()->createOrUpdateRepoSecret(        owner: 'generated',
        repo: 'generated',
        secret_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/dependabot#create-or-update-a-repository-secret).


### dependabot/delete-repo-secret

Delete a repository secret

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/dependabot/secrets/{secret_name}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'secret_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->dependabot()->deleteRepoSecret(        owner: 'generated',
        repo: 'generated',
        secret_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/dependabot#delete-a-repository-secret).


### dependency-graph/diff-range

Get a diff of the dependencies between commits

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/dependency-graph/compare/{basehead}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'basehead' => 'generated',
        'name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->dependencyGraph()->diffRange(        owner: 'generated',
        repo: 'generated',
        basehead: 'generated',
        name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/dependency-graph#get-a-diff-of-the-dependencies-between-commits).


### dependency-graph/export-sbom

Export a software bill of materials (SBOM) for a repository.

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/dependency-graph/sbom', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->dependencyGraph()->exportSbom(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/dependency-graph/sboms#export-a-software-bill-of-materials-sbom-for-a-repository).


### dependency-graph/create-repository-snapshot

Create a snapshot of dependencies for a repository

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/dependency-graph/snapshots', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->dependencyGraph()->createRepositorySnapshot(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/dependency-graph#create-a-snapshot-of-dependencies-for-a-repository).


### repos/list-deployments

List deployments

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/deployments', [
        'owner' => 'generated',
        'repo' => 'generated',
        'sha' => 'generated',
        'ref' => 'generated',
        'task' => 'generated',
        'environment' => ,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listDeployments(        owner: 'generated',
        repo: 'generated',
        sha: 'generated',
        ref: 'generated',
        task: 'generated',
        environment: ,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/deployments/deployments#list-deployments).


### repos/create-deployment

Create a deployment

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/deployments', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->createDeployment(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/deployments/deployments#create-a-deployment).


### repos/get-deployment

Get a deployment

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/deployments/{deployment_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'deployment_id' => 13,
]);
```

Operations method:
```php
$client->operations()->repos()->getDeployment(        owner: 'generated',
        repo: 'generated',
        deployment_id: 13,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/deployments/deployments#get-a-deployment).


### repos/delete-deployment

Delete a deployment

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/deployments/{deployment_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'deployment_id' => 13,
]);
```

Operations method:
```php
$client->operations()->repos()->deleteDeployment(        owner: 'generated',
        repo: 'generated',
        deployment_id: 13,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/deployments/deployments#delete-a-deployment).


### repos/list-deployment-statuses

List deployment statuses

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/deployments/{deployment_id}/statuses', [
        'owner' => 'generated',
        'repo' => 'generated',
        'deployment_id' => 13,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listDeploymentStatuses(        owner: 'generated',
        repo: 'generated',
        deployment_id: 13,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/deployments/statuses#list-deployment-statuses).


### repos/create-deployment-status

Create a deployment status

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/deployments/{deployment_id}/statuses', [
        'owner' => 'generated',
        'repo' => 'generated',
        'deployment_id' => 13,
]);
```

Operations method:
```php
$client->operations()->repos()->createDeploymentStatus(        owner: 'generated',
        repo: 'generated',
        deployment_id: 13,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/deployments/statuses#create-a-deployment-status).


### repos/get-deployment-status

Get a deployment status

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/deployments/{deployment_id}/statuses/{status_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'deployment_id' => 13,
        'status_id' => 9,
]);
```

Operations method:
```php
$client->operations()->repos()->getDeploymentStatus(        owner: 'generated',
        repo: 'generated',
        deployment_id: 13,
        status_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/deployments/statuses#get-a-deployment-status).


### repos/create-dispatch-event

Create a repository dispatch event

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/dispatches', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->createDispatchEvent(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#create-a-repository-dispatch-event).


### repos/get-all-environments

List environments

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/environments', [
        'owner' => 'generated',
        'repo' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->getAllEnvironments(        owner: 'generated',
        repo: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/deployments/environments#list-environments).


### repos/get-environment

Get an environment

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/environments/{environment_name}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'environment_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getEnvironment(        owner: 'generated',
        repo: 'generated',
        environment_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/deployments/environments#get-an-environment).


### repos/create-or-update-environment

Create or update an environment

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/environments/{environment_name}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'environment_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->createOrUpdateEnvironment(        owner: 'generated',
        repo: 'generated',
        environment_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/deployments/environments#create-or-update-an-environment).


### repos/delete-an-environment

Delete an environment

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/environments/{environment_name}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'environment_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->deleteAnEnvironment(        owner: 'generated',
        repo: 'generated',
        environment_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/deployments/environments#delete-an-environment).


### repos/list-deployment-branch-policies

List deployment branch policies

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies', [
        'owner' => 'generated',
        'repo' => 'generated',
        'environment_name' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listDeploymentBranchPolicies(        owner: 'generated',
        repo: 'generated',
        environment_name: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/deployments/branch-policies#list-deployment-branch-policies).


### repos/create-deployment-branch-policy

Create a deployment branch policy

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies', [
        'owner' => 'generated',
        'repo' => 'generated',
        'environment_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->createDeploymentBranchPolicy(        owner: 'generated',
        repo: 'generated',
        environment_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/deployments/branch-policies#create-deployment-branch-policy).


### repos/get-deployment-branch-policy

Get a deployment branch policy

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies/{branch_policy_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'environment_name' => 'generated',
        'branch_policy_id' => 16,
]);
```

Operations method:
```php
$client->operations()->repos()->getDeploymentBranchPolicy(        owner: 'generated',
        repo: 'generated',
        environment_name: 'generated',
        branch_policy_id: 16,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/deployments/branch-policies#get-deployment-branch-policy).


### repos/update-deployment-branch-policy

Update a deployment branch policy

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies/{branch_policy_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'environment_name' => 'generated',
        'branch_policy_id' => 16,
]);
```

Operations method:
```php
$client->operations()->repos()->updateDeploymentBranchPolicy(        owner: 'generated',
        repo: 'generated',
        environment_name: 'generated',
        branch_policy_id: 16,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/deployments/branch-policies#update-deployment-branch-policy).


### repos/delete-deployment-branch-policy

Delete a deployment branch policy

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/environments/{environment_name}/deployment-branch-policies/{branch_policy_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'environment_name' => 'generated',
        'branch_policy_id' => 16,
]);
```

Operations method:
```php
$client->operations()->repos()->deleteDeploymentBranchPolicy(        owner: 'generated',
        repo: 'generated',
        environment_name: 'generated',
        branch_policy_id: 16,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/deployments/branch-policies#delete-deployment-branch-policy).


### repos/get-all-deployment-protection-rules

Get all deployment protection rules for an environment

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/environments/{environment_name}/deployment_protection_rules', [
        'environment_name' => 'generated',
        'repo' => 'generated',
        'owner' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getAllDeploymentProtectionRules(        environment_name: 'generated',
        repo: 'generated',
        owner: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/deployments/protection-rules#get-all-deployment-protection-rules).


### repos/create-deployment-protection-rule

Create a custom deployment protection rule on an environment

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/environments/{environment_name}/deployment_protection_rules', [
        'environment_name' => 'generated',
        'repo' => 'generated',
        'owner' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->createDeploymentProtectionRule(        environment_name: 'generated',
        repo: 'generated',
        owner: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/deployments/deployment-protection-rules#create-a-deployment-protection-rule).


### repos/list-custom-deployment-rule-integrations

List custom deployment rule integrations available for an environment

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/environments/{environment_name}/deployment_protection_rules/apps', [
        'environment_name' => 'generated',
        'repo' => 'generated',
        'owner' => 'generated',
        'page' => 4,
        'per_page' => 8,
]);
```

Operations method:
```php
$client->operations()->repos()->listCustomDeploymentRuleIntegrations(        environment_name: 'generated',
        repo: 'generated',
        owner: 'generated',
        page: 4,
        per_page: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/deployments/protection-rules#list-custom-deployment-rule-integrations).


### repos/get-custom-deployment-protection-rule

Get a custom deployment protection rule

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/environments/{environment_name}/deployment_protection_rules/{protection_rule_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'environment_name' => 'generated',
        'protection_rule_id' => 18,
]);
```

Operations method:
```php
$client->operations()->repos()->getCustomDeploymentProtectionRule(        owner: 'generated',
        repo: 'generated',
        environment_name: 'generated',
        protection_rule_id: 18,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/deployments/protection-rules#get-a-deployment-protection-rule).


### repos/disable-deployment-protection-rule

Disable a custom protection rule for an environment

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/environments/{environment_name}/deployment_protection_rules/{protection_rule_id}', [
        'environment_name' => 'generated',
        'repo' => 'generated',
        'owner' => 'generated',
        'protection_rule_id' => 18,
]);
```

Operations method:
```php
$client->operations()->repos()->disableDeploymentProtectionRule(        environment_name: 'generated',
        repo: 'generated',
        owner: 'generated',
        protection_rule_id: 18,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/deployments/protection-rules#disable-deployment-protection-rule).


### activity/list-repo-events

List repository events

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/events', [
        'owner' => 'generated',
        'repo' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->activity()->listRepoEvents(        owner: 'generated',
        repo: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/activity#list-repository-events).


### repos/list-forks

List forks

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/forks', [
        'owner' => 'generated',
        'repo' => 'generated',
        'sort' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listForks(        owner: 'generated',
        repo: 'generated',
        sort: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#list-forks).


### repos/create-fork

Create a fork

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/forks', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->createFork(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#create-a-fork).


### git/create-blob

Create a blob

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/git/blobs', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->git()->createBlob(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/git#create-a-blob).


### git/get-blob

Get a blob

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/git/blobs/{file_sha}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'file_sha' => 'generated',
]);
```

Operations method:
```php
$client->operations()->git()->getBlob(        owner: 'generated',
        repo: 'generated',
        file_sha: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/git#get-a-blob).


### git/create-commit

Create a commit

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/git/commits', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->git()->createCommit(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/git#create-a-commit).


### git/get-commit

Get a commit

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/git/commits/{commit_sha}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'commit_sha' => 'generated',
]);
```

Operations method:
```php
$client->operations()->git()->getCommit(        owner: 'generated',
        repo: 'generated',
        commit_sha: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/git#get-a-commit).


### git/list-matching-refs

List matching references

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/git/matching-refs/{ref}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'ref' => 'generated',
]);
```

Operations method:
```php
$client->operations()->git()->listMatchingRefs(        owner: 'generated',
        repo: 'generated',
        ref: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/git#list-matching-references).


### git/get-ref

Get a reference

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/git/ref/{ref}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'ref' => 'generated',
]);
```

Operations method:
```php
$client->operations()->git()->getRef(        owner: 'generated',
        repo: 'generated',
        ref: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/git#get-a-reference).


### git/create-ref

Create a reference

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/git/refs', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->git()->createRef(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/git#create-a-reference).


### git/delete-ref

Delete a reference

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/git/refs/{ref}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'ref' => 'generated',
]);
```

Operations method:
```php
$client->operations()->git()->deleteRef(        owner: 'generated',
        repo: 'generated',
        ref: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/git#delete-a-reference).


### git/update-ref

Update a reference

Using the `call` method:
```php
$client->call('PATCH /repos/{owner}/{repo}/git/refs/{ref}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'ref' => 'generated',
]);
```

Operations method:
```php
$client->operations()->git()->updateRef(        owner: 'generated',
        repo: 'generated',
        ref: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/git#update-a-reference).


### git/create-tag

Create a tag object

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/git/tags', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->git()->createTag(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/git#create-a-tag-object).


### git/get-tag

Get a tag

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/git/tags/{tag_sha}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'tag_sha' => 'generated',
]);
```

Operations method:
```php
$client->operations()->git()->getTag(        owner: 'generated',
        repo: 'generated',
        tag_sha: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/git#get-a-tag).


### git/create-tree

Create a tree

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/git/trees', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->git()->createTree(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/git#create-a-tree).


### git/get-tree

Get a tree

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/git/trees/{tree_sha}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'tree_sha' => 'generated',
        'recursive' => 'generated',
]);
```

Operations method:
```php
$client->operations()->git()->getTree(        owner: 'generated',
        repo: 'generated',
        tree_sha: 'generated',
        recursive: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/git#get-a-tree).


### repos/list-webhooks

List repository webhooks

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/hooks', [
        'owner' => 'generated',
        'repo' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listWebhooks(        owner: 'generated',
        repo: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/webhooks/repos#list-repository-webhooks).


### repos/create-webhook

Create a repository webhook

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/hooks', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->createWebhook(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/webhooks/repos#create-a-repository-webhook).


### repos/get-webhook

Get a repository webhook

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/hooks/{hook_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'hook_id' => 7,
]);
```

Operations method:
```php
$client->operations()->repos()->getWebhook(        owner: 'generated',
        repo: 'generated',
        hook_id: 7,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/webhooks/repos#get-a-repository-webhook).


### repos/delete-webhook

Delete a repository webhook

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/hooks/{hook_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'hook_id' => 7,
]);
```

Operations method:
```php
$client->operations()->repos()->deleteWebhook(        owner: 'generated',
        repo: 'generated',
        hook_id: 7,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/webhooks/repos#delete-a-repository-webhook).


### repos/update-webhook

Update a repository webhook

Using the `call` method:
```php
$client->call('PATCH /repos/{owner}/{repo}/hooks/{hook_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'hook_id' => 7,
]);
```

Operations method:
```php
$client->operations()->repos()->updateWebhook(        owner: 'generated',
        repo: 'generated',
        hook_id: 7,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/webhooks/repos#update-a-repository-webhook).


### repos/get-webhook-config-for-repo

Get a webhook configuration for a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/hooks/{hook_id}/config', [
        'owner' => 'generated',
        'repo' => 'generated',
        'hook_id' => 7,
]);
```

Operations method:
```php
$client->operations()->repos()->getWebhookConfigForRepo(        owner: 'generated',
        repo: 'generated',
        hook_id: 7,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/webhooks/repo-config#get-a-webhook-configuration-for-a-repository).


### repos/update-webhook-config-for-repo

Update a webhook configuration for a repository

Using the `call` method:
```php
$client->call('PATCH /repos/{owner}/{repo}/hooks/{hook_id}/config', [
        'owner' => 'generated',
        'repo' => 'generated',
        'hook_id' => 7,
]);
```

Operations method:
```php
$client->operations()->repos()->updateWebhookConfigForRepo(        owner: 'generated',
        repo: 'generated',
        hook_id: 7,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/webhooks/repo-config#update-a-webhook-configuration-for-a-repository).


### repos/list-webhook-deliveries

List deliveries for a repository webhook

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/hooks/{hook_id}/deliveries', [
        'owner' => 'generated',
        'repo' => 'generated',
        'hook_id' => 7,
        'cursor' => 'generated',
        'redelivery' => ,
        'per_page' => 8,
]);
```

Operations method:
```php
$client->operations()->repos()->listWebhookDeliveries(        owner: 'generated',
        repo: 'generated',
        hook_id: 7,
        cursor: 'generated',
        redelivery: ,
        per_page: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/webhooks/repo-deliveries#list-deliveries-for-a-repository-webhook).


### repos/get-webhook-delivery

Get a delivery for a repository webhook

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/hooks/{hook_id}/deliveries/{delivery_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'hook_id' => 7,
        'delivery_id' => 11,
]);
```

Operations method:
```php
$client->operations()->repos()->getWebhookDelivery(        owner: 'generated',
        repo: 'generated',
        hook_id: 7,
        delivery_id: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/webhooks/repo-deliveries#get-a-delivery-for-a-repository-webhook).


### repos/redeliver-webhook-delivery

Redeliver a delivery for a repository webhook

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/hooks/{hook_id}/deliveries/{delivery_id}/attempts', [
        'owner' => 'generated',
        'repo' => 'generated',
        'hook_id' => 7,
        'delivery_id' => 11,
]);
```

Operations method:
```php
$client->operations()->repos()->redeliverWebhookDelivery(        owner: 'generated',
        repo: 'generated',
        hook_id: 7,
        delivery_id: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/webhooks/repo-deliveries#redeliver-a-delivery-for-a-repository-webhook).


### repos/ping-webhook

Ping a repository webhook

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/hooks/{hook_id}/pings', [
        'owner' => 'generated',
        'repo' => 'generated',
        'hook_id' => 7,
]);
```

Operations method:
```php
$client->operations()->repos()->pingWebhook(        owner: 'generated',
        repo: 'generated',
        hook_id: 7,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/webhooks/repos#ping-a-repository-webhook).


### repos/test-push-webhook

Test the push repository webhook

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/hooks/{hook_id}/tests', [
        'owner' => 'generated',
        'repo' => 'generated',
        'hook_id' => 7,
]);
```

Operations method:
```php
$client->operations()->repos()->testPushWebhook(        owner: 'generated',
        repo: 'generated',
        hook_id: 7,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/webhooks/repos#test-the-push-repository-webhook).


### migrations/get-import-status

Get an import status

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/import', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->migrations()->getImportStatus(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/migrations/source-imports#get-an-import-status).


### migrations/start-import

Start an import

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/import', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->migrations()->startImport(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/migrations/source-imports#start-an-import).


### migrations/cancel-import

Cancel an import

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/import', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->migrations()->cancelImport(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/migrations/source-imports#cancel-an-import).


### migrations/update-import

Update an import

Using the `call` method:
```php
$client->call('PATCH /repos/{owner}/{repo}/import', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->migrations()->updateImport(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/migrations/source-imports#update-an-import).


### migrations/get-commit-authors

Get commit authors

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/import/authors', [
        'owner' => 'generated',
        'repo' => 'generated',
        'since' => 5,
]);
```

Operations method:
```php
$client->operations()->migrations()->getCommitAuthors(        owner: 'generated',
        repo: 'generated',
        since: 5,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/migrations/source-imports#get-commit-authors).


### migrations/map-commit-author

Map a commit author

Using the `call` method:
```php
$client->call('PATCH /repos/{owner}/{repo}/import/authors/{author_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'author_id' => 9,
]);
```

Operations method:
```php
$client->operations()->migrations()->mapCommitAuthor(        owner: 'generated',
        repo: 'generated',
        author_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/migrations/source-imports#map-a-commit-author).


### migrations/get-large-files

Get large files

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/import/large_files', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->migrations()->getLargeFiles(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/migrations/source-imports#get-large-files).


### migrations/set-lfs-preference

Update Git LFS preference

Using the `call` method:
```php
$client->call('PATCH /repos/{owner}/{repo}/import/lfs', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->migrations()->setLfsPreference(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/migrations/source-imports#update-git-lfs-preference).


### apps/get-repo-installation

Get a repository installation for the authenticated app

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/installation', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->apps()->getRepoInstallation(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/apps#get-a-repository-installation-for-the-authenticated-app).


### interactions/get-restrictions-for-repo

Get interaction restrictions for a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/interaction-limits', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->interactions()->getRestrictionsForRepo(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/interactions#get-interaction-restrictions-for-a-repository).


### interactions/set-restrictions-for-repo

Set interaction restrictions for a repository

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/interaction-limits', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->interactions()->setRestrictionsForRepo(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/interactions#set-interaction-restrictions-for-a-repository).


### interactions/remove-restrictions-for-repo

Remove interaction restrictions for a repository

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/interaction-limits', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->interactions()->removeRestrictionsForRepo(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/interactions#remove-interaction-restrictions-for-a-repository).


### repos/list-invitations

List repository invitations

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/invitations', [
        'owner' => 'generated',
        'repo' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listInvitations(        owner: 'generated',
        repo: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/collaborators/invitations#list-repository-invitations).


### repos/delete-invitation

Delete a repository invitation

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/invitations/{invitation_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'invitation_id' => 13,
]);
```

Operations method:
```php
$client->operations()->repos()->deleteInvitation(        owner: 'generated',
        repo: 'generated',
        invitation_id: 13,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/collaborators/invitations#delete-a-repository-invitation).


### repos/update-invitation

Update a repository invitation

Using the `call` method:
```php
$client->call('PATCH /repos/{owner}/{repo}/invitations/{invitation_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'invitation_id' => 13,
]);
```

Operations method:
```php
$client->operations()->repos()->updateInvitation(        owner: 'generated',
        repo: 'generated',
        invitation_id: 13,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/collaborators/invitations#update-a-repository-invitation).


### issues/list-for-repo

List repository issues

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/issues', [
        'owner' => 'generated',
        'repo' => 'generated',
        'milestone' => 'generated',
        'assignee' => 'generated',
        'creator' => 'generated',
        'mentioned' => 'generated',
        'labels' => 'generated',
        'since' => '1970-01-01T00:00:00+00:00',
        'state' => 'generated',
        'sort' => 'generated',
        'direction' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->issues()->listForRepo(        owner: 'generated',
        repo: 'generated',
        milestone: 'generated',
        assignee: 'generated',
        creator: 'generated',
        mentioned: 'generated',
        labels: 'generated',
        since: '1970-01-01T00:00:00+00:00',
        state: 'generated',
        sort: 'generated',
        direction: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/issues#list-repository-issues).


### issues/create

Create an issue

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/issues', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->issues()->create(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/issues#create-an-issue).


### issues/list-comments-for-repo

List issue comments for a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/issues/comments', [
        'owner' => 'generated',
        'repo' => 'generated',
        'direction' => 'generated',
        'since' => '1970-01-01T00:00:00+00:00',
        'sort' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->issues()->listCommentsForRepo(        owner: 'generated',
        repo: 'generated',
        direction: 'generated',
        since: '1970-01-01T00:00:00+00:00',
        sort: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/issues#list-issue-comments-for-a-repository).


### issues/get-comment

Get an issue comment

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/issues/comments/{comment_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'comment_id' => 10,
]);
```

Operations method:
```php
$client->operations()->issues()->getComment(        owner: 'generated',
        repo: 'generated',
        comment_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/issues#get-an-issue-comment).


### issues/delete-comment

Delete an issue comment

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/issues/comments/{comment_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'comment_id' => 10,
]);
```

Operations method:
```php
$client->operations()->issues()->deleteComment(        owner: 'generated',
        repo: 'generated',
        comment_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/issues#delete-an-issue-comment).


### issues/update-comment

Update an issue comment

Using the `call` method:
```php
$client->call('PATCH /repos/{owner}/{repo}/issues/comments/{comment_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'comment_id' => 10,
]);
```

Operations method:
```php
$client->operations()->issues()->updateComment(        owner: 'generated',
        repo: 'generated',
        comment_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/issues#update-an-issue-comment).


### reactions/list-for-issue-comment

List reactions for an issue comment

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/issues/comments/{comment_id}/reactions', [
        'owner' => 'generated',
        'repo' => 'generated',
        'comment_id' => 10,
        'content' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->reactions()->listForIssueComment(        owner: 'generated',
        repo: 'generated',
        comment_id: 10,
        content: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/reactions#list-reactions-for-an-issue-comment).


### reactions/create-for-issue-comment

Create reaction for an issue comment

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/issues/comments/{comment_id}/reactions', [
        'owner' => 'generated',
        'repo' => 'generated',
        'comment_id' => 10,
]);
```

Operations method:
```php
$client->operations()->reactions()->createForIssueComment(        owner: 'generated',
        repo: 'generated',
        comment_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/reactions#create-reaction-for-an-issue-comment).


### reactions/delete-for-issue-comment

Delete an issue comment reaction

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/issues/comments/{comment_id}/reactions/{reaction_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'comment_id' => 10,
        'reaction_id' => 11,
]);
```

Operations method:
```php
$client->operations()->reactions()->deleteForIssueComment(        owner: 'generated',
        repo: 'generated',
        comment_id: 10,
        reaction_id: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/reactions#delete-an-issue-comment-reaction).


### issues/list-events-for-repo

List issue events for a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/issues/events', [
        'owner' => 'generated',
        'repo' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->issues()->listEventsForRepo(        owner: 'generated',
        repo: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/issues#list-issue-events-for-a-repository).


### issues/get-event

Get an issue event

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/issues/events/{event_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'event_id' => 8,
]);
```

Operations method:
```php
$client->operations()->issues()->getEvent(        owner: 'generated',
        repo: 'generated',
        event_id: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/issues#get-an-issue-event).


### issues/get

Get an issue

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/issues/{issue_number}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'issue_number' => 12,
]);
```

Operations method:
```php
$client->operations()->issues()->get(        owner: 'generated',
        repo: 'generated',
        issue_number: 12,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/issues#get-an-issue).


### issues/update

Update an issue

Using the `call` method:
```php
$client->call('PATCH /repos/{owner}/{repo}/issues/{issue_number}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'issue_number' => 12,
]);
```

Operations method:
```php
$client->operations()->issues()->update(        owner: 'generated',
        repo: 'generated',
        issue_number: 12,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/issues#update-an-issue).


### issues/add-assignees

Add assignees to an issue

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/issues/{issue_number}/assignees', [
        'owner' => 'generated',
        'repo' => 'generated',
        'issue_number' => 12,
]);
```

Operations method:
```php
$client->operations()->issues()->addAssignees(        owner: 'generated',
        repo: 'generated',
        issue_number: 12,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/issues#add-assignees-to-an-issue).


### issues/remove-assignees

Remove assignees from an issue

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/issues/{issue_number}/assignees', [
        'owner' => 'generated',
        'repo' => 'generated',
        'issue_number' => 12,
]);
```

Operations method:
```php
$client->operations()->issues()->removeAssignees(        owner: 'generated',
        repo: 'generated',
        issue_number: 12,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/issues#remove-assignees-from-an-issue).


### issues/check-user-can-be-assigned-to-issue

Check if a user can be assigned to a issue

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/issues/{issue_number}/assignees/{assignee}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'issue_number' => 12,
        'assignee' => 'generated',
]);
```

Operations method:
```php
$client->operations()->issues()->checkUserCanBeAssignedToIssue(        owner: 'generated',
        repo: 'generated',
        issue_number: 12,
        assignee: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/issues#check-if-a-user-can-be-assigned-to-a-issue).


### issues/list-comments

List issue comments

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/issues/{issue_number}/comments', [
        'owner' => 'generated',
        'repo' => 'generated',
        'issue_number' => 12,
        'since' => '1970-01-01T00:00:00+00:00',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->issues()->listComments(        owner: 'generated',
        repo: 'generated',
        issue_number: 12,
        since: '1970-01-01T00:00:00+00:00',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/issues#list-issue-comments).


### issues/create-comment

Create an issue comment

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/issues/{issue_number}/comments', [
        'owner' => 'generated',
        'repo' => 'generated',
        'issue_number' => 12,
]);
```

Operations method:
```php
$client->operations()->issues()->createComment(        owner: 'generated',
        repo: 'generated',
        issue_number: 12,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/issues#create-an-issue-comment).


### issues/list-events

List issue events

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/issues/{issue_number}/events', [
        'owner' => 'generated',
        'repo' => 'generated',
        'issue_number' => 12,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->issues()->listEvents(        owner: 'generated',
        repo: 'generated',
        issue_number: 12,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/issues#list-issue-events).


### issues/list-labels-on-issue

List labels for an issue

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/issues/{issue_number}/labels', [
        'owner' => 'generated',
        'repo' => 'generated',
        'issue_number' => 12,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->issues()->listLabelsOnIssue(        owner: 'generated',
        repo: 'generated',
        issue_number: 12,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/issues#list-labels-for-an-issue).


### issues/set-labels

Set labels for an issue

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/issues/{issue_number}/labels', [
        'owner' => 'generated',
        'repo' => 'generated',
        'issue_number' => 12,
]);
```

Operations method:
```php
$client->operations()->issues()->setLabels(        owner: 'generated',
        repo: 'generated',
        issue_number: 12,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/issues#set-labels-for-an-issue).


### issues/add-labels

Add labels to an issue

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/issues/{issue_number}/labels', [
        'owner' => 'generated',
        'repo' => 'generated',
        'issue_number' => 12,
]);
```

Operations method:
```php
$client->operations()->issues()->addLabels(        owner: 'generated',
        repo: 'generated',
        issue_number: 12,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/issues#add-labels-to-an-issue).


### issues/remove-all-labels

Remove all labels from an issue

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/issues/{issue_number}/labels', [
        'owner' => 'generated',
        'repo' => 'generated',
        'issue_number' => 12,
]);
```

Operations method:
```php
$client->operations()->issues()->removeAllLabels(        owner: 'generated',
        repo: 'generated',
        issue_number: 12,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/issues#remove-all-labels-from-an-issue).


### issues/remove-label

Remove a label from an issue

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/issues/{issue_number}/labels/{name}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'issue_number' => 12,
        'name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->issues()->removeLabel(        owner: 'generated',
        repo: 'generated',
        issue_number: 12,
        name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/issues#remove-a-label-from-an-issue).


### issues/lock

Lock an issue

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/issues/{issue_number}/lock', [
        'owner' => 'generated',
        'repo' => 'generated',
        'issue_number' => 12,
]);
```

Operations method:
```php
$client->operations()->issues()->lock(        owner: 'generated',
        repo: 'generated',
        issue_number: 12,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/issues#lock-an-issue).


### issues/unlock

Unlock an issue

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/issues/{issue_number}/lock', [
        'owner' => 'generated',
        'repo' => 'generated',
        'issue_number' => 12,
]);
```

Operations method:
```php
$client->operations()->issues()->unlock(        owner: 'generated',
        repo: 'generated',
        issue_number: 12,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/issues#unlock-an-issue).


### reactions/list-for-issue

List reactions for an issue

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/issues/{issue_number}/reactions', [
        'owner' => 'generated',
        'repo' => 'generated',
        'issue_number' => 12,
        'content' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->reactions()->listForIssue(        owner: 'generated',
        repo: 'generated',
        issue_number: 12,
        content: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/reactions#list-reactions-for-an-issue).


### reactions/create-for-issue

Create reaction for an issue

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/issues/{issue_number}/reactions', [
        'owner' => 'generated',
        'repo' => 'generated',
        'issue_number' => 12,
]);
```

Operations method:
```php
$client->operations()->reactions()->createForIssue(        owner: 'generated',
        repo: 'generated',
        issue_number: 12,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/reactions#create-reaction-for-an-issue).


### reactions/delete-for-issue

Delete an issue reaction

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/issues/{issue_number}/reactions/{reaction_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'issue_number' => 12,
        'reaction_id' => 11,
]);
```

Operations method:
```php
$client->operations()->reactions()->deleteForIssue(        owner: 'generated',
        repo: 'generated',
        issue_number: 12,
        reaction_id: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/reactions#delete-an-issue-reaction).


### issues/list-events-for-timeline

List timeline events for an issue

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/issues/{issue_number}/timeline', [
        'owner' => 'generated',
        'repo' => 'generated',
        'issue_number' => 12,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->issues()->listEventsForTimeline(        owner: 'generated',
        repo: 'generated',
        issue_number: 12,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/issues#list-timeline-events-for-an-issue).


### repos/list-deploy-keys

List deploy keys

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/keys', [
        'owner' => 'generated',
        'repo' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listDeployKeys(        owner: 'generated',
        repo: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/deploy-keys#list-deploy-keys).


### repos/create-deploy-key

Create a deploy key

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/keys', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->createDeployKey(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/deploy-keys#create-a-deploy-key).


### repos/get-deploy-key

Get a deploy key

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/keys/{key_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'key_id' => 6,
]);
```

Operations method:
```php
$client->operations()->repos()->getDeployKey(        owner: 'generated',
        repo: 'generated',
        key_id: 6,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/deploy-keys#get-a-deploy-key).


### repos/delete-deploy-key

Delete a deploy key

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/keys/{key_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'key_id' => 6,
]);
```

Operations method:
```php
$client->operations()->repos()->deleteDeployKey(        owner: 'generated',
        repo: 'generated',
        key_id: 6,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/deploy-keys#delete-a-deploy-key).


### issues/list-labels-for-repo

List labels for a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/labels', [
        'owner' => 'generated',
        'repo' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->issues()->listLabelsForRepo(        owner: 'generated',
        repo: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/issues#list-labels-for-a-repository).


### issues/create-label

Create a label

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/labels', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->issues()->createLabel(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/issues#create-a-label).


### issues/get-label

Get a label

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/labels/{name}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->issues()->getLabel(        owner: 'generated',
        repo: 'generated',
        name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/issues#get-a-label).


### issues/delete-label

Delete a label

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/labels/{name}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->issues()->deleteLabel(        owner: 'generated',
        repo: 'generated',
        name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/issues#delete-a-label).


### issues/update-label

Update a label

Using the `call` method:
```php
$client->call('PATCH /repos/{owner}/{repo}/labels/{name}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->issues()->updateLabel(        owner: 'generated',
        repo: 'generated',
        name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/issues#update-a-label).


### repos/list-languages

List repository languages

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/languages', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->listLanguages(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#list-repository-languages).


### repos/enable-lfs-for-repo

Enable Git LFS for a repository

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/lfs', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->enableLfsForRepo(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#enable-git-lfs-for-a-repository).


### repos/disable-lfs-for-repo

Disable Git LFS for a repository

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/lfs', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->disableLfsForRepo(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#disable-git-lfs-for-a-repository).


### licenses/get-for-repo

Get the license for a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/license', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->licenses()->getForRepo(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/licenses/#get-the-license-for-a-repository).


### repos/merge-upstream

Sync a fork branch with the upstream repository

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/merge-upstream', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->mergeUpstream(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/branches/branches#sync-a-fork-branch-with-the-upstream-repository).


### repos/merge

Merge a branch

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/merges', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->merge(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/branches/branches#merge-a-branch).


### issues/list-milestones

List milestones

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/milestones', [
        'owner' => 'generated',
        'repo' => 'generated',
        'state' => 'generated',
        'sort' => 'generated',
        'direction' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->issues()->listMilestones(        owner: 'generated',
        repo: 'generated',
        state: 'generated',
        sort: 'generated',
        direction: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/issues#list-milestones).


### issues/create-milestone

Create a milestone

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/milestones', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->issues()->createMilestone(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/issues#create-a-milestone).


### issues/get-milestone

Get a milestone

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/milestones/{milestone_number}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'milestone_number' => 16,
]);
```

Operations method:
```php
$client->operations()->issues()->getMilestone(        owner: 'generated',
        repo: 'generated',
        milestone_number: 16,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/issues#get-a-milestone).


### issues/delete-milestone

Delete a milestone

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/milestones/{milestone_number}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'milestone_number' => 16,
]);
```

Operations method:
```php
$client->operations()->issues()->deleteMilestone(        owner: 'generated',
        repo: 'generated',
        milestone_number: 16,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/issues#delete-a-milestone).


### issues/update-milestone

Update a milestone

Using the `call` method:
```php
$client->call('PATCH /repos/{owner}/{repo}/milestones/{milestone_number}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'milestone_number' => 16,
]);
```

Operations method:
```php
$client->operations()->issues()->updateMilestone(        owner: 'generated',
        repo: 'generated',
        milestone_number: 16,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/issues#update-a-milestone).


### issues/list-labels-for-milestone

List labels for issues in a milestone

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/milestones/{milestone_number}/labels', [
        'owner' => 'generated',
        'repo' => 'generated',
        'milestone_number' => 16,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->issues()->listLabelsForMilestone(        owner: 'generated',
        repo: 'generated',
        milestone_number: 16,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/issues#list-labels-for-issues-in-a-milestone).


### activity/list-repo-notifications-for-authenticated-user

List repository notifications for the authenticated user

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/notifications', [
        'owner' => 'generated',
        'repo' => 'generated',
        'since' => '1970-01-01T00:00:00+00:00',
        'before' => '1970-01-01T00:00:00+00:00',
        'all' => ,
        'participating' => ,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->activity()->listRepoNotificationsForAuthenticatedUser(        owner: 'generated',
        repo: 'generated',
        since: '1970-01-01T00:00:00+00:00',
        before: '1970-01-01T00:00:00+00:00',
        all: ,
        participating: ,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/activity#list-repository-notifications-for-the-authenticated-user).


### activity/mark-repo-notifications-as-read

Mark repository notifications as read

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/notifications', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->activity()->markRepoNotificationsAsRead(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/activity#mark-repository-notifications-as-read).


### repos/get-pages

Get a GitHub Pages site

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/pages', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getPages(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/pages#get-a-github-pages-site).


### repos/update-information-about-pages-site

Update information about a GitHub Pages site

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/pages', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->updateInformationAboutPagesSite(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/pages#update-information-about-a-github-pages-site).


### repos/create-pages-site

Create a GitHub Pages site

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/pages', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->createPagesSite(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/pages#create-a-github-pages-site).


### repos/delete-pages-site

Delete a GitHub Pages site

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/pages', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->deletePagesSite(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/pages#delete-a-github-pages-site).


### repos/list-pages-builds

List GitHub Pages builds

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/pages/builds', [
        'owner' => 'generated',
        'repo' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listPagesBuilds(        owner: 'generated',
        repo: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/pages#list-github-pages-builds).


### repos/request-pages-build

Request a GitHub Pages build

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/pages/builds', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->requestPagesBuild(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/pages#request-a-github-pages-build).


### repos/get-latest-pages-build

Get latest Pages build

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/pages/builds/latest', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getLatestPagesBuild(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/pages#get-latest-pages-build).


### repos/get-pages-build

Get GitHub Pages build

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/pages/builds/{build_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'build_id' => 8,
]);
```

Operations method:
```php
$client->operations()->repos()->getPagesBuild(        owner: 'generated',
        repo: 'generated',
        build_id: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/pages#get-github-pages-build).


### repos/create-pages-deployment

Create a GitHub Pages deployment

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/pages/deployment', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->createPagesDeployment(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/pages#create-a-github-pages-deployment).


### repos/get-pages-health-check

Get a DNS health check for GitHub Pages

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/pages/health', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getPagesHealthCheck(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/pages#get-a-dns-health-check-for-github-pages).


### projects/list-for-repo

List repository projects

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/projects', [
        'owner' => 'generated',
        'repo' => 'generated',
        'state' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->projects()->listForRepo(        owner: 'generated',
        repo: 'generated',
        state: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/projects#list-repository-projects).


### projects/create-for-repo

Create a repository project

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/projects', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->projects()->createForRepo(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/projects#create-a-repository-project).


### pulls/list

List pull requests

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/pulls', [
        'owner' => 'generated',
        'repo' => 'generated',
        'head' => 'generated',
        'base' => 'generated',
        'direction' => 'generated',
        'state' => 'generated',
        'sort' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->pulls()->list(        owner: 'generated',
        repo: 'generated',
        head: 'generated',
        base: 'generated',
        direction: 'generated',
        state: 'generated',
        sort: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/pulls#list-pull-requests).


### pulls/create

Create a pull request

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/pulls', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->pulls()->create(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/pulls#create-a-pull-request).


### pulls/list-review-comments-for-repo

List review comments in a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/pulls/comments', [
        'owner' => 'generated',
        'repo' => 'generated',
        'sort' => 'generated',
        'direction' => 'generated',
        'since' => '1970-01-01T00:00:00+00:00',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->pulls()->listReviewCommentsForRepo(        owner: 'generated',
        repo: 'generated',
        sort: 'generated',
        direction: 'generated',
        since: '1970-01-01T00:00:00+00:00',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/pulls#list-review-comments-in-a-repository).


### pulls/get-review-comment

Get a review comment for a pull request

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/pulls/comments/{comment_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'comment_id' => 10,
]);
```

Operations method:
```php
$client->operations()->pulls()->getReviewComment(        owner: 'generated',
        repo: 'generated',
        comment_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/pulls#get-a-review-comment-for-a-pull-request).


### pulls/delete-review-comment

Delete a review comment for a pull request

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/pulls/comments/{comment_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'comment_id' => 10,
]);
```

Operations method:
```php
$client->operations()->pulls()->deleteReviewComment(        owner: 'generated',
        repo: 'generated',
        comment_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/pulls#delete-a-review-comment-for-a-pull-request).


### pulls/update-review-comment

Update a review comment for a pull request

Using the `call` method:
```php
$client->call('PATCH /repos/{owner}/{repo}/pulls/comments/{comment_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'comment_id' => 10,
]);
```

Operations method:
```php
$client->operations()->pulls()->updateReviewComment(        owner: 'generated',
        repo: 'generated',
        comment_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/pulls#update-a-review-comment-for-a-pull-request).


### reactions/list-for-pull-request-review-comment

List reactions for a pull request review comment

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/pulls/comments/{comment_id}/reactions', [
        'owner' => 'generated',
        'repo' => 'generated',
        'comment_id' => 10,
        'content' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->reactions()->listForPullRequestReviewComment(        owner: 'generated',
        repo: 'generated',
        comment_id: 10,
        content: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/reactions#list-reactions-for-a-pull-request-review-comment).


### reactions/create-for-pull-request-review-comment

Create reaction for a pull request review comment

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/pulls/comments/{comment_id}/reactions', [
        'owner' => 'generated',
        'repo' => 'generated',
        'comment_id' => 10,
]);
```

Operations method:
```php
$client->operations()->reactions()->createForPullRequestReviewComment(        owner: 'generated',
        repo: 'generated',
        comment_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/reactions#create-reaction-for-a-pull-request-review-comment).


### reactions/delete-for-pull-request-comment

Delete a pull request comment reaction

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/pulls/comments/{comment_id}/reactions/{reaction_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'comment_id' => 10,
        'reaction_id' => 11,
]);
```

Operations method:
```php
$client->operations()->reactions()->deleteForPullRequestComment(        owner: 'generated',
        repo: 'generated',
        comment_id: 10,
        reaction_id: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/reactions#delete-a-pull-request-comment-reaction).


### pulls/get

Get a pull request

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/pulls/{pull_number}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'pull_number' => 11,
]);
```

Operations method:
```php
$client->operations()->pulls()->get(        owner: 'generated',
        repo: 'generated',
        pull_number: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/pulls#get-a-pull-request).


### pulls/update

Update a pull request

Using the `call` method:
```php
$client->call('PATCH /repos/{owner}/{repo}/pulls/{pull_number}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'pull_number' => 11,
]);
```

Operations method:
```php
$client->operations()->pulls()->update(        owner: 'generated',
        repo: 'generated',
        pull_number: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/pulls/#update-a-pull-request).


### codespaces/create-with-pr-for-authenticated-user

Create a codespace from a pull request

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/pulls/{pull_number}/codespaces', [
        'owner' => 'generated',
        'repo' => 'generated',
        'pull_number' => 11,
]);
```

Operations method:
```php
$client->operations()->codespaces()->createWithPrForAuthenticatedUser(        owner: 'generated',
        repo: 'generated',
        pull_number: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/codespaces#create-a-codespace-from-a-pull-request).


### pulls/list-review-comments

List review comments on a pull request

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/pulls/{pull_number}/comments', [
        'owner' => 'generated',
        'repo' => 'generated',
        'pull_number' => 11,
        'direction' => 'generated',
        'since' => '1970-01-01T00:00:00+00:00',
        'sort' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->pulls()->listReviewComments(        owner: 'generated',
        repo: 'generated',
        pull_number: 11,
        direction: 'generated',
        since: '1970-01-01T00:00:00+00:00',
        sort: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/pulls#list-review-comments-on-a-pull-request).


### pulls/create-review-comment

Create a review comment for a pull request

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/pulls/{pull_number}/comments', [
        'owner' => 'generated',
        'repo' => 'generated',
        'pull_number' => 11,
]);
```

Operations method:
```php
$client->operations()->pulls()->createReviewComment(        owner: 'generated',
        repo: 'generated',
        pull_number: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/pulls#create-a-review-comment-for-a-pull-request).


### pulls/create-reply-for-review-comment

Create a reply for a review comment

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/pulls/{pull_number}/comments/{comment_id}/replies', [
        'owner' => 'generated',
        'repo' => 'generated',
        'pull_number' => 11,
        'comment_id' => 10,
]);
```

Operations method:
```php
$client->operations()->pulls()->createReplyForReviewComment(        owner: 'generated',
        repo: 'generated',
        pull_number: 11,
        comment_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/pulls#create-a-reply-for-a-review-comment).


### pulls/list-commits

List commits on a pull request

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/pulls/{pull_number}/commits', [
        'owner' => 'generated',
        'repo' => 'generated',
        'pull_number' => 11,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->pulls()->listCommits(        owner: 'generated',
        repo: 'generated',
        pull_number: 11,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/pulls#list-commits-on-a-pull-request).


### pulls/list-files

List pull requests files

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/pulls/{pull_number}/files', [
        'owner' => 'generated',
        'repo' => 'generated',
        'pull_number' => 11,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->pulls()->listFiles(        owner: 'generated',
        repo: 'generated',
        pull_number: 11,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/pulls#list-pull-requests-files).


### pulls/check-if-merged

Check if a pull request has been merged

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/pulls/{pull_number}/merge', [
        'owner' => 'generated',
        'repo' => 'generated',
        'pull_number' => 11,
]);
```

Operations method:
```php
$client->operations()->pulls()->checkIfMerged(        owner: 'generated',
        repo: 'generated',
        pull_number: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/pulls#check-if-a-pull-request-has-been-merged).


### pulls/merge

Merge a pull request

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/pulls/{pull_number}/merge', [
        'owner' => 'generated',
        'repo' => 'generated',
        'pull_number' => 11,
]);
```

Operations method:
```php
$client->operations()->pulls()->merge(        owner: 'generated',
        repo: 'generated',
        pull_number: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/pulls#merge-a-pull-request).


### pulls/list-requested-reviewers

Get all requested reviewers for a pull request

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/pulls/{pull_number}/requested_reviewers', [
        'owner' => 'generated',
        'repo' => 'generated',
        'pull_number' => 11,
]);
```

Operations method:
```php
$client->operations()->pulls()->listRequestedReviewers(        owner: 'generated',
        repo: 'generated',
        pull_number: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/pulls#get-all-requested-reviewers-for-a-pull-request).


### pulls/request-reviewers

Request reviewers for a pull request

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/pulls/{pull_number}/requested_reviewers', [
        'owner' => 'generated',
        'repo' => 'generated',
        'pull_number' => 11,
]);
```

Operations method:
```php
$client->operations()->pulls()->requestReviewers(        owner: 'generated',
        repo: 'generated',
        pull_number: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/pulls#request-reviewers-for-a-pull-request).


### pulls/remove-requested-reviewers

Remove requested reviewers from a pull request

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/pulls/{pull_number}/requested_reviewers', [
        'owner' => 'generated',
        'repo' => 'generated',
        'pull_number' => 11,
]);
```

Operations method:
```php
$client->operations()->pulls()->removeRequestedReviewers(        owner: 'generated',
        repo: 'generated',
        pull_number: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/pulls#remove-requested-reviewers-from-a-pull-request).


### pulls/list-reviews

List reviews for a pull request

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/pulls/{pull_number}/reviews', [
        'owner' => 'generated',
        'repo' => 'generated',
        'pull_number' => 11,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->pulls()->listReviews(        owner: 'generated',
        repo: 'generated',
        pull_number: 11,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/pulls#list-reviews-for-a-pull-request).


### pulls/create-review

Create a review for a pull request

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/pulls/{pull_number}/reviews', [
        'owner' => 'generated',
        'repo' => 'generated',
        'pull_number' => 11,
]);
```

Operations method:
```php
$client->operations()->pulls()->createReview(        owner: 'generated',
        repo: 'generated',
        pull_number: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/pulls#create-a-review-for-a-pull-request).


### pulls/get-review

Get a review for a pull request

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'pull_number' => 11,
        'review_id' => 9,
]);
```

Operations method:
```php
$client->operations()->pulls()->getReview(        owner: 'generated',
        repo: 'generated',
        pull_number: 11,
        review_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/pulls#get-a-review-for-a-pull-request).


### pulls/update-review

Update a review for a pull request

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'pull_number' => 11,
        'review_id' => 9,
]);
```

Operations method:
```php
$client->operations()->pulls()->updateReview(        owner: 'generated',
        repo: 'generated',
        pull_number: 11,
        review_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/pulls#update-a-review-for-a-pull-request).


### pulls/delete-pending-review

Delete a pending review for a pull request

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'pull_number' => 11,
        'review_id' => 9,
]);
```

Operations method:
```php
$client->operations()->pulls()->deletePendingReview(        owner: 'generated',
        repo: 'generated',
        pull_number: 11,
        review_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/pulls#delete-a-pending-review-for-a-pull-request).


### pulls/list-comments-for-review

List comments for a pull request review

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}/comments', [
        'owner' => 'generated',
        'repo' => 'generated',
        'pull_number' => 11,
        'review_id' => 9,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->pulls()->listCommentsForReview(        owner: 'generated',
        repo: 'generated',
        pull_number: 11,
        review_id: 9,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/pulls#list-comments-for-a-pull-request-review).


### pulls/dismiss-review

Dismiss a review for a pull request

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}/dismissals', [
        'owner' => 'generated',
        'repo' => 'generated',
        'pull_number' => 11,
        'review_id' => 9,
]);
```

Operations method:
```php
$client->operations()->pulls()->dismissReview(        owner: 'generated',
        repo: 'generated',
        pull_number: 11,
        review_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/pulls#dismiss-a-review-for-a-pull-request).


### pulls/submit-review

Submit a review for a pull request

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}/events', [
        'owner' => 'generated',
        'repo' => 'generated',
        'pull_number' => 11,
        'review_id' => 9,
]);
```

Operations method:
```php
$client->operations()->pulls()->submitReview(        owner: 'generated',
        repo: 'generated',
        pull_number: 11,
        review_id: 9,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/pulls#submit-a-review-for-a-pull-request).


### pulls/update-branch

Update a pull request branch

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/pulls/{pull_number}/update-branch', [
        'owner' => 'generated',
        'repo' => 'generated',
        'pull_number' => 11,
]);
```

Operations method:
```php
$client->operations()->pulls()->updateBranch(        owner: 'generated',
        repo: 'generated',
        pull_number: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/pulls#update-a-pull-request-branch).


### repos/get-readme

Get a repository README

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/readme', [
        'owner' => 'generated',
        'repo' => 'generated',
        'ref' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getReadme(        owner: 'generated',
        repo: 'generated',
        ref: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#get-a-repository-readme).


### repos/get-readme-in-directory

Get a repository README for a directory

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/readme/{dir}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'dir' => 'generated',
        'ref' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getReadmeInDirectory(        owner: 'generated',
        repo: 'generated',
        dir: 'generated',
        ref: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#get-a-repository-directory-readme).


### repos/list-releases

List releases

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/releases', [
        'owner' => 'generated',
        'repo' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listReleases(        owner: 'generated',
        repo: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#list-releases).


### repos/create-release

Create a release

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/releases', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->createRelease(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/releases/releases#create-a-release).


### repos/get-release-asset

Get a release asset

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/releases/assets/{asset_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'asset_id' => 8,
]);
```

Operations method:
```php
$client->operations()->repos()->getReleaseAsset(        owner: 'generated',
        repo: 'generated',
        asset_id: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#get-a-release-asset).


### repos/delete-release-asset

Delete a release asset

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/releases/assets/{asset_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'asset_id' => 8,
]);
```

Operations method:
```php
$client->operations()->repos()->deleteReleaseAsset(        owner: 'generated',
        repo: 'generated',
        asset_id: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#delete-a-release-asset).


### repos/update-release-asset

Update a release asset

Using the `call` method:
```php
$client->call('PATCH /repos/{owner}/{repo}/releases/assets/{asset_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'asset_id' => 8,
]);
```

Operations method:
```php
$client->operations()->repos()->updateReleaseAsset(        owner: 'generated',
        repo: 'generated',
        asset_id: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#update-a-release-asset).


### repos/generate-release-notes

Generate release notes content for a release

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/releases/generate-notes', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->generateReleaseNotes(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#generate-release-notes).


### repos/get-latest-release

Get the latest release

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/releases/latest', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getLatestRelease(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#get-the-latest-release).


### repos/get-release-by-tag

Get a release by tag name

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/releases/tags/{tag}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'tag' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getReleaseByTag(        owner: 'generated',
        repo: 'generated',
        tag: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#get-a-release-by-tag-name).


### repos/get-release

Get a release

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/releases/{release_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'release_id' => 10,
]);
```

Operations method:
```php
$client->operations()->repos()->getRelease(        owner: 'generated',
        repo: 'generated',
        release_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#get-a-release).


### repos/delete-release

Delete a release

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/releases/{release_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'release_id' => 10,
]);
```

Operations method:
```php
$client->operations()->repos()->deleteRelease(        owner: 'generated',
        repo: 'generated',
        release_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#delete-a-release).


### repos/update-release

Update a release

Using the `call` method:
```php
$client->call('PATCH /repos/{owner}/{repo}/releases/{release_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'release_id' => 10,
]);
```

Operations method:
```php
$client->operations()->repos()->updateRelease(        owner: 'generated',
        repo: 'generated',
        release_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#update-a-release).


### repos/list-release-assets

List release assets

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/releases/{release_id}/assets', [
        'owner' => 'generated',
        'repo' => 'generated',
        'release_id' => 10,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listReleaseAssets(        owner: 'generated',
        repo: 'generated',
        release_id: 10,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#list-release-assets).


### repos/upload-release-asset

Upload a release asset

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/releases/{release_id}/assets', [
        'owner' => 'generated',
        'repo' => 'generated',
        'release_id' => 10,
        'name' => 'generated',
        'label' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->uploadReleaseAsset(        owner: 'generated',
        repo: 'generated',
        release_id: 10,
        name: 'generated',
        label: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#upload-a-release-asset).


### reactions/list-for-release

List reactions for a release

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/releases/{release_id}/reactions', [
        'owner' => 'generated',
        'repo' => 'generated',
        'release_id' => 10,
        'content' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->reactions()->listForRelease(        owner: 'generated',
        repo: 'generated',
        release_id: 10,
        content: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/reactions/#list-reactions-for-a-release).


### reactions/create-for-release

Create reaction for a release

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/releases/{release_id}/reactions', [
        'owner' => 'generated',
        'repo' => 'generated',
        'release_id' => 10,
]);
```

Operations method:
```php
$client->operations()->reactions()->createForRelease(        owner: 'generated',
        repo: 'generated',
        release_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/reactions/#create-reaction-for-a-release).


### reactions/delete-for-release

Delete a release reaction

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/releases/{release_id}/reactions/{reaction_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'release_id' => 10,
        'reaction_id' => 11,
]);
```

Operations method:
```php
$client->operations()->reactions()->deleteForRelease(        owner: 'generated',
        repo: 'generated',
        release_id: 10,
        reaction_id: 11,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/reactions/#delete-a-release-reaction).


### repos/get-branch-rules

Get rules for a branch

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/rules/branches/{branch}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'branch' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getBranchRules(        owner: 'generated',
        repo: 'generated',
        branch: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/repos/rules#get-rules-for-a-branch).


### repos/get-repo-rulesets

Get all repository rulesets

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/rulesets', [
        'owner' => 'generated',
        'repo' => 'generated',
        'includes_parents' => ,
]);
```

Operations method:
```php
$client->operations()->repos()->getRepoRulesets(        owner: 'generated',
        repo: 'generated',
        includes_parents: ,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/repos/rules#get-repository-rulesets).


### repos/create-repo-ruleset

Create a repository ruleset

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/rulesets', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->createRepoRuleset(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/repos/rules#create-repository-ruleset).


### repos/get-repo-ruleset

Get a repository ruleset

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/rulesets/{ruleset_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'ruleset_id' => 10,
        'includes_parents' => ,
]);
```

Operations method:
```php
$client->operations()->repos()->getRepoRuleset(        owner: 'generated',
        repo: 'generated',
        ruleset_id: 10,
        includes_parents: ,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/repos/rules#get-repository-ruleset).


### repos/update-repo-ruleset

Update a repository ruleset

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/rulesets/{ruleset_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'ruleset_id' => 10,
]);
```

Operations method:
```php
$client->operations()->repos()->updateRepoRuleset(        owner: 'generated',
        repo: 'generated',
        ruleset_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/repos/rules#update-repository-ruleset).


### repos/delete-repo-ruleset

Delete a repository ruleset

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/rulesets/{ruleset_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'ruleset_id' => 10,
]);
```

Operations method:
```php
$client->operations()->repos()->deleteRepoRuleset(        owner: 'generated',
        repo: 'generated',
        ruleset_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/repos/rules#delete-repository-ruleset).


### secret-scanning/list-alerts-for-repo

List secret scanning alerts for a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/secret-scanning/alerts', [
        'owner' => 'generated',
        'repo' => 'generated',
        'state' => 'generated',
        'secret_type' => 'generated',
        'resolution' => 'generated',
        'before' => 'generated',
        'after' => 'generated',
        'sort' => 'generated',
        'direction' => 'generated',
        'page' => 4,
        'per_page' => 8,
]);
```

Operations method:
```php
$client->operations()->secretScanning()->listAlertsForRepo(        owner: 'generated',
        repo: 'generated',
        state: 'generated',
        secret_type: 'generated',
        resolution: 'generated',
        before: 'generated',
        after: 'generated',
        sort: 'generated',
        direction: 'generated',
        page: 4,
        per_page: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/secret-scanning#list-secret-scanning-alerts-for-a-repository).


### secret-scanning/get-alert

Get a secret scanning alert

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/secret-scanning/alerts/{alert_number}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'alert_number' => 12,
]);
```

Operations method:
```php
$client->operations()->secretScanning()->getAlert(        owner: 'generated',
        repo: 'generated',
        alert_number: 12,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/secret-scanning#get-a-secret-scanning-alert).


### secret-scanning/update-alert

Update a secret scanning alert

Using the `call` method:
```php
$client->call('PATCH /repos/{owner}/{repo}/secret-scanning/alerts/{alert_number}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'alert_number' => 12,
]);
```

Operations method:
```php
$client->operations()->secretScanning()->updateAlert(        owner: 'generated',
        repo: 'generated',
        alert_number: 12,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/secret-scanning#update-a-secret-scanning-alert).


### secret-scanning/list-locations-for-alert

List locations for a secret scanning alert

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/secret-scanning/alerts/{alert_number}/locations', [
        'owner' => 'generated',
        'repo' => 'generated',
        'alert_number' => 12,
        'page' => 4,
        'per_page' => 8,
]);
```

Operations method:
```php
$client->operations()->secretScanning()->listLocationsForAlert(        owner: 'generated',
        repo: 'generated',
        alert_number: 12,
        page: 4,
        per_page: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/secret-scanning#list-locations-for-a-secret-scanning-alert).


### security-advisories/list-repository-advisories

List repository security advisories

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/security-advisories', [
        'owner' => 'generated',
        'repo' => 'generated',
        'before' => 'generated',
        'after' => 'generated',
        'state' => 'generated',
        'direction' => 'generated',
        'sort' => 'generated',
        'per_page' => 8,
]);
```

Operations method:
```php
$client->operations()->securityAdvisories()->listRepositoryAdvisories(        owner: 'generated',
        repo: 'generated',
        before: 'generated',
        after: 'generated',
        state: 'generated',
        direction: 'generated',
        sort: 'generated',
        per_page: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/security-advisories/repository-advisories#list-repository-security-advisories).


### security-advisories/create-repository-advisory

Create a repository security advisory

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/security-advisories', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->securityAdvisories()->createRepositoryAdvisory(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/security-advisories/repository-advisories#create-a-repository-security-advisory).


### security-advisories/create-private-vulnerability-report

Privately report a security vulnerability

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/security-advisories/reports', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->securityAdvisories()->createPrivateVulnerabilityReport(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/security-advisories/repository-advisories#privately-report-a-security-vulnerability).


### security-advisories/get-repository-advisory

Get a repository security advisory

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/security-advisories/{ghsa_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'ghsa_id' => 'generated',
]);
```

Operations method:
```php
$client->operations()->securityAdvisories()->getRepositoryAdvisory(        owner: 'generated',
        repo: 'generated',
        ghsa_id: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/security-advisories/repository-advisories#get-a-repository-security-advisory).


### security-advisories/update-repository-advisory

Update a repository security advisory

Using the `call` method:
```php
$client->call('PATCH /repos/{owner}/{repo}/security-advisories/{ghsa_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'ghsa_id' => 'generated',
]);
```

Operations method:
```php
$client->operations()->securityAdvisories()->updateRepositoryAdvisory(        owner: 'generated',
        repo: 'generated',
        ghsa_id: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/security-advisories/repository-advisories#update-a-repository-security-advisory).


### activity/list-stargazers-for-repo

List stargazers

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/stargazers', [
        'owner' => 'generated',
        'repo' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->activity()->listStargazersForRepo(        owner: 'generated',
        repo: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/activity#list-stargazers).


### repos/get-code-frequency-stats

Get the weekly commit activity

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/stats/code_frequency', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getCodeFrequencyStats(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/metrics/statistics#get-the-weekly-commit-activity).


### repos/get-commit-activity-stats

Get the last year of commit activity

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/stats/commit_activity', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getCommitActivityStats(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/metrics/statistics#get-the-last-year-of-commit-activity).


### repos/get-contributors-stats

Get all contributor commit activity

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/stats/contributors', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getContributorsStats(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/metrics/statistics#get-all-contributor-commit-activity).


### repos/get-participation-stats

Get the weekly commit count

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/stats/participation', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getParticipationStats(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/metrics/statistics#get-the-weekly-commit-count).


### repos/get-punch-card-stats

Get the hourly commit count for each day

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/stats/punch_card', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getPunchCardStats(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/metrics/statistics#get-the-hourly-commit-count-for-each-day).


### repos/create-commit-status

Create a commit status

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/statuses/{sha}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'sha' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->createCommitStatus(        owner: 'generated',
        repo: 'generated',
        sha: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/commits/statuses#create-a-commit-status).


### activity/list-watchers-for-repo

List watchers

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/subscribers', [
        'owner' => 'generated',
        'repo' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->activity()->listWatchersForRepo(        owner: 'generated',
        repo: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/activity#list-watchers).


### activity/get-repo-subscription

Get a repository subscription

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/subscription', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->activity()->getRepoSubscription(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/activity#get-a-repository-subscription).


### activity/set-repo-subscription

Set a repository subscription

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/subscription', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->activity()->setRepoSubscription(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/activity#set-a-repository-subscription).


### activity/delete-repo-subscription

Delete a repository subscription

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/subscription', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->activity()->deleteRepoSubscription(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/activity#delete-a-repository-subscription).


### repos/list-tags

List repository tags

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/tags', [
        'owner' => 'generated',
        'repo' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listTags(        owner: 'generated',
        repo: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#list-repository-tags).


### repos/list-tag-protection

List tag protection states for a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/tags/protection', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->listTagProtection(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#list-tag-protection-state-of-a-repository).


### repos/create-tag-protection

Create a tag protection state for a repository

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/tags/protection', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->createTagProtection(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#create-tag-protection-state-for-a-repository).


### repos/delete-tag-protection

Delete a tag protection state for a repository

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/tags/protection/{tag_protection_id}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'tag_protection_id' => 17,
]);
```

Operations method:
```php
$client->operations()->repos()->deleteTagProtection(        owner: 'generated',
        repo: 'generated',
        tag_protection_id: 17,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#delete-tag-protection-state-for-a-repository).


### repos/download-tarball-archive

Download a repository archive (tar)

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/tarball/{ref}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'ref' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->downloadTarballArchive(        owner: 'generated',
        repo: 'generated',
        ref: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#download-a-repository-archive).


### repos/download-tarball-archive

Download a repository archive (tar)

Using the `call` method:
```php
$client->call('STREAM /repos/{owner}/{repo}/tarball/{ref}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'ref' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->downloadTarballArchiveStreaming(        owner: 'generated',
        repo: 'generated',
        ref: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#download-a-repository-archive).


### repos/list-teams

List repository teams

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/teams', [
        'owner' => 'generated',
        'repo' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listTeams(        owner: 'generated',
        repo: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#list-repository-teams).


### repos/get-all-topics

Get all repository topics

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/topics', [
        'owner' => 'generated',
        'repo' => 'generated',
        'page' => 4,
        'per_page' => 8,
]);
```

Operations method:
```php
$client->operations()->repos()->getAllTopics(        owner: 'generated',
        repo: 'generated',
        page: 4,
        per_page: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#get-all-repository-topics).


### repos/replace-all-topics

Replace all repository topics

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/topics', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->replaceAllTopics(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#replace-all-repository-topics).


### repos/get-clones

Get repository clones

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/traffic/clones', [
        'owner' => 'generated',
        'repo' => 'generated',
        'per' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getClones(        owner: 'generated',
        repo: 'generated',
        per: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/metrics/traffic#get-repository-clones).


### repos/get-top-paths

Get top referral paths

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/traffic/popular/paths', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getTopPaths(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/metrics/traffic#get-top-referral-paths).


### repos/get-top-referrers

Get top referral sources

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/traffic/popular/referrers', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getTopReferrers(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/metrics/traffic#get-top-referral-sources).


### repos/get-views

Get page views

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/traffic/views', [
        'owner' => 'generated',
        'repo' => 'generated',
        'per' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->getViews(        owner: 'generated',
        repo: 'generated',
        per: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/metrics/traffic#get-page-views).


### repos/transfer

Transfer a repository

Using the `call` method:
```php
$client->call('POST /repos/{owner}/{repo}/transfer', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->transfer(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#transfer-a-repository).


### repos/check-vulnerability-alerts

Check if vulnerability alerts are enabled for a repository

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/vulnerability-alerts', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->checkVulnerabilityAlerts(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#check-if-vulnerability-alerts-are-enabled-for-a-repository).


### repos/enable-vulnerability-alerts

Enable vulnerability alerts

Using the `call` method:
```php
$client->call('PUT /repos/{owner}/{repo}/vulnerability-alerts', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->enableVulnerabilityAlerts(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#enable-vulnerability-alerts).


### repos/disable-vulnerability-alerts

Disable vulnerability alerts

Using the `call` method:
```php
$client->call('DELETE /repos/{owner}/{repo}/vulnerability-alerts', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->disableVulnerabilityAlerts(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#disable-vulnerability-alerts).


### repos/download-zipball-archive

Download a repository archive (zip)

Using the `call` method:
```php
$client->call('GET /repos/{owner}/{repo}/zipball/{ref}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'ref' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->downloadZipballArchive(        owner: 'generated',
        repo: 'generated',
        ref: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#download-a-repository-archive).


### repos/download-zipball-archive

Download a repository archive (zip)

Using the `call` method:
```php
$client->call('STREAM /repos/{owner}/{repo}/zipball/{ref}', [
        'owner' => 'generated',
        'repo' => 'generated',
        'ref' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->downloadZipballArchiveStreaming(        owner: 'generated',
        repo: 'generated',
        ref: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#download-a-repository-archive).


### repos/create-using-template

Create a repository using a template

Using the `call` method:
```php
$client->call('POST /repos/{template_owner}/{template_repo}/generate', [
        'template_owner' => 'generated',
        'template_repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->repos()->createUsingTemplate(        template_owner: 'generated',
        template_repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#create-a-repository-using-a-template).


### repos/list-public

List public repositories

Using the `call` method:
```php
$client->call('GET /repositories', [
        'since' => 5,
]);
```

Operations method:
```php
$client->operations()->repos()->listPublic(        since: 5,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#list-public-repositories).


### actions/list-environment-secrets

List environment secrets

Using the `call` method:
```php
$client->call('GET /repositories/{repository_id}/environments/{environment_name}/secrets', [
        'repository_id' => 13,
        'environment_name' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->actions()->listEnvironmentSecrets(        repository_id: 13,
        environment_name: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#list-environment-secrets).


### actions/get-environment-public-key

Get an environment public key

Using the `call` method:
```php
$client->call('GET /repositories/{repository_id}/environments/{environment_name}/secrets/public-key', [
        'repository_id' => 13,
        'environment_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->getEnvironmentPublicKey(        repository_id: 13,
        environment_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#get-an-environment-public-key).


### actions/get-environment-secret

Get an environment secret

Using the `call` method:
```php
$client->call('GET /repositories/{repository_id}/environments/{environment_name}/secrets/{secret_name}', [
        'repository_id' => 13,
        'environment_name' => 'generated',
        'secret_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->getEnvironmentSecret(        repository_id: 13,
        environment_name: 'generated',
        secret_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#get-an-environment-secret).


### actions/create-or-update-environment-secret

Create or update an environment secret

Using the `call` method:
```php
$client->call('PUT /repositories/{repository_id}/environments/{environment_name}/secrets/{secret_name}', [
        'repository_id' => 13,
        'environment_name' => 'generated',
        'secret_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->createOrUpdateEnvironmentSecret(        repository_id: 13,
        environment_name: 'generated',
        secret_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#create-or-update-an-environment-secret).


### actions/delete-environment-secret

Delete an environment secret

Using the `call` method:
```php
$client->call('DELETE /repositories/{repository_id}/environments/{environment_name}/secrets/{secret_name}', [
        'repository_id' => 13,
        'environment_name' => 'generated',
        'secret_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->deleteEnvironmentSecret(        repository_id: 13,
        environment_name: 'generated',
        secret_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/actions#delete-an-environment-secret).


### actions/list-environment-variables

List environment variables

Using the `call` method:
```php
$client->call('GET /repositories/{repository_id}/environments/{environment_name}/variables', [
        'repository_id' => 13,
        'environment_name' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->actions()->listEnvironmentVariables(        repository_id: 13,
        environment_name: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/actions/variables#list-environment-variables).


### actions/create-environment-variable

Create an environment variable

Using the `call` method:
```php
$client->call('POST /repositories/{repository_id}/environments/{environment_name}/variables', [
        'repository_id' => 13,
        'environment_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->createEnvironmentVariable(        repository_id: 13,
        environment_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/actions/variables#create-an-environment-variable).


### actions/get-environment-variable

Get an environment variable

Using the `call` method:
```php
$client->call('GET /repositories/{repository_id}/environments/{environment_name}/variables/{name}', [
        'repository_id' => 13,
        'environment_name' => 'generated',
        'name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->getEnvironmentVariable(        repository_id: 13,
        environment_name: 'generated',
        name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/actions/variables#get-an-environment-variable).


### actions/delete-environment-variable

Delete an environment variable

Using the `call` method:
```php
$client->call('DELETE /repositories/{repository_id}/environments/{environment_name}/variables/{name}', [
        'repository_id' => 13,
        'name' => 'generated',
        'environment_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->deleteEnvironmentVariable(        repository_id: 13,
        name: 'generated',
        environment_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/actions/variables#delete-an-environment-variable).


### actions/update-environment-variable

Update an environment variable

Using the `call` method:
```php
$client->call('PATCH /repositories/{repository_id}/environments/{environment_name}/variables/{name}', [
        'repository_id' => 13,
        'name' => 'generated',
        'environment_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->actions()->updateEnvironmentVariable(        repository_id: 13,
        name: 'generated',
        environment_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/actions/variables#update-an-environment-variable).


### search/code

Search code

Using the `call` method:
```php
$client->call('GET /search/code', [
        'q' => 'generated',
        'sort' => 'generated',
        'order' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->search()->code(        q: 'generated',
        sort: 'generated',
        order: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/search#search-code).


### search/commits

Search commits

Using the `call` method:
```php
$client->call('GET /search/commits', [
        'q' => 'generated',
        'sort' => 'generated',
        'order' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->search()->commits(        q: 'generated',
        sort: 'generated',
        order: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/search#search-commits).


### search/issues-and-pull-requests

Search issues and pull requests

Using the `call` method:
```php
$client->call('GET /search/issues', [
        'q' => 'generated',
        'sort' => 'generated',
        'order' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->search()->issuesAndPullRequests(        q: 'generated',
        sort: 'generated',
        order: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/search#search-issues-and-pull-requests).


### search/labels

Search labels

Using the `call` method:
```php
$client->call('GET /search/labels', [
        'repository_id' => 13,
        'q' => 'generated',
        'sort' => 'generated',
        'order' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->search()->labels(        repository_id: 13,
        q: 'generated',
        sort: 'generated',
        order: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/search#search-labels).


### search/repos

Search repositories

Using the `call` method:
```php
$client->call('GET /search/repositories', [
        'q' => 'generated',
        'sort' => 'generated',
        'order' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->search()->repos(        q: 'generated',
        sort: 'generated',
        order: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/search#search-repositories).


### search/topics

Search topics

Using the `call` method:
```php
$client->call('GET /search/topics', [
        'q' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->search()->topics(        q: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/search#search-topics).


### search/users

Search users

Using the `call` method:
```php
$client->call('GET /search/users', [
        'q' => 'generated',
        'sort' => 'generated',
        'order' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->search()->users(        q: 'generated',
        sort: 'generated',
        order: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/search#search-users).


### teams/get-legacy

Get a team (Legacy)

Using the `call` method:
```php
$client->call('GET /teams/{team_id}', [
        'team_id' => 7,
]);
```

Operations method:
```php
$client->operations()->teams()->getLegacy(        team_id: 7,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams/#get-a-team-legacy).


### teams/delete-legacy

Delete a team (Legacy)

Using the `call` method:
```php
$client->call('DELETE /teams/{team_id}', [
        'team_id' => 7,
]);
```

Operations method:
```php
$client->operations()->teams()->deleteLegacy(        team_id: 7,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams/#delete-a-team-legacy).


### teams/update-legacy

Update a team (Legacy)

Using the `call` method:
```php
$client->call('PATCH /teams/{team_id}', [
        'team_id' => 7,
]);
```

Operations method:
```php
$client->operations()->teams()->updateLegacy(        team_id: 7,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams/#update-a-team-legacy).


### teams/list-discussions-legacy

List discussions (Legacy)

Using the `call` method:
```php
$client->call('GET /teams/{team_id}/discussions', [
        'team_id' => 7,
        'direction' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->teams()->listDiscussionsLegacy(        team_id: 7,
        direction: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams#list-discussions-legacy).


### teams/create-discussion-legacy

Create a discussion (Legacy)

Using the `call` method:
```php
$client->call('POST /teams/{team_id}/discussions', [
        'team_id' => 7,
]);
```

Operations method:
```php
$client->operations()->teams()->createDiscussionLegacy(        team_id: 7,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams#create-a-discussion-legacy).


### teams/get-discussion-legacy

Get a discussion (Legacy)

Using the `call` method:
```php
$client->call('GET /teams/{team_id}/discussions/{discussion_number}', [
        'team_id' => 7,
        'discussion_number' => 17,
]);
```

Operations method:
```php
$client->operations()->teams()->getDiscussionLegacy(        team_id: 7,
        discussion_number: 17,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams#get-a-discussion-legacy).


### teams/delete-discussion-legacy

Delete a discussion (Legacy)

Using the `call` method:
```php
$client->call('DELETE /teams/{team_id}/discussions/{discussion_number}', [
        'team_id' => 7,
        'discussion_number' => 17,
]);
```

Operations method:
```php
$client->operations()->teams()->deleteDiscussionLegacy(        team_id: 7,
        discussion_number: 17,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams#delete-a-discussion-legacy).


### teams/update-discussion-legacy

Update a discussion (Legacy)

Using the `call` method:
```php
$client->call('PATCH /teams/{team_id}/discussions/{discussion_number}', [
        'team_id' => 7,
        'discussion_number' => 17,
]);
```

Operations method:
```php
$client->operations()->teams()->updateDiscussionLegacy(        team_id: 7,
        discussion_number: 17,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams#update-a-discussion-legacy).


### teams/list-discussion-comments-legacy

List discussion comments (Legacy)

Using the `call` method:
```php
$client->call('GET /teams/{team_id}/discussions/{discussion_number}/comments', [
        'team_id' => 7,
        'discussion_number' => 17,
        'direction' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->teams()->listDiscussionCommentsLegacy(        team_id: 7,
        discussion_number: 17,
        direction: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams#list-discussion-comments-legacy).


### teams/create-discussion-comment-legacy

Create a discussion comment (Legacy)

Using the `call` method:
```php
$client->call('POST /teams/{team_id}/discussions/{discussion_number}/comments', [
        'team_id' => 7,
        'discussion_number' => 17,
]);
```

Operations method:
```php
$client->operations()->teams()->createDiscussionCommentLegacy(        team_id: 7,
        discussion_number: 17,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams#create-a-discussion-comment-legacy).


### teams/get-discussion-comment-legacy

Get a discussion comment (Legacy)

Using the `call` method:
```php
$client->call('GET /teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}', [
        'team_id' => 7,
        'discussion_number' => 17,
        'comment_number' => 14,
]);
```

Operations method:
```php
$client->operations()->teams()->getDiscussionCommentLegacy(        team_id: 7,
        discussion_number: 17,
        comment_number: 14,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams#get-a-discussion-comment-legacy).


### teams/delete-discussion-comment-legacy

Delete a discussion comment (Legacy)

Using the `call` method:
```php
$client->call('DELETE /teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}', [
        'team_id' => 7,
        'discussion_number' => 17,
        'comment_number' => 14,
]);
```

Operations method:
```php
$client->operations()->teams()->deleteDiscussionCommentLegacy(        team_id: 7,
        discussion_number: 17,
        comment_number: 14,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams#delete-a-discussion-comment-legacy).


### teams/update-discussion-comment-legacy

Update a discussion comment (Legacy)

Using the `call` method:
```php
$client->call('PATCH /teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}', [
        'team_id' => 7,
        'discussion_number' => 17,
        'comment_number' => 14,
]);
```

Operations method:
```php
$client->operations()->teams()->updateDiscussionCommentLegacy(        team_id: 7,
        discussion_number: 17,
        comment_number: 14,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams#update-a-discussion-comment-legacy).


### reactions/list-for-team-discussion-comment-legacy

List reactions for a team discussion comment (Legacy)

Using the `call` method:
```php
$client->call('GET /teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}/reactions', [
        'team_id' => 7,
        'discussion_number' => 17,
        'comment_number' => 14,
        'content' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->reactions()->listForTeamDiscussionCommentLegacy(        team_id: 7,
        discussion_number: 17,
        comment_number: 14,
        content: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/reactions/#list-reactions-for-a-team-discussion-comment-legacy).


### reactions/create-for-team-discussion-comment-legacy

Create reaction for a team discussion comment (Legacy)

Using the `call` method:
```php
$client->call('POST /teams/{team_id}/discussions/{discussion_number}/comments/{comment_number}/reactions', [
        'team_id' => 7,
        'discussion_number' => 17,
        'comment_number' => 14,
]);
```

Operations method:
```php
$client->operations()->reactions()->createForTeamDiscussionCommentLegacy(        team_id: 7,
        discussion_number: 17,
        comment_number: 14,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/reactions/#create-reaction-for-a-team-discussion-comment-legacy).


### reactions/list-for-team-discussion-legacy

List reactions for a team discussion (Legacy)

Using the `call` method:
```php
$client->call('GET /teams/{team_id}/discussions/{discussion_number}/reactions', [
        'team_id' => 7,
        'discussion_number' => 17,
        'content' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->reactions()->listForTeamDiscussionLegacy(        team_id: 7,
        discussion_number: 17,
        content: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/reactions/#list-reactions-for-a-team-discussion-legacy).


### reactions/create-for-team-discussion-legacy

Create reaction for a team discussion (Legacy)

Using the `call` method:
```php
$client->call('POST /teams/{team_id}/discussions/{discussion_number}/reactions', [
        'team_id' => 7,
        'discussion_number' => 17,
]);
```

Operations method:
```php
$client->operations()->reactions()->createForTeamDiscussionLegacy(        team_id: 7,
        discussion_number: 17,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/reactions/#create-reaction-for-a-team-discussion-legacy).


### teams/list-pending-invitations-legacy

List pending team invitations (Legacy)

Using the `call` method:
```php
$client->call('GET /teams/{team_id}/invitations', [
        'team_id' => 7,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->teams()->listPendingInvitationsLegacy(        team_id: 7,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams#list-pending-team-invitations-legacy).


### teams/list-members-legacy

List team members (Legacy)

Using the `call` method:
```php
$client->call('GET /teams/{team_id}/members', [
        'team_id' => 7,
        'role' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->teams()->listMembersLegacy(        team_id: 7,
        role: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams#list-team-members-legacy).


### teams/get-member-legacy

Get team member (Legacy)

Using the `call` method:
```php
$client->call('GET /teams/{team_id}/members/{username}', [
        'team_id' => 7,
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->teams()->getMemberLegacy(        team_id: 7,
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams#get-team-member-legacy).


### teams/add-member-legacy

Add team member (Legacy)

Using the `call` method:
```php
$client->call('PUT /teams/{team_id}/members/{username}', [
        'team_id' => 7,
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->teams()->addMemberLegacy(        team_id: 7,
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams#add-team-member-legacy).


### teams/remove-member-legacy

Remove team member (Legacy)

Using the `call` method:
```php
$client->call('DELETE /teams/{team_id}/members/{username}', [
        'team_id' => 7,
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->teams()->removeMemberLegacy(        team_id: 7,
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams#remove-team-member-legacy).


### teams/get-membership-for-user-legacy

Get team membership for a user (Legacy)

Using the `call` method:
```php
$client->call('GET /teams/{team_id}/memberships/{username}', [
        'team_id' => 7,
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->teams()->getMembershipForUserLegacy(        team_id: 7,
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams#get-team-membership-for-a-user-legacy).


### teams/add-or-update-membership-for-user-legacy

Add or update team membership for a user (Legacy)

Using the `call` method:
```php
$client->call('PUT /teams/{team_id}/memberships/{username}', [
        'team_id' => 7,
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->teams()->addOrUpdateMembershipForUserLegacy(        team_id: 7,
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams#add-or-update-team-membership-for-a-user-legacy).


### teams/remove-membership-for-user-legacy

Remove team membership for a user (Legacy)

Using the `call` method:
```php
$client->call('DELETE /teams/{team_id}/memberships/{username}', [
        'team_id' => 7,
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->teams()->removeMembershipForUserLegacy(        team_id: 7,
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams#remove-team-membership-for-a-user-legacy).


### teams/list-projects-legacy

List team projects (Legacy)

Using the `call` method:
```php
$client->call('GET /teams/{team_id}/projects', [
        'team_id' => 7,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->teams()->listProjectsLegacy(        team_id: 7,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams/#list-team-projects-legacy).


### teams/check-permissions-for-project-legacy

Check team permissions for a project (Legacy)

Using the `call` method:
```php
$client->call('GET /teams/{team_id}/projects/{project_id}', [
        'team_id' => 7,
        'project_id' => 10,
]);
```

Operations method:
```php
$client->operations()->teams()->checkPermissionsForProjectLegacy(        team_id: 7,
        project_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams/#check-team-permissions-for-a-project-legacy).


### teams/add-or-update-project-permissions-legacy

Add or update team project permissions (Legacy)

Using the `call` method:
```php
$client->call('PUT /teams/{team_id}/projects/{project_id}', [
        'team_id' => 7,
        'project_id' => 10,
]);
```

Operations method:
```php
$client->operations()->teams()->addOrUpdateProjectPermissionsLegacy(        team_id: 7,
        project_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams/#add-or-update-team-project-permissions-legacy).


### teams/remove-project-legacy

Remove a project from a team (Legacy)

Using the `call` method:
```php
$client->call('DELETE /teams/{team_id}/projects/{project_id}', [
        'team_id' => 7,
        'project_id' => 10,
]);
```

Operations method:
```php
$client->operations()->teams()->removeProjectLegacy(        team_id: 7,
        project_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams/#remove-a-project-from-a-team-legacy).


### teams/list-repos-legacy

List team repositories (Legacy)

Using the `call` method:
```php
$client->call('GET /teams/{team_id}/repos', [
        'team_id' => 7,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->teams()->listReposLegacy(        team_id: 7,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams/#list-team-repositories-legacy).


### teams/check-permissions-for-repo-legacy

Check team permissions for a repository (Legacy)

Using the `call` method:
```php
$client->call('GET /teams/{team_id}/repos/{owner}/{repo}', [
        'team_id' => 7,
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->teams()->checkPermissionsForRepoLegacy(        team_id: 7,
        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams/#check-team-permissions-for-a-repository-legacy).


### teams/add-or-update-repo-permissions-legacy

Add or update team repository permissions (Legacy)

Using the `call` method:
```php
$client->call('PUT /teams/{team_id}/repos/{owner}/{repo}', [
        'team_id' => 7,
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->teams()->addOrUpdateRepoPermissionsLegacy(        team_id: 7,
        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams#add-or-update-team-repository-permissions-legacy).


### teams/remove-repo-legacy

Remove a repository from a team (Legacy)

Using the `call` method:
```php
$client->call('DELETE /teams/{team_id}/repos/{owner}/{repo}', [
        'team_id' => 7,
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->teams()->removeRepoLegacy(        team_id: 7,
        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams/#remove-a-repository-from-a-team-legacy).


### teams/list-child-legacy

List child teams (Legacy)

Using the `call` method:
```php
$client->call('GET /teams/{team_id}/teams', [
        'team_id' => 7,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->teams()->listChildLegacy(        team_id: 7,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams/#list-child-teams-legacy).


### users/get-authenticated

Get the authenticated user

Using the `call` method:
```php
$client->call('GET /user');
```

Operations method:
```php
$client->operations()->users()->getAuthenticated();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/users#get-the-authenticated-user).


### users/update-authenticated

Update the authenticated user

Using the `call` method:
```php
$client->call('PATCH /user');
```

Operations method:
```php
$client->operations()->users()->updateAuthenticated();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/users/#update-the-authenticated-user).


### users/list-blocked-by-authenticated-user

List users blocked by the authenticated user

Using the `call` method:
```php
$client->call('GET /user/blocks', [
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->users()->listBlockedByAuthenticatedUser(        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/users#list-users-blocked-by-the-authenticated-user).


### users/check-blocked

Check if a user is blocked by the authenticated user

Using the `call` method:
```php
$client->call('GET /user/blocks/{username}', [
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->users()->checkBlocked(        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/users#check-if-a-user-is-blocked-by-the-authenticated-user).


### users/block

Block a user

Using the `call` method:
```php
$client->call('PUT /user/blocks/{username}', [
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->users()->block(        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/users#block-a-user).


### users/unblock

Unblock a user

Using the `call` method:
```php
$client->call('DELETE /user/blocks/{username}', [
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->users()->unblock(        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/users#unblock-a-user).


### codespaces/list-for-authenticated-user

List codespaces for the authenticated user

Using the `call` method:
```php
$client->call('GET /user/codespaces', [
        'repository_id' => 13,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->codespaces()->listForAuthenticatedUser(        repository_id: 13,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/codespaces#list-codespaces-for-the-authenticated-user).


### codespaces/create-for-authenticated-user

Create a codespace for the authenticated user

Using the `call` method:
```php
$client->call('POST /user/codespaces');
```

Operations method:
```php
$client->operations()->codespaces()->createForAuthenticatedUser();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/codespaces#create-a-codespace-for-the-authenticated-user).


### codespaces/list-secrets-for-authenticated-user

List secrets for the authenticated user

Using the `call` method:
```php
$client->call('GET /user/codespaces/secrets', [
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->codespaces()->listSecretsForAuthenticatedUser(        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/codespaces#list-secrets-for-the-authenticated-user).


### codespaces/get-public-key-for-authenticated-user

Get public key for the authenticated user

Using the `call` method:
```php
$client->call('GET /user/codespaces/secrets/public-key');
```

Operations method:
```php
$client->operations()->codespaces()->getPublicKeyForAuthenticatedUser();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/codespaces#get-public-key-for-the-authenticated-user).


### codespaces/get-secret-for-authenticated-user

Get a secret for the authenticated user

Using the `call` method:
```php
$client->call('GET /user/codespaces/secrets/{secret_name}', [
        'secret_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->codespaces()->getSecretForAuthenticatedUser(        secret_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/codespaces#get-a-secret-for-the-authenticated-user).


### codespaces/create-or-update-secret-for-authenticated-user

Create or update a secret for the authenticated user

Using the `call` method:
```php
$client->call('PUT /user/codespaces/secrets/{secret_name}', [
        'secret_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->codespaces()->createOrUpdateSecretForAuthenticatedUser(        secret_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/codespaces#create-or-update-a-secret-for-the-authenticated-user).


### codespaces/delete-secret-for-authenticated-user

Delete a secret for the authenticated user

Using the `call` method:
```php
$client->call('DELETE /user/codespaces/secrets/{secret_name}', [
        'secret_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->codespaces()->deleteSecretForAuthenticatedUser(        secret_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/codespaces#delete-a-secret-for-the-authenticated-user).


### codespaces/list-repositories-for-secret-for-authenticated-user

List selected repositories for a user secret

Using the `call` method:
```php
$client->call('GET /user/codespaces/secrets/{secret_name}/repositories', [
        'secret_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->codespaces()->listRepositoriesForSecretForAuthenticatedUser(        secret_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/codespaces#list-selected-repositories-for-a-user-secret).


### codespaces/set-repositories-for-secret-for-authenticated-user

Set selected repositories for a user secret

Using the `call` method:
```php
$client->call('PUT /user/codespaces/secrets/{secret_name}/repositories', [
        'secret_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->codespaces()->setRepositoriesForSecretForAuthenticatedUser(        secret_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/codespaces#set-selected-repositories-for-a-user-secret).


### codespaces/add-repository-for-secret-for-authenticated-user

Add a selected repository to a user secret

Using the `call` method:
```php
$client->call('PUT /user/codespaces/secrets/{secret_name}/repositories/{repository_id}', [
        'secret_name' => 'generated',
        'repository_id' => 13,
]);
```

Operations method:
```php
$client->operations()->codespaces()->addRepositoryForSecretForAuthenticatedUser(        secret_name: 'generated',
        repository_id: 13,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/codespaces#add-a-selected-repository-to-a-user-secret).


### codespaces/remove-repository-for-secret-for-authenticated-user

Remove a selected repository from a user secret

Using the `call` method:
```php
$client->call('DELETE /user/codespaces/secrets/{secret_name}/repositories/{repository_id}', [
        'secret_name' => 'generated',
        'repository_id' => 13,
]);
```

Operations method:
```php
$client->operations()->codespaces()->removeRepositoryForSecretForAuthenticatedUser(        secret_name: 'generated',
        repository_id: 13,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/codespaces#remove-a-selected-repository-from-a-user-secret).


### codespaces/get-for-authenticated-user

Get a codespace for the authenticated user

Using the `call` method:
```php
$client->call('GET /user/codespaces/{codespace_name}', [
        'codespace_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->codespaces()->getForAuthenticatedUser(        codespace_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/codespaces#get-a-codespace-for-the-authenticated-user).


### codespaces/delete-for-authenticated-user

Delete a codespace for the authenticated user

Using the `call` method:
```php
$client->call('DELETE /user/codespaces/{codespace_name}', [
        'codespace_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->codespaces()->deleteForAuthenticatedUser(        codespace_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/codespaces#delete-a-codespace-for-the-authenticated-user).


### codespaces/update-for-authenticated-user

Update a codespace for the authenticated user

Using the `call` method:
```php
$client->call('PATCH /user/codespaces/{codespace_name}', [
        'codespace_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->codespaces()->updateForAuthenticatedUser(        codespace_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/codespaces#update-a-codespace-for-the-authenticated-user).


### codespaces/export-for-authenticated-user

Export a codespace for the authenticated user

Using the `call` method:
```php
$client->call('POST /user/codespaces/{codespace_name}/exports', [
        'codespace_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->codespaces()->exportForAuthenticatedUser(        codespace_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/codespaces/codespaces#export-a-codespace-for-the-authenticated-user).


### codespaces/get-export-details-for-authenticated-user

Get details about a codespace export

Using the `call` method:
```php
$client->call('GET /user/codespaces/{codespace_name}/exports/{export_id}', [
        'codespace_name' => 'generated',
        'export_id' => 'generated',
]);
```

Operations method:
```php
$client->operations()->codespaces()->getExportDetailsForAuthenticatedUser(        codespace_name: 'generated',
        export_id: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/codespaces/codespaces#get-details-about-a-codespace-export).


### codespaces/codespace-machines-for-authenticated-user

List machine types for a codespace

Using the `call` method:
```php
$client->call('GET /user/codespaces/{codespace_name}/machines', [
        'codespace_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->codespaces()->codespaceMachinesForAuthenticatedUser(        codespace_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/codespaces#list-machine-types-for-a-codespace).


### codespaces/publish-for-authenticated-user

Create a repository from an unpublished codespace

Using the `call` method:
```php
$client->call('POST /user/codespaces/{codespace_name}/publish', [
        'codespace_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->codespaces()->publishForAuthenticatedUser(        codespace_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/codespaces/codespaces#create-a-repository-from-an-unpublished-codespace).


### codespaces/start-for-authenticated-user

Start a codespace for the authenticated user

Using the `call` method:
```php
$client->call('POST /user/codespaces/{codespace_name}/start', [
        'codespace_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->codespaces()->startForAuthenticatedUser(        codespace_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/codespaces#start-a-codespace-for-the-authenticated-user).


### codespaces/stop-for-authenticated-user

Stop a codespace for the authenticated user

Using the `call` method:
```php
$client->call('POST /user/codespaces/{codespace_name}/stop', [
        'codespace_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->codespaces()->stopForAuthenticatedUser(        codespace_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/codespaces#stop-a-codespace-for-the-authenticated-user).


### packages/list-docker-migration-conflicting-packages-for-authenticated-user

Get list of conflicting packages during Docker migration for authenticated-user

Using the `call` method:
```php
$client->call('GET /user/docker/conflicts');
```

Operations method:
```php
$client->operations()->packages()->listDockerMigrationConflictingPackagesForAuthenticatedUser();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/packages#list-docker-migration-conflicting-packages-for-authenticated-user).


### users/set-primary-email-visibility-for-authenticated-user

Set primary email visibility for the authenticated user

Using the `call` method:
```php
$client->call('PATCH /user/email/visibility');
```

Operations method:
```php
$client->operations()->users()->setPrimaryEmailVisibilityForAuthenticatedUser();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/users#set-primary-email-visibility-for-the-authenticated-user).


### users/list-emails-for-authenticated-user

List email addresses for the authenticated user

Using the `call` method:
```php
$client->call('GET /user/emails', [
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->users()->listEmailsForAuthenticatedUser(        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/users#list-email-addresses-for-the-authenticated-user).


### users/add-email-for-authenticated-user

Add an email address for the authenticated user

Using the `call` method:
```php
$client->call('POST /user/emails');
```

Operations method:
```php
$client->operations()->users()->addEmailForAuthenticatedUser();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/users#add-an-email-address-for-the-authenticated-user).


### users/delete-email-for-authenticated-user

Delete an email address for the authenticated user

Using the `call` method:
```php
$client->call('DELETE /user/emails');
```

Operations method:
```php
$client->operations()->users()->deleteEmailForAuthenticatedUser();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/users#delete-an-email-address-for-the-authenticated-user).


### users/list-followers-for-authenticated-user

List followers of the authenticated user

Using the `call` method:
```php
$client->call('GET /user/followers', [
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->users()->listFollowersForAuthenticatedUser(        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/users#list-followers-of-the-authenticated-user).


### users/list-followed-by-authenticated-user

List the people the authenticated user follows

Using the `call` method:
```php
$client->call('GET /user/following', [
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->users()->listFollowedByAuthenticatedUser(        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/users#list-the-people-the-authenticated-user-follows).


### users/check-person-is-followed-by-authenticated

Check if a person is followed by the authenticated user

Using the `call` method:
```php
$client->call('GET /user/following/{username}', [
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->users()->checkPersonIsFollowedByAuthenticated(        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/users#check-if-a-person-is-followed-by-the-authenticated-user).


### users/follow

Follow a user

Using the `call` method:
```php
$client->call('PUT /user/following/{username}', [
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->users()->follow(        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/users#follow-a-user).


### users/unfollow

Unfollow a user

Using the `call` method:
```php
$client->call('DELETE /user/following/{username}', [
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->users()->unfollow(        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/users#unfollow-a-user).


### users/list-gpg-keys-for-authenticated-user

List GPG keys for the authenticated user

Using the `call` method:
```php
$client->call('GET /user/gpg_keys', [
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->users()->listGpgKeysForAuthenticatedUser(        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/users#list-gpg-keys-for-the-authenticated-user).


### users/create-gpg-key-for-authenticated-user

Create a GPG key for the authenticated user

Using the `call` method:
```php
$client->call('POST /user/gpg_keys');
```

Operations method:
```php
$client->operations()->users()->createGpgKeyForAuthenticatedUser();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/users#create-a-gpg-key-for-the-authenticated-user).


### users/get-gpg-key-for-authenticated-user

Get a GPG key for the authenticated user

Using the `call` method:
```php
$client->call('GET /user/gpg_keys/{gpg_key_id}', [
        'gpg_key_id' => 10,
]);
```

Operations method:
```php
$client->operations()->users()->getGpgKeyForAuthenticatedUser(        gpg_key_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/users#get-a-gpg-key-for-the-authenticated-user).


### users/delete-gpg-key-for-authenticated-user

Delete a GPG key for the authenticated user

Using the `call` method:
```php
$client->call('DELETE /user/gpg_keys/{gpg_key_id}', [
        'gpg_key_id' => 10,
]);
```

Operations method:
```php
$client->operations()->users()->deleteGpgKeyForAuthenticatedUser(        gpg_key_id: 10,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/users#delete-a-gpg-key-for-the-authenticated-user).


### apps/list-installations-for-authenticated-user

List app installations accessible to the user access token

Using the `call` method:
```php
$client->call('GET /user/installations', [
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->apps()->listInstallationsForAuthenticatedUser(        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/apps#list-app-installations-accessible-to-the-user-access-token).


### apps/list-installation-repos-for-authenticated-user

List repositories accessible to the user access token

Using the `call` method:
```php
$client->call('GET /user/installations/{installation_id}/repositories', [
        'installation_id' => 15,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->apps()->listInstallationReposForAuthenticatedUser(        installation_id: 15,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/apps#list-repositories-accessible-to-the-user-access-token).


### apps/add-repo-to-installation-for-authenticated-user

Add a repository to an app installation

Using the `call` method:
```php
$client->call('PUT /user/installations/{installation_id}/repositories/{repository_id}', [
        'installation_id' => 15,
        'repository_id' => 13,
]);
```

Operations method:
```php
$client->operations()->apps()->addRepoToInstallationForAuthenticatedUser(        installation_id: 15,
        repository_id: 13,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/apps#add-a-repository-to-an-app-installation).


### apps/remove-repo-from-installation-for-authenticated-user

Remove a repository from an app installation

Using the `call` method:
```php
$client->call('DELETE /user/installations/{installation_id}/repositories/{repository_id}', [
        'installation_id' => 15,
        'repository_id' => 13,
]);
```

Operations method:
```php
$client->operations()->apps()->removeRepoFromInstallationForAuthenticatedUser(        installation_id: 15,
        repository_id: 13,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/apps#remove-a-repository-from-an-app-installation).


### interactions/get-restrictions-for-authenticated-user

Get interaction restrictions for your public repositories

Using the `call` method:
```php
$client->call('GET /user/interaction-limits');
```

Operations method:
```php
$client->operations()->interactions()->getRestrictionsForAuthenticatedUser();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/interactions#get-interaction-restrictions-for-your-public-repositories).


### interactions/set-restrictions-for-authenticated-user

Set interaction restrictions for your public repositories

Using the `call` method:
```php
$client->call('PUT /user/interaction-limits');
```

Operations method:
```php
$client->operations()->interactions()->setRestrictionsForAuthenticatedUser();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/interactions#set-interaction-restrictions-for-your-public-repositories).


### interactions/remove-restrictions-for-authenticated-user

Remove interaction restrictions from your public repositories

Using the `call` method:
```php
$client->call('DELETE /user/interaction-limits');
```

Operations method:
```php
$client->operations()->interactions()->removeRestrictionsForAuthenticatedUser();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/interactions#remove-interaction-restrictions-from-your-public-repositories).


### issues/list-for-authenticated-user

List user account issues assigned to the authenticated user

Using the `call` method:
```php
$client->call('GET /user/issues', [
        'labels' => 'generated',
        'since' => '1970-01-01T00:00:00+00:00',
        'filter' => 'generated',
        'state' => 'generated',
        'sort' => 'generated',
        'direction' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->issues()->listForAuthenticatedUser(        labels: 'generated',
        since: '1970-01-01T00:00:00+00:00',
        filter: 'generated',
        state: 'generated',
        sort: 'generated',
        direction: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/issues#list-user-account-issues-assigned-to-the-authenticated-user).


### users/list-public-ssh-keys-for-authenticated-user

List public SSH keys for the authenticated user

Using the `call` method:
```php
$client->call('GET /user/keys', [
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->users()->listPublicSshKeysForAuthenticatedUser(        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/users#list-public-ssh-keys-for-the-authenticated-user).


### users/create-public-ssh-key-for-authenticated-user

Create a public SSH key for the authenticated user

Using the `call` method:
```php
$client->call('POST /user/keys');
```

Operations method:
```php
$client->operations()->users()->createPublicSshKeyForAuthenticatedUser();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/users#create-a-public-ssh-key-for-the-authenticated-user).


### users/get-public-ssh-key-for-authenticated-user

Get a public SSH key for the authenticated user

Using the `call` method:
```php
$client->call('GET /user/keys/{key_id}', [
        'key_id' => 6,
]);
```

Operations method:
```php
$client->operations()->users()->getPublicSshKeyForAuthenticatedUser(        key_id: 6,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/users#get-a-public-ssh-key-for-the-authenticated-user).


### users/delete-public-ssh-key-for-authenticated-user

Delete a public SSH key for the authenticated user

Using the `call` method:
```php
$client->call('DELETE /user/keys/{key_id}', [
        'key_id' => 6,
]);
```

Operations method:
```php
$client->operations()->users()->deletePublicSshKeyForAuthenticatedUser(        key_id: 6,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/users#delete-a-public-ssh-key-for-the-authenticated-user).


### apps/list-subscriptions-for-authenticated-user

List subscriptions for the authenticated user

Using the `call` method:
```php
$client->call('GET /user/marketplace_purchases', [
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->apps()->listSubscriptionsForAuthenticatedUser(        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/apps#list-subscriptions-for-the-authenticated-user).


### apps/list-subscriptions-for-authenticated-user-stubbed

List subscriptions for the authenticated user (stubbed)

Using the `call` method:
```php
$client->call('GET /user/marketplace_purchases/stubbed', [
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->apps()->listSubscriptionsForAuthenticatedUserStubbed(        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/apps#list-subscriptions-for-the-authenticated-user-stubbed).


### orgs/list-memberships-for-authenticated-user

List organization memberships for the authenticated user

Using the `call` method:
```php
$client->call('GET /user/memberships/orgs', [
        'state' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->orgs()->listMembershipsForAuthenticatedUser(        state: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/orgs#list-organization-memberships-for-the-authenticated-user).


### orgs/get-membership-for-authenticated-user

Get an organization membership for the authenticated user

Using the `call` method:
```php
$client->call('GET /user/memberships/orgs/{org}', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->orgs()->getMembershipForAuthenticatedUser(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/orgs#get-an-organization-membership-for-the-authenticated-user).


### orgs/update-membership-for-authenticated-user

Update an organization membership for the authenticated user

Using the `call` method:
```php
$client->call('PATCH /user/memberships/orgs/{org}', [
        'org' => 'generated',
]);
```

Operations method:
```php
$client->operations()->orgs()->updateMembershipForAuthenticatedUser(        org: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/orgs#update-an-organization-membership-for-the-authenticated-user).


### migrations/list-for-authenticated-user

List user migrations

Using the `call` method:
```php
$client->call('GET /user/migrations', [
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->migrations()->listForAuthenticatedUser(        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/migrations/users#list-user-migrations).


### migrations/start-for-authenticated-user

Start a user migration

Using the `call` method:
```php
$client->call('POST /user/migrations');
```

Operations method:
```php
$client->operations()->migrations()->startForAuthenticatedUser();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/migrations/users#start-a-user-migration).


### migrations/get-status-for-authenticated-user

Get a user migration status

Using the `call` method:
```php
$client->call('GET /user/migrations/{migration_id}', [
        'migration_id' => 12,
        'exclude' => ,
]);
```

Operations method:
```php
$client->operations()->migrations()->getStatusForAuthenticatedUser(        migration_id: 12,
        exclude: ,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/migrations/users#get-a-user-migration-status).


### migrations/get-archive-for-authenticated-user

Download a user migration archive

Using the `call` method:
```php
$client->call('GET /user/migrations/{migration_id}/archive', [
        'migration_id' => 12,
]);
```

Operations method:
```php
$client->operations()->migrations()->getArchiveForAuthenticatedUser(        migration_id: 12,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/migrations/users#download-a-user-migration-archive).


### migrations/delete-archive-for-authenticated-user

Delete a user migration archive

Using the `call` method:
```php
$client->call('DELETE /user/migrations/{migration_id}/archive', [
        'migration_id' => 12,
]);
```

Operations method:
```php
$client->operations()->migrations()->deleteArchiveForAuthenticatedUser(        migration_id: 12,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/migrations/users#delete-a-user-migration-archive).


### migrations/unlock-repo-for-authenticated-user

Unlock a user repository

Using the `call` method:
```php
$client->call('DELETE /user/migrations/{migration_id}/repos/{repo_name}/lock', [
        'migration_id' => 12,
        'repo_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->migrations()->unlockRepoForAuthenticatedUser(        migration_id: 12,
        repo_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/migrations/users#unlock-a-user-repository).


### migrations/list-repos-for-authenticated-user

List repositories for a user migration

Using the `call` method:
```php
$client->call('GET /user/migrations/{migration_id}/repositories', [
        'migration_id' => 12,
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->migrations()->listReposForAuthenticatedUser(        migration_id: 12,
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/migrations/users#list-repositories-for-a-user-migration).


### orgs/list-for-authenticated-user

List organizations for the authenticated user

Using the `call` method:
```php
$client->call('GET /user/orgs', [
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->orgs()->listForAuthenticatedUser(        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/orgs#list-organizations-for-the-authenticated-user).


### packages/list-packages-for-authenticated-user

List packages for the authenticated user&#039;s namespace

Using the `call` method:
```php
$client->call('GET /user/packages', [
        'package_type' => 'generated',
        'visibility' => 'generated',
        'page' => 4,
        'per_page' => 8,
]);
```

Operations method:
```php
$client->operations()->packages()->listPackagesForAuthenticatedUser(        package_type: 'generated',
        visibility: 'generated',
        page: 4,
        per_page: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/packages#list-packages-for-the-authenticated-user).


### packages/get-package-for-authenticated-user

Get a package for the authenticated user

Using the `call` method:
```php
$client->call('GET /user/packages/{package_type}/{package_name}', [
        'package_type' => 'generated',
        'package_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->packages()->getPackageForAuthenticatedUser(        package_type: 'generated',
        package_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/packages#get-a-package-for-the-authenticated-user).


### packages/delete-package-for-authenticated-user

Delete a package for the authenticated user

Using the `call` method:
```php
$client->call('DELETE /user/packages/{package_type}/{package_name}', [
        'package_type' => 'generated',
        'package_name' => 'generated',
]);
```

Operations method:
```php
$client->operations()->packages()->deletePackageForAuthenticatedUser(        package_type: 'generated',
        package_name: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/packages#delete-a-package-for-the-authenticated-user).


### packages/restore-package-for-authenticated-user

Restore a package for the authenticated user

Using the `call` method:
```php
$client->call('POST /user/packages/{package_type}/{package_name}/restore', [
        'package_type' => 'generated',
        'package_name' => 'generated',
        'token' => 'generated',
]);
```

Operations method:
```php
$client->operations()->packages()->restorePackageForAuthenticatedUser(        package_type: 'generated',
        package_name: 'generated',
        token: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/packages#restore-a-package-for-the-authenticated-user).


### packages/get-all-package-versions-for-package-owned-by-authenticated-user

List package versions for a package owned by the authenticated user

Using the `call` method:
```php
$client->call('GET /user/packages/{package_type}/{package_name}/versions', [
        'package_type' => 'generated',
        'package_name' => 'generated',
        'page' => 4,
        'per_page' => 8,
        'state' => 'generated',
]);
```

Operations method:
```php
$client->operations()->packages()->getAllPackageVersionsForPackageOwnedByAuthenticatedUser(        package_type: 'generated',
        package_name: 'generated',
        page: 4,
        per_page: 8,
        state: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/packages#get-all-package-versions-for-a-package-owned-by-the-authenticated-user).


### packages/get-package-version-for-authenticated-user

Get a package version for the authenticated user

Using the `call` method:
```php
$client->call('GET /user/packages/{package_type}/{package_name}/versions/{package_version_id}', [
        'package_type' => 'generated',
        'package_name' => 'generated',
        'package_version_id' => 18,
]);
```

Operations method:
```php
$client->operations()->packages()->getPackageVersionForAuthenticatedUser(        package_type: 'generated',
        package_name: 'generated',
        package_version_id: 18,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/packages#get-a-package-version-for-the-authenticated-user).


### packages/delete-package-version-for-authenticated-user

Delete a package version for the authenticated user

Using the `call` method:
```php
$client->call('DELETE /user/packages/{package_type}/{package_name}/versions/{package_version_id}', [
        'package_type' => 'generated',
        'package_name' => 'generated',
        'package_version_id' => 18,
]);
```

Operations method:
```php
$client->operations()->packages()->deletePackageVersionForAuthenticatedUser(        package_type: 'generated',
        package_name: 'generated',
        package_version_id: 18,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/packages#delete-a-package-version-for-the-authenticated-user).


### packages/restore-package-version-for-authenticated-user

Restore a package version for the authenticated user

Using the `call` method:
```php
$client->call('POST /user/packages/{package_type}/{package_name}/versions/{package_version_id}/restore', [
        'package_type' => 'generated',
        'package_name' => 'generated',
        'package_version_id' => 18,
]);
```

Operations method:
```php
$client->operations()->packages()->restorePackageVersionForAuthenticatedUser(        package_type: 'generated',
        package_name: 'generated',
        package_version_id: 18,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/packages#restore-a-package-version-for-the-authenticated-user).


### projects/create-for-authenticated-user

Create a user project

Using the `call` method:
```php
$client->call('POST /user/projects');
```

Operations method:
```php
$client->operations()->projects()->createForAuthenticatedUser();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/projects#create-a-user-project).


### users/list-public-emails-for-authenticated-user

List public email addresses for the authenticated user

Using the `call` method:
```php
$client->call('GET /user/public_emails', [
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->users()->listPublicEmailsForAuthenticatedUser(        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/users#list-public-email-addresses-for-the-authenticated-user).


### repos/list-for-authenticated-user

List repositories for the authenticated user

Using the `call` method:
```php
$client->call('GET /user/repos', [
        'direction' => 'generated',
        'since' => '1970-01-01T00:00:00+00:00',
        'before' => '1970-01-01T00:00:00+00:00',
        'visibility' => 'generated',
        'affiliation' => 'generated',
        'type' => 'generated',
        'sort' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listForAuthenticatedUser(        direction: 'generated',
        since: '1970-01-01T00:00:00+00:00',
        before: '1970-01-01T00:00:00+00:00',
        visibility: 'generated',
        affiliation: 'generated',
        type: 'generated',
        sort: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#list-repositories-for-the-authenticated-user).


### repos/create-for-authenticated-user

Create a repository for the authenticated user

Using the `call` method:
```php
$client->call('POST /user/repos');
```

Operations method:
```php
$client->operations()->repos()->createForAuthenticatedUser();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#create-a-repository-for-the-authenticated-user).


### repos/list-invitations-for-authenticated-user

List repository invitations for the authenticated user

Using the `call` method:
```php
$client->call('GET /user/repository_invitations', [
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listInvitationsForAuthenticatedUser(        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/collaborators/invitations#list-repository-invitations-for-the-authenticated-user).


### repos/decline-invitation-for-authenticated-user

Decline a repository invitation

Using the `call` method:
```php
$client->call('DELETE /user/repository_invitations/{invitation_id}', [
        'invitation_id' => 13,
]);
```

Operations method:
```php
$client->operations()->repos()->declineInvitationForAuthenticatedUser(        invitation_id: 13,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/collaborators/invitations#decline-a-repository-invitation).


### repos/accept-invitation-for-authenticated-user

Accept a repository invitation

Using the `call` method:
```php
$client->call('PATCH /user/repository_invitations/{invitation_id}', [
        'invitation_id' => 13,
]);
```

Operations method:
```php
$client->operations()->repos()->acceptInvitationForAuthenticatedUser(        invitation_id: 13,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/collaborators/invitations#accept-a-repository-invitation).


### users/list-social-accounts-for-authenticated-user

List social accounts for the authenticated user

Using the `call` method:
```php
$client->call('GET /user/social_accounts', [
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->users()->listSocialAccountsForAuthenticatedUser(        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/users/social-accounts#list-social-accounts-for-the-authenticated-user).


### users/add-social-account-for-authenticated-user

Add social accounts for the authenticated user

Using the `call` method:
```php
$client->call('POST /user/social_accounts');
```

Operations method:
```php
$client->operations()->users()->addSocialAccountForAuthenticatedUser();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/users/social-accounts#add-social-account-for-authenticated-user).


### users/delete-social-account-for-authenticated-user

Delete social accounts for the authenticated user

Using the `call` method:
```php
$client->call('DELETE /user/social_accounts');
```

Operations method:
```php
$client->operations()->users()->deleteSocialAccountForAuthenticatedUser();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/users/social-accounts#delete-social-account-for-authenticated-user).


### users/list-ssh-signing-keys-for-authenticated-user

List SSH signing keys for the authenticated user

Using the `call` method:
```php
$client->call('GET /user/ssh_signing_keys', [
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->users()->listSshSigningKeysForAuthenticatedUser(        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/users#list-public-ssh-signing-keys-for-the-authenticated-user).


### users/create-ssh-signing-key-for-authenticated-user

Create a SSH signing key for the authenticated user

Using the `call` method:
```php
$client->call('POST /user/ssh_signing_keys');
```

Operations method:
```php
$client->operations()->users()->createSshSigningKeyForAuthenticatedUser();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/users#create-an-ssh-signing-key-for-the-authenticated-user).


### users/get-ssh-signing-key-for-authenticated-user

Get an SSH signing key for the authenticated user

Using the `call` method:
```php
$client->call('GET /user/ssh_signing_keys/{ssh_signing_key_id}', [
        'ssh_signing_key_id' => 18,
]);
```

Operations method:
```php
$client->operations()->users()->getSshSigningKeyForAuthenticatedUser(        ssh_signing_key_id: 18,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/users#get-a-ssh-signing-key-for-the-authenticated-user).


### users/delete-ssh-signing-key-for-authenticated-user

Delete an SSH signing key for the authenticated user

Using the `call` method:
```php
$client->call('DELETE /user/ssh_signing_keys/{ssh_signing_key_id}', [
        'ssh_signing_key_id' => 18,
]);
```

Operations method:
```php
$client->operations()->users()->deleteSshSigningKeyForAuthenticatedUser(        ssh_signing_key_id: 18,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/users#delete-a-ssh-signing-key-for-the-authenticated-user).


### activity/list-repos-starred-by-authenticated-user

List repositories starred by the authenticated user

Using the `call` method:
```php
$client->call('GET /user/starred', [
        'sort' => 'generated',
        'direction' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->activity()->listReposStarredByAuthenticatedUser(        sort: 'generated',
        direction: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/activity#list-repositories-starred-by-the-authenticated-user).


### activity/check-repo-is-starred-by-authenticated-user

Check if a repository is starred by the authenticated user

Using the `call` method:
```php
$client->call('GET /user/starred/{owner}/{repo}', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->activity()->checkRepoIsStarredByAuthenticatedUser(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/activity#check-if-a-repository-is-starred-by-the-authenticated-user).


### activity/star-repo-for-authenticated-user

Star a repository for the authenticated user

Using the `call` method:
```php
$client->call('PUT /user/starred/{owner}/{repo}', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->activity()->starRepoForAuthenticatedUser(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/activity#star-a-repository-for-the-authenticated-user).


### activity/unstar-repo-for-authenticated-user

Unstar a repository for the authenticated user

Using the `call` method:
```php
$client->call('DELETE /user/starred/{owner}/{repo}', [
        'owner' => 'generated',
        'repo' => 'generated',
]);
```

Operations method:
```php
$client->operations()->activity()->unstarRepoForAuthenticatedUser(        owner: 'generated',
        repo: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/activity#unstar-a-repository-for-the-authenticated-user).


### activity/list-watched-repos-for-authenticated-user

List repositories watched by the authenticated user

Using the `call` method:
```php
$client->call('GET /user/subscriptions', [
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->activity()->listWatchedReposForAuthenticatedUser(        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/activity#list-repositories-watched-by-the-authenticated-user).


### teams/list-for-authenticated-user

List teams for the authenticated user

Using the `call` method:
```php
$client->call('GET /user/teams', [
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->teams()->listForAuthenticatedUser(        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/teams#list-teams-for-the-authenticated-user).


### users/list

List users

Using the `call` method:
```php
$client->call('GET /users', [
        'since' => 5,
        'per_page' => 8,
]);
```

Operations method:
```php
$client->operations()->users()->list(        since: 5,
        per_page: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/users#list-users).


### users/get-by-username

Get a user

Using the `call` method:
```php
$client->call('GET /users/{username}', [
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->users()->getByUsername(        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/users#get-a-user).


### packages/list-docker-migration-conflicting-packages-for-user

Get list of conflicting packages during Docker migration for user

Using the `call` method:
```php
$client->call('GET /users/{username}/docker/conflicts', [
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->packages()->listDockerMigrationConflictingPackagesForUser(        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/packages#list-docker-migration-conflicting-packages-for-user).


### activity/list-events-for-authenticated-user

List events for the authenticated user

Using the `call` method:
```php
$client->call('GET /users/{username}/events', [
        'username' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->activity()->listEventsForAuthenticatedUser(        username: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/activity#list-events-for-the-authenticated-user).


### activity/list-org-events-for-authenticated-user

List organization events for the authenticated user

Using the `call` method:
```php
$client->call('GET /users/{username}/events/orgs/{org}', [
        'username' => 'generated',
        'org' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->activity()->listOrgEventsForAuthenticatedUser(        username: 'generated',
        org: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/activity#list-organization-events-for-the-authenticated-user).


### activity/list-public-events-for-user

List public events for a user

Using the `call` method:
```php
$client->call('GET /users/{username}/events/public', [
        'username' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->activity()->listPublicEventsForUser(        username: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/activity#list-public-events-for-a-user).


### users/list-followers-for-user

List followers of a user

Using the `call` method:
```php
$client->call('GET /users/{username}/followers', [
        'username' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->users()->listFollowersForUser(        username: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/users#list-followers-of-a-user).


### users/list-following-for-user

List the people a user follows

Using the `call` method:
```php
$client->call('GET /users/{username}/following', [
        'username' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->users()->listFollowingForUser(        username: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/users#list-the-people-a-user-follows).


### users/check-following-for-user

Check if a user follows another user

Using the `call` method:
```php
$client->call('GET /users/{username}/following/{target_user}', [
        'username' => 'generated',
        'target_user' => 'generated',
]);
```

Operations method:
```php
$client->operations()->users()->checkFollowingForUser(        username: 'generated',
        target_user: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/users#check-if-a-user-follows-another-user).


### gists/list-for-user

List gists for a user

Using the `call` method:
```php
$client->call('GET /users/{username}/gists', [
        'username' => 'generated',
        'since' => '1970-01-01T00:00:00+00:00',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->gists()->listForUser(        username: 'generated',
        since: '1970-01-01T00:00:00+00:00',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/gists#list-gists-for-a-user).


### users/list-gpg-keys-for-user

List GPG keys for a user

Using the `call` method:
```php
$client->call('GET /users/{username}/gpg_keys', [
        'username' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->users()->listGpgKeysForUser(        username: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/users#list-gpg-keys-for-a-user).


### users/get-context-for-user

Get contextual information for a user

Using the `call` method:
```php
$client->call('GET /users/{username}/hovercard', [
        'username' => 'generated',
        'subject_type' => 'generated',
        'subject_id' => 'generated',
]);
```

Operations method:
```php
$client->operations()->users()->getContextForUser(        username: 'generated',
        subject_type: 'generated',
        subject_id: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/users#get-contextual-information-for-a-user).


### apps/get-user-installation

Get a user installation for the authenticated app

Using the `call` method:
```php
$client->call('GET /users/{username}/installation', [
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->apps()->getUserInstallation(        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/apps#get-a-user-installation-for-the-authenticated-app).


### users/list-public-keys-for-user

List public keys for a user

Using the `call` method:
```php
$client->call('GET /users/{username}/keys', [
        'username' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->users()->listPublicKeysForUser(        username: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/users#list-public-keys-for-a-user).


### orgs/list-for-user

List organizations for a user

Using the `call` method:
```php
$client->call('GET /users/{username}/orgs', [
        'username' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->orgs()->listForUser(        username: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/orgs#list-organizations-for-a-user).


### packages/list-packages-for-user

List packages for a user

Using the `call` method:
```php
$client->call('GET /users/{username}/packages', [
        'package_type' => 'generated',
        'visibility' => 'generated',
        'username' => 'generated',
        'page' => 4,
        'per_page' => 8,
]);
```

Operations method:
```php
$client->operations()->packages()->listPackagesForUser(        package_type: 'generated',
        visibility: 'generated',
        username: 'generated',
        page: 4,
        per_page: 8,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/packages#list-packages-for-user).


### packages/get-package-for-user

Get a package for a user

Using the `call` method:
```php
$client->call('GET /users/{username}/packages/{package_type}/{package_name}', [
        'package_type' => 'generated',
        'package_name' => 'generated',
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->packages()->getPackageForUser(        package_type: 'generated',
        package_name: 'generated',
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/packages#get-a-package-for-a-user).


### packages/delete-package-for-user

Delete a package for a user

Using the `call` method:
```php
$client->call('DELETE /users/{username}/packages/{package_type}/{package_name}', [
        'package_type' => 'generated',
        'package_name' => 'generated',
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->packages()->deletePackageForUser(        package_type: 'generated',
        package_name: 'generated',
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/packages#delete-a-package-for-a-user).


### packages/restore-package-for-user

Restore a package for a user

Using the `call` method:
```php
$client->call('POST /users/{username}/packages/{package_type}/{package_name}/restore', [
        'package_type' => 'generated',
        'package_name' => 'generated',
        'username' => 'generated',
        'token' => 'generated',
]);
```

Operations method:
```php
$client->operations()->packages()->restorePackageForUser(        package_type: 'generated',
        package_name: 'generated',
        username: 'generated',
        token: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/packages#restore-a-package-for-a-user).


### packages/get-all-package-versions-for-package-owned-by-user

List package versions for a package owned by a user

Using the `call` method:
```php
$client->call('GET /users/{username}/packages/{package_type}/{package_name}/versions', [
        'package_type' => 'generated',
        'package_name' => 'generated',
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->packages()->getAllPackageVersionsForPackageOwnedByUser(        package_type: 'generated',
        package_name: 'generated',
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/packages#get-all-package-versions-for-a-package-owned-by-a-user).


### packages/get-package-version-for-user

Get a package version for a user

Using the `call` method:
```php
$client->call('GET /users/{username}/packages/{package_type}/{package_name}/versions/{package_version_id}', [
        'package_type' => 'generated',
        'package_name' => 'generated',
        'package_version_id' => 18,
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->packages()->getPackageVersionForUser(        package_type: 'generated',
        package_name: 'generated',
        package_version_id: 18,
        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/packages#get-a-package-version-for-a-user).


### packages/delete-package-version-for-user

Delete package version for a user

Using the `call` method:
```php
$client->call('DELETE /users/{username}/packages/{package_type}/{package_name}/versions/{package_version_id}', [
        'package_type' => 'generated',
        'package_name' => 'generated',
        'username' => 'generated',
        'package_version_id' => 18,
]);
```

Operations method:
```php
$client->operations()->packages()->deletePackageVersionForUser(        package_type: 'generated',
        package_name: 'generated',
        username: 'generated',
        package_version_id: 18,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/packages#delete-a-package-version-for-a-user).


### packages/restore-package-version-for-user

Restore package version for a user

Using the `call` method:
```php
$client->call('POST /users/{username}/packages/{package_type}/{package_name}/versions/{package_version_id}/restore', [
        'package_type' => 'generated',
        'package_name' => 'generated',
        'username' => 'generated',
        'package_version_id' => 18,
]);
```

Operations method:
```php
$client->operations()->packages()->restorePackageVersionForUser(        package_type: 'generated',
        package_name: 'generated',
        username: 'generated',
        package_version_id: 18,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/packages#restore-a-package-version-for-a-user).


### projects/list-for-user

List user projects

Using the `call` method:
```php
$client->call('GET /users/{username}/projects', [
        'username' => 'generated',
        'state' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->projects()->listForUser(        username: 'generated',
        state: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/projects#list-user-projects).


### activity/list-received-events-for-user

List events received by the authenticated user

Using the `call` method:
```php
$client->call('GET /users/{username}/received_events', [
        'username' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->activity()->listReceivedEventsForUser(        username: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/activity#list-events-received-by-the-authenticated-user).


### activity/list-received-public-events-for-user

List public events received by a user

Using the `call` method:
```php
$client->call('GET /users/{username}/received_events/public', [
        'username' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->activity()->listReceivedPublicEventsForUser(        username: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/activity#list-public-events-received-by-a-user).


### repos/list-for-user

List repositories for a user

Using the `call` method:
```php
$client->call('GET /users/{username}/repos', [
        'username' => 'generated',
        'direction' => 'generated',
        'type' => 'generated',
        'sort' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->repos()->listForUser(        username: 'generated',
        direction: 'generated',
        type: 'generated',
        sort: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/repos#list-repositories-for-a-user).


### billing/get-github-actions-billing-user

Get GitHub Actions billing for a user

Using the `call` method:
```php
$client->call('GET /users/{username}/settings/billing/actions', [
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->billing()->getGithubActionsBillingUser(        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/billing#get-github-actions-billing-for-a-user).


### billing/get-github-packages-billing-user

Get GitHub Packages billing for a user

Using the `call` method:
```php
$client->call('GET /users/{username}/settings/billing/packages', [
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->billing()->getGithubPackagesBillingUser(        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/billing#get-github-packages-billing-for-a-user).


### billing/get-shared-storage-billing-user

Get shared storage billing for a user

Using the `call` method:
```php
$client->call('GET /users/{username}/settings/billing/shared-storage', [
        'username' => 'generated',
]);
```

Operations method:
```php
$client->operations()->billing()->getSharedStorageBillingUser(        username: 'generated',
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/billing#get-shared-storage-billing-for-a-user).


### users/list-social-accounts-for-user

List social accounts for a user

Using the `call` method:
```php
$client->call('GET /users/{username}/social_accounts', [
        'username' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->users()->listSocialAccountsForUser(        username: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/users/social-accounts#list-social-accounts-for-a-user).


### users/list-ssh-signing-keys-for-user

List SSH signing keys for a user

Using the `call` method:
```php
$client->call('GET /users/{username}/ssh_signing_keys', [
        'username' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->users()->listSshSigningKeysForUser(        username: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/users#list-ssh-signing-keys-for-a-user).


### activity/list-repos-starred-by-user

List repositories starred by a user

Using the `call` method:
```php
$client->call('GET /users/{username}/starred', [
        'username' => 'generated',
        'sort' => 'generated',
        'direction' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->activity()->listReposStarredByUser(        username: 'generated',
        sort: 'generated',
        direction: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/activity#list-repositories-starred-by-a-user).


### activity/list-repos-watched-by-user

List repositories watched by a user

Using the `call` method:
```php
$client->call('GET /users/{username}/subscriptions', [
        'username' => 'generated',
        'per_page' => 8,
        'page' => 4,
]);
```

Operations method:
```php
$client->operations()->activity()->listReposWatchedByUser(        username: 'generated',
        per_page: 8,
        page: 4,
);
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/activity#list-repositories-watched-by-a-user).


### meta/get-all-versions

Get all API versions

Using the `call` method:
```php
$client->call('GET /versions');
```

Operations method:
```php
$client->operations()->meta()->getAllVersions();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/reference/meta#get-all-api-versions).


### meta/get-zen

Get the Zen of GitHub

Using the `call` method:
```php
$client->call('GET /zen');
```

Operations method:
```php
$client->operations()->meta()->getZen();
```

You can find more about this operation over at the [API method documentation](https://docs.github.com/rest/meta#get-the-zen-of-github).


