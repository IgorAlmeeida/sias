<?php

namespace App\Providers;

use App\Models\Anexo;
use App\Models\Candidato;
use App\Models\Edital;
use App\Models\Programa;
use App\Models\Beneficiario;
use  App\Models\Bolsa;
use App\Models\Conta;
use App\Models\Familia;
use App\Models\User;

use App\Policies\AnexoPolicy;
use App\Policies\BolsaPolicy;
use App\Policies\CandidatoPolicy;
use App\Policies\EditalPolicy;
use App\Policies\ProgramaPolicy;
use App\Policies\ContaPolicy;
use App\Policies\BeneficiarioPolicy;
use App\Policies\FamiliaPolicy;
use App\Policies\UserPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;


use App\Models\Servidor;
use App\Policies\ServidorPolicy;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */

    protected $policies = [
        Conta::class => ContaPolicy::class,
        Beneficiario::class => BeneficiarioPolicy::class,
        Bolsa::class => BolsaPolicy::class,
        Programa::class => ProgramaPolicy::class,
        Anexo::class => AnexoPolicy::class,
        Edital::class => EditalPolicy::class,
        Servidor::class => ServidorPolicy::class,
        Candidato::class => CandidatoPolicy::class,
        Familia::class => FamiliaPolicy::class,
        User::class => UserPolicy::class
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
