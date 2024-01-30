<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class hero extends Component
{
    public $states;
    public $categories;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->states = [
            ['value' => 'AC', 'name' => 'Acre'],
            ['value' => 'AL', 'name' => 'Alagoas'],
            ['value' => 'AP', 'name' => 'Amapá'],
            ['value' => 'AM', 'name' => 'Amazonas'],
            ['value' => 'BA', 'name' => 'Bahia'],
            ['value' => 'CE', 'name' => 'Ceará'],
            ['value' => 'DF', 'name' => 'Distrito Federal'],
            ['value' => 'ES', 'name' => 'Espírito Santo'],
            ['value' => 'GO', 'name' => 'Goiás'],
            ['value' => 'MA', 'name' => 'Maranhão'],
            ['value' => 'MT', 'name' => 'Mato Grosso'],
            ['value' => 'MS', 'name' => 'Mato Grosso do Sul'],
            ['value' => 'MG', 'name' => 'Minas Gerais'],
            ['value' => 'PA', 'name' => 'Pará'],
            ['value' => 'PB', 'name' => 'Paraíba'],
            ['value' => 'PR', 'name' => 'Paraná'],
            ['value' => 'PE', 'name' => 'Pernambuco'],
            ['value' => 'PI', 'name' => 'Piauí'],
            ['value' => 'RJ', 'name' => 'Rio de Janeiro'],
            ['value' => 'RN', 'name' => 'Rio Grande do Norte'],
            ['value' => 'RS', 'name' => 'Rio Grande do Sul'],
            ['value' => 'RO', 'name' => 'Rondônia'],
            ['value' => 'RR', 'name' => 'Roraima'],
            ['value' => 'SC', 'name' => 'Santa Catarina'],
            ['value' => 'SP', 'name' => 'São Paulo'],
            ['value' => 'SE', 'name' => 'Sergipe'],
            ['value' => 'TO', 'name' => 'Tocantins'],
        ];
        $this->categories = [
            ['value' => 'Categoria 1', 'name' => 'Carros'],
            ['value' => 'Categoria 2', 'name' => 'Eletrônicos'],
            ['value' => 'Categoria 3', 'name' => 'Roupas'],
            ['value' => 'Categoria 4', 'name' => 'Esportes'],
            ['value' => 'Categoria 5', 'name' => 'Bebês'],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.hero');
    }
}
