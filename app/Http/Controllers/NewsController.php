<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        // Obtener todas las noticias de la base de datos
        $news = News::orderBy('published_at', 'desc')->paginate(10);

        // Retornar la vista con las noticias
        return view('news.index', compact('news'));
    }

    public function show($id)
    {
        // Obtener una noticia específica
        $newsItem = News::findOrFail($id);

        // Retornar la vista de detalle
        return view('news.show', compact('newsItem'));
    }
}
