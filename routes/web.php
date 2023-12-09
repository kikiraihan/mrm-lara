<?php

use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Admin\PortfolioAdd;
use App\Http\Livewire\Admin\PortfolioAddGambar;
use App\Http\Livewire\Admin\PortfolioDetail as AdminPortfolioDetail;
use App\Http\Livewire\Admin\PortfolioEdit;
use App\Http\Livewire\Admin\PortfolioIndex;
use App\Http\Livewire\Landing\Home;
use App\Http\Livewire\Landing\Portfolio;
use App\Http\Livewire\Landing\PortfolioShow;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', Home::class)->name('landing.home');
Route::get('/portfolio', Portfolio::class)->name('landing.portfolio');
Route::get('/portfolio/show/{id}', PortfolioShow::class)->name('landing.portfolio.show');

Route::get('/admin/dashboard', Dashboard::class)->name('admin.dashboard');
Route::get('/admin/portfolio', PortfolioIndex::class)->name('admin.portfolio');
Route::get('/admin/portfolio/add', PortfolioAdd::class)->name('admin.portfolio.add');
Route::get('/admin/portfolio/edit/{id}', PortfolioEdit::class)->name('admin.portfolio.edit');
Route::get('/admin/portfolio/detail/{id}', AdminPortfolioDetail::class)->name('admin.portfolio.detail');
Route::get('/admin/portfolio/{id}/add/gambar', PortfolioAddGambar::class)->name('admin.portfolio.add.gambar');

require __DIR__.'/auth.php';
