<?php

use App\Service\RestRouter;

$router = new RestRouter($container['router'], $config['settings']['rest']);

/**
 *         URL          |           CONTROLLER            |     ROUTE
 * ---------------------|---------------------------------|----------------
 * GET /articles        | ArticleController:getArticle    | get_articles
 * GET /articles/{id}   | ArticleController:getArticles   | get_article
 * POST /articles       | ArticleController:postArticle   | post_article
 * PUT /articles/{id}   | ArticleController:putArticle    | put_article
 * DELETE /article/{id} | ArticleController:deleteArticle | delete_article
 */
$router->CRUD('articles', 'ArticleController');

// OR

// $router->cget('articles', 'ArticleController');
// $router->get('articles', 'ArticleController');
// $router->post('articles', 'ArticleController');
// $router->put('articles', 'ArticleController');
// $router->delete('articles', 'ArticleController');

/***********************************************************/
/* -------------------- SUB RESOURCES -------------------- */
/***********************************************************/

/**
 *                URL                 |                   CONTROLLER                  |        ROUTE
 * -----------------------------------|-----------------------------------------------|------------------------
 * GET /articles/{id}/comments        | ArticleCommentController:getArticleComments   | get_article_comments
 * GET /articles/{id}/comments/{id}   | ArticleCommentController:getArticleComment    | get_article_comment
 * POST /articles/{id}/comments       | ArticleCommentController:postArticleComment   | post_article_comment
 * PUT /articles/{id}/comments/{id}   | ArticleCommentController:putArticleComment    | put_article_comment
 * DELETE /article/{id}/comments/{id} | ArticleCommentController:deleteArticleComment | delete_article_comment
 */
$router->subCRUD('articles', 'comments', 'ArticleCommentController');

// OR

// $router->cgetSub('articles', 'comments', 'ArticleController');
// $router->getSub('articles', 'comments', 'ArticleController');
// $router->postSub('articles', 'comments', 'ArticleController');
// $router->putSub('articles', 'comments', 'ArticleController');
// $router->deleteSub('articles', 'comments', 'ArticleController');
