<?php
declare(strict_types=1);

namespace WyriHaximus\Github\Resource;

use Psr\Http\Message\ResponseInterface;
use Rx\Observable;
use Rx\ObserverInterface;
use Rx\SchedulerInterface;
use WyriHaximus\ApiClient\Transport\Client;

trait PagingTrait
{
    abstract function getTransport(): Client;

    protected function iteratePages(string $path): Observable\AnonymousObservable
    {
        return Observable::create(function (
            ObserverInterface $observer,
            SchedulerInterface $scheduler
        ) use ($path) {
            $this->getTransport()->
                requestRaw($path)->
                then(function($response) use ($observer) {
                    $this->handleResponse($response, $observer);
                })
            ;
        });
    }

    private function handleResponse(ResponseInterface $response, ObserverInterface $observer)
    {
        if (!$response->hasHeader('link')) {
            $this->handleResponseContents($response, $observer);
            $observer->onCompleted();
            return;
        }

        $links = [
            'next' => false,
            'last' => false,
        ];
        foreach (explode(', ', $response->getHeader('link')[0]) as $link) {
            list($url, $rel) = explode('>; rel="', ltrim(rtrim($link, '"'), '<'));
            if (isset($links[$rel])) {
                $links[$rel] = $url;
            }
        }

        if ($links['next'] === false || $links['last'] === false) {
            $this->handleResponseContents($response, $observer);
            $observer->onCompleted();
            return;
        }

        if ($links['next'] == $links['last']) {
            $this->handleResponseContents($response, $observer);
            $observer->onCompleted();
            return;
        }

        list(, $path) = explode($this->getTransport()->getBaseURL(), $links['next']);

        $this->getTransport()->
            requestRaw($path)->
            then(function($response) use ($observer) {
                $this->handleResponse($response, $observer);
            })
        ;

        $this->handleResponseContents($response, $observer);
    }

    private function handleResponseContents(ResponseInterface $response, ObserverInterface $observer)
    {
        $this->getTransport()->
            jsonDecode($response->getBody()->getContents())->
            then(function ($json) use ($observer) {
                $observer->onNext($json);
            })
        ;
    }
}
