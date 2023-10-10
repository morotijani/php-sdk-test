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

    // Get post
    public function getPost($id): array {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->get('/posts/' . $id));
    }

    // Create post
    public function createPost(): array {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->post('/posts'));
    }

    // Update post
    public function updatePost($id): array {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->put('/posts/' . $id));
    }

    // Patch post
    public function patchPost($id): array {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->patch('/posts/' . $id));
    }

    // Delete post
    public function deletePost($id): array {
        return ResponseMediator::getContent($this->sdk->getHttpClient()->delete('/posts/' . $id));
    }
}