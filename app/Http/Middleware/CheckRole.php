<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        // Mendapatkan pengguna yang sedang masuk
        $user = $request->user();

        // Memeriksa peran pengguna dan apakah sesuai dengan peran yang diizinkan
        if ($user && $user->role === $role) {
            return $next($request);
        }

        // Jika peran tidak sesuai, Anda dapat mengarahkannya atau menampilkan pesan kesalahan
        return back();
    }
}
