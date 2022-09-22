<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Models\News;
use Illuminate\Support\Facades\Cache;

class NewsController extends Controller
{
    public function __construct(News $news)
    {
        $this->news = $news;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /**
         * adicionar dados no cache com pretis:
         * o método put espera 3 parâmetros
         * chave, valor, tempo em segundos para 
         * experirar os dados da memória
         */

        // Cache::put('chave', 'valor', 10);

        /**
         * recuperar dados do cache com pretis:
         * o método get espera somente a chave
         */

        // $value_cache = Cache::get('chave');

        /**
         * realizando o teste, inserindo o dado
         * e comentando a linha da inserção
         * dentro de 10 segundos $value_cache retorna null
         */

        // dd($value_cache);

        // ---------------------------------------------------------

        // nome da chave a ser salva no cache
        $cache_key = 'first_news';
        // tempo de expiração do cache em segundos
        $cache_time = 120;
        // array a ser retornado para view
        $data = [];

        /**
         * metodo has() verificar se a cache existe no cache
         * caso existir os dados vão ser recuperados do cache
         * caso contrário será feito um novo request para o banco
         * e salvo os novos dados em cache, dessa forma toda requisição
         * feita dentro do tempo limite pré-configurado vai utilizar o
         * cache diminuindo o consumo do banco de dados.
         */
        if (Cache::has($cache_key)) {
            $data = Cache::get($cache_key);
        } else {
            $data = $this->news->orderByDesc('created_at')->limit(10)->get();
            Cache::put($cache_key, $data, $cache_time);
        }
        // retorna os dados para view
        return view('welcome', ['news' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNewsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNewsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNewsRequest  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
    }
}
