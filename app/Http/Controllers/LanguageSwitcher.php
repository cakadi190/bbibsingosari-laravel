<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LanguageSwitcher extends Controller
{
    /**
     * Invoke the controller to switch the language.
     *
     * @param string $locale The language to switch to.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(string $locale, Request $request): RedirectResponse
    {
        $request->session()->put('locale', $locale);
        return redirect()->route('login');
    }
}
