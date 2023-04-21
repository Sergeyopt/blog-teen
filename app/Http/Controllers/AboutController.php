<?php

namespace App\Http\Controllers;

use App\Models\TextModel;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AboutController extends Controller
{
    public function aboutUs() : View
    {
        $about = TextModel::query()
            ->where('key', '=', 'about-us')
            ->where('active', '=', true)
            ->first();
        if (!$about)
        {
            throw new NotFoundHttpException();
        }

        return view('about', compact('about'));
    }
}
