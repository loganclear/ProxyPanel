<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Node;
use App\Services\ArticleService;
use Illuminate\Http\JsonResponse;

class ArticleController extends Controller
{
    public function index()
    { // 帮助中心
        $data = [];
        if (Node::whereType(0)->whereStatus(1)->exists()) {
            $data[] = 'ss';
        }
        if (Node::whereIn('type', [1, 4])->whereStatus(1)->exists()) {
            $data[] = 'ssr';
        }
        if (Node::whereType(2)->whereStatus(1)->exists()) {
            $data[] = 'v2';
        }
        if (Node::whereType(3)->whereStatus(1)->exists()) {
            $data[] = 'trojan';
        }

        $subscribe = auth()->user()->subscribe;

        return view('user.knowledge', [
            'subType' => $data,
            'subUrl' => route('sub', $subscribe->code),
            'subStatus' => $subscribe->status,
            'subMsg' => $subscribe->ban_desc,
            'knowledges' => Article::type(1)->lang()->orderByDesc('sort')->latest()->get()->groupBy('category'),
        ]);
    }

    public function show(Article $article): JsonResponse
    { // 公告详情
        $articleService = new ArticleService($article);

        return response()->json(['title' => $article->title, 'content' => $articleService->getContent()]);
    }
}
