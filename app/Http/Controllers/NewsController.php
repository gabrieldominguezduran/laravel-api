<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display all news by page.
     *
     * @param  int  $currentPage
     * @return \Illuminate\Http\Response
     */

    public function index($page)
    {

        return News::select(['id', 'title', 'author_id', 'category_id', 'date_published'])->paginate(10, ['*'], $page, $page);
    }

    /**
     * Display specified news.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return News::find($id);
    }

    /**
     * Display news by categories.
     *
     * @param  int  $category_id
     * @return \Illuminate\Http\Response
     */

    public function showCategory($category_id, $page)
    {
        return News::where('category_id', $category_id)->select(['id', 'title', 'category_id', 'date_published'])->paginate(10, ['*'], $page, $page);
    }

    /**
     * Display news by author.
     *
     * @param  int  $author_id
     * @return \Illuminate\Http\Response
     */

    public function showAuthor($author_id)
    {
        return News::where('author_id', $author_id)->get(['id', 'title', 'author_id', 'date_published']);
    }
}
