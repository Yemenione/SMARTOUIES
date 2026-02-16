<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Landing', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'projects' => \App\Models\Project::limit(3)->get(), // Only show recent 3 on landing
    ]);
})->name('home');

Route::get('/about', function () {
    return Inertia::render('About', [
        'team' => \App\Models\TeamMember::all(),
    ]);
})->name('about');

Route::get('/services', function () {
    return Inertia::render('Services', [
        'services' => \App\Models\Service::where('is_active', true)->orderBy('sort_order')->get(),
    ]);
})->name('services');

Route::get('/portfolio', function () {
    return Inertia::render('Portfolio', [
        'projects' => \App\Models\Project::all(),
    ]);
})->name('portfolio');

Route::get('/portfolio/{project}', function (\App\Models\Project $project) {
    return Inertia::render('Project/Show', [
        'project' => $project,
    ]);
 })->name('portfolio.show');

Route::get('/contact', function () {
    return Inertia::render('Contact');
})->name('contact');

Route::post('/contact', function (\Illuminate\Http\Request $request) {
    $validated = $request->validate([
        'first-name' => 'nullable|string|max:255',
        'last-name' => 'nullable|string|max:255',
        'name' => 'nullable|string|max:255',
        'email' => 'required|email|max:255',
        'phone-number' => 'nullable|string|max:20',
        'message' => 'required|string',
    ]);

    $fullName = $validated['name'] ?? trim(($validated['first-name'] ?? '') . ' ' . ($validated['last-name'] ?? ''));

    \App\Models\ContactMessage::create([
        'name' => $fullName ?: 'Unknown',
        'email' => $validated['email'],
        'phone' => $validated['phone-number'] ?? null,
        'message' => $validated['message'],
    ]);

    return redirect()->back()->with('success', 'Message sent successfully!');
})->name('contact.store');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/cmd/{key}/{command}', function ($key, $command) {
    if ($key !== env('APP_KEY')) {
        abort(403);
    }
    
    // Allow only specific safe commands
    $allowed = ['migrate', 'optimize:clear', 'storage:link', 'route:cache', 'config:cache', 'view:cache'];
    
    if (!in_array($command, $allowed)) {
        return 'Command not allowed';
    }
    
    try {
        Artisan::call($command, ['--force' => true]);
        return "Command '$command' executed successfully.<br><pre>" . Artisan::output() . "</pre>";
    } catch (\Exception $e) {
        return "Error: " . $e->getMessage();
    }
});

require __DIR__.'/auth.php';
