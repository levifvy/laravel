<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Carbon\Carbon;

class NewsController extends Controller
{
    public function index()
    {
        // Obtener todas las noticias de la base de datos
        $news = News::orderBy('published_at', 'desc')->paginate(10);

         // Convertir published_at a Carbon
        $news->transform(function ($item) {
            $item->published_at = Carbon::parse($item->published_at);
            return $item;
        });

        // Retornar la vista con las noticias
        return view('news.index', compact('news'));
    }

    public function show($id)
    {
        // Obtener una noticia específica
        $newsItem = News::findOrFail($id);

         // Convertir published_at a Carbon
        $newsItem->published_at = Carbon::parse($newsItem->published_at);

        // Retornar la vista de detalle
        return view('news.show', compact('newsItem'));
    }
}