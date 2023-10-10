<?php

declare(strict_types=1);

namespace Api\Client\Endpoint;

use Api\Client\HttpClient\Message\ResponseMediator;
use Api\Client\Sdk;

final class Todos {
    private Sdk $sdk;

    public function __construct(Sdk $sdk) {
        $this->sdk = $sdk;
    }

    // All todos
    public function all(): array {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->get('/todos'));
    }

    // All post
    public function allPosts(): array {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->get('/posts'));
    }
}